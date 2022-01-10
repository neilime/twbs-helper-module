<?php

namespace TwbsHelper\Form\View\Helper;

use PhpParser\Node\Scalar\String_;

class FormRowElement extends \Laminas\Form\View\Helper\FormRow
{
    use \TwbsHelper\Form\View\ElementHelperTrait;

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
     * @param \Laminas\Form\ElementInterface $element
     * @param string|null $labelPosition
     * @return string
     */
    public function render(\Laminas\Form\ElementInterface $element, ?string $labelPosition = null): string
    {
        $this->prepareElementForRendering($element);

        if ($element instanceof \Laminas\Form\Element\MultiCheckbox) {
            $elementContent = $this->renderMultiCheckboxCommonParts($element);
        } else {
            $elementContent = $this->renderElementCommonParts($element);
        }

        $layout = $element->getOption('layout');
        switch ($layout) {
            case null:
            case \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE:
                $renderingOrder = [
                    'renderLayoutContentContainer' => [],
                    'renderLabel' =>  [$labelPosition],
                    'renderHelpBlock' => [],
                    'renderDedicatedContainer' => [],
                ];
                break;

            case \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL:
                $renderingOrder = [
                    'renderLayoutContentContainer' => [],
                    'renderHelpBlock' => [],
                    'renderDedicatedContainer' => [],
                ];

                $isCheckbox = $this->elementIsCheckbox($element);

                if ($isCheckbox) {
                    $renderingOrder = ['renderLabel' => []] + $renderingOrder;
                } else {
                    $renderingOrder += ['renderLabel' => []];
                }

                break;

            default:
                throw new \DomainException('Layout "' . $layout . '" is not supported');
        }

        foreach ($renderingOrder as $function => $arguments) {
            array_unshift($arguments, $element, $elementContent);
            $elementContent = call_user_func_array([$this, $function], $arguments);
        }

        return $elementContent;
    }

    protected function renderElementCommonParts(\Laminas\Form\ElementInterface $element): string
    {
        // Render element
        $elementContent = $this->getElementHelper()->render($element);

        $renderingOrder = [
            'renderErrors' => [],
            'renderValidFeedback' => [],
            'renderAddOn' => [],
        ];

        foreach ($renderingOrder as $function => $arguments) {
            array_unshift($arguments, $element, $elementContent);
            $elementContent = call_user_func_array([$this, $function], $arguments);
        }

        return $elementContent;
    }

    protected function renderMultiCheckboxCommonParts(\Laminas\Form\ElementInterface $element): string
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
                $this->getView()->plugin('htmlElement')->addProperIndentation($elementContent, true),
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
     * @param \Laminas\Form\ElementInterface $element
     */
    public function prepareElementForRendering(\Laminas\Form\ElementInterface $element)
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
     * @param \Laminas\Form\ElementInterface $element
     * @param string $elementContent
     * @param string $labelPosition
     * @return string
     */
    protected function renderLabel(
        \Laminas\Form\ElementInterface $element,
        string $elementContent,
        string $labelPosition = null
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

    protected function renderLayoutContentContainer(\Laminas\Form\ElementInterface $element, $content): string
    {
        $isCheckbox = $this->elementIsCheckbox($element);
        $isLayoutInline = $this->elementIsLayout($element, \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE);

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

    protected function getDefaultLabelPosition(\Laminas\Form\ElementInterface $element, $labelPosition = null): string
    {

        if ($element instanceof \Laminas\Form\LabelAwareInterface) {
            $position = $element->getLabelOption('position');
            if ($position) {
                return $position;
            }
        }

        switch ($element->getAttribute('type')) {
            case 'checkbox':
            case 'radio':
                return self::LABEL_APPEND;
            case 'file':
                if ($element->getOption('custom')) {
                    return self::LABEL_APPEND;
                }
                // Default behaviour
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
     * @param \Laminas\Form\ElementInterface $element
     * @return string
     */
    protected function renderHelpBlock(\Laminas\Form\ElementInterface $element, string $elementContent): string
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
                throw new \InvalidArgumentException(
                    'Option "[help_block][content]" is undefined'
                );
            }

            $content = $helpBlock['content'];
            if (!is_string($content)) {
                throw new \InvalidArgumentException(sprintf(
                    'Option "[help_block][content]" expects a string, "%s" given',
                    is_object($content) ? get_class($content) : gettype($content)
                ));
            }

            if (!empty($helpBlock['attributes'])) {
                $attributes = $this->getView()->plugin('htmlattributes')
                    ->__invoke($helpBlock['attributes'])
                    ->merge($attributes);
            }
        } else {
            throw new \InvalidArgumentException(sprintf(
                'Option "help_block" expects a string or an array, "%s" given',
                is_object($helpBlock) ? get_class($helpBlock) : gettype($helpBlock)
            ));
        }

        $translator = $this->getTranslator();
        if ($translator) {
            $content = $translator->translate($content, $this->getTranslatorTextDomain());
        }

        $isLayoutInline = $element->getOption('layout') === \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE;

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
     * @param \Laminas\Form\ElementInterface $element
     * @return string
     */
    protected function renderValidFeedback(\Laminas\Form\ElementInterface $element, string $elementContent): string
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
     * @param \Laminas\Form\ElementInterface $element
     * @return string
     */
    protected function renderAddOn(\Laminas\Form\ElementInterface $element, string $elementContent): string
    {
        return $this->getView()->plugin('formAddOn')->render($element, $elementContent);
    }

    /**
     * Render element's errors
     *
     * @param \Laminas\Form\ElementInterface $element
     * @return string
     */
    protected function renderErrors(\Laminas\Form\ElementInterface $element, string $elementContent): string
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
     * @param \Laminas\Form\ElementInterface $element
     * @param string $elementContent
     * @return string
     */
    protected function renderDedicatedContainer(
        \Laminas\Form\ElementInterface $element,
        string $elementContent
    ): string {

        $isCheckbox = $this->elementIsCheckbox($element);
        if ($isCheckbox) {
            return $this->renderDedicatedContainerForCheckbox($element, $elementContent);
        }

        $layoutHorizontal = $this->elementIsLayout($element, \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL);
        if (!$layoutHorizontal) {
            return $elementContent;
        }

        // Column size
        $classes = [];
        if ($column = $element->getOption('column')) {
            $classes += $this->getView()->plugin('htmlClass')->plugin('column')->getClassesFromOption($column);
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
     * @param \Laminas\Form\ElementInterface $element
     * @param string $elementContent
     * @return string
     */
    protected function renderDedicatedContainerForCheckbox(
        \Laminas\Form\ElementInterface $element,
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
                \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL
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

    protected function elementIsLayout(\Laminas\Form\ElementInterface $element, string $layout)
    {
        return $element->getOption('layout') ===  $layout;
    }

    protected function elementIsCheckbox(\Laminas\Form\ElementInterface $element)
    {
        return $element->getAttribute('type') === 'checkbox';
    }
}
