<?php
namespace TwbsHelper\Form\View\Helper;

use Traversable;
use InvalidArgumentException;
use LogicException;
use Zend\Form\ElementInterface;
use Zend\Form\View\Helper\FormElement as ZendFormElementViewHelper;
use Zend\Form\Element\Collection;
use Zend\Form\Factory;
use Zend\I18n\Translator\TranslatorAwareInterface;
use Zend\I18n\Translator\TranslatorInterface;
use Zend\I18n\Translator\Translator;
use Zend\Form\Element\Button;

use TwbsHelper\Options\ModuleOptions;

/**
 * FormElement
 *
 * @uses ZendFormElementViewHelper
 * @uses TranslatorAwareInterface
 */
class FormElement extends ZendFormElementViewHelper implements TranslatorAwareInterface
{
    // @var string
    protected static $addonFormat = '<%s class="%s" %s><span class="input-group-text">%s</span></%s>';

    // @var string
    protected static $inputGroupFormat = '<div class="input-group %s" %s>%s</div>';

    // Translator (optional)
    // @var Translator
    protected $translator;

    // Translator text domain (optional)
    // @var string
    protected $translatorTextDomain = 'default';

    // Whether translator should be used
    // @var boolean
    protected $translatorEnabled = true;

    // Hold configurable options
    // @var ModuleOptions
    protected $options;

    // Instance map to view helper
    // @var array
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
     * __construct
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
     * render
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

        if (! in_array($sElementType, $this->options->getIgnoredViewHelpers()) &&
            ! ($oElement instanceof Collection)
        ) {
            if ($sElementClass = $oElement->getAttribute('class')) {
                if (! preg_match('/(\s|^)form-control(\s|$)/', $sElementClass)) {
                    $oElement->setAttribute('class', trim($sElementClass . ' form-control'));
                }
            } else {
                $oElement->setAttribute('class', 'form-control');
            }
        }

        $sMarkup = parent::render($oElement);

        // Addon prepend
        if ($aAddOnPrepend = $oElement->getOption('add-on-prepend')) {
            $sMarkup = $this->renderAddOn($aAddOnPrepend) . $sMarkup;
        }

        // Addon append
        if ($aAddOnAppend = $oElement->getOption('add-on-append')) {
            $sMarkup .= $this->renderAddOn($aAddOnAppend, 'append');
        }

        if ($aAddOnAppend || $aAddOnPrepend) {
            $sSpecialClass = '';

            // Input size
            if ($sElementClass = $oElement->getAttribute('class')) {
                if (preg_match('/(\s|^)input-lg(\s|$)/', $sElementClass)) {
                    $sSpecialClass .= ' input-group-lg';
                } elseif (preg_match('/(\s|^)input-sm(\s|$)/', $sElementClass)) {
                    $sSpecialClass .= ' input-group-sm';
                }
            }
            
            
            $sSpecialAttributes = '';

            // Input group attributes
	        if (is_array($oElement->getOption('input-group'))){
		        $aInputGroup = $oElement->getOption('input-group');

		        // Input group class
		        if(! empty($aInputGroup['class'])){
					$sSpecialClass .= ' ' . $aInputGroup['class'];
				}

				// Input group other attributes
				if(is_array($aInputGroup['attributes'])){
					foreach ($aInputGroup['attributes'] as $name => $value){
						$sSpecialAttributes .= $name . '="' . $value . '" ';
					}
					$sSpecialAttributes = trim($sSpecialAttributes);
				}

	        }

            // Add a sprintf directive for correct render of errors
            return $sMarkup = sprintf(
                static::$inputGroupFormat,
                trim($sSpecialClass),
                $sSpecialAttributes,
                $sMarkup . "%s"
            );
        }

        // Add a sprintf directive for correct render of errors
        if (! in_array($sElementType, $this->options->getIgnoredViewHelpers()) &&
            ! ($oElement instanceof Collection)
        ) {
            $sMarkup .= "%s";
        }

