<?php

namespace TwbsHelper\View\Helper\Navigation;

use Laminas\Form\Factory;
use Laminas\Form\Form;
use Laminas\Form\FormInterface;
use Laminas\I18n\Translator\TranslatorAwareTrait;
use Laminas\Navigation\AbstractContainer;
use Laminas\Stdlib\ArrayUtils;
use Laminas\View\Helper\Navigation\AbstractHelper;
use TwbsHelper\View\HtmlAttributesSet;
use DomainException;
use InvalidArgumentException;

/**
 * Helper for rendering navbar
 */
class Navbar extends AbstractHelper
{
    use TranslatorAwareTrait;

    public const BRAND_POSITION_LEFT = 'left';
    public const BRAND_POSITION_RIGHT = 'right';
    public const BRAND_POSITION_HIDDEN = 'hidden';

    /**
     * View helper entry point.
     *
     * Retrieves helper and optionally sets container to operate on.
     *
     * @param AbstractContainer $container [optional] container to operate on
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
     * @param AbstractContainer $container [optional] container to render. Default is
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
     * @param AbstractContainer $container [optional] container to create menu from.
     *     Default is to use the container retrieved from {@link getContainer()}.
     * @param array $options [optional] options for controlling rendering
     * @return string
     */
    public function renderNavbar($container = null, array $options = []): string
    {
        if (null === $container) {
            $container = $this->getContainer();
        }
        $this->parseContainer($container);

        $attributes = $this->prepareAttributes($options);
        $id = $attributes['id'] ?? null;

        $content = '';

        // Brand
        $brandPosition = $options['brand']['position'] ?? self::BRAND_POSITION_LEFT;
        $brandContent = isset($options['brand']) ? $this->renderBrand($options['brand']) : '';

        if ($brandContent && $brandPosition === self::BRAND_POSITION_LEFT) {
            $content .= $brandContent;
        }

        // Toggler
        if (!isset($options['toggler']) || $options['toggler'] !== false) {
            $content .= ($content ? PHP_EOL : '') . $this->renderToggler(
                $options,
                $id
            );
        }

        if ($brandContent && $brandPosition === self::BRAND_POSITION_RIGHT) {
            $content .= ($content ? PHP_EOL : '') . $brandContent;
        }

        $content = $this->renderNavbarNav(
            $content,
            $container,
            $options,
            $id,
            $brandContent && $brandPosition === self::BRAND_POSITION_HIDDEN ? $brandContent : null
        );

        if (!empty($options['container'])) {
            $content = $this->renderContainer($content, $options['container']);
        }

        if (!isset($options['collapse']) || $options['collapse'] !== false) {
            $attributes->offsetUnset('id');
        }

        $content = $this->getView()->plugin('htmlElement')->__invoke(
            'nav',
            $attributes,
            $content
        );

        if (!empty($options['wrapping_container'])) {
            $content = $this->renderContainer($content, $options['wrapping_container']);
        }

        return $content;
    }

    protected function prepareAttributes(iterable $options): HtmlAttributesSet
    {
        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($options['attributes'] ?? [])
            ->merge(['class' => ['navbar']]);

        if (!isset($options['expand']) || $options['expand'] !== false) {
            $attributes['class']->merge(
                $this->getView()->plugin('htmlClass')->plugin('size')->getClassesFromOption(
                    $options['expand'] ?? 'lg',
                    'navbar-expand'
                )
            );
        }

        if (!isset($options['variant']) || $options['variant'] !== false) {
            $attributes['class']->merge(
                $this->getView()->plugin('htmlClass')->plugin('variant')->getClassesFromOption(
                    $options['variant'] ?? 'light',
                    'navbar'
                )
            );
        }

        if (!isset($options['background']) || $options['background'] !== false) {
            $attributes['class']->merge(
                $this->getView()->plugin('htmlClass')->plugin('variant')->getClassesFromOption(
                    $options['background'] ?? 'light',
                    'bg'
                )
            );
        }

        if (!empty($options['placement'])) {
            $attributes['class']->merge([$options['placement']]);
        }

        return $attributes;
    }

    public function renderToggler(iterable $options, ?string $id = null): string
    {
        $translator = $this->getTranslator();

        $togglerOptions = $options['toggler'] ?? [];

        $attributes = [
            'class' => 'navbar-toggler',
            'type' => 'button',
            'aria-expanded' => 'false',
            'data-bs-toggle' => empty($options['offcanvas']) ? 'collapse' : 'offcanvas',
            'aria-label' => $translator
                ? $translator->translate('Toggle navigation', $this->getTranslatorTextDomain())
                : 'Toggle navigation',
        ];

        if ($id) {
            $attributes['data-bs-target'] = '#' . $id;
        }

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($togglerOptions['attributes'] ?? [])
            ->merge($attributes);

        unset($togglerOptions['attributes']);

        if (!empty($attributes['data-bs-target'])) {
            $attributes['aria-controls'] = trim((string) $attributes['data-bs-target'], '#');
        }


        return $this->getView()->plugin('formButton')->renderSpec(ArrayUtils::merge(
            [
                'options' => [
                    'disable_twbs' => true,
                ],
                'attributes' => $attributes,
            ],
            $togglerOptions
        ), '');
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
            $imgAttributes = [];
            if ($content) {
                $imgAttributes['class'] = 'align-text-top d-inline-block';
            }
            $brandOptions['img'][1] = $this->getView()->plugin('htmlattributes')
                ->__invoke($brandOptions['img'][1] ?? [])
                ->merge($imgAttributes);

            $content = $this->getView()->plugin('image')->__invoke(...$brandOptions['img']) . ($content
                ? PHP_EOL . $content
                : '');
        }

