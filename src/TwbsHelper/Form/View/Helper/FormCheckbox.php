<?php

namespace TwbsHelper\Form\View\Helper;

use Zend\Form\View\Helper\FormRow;
use Zend\Form\View\Helper\FormCheckbox as ZendFormCheckboxViewHelper;
use Zend\Form\ElementInterface;
use InvalidArgumentException;
use LogicException;
use Zend\Form\Element\Checkbox;
use Zend\Form\View\Helper\FormLabel;

/**
 * FormCheckbox
 *
 * @uses ZendFormCheckboxViewHelper
 */
class FormCheckbox extends ZendFormCheckboxViewHelper
{
    use \TwbsHelper\View\Helper\ClassAttributeTrait;

    /**
     * Form label helper instance
     *
     * @var FormLabel
     */
    protected $oLabelHelper;

    /**
     * The class that is added to element that have errors
     *
     * @var string
     */
    protected static $sInputErrorClass = 'is-invalid';


    /**
     * render
     *
     * @see    ZendFormCheckboxViewHelper::render()
     * @param  ElementInterface $oElement
     * @throws LogicException
     * @throws InvalidArgumentException
     * @access public
     * @return string
     */
    public function render(ElementInterface $oElement)
    {
        if ($oElement->getOption('disable-twbs')) {
            return parent::render($oElement);
        }

        if (!$oElement instanceof Checkbox) {
            throw new InvalidArgumentException(
                sprintf(
                    '%s requires that the element is of type Zend\Form\Element\Checkbox',
                    __METHOD__
                )
            );
        }

        if (($sName = $oElement->getName()) !== 0 && empty($sName)) {
            throw new LogicException(
                sprintf(
                    '%s requires that the element has an assigned name; none discovered',
                    __METHOD__
                )
            );
        }

        $aAttributes          = $oElement->getAttributes();
        $aAttributes['name']  = $sName;
        $aAttributes['type']  = $this->getInputType();
        $aAttributes['value'] = $oElement->getCheckedValue();
        $aAttributes['class'] = join(' ', $this->addClassesAttribute($aAttributes['class'] ?? '', [$this->getClass()]));
        $sClosingBracket      = $this->getInlineClosingBracket();

        if ($oElement->isChecked()) {
            $aAttributes['checked'] = 'checked';
        }

        // Render label
        $sLabel        = '';
        $sLabelContent = $this->getLabelContent($oElement);

        if ($sLabelContent) {
            $oLabelHelper     = $this->getLabelHelper();
            $aLabelAttributes = $this->setClassesToAttributes($oElement->getLabelAttributes(), ['form-check-label']);

            // Set label "for" attribute with element "id" attribute when defined
            if (empty($aLabelAttributes['for']) && !empty($aAttributes['id'])) {
                $aLabelAttributes['for'] = $aAttributes['id'];
            }


            $sLabel = $oLabelHelper->openTag($aLabelAttributes) . $sLabelContent . $oLabelHelper->closeTag();
        }

        // Render checkbox
        $sElementContent = sprintf('<input %s%s', $this->createAttributesString($aAttributes), $sClosingBracket);

        // Attach label to input
        $sElementContent .= PHP_EOL . $sLabel;

        // Render hidden input
        if ($oElement->useHiddenElement()) {
            $sElementContent = sprintf(
                '<input type="hidden" %s%s',
                $this->createAttributesString([
                    'name'  => $aAttributes['name'],
                    'value' => $oElement->getUncheckedValue(),
                ]),
                $sClosingBracket
            ) . PHP_EOL . $sElementContent;
        }

        return $sElementContent;
    }


    /**
     * getLabelContent
     *
     * @param  ElementInterface $oElement
     * @access public
     * @return string
     */
    public function getLabelContent(ElementInterface $oElement)
    {
        $sLabelContent = $oElement->getLabel();

        if ($sLabelContent) {
            if ($oTranslator = $this->getTranslator()) {
                $sLabelContent = $oTranslator->translate($sLabelContent, $this->getTranslatorTextDomain());
            }
        }

        return $sLabelContent;
    }


    /**
     * getLabelHelper
     * Retrieve the FormLabel helper
     *
     * @access protected
     * @return FormLabel
     */
    protected function getLabelHelper()
    {
        if ($this->oLabelHelper) {
            return $this->oLabelHelper;
        }

        if (method_exists($this->view, 'plugin')) {
            $this->oLabelHelper = $this->view->plugin('form_label');
        }

        if (!($this->oLabelHelper instanceof FormLabel)) {
            $this->oLabelHelper = new FormLabel();
        }

        if ($this->hasTranslator()) {
            $this->oLabelHelper->setTranslator($this->getTranslator(), $this->getTranslatorTextDomain());
        }

        return $this->oLabelHelper;
    }


    /**
     * getClass
     * Return class
     *
     * @access protected
     * @return void
     */
    protected function getClass()
    {
        return 'form-check-input';
    }
}
