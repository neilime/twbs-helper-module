<?php

namespace TwbsHelper\Form\View\Helper;

class FormSelect extends \Zend\Form\View\Helper\FormSelect
{
    use \TwbsHelper\View\Helper\HtmlTrait;

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
