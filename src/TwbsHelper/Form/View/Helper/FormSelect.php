<?php

namespace TwbsHelper\Form\View\Helper;

class FormSelect extends \Laminas\Form\View\Helper\FormSelect
{
    use \TwbsHelper\View\Helper\HtmlTrait;

    /**
     * Render a form <select> element from the provided $element
     *
     * @param \Laminas\Form\ElementInterface $element
     * @return string
     */
    public function render(\Laminas\Form\ElementInterface $element): string
    {
        if ($isCustom = $element->getOption('custom')) {
            $this->setClassesToElement($element, ['custom-select']);
        }

        if ($sizeOption = $element->getOption('size')) {
            $this->setClassesToElement($element, [$this->getSizeClass(
                $sizeOption,
                $isCustom ? 'custom-select' : 'form-control'
            )]);
        }

        return parent::render($element);
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
    public function renderOptions(array $options, array $selectedOptions = []): string
    {
        $optionsContent = parent::renderOptions($options, $selectedOptions);
        if (PHP_EOL !==  "\n") {
            $optionsContent = str_replace("\n", PHP_EOL, $optionsContent);
        }

        return $this->addProperIndentation($optionsContent);
    }
}
