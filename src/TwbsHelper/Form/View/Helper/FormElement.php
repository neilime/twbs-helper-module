<?php

namespace TwbsHelper\Form\View\Helper;

class FormElement extends \Laminas\Form\View\Helper\FormElement
{
    use \TwbsHelper\View\Helper\HtmlTrait;

    // Hold configurable options
    protected $options;

    // Instance map to view helper
    protected $classMap = [
        'Laminas\Form\Element\File'                => 'formfile',
        'Laminas\Form\Element\Button'              => 'formbutton',
        'Laminas\Form\Element\Captcha'             => 'formcaptcha',
        'Laminas\Form\Element\Csrf'                => 'formhidden',
        'Laminas\Form\Element\Collection'          => 'formcollection',
        'Laminas\Form\Element\DateTimeSelect'      => 'formdatetimeselect',
        'Laminas\Form\Element\DateSelect'          => 'formdateselect',
        'Laminas\Form\Element\MonthSelect'         => 'formmonthselect',
    ];

    /**
     * Constructor
     *
     * @param \TwbsHelper\Options\ModuleOptions $oOptions
     * @return void
     */
    public function __construct(\TwbsHelper\Options\ModuleOptions $oOptions)
    {
        if (is_array($oOptions->getTypeMap())) {
            $this->typeMap = array_merge($this->typeMap, $oOptions->getTypeMap());
        }

        if (is_array($oOptions->getClassMap())) {
            $this->classMap = array_merge($this->classMap, $oOptions->getClassMap());
        }

        $this->options = $oOptions;
    }

    /**
     * Render an element
     *
     * @param \Laminas\Form\ElementInterface $oElement
     * @return string
     */
    public function render(\Laminas\Form\ElementInterface $oElement): string
    {
        // Add form-control class
        $sElementType = $oElement->getAttribute('type');

        $aClasses = [];

        if (
            !in_array($sElementType, $this->options->getIgnoredViewHelpers())
            && !($oElement instanceof \Laminas\Form\Element\Collection)
            && !$oElement->getOption('custom')
        ) {
            $aClasses[] = $oElement->getOption('plaintext') ? 'form-control-plaintext' : 'form-control';

            // Set size class except for select element
            $sSizeOption = $oElement->getOption('size');
            if ($sElementType !== 'select' && $sSizeOption) {
                $aClasses[] = $this->getSizeClass($sSizeOption, 'form-control');
            }

            $this->setClassesToElement($oElement, $aClasses);
        }

        // Add describedby if help block has an id
        if (!$oElement->getAttribute('aria-describedby')) {
            $aHelpBlockOption = $oElement->getOption('help_block');
            if (is_array($aHelpBlockOption) && isset($aHelpBlockOption['attributes']['id'])) {
                $oElement->setAttribute('aria-describedby', $aHelpBlockOption['attributes']['id']);
            }
        }

        $sMarkup = parent::render($oElement);

        // Render element's add-on
        return $this->getView()->plugin('formAddOn')->render($oElement, $sMarkup);
    }

    /**
     * Render element by helper name
     *
     * @param string $sName
     * @param \Laminas\Form\ElementInterface $oElement
     * @return string
     */
    protected function renderHelper($sName, \Laminas\Form\ElementInterface $oElement)
    {
        $oHelper = $this->getView()->plugin($sName);

        if ($this->options->getValidTagAttributes()) {
            foreach ($this->options->getValidTagAttributes() as $aAttribute) {
                $oHelper->addValidAttribute($aAttribute);
            }
        }

        if ($this->options->getValidTagAttributePrefixes()) {
            foreach ($this->options->getValidTagAttributePrefixes() as $sPrefix) {
                $oHelper->addValidAttributePrefix($sPrefix);
            }
        }

        return $oHelper($oElement);
    }
}
