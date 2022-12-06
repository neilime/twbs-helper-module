<?php

namespace TwbsHelper\View\Helper\Navigation;

/**
 * Helper for rendering abbreviations
 */
class Menu extends \Laminas\View\Helper\Navigation\Menu
{
    /**
     * CSS class to use for the ul element.
     *
     * @var string
     */
    protected $ulClass = 'nav';

    /**
     * Whether invisible items should be rendered by this helper
     *
     * @var bool
     */
    protected $renderInvisible = true;

    public function renderMenu($container = null, array $options = [])
    {
        $this->prepareContainer($container);

        $content = parent::renderMenu(
            $container,
            array_merge([
                'liActiveClass' => '',
                'addClassToListItem' => true,
                'onlyActiveBranch' => false,
            ], $options)
        );

        if (!$content) {
            return '';
        }

        return $this->renderMenuItems($content, $options);
    }

    /**
     * @param \Laminas\Navigation\AbstractContainer|string|null $container
     */
    protected function prepareContainer(&$container = null)
    {
        $this->parseContainer($container);
        if (null === $container) {
            $container = $this->getContainer();
        }

        // Create iterator
        $iterator = new \RecursiveIteratorIterator(
            $container,
            \RecursiveIteratorIterator::SELF_FIRST
        );

        foreach ($iterator as $page) {
            $pageClasses = ['nav-item'];
            if ($page instanceof \TwbsHelper\Navigation\Page\DropdownPage) {
                $pageClasses[] = 'dropdown';
            }

            $attributes = $this->getView()->plugin('htmlattributes')
                ->__invoke(['class' => $page->getClass() ?? ''])
                ->merge(['class' => $pageClasses]);

            $page->setClass((string) $attributes['class']);
        }
    }

    protected function renderMenuItems(string $content, array $options): string
    {
        $content = $this->renderMenuItemsNav($content, $options);

        // Clean class attribute
        $content = preg_replace_callback(
            '/(<li.*class=")([^"]*)("[^>]*>)/imU',
            function ($matches) {
                $attributes = $this->getView()->plugin('htmlattributes')
                    ->__invoke(['class' => html_entity_decode($matches[2])]);

                return $matches[1] . $attributes['class'] . $matches[3];
            },
            $content
        );

        if (isset($options['list']) && $options['list'] === false) {
            $content = $this->renderMenuItemsWithoutList($content);
            if (!$content) {
                return '';
            }
        }

        $content = $this->renderMenuItemsLink($content, $options);

        return $content ?: '';
    }

    protected function renderMenuItemsNav(string $content, iterable $options): string
    {
        $isRoot = true;
        $content = preg_replace_callback(
            '/(<ul)([^>]*)(>)/im',
            function ($matches) use ($options, &$isRoot) {
                $navAttributesContent = $matches[2];

                $navAttributesContent = $this->renderMenuItemsNavStyleAttribute(
                    $navAttributesContent,
                    $options,
                    $isRoot
                );

                $navAttributesContent = $this->renderMenuItemsNavClassAttribute(
                    $navAttributesContent,
                    $options,
                    $isRoot
                );

                if ($isRoot) {
                    $isRoot = false;
                }

                return $matches[1] . $navAttributesContent . $matches[3];
            },
            $content
        );

        return $content;
    }

    protected function renderMenuItemsNavStyleAttribute(
        string $navAttributesContent,
        iterable $options,
        bool $isRoot
    ): string {
        // Handle style for root only
        if (!$isRoot) {
            return $navAttributesContent;
        }

        $htmlAttributesHelper = $this->getView()->plugin('htmlattributes');
        $attributes = $htmlAttributesHelper->__invoke([
            'style' => $options['style'] ?? '',
        ]);

        if (preg_match('/(.*style=")([^"]*)(".*)/im', $navAttributesContent, $styleMatches)) {
            $ulAttributes = $attributes->merge(
                $ulAttributes = $htmlAttributesHelper->__invoke([
                    'style' => html_entity_decode($styleMatches[2]),
                ])
            );

            if (!empty($ulAttributes['style'])) {
                $styleAttribute = $this->getView()->plugin('escapehtmlattr')->__invoke($ulAttributes['style']);
                $navAttributesContent = $styleMatches[1] . $styleAttribute . $styleMatches[3];
            } else {
                $navAttributesContent = $styleMatches[1] . $styleMatches[3];
            }
        } elseif (!empty($attributes['style'])) {
            $styleAttribute = $this->getView()->plugin('escapehtmlattr')->__invoke($attributes['style']);
            $navAttributesContent .= ' style="' . $styleAttribute . '"';
        }
        return $navAttributesContent;
    }

