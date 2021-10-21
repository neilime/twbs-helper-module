<?php

namespace TwbsHelper\View\Helper\Navigation;

/**
 * Helper for rendering navbar
 */
class Navbar extends \Laminas\View\Helper\Navigation\AbstractHelper
{
    use \Laminas\I18n\Translator\TranslatorAwareTrait;
    use \TwbsHelper\View\Helper\HtmlTrait;

    /**
     * View helper entry point.
     *
     * Retrieves helper and optionally sets container to operate on.
     *
     * @param \Laminas\Navigation\AbstractContainer $container [optional] container to operate on
     * @return self|string
     */
    public function __invoke($container = null)
    {
        if (null !== $container) {
            $this->setContainer($container);
        }

        return $this;
    }

    /**
     * Renders navbar.
     *
     * Implements {@link HelperInterface::render()}.
     *
     * @see renderNavbar()
     * @param \Laminas\Navigation\AbstractContainer $container [optional] container to render. Default is
     *     to render the container registered in the helper.
     * @param array $options [optional] options for controlling rendering
     * @return string
     */
    public function render($container = null, array $options = []): string
    {
        return $this->renderNavbar($container, $options);
    }

    /**
     * Renders helper.
     *
     * Renders a HTML 'ul' for the given $container. If $container is not given,
     * the container registered in the helper will be used.
     *
     * Available $options:
     *
     * @param \Laminas\Navigation\AbstractContainer $container [optional] container to create menu from.
     *     Default is to use the container retrieved from {@link getContainer()}.
     * @param array $options [optional] options for controlling rendering
     * @return string
     */
    public function renderNavbar($container = null, array $options = []): string
    {
        $this->parseContainer($container);
        if (null === $container) {
            $container = $this->getContainer();
        }

        $attributes = $options['attributes'] ?? [];
        $id = $attributes['id'] ?? null;
        unset($attributes['id']);

        $classes = ['navbar'];
        if (!isset($options['expand']) || $options['expand'] !== false) {
            $classes[] = $this->getSizeClass(
                $options['expand'] ?? 'lg',
                'navbar-expand'
            );
        }
        if (!isset($options['variant']) || $options['variant'] !== false) {
            $classes[] = $this->getVariantClass(
                $options['variant'] ?? 'light',
                'navbar'
            );
        }
        if (!isset($options['background']) || $options['background'] !== false) {
            $classes[] = $this->getVariantClass(
                $options['background'] ?? 'light',
                'bg'
            );
        }
        if (!empty($options['placement'])) {
            $classes[] = $options['placement'];
        }

        $content = '';

        // Brand
        if (isset($options['brand'])) {
            $content .= $this->renderBrand($options['brand']);
        }

        // Toggler
        if (!isset($options['toggler']) || $options['toggler'] !== false) {
            $content .= ($content ? PHP_EOL : '') . $this->renderToggler(
                $options['toggler'] ?? [],
                $id
            );
        }

        // Nav
        $navContainerAttributes = [];
        if ($id) {
            $navContainerAttributes['id'] = $id;
        }

        $navContent =  $this->renderNav($container, $options['nav'] ?? []);

        // Nav form
        if (isset($options['form'])) {
            $navContent .= ($navContent ? PHP_EOL : '') . $this->renderForm($options['form']);
        }

        // Nav text
        if (isset($options['text'])) {
            $textContent = $this->renderText($options['text']);
            if ($navContent) {
                $navContent .=  PHP_EOL . $textContent;
            } else {
                $content .= ($content ? PHP_EOL : '') . $textContent;
            }
        }

        if ($navContent) {
            $collapse = !isset($options['collapse']) || $options['collapse'] !== false;
            $content .= ($content ? PHP_EOL : '') . ($collapse
                ? $this->htmlElement(
                    'div',
                    $this->setClassesToAttributes(
                        $navContainerAttributes,
                        ['collapse', 'navbar-collapse']
                    ),
                    $navContent
                )
                : $navContent);
        }

        $containerOption = $options['container'] ?? null;

        if ($containerOption === 'within') {
            $content = $this->htmlElement(
                'div',
                ['class' => 'container'],
                $content
            );
        }

        $content = $this->htmlElement(
            'nav',
            $this->setClassesToAttributes($attributes, $classes),
            $content
        );

        if ($containerOption === 'wrap') {
            $content = $this->htmlElement(
                'div',
                ['class' => 'container'],
                $content
            );
        }

        return $content;
    }

