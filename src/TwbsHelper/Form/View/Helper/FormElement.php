<?php

namespace TwbsHelper\Form\View\Helper;

use Laminas\Form\ElementInterface;
use Laminas\Form\Element\Collection;
use TwbsHelper\Form\View\ElementHelperTrait;
use TwbsHelper\Options\ModuleOptions;
use Laminas\Form\Element\Button;
use Laminas\Form\Element\Captcha;
use Laminas\Form\Element\Csrf;
use Laminas\Form\Element\DateSelect;
use Laminas\Form\Element\DateTimeSelect;
use Laminas\Form\Element\File;
use Laminas\Form\Element\MonthSelect;

class FormElement extends \Laminas\Form\View\Helper\FormElement
{
    use ElementHelperTrait;

    // Hold configurable options
    protected $options;

    // Instance map to view helper
    protected $classMap = [
        File::class                => 'formfile',
        Button::class              => 'formbutton',
        Captcha::class             => 'formcaptcha',
        Csrf::class                => 'formhidden',
        Collection::class          => 'formcollection',
        DateTimeSelect::class      => 'formdatetimeselect',
        DateSelect::class          => 'formdateselect',
        MonthSelect::class         => 'formmonthselect',
    ];

    /**
     * Constructor
     *
     * @param ModuleOptions $options
     * @return void
     */
    public function __construct(ModuleOptions $options)
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
     * @param ElementInterface $element
     * @return string
     */
    public function render(ElementInterface $element): string
    {
        // Add form-control class
        $elementType = $element->getAttribute('type');

        $classes = [];

        if (
            !in_array($elementType, $this->options->getIgnoredViewHelpers())
            && !($element instanceof Collection)
        ) {
            $classes[] = $element->getOption('plaintext') ? 'form-control-plaintext' : 'form-control';

            // Set size class except for select element
            $sizeOption = $element->getOption('size');
            if ($elementType !== 'select' && $sizeOption) {
                $classes = array_merge(
                    $classes,
                    $this->getView()->plugin('htmlClass')->plugin('size')->getClassesFromOption(
                        $sizeOption,
                        'form-control'
                    )
                );
            }

            $this->setClassesToElement($element, $classes);
        }

        // Add describedby if help block has an id
        if (!$element->getAttribute('aria-describedby')) {
            $helpBlockOption = $element->getOption('help_block');
            if (is_array($helpBlockOption) && isset($helpBlockOption['attributes']['id'])) {
                $element->setAttribute('aria-describedby', $helpBlockOption['attributes']['id']);
            }
        }

        return parent::render($element);
    }

    /**
     * Render element by helper name
     *
     * @param string $name
     * @param ElementInterface $element
     * @return string
     */
    protected function renderHelper(string $name, ElementInterface $element): string
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
