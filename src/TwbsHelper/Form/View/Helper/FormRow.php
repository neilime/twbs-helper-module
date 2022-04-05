<?php

namespace TwbsHelper\Form\View\Helper;

class FormRow extends \Laminas\Form\View\Helper\FormRow
{
    use \TwbsHelper\View\Helper\HtmlTrait;

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

    // Hold configurable options
    protected $options;

    /**
     * Constructor
     *
     * @param \TwbsHelper\Options\ModuleOptions $moduleOptions
     * @access public
     * @return void
     */
    public function __construct(\TwbsHelper\Options\ModuleOptions $moduleOptions)
    {
        $this->options = $moduleOptions;
    }

    /**
     * @param \Laminas\Form\ElementInterface $element
     * @param string|null $labelPosition
     * @return string
     */
    public function render(\Laminas\Form\ElementInterface $element, ?string $labelPosition = null): string
    {
        // Retrieve element type
        $elementType = $element->getAttribute('type');

        // Nothing to do for hidden elements which have no messages
        if ('hidden' === $elementType && !$element->getMessages()) {
            return parent::render($element, $labelPosition);
        }

        // Retrieve expected layout
        $layout = $element->getOption('layout');

        if (is_null($labelPosition)) {
            $labelPosition = $this->labelPosition;
        }

        // Partial rendering
        if ($this->partial) {
            $label = $element->getLabel();

            // Translate the label
            if (!empty($label) && null !== ($translator = $this->getTranslator())) {
                $label = $translator->translate($label, $this->getTranslatorTextDomain());
            }

            return $this->view->render(
                $this->partial,
                [
                    'element'         => $element,
                    'label'           => $label,
                    'labelAttributes' => $this->labelAttributes,
                    'labelPosition'   => $labelPosition,
                    'renderErrors'    => $this->renderErrors,
                ]
            );
        }

        // Render element
        $elementContent = $this->renderElement($element, $labelPosition);

        // Render form row
        switch (true) {
                // Form group disabled
            case $element->getOption('form_group') === false:
                // All "button" elements in inline form
            case in_array($elementType, ['submit', 'button', 'reset'], true)
                && $layout === \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE:
                return $elementContent;

            default:
                return $this->renderFormRow($element, $elementContent);
        }
    }

    /**
     * @param \Laminas\Form\ElementInterface $element
     * @return string
     */
    public function renderFormRow(\Laminas\Form\ElementInterface $element, $elementContent): string
    {
        $rowClasses = ['form-group'];

        if ($element->getMessages()) {
            $rowClasses[]  = 'has-error';
        }

        // Column
        $colum = $element->getOption('column');
        if ($colum) {
            if ($element->getOption('layout') ===  \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL) {
                $rowClasses[] = 'row';
            } else {
                $columSizes = is_array($colum) ? $colum : [$colum];
                foreach ($columSizes as $columSize) {
                    $rowClasses[] = $this->getColumnClass($columSize);
                }
            }
        }

        // Additional row class
        if ($addRowClass = $element->getOption('row_class')) {
            $rowClasses = array_merge($rowClasses, explode(' ', $addRowClass));
        }

        $attributes = $this->setClassesToAttributes(
            [],
            $rowClasses
        );

        if ($this->hasColumnClassAttribute($attributes['class'] ?? '')) {
            $attributes = $this->setClassesToAttributes(
                $attributes,
                [],
                ['form-group']
            );
        }

        // Add valid custom attributes
        if ($this->options->getValidTagAttributes()) {
            foreach ($this->options->getValidTagAttributes() as $validTagAttribute) {
                $this->addValidAttribute($validTagAttribute);
            }
        }

        if ($this->options->getValidTagAttributePrefixes()) {
            foreach ($this->options->getValidTagAttributePrefixes() as $validTagAttributePrefix) {
                $this->addValidAttributePrefix($validTagAttributePrefix);
            }
        }

        // Additional row attributes
        if ($rowAdditionalAttributes = $element->getOption('row-attributes')) {
            $attributes = array_merge($attributes, $rowAdditionalAttributes);
        }

        // Render element into form group
        return $this->htmlElement(
            'div',
            $attributes,
            $elementContent
        );
    }

