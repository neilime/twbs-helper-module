<?php

namespace TwbsHelper\Form\View\Helper;

class FormRange extends \Laminas\Form\View\Helper\FormRange
{
    use \TwbsHelper\View\Helper\ClassAttributeTrait;

    /**
     * Render a form <input> element from the provided $oElement
     *
     * @param \Laminas\Form\ElementInterface $oElement
     * @return string
     */
    public function render(\Laminas\Form\ElementInterface $oElement): string
    {
        $bIsCustom = $oElement->getOption('custom');

        $this->setClassesToElement(
            $oElement,
            [$bIsCustom ? 'custom-range' : 'form-control-range'],
            ['form-control']
        );
        return parent::render($oElement);
    }
}
