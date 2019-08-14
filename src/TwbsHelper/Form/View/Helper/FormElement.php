<?php

namespace TwbsHelper\Form\View\Helper;

use Zend\I18n\Translator\TranslatorAwareInterface;

class FormElement extends \Zend\Form\View\Helper\FormElement implements TranslatorAwareInterface
{

    use \Zend\I18n\Translator\TranslatorAwareTrait;
    use \TwbsHelper\View\Helper\ClassAttributeTrait;
    use \TwbsHelper\View\Helper\HtmlTrait;


    // Hold configurable options
    protected $options;

    // Instance map to view helper
    protected $classMap = [
        'Zend\Form\Element\Button'              => 'formbutton',
        'Zend\Form\Element\Captcha'             => 'formcaptcha',
        'Zend\Form\Element\Csrf'                => 'formhidden',
        'Zend\Form\Element\Collection'          => 'formcollection',
        'Zend\Form\Element\DateTimeSelect'      => 'formdatetimeselect',
        'Zend\Form\Element\DateSelect'          => 'formdateselect',
        'Zend\Form\Element\MonthSelect'         => 'formmonthselect',
        'TwbsHelper\Form\Element\StaticElement' => 'formStatic',
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
     * @param \Zend\Form\ElementInterface $oElement
     * @access public
     * @return string
     */
    public function render(\Zend\Form\ElementInterface $oElement)
    {
        // Add form-control class
        $sElementType = $oElement->getAttribute('type');

        $aClasses = [];

        if (
            !in_array($sElementType, $this->options->getIgnoredViewHelpers())
            && !($oElement instanceof \Zend\Form\Element\Collection)
        ) {
            $aClasses[] = $oElement->getOption('plaintext') ? 'form-control-plaintext' : 'form-control';
        }

        if ($sSizeOption = $oElement->getOption('size')) {
            $aClasses[] = $this->getSizeClass($sSizeOption, 'form-control');
        }

        $this->setClassesToElement($oElement, $aClasses);

        $sMarkup = parent::render($oElement);

        // Addon prepend
        if ($aAddOnPrepend = $oElement->getOption('add_on_prepend')) {
            $sMarkup = $this->renderAddOn($aAddOnPrepend) . PHP_EOL . $sMarkup;
        }

        // Addon append
        if ($aAddOnAppend = $oElement->getOption('add_on_append')) {
            $sMarkup .= $this->renderAddOn($aAddOnAppend, 'append');
        }

        if ($aAddOnAppend || $aAddOnPrepend) {
            $aInputGroupClasses = ['input-group'];

            // Input size
            if ($sElementClass = $oElement->getAttribute('class')) {
                if (preg_match('/(\s|^)input-lg(\s|$)/', $sElementClass)) {
                    $aInputGroupClasses[] = 'input-group-lg';
                } elseif (preg_match('/(\s|^)input-sm(\s|$)/', $sElementClass)) {
                    $aInputGroupClasses[] = 'input-group-sm';
                }
            }

            $aAttributes = $this->setClassesToAttributes(
                ['class' => $oElement->getOption('input_group_class')],
                $aInputGroupClasses
            );

            return $this->htmlElement('div', $aAttributes, $sMarkup);
        }

        return $sMarkup;
    }


    /**
     * Render element by helper name
     *
     * @param string $sName
     * @param \Zend\Form\ElementInterface $oElement
     * @return string
     */
    protected function renderHelper($sName, \Zend\Form\ElementInterface $oElement): string
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

    /**
     * Render add-on markup
     *
     * @param \Zend\Form\ElementInterface|array|string $aAddOnOptions
     * @param  string                        $sPosition
     * @throws \InvalidArgumentException
     * @throws \LogicException
     * @access protected
     * @return string
     */
    protected function renderAddOn($aAddOnOptions, string $sPosition = 'prepend'): string
    {
        if (empty($aAddOnOptions)) {
            throw new \InvalidArgumentException('Addon options are empty');
        }

        if ($aAddOnOptions instanceof \Zend\Form\ElementInterface) {
            $aAddOnOptions = ['element' => $aAddOnOptions];
        } elseif (is_scalar($aAddOnOptions)) {
            $aAddOnOptions = ['text' => $aAddOnOptions];
        } elseif (!is_array($aAddOnOptions)) {
            throw new \InvalidArgumentException(sprintf(
                'Addon options expects an array or a scalar value, "%s" given',
                is_object($aAddOnOptions) ? get_class($aAddOnOptions) : gettype($aAddOnOptions)
            ));
        }

        $aAttributes = $this->setClassesToAttributes(
            $aAddOnOptions['attributes'] ?? [],
            ['prepend' === $sPosition ? 'input-group-prepend' : 'input-group-append']
        );

        return $this->htmlElement('div', $aAttributes, $this->renderAddOnContent($aAddOnOptions));
    }

    protected function renderAddOnContent(array $aAddOnOptions): string
    {
        if (!empty($aAddOnOptions['text'])) {
            if (!is_scalar($aAddOnOptions['text'])) {
                throw new \InvalidArgumentException(sprintf(
                    '"text" option expects a scalar value, "%s" given',
                    is_object($aAddOnOptions['text'])
                        ? get_class($aAddOnOptions['text'])
                        : gettype($aAddOnOptions['text'])
                ));
            }

            $sAddonText = $aAddOnOptions['text'];

            $oTranslator = $this->getTranslator();
            if ($oTranslator) {
                $sAddonText =  $oTranslator->translate(
                    $sAddonText,
                    $this->getTranslatorTextDomain()
                );
            }

            return $this->renderAddOnElement($sAddonText);
        }

        if (!empty($aAddOnOptions['element'])) {
            if (
                is_array($aAddOnOptions['element'])
                || ($aAddOnOptions['element'] instanceof \Traversable
                    && !($aAddOnOptions['element'] instanceof \Zend\Form\ElementInterface))
            ) {
                $oFactory  = new \Zend\Form\Factory();
                $aAddOnOptions['element'] = $oFactory->create($aAddOnOptions['element']);
            } elseif (!($aAddOnOptions['element'] instanceof \Zend\Form\ElementInterface)) {
                throw new \LogicException(sprintf(
                    '"element" option expects an instanceof \Zend\Form\ElementInterface, "%s" given',
                    is_object($aAddOnOptions['element'])
                        ? get_class($aAddOnOptions['element'])
                        : gettype($aAddOnOptions['element'])
                ));
            }

            if (
                $aAddOnOptions['element'] instanceof \Zend\Form\Element\Checkbox
                || $aAddOnOptions['element'] instanceof \Zend\Form\Element\Radio
            ) {
                return $this->renderAddOnElement($this->render($aAddOnOptions['element']));
            }
            return $this->render($aAddOnOptions['element']);
        }

        throw new \InvalidArgumentException('Addon options expects a text or an element to render, none given');
    }

    protected function renderAddOnElement(string $sAddonText): string
    {
        return $this->htmlElement(
            'div',
            ['class' => 'input-group-text'],
            $sAddonText
        );
    }
}
