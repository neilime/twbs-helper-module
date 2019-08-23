<?php

namespace TwbsHelper\Form\View\Helper;

class FormSelect extends \Zend\Form\View\Helper\FormSelect
{
    use \TwbsHelper\View\Helper\ClassAttributeTrait;
    use \TwbsHelper\View\Helper\HtmlTrait;

    /**
     * Render a form <select> element from the provided $element
     *
     * @param \Zend\Form\ElementInterface $element
     * @throws Exception\InvalidArgumentException
     * @throws Exception\DomainException
     * @return string
     */
    public function render(\Zend\Form\ElementInterface $oElement): string
    {
        if ($bIsCustom = $oElement->getOption('custom')) {
            $this->setClassesToElement($oElement, ['custom-select']);
        }

        if ($sSizeOption = $oElement->getOption('size')) {
            $this->setClassesToElement($oElement, [$this->getSizeClass(
                $sSizeOption,
                $bIsCustom ? 'custom-select' : 'form-control'
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
     * @param  array $options
     * @param  array $selectedOptions Option values that should be marked as selected
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