    protected function renderMenuItemsNavClassAttribute(
        string $navAttributesContent,
        iterable $options,
        bool $isRoot
    ): string {

        $classes = $this->getMenuItemsNavClasses($options, $isRoot);
        if (!$classes) {
            return $navAttributesContent;
        }

        $attributes = $this->getView()->plugin('htmlattributes')->__invoke(['class' =>  $classes]);

        // Handle class
        if (preg_match('/(.*class=")([^"]*)(".*)/im', $navAttributesContent, $classMatches)) {
            $attributes->merge(['class' => html_entity_decode($classMatches[2])]);

            if (!empty($attributes['class'])) {
                $classAttribute = $this->getView()->plugin('escapehtmlattr')->__invoke($attributes['class']);
                $navAttributesContent = $classMatches[1] . $classAttribute . $classMatches[3];
            } else {
                $navAttributesContent = $classMatches[1] . $classMatches[3];
            }
        } elseif (!empty($attributes['class'])) {
            $classAttribute = $this->getView()->plugin('escapehtmlattr')->__invoke($attributes['class']);
            $navAttributesContent .= ' class="' . $classAttribute . '"';
        }

        return $navAttributesContent;
    }

    protected function getMenuItemsNavClasses(iterable $options, bool $isRoot): iterable
    {
        $isList = !(isset($options['list']) && $options['list'] === false);

        if (!$isRoot && $isList) {
            return [];
        }

        $attributes = $this->getView()->plugin('htmlattributes')->__invoke(['class' => $this->ulClass]);

        if ($isRoot && !empty($options['ulClass'])) {
            $attributes->merge(['class' => $options['ulClass']]);
        }

        $classes = [];
        foreach (
            [
                'tabs' => 'nav-tabs',
                'pills' => 'nav-pills',
                'fill' => 'nav-fill',
                'justified' => 'nav-justified',
                'centered' => 'justify-content-center',
                'right_aligned' => 'justify-content-end',
                'vertical' => 'flex-column',
            ] as $option => $className
        ) {
            if (!empty($options[$option])) {
                $classes[] = $className;
            }
        }

        if (isset($options['vertical']) && is_string($options['vertical'])) {
            $classes = array_merge(
                $classes,
                $this->getView()->plugin('htmlClass')->plugin('size')->getClassesFromOption(
                    $options['vertical'],
                    'flex',
                    'row'
                )
            );
        }

        $attributes->merge(['class' => $classes]);

        if ($isRoot) {
            if (preg_match('/-nav(\s|-[a-z]+|$)/', $attributes['class'])) {
                $attributes->offsetGet('class')->remove('nav');
            }
        }

        return $attributes['class'];
    }

    protected function renderMenuItemsWithoutList(string $content): string
    {
        $count = 1;
        while ($count) {
            $content = preg_replace('/(<)ul([^>]*>[\s\S]*<\/)ul([^>]*>)/imU', '$1nav$2nav$3', $content, -1, $count);
        }

        $count = 1;
        while ($count) {
            $content = preg_replace_callback('/(<li[^>]*>\s*)(\S(.*\S)?)(\s*<\/li[^>]*>)/ismU', function ($matches) {
                return implode(PHP_EOL, array_map(function ($line) {
                    return preg_replace('/^    /', '', $line);
                }, explode(
                    PHP_EOL,
                    $matches[2]
                )));
            }, $content, -1, $count);
        }

        return $content;
    }

    protected function renderMenuItemsLink(string $content, array $options): string
    {
        $itemClasses = [];
        if (isset($options['vertical']) && is_string($options['vertical'])) {
            $itemClasses = array_merge(
                $itemClasses,
                $this->getView()->plugin('htmlClass')->plugin('size')->getClassesFromOption(
                    $options['vertical'],
                    'flex',
                    'fill'
                ),
                $this->getView()->plugin('htmlClass')->plugin('size')->getClassesFromOption(
                    $options['vertical'],
                    'text',
                    'center'
                )
            );
        }

        if ($itemClasses) {
            $attributes = $this->getView()->plugin('htmlattributes')->__invoke(['class' =>  $itemClasses]);

            $classAttribute = $this->getView()->plugin('escapehtmlattr')->__invoke($attributes['class']);

            $content = preg_replace(
                '/(<a.*class=")([^"]*"[^>]*>)/imU',
                sprintf('$1%s$2', $classAttribute),
                $content
            );
        }

        if (!empty($options['page'])) {
            $content = preg_replace(
                '/(<a.*aria-current=")(true)(".*)/imU',
                '$1page$3',
                $content
            );
        }
        return $content;
    }

