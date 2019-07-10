<?php

namespace TwbsHelper\Form\View\Helper;

class FormFile extends \Zend\Form\View\Helper\FormInput
{
    use \TwbsHelper\View\Helper\ClassAttributeTrait;

    /**
     * Render a form <input> element from the provided $oElement
     *
     * @param \Zend\Form\ElementInterface $oElement
     * @return string
     */
    public function render(\Zend\Form\ElementInterface $oElement): string
    {
        $oElement->setAttributes($this->setClassesToAttributes(
            $oElement->getAttributes() ?? [],
            ['form-control-file'],
            ['form-control']
        ));
        return parent::render($oElement);
    }
}
