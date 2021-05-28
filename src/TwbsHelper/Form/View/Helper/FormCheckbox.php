<?php

namespace TwbsHelper\Form\View\Helper;

class FormCheckbox extends \Laminas\Form\View\Helper\FormCheckbox
{
    use \TwbsHelper\View\Helper\ClassAttributeTrait;

    /**
     * Render a form <checkbox> element from the provided $oElement
     *
     * @param \Laminas\Form\ElementInterface $oElement
     * @return string
     */
    public function render(\Laminas\Form\ElementInterface $oElement): string
    {
        if (!$oElement->getOption('disable_twbs')) {
            $this->setClassesToElement(
                $oElement,
                ['form-check-input']
            );
        }
        return parent::render($oElement);
    }
}
