<?php

namespace TwbsHelper\Form\View\Helper;

class FormSelect extends \Laminas\Form\View\Helper\FormSelect
{
    use \TwbsHelper\View\Helper\HtmlTrait;

    /**
     * Render a form <select> element from the provided $element
     *
     * @param \Laminas\Form\ElementInterface $oElement
     * @return string
     */
    public function render(\Laminas\Form\ElementInterface $oElement): string
    {
        $this->setClassesToElement($oElement, ['form-select'], ['form-control']);


        if ($sSizeOption = $oElement->getOption('size')) {
            $this->setClassesToElement($oElement, [$this->getSizeClass(
                $sSizeOption,
                'form-select'
            )]);
        }

        return parent::render($oElement);
    }

    /**
     * Render an array of options
     *
     * Individual options should be of the form:
     *
     * <code>
     * array(
     *     'value'    => 'value',
     *     'label'    => 'label',
     *     'disabled' => $booleanFlag,
     *     'selected' => $booleanFlag,
     * )
     * </code>
     *
     * @param  array $aOptions
     * @param  array $aSelectedOptions Option values that should be marked as selected
     * @return string
     */
    public function renderOptions(array $aOptions, array $aSelectedOptions = [])
    {
        $sOptionsContent = parent::renderOptions($aOptions, $aSelectedOptions);
        if (PHP_EOL !==  "\n") {
            $sOptionsContent = str_replace("\n", PHP_EOL, $sOptionsContent);
        }

        return $this->addProperIndentation($sOptionsContent);
    }
}
