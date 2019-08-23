<?php

namespace TwbsHelper\Form\View\Helper;

class FormFile extends \Zend\Form\View\Helper\FormInput
{
    use \TwbsHelper\View\Helper\ClassAttributeTrait;
    use \TwbsHelper\View\Helper\HtmlTrait;

    /**
     * Render a form <input> element from the provided $oElement
     *
     * @param \Zend\Form\ElementInterface $oElement
     * @return string
     */
    public function render(\Zend\Form\ElementInterface $oElement): string
    {
        $bCustom = $oElement->getOption('custom');

        return  parent::render($this->setClassesToElement(
            $oElement,
            [$bCustom ? 'custom-file-input' : 'form-control-file'],
            ['form-control']
        ));
    }
}
