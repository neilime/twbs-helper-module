<?php

namespace TwbsHelper\Form\View\Helper;

use Laminas\Form\ElementInterface;
use Laminas\Form\Element\MultiCheckbox;
use Laminas\Form\LabelAwareInterface;
use Laminas\Form\View\Helper\FormRow;
use TwbsHelper\Form\View\ElementHelperTrait;
use DomainException;
use InvalidArgumentException;

class FormRowElement extends FormRow
{
    use ElementHelperTrait;

    /**
     * The class that is added to element that have errors
     *
     * @var string
     */
    protected $inputErrorClass = 'is-invalid';

    /**
     * The class that is added to element that are valid or have valid feedback
     *
     * @var string
     */
    protected $inputValidClass = 'is-valid';

    /**
     * @param ElementInterface $element
     * @param string|null $labelPosition
     * @return string
     */
    public function render(ElementInterface $element, ?string $labelPosition = null): string
    {
        $this->prepareElementForRendering($element);

        $renderingOrder = $this->getElementRenderingOrder($element, $labelPosition);

        $elementContent = "";
        foreach ($renderingOrder as $function => $arguments) {
            array_unshift($arguments, $element, $elementContent);
            $elementContent = call_user_func_array([$this, $function], $arguments);
        }

        return $elementContent;
    }

    protected function getElementRenderingOrder(ElementInterface $element, ?string $labelPosition = null): array
    {
        $isMultiCheckbox = $this->elementIsMultiCheckbox($element);
        $isCheckbox = $this->elementIsCheckbox($element);

        if ($isMultiCheckbox) {
            $renderingOrder = [
                'renderErrors' => [],
                'renderValidFeedback' => [],
                'renderElement' => [],
            ];
        } else {
            $renderingOrder = [
                'renderElement' => [],
                'renderErrors' => [],
                'renderValidFeedback' => [],
            ];
        }

        $renderingOrder +=  ['renderAddOn' => []];

        $layout = $element->getOption('layout');
        switch ($layout) {
            case null:
            case Form::LAYOUT_INLINE:
                if ($isCheckbox) {
                    unset($renderingOrder['renderElement']);

                    $renderingOrder = [
                        'renderElement' => [],
                        'renderLayoutContentContainer' => [],
                        'renderLabel' =>  [$labelPosition],

                    ] + $renderingOrder + [
                        'renderHelpBlock' => [],
                        'renderDedicatedContainer' => [],
                    ];
                } else {
                    $renderingOrder += [
                        'renderLayoutContentContainer' => [],
                        'renderLabel' =>  [$labelPosition],
                        'renderHelpBlock' => [],
                        'renderDedicatedContainer' => [],
                    ];
                }
                break;

            case Form::LAYOUT_HORIZONTAL:
                $layoutRenderingOrder = [
                    'renderLayoutContentContainer' => [],
                    'renderHelpBlock' => [],
                    'renderDedicatedContainer' => [],
                ];

                $isCheckbox = $this->elementIsCheckbox($element);

                if ($isCheckbox) {
                    $layoutRenderingOrder = ['renderLabel' => []] + $layoutRenderingOrder;
                } else {
                    $layoutRenderingOrder += ['renderLabel' => []];
                }

                $renderingOrder += $layoutRenderingOrder;

                break;

            default:
                throw new DomainException('Layout "' . $layout . '" is not supported');
        }

        return $renderingOrder;
    }

    protected function renderElement(ElementInterface $element, $content): string
    {

        $elementContent = $this->getElementHelper()->render($element);

        if (!$elementContent) {
            return $content;
        }

        if ($this->elementIsMultiCheckbox($element)) {
            // Inject previous generated content in last multicheckbox container
            $multicheckboxContent = trim(
                (string) $this->getView()->plugin('htmlElement')->addProperIndentation($content, true),
                PHP_EOL
            );

            $elementContent = preg_replace(
                '/<\/div\s*>(?!.*<\/div\s*>)/is',
                $multicheckboxContent . '</div>',
                $elementContent
            );
        }

        return  $elementContent;
    }

    protected function renderMultiCheckboxCommonParts(ElementInterface $element): string
    {
        // Render element feedbacks
        $elementContent = '';
        $renderingOrder = [
            'renderErrors' => [],
            'renderValidFeedback' => [],
        ];

        foreach ($renderingOrder as $function => $arguments) {
            array_unshift($arguments, $element, $elementContent);
            $elementContent = call_user_func_array([$this, $function], $arguments);
        }

        $multicheckboxContent = $this->getElementHelper()->render($element);

        // Inject feedbacks in last multicheckbox container
        if ($multicheckboxContent) {
            $elementContent = trim(
                (string) $this->getView()->plugin('htmlElement')->addProperIndentation($elementContent, true),
                PHP_EOL
            );
            $elementContent = preg_replace(
                '/<\/div\s*>(?!.*<\/div\s*>)/is',
                $elementContent . '</div>',
                $multicheckboxContent
            );
        }

        return $this->renderAddOn($element, $elementContent);
    }

