<?php

namespace TwbsHelper\Form\View\Helper;

class FormRange extends \Laminas\Form\View\Helper\FormRange
{
    use \TwbsHelper\View\Helper\ClassAttributeTrait;

    /**
     * Render a form <input> element from the provided $element
     */
    public function render(\Laminas\Form\ElementInterface $element): string
    {
        $isCustom = $element->getOption('custom');

        $this->setClassesToElement(
            $element,
            [$isCustom ? 'custom-range' : 'form-control-range'],
            ['form-control']
        );
        return parent::render($element);
    }
}
