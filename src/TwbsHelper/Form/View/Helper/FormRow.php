<?php

namespace TwbsHelper\Form\View\Helper;

class FormRow extends \Zend\Form\View\Helper\FormRow
{
    use \TwbsHelper\View\Helper\HtmlTrait;

    /**
     * The class that is added to element that have errors
     *
     * @var string
     */
    protected $inputErrorClass = 'is-invalid';

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
                    'label'           => $this->getLabelHelper()->renderPartial($oElement),
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
                    'renderLabel' =>  [$sLabelPosition],
                    'renderHelpBlock' => [],
                    'renderErrors' => [],
                    'renderDedicatedContainer' => [],
                ];
                break;
            case \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL:
                $aRenderingOrder = [
                    'renderFeedback' => [],
                    'renderHelpBlock' => [],
                    'renderErrors' => [],
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
        }

        $sElementContent = $this->htmlElement(
            'div',
            $this->setClassesToAttributes([], $aClasses),
            $sElementContent
        );

        return $this->renderLabel($oElement, $sElementContent, $sLabelPosition);
    }


    /**
     * Render element's label
     *
     * @param \Zend\Form\ElementInterface $oElement
     * @param string $sElementContent
     * @param string $sLabelPosition
     * @return string
     */
    protected function renderLabel(
        \Zend\Form\ElementInterface $oElement,
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

    protected function getDefaultLabelPosition(\Zend\Form\ElementInterface $oElement, $sLabelPosition = null): string
    {

        if ($oElement instanceof \Zend\Form\LabelAwareInterface) {
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
        if ($this->renderErrors) {
            $sElementErrorsContent = $this->getElementErrorsHelper()->render($oElement);
            if ($sElementErrorsContent) {
                $sElementContent .= PHP_EOL . $sElementErrorsContent;
            }
        }
        return $sElementContent;
    }

    /**
     * Render element's feedback
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

    /**
     * Render element's dedicated container
     *
     * @param \Zend\Form\ElementInterface $oElement
     * @param string $sElementContent
     * @return string
     */
    protected function renderDedicatedContainer(\Zend\Form\ElementInterface $oElement, string $sElementContent): string
    {
        switch ($oElement->getAttribute('type')) {
            case 'checkbox':
                $aClassesToAdd =  $oElement->getOption('custom')
                    // Custom checkbox classes
                    ? [
                        'custom-control',
                        $oElement->getOption('switch')
                            // Switch custom checkbox
                            ? 'custom-switch'
                            // Regular custom checkbox
                            : 'custom-checkbox',
                    ]
                    // Regular checkbox class
                    : ['form-check'];

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
}