        return $sMarkup;
    }


    /**
     * renderAddOn
     * Render addo-on markup
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
        } elseif (! is_array($aAddOnOptions)) {
            throw new InvalidArgumentException(sprintf(
                'Addon options expects an array or a scalar value, "%s" given',
                is_object($aAddOnOptions) ? get_class($aAddOnOptions) : gettype($aAddOnOptions)
            ));
        }

        $sMarkup       = '';
        $sAddonTagName = 'div';
        $sAddonClass   = '';

        if (! empty($aAddOnOptions['text'])) {
            if (! is_scalar($aAddOnOptions['text'])) {
                throw new InvalidArgumentException(sprintf(
                    '"text" option expects a scalar value, "%s" given',
                    is_object($aAddOnOptions['text']) ? get_class($aAddOnOptions['text']) : gettype($aAddOnOptions['text'])
                ));
            } elseif (($oTranslator = $this->getTranslator())) {
                $sMarkup .= $oTranslator->translate($aAddOnOptions['text'], $this->getTranslatorTextDomain());
            } else {
                $sMarkup .= $aAddOnOptions['text'];
            }

            $sAddonClass .= ('prepend' == $sPosition) ? ' input-group-prepend' : 'input-group-append';
        } elseif (! empty($aAddOnOptions['element'])) {
            if (is_array($aAddOnOptions['element']) ||
                ($aAddOnOptions['element'] instanceof Traversable &&
                ! ($aAddOnOptions['element'] instanceof ElementInterface))
            ) {
                $oFactory = new Factory();
                $aAddOnOptions['element'] = $oFactory->create($aAddOnOptions['element']);
            } elseif (! ($aAddOnOptions['element'] instanceof ElementInterface)) {
                throw new LogicException(sprintf(
                    '"element" option expects an instanceof Zend\Form\ElementInterface, "%s" given',
                    is_object($aAddOnOptions['element']) ? get_class($aAddOnOptions['element']) : gettype($aAddOnOptions['element'])
                ));
            }

            $aAddOnOptions['element']->setOptions(array_merge(
                $aAddOnOptions['element']->getOptions(),
                ['disable-twbs' => true]
            ));

            $sMarkup .= $this->render($aAddOnOptions['element']);

            //Element is a button, so add-on container must be a "div"
            if ($aAddOnOptions['element'] instanceof Button) {
                $sAddonClass .= ' input-group-btn';
                $sAddonTagName = 'div';
            } else {
                $sAddonClass .= ' input-group-addon';
            }
        }
        
        $sAttributes = '';

		if(! empty($aAddOnOptions['attributes'])){
			foreach($aAddOnOptions['attributes'] as $name => $value){
				$sAttributes .= $name .'="' . $value . '" ';
			}
			$sAttributes = rtrim($sAttributes);
		}

        return sprintf(static::$addonFormat, $sAddonTagName, trim($sAddonClass), $sAttributes, $sMarkup, $sAddonTagName);
    }


    /**
     * setTranslator
     * Sets translator to use in helper
     *
     * @see    TranslatorAwareInterface::setTranslator()
     * @param  TranslatorInterface $oTranslator : [optional] translator. Default is null, which sets no translator.
     * @param  string $sTextDomain : [optional] text domain Default is null, which skips setTranslatorTextDomain
     * @access public
     * @return TwbsHelperFormElement
     */
    public function setTranslator(TranslatorInterface $oTranslator = null, $sTextDomain = null)
    {
        $this->translator = $oTranslator;

        if (null !== $sTextDomain) {
            $this->setTranslatorTextDomain($sTextDomain);
        }

        return $this;
    }


    /**
     * getTranslator
     * Returns translator used in helper
     *
     * @see    TranslatorAwareInterface::getTranslator()
     * @access public
     * @return null|TranslatorInterface
     */
    public function getTranslator()
    {
        return $this->isTranslatorEnabled() ? $this->translator : null;
    }


    /**
     * hasTranslator
     * Checks if the helper has a translator
     *
     * @see    TranslatorAwareInterface::hasTranslator()
     * @access public
     * @return boolean
     */
    public function hasTranslator()
    {
        return ! ! $this->getTranslator();
    }


    /**
     * setTranslatorEnabled
     * Sets whether translator is enabled and should be used
     *
     * @see    TranslatorAwareInterface::setTranslatorEnabled()
     * @param  boolean $bEnabled
     * @access public
     * @return TwbsHelperFormElement
     */
    public function setTranslatorEnabled($bEnabled = true)
    {
        $this->translatorEnabled = ! ! $bEnabled;

        return $this;
    }


    /**
     * isTranslatorEnabled
     * Returns whether translator is enabled and should be used
     *
     * @see    TranslatorAwareInterface::isTranslatorEnabled()
     * @access public
     * @return boolean
     */
    public function isTranslatorEnabled()
    {
        return $this->translatorEnabled;
    }


    /**
     * setTranslatorTextDomain
     * Set translation text domain
     *
     * @see    TranslatorAwareInterface::setTranslatorTextDomain()
     * @param  string $sTextDomain
     * @access public
     * @return TwbsHelperFormElement
     */
    public function setTranslatorTextDomain($sTextDomain = 'default')
    {
        $this->translatorTextDomain = $sTextDomain;

        return $this;
    }


    /**
     * getTranslatorTextDomain
     * Return the translation text domain
     *
     * @see    TranslatorAwareInterface::getTranslatorTextDomain()
     * @access public
     * @return string
     */
    public function getTranslatorTextDomain()
    {
        return $this->translatorTextDomain;
    }
}
