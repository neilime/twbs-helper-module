<?php
namespace TwbsHelper\Form\View\Helper;

use Zend\Form\ElementInterface;
use Zend\Form\Exception;
use Zend\Form\View\Helper\FormInput;


/**
 * FormFile 
 * 
 * @uses FormInput
 */
class FormFile extends FormInput
{
    /**
     * Attributes valid for the input tag type="file"
     *
     * @var array
     */
    protected $validTagAttributes = [
        'name'      => true,
        'accept'    => true,
        'autofocus' => true,
        'disabled'  => true,
        'form'      => true,
        'multiple'  => true,
        'required'  => true,
        'type'      => true,
    ];

    /**
     * render 
     * Render a form <input> element from the provided $oElement
     *
     * @param  ElementInterface $oElement
     * @throws Exception\DomainException
     * @access public
     * @return string
     */
    public function render(ElementInterface $oElement)
    {
        $sName = $oElement->getName();

        if (null === $sName || '' === $sName) {
            throw new Exception\DomainException(sprintf(
                '%s requires that the element has an assigned name; none discovered',
                __METHOD__
            ));
        }

        $aAttributes          = $oElement->getAttributes();
        $aAttributes['type']  = $this->getType($oElement);
        $aAttributes['name']  = $sName;

        if (array_key_exists('multiple', $aAttributes) && $aAttributes['multiple']) {
            $aAttributes['name'] .= '[]';
        }

        $sValue = $oElement->getValue();

        if (is_array($sValue) && isset($sValue['name']) && ! is_array($sValue['name'])) {
            $aAttributes['value'] = $sValue['name'];

        } elseif (is_string($sValue)) {
            $aAttributes['value'] = $sValue;
        }

		// Add BS4 form-control-file class if not set
		$aAttributes['class']  = !empty($aAttributes['class']) ? $aAttributes['class'] : '';
		$aAttributes['class'] .= (false === strpos($aAttributes['class'], 'form-control-file')) ? ' form-control-file' : '';

        return sprintf(
            '<input %s%s',
            $this->createAttributesString($aAttributes),
            $this->getInlineClosingBracket()
        );
    }

    /**
     * Determine input type to use
     *
     * @param  ElementInterface $oElement
     * @return string
     */
    protected function getType(ElementInterface $oElement)
    {
        return 'file';
    }
}

