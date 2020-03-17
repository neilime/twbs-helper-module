<?php

namespace TwbsHelper\Form\View\Helper;

class FormElement extends \Laminas\Form\View\Helper\FormElement
{
    use \TwbsHelper\View\Helper\HtmlTrait;

    // Hold configurable options
    protected $options;

    // Instance map to view helper
    protected $classMap = [
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
     * @param \TwbsHelper\Options\ModuleOptions $options
     * @access public
     * @return void
     */
    public function __construct(\TwbsHelper\Options\ModuleOptions $options)
    {
        if (is_array($options->getTypeMap())) {
            $this->typeMap = array_merge($this->typeMap, $options->getTypeMap());
        }

        if (is_array($options->getClassMap())) {
            $this->classMap = array_merge($this->classMap, $options->getClassMap());
        }

        $this->options = $options;
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
    protected function renderHelper($sName, \Laminas\Form\ElementInterface $oElement): string
    {
        $oHelper = $this->getView()->plugin($sName);

        if ($this->options->getValidTagAttributes()) {
            foreach ($this->options->getValidTagAttributes() as $attribute) {
                $oHelper->addValidAttribute($attribute);
            }
        }

        if ($this->options->getValidTagAttributePrefixes()) {
            foreach ($this->options->getValidTagAttributePrefixes() as $prefix) {
                $oHelper->addValidAttributePrefix($prefix);
            }
        }

        return $oHelper($oElement);
    }
}
