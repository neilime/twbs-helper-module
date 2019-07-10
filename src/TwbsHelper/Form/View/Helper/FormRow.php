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
        $sLayout = $oElement->getOption('twbs-layout');

        // Define label position
        if ($sLabelPosition === null) {
            $sLabelPosition = $this->getLabelPosition();
        }

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
                // Checkbox element not in horizontal form
            case $sElementType === 'checkbox'
                && $sLayout !== Form::LAYOUT_HORIZONTAL
                && !$oElement->getOption('form-group'):
                // All "button" elements in inline form
            case in_array($sElementType, ['submit', 'button', 'reset'], true) && $sLayout === Form::LAYOUT_INLINE:
                return $sElementContent;

            default:
                // Render element into form group
                return $this->renderElementFormGroup(
                    $sElementContent,
                    $this->setClassesToAttributes(
                        [],
                        $this->getRowClassesFromElement($oElement)
                    ),
                    $oElement->getOption('feedback')
                );
        }
    }


    /**
     * @param \Zend\Form\ElementInterface $oElement
     * @return string
     */
    public function getRowClassesFromElement(\Zend\Form\ElementInterface $oElement): array
    {
        $aRowClasses = [];

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

        // Column size
        $sColumSize = $oElement->getOption('column-size');
        if ($sColumSize) {
            if ($oElement->getOption('twbs-layout') === Form::LAYOUT_HORIZONTAL) {
                $aRowClasses[] = 'row';
            } else {
                $aColumSizes = (is_array($sColumSize)) ? $sColumSize : [$sColumSize];
                foreach ($aColumSizes as $sColumSize) {
                    $aRowClasses[] = 'col-' . $sColumSize;
                }
            }
        }

        // Additional row class
        if ($sAddRowClass = $oElement->getOption('twbs-row-class')) {
            $aRowClasses = array_merge($aRowClasses, explode(' ', $sAddRowClass));
        }

        return $aRowClasses;
    }

    /**
     * Render form group HTML
     *
     * @param string $sElementContent
     * @param string $sRowClass
     * @param string $sFeedbackElement A feedback element that should be rendered within the element, optional
     * @return string
     * @throws \InvalidArgumentException
     */
    public function renderElementFormGroup(
        string $sElementContent,
        array $aAttributes = [],
        string $sFeedbackElement = null
    ): string {
        if (!is_string($sElementContent)) {
            throw new \InvalidArgumentException(sprintf(
                'Argument "$sElementContent" expects a string, "%s" given',
                is_object($sElementContent) ? get_class($sElementContent) : gettype($sElementContent)
            ));
        }
        if ($sFeedbackElement) {
            if (!is_string($sFeedbackElement)) {
                throw new \InvalidArgumentException(sprintf(
                    'Argument "$sFeedbackElement" expects a string, "%s" given',
                    is_object($sFeedbackElement) ? get_class($sFeedbackElement) : gettype($sFeedbackElement)
                ));
            }
            $sElementContent .= '<i class="' . $sFeedbackElement . ' form-control-feedback"></i>';
        }

        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes($aAttributes, ['form-group']),
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
        $sLayout = $oElement->getOption('twbs-layout');
        $sElementType = $oElement->getAttribute('type');

        switch ($sLayout) {
            case null:
            case Form::LAYOUT_INLINE:
                // Render element
                $sElementContent = $this->getElementHelper()->render($oElement);

                // Checkbox elements are a special case, element is already rendered into label
                if ($sElementType === 'checkbox') {
                    $sElementContent = $this->htmlElement(
                        'div',
                        $this->setClassesToAttributes(
                            ['class' => $oElement->getOption('twbs-row-class')],
                            ['form-group', 'form-check']
                        ),
                        $sElementContent
                    );
                } else {
                    // Render label
                    $sElementContent = $this->renderLabelContent($oElement, $sElementContent, $sLabelPosition);
                }

                // Render help block
                $sElementContent = $this->renderHelpBlock($oElement, $sElementContent);

                // Render errors
                $sElementContent = $this->renderErrors($oElement, $sElementContent);

                return $sElementContent;

            case Form::LAYOUT_HORIZONTAL:
                // Render element
                $sElementContent = $this->getElementHelper()->render($oElement);

                // Render help block
                $sElementContent = $this->renderHelpBlock($oElement, $sElementContent);

                // Render errors
                $sElementContent = $this->renderErrors($oElement, $sElementContent);

                $aClasses = [];

                // Column size
                if ($sColumSize = $oElement->getOption('column-size')) {
                    $aClasses[] = 'col-' . $sColumSize;
                }

                // Checkbox elements are a special case, element is rendered into label
                if ($sElementType === 'checkbox') {
                    return $this->htmlElement(
                        'div',
                        $this->setClassesToAttributes([], $aClasses),
                        $this->htmlElement(
                            'div',
                            ['class' => 'form-check'],
                            $sElementContent
                        )
                    );
                }

                $sElementContent = $this->htmlElement(
                    'div',
                    $this->setClassesToAttributes([], $aClasses),
                    $sElementContent
                );

                // Render label
                $sElementContent = $this->renderLabelContent(
                    $oElement,
                    $sElementContent,
                    $sLabelPosition
                );

                return $sElementContent;
        }

        throw new \DomainException('Layout "' . $sLayout . '" is not valid');
    }

    /**
     * Render element's label
     *
     * @param \Zend\Form\ElementInterface $oElement
     * @return string
     */
    protected function renderLabel(\Zend\Form\ElementInterface $oElement): string
    {
        if (($sLabel = $oElement->getLabel()) && ($oTranslator = $this->getTranslator())) {
            $sLabel = $oTranslator->translate($sLabel, $this->getTranslatorTextDomain());
        }

        return $sLabel;
    }

    protected function renderLabelContent(
        \Zend\Form\ElementInterface $oElement,
        string $sElementContent,
        string $sLabelPosition = null
    ): string {

        $sLabelContent = $this->renderLabel($oElement);

        /*
         * Multicheckbox elements have to be handled differently
         * as the HTML standard does not allow nested labels.
         * The semantic way is to group them inside a fieldset
         */
        $sElementType = $oElement->getAttribute('type');

        // Button element is a special case, because label is always rendered inside it
        if (
            $oElement instanceof \Zend\Form\Element\Button
            || $oElement instanceof \Zend\Form\Element\Submit
        ) {
            return $sElementContent;
        }
        $aLabelAttributes = $oElement->getLabelAttributes() ?? $this->labelAttributes ?? [];

        $aLabelClasses = [];

        // Validation state
        if (
            $sElementType !== 'checkbox'
            && ($oElement->getOption('validation-state') || $oElement->getMessages())
        ) {
            $aLabelClasses[] = 'control-label';
        }

        $sLayout = $oElement->getOption('twbs-layout');
        switch ($sLayout) {
                // Hide label for "inline" layout
            case Form::LAYOUT_INLINE:
                if ($sElementType !== 'checkbox' && !$oElement->getOption('showLabel')) {
                    $aLabelClasses[] = 'sr-only';
                }
                break;

            case Form::LAYOUT_HORIZONTAL:
                if ($sElementType !== 'checkbox') {
                    $aLabelClasses[] = 'control-label';
                }
                break;
        }

        if ($aLabelClasses) {
            $aLabelAttributes = $this->setClassesToAttributes($aLabelAttributes, $aLabelClasses);
        }

        // Define label column-size classes
        if ($sColumSize = $oElement->getOption('column-size')) {
            $aLabelAttributes['class'] = str_replace('control-label', '', $aLabelAttributes['class'] ?? '');
            $aLabelClasses = ['col-form-label'];

            if (!$this->hasColumnClassAttribute($aLabelAttributes['class'])) {
                $aColumnParts = $this->getColumnClassParts($sColumSize);
                $aLabelClasses[] = 'col-' . $aColumnParts['size'] . '-' . (12 - $aColumnParts['number']);
            }
            $aLabelAttributes = $this->setClassesToAttributes($aLabelAttributes, $aLabelClasses);
        }

        if ($aLabelAttributes) {
            $oElement->setLabelAttributes($aLabelAttributes);
        }

        $oLabelHelper = $this->getLabelHelper();
        $sLabelOpen  = $oLabelHelper->openTag($oElement->getAttribute('id') ? $oElement : $aLabelAttributes);
        $sLabelClose = $oLabelHelper->closeTag();

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

        $sLabelContent = $sLabelOpen . $sLabelContent . $sLabelClose;

        // Define label position
        if ($sLabelPosition === null) {
            $sLabelPosition = $this->getLabelPosition();
        }

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

        return $sElementContent . PHP_EOL . $this->htmlElement(
            'small',
            $this->setClassesToAttributes($aAttributes, ['form-text', 'text-muted']),
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
}