    /**
     * @param \Laminas\Form\ElementInterface $element
     * @param string $labelPosition
     * @return string
     * @throws \DomainException
     */
    protected function renderElement(\Laminas\Form\ElementInterface $element, string $labelPosition = null): string
    {
        // Retrieve expected layout
        $layout = $element->getOption('layout');

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

        // Render element
        $elementContent = $this->getElementHelper()->render($element);

        $checkBoxHorizontalLogic = false;
        if (
            $element instanceof \Laminas\Form\Element\Checkbox
            && !$element instanceof \Laminas\Form\Element\MultiCheckbox
            && $layout === \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL
        ) {
            $checkBoxHorizontalLogic = true;
            $elementContent = $this->renderLabel(
                $element,
                $elementContent,
                self::LABEL_APPEND
            );
        }

        switch ($layout) {
            case null:
            case \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE:
                $renderingOrder = [
                    'renderLabel' =>  [$labelPosition],
                    'renderHelpBlock' => [],
                    'renderErrors' => [],
                    'renderValidFeedback' => [],
                    'renderDedicatedContainer' => [],
                ];
                break;
            case \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL:
                $renderingOrder = [
                    'renderHelpBlock' => [],
                    'renderErrors' => [],
                    'renderValidFeedback' => [],
                    'renderDedicatedContainer' => [],
                ];
                break;
            default:
                throw new \DomainException('Layout "' . $layout . '" is not supported');
        }

        foreach ($renderingOrder as $function => $arguments) {
            array_unshift($arguments, $element, $elementContent);
            $elementContent = call_user_func_array([$this, $function], $arguments);
        }

        if ($layout !== \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL) {
            return $elementContent;
        }

        // Column size
        $classes = [];
        if ($column = $element->getOption('column')) {
            $classes[] = $this->getColumnClass($column);

            if ($checkBoxHorizontalLogic) {
                $classes[] = $this->getOffsetCounterpartClass($column);
            }
        }

        $elementContent = $this->htmlElement(
            'div',
            $this->setClassesToAttributes([], $classes),
            $elementContent
        );

        if ($checkBoxHorizontalLogic) {
            return $elementContent;
        }

        return $this->renderLabel($element, $elementContent, $labelPosition);
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

        $position = $this->getDefaultLabelPosition($element, $labelPosition);

        return $position === self::LABEL_APPEND
            ? $elementContent . PHP_EOL . $labelContent
            : $labelContent . PHP_EOL . $elementContent;
    }

    protected function getDefaultLabelPosition(\Laminas\Form\ElementInterface $element, $labelPosition = null): string
    {

        if ($element instanceof \Laminas\Form\LabelAwareInterface) {
            $position = $element->getLabelOption('position');
            if ($position) {
                return $position;
            }
        }

        if ($element instanceof \Laminas\Form\Element\MultiCheckbox) {
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

        $attributes = [];
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
                $attributes = \Laminas\Stdlib\ArrayUtils::merge($attributes, $helpBlock['attributes']);
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

        $classes = ['text-muted'];
        if ($element->getOption('layout') !== \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE) {
            $classes[] = 'form-text';
        }

        return $elementContent . PHP_EOL . $this->htmlElement(
            'small',
            $this->setClassesToAttributes($attributes, $classes),
            $content
        );
    }

    /**
     * Render element's errors
     *
     * @param \Laminas\Form\ElementInterface $element
     * @return string
     */
    protected function renderValidFeedback(\Laminas\Form\ElementInterface $element, string $elementContent): string
    {
        $validFeedback = $element->getOption('valid_feedback');
        if ($validFeedback) {
            $validFeedbackContent = $this->htmlElement('div', ['class' => 'valid-feedback'], $validFeedback);
            $elementContent .= PHP_EOL . $validFeedbackContent;
        }

        return $elementContent;
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
            $elementErrorsContent = $this->getElementErrorsHelper()->render($element);
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
        if ($element->getAttribute('type') === 'checkbox') {
            $classesToAdd =  $element->getOption('custom')
                // Custom checkbox classes
                ? [
                    'custom-control',
                    $element->getOption('switch')
                        // Switch custom checkbox
                        ? 'custom-switch'
                        // Regular custom checkbox
                        : 'custom-checkbox',
                ]
                // Regular checkbox class
                : ['form-check'];
            $elementContent = $this->htmlElement(
                'div',
                $this->setClassesToAttributes(
                    ['class' => $element->getOption('form_check_class')],
                    $classesToAdd
                ),
                $elementContent
            );
        }

        return $elementContent;
    }

    /**
     * The class that is added to element that are valid or have valid feedback
     *
     * @return string
     */
    public function getInputValidClass(): string
    {
        return $this->inputValidClass;
    }
}
