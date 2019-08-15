<?php

namespace TwbsHelper\Form\View\Helper;

class FormRow extends \Zend\Form\View\Helper\FormRow
{
    use \TwbsHelper\View\Helper\ClassAttributeTrait;
    use \TwbsHelper\View\Helper\HtmlTrait;

    /**
     * The class that is added to element that have errors
     *
     * @var string
     */
    protected $inputErrorClass = 'is-invalid';

    /**
     * @var string
     */
    protected $requiredFormat = null;

    /**
     * @param \Zend\Form\ElementInterface $oElement
     * @param string|null $sLabelPosition
     * @return string
     */
    public function render(\Zend\Form\ElementInterface $oElement, $sLabelPosition = null): string
    {
        // Retrieve element type
        $sElementType = $oElement->getAttribute('type');

        // Nothing to do for hidden elements which have no messages
        if ('hidden' === $sElementType && !$oElement->getMessages()) {
            return parent::render($oElement, $sLabelPosition);
        }

        // Retrieve expected layout
        $sLayout = $oElement->getOption('layout');

        // Partial rendering
        if ($this->partial) {
            return $this->view->render(
                $this->partial,
                [
                    'element'         => $oElement,
                    'label'           => $this->renderLabel($oElement),
                    'labelAttributes' => $this->labelAttributes,
                    'labelPosition'   => $sLabelPosition,
                    'renderErrors'    => $this->renderErrors,
                ]
            );
        }

        // "has-error" validation state case
        if ($oElement->getMessages()) {
            // Element have errors
            if ($sInputErrorClass = $this->getInputErrorClass()) {
                if ($sElementClass = $oElement->getAttribute('class')) {
                    if (!$this->hasClassAttribute($sElementClass, $sInputErrorClass)) {
                        $oElement->setAttribute('class', trim($sElementClass . ' ' . $sInputErrorClass));
                    }
                } else {
                    $oElement->setAttribute('class', $sInputErrorClass);
                }
            }
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
            case in_array($sElementType, ['submit', 'button', 'reset'], true)
                && $sLayout === \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE:
                return $sElementContent;

            default:
                return $this->renderFormRow($oElement, $sElementContent);
        }
    }

