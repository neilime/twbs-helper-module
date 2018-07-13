<?php
namespace TwbsHelper\Form\View\Helper;

use Zend\Form\View\Helper\FormRadio as ZendFormRadioViewHelper;
use Zend\Form\ElementInterface;
use Zend\Form\Element\MultiCheckbox;

/**
 * FormRadio
 *
 * @uses ZendFormRadioViewHelper
 */
class FormRadio extends ZendFormRadioViewHelper
{
    // Separator for checkbox elements
    // @var string
    protected $separator = '</div><div class="form-check">';

    // @var string
    protected static $checkboxFormat = '<div class="form-check">%s</div>';


    /**
     * render
     *
     * @see    \Zend\Form\View\Helper\FormRadio::render()
     * @param  \Zend\Form\ElementInterface $oElement
     * @access public
     * @return string
     */
    public function render(ElementInterface $oElement)
    {
        $aElementOptions = $oElement->getOptions();

        // Render using default Zend\Form\View\Helper\FormRadio
        if (isset($aElementOptions['disable-twbs']) && $aElementOptions['disable-twbs']) {
            $sSeparator = $this->getSeparator();
            $this->setSeparator('');
            $sReturn = parent::render($oElement);
            $this->setSeparator($sSeparator);

            return $sReturn;
        }

        if (isset($aElementOptions['inline']) && $aElementOptions['inline'] == true) {
            $sSeparator = $this->getSeparator();
            $this->setSeparator('');
            $oElement->setLabelAttributes(['class' => 'form-check-inline']);
            $sReturn = sprintf('%s', parent::render($oElement));
            $this->setSeparator($sSeparator);

            return $sReturn . "%s";
        }

        if (isset($aElementOptions['btn-group']) && $aElementOptions['btn-group'] != false) {
            $buttonClass = 'btn btn-primary';

            if (is_array($aElementOptions['btn-group']) && isset($aElementOptions['btn-group']['btn-class'])) {
                $buttonClass = $aElementOptions['btn-group']['btn-class'];
            }

            $this->setSeparator('');
            $oElement->setLabelAttributes(['class' => $buttonClass]);

            return sprintf('<div class="btn-group" data-toggle="buttons">%s</div>', parent::render($oElement)). "%s";
        }

        return sprintf(static::$checkboxFormat, parent::render($oElement));
    }


