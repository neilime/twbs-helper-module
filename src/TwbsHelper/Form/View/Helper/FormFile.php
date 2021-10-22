<?php

namespace TwbsHelper\Form\View\Helper;

class FormFile extends \Laminas\Form\View\Helper\FormFile
{
    use \TwbsHelper\View\Helper\HtmlTrait;

    /**
     * Render a form <input> element from the provided $element
     *
     * @param \Laminas\Form\ElementInterface $element
     * @return string
     */
    public function render(\Laminas\Form\ElementInterface $element): string
    {
        $custom = $element->getOption('custom');

        $elementContent =  parent::render($this->setClassesToElement(
            $element,
            [$custom ? 'custom-file-input' : 'form-control-file'],
            ['form-control']
        ));

        if ($custom) {
            if ($label = $element->getOption('custom_label')) {
                $labelTmp = $element->getLabel();
                $element->setLabel($label);
                $label = $this->getView()->plugin('form_label')->__invoke($element);
                $element->setLabel($labelTmp ?? '');
                if ($label) {
                    $elementContent .= PHP_EOL . $label;
                }
            }

            $elementContent = $this->htmlElement(
                'div',
                ['class' => 'custom-file'],
                $elementContent
            );
        }
        return $elementContent;
    }
}
