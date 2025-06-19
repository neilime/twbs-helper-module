<?php

namespace TwbsHelper\Form\View\Helper;

use Laminas\Form\ElementInterface;
use Laminas\Form\Element\Button;
use Laminas\Form\Element\MultiCheckbox;
use Laminas\Form\Element\Submit;
use Laminas\Form\LabelAwareInterface;
use TwbsHelper\Form\View\ElementHelperTrait;
use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Column;
use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Variant;
use TwbsHelper\View\HtmlAttributesSet;

class FormLabel extends \Laminas\Form\View\Helper\FormLabel
{
    use ElementHelperTrait;

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
     * @param ElementInterface $element
     * @param  null|string $labelContent
     * @param string $position
     * @return string|FormLabel
     */
    public function __invoke(
        ?ElementInterface $element = null,
        ?string $labelContent = null,
        ?string $position = null
    ) {
        if ($element === null) {
            return $this;
        }

        // Button element is a special case, because label is always rendered inside it
        if (
            $element instanceof Button
            || $element instanceof Submit
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
            $element->getAttribute('required') && !str_contains($this->requiredFormat, $label)
        ) {
            $label .= $this->requiredFormat;
        }

        if ($element instanceof MultiCheckbox) {
            return $this->getView()->plugin('htmlElement')->__invoke(
                'div',
                $labelAttributes,
                $label,
                false
            );
        }

        return $matches[1] . $label . $matches[3];
    }

    /**
     * Render element's label
     *
     * @param ElementInterface $element
     * @return string
     */
    public function renderPartial(ElementInterface $element): string
    {
        if (!$element instanceof LabelAwareInterface) {
            return '';
        }

        $label = $element->getLabel();
        if ($label && ($translator = $this->getTranslator())) {
            $label = $translator->translate($label, $this->getTranslatorTextDomain());
        }

        return $label ?? '';
    }

    protected function prepareLabelAttributes(ElementInterface $element): iterable
    {
        $disableTwbs = $element->getOption('disable_twbs');

        if ($disableTwbs || !$element instanceof LabelAwareInterface) {
            return [];
        }

        $labelAttributes = $this->getView()->plugin('htmlattributes')->__invoke($element->getLabelAttributes());

        $labelAttributes->merge(['class' => $this->getLabelClasses($element, $labelAttributes)]);

        $element->setLabelAttributes($labelAttributes->getArrayCopy());

        return $labelAttributes;
    }

    protected function getLabelClasses(
        ElementInterface $element,
        HtmlAttributesSet $labelAttributes
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

        /** @var Column $columnClassHelper **/
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

        if ($element instanceof MultiCheckbox) {
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
                    /** @var Variant $variantClassHelper **/
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
                    case Form::LAYOUT_INLINE:
                    case Form::LAYOUT_HORIZONTAL:
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
