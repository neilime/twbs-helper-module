<?php

namespace TwbsHelper\Form\View\Helper;

use Laminas\Form\ElementInterface;
use TwbsHelper\Form\View\ElementHelperTrait;

class FormRange extends \Laminas\Form\View\Helper\FormRange
{
    use ElementHelperTrait;

    /**
     * Render a form <input> element from the provided $element
     */
    public function render(ElementInterface $element): string
    {
        $isCustom = $element->getOption('custom');

        $this->setClassesToElement(
            $element,
            [$isCustom ? 'custom-range' : 'form-range'],
            ['form-control']
        );
        return parent::render($element);
    }
}
