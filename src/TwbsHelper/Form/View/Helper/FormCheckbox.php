<?php

namespace TwbsHelper\Form\View\Helper;

use Laminas\Form\ElementInterface;
use TwbsHelper\Form\View\ElementHelperTrait;

class FormCheckbox extends \Laminas\Form\View\Helper\FormCheckbox
{
    use ElementHelperTrait;

    /**
     * Render a form <checkbox> element from the provided $element
     */
    public function render(ElementInterface $element): string
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
