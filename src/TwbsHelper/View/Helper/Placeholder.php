<?php

namespace TwbsHelper\View\Helper;

use Laminas\Form\ElementInterface;
use Laminas\Form\Factory;
use TwbsHelper\Form\View\Helper\FormButton;
use TwbsHelper\View\HtmlAttributesSet;
use InvalidArgumentException;
use LogicException;

/**
 * Helper for rendering placeholders
 */
class Placeholder extends AbstractHtmlElement
{
    public const ANIMATION_GLOW = 'glow';
    public const ANIMATION_WAVE = 'wave';

    protected static $allowedAnimations = [
        self::ANIMATION_GLOW,
        self::ANIMATION_WAVE,
    ];

    protected static $allowedOptions = [
        'animation',
        'column',
        'hidden',
        'size',
    ];

    /**
     * @var FormButton|null
     */
    protected $formButtonHelper;

    /**
     * Generates a 'placeholder' element
     *
     * @param int|iterable $optionsAndAttributes options and Html attributes of the "<span>" element
     * @param boolean $escape     True espace html content '$content'. Default True
     * @return string The placeholder XHTML.
     * @throws InvalidArgumentException
     */
    public function __invoke(
        $optionsAndAttributes = [],
        bool $escape = true
    ) {
        if (!empty($optionsAndAttributes['button'])) {
            return $this->renderButton($optionsAndAttributes);
        }

        return $this->renderPlaceholder($optionsAndAttributes, $escape);
    }

    protected function renderPlaceholder($optionsAndAttributes, bool $escape): string
    {
        $attributes = $this->prepareAttributes($optionsAndAttributes);

        $content = $this->getView()->plugin('htmlElement')->__invoke(
            'span',
            $attributes,
            null,
            $escape
        );

        $containerAttributes = $this->getView()->plugin('htmlattributes')->__invoke([]);

        if (!empty($optionsAndAttributes['hidden'])) {
            $containerAttributes['aria-hidden'] = 'true';
        }

        if (!empty($optionsAndAttributes['animation'])) {
            $containerAttributes->merge(['class' => [$this->getAnimationClass($optionsAndAttributes['animation'])]]);
        }

        if (!$containerAttributes->count()) {
            return $content;
        }

        return $this->getView()->plugin('htmlElement')->__invoke(
            'p',
            $containerAttributes,
            $content,
            $escape
        );
    }

    protected function prepareAttributes($optionsAndAttributes): HtmlAttributesSet
    {
        if (is_int($optionsAndAttributes)) {
            $optionsAndAttributes = ['column' => $optionsAndAttributes];
        } elseif (!is_iterable($optionsAndAttributes)) {
            throw new InvalidArgumentException(sprintf(
                'Arguement "$optionsAndAttributes" expects an int or an iterable value, "%s" given',
                get_debug_type($optionsAndAttributes)
            ));
        }

        $optionsAndAttributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($optionsAndAttributes)
            ->merge(['class' => ['placeholder']]);

        $this->prepareAttributesForColumn($optionsAndAttributes);
        $this->prepareAttributesForSize($optionsAndAttributes);

        return $optionsAndAttributes->offsetsUnset(static::$allowedOptions);
    }

    protected function prepareAttributesForColumn(
        HtmlAttributesSet $optionsAndAttributes
    ) {
        if (!empty($optionsAndAttributes['column'])) {
            $optionsAndAttributes->merge([
                'class' => $this->getView()->plugin('htmlClass')->plugin('column')->getClassesFromOption(
                    $optionsAndAttributes['column']
                ),
            ]);
        }
    }

    protected function prepareAttributesForSize(
        HtmlAttributesSet $optionsAndAttributes
    ) {
        if (!empty($optionsAndAttributes['size'])) {
            $optionsAndAttributes->merge([
                'class' => $this->getView()->plugin('htmlClass')->plugin('size')->getClassesFromOption(
                    $optionsAndAttributes['size'],
                    'placeholder'
                ),
            ]);
        }
    }

    protected function renderButton($optionsAndAttributes): string
    {
        $button = $optionsAndAttributes['button'];

        if (
            is_iterable($button)
            && !($button instanceof ElementInterface)
        ) {
            $factory = new Factory();
            $button = $factory->create($button);
        } elseif (!($button instanceof ElementInterface)) {
            throw new LogicException(sprintf(
                'Button expects an instanceof \Laminas\Form\ElementInterface or an array / Traversable, "%s" given',
                get_debug_type($button)
            ));
        }

        $attributes = $this->prepareAttributesForButton($optionsAndAttributes);

        $button->setAttributes($this->getView()->plugin('htmlattributes')
            ->__invoke($button->getAttributes())
            ->merge($attributes));

        $button->setOption('form_group', false);
        $button->setOption('tag', 'a');

        return $this->getFormButtonHelper()->__invoke($button, '');
    }

    protected function prepareAttributesForButton($optionsAndAttributes): HtmlAttributesSet
    {
        $attributes = $this->getView()->plugin('htmlattributes')->__invoke(
            $this->prepareAttributes($optionsAndAttributes)
        );

        $attributes['href'] = '#';
        $attributes['disabled'] = true;
        $attributes['tabindex'] = '-1';

        if (!empty($optionsAndAttributes['hidden'])) {
            $attributes['aria-hidden'] = 'true';
        }

        if (!empty($optionsAndAttributes['animation'])) {
            $animation = $optionsAndAttributes['animation'];
            $animationClass = $this->getAnimationClass($animation);
            $attributes->merge(['class' => [$animationClass]]);
        }

        return $attributes;
    }

    protected function getAnimationClass(string $animation): string
    {
        if (
            !in_array(
                $animation,
                self::$allowedAnimations
            )
        ) {
            throw new InvalidArgumentException(sprintf(
                'Given "animation" option "%s" is not supported. Expects one of these values "%s"',
                $animation,
                implode(',', self::$allowedAnimations)
            ));
        }
        return $this->getView()->plugin('htmlClass')->getPrefixedClass($animation, 'placeholder');
    }

    public function getFormButtonHelper(): FormButton
    {
        if ($this->formButtonHelper instanceof FormButton) {
            return $this->formButtonHelper;
        }

        if ($this->view !== null && method_exists($this->view, 'plugin')) {
            return $this->formButtonHelper = $this->view->plugin('form_button');
        }

        return $this->formButtonHelper = new FormButton();
    }
}
