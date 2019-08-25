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

        $sElementContent =  parent::render($this->setClassesToElement(
            $oElement,
            [$bCustom ? 'custom-file-input' : 'form-control-file'],
            ['form-control']
        ));

        if ($bCustom) {
            if ($sLabel = $oElement->getOption('custom_label')) {
                $sLabelTmp = $oElement->getLabel();
                $oElement->setLabel($sLabel);
                $sLabel = $this->view->plugin('form_label')->__invoke($oElement);
                $oElement->setLabel($sLabelTmp ?? '');
                if ($sLabel) {
                    $sElementContent .= PHP_EOL . $sLabel;
                }
            }

            $sElementContent = $this->htmlElement(
                'div',
                ['class' => 'custom-file'],
                $sElementContent
            );
        }
        return $sElementContent;
    }
}