        $type =  $brandOptions['type'] ?? 'link';
        $attributes = [
            'class' => ['navbar-brand'],
        ];

        switch ($type) {
            case 'link':
                $tag = 'a';
                $attributes['href'] = '#';
                break;
            case 'heading':
                $tag = 'span';
                break;
            default:
                throw new DomainException(__METHOD__ . ' doe snot support brand type "' . $type . '"');
        }

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($brandOptions['attributes'] ?? [])
            ->merge($attributes);

        return $this->getView()->plugin('htmlElement')->__invoke(
            $tag,
            $attributes,
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

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($textOptions['attributes'] ?? [])
            ->merge(['class' => ['navbar-text']]);

        return $this->getView()->plugin('htmlElement')->__invoke(
            'span',
            $attributes,
            $content
        );
    }

    public function renderNavbarNav(
        string $content,
        AbstractContainer $container,
        iterable $options,
        ?string $id = null,
        ?string $brandContent = null
    ): string {

        $navContent = $this->renderNav($container, $options['nav'] ?? []);

        // Nav form
        if (isset($options['form'])) {
            $navContent .= ($navContent ? PHP_EOL : '') . $this->renderForm($options['form']);
        }

        if ($brandContent) {
            $navContent = $brandContent . ($navContent ? PHP_EOL . $navContent : '');
        }

        // Nav text
        $textContent = null;
        if (isset($options['text'])) {
            $textContent = $this->renderText($options['text']);
        }

        if (!$navContent) {
            if (!$textContent) {
                return $content;
            }

            $content .= ($content ? PHP_EOL : '') . $textContent;
            return $content;
        }

        if ($textContent) {
            $navContent .=  PHP_EOL . $textContent;
        }

        $offcanvas = $options['offcanvas'] ?? null;

        if ($offcanvas) {
            $content .= ($content ? PHP_EOL : '') .  $this->renderOffcanvas(
                $navContent,
                $offcanvas === true ? [] : $offcanvas,
                $id,
            );
            return $content;
        }

        $collapse = !isset($options['collapse']) || $options['collapse'] !== false;
        if ($collapse) {
            $content .= ($content ? PHP_EOL : '') . $this->renderCollapse($navContent, $id);
            return $content;
        }

        return $content . ($content ? PHP_EOL : '') . $navContent;
    }

    public function renderNav(AbstractContainer $container, array $navOptions = []): string
    {
        $navigationHelper = $this->getView()->plugin('navigation');

        $ulAttributes = $this->getView()->plugin('htmlattributes')
            ->__invoke(['class' => $navOptions['ulClass'] ?? ''])
            ->merge(['class' => ['navbar-nav']]);

        if (!empty($navOptions['scroll'])) {
            $ulAttributes->merge([
                'class' => ['navbar-nav-scroll'],
                'style' => '--bs-scroll-height: 100px;',
            ]);
        }

        unset($navOptions['ulClass']);

        return $navigationHelper->menu()->renderMenu(
            $container,
            ArrayUtils::merge([
                'ulClass' => $ulAttributes['class'],
                'style' => $ulAttributes['style'] ?? null,
                'page' => true,
            ], $navOptions)
        );
    }

    public function renderOffcanvas(string $content, iterable $options, ?string $id = null): string
    {
        if ($id) {
            $options['id'] = $id;
        }

        return $this->getView()->plugin('offcanvas')->__invoke($content, $options);
    }

    public function renderCollapse(string $content, ?string $id = null): string
    {
        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            [
                'id' => $id,
                'class' => ['collapse', 'navbar-collapse'],
            ],
            $content
        );
    }

    public function renderForm($form): string
    {
        if (is_iterable($form) && !($form instanceof FormInterface)) {
            $factory = new Factory();

            // Set default type if none given
            if (empty($form['type'])) {
                $form['type'] = Form::class;
            }

            $form = $factory->create($form);

            if (!($form instanceof FormInterface)) {
                throw new InvalidArgumentException(sprintf(
                    __METHOD__ . ' expects options to create an instance of \Laminas\Form\FormInterface, "%s" given',
                    $form::class
                ));
            }
        } elseif (!($form instanceof FormInterface)) {
            throw new InvalidArgumentException(sprintf(
                __METHOD__ . ' expects an instance of \Laminas\Form\FormInterface or an iterable, "%s" given',
                get_debug_type($form)
            ));
        }

        // Disable form_group
        foreach ($form as $element) {
            $element->setOption('form_group', false);
        }

        return $this->getView()->plugin('form')->__invoke($form);
    }

    protected function renderContainer(string $content, $containerOption): string
    {
        return $this->getView()->plugin('container')->__invoke($content, $containerOption);
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
