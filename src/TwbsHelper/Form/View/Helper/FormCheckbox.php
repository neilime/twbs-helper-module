<?php

namespace TwbsHelper\Form\View\Helper;

class FormCheckbox extends \Laminas\Form\View\Helper\FormCheckbox
{
    use \TwbsHelper\Form\View\ElementHelperTrait;

    /**
     * Render a form <checkbox> element from the provided $element
     */
    public function render(\Laminas\Form\ElementInterface $element): string
    {
        if (!$element->getOption('disable_twbs')) {
            if ($element->getOption('switch') && !$element->getAttribute('role')) {
                $element->setAttribute('role', 'switch');
            }
            if ($element->getOption('button')) {
                $this->setClassesToElement(
                    $element,
                    ['btn-check']
                );
            } else {
                $this->setClassesToElement(
                    $element,
                    ['form-check-input']
                );
            }
        }

        return parent::render($element);
    }
}
