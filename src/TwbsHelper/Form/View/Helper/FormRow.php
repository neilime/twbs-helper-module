<?php

namespace TwbsHelper\Form\View\Helper;

use DomainException;
use Zend\Form\ElementInterface;
use Zend\Form\LabelAwareInterface;
use Zend\Form\Element\Button;
use Zend\Form\Element\Submit;

/**
 * FormRow
 *
 * @uses ZendFormRowViewHelper
 */
class FormRow extends \Zend\Form\View\Helper\FormRow
{
    use \TwbsHelper\View\Helper\ClassAttributeTrait;
    use \TwbsHelper\View\Helper\HtmlTrait;

    /**
     * @var string
     */
    protected static $helpBlockFormat = '<small class="form-text text-muted">%s</small>';

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
     * render
     *
     * @see    FormRow::render()
     * @param  ElementInterface $oElement
     * @param  mixed            $sLabelPosition
     * @access public
     * @return string
     */
    public function render(ElementInterface $oElement, $sLabelPosition = null)
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
                    if (!preg_match('/(\s|^)' . preg_quote($sInputErrorClass, '/') . '(\s|$)/', $sElementClass)) {
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
                    ['class' => $this->getRowClassFromElement($oElement)],
                    $oElement->getOption('feedback')
                );
        }
    }


    /**
     * getRowClassFromElement
     *
     * @param  ElementInterface $oElement
     * @access public
     * @return string
     */
    public function getRowClassFromElement(\Zend\Form\ElementInterface $oElement)
    {
        $sRowClass = '';

        if ($sFormGroupSize = $oElement->getOption('twbs-form-group-size')) {
            $sRowClass = $sFormGroupSize;
        }

        // Validation state
        if (($sValidationState = $oElement->getOption('validation-state'))) {
            $sRowClass .= ' has-' . $sValidationState;
        }

        if ($oElement->getMessages()) {
            $sRowClass .= ' has-error';
        }

        if ($oElement->getOption('feedback')) {
            $sRowClass .= ' has-feedback';
        }

        // Column size
        $sColumSize = $oElement->getOption('column-size');
        if (
            $sColumSize
            && $oElement->getOption('twbs-layout') !== Form::LAYOUT_HORIZONTAL
        ) {
            $sColumSize = (is_array($sColumSize)) ? $sColumSize : [$sColumSize];
            $sRowClass .= implode(
                '',
                array_map(
                    function ($item) {
                        return ' col-' . $item;
                    },
                    $sColumSize
                )
            );
        }

        // Additional row class
        if ($sAddRowClass = $oElement->getOption('twbs-row-class')) {
            $sRowClass .= ' ' . $sAddRowClass;
        }

        return $sRowClass;
    }

    /**
     * Render form group HTML
     *
     * @param  string $sElementContent
     * @param  string $sRowClass
     * @param  string $sFeedbackElement A feedback element that should be rendered within the element, optional
     * @access public
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
     * renderLabel
     * Render element's label
     *
     * @param  ElementInterface $oElement
     * @access protected
     * @return string
     */
    protected function renderLabel(ElementInterface $oElement): string
    {
        if (($sLabel = $oElement->getLabel()) && ($oTranslator = $this->getTranslator())) {
            $sLabel = $oTranslator->translate($sLabel, $this->getTranslatorTextDomain());
        }

        return $sLabel;
    }

    protected function renderLabelContent(ElementInterface $oElement): string
    {

        $sLabelContent = $this->renderLabel($oElement);
        /*
         * Multicheckbox elements have to be handled differently
         * as the HTML standard does not allow nested labels.
         * The semantic way is to group them inside a fieldset
         */
        $sElementType = $oElement->getAttribute('type');

        // Button element is a special case, because label is always rendered inside it
        if (($oElement instanceof Button) or ($oElement instanceof Submit)) {
            return '';
        } else {
            $aLabelAttributes = $oElement->getLabelAttributes() ?: $this->labelAttributes;

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
                $aLabelAttributes['class'] = join(' ', $this->addClassesAttribute(
                    $aLabelAttributes['class'] ?? '',
                    $aLabelClasses
                ));
            }

            if ($aLabelAttributes) {
                $oElement->setLabelAttributes($aLabelAttributes);
            }

            $oLabelHelper = $this->getLabelHelper();
            $sLabelOpen  = $oLabelHelper->openTag($oElement->getAttribute('id') ? $oElement : $aLabelAttributes);
            $sLabelClose = $oLabelHelper->closeTag();

            // Allow label html escape disable
            if (!$oElement instanceof LabelAwareInterface || !$oElement->getLabelOption('disable_html_escape')) {
                $sLabelContent = $this->getEscapeHtmlHelper()->__invoke($sLabelContent);
            }
        }

        // Add required string if element is required
        if (
            $this->requiredFormat &&
            $oElement->getAttribute('required') && strpos($this->requiredFormat, $sLabelContent) === false
        ) {
            $sLabelContent .= $this->requiredFormat;
        }

        return $sLabelOpen . $sLabelContent . $sLabelClose;
    }

    /**
     *
     * @param  ElementInterface $oElement
     * @param  string           $sLabelPosition
     * @access protected
     * @return string
     * @throws DomainException
     */
    protected function renderElement(ElementInterface $oElement, $sLabelPosition = null): string
    {
        // Retrieve expected layout
        $sLayout = $oElement->getOption('twbs-layout');
        $sElementType = $oElement->getAttribute('type');

        // Define label position
        if ($sLabelPosition === null) {
            $sLabelPosition = $this->getLabelPosition();
        }

        $sLabelContent = $this->renderLabelContent($oElement);

        switch ($sLayout) {
            case null:
            case Form::LAYOUT_INLINE:
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
                } elseif ($sLabelContent) {
                    if ($sLabelPosition === self::LABEL_PREPEND) {
                        $sElementContent = $sLabelContent . PHP_EOL . $sElementContent;
                    } else {
                        $sElementContent = $sElementContent . PHP_EOL . $sLabelContent;
                    }
                }

                // Render help block
                $sElementContent .= $this->renderHelpBlock($oElement);

                // Render errors
                if ($this->renderErrors) {
                    $sErrorMessages = $this->getElementErrorsHelper()->render($oElement);
                } else {
                    $sErrorMessages = '';
                }

                $sElementContent .= $sErrorMessages;

                return $sElementContent;

            case Form::LAYOUT_HORIZONTAL:
                $sElementContent = $this->getElementHelper()->render($oElement) . $this->renderHelpBlock($oElement);

                // Render errors
                if ($this->renderErrors) {
                    $sElementContent .= $this->getElementErrorsHelper()->render($oElement);
                }

                $sClass = '';

                // Column size
                if ($sColumSize = $oElement->getOption('column-size')) {
                    $sClass .= ' col-' . $sColumSize;
                }

                // Checkbox elements are a special case, element is rendered into label
                if ($sElementType === 'checkbox') {
                    return $this->htmlElement(
                        'div',
                        ['class' => $sClass],
                        $this->htmlElement(
                            'div',
                            ['class' => 'form-check'],
                            $sElementContent
                        )
                    );
                }

                $sElementContent = $this->htmlElement(
                    'div',
                    ['class' => $sClass],
                    $sElementContent
                );

                if (!$sLabelContent) {
                    return $sElementContent;
                }

                if ($sLabelPosition === self::LABEL_PREPEND) {
                    return $sLabelContent . PHP_EOL . $sElementContent;
                }
                return $sElementContent . PHP_EOL . $sLabelContent;
        }

        throw new DomainException('Layout "' . $sLayout . '" is not valid');
    }


    /**
     * renderHelpBlock
     * Render element's help block
     *
     * @param  ElementInterface $oElement
     * @access protected
     * @return string
     */
    protected function renderHelpBlock(ElementInterface $oElement)
    {
        if ($sHelpBlock = $oElement->getOption('help-block')) {
            if ($oTranslator = $this->getTranslator()) {
                $sHelpBlock = $oTranslator->translate($sHelpBlock, $this->getTranslatorTextDomain());
            }

            $sHelpBlockString = strip_tags($sHelpBlock);

            if ($sHelpBlock === $sHelpBlockString) {
                $sHelpBlock = $this->getEscapeHtmlHelper()->__invoke($sHelpBlock);
            }

            return sprintf(static::$helpBlockFormat, $sHelpBlock);
        } else {
            return '';
        }
    }
}
