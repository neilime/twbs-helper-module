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
     * @param \TwbsHelper\Options\ModuleOptions $options
     * @access public
     * @return void
     */
    public function __construct(\TwbsHelper\Options\ModuleOptions $options)
    {
        $this->options = $options;
    }

    /**
     * @param \Laminas\Form\ElementInterface $oElement
     * @param string|null $sLabelPosition
     * @return string
     */
    public function render(\Laminas\Form\ElementInterface $oElement, $sLabelPosition = null): string
    {
        // Retrieve element type
        $sElementType = $oElement->getAttribute('type');

        // Nothing to do for hidden elements which have no messages
        if ('hidden' === $sElementType && !$oElement->getMessages()) {
            return parent::render($oElement, $sLabelPosition);
        }

        // Retrieve expected layout
        $sLayout = $oElement->getOption('layout');

        if (is_null($sLabelPosition)) {
            $sLabelPosition = $this->labelPosition;
        }

        // Partial rendering
        if ($this->partial) {
            $sLabel = $oElement->getLabel();

            if (!empty($sLabel)) {
                // Translate the label
                if (null !== ($oTranslator = $this->getTranslator())) {
                    $sLabel = $oTranslator->translate($sLabel, $this->getTranslatorTextDomain());
                }
            }

            return $this->view->render(
                $this->partial,
                [
                    'element'         => $oElement,
                    'label'           => $sLabel,
                    'labelAttributes' => $this->labelAttributes,
                    'labelPosition'   => $sLabelPosition,
                    'renderErrors'    => $this->renderErrors,
                ]
            );
        }

        // Render element
        $sElementContent = $this->renderElement($oElement, $sLabelPosition);

        // Render form row
        switch (true) {
                // Form group disabled
            case $oElement->getOption('form_group') === false:
                // Radio elements
            case in_array($sElementType, ['radio'], true):
                // All "button" elements in inline form
            case in_array($sElementType, ['submit', 'button', 'reset'], true):
                return $sElementContent;

            default:
                return $this->renderFormRow($oElement, $sElementContent);
        }
    }

    /**
     * @param \Laminas\Form\ElementInterface $oElement
     * @return string
     */
    public function renderFormRow(\Laminas\Form\ElementInterface $oElement, $sElementContent): string
    {

        $aAttributes = $this->setClassesToAttributes(
            [],
            $this->getElementRowClasses($oElement)
        );

        if ($this->hasColumnClassAttribute($aAttributes['class'] ?? '')) {
            $aAttributes = $this->setClassesToAttributes(
                $aAttributes,
                [],
                ['form-group']
            );
        }

        // Add valid custom attributes
        if ($this->options->getValidTagAttributes()) {
            foreach ($this->options->getValidTagAttributes() as $attribute) {
                $this->addValidAttribute($attribute);
            }
        }

        if ($this->options->getValidTagAttributePrefixes()) {
            foreach ($this->options->getValidTagAttributePrefixes() as $prefix) {
                $this->addValidAttributePrefix($prefix);
            }
        }

        // Additional row attributes
        if ($aRowAdditionalAttributes = $oElement->getOption('row-attributes')) {
            $aAttributes = array_merge($aAttributes, $aRowAdditionalAttributes);
        }

        // Render element into form group
        return $this->htmlElement(
            'div',
            $aAttributes,
            $sElementContent
        );
    }

    /**
     * @param \Laminas\Form\ElementInterface $oElement
     * @return array
     */
    protected function getElementRowClasses(\Laminas\Form\ElementInterface $oElement): array
    {
        $aRowClasses = [$this->options->getDefaultRowSpacingClass()];

        if ($oElement->getMessages()) {
            $aRowClasses[]  = 'has-error';
        }

        // Column
        $sColum = $oElement->getOption('column');
        if ($sColum) {
            if ($oElement->getOption('layout') ===  \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL) {
                $aRowClasses[] = 'row';
            } else {
                $aColumSizes = is_array($sColum) ? $sColum : [$sColum];
                foreach ($aColumSizes as $sColumSize) {
                    $aRowClasses[] = $this->getColumnClass($sColumSize);
                }
            }
        }

        // Additional row class
        if ($sAddRowClass = $oElement->getOption('row_class')) {
            $aRowClasses = array_merge($aRowClasses, explode(' ', $sAddRowClass));
        }

        return $aRowClasses;
    }

    /**
     * @param \Laminas\Form\ElementInterface $oElement
     * @param string $sLabelPosition
     * @return string
     * @throws \DomainException
     */
    protected function renderElement(\Laminas\Form\ElementInterface $oElement, string $sLabelPosition = null): string
    {
        // Retrieve expected layout
        $sLayout = $oElement->getOption('layout');

        // "is-invalid" validation state case
        if ($oElement->getMessages()) {
            // Element have errors
            if ($sInputErrorClass = $this->getInputErrorClass()) {
                $this->setClassesToElement($oElement, [$sInputErrorClass]);
            }
        } elseif ($oElement->getOption('valid_feedback')) { // "is-valid" validation state case
            // Element have errors
            if ($sInputValidClass = $this->getInputValidClass()) {
                $this->setClassesToElement($oElement, [$sInputValidClass]);
            }
        }

        // Render element
        $sElementContent = $this->getElementHelper()->render($oElement);

        $checkBoxHorizontalLogic = false;
        if (
            $oElement instanceof \Laminas\Form\Element\Checkbox
            && !$oElement instanceof \Laminas\Form\Element\MultiCheckbox
            && $sLayout === \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL
        ) {
            $checkBoxHorizontalLogic = true;
            $sElementContent = $this->renderLabel(
                $oElement,
                $sElementContent,
                self::LABEL_APPEND
            );
        }

        switch ($sLayout) {
            case null:
            case \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE:
                $aRenderingOrder = [
                    'renderLabel' =>  [$sLabelPosition],
                    'renderHelpBlock' => [],
                    'renderErrors' => [],
                    'renderValidFeedback' => [],
                    'renderDedicatedContainer' => [],
                ];
                break;
            case \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL:
                $aRenderingOrder = [
                    'renderHelpBlock' => [],
                    'renderErrors' => [],
                    'renderValidFeedback' => [],
                    'renderDedicatedContainer' => [],
                ];
                break;
            default:
                throw new \DomainException('Layout "' . $sLayout . '" is not supported');
        }

        foreach ($aRenderingOrder as $sFunction => $aArguments) {
            array_unshift($aArguments, $oElement, $sElementContent);
            $sElementContent = call_user_func_array([$this, $sFunction], $aArguments);
        }

        if ($sLayout !== \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL) {
            return $sElementContent;
        }

        // Column size
        $aClasses = [];
        if ($sColumn = $oElement->getOption('column')) {
            $aClasses[] = $this->getColumnClass($sColumn);

            if ($checkBoxHorizontalLogic) {
                $aClasses[] = $this->getOffsetCounterpartClass($sColumn);
            }
        }

        $sElementContent = $this->htmlElement(
            'div',
            $this->setClassesToAttributes([], $aClasses),
            $sElementContent
        );

        if ($checkBoxHorizontalLogic) {
            return $sElementContent;
        }

        return $this->renderLabel($oElement, $sElementContent, $sLabelPosition);
    }


    /**
     * Render element's label
     *
     * @param \Laminas\Form\ElementInterface $oElement
     * @param string $sElementContent
     * @param string $sLabelPosition
     * @return string
     */
    protected function renderLabel(
        \Laminas\Form\ElementInterface $oElement,
        string $sElementContent,
        string $sLabelPosition = null
    ): string {

        if (!$oElement->getLabel()) {
            return $sElementContent;
        }

        $sLabelContent = $this->getLabelHelper()->__invoke($oElement);

        if (!$sLabelContent) {
            return $sElementContent;
        }

        $sPosition = $this->getDefaultLabelPosition($oElement, $sLabelPosition);

        return $sPosition === self::LABEL_APPEND
            ? $sElementContent . PHP_EOL . $sLabelContent
            : $sLabelContent . PHP_EOL . $sElementContent;
    }

    protected function getDefaultLabelPosition(\Laminas\Form\ElementInterface $oElement, $sLabelPosition = null): string
    {

        if ($oElement instanceof \Laminas\Form\LabelAwareInterface) {
            $sPosition = $oElement->getLabelOption('position');
            if ($sPosition) {
                return $sPosition;
            }
        }

        switch ($oElement->getAttribute('type')) {
            case 'checkbox':
            case 'radio':
                return self::LABEL_APPEND;
            case 'file':
                if ($oElement->getOption('custom')) {
                    return self::LABEL_APPEND;
                }
                // Default behaviour
            default:
                if ($sLabelPosition) {
                    return $sLabelPosition;
                }
                return $this->getLabelPosition();
        }
    }

    /**
     * Render element's help block
     *
     * @param \Laminas\Form\ElementInterface $oElement
     * @return string
     */
    protected function renderHelpBlock(\Laminas\Form\ElementInterface $oElement, string $sElementContent): string
    {
        $sHelpBlock = $oElement->getOption('help_block');
        if (!$sHelpBlock) {
            return $sElementContent;
        }

        $aAttributes = [];
        if (is_string($sHelpBlock)) {
            $sContent = $sHelpBlock;
        } elseif (is_array($sHelpBlock)) {
            if (empty($sHelpBlock['content'])) {
                throw new \InvalidArgumentException(
                    'Option "[help_block][content]" is undefined'
                );
            }
            $sContent = $sHelpBlock['content'];
            if (!is_string($sContent)) {
                throw new \InvalidArgumentException(sprintf(
                    'Option "[help_block][content]" expects a string, "%s" given',
                    is_object($sContent) ? get_class($sContent) : gettype($sContent)
                ));
            }
            if (!empty($sHelpBlock['attributes'])) {
                $aAttributes = \Laminas\Stdlib\ArrayUtils::merge($aAttributes, $sHelpBlock['attributes']);
            }
        } else {
            throw new \InvalidArgumentException(sprintf(
                'Option "help_block" expects a string or an array, "%s" given',
                is_object($sHelpBlock) ? get_class($sHelpBlock) : gettype($sHelpBlock)
            ));
        }
        if ($oTranslator = $this->getTranslator()) {
            $sContent = $oTranslator->translate($sContent, $this->getTranslatorTextDomain());
        }

        $bIsLayoutInline = $oElement->getOption('layout') === \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE;

        $sHelpBlockContent = $this->htmlElement(
            $bIsLayoutInline ? 'span' : 'div',
            $this->setClassesToAttributes($aAttributes, ['form-text']),
            $sContent
        );

        if ($bIsLayoutInline) {
            $sHelpBlockContent = $this->htmlElement(
                'div',
                $this->setClassesToAttributes([], ['col-auto']),
                $sHelpBlockContent
            );
        }

        return $sElementContent . PHP_EOL . $sHelpBlockContent;
    }

    /**
     * Render element's errors
     *
     * @param \Laminas\Form\ElementInterface $oElement
     * @return string
     */
    protected function renderValidFeedback(\Laminas\Form\ElementInterface $oElement, string $sElementContent): string
    {
        $sValidFeedback = $oElement->getOption('valid_feedback');
        if ($sValidFeedback) {
            $sValidFeedbackContent = $this->htmlElement('div', ['class' => 'valid-feedback'], $sValidFeedback);
            $sElementContent .= PHP_EOL . $sValidFeedbackContent;
        }
        return $sElementContent;
    }

    /**
     * Render element's errors
     *
     * @param \Laminas\Form\ElementInterface $oElement
     * @return string
     */
    protected function renderErrors(\Laminas\Form\ElementInterface $oElement, string $sElementContent): string
    {
        if ($this->renderErrors) {
            $sElementErrorsContent = $this->getElementErrorsHelper()->render($oElement);
            if ($sElementErrorsContent) {
                $sElementContent .= PHP_EOL . $sElementErrorsContent;
            }
        }
        return $sElementContent;
    }

    /**
     * Render element's dedicated container
     *
     * @param \Laminas\Form\ElementInterface $oElement
     * @param string $sElementContent
     * @return string
     */
    protected function renderDedicatedContainer(
        \Laminas\Form\ElementInterface $oElement,
        string $sElementContent
    ): string {
        switch ($oElement->getAttribute('type')) {
            case 'checkbox':
                $bIsCustom = $oElement->getOption('custom');
                if ($bIsCustom) {
                    $bIsSwitch = $oElement->getOption('switch');

                    // Custom checkbox classes
                    $aClassesToAdd = [
                        'custom-control',

                        // Switch custom checkbox
                        $bIsSwitch  ? 'custom-switch'
                            // Regular custom checkbox
                            : 'custom-checkbox',
                    ];
                } else {
                    $aClassesToAdd = ['form-check'];
                }

                $sElementContent = $this->htmlElement(
                    'div',
                    $this->setClassesToAttributes(
                        ['class' => $oElement->getOption('form_check_class')],
                        $aClassesToAdd
                    ),
                    $sElementContent
                );
                break;
        }
        return $sElementContent;
    }

    /**
     * The class that is added to element that are valid or have valid feedback
     *
     * @return string
     */
    public function getInputValidClass()
    {
        return $this->inputValidClass;
    }
}
