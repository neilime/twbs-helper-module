<?php

namespace TwbsHelper\Form\View\Helper;

use Traversable;
use InvalidArgumentException;
use LogicException;
use Zend\Form\Element\Checkbox;
use Zend\Form\Element\Radio;
use Zend\Form\ElementInterface;
use Zend\Form\Element\Collection;
use Zend\Form\Factory;
use Zend\I18n\Translator\TranslatorAwareInterface;
use Zend\I18n\Translator\TranslatorInterface;
use TwbsHelper\Options\ModuleOptions;

class FormElement extends \Zend\Form\View\Helper\FormElement implements TranslatorAwareInterface
{

    use \Zend\I18n\Translator\TranslatorAwareTrait;
    use \TwbsHelper\View\Helper\ClassAttributeTrait;
    use \TwbsHelper\View\Helper\HtmlTrait;

    protected static $addonTextFormat = '<span class="input-group-text">%s</span>';

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
     * COnstructor
     *
     * @param  ModuleOptions $options
     * @access public
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
     * @param  ElementInterface $oElement
     * @access public
     * @return string
     */
    public function render(ElementInterface $oElement)
    {
        // Add form-control class
        $sElementType = $oElement->getAttribute('type');

        if (
            !in_array($sElementType, $this->options->getIgnoredViewHelpers())
            && !($oElement instanceof Collection)
        ) {
            if ($sElementClass = $oElement->getAttribute('class')) {
                if (!preg_match('/(\s|^)form-control(\s|$)/', $sElementClass)) {
                    $oElement->setAttribute('class', trim($sElementClass . ' form-control'));
                }
            } else {
                $oElement->setAttribute('class', 'form-control');
            }
        }

        $sMarkup = parent::render($oElement);

        // Addon prepend
        if ($aAddOnPrepend = $oElement->getOption('add-on-prepend')) {
            $sMarkup = $this->renderAddOn($aAddOnPrepend) . PHP_EOL . $sMarkup;
        }

        // Addon append
        if ($aAddOnAppend = $oElement->getOption('add-on-append')) {
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
                $oElement->getOption('input-group')['attributes'] ?? [],
                $aInputGroupClasses
            );

            return $this->htmlElement('div', $aAttributes, $sMarkup);
        }

        return $sMarkup;
    }


    /**
     * Render element by helper name
     *
     * @param  string           $name
     * @param  ElementInterface $element
     * @return string
     */
    protected function renderHelper($name, ElementInterface $element)
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

    /**
     * Render add-on markup
     *
     * @param  ElementInterface|array|string $aAddOnOptions
     * @param  string                        $sPosition
     * @throws InvalidArgumentException
     * @throws LogicException
     * @access protected
     * @return string
     */
    protected function renderAddOn($aAddOnOptions, string $sPosition = 'prepend')
    {
        if (empty($aAddOnOptions)) {
            throw new InvalidArgumentException('Addon options are empty');
        }

        if ($aAddOnOptions instanceof ElementInterface) {
            $aAddOnOptions = ['element' => $aAddOnOptions];
        } elseif (is_scalar($aAddOnOptions)) {
            $aAddOnOptions = ['text' => $aAddOnOptions];
        } elseif (!is_array($aAddOnOptions)) {
            throw new InvalidArgumentException(
                sprintf(
                    'Addon options expects an array or a scalar value, "%s" given',
                    is_object($aAddOnOptions) ? get_class($aAddOnOptions) : gettype($aAddOnOptions)
                )
            );
        }

        $sMarkup       = '';
        $sAddonTagName = 'div';

        if (!empty($aAddOnOptions['text'])) {
            if (!is_scalar($aAddOnOptions['text'])) {
                throw new InvalidArgumentException(sprintf(
                    '"text" option expects a scalar value, "%s" given',
                    is_object($aAddOnOptions['text'])
                        ? get_class($aAddOnOptions['text'])
                        : gettype($aAddOnOptions['text'])
                ));
            }

            if (($oTranslator = $this->getTranslator())) {
                $sMarkup .= sprintf(
                    static::$addonTextFormat,
                    $oTranslator->translate($aAddOnOptions['text'], $this->getTranslatorTextDomain())
                );
            } else {
                $sMarkup .= sprintf(static::$addonTextFormat, $aAddOnOptions['text']);
            }
        } elseif (!empty($aAddOnOptions['element'])) {
            if (
                is_array($aAddOnOptions['element'])
                || ($aAddOnOptions['element'] instanceof Traversable
                    && !($aAddOnOptions['element'] instanceof ElementInterface))
            ) {
                $oFactory                 = new Factory();
                $aAddOnOptions['element'] = $oFactory->create($aAddOnOptions['element']);
            } elseif (!($aAddOnOptions['element'] instanceof ElementInterface)) {
                throw new LogicException(sprintf(
                    '"element" option expects an instanceof Zend\Form\ElementInterface, "%s" given',
                    is_object($aAddOnOptions['element'])
                        ? get_class($aAddOnOptions['element'])
                        : gettype($aAddOnOptions['element'])
                ));
            }

            $aAddOnOptions['element']->setOptions(
                array_merge(
                    $aAddOnOptions['element']->getOptions(),
                    ['disable-twbs' => true]
                )
            );

            if ($aAddOnOptions['element'] instanceof Checkbox || $aAddOnOptions['element'] instanceof Radio) {
                $sMarkup .= sprintf(static::$addonTextFormat, $this->render($aAddOnOptions['element']));
            } else {
                $sMarkup .= $this->render($aAddOnOptions['element']);
            }
        }


        $aAttributes = $this->setClassesToAttributes(
            $aAddOnOptions['attributes'] ?? [],
            ['prepend' === $sPosition ? 'input-group-prepend' : 'input-group-append']
        );

        return $this->htmlElement($sAddonTagName, $aAttributes, $sMarkup);
    }
}