    /**
     * @param \Zend\Form\ElementInterface $oElement
     * @return string
     */
    public function renderFormRow(\Zend\Form\ElementInterface $oElement, $sElementContent): string
    {
        $aRowClasses = ['form-group'];

        if ($sFormGroupSize = $oElement->getOption('twbs-form-group-size')) {
            $aRowClasses[] = $sFormGroupSize;
        }

        // Validation state
        if (($sValidationState = $oElement->getOption('validation-state'))) {
            $aRowClasses[] = 'has-' . $sValidationState;
        }

        if ($oElement->getMessages()) {
            $aRowClasses[]  = 'has-error';
        }

        if ($oElement->getOption('feedback')) {
            $aRowClasses[]  = 'has-feedback';
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

        $aAttributes = $this->setClassesToAttributes(
            [],
            $aRowClasses
        );

        if ($this->hasColumnClassAttribute($aAttributes['class'] ?? '')) {
            $aAttributes = $this->setClassesToAttributes(
                $aAttributes,
                [],
                ['form-group']
            );
        }


        // Render element into form group
        return $this->htmlElement(
            'div',
            $aAttributes,
            $sElementContent
        );
    }

    /**
     * @param \Zend\Form\ElementInterface $oElement
     * @param string $sLabelPosition
     * @return string
     * @throws \DomainException
     */
    protected function renderElement(\Zend\Form\ElementInterface $oElement, string $sLabelPosition = null): string
    {
        // Retrieve expected layout
        $sLayout = $oElement->getOption('layout');

        // Render element
        $sElementContent = $this->getElementHelper()->render($oElement);

        switch ($sLayout) {
            case null:
            case \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE:
                $aRenderingOrder = [
                    'renderFeedback' => [],
                    'renderLabelContent' =>  [$sLabelPosition],
                    'renderHelpBlock' => [],
                    'renderErrors' => [],
                    'renderCheckbox' => [],
                ];
                break;
            case \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL:
                $aRenderingOrder = [
                    'renderFeedback' => [],
                    'renderHelpBlock' => [],
                    'renderErrors' => [],
                    'renderCheckbox' => [],
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
        }

        $sElementContent = $this->htmlElement(
            'div',
            $this->setClassesToAttributes([], $aClasses),
            $sElementContent
        );

        return $this->renderLabelContent($oElement, $sElementContent, $sLabelPosition);
    }

    /**
     * Render element's label
     *
     * @param \Zend\Form\ElementInterface $oElement
     * @return string
     */
    protected function renderLabel(\Zend\Form\ElementInterface $oElement): string
    {
        $sLabel = $oElement->getLabel();
        if ($sLabel && ($oTranslator = $this->getTranslator())) {
            $sLabel = $oTranslator->translate($sLabel, $this->getTranslatorTextDomain());
        }

        return $sLabel ?? '';
    }

    protected function renderLabelContent(
        \Zend\Form\ElementInterface $oElement,
        string $sElementContent,
        string $sLabelPosition = null
    ): string {

        $sLabelContent = $this->renderLabel($oElement);
        if (!$sLabelContent) {
            return $sElementContent;
        }

        // Button element is a special case, because label is always rendered inside it
        if (
            $oElement instanceof \Zend\Form\Element\Button
            || $oElement instanceof \Zend\Form\Element\Submit
        ) {
            return $sElementContent;
        }

        $aLabelAttributes = $oElement instanceof \Zend\Form\LabelAwareInterface
            ? $oElement->getLabelAttributes()
            : $this->labelAttributes ?? [];

        $aLabelClasses = [];

        // Define label column class
        $sColumSize = $oElement->getOption('column');
        if (
            $sColumSize
            && $oElement->getOption('layout') !== null
            && !$this->hasColumnClassAttribute($aLabelAttributes['class'] ?? '')
        ) {
            $aLabelClasses[] = $this->getColumnCounterpartClass($sColumSize);
        }

        // Define label size class
        if ($sSize = $oElement->getOption('size')) {
            $aLabelClasses[] = $this->getSizeClass($sSize, 'col-form-label');
        }

        if (!$oElement instanceof \Zend\Form\Element\MultiCheckbox) {
            $sElementType = $oElement->getAttribute('type');
            if (in_array($sElementType, ['checkbox', 'radio'], true)) {
                $aLabelClasses[] = $oElement->getOption('custom')
                    ? 'custom-control-label'
                    : 'form-check-label';
            } else {
                // Validation state
                if ($oElement->getOption('validation-state') || $oElement->getMessages()) {
                    $aLabelClasses[] = 'col-form-label';
                }

                $sLayout = $oElement->getOption('layout');
                switch ($sLayout) {
                        // Hide label for "inline" layout
                    case \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE:
                        if ($oElement->getOption('show_label') !== true) {
                            $aLabelClasses[] = 'sr-only';
                        }
                        break;

                    case \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL:
                        $aLabelClasses[] = 'col-form-label';
                        break;
                    case null:
                        if ($oElement->getOption('show_label') === false) {
                            $aLabelClasses[] = 'sr-only';
                        }
                        break;
                }
            }
        }

        if ($aLabelClasses) {
            $aLabelAttributes = $this->setClassesToAttributes($aLabelAttributes, $aLabelClasses);
        }

        if ($aLabelAttributes) {
            $oElement->setLabelAttributes($aLabelAttributes);
        }

        // Allow label html escape disable
        if (
            !$oElement instanceof \Zend\Form\LabelAwareInterface
            || !$oElement->getLabelOption('disable_html_escape')
        ) {
            $sLabelContent = $this->getEscapeHtmlHelper()->__invoke($sLabelContent);
        }

        // Add required string if element is required
        if (
            $this->requiredFormat &&
            $oElement->getAttribute('required') && strpos($this->requiredFormat, $sLabelContent) === false
        ) {
            $sLabelContent .= $this->requiredFormat;
        }


        if ($oElement instanceof \Zend\Form\Element\MultiCheckbox) {
            $sLabelContent = $this->htmlElement(
                'div',
                $aLabelAttributes,
                $sLabelContent,
                !$oElement->getLabelOption('disable_html_escape')
            );
        } else {
            $oLabelHelper = $this->getLabelHelper();
            $sLabelOpen  = $oLabelHelper->openTag($oElement->getAttribute('id') ? $oElement : $aLabelAttributes);
            $sLabelClose = $oLabelHelper->closeTag();
            $sLabelContent = $sLabelOpen . $sLabelContent . $sLabelClose;
        }

        $sElementType = $oElement->getAttribute('type');
        $sLabelPosition = in_array($sElementType, ['checkbox', 'radio'], true)
            ? self::LABEL_APPEND
            : $sLabelPosition ?? $this->getLabelPosition();

        return $sLabelPosition === self::LABEL_PREPEND
            ? $sLabelContent . PHP_EOL . $sElementContent
            : $sElementContent . PHP_EOL . $sLabelContent;
    }

    /**
     * Render element's help block
     *
     * @param \Zend\Form\ElementInterface $oElement
     * @return string
     */
    protected function renderHelpBlock(\Zend\Form\ElementInterface $oElement, string $sElementContent): string
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
                $aAttributes = \Zend\Stdlib\ArrayUtils::merge($aAttributes, $sHelpBlock['attributes']);
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

        $aClasses = ['text-muted'];
        if ($oElement->getOption('layout') !== \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE) {
            $aClasses[] = 'form-text';
        }

        return $sElementContent . PHP_EOL . $this->htmlElement(
            'small',
            $this->setClassesToAttributes($aAttributes, $aClasses),
            $sContent
        );
    }

    /**
     * Render element's errors
     *
     * @param \Zend\Form\ElementInterface $oElement
     * @return string
     */
    protected function renderErrors(\Zend\Form\ElementInterface $oElement, string $sElementContent): string
    {
        if (!$this->renderErrors) {
            return '';
            $sElementErrorsContent = $this->getElementErrorsHelper()->render($oElement);
            if ($sElementErrorsContent) {
                $sElementContent .= PHP_EOL . $sElementErrorsContent;
            }
        }
        return $sElementContent;
    }

    /**
     * Render element's errors
     *
     * @param \Zend\Form\ElementInterface $oElement
     * @param string $sElementContent
     * @return string
     */
    protected function renderFeedback(\Zend\Form\ElementInterface $oElement, string $sElementContent): string
    {
        $sFeedback = $oElement->getOption('feedback');
        if ($sFeedback) {
            if (!is_string($sFeedback)) {
                throw new \InvalidArgumentException(sprintf(
                    'Argument "$sFeedbackElement" expects a string, "%s" given',
                    is_object($sFeedback) ? get_class($sFeedback) : gettype($sFeedback)
                ));
            }
            $sElementContent .= '<i class="' . $sFeedback . ' form-control-feedback"></i>';
        }
        return $sElementContent;
    }

    protected function renderCheckbox(\Zend\Form\ElementInterface $oElement, string $sElementContent): string
    {
        $sElementType = $oElement->getAttribute('type');
        if (in_array($sElementType, ['checkbox'], true)) {
            $sElementContent = $this->htmlElement(
                'div',
                $this->setClassesToAttributes(
                    ['class' => $oElement->getOption('form_check_class')],
                    $oElement->getOption('custom')
                        ? ['custom-control', 'custom-checkbox']
                        : ['form-check']
                ),
                $sElementContent
            );
        }
        return $sElementContent;
    }
}
