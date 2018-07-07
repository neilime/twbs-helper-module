<?php
namespace TwbsHelper\Form\View\Helper;

use Zend\Form\Element\MultiCheckbox;
use Zend\Form\View\Helper\FormMultiCheckbox as ZendFormMultiCheckboxViewHelper;
use Zend\Form\ElementInterface;

/**
 * FormMultiCheckbox
 *
 * @uses ZendFormMultiCheckboxViewHelper
 */
class FormMultiCheckbox extends ZendFormMultiCheckboxViewHelper
{
    /**
     * render
     *
     * @see    FormMultiCheckbox::render()
     * @param  ElementInterface $oElement
     * @access public
     * @return string
     */
    public function render(ElementInterface $oElement)
    {
        $aElementOptions  = $oElement->getOptions();
        $sClass           = 'form-check';
        $sClass          .= isset($aElementOptions['inline']) && $aElementOptions['inline'] ? ' form-check-inline' : '';

        $this->setSeparator("</div><div class='{$sClass}'>");
        $oElement->setAttribute('class', 'form-check-input');
        $oElement->setLabelAttributes(['class' => 'form-check-label']);

        return sprintf("<div class='{$sClass}'>%s</div>", parent::render($oElement));
    }


    /**
     * renderOptions
     * Render options
     *
     * @param  MultiCheckbox $oElement
     * @param  array         $aOptions
     * @param  array         $selectedOptions
     * @param  array         $aAttributes
     * @return string
     */
    protected function renderOptions(MultiCheckbox $oElement, array $aOptions, array $selectedOptions, array $aAttributes)
    {
        $oEscapeHtmlHelper      = $this->getEscapeHtmlHelper();
        $oLabelHelper           = $this->getLabelHelper();
        $sLabelClose            = $oLabelHelper->closeTag();
        $sLabelPosition         = $this->getLabelPosition();
        $aGlobalLabelAttributes = $oElement->getLabelAttributes();
        $sClosingBracket        = $this->getInlineClosingBracket();

        if ($oElement instanceof LabelAwareInterface) {
            $aGlobalLabelAttributes = $oElement->getLabelAttributes();
        }

        if (empty($aGlobalLabelAttributes)) {
            $aGlobalLabelAttributes = $this->labelAttributes;
        }

        $aCombinedMarkup = [];
        $iCount          = 0;

        foreach ($aOptions as $sKey => $aOptionSpec) {
            // Count number of options
            $iCount++;

            $sValue           = '';
            $sLabel           = '';
            $aInputAttributes = $aAttributes;
            $aLabelAttributes = $aGlobalLabelAttributes;
            $bSelected        = (isset($aInputAttributes['selected'])
                && $aInputAttributes['type'] != 'radio'
                && $aInputAttributes['selected']);
            $bDisabled        = (isset($aInputAttributes['disabled']) && $aInputAttributes['disabled']);

            // Customize the 'id' input attribute to enable
            // working 'for' label attribute on all options
            if ($iCount > 1 && array_key_exists('id', $aAttributes)) {
                $aInputAttributes['id'] .= $iCount;
            }

            if (is_scalar($aOptionSpec)) {
                $aOptionSpec = [
                    'label' => $aOptionSpec,
                    'value' => $sKey
                ];
            }

            if (isset($aOptionSpec['value'])) {
                $sValue = $aOptionSpec['value'];
            }

            if (isset($aOptionSpec['label'])) {
                $sLabel = $aOptionSpec['label'];
            }

            if (isset($aOptionSpec['selected'])) {
                $bSelected = $aOptionSpec['selected'];
            }

            if (isset($aOptionSpec['disabled'])) {
                $bDisabled = $aOptionSpec['disabled'];
            }

            if (isset($aOptionSpec['attributes'])) {
                $aInputAttributes = array_merge($aInputAttributes, $aOptionSpec['attributes']);
            }

            if (in_array($sValue, $selectedOptions)) {
                $bSelected = true;
            }

            $aInputAttributes['value']    = $sValue;
            $aInputAttributes['checked']  = $bSelected;
            $aInputAttributes['disabled'] = $bDisabled;

            $input = sprintf(
                '<input %s%s',
                $this->createAttributesString($aInputAttributes),
                $sClosingBracket
            );

            if (null !== ($translator = $this->getTranslator())) {
                $sLabel = $translator->translate(
                    $sLabel,
                    $this->getTranslatorTextDomain()
                );
            }

            if (! $oElement instanceof LabelAwareInterface || ! $oElement->getLabelOption('disable_html_escape')) {
                $sLabel = $oEscapeHtmlHelper($sLabel);
            }

            // Label
            // Set label attributes
            if (isset($aOptionSpec['label_attributes'])) {
                $aLabelAttributes = (isset($aLabelAttributes))
                    ? array_merge($aLabelAttributes, $aOptionSpec['label_attributes'])
                    : $aOptionSpec['label_attributes'];
            }

            // Assign label for attribute with defined element id attribute
            if (empty($aLabelAttributes['for']) && ! empty($aInputAttributes['id'])) {
                $aLabelAttributes['for'] = $aInputAttributes['id'];
            }

            // Create label markup
            $sLabelOpen = $oLabelHelper->openTag($aLabelAttributes);
            $sLabel     = $sLabelOpen . $sLabel . $sLabelClose;

            // Attach label to input
            switch ($sLabelPosition) {
                case self::LABEL_PREPEND:
                    $markup = $sLabel . $input;
                    break;

                case self::LABEL_APPEND:
                default:
                    $markup = $input . $sLabel;
                    break;
            }

            $aCombinedMarkup[] = $markup;
        }

        return implode($this->getSeparator(), $aCombinedMarkup);
    }
}
