<?php

namespace TwbsHelper\Form\View\Helper;

class FormFile extends \Laminas\Form\View\Helper\FormFile
{
    use \TwbsHelper\View\Helper\HtmlTrait;

    /**
     * Render a form <input> element from the provided $oElement
     *
     * @param \Laminas\Form\ElementInterface $oElement
     * @return string
     */
    public function render(\Laminas\Form\ElementInterface $oElement): string
    {
        return parent::render($oElement);
    }
}