    /**
     * renderOptions
     *
     * @see    \Zend\Form\View\Helper\FormMultiCheckbox::renderOptions()
     * @param  \Zend\Form\Element\MultiCheckbox $oElement
     * @param  array $aOptions
     * @param  array $aSelectedOptions
     * @param  array $aAttributes
     * @access protected
     * @return string
     */
    protected function renderOptions(MultiCheckbox $oElement, array $aOptions, array $aSelectedOptions, array $aAttributes)
    {
        $iCount                 = 0;
        $iNumberOfOptions       = count($aOptions);
        $aGlobalLabelAttributes = $oElement->getLabelAttributes() ? : $this->labelAttributes;
        $sMarkup                = '';
        $oLabelHelper           = $this->getLabelHelper();
        $aElementOptions        = $oElement->getOptions();

        foreach ($aOptions as $key => $aOptionspec) {
            // Count number of options
            $iCount++;

            if (is_scalar($aOptionspec)) {
                $aOptionspec = ['label' => $aOptionspec, 'value' => $key];
            }

            // Option attributes
            $aInputAttributes = $aAttributes;
            if (isset($aOptionspec['attributes'])) {
                $aInputAttributes = \Zend\Stdlib\ArrayUtils::merge($aInputAttributes, $aOptionspec['attributes']);
            }

            // Customize the 'id' input attribute to enable
            // working 'for' label attribute on all options
            if ($iCount > 1 && array_key_exists('id', $aAttributes)) {
                $aInputAttributes['id'] .= $iCount;
            }

            // Add BS4 form-check-input class if not set
            $aInputAttributes['class']  = ! empty($aInputAttributes['class']) ? $aInputAttributes['class'] : '';
            $aInputAttributes['class'] .= (false === strpos($aInputAttributes['class'], 'form-check-label')) ? ' form-check-input' : '';


            // Option value
            $aInputAttributes['value'] = isset($aOptionspec['value']) ? $aOptionspec['value'] : '';

            // Selected option
            if (in_array($aInputAttributes['value'], $aSelectedOptions)) {
                $aInputAttributes['checked'] = true;
            } elseif (isset($aOptionspec['selected'])) {
                $aInputAttributes['checked'] = ! ! $aOptionspec['selected'];
            } else {
                $aInputAttributes['checked'] = isset($aInputAttributes['selected']) && $aInputAttributes['type'] !== 'radio' && $aInputAttributes['selected'] != false;
            }

            // Disabled option
            if (isset($aOptionspec['disabled'])) {
                $aInputAttributes['disabled'] = ! ! $aOptionspec['disabled'];
            } else {
                $aInputAttributes['disabled'] = isset($aInputAttributes['disabled']) && $aInputAttributes['disabled'] != false;
            }

            // Render option
            $sOptionMarkup = sprintf('<input %s%s', $this->createAttributesString($aInputAttributes), $this->getInlineClosingBracket());

            // Option label
            $sLabel = isset($aOptionspec['label']) ? $aOptionspec['label'] : '';

            if ($sLabel) {
                $aLabelAttributes = $aGlobalLabelAttributes;

                // Assign label for attribute with defined element id attribute
                if (empty($aLabelAttributes['for']) && ! empty($aInputAttributes['id'])) {
                    $aLabelAttributes['for'] = $aInputAttributes['id'];
                }

                // Add BS4 form-check-label class if not set
                $aLabelAttributes['class']  = ! empty($aLabelAttributes['class']) ? $aLabelAttributes['class'] : '';
                $aLabelAttributes['class'] .= (false === strpos($aLabelAttributes['class'], 'form-check-label')) ? ' form-check-label' : '';

                if (isset($aElementOptions['btn-group']) && $aElementOptions['btn-group'] == true) {
                    if ($aInputAttributes['checked']) {
                        $aLabelAttributes['class'] = ((isset($aLabelAttributes['class'])) ? $aLabelAttributes['class'] : '') . ' active';
                    }
                }

                if (isset($aOptionspec['label_attributes'])) {
                    $aLabelAttributes = isset($aLabelAttributes) ? array_merge($aLabelAttributes, $aOptionspec['label_attributes']) : $aOptionspec['label_attributes'];
                }

                if (null !== ($oTranslator = $this->getTranslator())) {
                    $sLabel = $oTranslator->translate($sLabel, $this->getTranslatorTextDomain());
                }

                if (! ($oElement instanceof \Zend\Form\LabelAwareInterface) || ! $oElement->getLabelOption('disable_html_escape')) {
                    $sLabel = $this->getEscapeHtmlHelper()->__invoke($sLabel);
                }

                switch ($this->getLabelPosition()) {
                    case self::LABEL_PREPEND:
                        $sOptionMarkup = sprintf($oLabelHelper->openTag($aLabelAttributes) . '%s' . $oLabelHelper->closeTag() . '%s', $sLabel, $sOptionMarkup);
                        break;

                    case self::LABEL_APPEND:
                    default:
                        $sOptionMarkup = sprintf('%s' . $oLabelHelper->openTag($aLabelAttributes) . '%s' . $oLabelHelper->closeTag(), $sOptionMarkup, $sLabel);
                        break;
                }
            }

            $sMarkup .= ($sMarkup ? $this->getSeparator() : '') . $sOptionMarkup;
            $sMarkup .= ($iCount == $iNumberOfOptions) ? "%s" : "";
        }

        return $sMarkup;
    }
}