    public function renderToggler(array $togglerOptions, string $id = null): string
    {
        $translator = $this->getTranslator();

        $attributes = [
            'class' => 'navbar-toggler',
            'type' => 'button',
            'data-toggle' => 'collapse',
            'aria-expanded' => 'false',
            'aria-label' => $translator
                ? $translator->translate('Toggle navigation', $this->getTranslatorTextDomain())
                : 'Toggle navigation',
        ];

        if ($id) {
            $attributes['data-target'] = '#' . $id;
            $attributes['aria-controls'] = $id;
        }

        return $this->getView()->plugin('formButton')->renderSpec(\Laminas\Stdlib\ArrayUtils::merge(
            [
                'name' => 'navbar_toggler',
                'options' => [
                    'label' => '<span class="navbar-toggler-icon"></span>',
                    'disable_twbs' => true,
                ],
                'attributes' => $attributes,
            ],
            $togglerOptions
        ));
    }

    public function renderBrand($brandOptions): string
    {
        if (is_string($brandOptions)) {
            $brandOptions = ['content' => $brandOptions];
        }

        $content = '';
        if (!empty($brandOptions['content'])) {
            $content .= $brandOptions['content'];
        }

        if (!empty($brandOptions['img'])) {
            $imgAttributes = [
                'width' => 30,
                'height' => 30,
                'alt' => '',
            ];
            if ($content) {
                $imgAttributes['class'] = 'd-inline-block align-top';
            }
            $brandOptions['img'][1] = \Laminas\Stdlib\ArrayUtils::merge(
                $imgAttributes,
                $brandOptions['img'][1] ?? []
            );

            $content = $this->getView()->plugin('image')->__invoke(...$brandOptions['img']) . ($content
                ? PHP_EOL . $content
                : '');
        }

        $type =  $brandOptions['type'] ?? 'link';
        $attributes = [];

        switch ($type) {
            case 'link':
                $tag = 'a';
                $attributes['href'] = '#';
                break;
            case 'heading':
                $tag = 'span';
                break;
            default:
                throw new \DomainException(__METHOD__ . ' doe snot support brand type "' . $type . '"');
        }

        $attributes = \Laminas\Stdlib\ArrayUtils::merge(
            $attributes,
            $brandOptions['attributes'] ?? []
        );

        return $this->htmlElement(
            $tag,
            $this->setClassesToAttributes($attributes, ['navbar-brand']),
            $content
        );
    }

    public function renderText($textOptions): string
    {
        if (is_string($textOptions)) {
            $textOptions = ['content' => $textOptions];
        }

        $content = '';
        if (!empty($textOptions['content'])) {
            $content .= $textOptions['content'];
        }

        return $this->htmlElement(
            'span',
            $this->setClassesToAttributes(
                $textOptions['attributes'] ?? [],
                ['navbar-text']
            ),
            $content
        );
    }

    public function renderNav(\Laminas\Navigation\AbstractContainer $container, array $navOptions = []): string
    {
        $navigationHelper = $this->getView()->plugin('navigation');
        return $navigationHelper->menu()->renderMenu(
            $container,
            \Laminas\Stdlib\ArrayUtils::merge([
                'ulClass' => 'navbar-nav mr-auto',
            ], $navOptions)
        );
    }

    public function renderForm($form): string
    {
        if (is_iterable($form) && !($form instanceof \Laminas\Form\FormInterface)) {
            $factory = new \Laminas\Form\Factory();

            // Set default type if none given
            if (empty($form['type'])) {
                $form['type'] = \Laminas\Form\Form::class;
            }

            $form = $factory->create($form);

            if (!($form instanceof \Laminas\Form\FormInterface)) {
                throw new \InvalidArgumentException(sprintf(
                    __METHOD__ . ' expects options to create an instance of \Laminas\Form\FormInterface, "%s" given',
                    get_class($form)
                ));
            }
        } elseif (!($form instanceof \Laminas\Form\FormInterface)) {
            throw new \InvalidArgumentException(sprintf(
                __METHOD__ . ' expects an instance of \Laminas\Form\FormInterface or an iterable, "%s" given',
                is_object($form) ? get_class($form) : gettype($form)
            ));
        }

        // Disable form_group
        foreach ($form as $element) {
            $element->setOption('form_group', false);
        }

        $form->setOption('layout', \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE);
        return $this->getView()->plugin('form')->__invoke($form);
    }

    /**
     * Normalize an ID
     *
     * Overrides {@link View\Helper\AbstractHtmlElement::normalizeId()}.
     *
     * @param string $value
     * @return string
     */
    protected function normalizeId($value)
    {
        return $value;
    }
}