    /**
     * Returns an HTML string containing an 'a' element for the given page if
     * the page's href is not empty, and a 'span' element if it is empty.
     *
     * Overrides {@link AbstractHelper::htmlify()}.
     *
     * @param \Laminas\Navigation\Page\AbstractPage $page page to generate HTML for
     * @param bool $escapeLabel        Whether or not to escape the label
     * @param bool $addClassToListItem Whether or not to add the page class to the list item
     * @return string
     */
    public function htmlify(
        \Laminas\Navigation\Page\AbstractPage $page,
        $escapeLabel = true,
        $addClassToListItem = false
    ) {
        $classes = ['nav-link'];

        $isActive = $page->isActive(true);
        if ($isActive) {
            $classes[] = 'active';
        }
        if (!$page->isVisible(true)) {
            $classes[] = 'disabled';
        }

        if ($page instanceof \TwbsHelper\Navigation\Page\DropdownPage) {
            $classes[] = 'dropdown-toggle';
            $dropdownOptions = $page->getDropdown();
            $dropdownAttributes = $this->getView()->plugin('htmlattributes')->__invoke(['class' => $classes]);

            if (\Laminas\Stdlib\ArrayUtils::isList($dropdownOptions)) {
                $dropdownOptions = ['items' => $dropdownOptions];
            } else {
                if (!empty($dropdownOptions['attributes'])) {
                    $dropdownAttributes = $this->getView()->plugin('htmlattributes')
                        ->__invoke($dropdownOptions['attributes'])
                        ->merge($dropdownAttributes);
                }
            }

            $dropdownContent = $this->getView()->plugin('dropdown')->render([
                'name' => 'dropdown',
                'options' => [
                    'disable_twbs' => true,
                    'tag' => 'a',
                    'label' => $page->getLabel(),
                    'dropdown' => \Laminas\Stdlib\ArrayUtils::merge(
                        ['disable_container' => true],
                        $dropdownOptions
                    ),
                ],
                'attributes' => $dropdownAttributes,
            ]);

            return trim($this->getView()->plugin('htmlElement')->addProperIndentation(
                $dropdownContent,
                true,
                2
            ));
        }

        $pageClass = $page->getClass();

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke(['class' => $pageClass])
            ->merge(['class' => $classes]);

        $attributes->offsetGet('class')->remove('nav-item');

        $page->setClass((string) $attributes['class']);

        if (
            $escapeLabel
            && $this->getView()->plugin('htmlElement')->isHTML($this->translate(
                $page->getLabel(),
                $page->getTextDomain()
            ))
        ) {
            $escapeLabel = false;
        }

        $html = parent::htmlify($page, $escapeLabel, false);
        $page->setClass($pageClass);
        return $html;
    }

    /**
     * Converts an associative array to a string of tag attributes.
     *
     * Overloads {@link View\Helper\AbstractHtmlElement::htmlAttribs()}.
     *
     * @param  array $attributes  an array where each key-value pair is converted
     *                         to an attribute name and value
     * @return string
     */
    protected function htmlAttribs($attributes)
    {
        $attributes = $this->getView()->plugin('htmlattributes')->__invoke($attributes);
        $classes = $attributes['class']->getArrayCopy();

        if (in_array('disabled', $classes, true)) {
            $attributes['tabindex'] = '-1';
            $attributes['aria-disabled'] = 'true';
        }

        if (in_array('active', $classes, true)) {
            $attributes['aria-current'] = 'true';
        }

        if (in_array('dropdown-toggle', $classes, true)) {
            $attributes['data-bs-toggle'] = 'dropdown';
            $attributes['role'] = 'button';
            $attributes['aria-haspopup'] = 'true';
            $attributes['aria-expanded'] = 'false';
        }

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($attributes)
            ->merge(['class' => $classes]);

        return parent::htmlAttribs($attributes->getArrayCopy());
    }
}
