<?php

namespace TwbsHelper\View\Helper\Navigation;

/**
 * Helper for rendering abbreviations
 */
class Menu extends \Laminas\View\Helper\Navigation\Menu
{
    use \TwbsHelper\View\Helper\HtmlTrait;

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
            $page->setClass(join(
                ' ',
                $this->addClassesAttribute($page->getClass() ?? '', $pageClasses)
            ));
        }

        $ulClasses = [$this->ulClass];
        $itemClasses = [];

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
                $ulClasses[] = $className;
            }
        }

        if (isset($options['vertical']) && is_string($options['vertical'])) {
            $ulClasses[] = $this->getSizeClass($options['vertical'], 'flex-%s-row');
            $itemClasses[] = $this->getSizeClass($options['vertical'], 'flex-%s-fill');
            $itemClasses[] = $this->getSizeClass($options['vertical'], 'text-%s-center');
        }

        $options['ulClass'] = join(' ', $this->addClassesAttribute($options['ulClass'] ?? '', $ulClasses));

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

        if (isset($options['list']) && $options['list'] === false) {
            $content = preg_replace('/(<)ul([^>]*>[\s\S]*<\/)ul([^>]*>)/imU', '$1nav$2nav$3', $content);
            if (!$content) {
                return '';
            }

            $content = preg_replace('/<li[^>]*>\s*(\S(.*\S)?)\s*<\/li[^>]*>/imU', '$1', $content);
            if (!$content) {
                return '';
            }

            // When using a <nav>-based navigation, include .nav-item on the anchors
            // For nav-fill & nav-justified
            if (
                !empty($options['fill'])
                || !empty($options['justified'])
            ) {
                $itemClasses[] = 'nav-item';
            }
        }

        if ($itemClasses) {
            $content = preg_replace(
                '/(<a.*class=")([^"]*"[^>]*>)/imU',
                sprintf(
                    '$1%s$2',
                    $this->getView()->plugin('escapehtmlattr')->__invoke(
                        join(' ', $this->cleanClassesAttribute($itemClasses)) . ' '
                    )
                ),
                $content
            );
        }

        return $content ?? '';
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
        $pageClass = $page->getClass();

        $classes = ['nav-link'];
        if ($page->isActive(true)) {
            $classes[] = 'active';
        }
        if (!$page->isVisible(true)) {
            $classes[] = 'disabled';
        }

        if ($page instanceof \TwbsHelper\Navigation\Page\DropdownPage) {
            $classes[] = 'dropdown-toggle';
            $dropdownOptions = $page->getDropdown();
            $dropdownAttributes = [];
            if (\Laminas\Stdlib\ArrayUtils::isList($dropdownOptions)) {
                $dropdownOptions = ['items' => $dropdownOptions];
            } else {
                if (!empty($dropdownOptions['attributes'])) {
                    $dropdownAttributes = $dropdownOptions['attributes'];
                }
            }
            return trim($this->addProperIndentation($this->getView()->plugin('dropdown')->render([
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
                'attributes' => $this->setClassesToAttributes($dropdownAttributes, $classes)
            ]), true, $this->indentation . $this->indentation));
        }


        $page->setClass(join(' ', $classes));

        if (
            $escapeLabel
            && $this->isHTML($this->translate($page->getLabel(), $page->getTextDomain()))
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
        if (isset($attributes['class'])) {
            if (strstr($attributes['class'], 'disabled')) {
                $attributes['tabindex'] = '-1';
                $attributes['aria-disabled'] = 'true';
            }
            if (strstr($attributes['class'], 'dropdown-toggle')) {
                $attributes['data-toggle'] = 'dropdown';
                $attributes['role'] = 'button';
                $attributes['aria-haspopup'] = 'true';
                $attributes['aria-expanded'] = 'false';
            }
        }

        return parent::htmlAttribs($attributes);
    }
}
