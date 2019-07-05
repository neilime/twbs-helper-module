<?php

namespace TwbsHelper\Form\View\Helper;

use Zend\Form\Element\Collection as CollectionElement;
use Zend\Form\View\Helper\FormCollection as ZendFormCollectionViewHelper;
use Zend\Form\ElementInterface;

/**
 * FormCollection
 *
 * @uses ZendFormCollectionViewHelper
 */
class FormCollection extends ZendFormCollectionViewHelper
{

    // @var string
    protected static $legendFormat = '<legend%s>%s</legend>';

    // @var string
    protected static $fieldsetFormat = '<fieldset%s>%s</fieldset>';

    // Attributes valid for the tag represented by this helper
    // @var array
    protected $validTagAttributes = ['disabled' => true];


    /**
     * render
     * Render a collection by iterating through all fieldsets and elements
     *
     * @param  \Zend\Form\ElementInterface $oElement
     * @access public
     * @return string
     */
    public function render(ElementInterface $oElement)
    {
        $oRenderer = $this->getView();

        if (!method_exists($oRenderer, 'plugin')) {
            return '';
        }

        $bShouldWrap    = $this->shouldWrap;
        $sMarkup        = '';
        $sElementLayout = $oElement->getOption('twbs-layout');

        if ($oElement instanceof \IteratorAggregate) {
            $oElementHelper  = $this->getElementHelper();
            $oFieldsetHelper = $this->getFieldsetHelper();

            foreach ($oElement->getIterator() as $oElementOrFieldset) {
                $aOptions = $oElementOrFieldset->getOptions();

                if ($sElementLayout && empty($aOptions['twbs-layout'])) {
                    $aOptions['twbs-layout'] = $sElementLayout;
                    $oElementOrFieldset->setOptions($aOptions);
                }

                if ($oElementOrFieldset instanceof \Zend\Form\FieldsetInterface) {
                    $sMarkup .= $oFieldsetHelper($oElementOrFieldset);
                } elseif ($oElementOrFieldset instanceof \Zend\Form\ElementInterface) {
                    if ($oElementOrFieldset->getOption('twbs-row-open')) {
                        $sMarkup .= '<div class="row">' . "\n";
                    }

                    $sMarkup .= $oElementHelper($oElementOrFieldset);

                    if ($oElementOrFieldset->getOption('twbs-row-close')) {
                        $sMarkup .= '</div>' . "\n";
                    }
                }
            }

            if ($oElement instanceof \Zend\Form\Element\Collection && $oElement->shouldCreateTemplate()) {
                $sMarkup .= $this->renderTemplate($oElement);
            }
        }

        if ($bShouldWrap) {
            if (false != ($sLabel = $oElement->getLabel())) {
                if (null !== ($oTranslator = $this->getTranslator())) {
                    $sLabel = $oTranslator->translate($sLabel, $this->getTranslatorTextDomain());
                }

                $sAttributes = $this->createAttributesString($oElement->getLabelAttributes() ?: []);
                $sMarkup          = sprintf(
                    static::$legendFormat,
                    ($sAttributes) ? ' ' . $sAttributes : '',
                    $this->getEscapeHtmlHelper()->__invoke($sLabel)
                ) . $sMarkup;
            }

            // Set form layout class
            if ($sElementLayout) {
                $sLayoutClass = "form-{$sElementLayout}";

                if (false != ($sElementClass = $oElement->getAttribute('class'))) {
                    if (!preg_match('/(\s|^)' . preg_quote($sLayoutClass, '/') . '(\s|$)/', $sElementClass)) {
                        $oElement->setAttribute('class', trim("{$sElementClass} {$sLayoutClass}"));
                    }
                } else {
                    $oElement->setAttribute('class', $sLayoutClass);
                }
            }

            $sMarkup          = sprintf(
                static::$fieldsetFormat,
                ($sAttributes = $this->createAttributesString($oElement->getAttributes())) ? " {$sAttributes}" : '',
                $sMarkup
            );
        }

        return $sMarkup;
    }


    /**
     * renderTemplate
     * Only render a template
     *
     * @param  CollectionElement $collection
     * @access public
     * @return string
     */
    public function renderTemplate(CollectionElement $collection)
    {
        if (false != ($sElementLayout = $collection->getOption('twbs-layout'))) {
            $elementOrFieldset = $collection->getTemplateElement();
            $elementOrFieldset->setOption('twbs-layout', $sElementLayout);
        }

        return parent::renderTemplate($collection);
    }
}
