<?php

namespace TwbsHelper\Form\View\Helper;

use Laminas\Form\ElementInterface;
use Laminas\Form\Element\Checkbox;
use Laminas\Form\Factory;
use Laminas\Form\View\Helper\AbstractHelper;
use Laminas\Stdlib\ArrayUtils;
use TwbsHelper\Form\View\ElementHelperTrait;
use TwbsHelper\View\HtmlAttributesSet;
use InvalidArgumentException;

class FormAddOn extends AbstractHelper
{
    use ElementHelperTrait;

    public const POSITION_APPEND = 'append';
    public const POSITION_PREPEND = 'prepend';

    /**
     * @var Factory|null
     */
    protected $formFactory;

    /**
     * @param ElementInterface $element
     * @return FormAddOn|string
     */
    public function __invoke(?ElementInterface $element = null, string $content = '')
    {
        return $element ? $this->render($element, $content) : $this;
    }

    public function render(?ElementInterface $element = null, string $content = ''): string
    {
        $hasAddOn = false;
        foreach ([self::POSITION_APPEND, self::POSITION_PREPEND] as $addOnPosition) {
            if ($addOnOptions = $element->getOption('add_on_' . $addOnPosition)) {
                $hasAddOn = true;

                $addOnContent = $this->renderAddOn($addOnOptions, $element, $addOnPosition);

                if ($addOnPosition === self::POSITION_APPEND) {
                    $content .= ($content ? PHP_EOL : '') . $addOnContent;
                } else {
                    $content = $addOnContent . ($content ? PHP_EOL . $content : '');
                }
            }
        }

        if (!$hasAddOn) {
            return $content;
        }

        $inputGroupClasses = ['input-group'];

        if ($element->getMessages()) {
            $inputGroupClasses[] = 'has-validation';
        }

        // Input group size
        if ($size = $element->getOption('size')) {
            $inputGroupClasses = array_merge(
                $inputGroupClasses,
                $this->getView()->plugin('htmlClass')->plugin('size')->getClassesFromOption($size, 'input-group')
            );
        }

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke(['class' => $element->getOption('input_group_class')])
            ->merge(['class' => $inputGroupClasses]);

        return $this->getView()->plugin('htmlElement')->__invoke('div', $attributes, $content);
    }

    /**
     * Render add-on markup
     *
     * @param ElementInterface|array|string $addOnOptions
     * @param ElementInterface $element
     * @param string $addOnPosition
     * @return string
     */
    protected function renderAddOn(
        $addOnOptions,
        ElementInterface $element,
        string $addOnPosition
    ): string {
        if ($addOnOptions instanceof ElementInterface) {
            $addOnOptions = ['element' => $addOnOptions];
        } elseif (is_string($addOnOptions)) {
            $addOnOptions = ['text' => $addOnOptions];
        }

        if (ArrayUtils::isList($addOnOptions)) {
            $content = '';
            foreach ($addOnOptions as $addOnOptionsTmp) {
                $content .= ($content ? PHP_EOL : '') . $this->renderAddOn(
                    $addOnOptionsTmp,
                    $element,
                    $addOnPosition
                );
            }
            return $content;
        }

        return $this->renderAddOnContent($addOnOptions, $element, $addOnPosition);
    }

