<?php

namespace TwbsHelper\Form\View\Helper;

class FormRow extends \Laminas\Form\View\Helper\FormRow
{
    use \TwbsHelper\Form\View\ElementHelperTrait;

    // Hold configurable options
    protected $options;

    /**
     * Form label helper instance
     *
     * @var null|FormRowElement
     */
    protected $rowElementHelper;

    /**
     * Constructor
     *
     * @param \TwbsHelper\Options\ModuleOptions $moduleOptions
     * @access public
     * @return void
     */
    public function __construct(\TwbsHelper\Options\ModuleOptions $moduleOptions)
    {
        $this->options = $moduleOptions;
    }

    /**
     * @param \Laminas\Form\ElementInterface $element
     * @param string|null $labelPosition
     * @return string
     */
    public function render(\Laminas\Form\ElementInterface $element, ?string $labelPosition = null): string
    {

        // Nothing to do for hidden elements which have no messages
        if ('hidden' === $element->getAttribute('type') && !$element->getMessages()) {
            return parent::render($element, $labelPosition);
        }

        if ($element->getOption('floating_label')) {
            $labelPosition = self::LABEL_APPEND;
        } elseif (is_null($labelPosition)) {
            $labelPosition = $this->labelPosition;
        }

        // Partial rendering
        if ($this->partial) {
            return $this->renderPartial($element, $labelPosition);
        }

        // Render element
        $elementContent = $this->renderElement($element, $labelPosition);

        return $this->renderFormRow($element, $elementContent);
    }

    /**
     * @param \Laminas\Form\ElementInterface $element
     * @param string|null $labelPosition
     * @return string
     */
    protected function renderPartial(\Laminas\Form\ElementInterface $element, ?string $labelPosition = null): string
    {
        $label = $element->getLabel();

        // Translate the label
        if (!empty($label) && null !== ($translator = $this->getTranslator())) {
            $label = $translator->translate($label, $this->getTranslatorTextDomain());
        }

        return $this->view->render(
            $this->partial,
            [
                'element'         => $element,
                'label'           => $label,
                'labelAttributes' => $this->labelAttributes,
                'labelPosition'   => $labelPosition,
                'renderErrors'    => $this->renderErrors,
            ]
        );
    }

    /**
     * @param \Laminas\Form\ElementInterface $element
     * @return string
     */
    public function renderFormRow(\Laminas\Form\ElementInterface $element, string $elementContent): string
    {

        // Render form row
        $elementType = $element->getAttribute('type');
        switch (true) {
            // Inline form
            case $this->elementIsLayout($element, \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE):
                // Form group disabled
            case $element->getOption('form_group') === false:
                // Radio elements
            case $elementType === 'radio':
                // All "button" elements having no column options
            case in_array($elementType, ['submit', 'button', 'reset'], true) && !$element->getOption('column'):
                return $elementContent;
        }

        $attributes = $this->getView()->plugin('htmlattributes')->__invoke([
            'class' => $this->getElementRowClasses($element),
        ]);

        /** @var \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Column $columnClassHelper **/
        $columnClassHelper = $this->getView()->plugin('htmlClass')->plugin('column');
        if ($columnClassHelper->classesIncludeColumn($attributes['class'])) {
            $attributes->offsetGet('class')->remove('form-group');
        }

        // Add valid custom attributes
        if ($this->options->getValidTagAttributes()) {
            foreach ($this->options->getValidTagAttributes() as $validTagAttribute) {
                $this->addValidAttribute($validTagAttribute);
            }
        }

        if ($this->options->getValidTagAttributePrefixes()) {
            foreach ($this->options->getValidTagAttributePrefixes() as $validTagAttributePrefix) {
                $this->addValidAttributePrefix($validTagAttributePrefix);
            }
        }

        // Additional row attributes
        if ($rowAdditionalAttributes = $element->getOption('row-attributes')) {
            $attributes->merge($rowAdditionalAttributes);
        }

        // Render element into form group
        $elementContent = $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            $attributes,
            $elementContent
        );

        return $elementContent;
    }

    /**
     * @param \Laminas\Form\ElementInterface $element
     * @return array
     */
    protected function getElementRowClasses(\Laminas\Form\ElementInterface $element): array
    {

        $rowClasses = [];
        $shouldDefaultRowSpacingClass = !($element->getOption('row_spacing_class') === false);

        // Column
        $colum = $element->getOption('column');
        if ($colum) {
            if ($this->elementIsLayout($element, \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL)) {
                $rowClasses[] = 'row';
            } else {
                $columnClasses = $this->getView()->plugin('htmlClass')->plugin('column')->getClassesFromOption($colum);

                $rowClasses = array_merge($rowClasses, $columnClasses);

                $shouldDefaultRowSpacingClass = false;
            }
        }

        if ($shouldDefaultRowSpacingClass) {
            $defaultRowSpacingClasses = $this->getView()->plugin('htmlClass')->plugin('spacing')->getClassesFromOption(
                $this->options->getDefaultRowSpacingClass()
            );

            $rowClasses = array_merge($rowClasses, $defaultRowSpacingClasses);
        }

        if ($element->getMessages()) {
            $rowClasses[] = 'has-error';
        }

        // Tooltip
        if ($element->getOption('tooltip_feedback')) {
            $rowClasses[] =  'position-relative';
        }

        if ($element->getOption('floating_label')) {
            $rowClasses[] = 'form-floating';
        }

        // Additional row class
        if ($addRowClass = $element->getOption('row_class')) {
            $rowClasses = array_merge($rowClasses, explode(' ', $addRowClass));
        }

        return $rowClasses;
    }

    protected function elementIsLayout(\Laminas\Form\ElementInterface $element, string $layout)
    {
        return $element->getOption('layout') ===  $layout;
    }

    /**
     * @param \Laminas\Form\ElementInterface $element
     * @param string $labelPosition
     * @return string
     * @throws \DomainException
     */
    protected function renderElement(\Laminas\Form\ElementInterface $element, ?string $labelPosition = null): string
    {
        return $this->getFormRowElementHelper()->__invoke($element, $labelPosition);
    }

    /**
     * Retrieve the FormRowElement helper
     */
    protected function getFormRowElementHelper(): FormRowElement
    {
        if ($this->rowElementHelper) {
            return $this->rowElementHelper;
        }

        if ($this->view !== null && method_exists($this->view, 'plugin')) {
            $this->rowElementHelper = $this->view->plugin('form_row_element');
        }

        if (!$this->rowElementHelper instanceof FormRowElement) {
            $this->rowElementHelper = new FormRowElement();
        }

        if ($this->hasTranslator()) {
            $this->rowElementHelper->setTranslator(
                $this->getTranslator(),
                $this->getTranslatorTextDomain()
            );
        }

        return $this->rowElementHelper;
    }
}
