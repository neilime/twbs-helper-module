<?php

namespace TwbsHelper\Form\View\Helper;

class FormLabel extends \Laminas\Form\View\Helper\FormLabel
{
    use \TwbsHelper\Form\View\ElementHelperTrait;

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



        $labelAttributes = $this->prepareLabelAttributes($element);
        $markup = parent::__invoke($element, $labelContent, $position);

        $disableTwbs = $element->getOption('disable_twbs');
        if ($disableTwbs) {
            return $markup;
        }

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
            return $this->getView()->plugin('htmlElement')->__invoke(
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

    protected function prepareLabelAttributes(\Laminas\Form\ElementInterface $element): iterable
    {
        $disableTwbs = $element->getOption('disable_twbs');

        if ($disableTwbs || !$element instanceof \Laminas\Form\LabelAwareInterface) {
            return [];
        }

        $labelAttributes = $this->getView()->plugin('htmlattributes')->__invoke($element->getLabelAttributes());

        $labelAttributes->merge(['class' => $this->getLabelClasses($element, $labelAttributes)]);

        $element->setLabelAttributes($labelAttributes->getArrayCopy());

        return $labelAttributes;
    }

    protected function getLabelClasses(
        \Laminas\Form\ElementInterface $element,
        \TwbsHelper\View\HtmlAttributesSet $labelAttributes
    ): iterable {
        $labelClasses = $labelAttributes['class'];

        if ($element->getOption('show_label') === false) {
            $labelClasses[] = 'visually-hidden';
            return $labelClasses;
        }

        $layout = $element->getOption('layout');

        // Define label column class
        $columSize = $element->getOption('column');

        $isCheckboxWithLayout = $element->getAttribute('type') === 'checkbox'
            && $layout;

        /** @var \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Column $columnClassHelper **/
        $columnClassHelper = $this->getView()->plugin('htmlClass')->plugin('column');

        $shouldAddColumnCounterpartClass = $columSize
            && $layout !== null
            && !$columnClassHelper->classesIncludeColumn($labelClasses)
            && !$isCheckboxWithLayout;
        if (
            $shouldAddColumnCounterpartClass
        ) {
            $labelClasses->merge(
                $this->getView()->plugin('htmlClass')->plugin('columnCounterpart')->getClassesFromOption($columSize)
            );
        }

        // Define label size class
        if ($size = $element->getOption('size')) {
            $labelClasses->merge(
                $this->getView()->plugin('htmlClass')->plugin('size')->getClassesFromOption($size, 'col-form-label')
            );
        }

        if ($element instanceof \Laminas\Form\Element\MultiCheckbox) {
            $labelClasses[] = 'form-label';
            return $labelClasses;
        }

        if ($element->getOption('floating_label')) {
            return $labelClasses;
        }

        switch ($element->getAttribute('type')) {
            case 'checkbox':
                $buttonOption = $element->getOption('button');
                if ($buttonOption) {
                    /** @var \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Variant $variantClassHelper **/
                    $variantClassHelper = $this->getView()->plugin('htmlClass')->plugin('variant');

                    $labelClasses[] = 'btn';
                    if (is_string($buttonOption)) {
                        $labelClasses->merge($variantClassHelper->getClassesFromOption(
                            $buttonOption,
                            'btn',
                            'outline'
                        ));
                    }

                    if (!$variantClassHelper->classesIncludeVariant($labelClasses, 'btn', 'outline')) {
                        $labelClasses->merge($variantClassHelper->getClassesFromOption('secondary', 'btn'));
                    }
                } else {
                    $labelClasses[] = 'form-check-label';
                }
                break;

            default:
                // Validation state
                if ($element->getOption('validation-state') || $element->getMessages()) {
                    $labelClasses[] = 'col-form-label';
                }

                switch ($layout) {
                    case \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE:
                    case \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL:
                        $labelClasses[] = 'col-form-label';
                        break;

                    case null:
                        $labelClasses[] = 'form-label';
                        break;
                }
        }

        return $labelClasses;
    }
}