    protected function renderAddOnContent(
        array $addOnOptions,
        ElementInterface $element,
        string $addOnPosition
    ): string {
        $attributes = $this->getView()->plugin('htmlattributes')->__invoke($addOnOptions['attributes'] ?? []);

        // Define global add-on id based on element's aria-describedby
        $addOnId = $element->getAttribute('aria-describedby');

        $addOnContent = '';
        $shouldWrapContent = true;
        switch (true) {
            case isset($addOnOptions['text']):
                if (!is_string($addOnOptions['text'])) {
                    throw new InvalidArgumentException(sprintf(
                        '"text" option expects a string, "%s" given',
                        get_debug_type($addOnOptions['text'])
                    ));
                }
                $addOnContent = $this->renderText($addOnOptions['text']);
                break;

            case isset($addOnOptions['label']):
                if (!is_string($addOnOptions['label'])) {
                    throw new InvalidArgumentException(sprintf(
                        '"label" option expects a string, "%s" given',
                        get_debug_type($addOnOptions['label'])
                    ));
                }

                $shouldWrapContent = false;
                $addOnContent = $this->renderLabel(
                    $addOnOptions['label'],
                    $attributes,
                    $element
                );
                break;

            case isset($addOnOptions['element']):
                if (
                    is_iterable($addOnOptions['element'])
                    && !($addOnOptions['element'] instanceof ElementInterface)
                ) {
                    $addOnOptions['element'] = $this->createElement($addOnOptions['element']);
                }

                $shouldWrapContent = $addOnOptions['element'] instanceof Checkbox;
                // Define global add-on id based on element's aria-describedby
                if (!$shouldWrapContent && $addOnId) {
                    $addOnOptions['element']->setAttribute('id', $addOnId);
                }

                $addOnContent = $this->renderElement(
                    $addOnOptions['element'],
                    $attributes,
                    $addOnPosition
                );
                break;

            default:
                throw new InvalidArgumentException('Addon options expects a text or an element to render, none given');
        }

        if (!$shouldWrapContent) {
            return $addOnContent;
        }

        $attributes->merge(['class' => ['input-group-text']]);

        // Define global add-on id based on element's aria-describedby
        if ($addOnId) {
            $attributes['id'] = $addOnId;
        }

        return $this->getView()->plugin('htmlElement')->__invoke(
            'span',
            $attributes,
            $addOnContent
        );
    }

    protected function renderText(string $addOnText): string
    {
        $translator = $this->getTranslator();
        if ($translator) {
            $addOnText =  $translator->translate(
                $addOnText,
                $this->getTranslatorTextDomain()
            );
        }

        return $addOnText;
    }

    protected function renderLabel(
        string $addonLabel,
        HtmlAttributesSet $labelAttributes,
        ElementInterface $element
    ): string {

        $labelAttributes->merge(['class' => ['input-group-text']]);

        $addOnElement = $this->createElement([
            'name' => $element->getName(),
            'options' => [
                'label' => $addonLabel,
                'label_attributes' => $labelAttributes->getArrayCopy(),
                'disable_twbs' => true,
            ],
            'attributes' => ['id' => $element->getAttribute('id')],
        ]);

        return $this->getView()->plugin('formLabel')->__invoke($addOnElement);
    }

    protected function renderElement(
        ElementInterface $element,
        HtmlAttributesSet $attributes,
        string $addOnPosition
    ): string {
        // Set options to improve rendering
        if ($dropdownOptions = $element->getOption('dropdown')) {
            if (ArrayUtils::isList($dropdownOptions)) {
                $dropdownOptions = [
                    'items' => $dropdownOptions,
                    'disable_container' => true,
                ];
            } elseif (!isset($dropdownOptions['disable_container'])) {
                $dropdownOptions['disable_container'] = true;
            }

            if ($addOnPosition === self::POSITION_APPEND && empty($dropdownOptions['alignment'])) {
                $dropdownOptions['alignment'] = ['end'];
            }

            $element->setOption('dropdown', $dropdownOptions);
        }

        $elementAttributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($element->getAttributes())
            ->merge($attributes);

        $element->setAttributes($elementAttributes);

        $helper = $this->getView()->plugin('formElement');

        if ($element instanceof Checkbox) {
            $element->setOption('disable_twbs', true);

            $this->setClassesToElement($element, ['form-check-input', 'mt-0']);

            return $helper->render($element);
        }
        return $helper->render($element);
    }


    protected function createElement(array $element): ElementInterface
    {
        if (!$this->formFactory) {
            $this->formFactory = new Factory();
        }
        return $this->formFactory->createElement($element);
    }
}
