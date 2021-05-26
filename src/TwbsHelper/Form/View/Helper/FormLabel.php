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
     * @param \Laminas\Form\ElementInterface $oElement
     * @param  null|string $sLabelContent
     * @param string $sPosition
     * @return string|\TwbsHelper\Form\View\Helper\FormLabel
     */
    public function __invoke(
        \Laminas\Form\ElementInterface $oElement = null,
        $sLabelContent = null,
        $sPosition = null
    ) {
        if (!$oElement) {
            return $this;
        }

        // Button element is a special case, because label is always rendered inside it
        if (
            $oElement instanceof \Laminas\Form\Element\Button
            || $oElement instanceof \Laminas\Form\Element\Submit
        ) {
            return $sLabelContent;
        }

        if ($oElement instanceof \Laminas\Form\LabelAwareInterface) {

            $aLabelAttributes = $oElement->getLabelAttributes();
            if (!$oElement instanceof \Laminas\Form\Element\Checkbox) {
                $aLabelAttributes = array_merge(['class' => 'form-label'], $aLabelAttributes);
            }

            $oElement->setLabelAttributes($aLabelAttributes = $this->setClassesToAttributes(
                $aLabelAttributes,
                $this->getLabelClasses($oElement, $aLabelAttributes)
            ));
        } else {
            $aLabelAttributes = [];
        }

        $sMarkup = parent::__invoke($oElement, $sLabelContent, $sPosition);
        if (!preg_match('/(<label[^>]*>)([\s\S]*)(<\/label[^>]*>)/imU', $sMarkup, $aMatches)) {
            return $sMarkup;
        }

        $sLabel = trim($aMatches[2]);
        if (!$sLabel) {
            return $sLabelContent;
        }

        // Add required string if element is required
        if (
            $this->requiredFormat &&
            $oElement->getAttribute('required') && strpos($this->requiredFormat, $sLabel) === false
        ) {
            $sLabel .= $this->requiredFormat;
        }

        if ($oElement instanceof \Laminas\Form\Element\MultiCheckbox) {
            return $this->htmlElement(
                'div',
                $aLabelAttributes,
                $sLabel,
                !$oElement->getLabelOption('disable_html_escape')
            );
        }

        return $aMatches[1] . $sLabel . $aMatches[3];
    }

    /**
     * Render element's label
     *
     * @param \Laminas\Form\ElementInterface $oElement
     * @return string
     */
    public function renderPartial(\Laminas\Form\ElementInterface $oElement): string
    {
        if (!$oElement instanceof \Laminas\Form\LabelAwareInterface) {
            return '';
        }

        $sLabel = $oElement->getLabel();
        if ($sLabel && ($oTranslator = $this->getTranslator())) {
            $sLabel = $oTranslator->translate($sLabel, $this->getTranslatorTextDomain());
        }

        return $sLabel ?? '';
    }

    protected function getLabelClasses(\Laminas\Form\ElementInterface $oElement, array $aLabelAttributes): array
    {
        $aLabelClasses = [];

        $sLayout = $oElement->getOption('layout');

        // Define label column class
        $sColumSize = $oElement->getOption('column');
        if (
            $sColumSize
            && $oElement->getOption('layout') !== null
            && !$this->hasColumnClassAttribute($aLabelAttributes['class'] ?? '')
            && ! (
                $oElement instanceof \Laminas\Form\Element\Checkbox
                && ! $oElement instanceof \Laminas\Form\Element\MultiCheckbox
                && $sLayout === \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL
            )
        ) {
            $aLabelClasses[] = $this->getColumnCounterpartClass($sColumSize);
        }

        // Define label size class
        if ($sSize = $oElement->getOption('size')) {
            $aLabelClasses[] = $this->getSizeClass($sSize, 'col-form-label');
        }

        if ($oElement instanceof \Laminas\Form\Element\MultiCheckbox) {
            return $aLabelClasses;
        }

        switch ($oElement->getAttribute('type')) {
            case 'checkbox':
            case 'radio':
                $aLabelClasses[] = 'form-check-label';
                break;

            default:
                // Validation state
                if ($oElement->getOption('validation-state') || $oElement->getMessages()) {
                    $aLabelClasses[] = 'col-form-label';
                }

                switch ($sLayout) {
                        // Hide label for "inline" layout
                    case \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE:
                        if ($oElement->getOption('show_label') !== true) {
                            $aLabelClasses[] = 'sr-only';
                        }
                        break;

                    case \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL:
                        $aLabelClasses[] = 'col-form-label';
                        break;
                    case null:
                        if ($oElement->getOption('show_label') === false) {
                            $aLabelClasses[] = 'sr-only';
                        }
                        break;
                }
        }
        return $aLabelClasses;
    }
}
