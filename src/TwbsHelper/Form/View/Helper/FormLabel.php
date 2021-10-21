<?php

namespace TwbsHelper\Form\View\Helper;

class FormLabel extends \Laminas\Form\View\Helper\FormLabel
{
    use \TwbsHelper\View\Helper\HtmlTrait;

    /**
     * @var string
     */
    protected $requiredFormat = null;

    /**
     * Generate a form label, optionally with content
     *
     * Always generates a "for" statement, as we cannot assume the form input
     * will be provided in the $labelContent.
     *
     * @param \Laminas\Form\ElementInterface $element
     * @param  null|string $labelContent
     * @param string $position
     * @return string|\TwbsHelper\Form\View\Helper\FormLabel
     */
    public function __invoke(
        \Laminas\Form\ElementInterface $element = null,
        ?string $labelContent = null,
        string $position = null
    ) {
        if ($element === null) {
            return $this;
        }

        // Button element is a special case, because label is always rendered inside it
        if (
            $element instanceof \Laminas\Form\Element\Button
            || $element instanceof \Laminas\Form\Element\Submit
        ) {
            return $labelContent;
        }

        if ($element instanceof \Laminas\Form\LabelAwareInterface) {
            $labelAttributes = $element->getLabelAttributes();
            $labelAttributes = $this->setClassesToAttributes(
                $labelAttributes,
                $this->getLabelClasses($element, $labelAttributes)
            );
            $element->setLabelAttributes($labelAttributes);
        } else {
            $labelAttributes = [];
        }

        $markup = parent::__invoke($element, $labelContent, $position);
        if (!preg_match('/(<label[^>]*>)([\s\S]*)(<\/label[^>]*>)/imU', $markup, $matches)) {
            return $markup;
        }

        $label = trim($matches[2]);
        if (!$label) {
            return $labelContent;
        }

        // Add required string if element is required
        if (
            $this->requiredFormat &&
            $element->getAttribute('required') && strpos($this->requiredFormat, $label) === false
        ) {
            $label .= $this->requiredFormat;
        }

        if ($element instanceof \Laminas\Form\Element\MultiCheckbox) {
            return $this->htmlElement(
                'div',
                $labelAttributes,
                $label,
                !$element->getLabelOption('disable_html_escape')
            );
        }

        return $matches[1] . $label . $matches[3];
    }

    /**
     * Render element's label
     *
     * @param \Laminas\Form\ElementInterface $element
     * @return string
     */
    public function renderPartial(\Laminas\Form\ElementInterface $element): string
    {
        if (!$element instanceof \Laminas\Form\LabelAwareInterface) {
            return '';
        }

        $label = $element->getLabel();
        if ($label && ($translator = $this->getTranslator())) {
            $label = $translator->translate($label, $this->getTranslatorTextDomain());
        }

        return $label ?? '';
    }

    protected function getLabelClasses(\Laminas\Form\ElementInterface $element, array $labelAttributes): array
    {
        $labelClasses = [];

        $layout = $element->getOption('layout');

        // Define label column class
        $columSize = $element->getOption('column');
        if (
            $columSize
            && $element->getOption('layout') !== null
            && !$this->hasColumnClassAttribute($labelAttributes['class'] ?? '')
            && !($element instanceof \Laminas\Form\Element\Checkbox
                && !$element instanceof \Laminas\Form\Element\MultiCheckbox
                && $layout === \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL)
        ) {
            $labelClasses[] = $this->getColumnCounterpartClass($columSize);
        }

        // Define label size class
        if ($size = $element->getOption('size')) {
            $labelClasses[] = $this->getSizeClass($size, 'col-form-label');
        }

        if ($element instanceof \Laminas\Form\Element\MultiCheckbox) {
            return $labelClasses;
        }

        switch ($element->getAttribute('type')) {
            case 'checkbox':
            case 'radio':
                $labelClasses[] = $element->getOption('custom')
                    ? 'custom-control-label'
                    : 'form-check-label';
                break;

            case 'file':
                if ($element->getOption('custom')) {
                    $labelClasses[] = 'custom-file-label';
                }

                break;

            default:
                // Validation state
                if ($element->getOption('validation-state') || $element->getMessages()) {
                    $labelClasses[] = 'col-form-label';
                }

                switch ($layout) {
                        // Hide label for "inline" layout
                    case \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE:
                        if ($element->getOption('show_label') !== true) {
                            $labelClasses[] = 'sr-only';
                        }

                        break;

                    case \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL:
                        $labelClasses[] = 'col-form-label';
                        break;
                    case null:
                        if ($element->getOption('show_label') === false) {
                            $labelClasses[] = 'sr-only';
                        }

                        break;
                }
        }

        return $labelClasses;
    }
}