    /**
     * @param ElementInterface $element
     */
    public function prepareElementForRendering(ElementInterface $element)
    {
        // "is-invalid" validation state case
        if ($element->getMessages()) {
            // Element have errors
            $inputErrorClass = $this->getInputErrorClass();
            if ($inputErrorClass) {
                $this->setClassesToElement($element, [$inputErrorClass]);
            }
        } elseif ($element->getOption('valid_feedback')) { // "is-valid" validation state case
            $inputValidClass = $this->getInputValidClass();
            if ($inputValidClass) {
                $this->setClassesToElement($element, [$inputValidClass]);
            }
        }
    }

    /**
     * The class that is added to element that are valid or have valid feedback
     *
     * @return string
     */
    protected function getInputValidClass(): string
    {
        return $this->inputValidClass;
    }

    /**
     * Render element's label
     *
     * @param ElementInterface $element
     * @param string $elementContent
     * @param string $labelPosition
     * @return string
     */
    protected function renderLabel(
        ElementInterface $element,
        string $elementContent,
        ?string $labelPosition = null
    ): string {

        if (!$element->getLabel()) {
            return $elementContent;
        }

        $labelContent = $this->getLabelHelper()->__invoke($element);

        if (!$labelContent) {
            return $elementContent;
        }

        if ($element->getOption('show_label') !== false) {
            $labelContent = $this->renderLayoutContentContainer($element, $labelContent);
        }

        $position = $this->getDefaultLabelPosition($element, $labelPosition);

        return $position === self::LABEL_APPEND
            ? $elementContent . PHP_EOL . $labelContent
            : $labelContent . PHP_EOL . $elementContent;
    }

    protected function renderLayoutContentContainer(ElementInterface $element, $content): string
    {
        $isCheckbox = $this->elementIsCheckbox($element);
        $isLayoutInline = $this->elementIsLayout($element, Form::LAYOUT_INLINE);

        if (!$isCheckbox && $isLayoutInline) {
            $column = $element->getOption('column') ?? 'auto';
            $columnClasses = $this->getView()->plugin('htmlClass')->plugin('column')->getClassesFromOption($column);
            $content = $this->getView()->plugin('htmlElement')->__invoke(
                'div',
                ['class' => $columnClasses],
                $content
            );
        }

        return $content;
    }

    protected function getDefaultLabelPosition(ElementInterface $element, $labelPosition = null): string
    {

        if ($element instanceof LabelAwareInterface) {
            $position = $element->getLabelOption('position');
            if ($position) {
                return $position;
            }
        }

        if ($this->elementIsMultiCheckbox($element)) {
            return self::LABEL_PREPEND;
        }

        switch ($element->getAttribute('type')) {
            case 'checkbox':
                return self::LABEL_APPEND;
            case 'file':
                if ($element->getOption('custom')) {
                    return self::LABEL_APPEND;
                }
                // Default behaviour
                // no break
            default:
                if ($labelPosition) {
                    return $labelPosition;
                }

                return $this->getLabelPosition();
        }
    }

    /**
     * Render element's help block
     *
     * @param ElementInterface $element
     * @return string
     */
    protected function renderHelpBlock(ElementInterface $element, string $elementContent): string
    {
        $helpBlock = $element->getOption('help_block');
        if (!$helpBlock) {
            return $elementContent;
        }

        $attributes = $this->getView()->plugin('htmlattributes')->__invoke([]);
        if (is_string($helpBlock)) {
            $content = $helpBlock;
        } elseif (is_array($helpBlock)) {
            if (empty($helpBlock['content'])) {
                throw new InvalidArgumentException(
                    'Option "[help_block][content]" is undefined'
                );
            }

            $content = $helpBlock['content'];
            if (!is_string($content)) {
                throw new InvalidArgumentException(sprintf(
                    'Option "[help_block][content]" expects a string, "%s" given',
                    get_debug_type($content)
                ));
            }

            if (!empty($helpBlock['attributes'])) {
                $attributes = $this->getView()->plugin('htmlattributes')
                    ->__invoke($helpBlock['attributes'])
                    ->merge($attributes);
            }
        } else {
            throw new InvalidArgumentException(sprintf(
                'Option "help_block" expects a string or an array, "%s" given',
                get_debug_type($helpBlock)
            ));
        }

        $translator = $this->getTranslator();
        if ($translator) {
            $content = $translator->translate($content, $this->getTranslatorTextDomain());
        }

        $isLayoutInline = $element->getOption('layout') === Form::LAYOUT_INLINE;

        $attributes->merge(['class' => ['form-text']]);

        $helpBlockContent = $this->getView()->plugin('htmlElement')->__invoke(
            $isLayoutInline ? 'span' : 'div',
            $attributes,
            $content
        );

        $helpBlockContent = $this->renderLayoutContentContainer($element, $helpBlockContent);

        return $elementContent . PHP_EOL . $helpBlockContent;
    }

