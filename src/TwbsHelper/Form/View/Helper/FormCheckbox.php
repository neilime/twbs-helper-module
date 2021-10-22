<?php

namespace TwbsHelper\Form\View\Helper;

class FormCheckbox extends \Laminas\Form\View\Helper\FormCheckbox
{
    use \TwbsHelper\View\Helper\ClassAttributeTrait;

    /**
     * Render a form <checkbox> element from the provided $element
     */
    public function render(\Laminas\Form\ElementInterface $element): string
    {
        if (!$element->getOption('disable_twbs')) {
            $this->setClassesToElement(
                $element,
                [$element->getOption('custom') ? 'custom-control-input' : 'form-check-input'],
                ['form-control']
            );
        }

        return parent::render($element);
    }
}
