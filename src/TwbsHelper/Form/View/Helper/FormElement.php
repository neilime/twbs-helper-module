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
     * @param \Laminas\Form\ElementInterface $element
     * @return string
     */
    public function render(\Laminas\Form\ElementInterface $element): string
    {
        // Add form-control class
        $elementType = $element->getAttribute('type');

        $classes = [];

        if (
            !in_array($elementType, $this->options->getIgnoredViewHelpers())
            && !($element instanceof \Laminas\Form\Element\Collection)
            && !$element->getOption('custom')
        ) {
            $classes[] = $element->getOption('plaintext') ? 'form-control-plaintext' : 'form-control';

            // Set size class except for select element
            $sizeOption = $element->getOption('size');
            if ($elementType !== 'select' && $sizeOption) {
                $classes[] = $this->getSizeClass($sizeOption, 'form-control');
            }

            $this->setClassesToElement($element, $classes);
        }

        $markup = parent::render($element);

        // Render element's add-on
        return $this->getView()->plugin('formAddOn')->render($element, $markup);
    }

    /**
     * Render element by helper name
     *
     * @param string $name
     * @param \Laminas\Form\ElementInterface $element
     * @return string
     */
    protected function renderHelper(string $name, \Laminas\Form\ElementInterface $element): string
    {
        $helper = $this->getView()->plugin($name);

        if ($this->options->getValidTagAttributes()) {
            foreach ($this->options->getValidTagAttributes() as $attribute) {
                $helper->addValidAttribute($attribute);
            }
        }

        if ($this->options->getValidTagAttributePrefixes()) {
            foreach ($this->options->getValidTagAttributePrefixes() as $prefix) {
                $helper->addValidAttributePrefix($prefix);
            }
        }

        return $helper($element);
    }
}