    /**
     * Render element's valid feedback
     *
     * @param ElementInterface $element
     * @return string
     */
    protected function renderValidFeedback(ElementInterface $element, string $elementContent): string
    {
        $validFeedback = $element->getOption('valid_feedback');
        if ($validFeedback) {
            $feedbackClass = $element->getOption('tooltip_feedback') ? 'valid-tooltip' : 'valid-feedback';
            $validFeedbackContent = $this->getView()->plugin('htmlElement')->__invoke(
                'div',
                ['class' => $feedbackClass],
                $validFeedback
            );
            $elementContent .= PHP_EOL . $validFeedbackContent;
        }

        return $elementContent;
    }

    /**
     * Render element's add-on
     *
     * @param ElementInterface $element
     * @return string
     */
    protected function renderAddOn(ElementInterface $element, string $elementContent): string
    {
        return $this->getView()->plugin('formAddOn')->render($element, $elementContent);
    }

    /**
     * Render element's errors
     *
     * @param ElementInterface $element
     * @return string
     */
    protected function renderErrors(ElementInterface $element, string $elementContent): string
    {
        if ($this->renderErrors) {
            $feedbackClass = $element->getOption('tooltip_feedback') ? 'invalid-tooltip' : 'invalid-feedback';
            $elementErrorsContent = $this->getElementErrorsHelper()->render($element, ['class' => $feedbackClass]);
            if ($elementErrorsContent) {
                $elementContent .= PHP_EOL . $elementErrorsContent;
            }
        }

        return $elementContent;
    }

    /**
     * Render element's dedicated container
     *
     * @param ElementInterface $element
     * @param string $elementContent
     * @return string
     */
    protected function renderDedicatedContainer(
        ElementInterface $element,
        string $elementContent
    ): string {

        $isCheckbox = $this->elementIsCheckbox($element);
        if ($isCheckbox) {
            return $this->renderDedicatedContainerForCheckbox($element, $elementContent);
        }

        $layoutHorizontal = $this->elementIsLayout($element, Form::LAYOUT_HORIZONTAL);
        if (!$layoutHorizontal) {
            return $elementContent;
        }

        // Column size
        $classes = [];
        if ($column = $element->getOption('column')) {
            $classes += $this->getView()->plugin('htmlClass')->plugin('column')->getClassesFromOption($column);
        }

        if (!$classes) {
            return $elementContent;
        }

        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            ['class' => $classes],
            $elementContent
        );
    }

    /**
     * Render element's dedicated container
     *
     * @param ElementInterface $element
     * @param string $elementContent
     * @return string
     */
    protected function renderDedicatedContainerForCheckbox(
        ElementInterface $element,
        string $elementContent
    ): string {
        if ($element->getOption('form_check_group') === false) {
            return $elementContent;
        }

        $classesToAdd = [$element->getOption('form_check_class')];

        $isCustom = $element->getOption('custom');
        $isSwitch = $element->getOption('switch');
        if ($isCustom) {
            // Custom checkbox classes
            $classesToAdd[] = 'custom-control';
            if ($isSwitch) {
                // Switch custom checkbox
                $classesToAdd[] = 'custom-switch';
            } else {
                // Regular custom checkbox
                $classesToAdd[] = 'custom-checkbox';
            }
        } else {
            $classesToAdd[] = 'form-check';
            if ($isSwitch) {
                // Switch checkbox
                $classesToAdd[] = 'form-switch';
            }
        }


        $elementContent = $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            ['class' => $classesToAdd],
            $elementContent
        );

        $column = $element->getOption('column');
        if (!$column || !$element->getOption('layout')) {
            return $elementContent;
        }

        $columnClasses = $this->getView()->plugin('htmlClass')->plugin('column')->getClassesFromOption($column);

        if (
            $this->elementIsLayout(
                $element,
                Form::LAYOUT_HORIZONTAL
            )
        ) {
            $columnClasses = array_merge(
                $columnClasses,
                $this->getView()->plugin('htmlClass')->plugin('columnOffsetCounterpart')->getClassesFromOption($column)
            );
        }

        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            ['class' => $columnClasses],
            $elementContent
        );
    }

    protected function elementIsLayout(ElementInterface $element, string $layout)
    {
        return $element->getOption('layout') ===  $layout;
    }

    protected function elementIsCheckbox(ElementInterface $element)
    {
        return $element->getAttribute('type') === 'checkbox';
    }

    protected function elementIsMultiCheckbox(ElementInterface $element)
    {
        return $element instanceof MultiCheckbox;
    }
}
