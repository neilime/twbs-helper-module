<?php

namespace TwbsHelper\Form\View\Helper;

/**
 * FormCollection
 */
class FormCollection extends \Laminas\Form\View\Helper\FormCollection
{
    use \TwbsHelper\View\Helper\HtmlTrait;

    protected static $fieldsetRegex = '/(<fieldset[^>]*>)([\s\S]*)(<\/fieldset[^>]*>)$/imU';
    protected static $legendRegex = '/<legend[^>]*>([\s\S]*)<\/legend[^>]*>/imU';

    // Hold configurable options
    protected $options;

    /**
     * This is the default wrapper that the collection is wrapped into
     *
     * @var string
     */
    protected $wrapper = '<fieldset%4$s>%2$s%1$s%3$s</fieldset>';

    /**
     * Attributes valid for the tag represented by this helper
     *
     * This should be overridden in extending classes
     *
     * @var array
     */
    protected $validTagAttributes = [
        'disabled' => true,
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
        $this->options = $options;
    }

    /**
     * Render a collection by iterating through all fieldsets and elements
     *
     * @param \Laminas\Form\ElementInterface $oElement
     * @return string
     */
    public function render(\Laminas\Form\ElementInterface $oElement): string
    {
        // Add valid custom attributes
        if ($this->options->getValidTagAttributes()) {
            foreach ($this->options->getValidTagAttributes() as $attribute) {
                $this->addValidAttribute($attribute);
            }
        }

        if ($this->options->getValidTagAttributePrefixes()) {
            foreach ($this->options->getValidTagAttributePrefixes() as $prefix) {
                $this->addValidAttributePrefix($prefix);
            }
        }

        $sElementLayout = $oElement->getOption('layout');

        // Set form layout class
        if ($sElementLayout === \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE) {
            $this->setClassesToElement($oElement, ['form-' . $sElementLayout]);
        }

        $sMarkup = parent::render($oElement);
        if (!$sMarkup || !$this->shouldWrap) {
            return $sMarkup;
        }

        if (!preg_match(self::$fieldsetRegex, $sMarkup, $aMatches)) {
            return $sMarkup;
        }

        $sMarkup = $aMatches[2];

        // Define legend class
        $aLabelAttributes = $oElement instanceof \Laminas\Form\LabelAwareInterface
            ? $oElement->getLabelAttributes()
            : [];
        $aLegendClasses = [];

        // Define legend column classes
        $sColumSize = $oElement->getOption('column');
        if ($sColumSize && !$this->hasColumnClassAttribute($aLabelAttributes['class'] ?? '')) {
            $aLegendClasses[] = $this->getColumnCounterpartClass($sColumSize);
        }

        // Extract legend
        $sLegendContent = '';
        if (preg_match(self::$legendRegex, $sMarkup, $aLegendMatches)) {
            $sLegendContent = sprintf(
                '<legend%s>%s</legend>',
                $this->attributesToString($this->setClassesToAttributes(
                    $aLabelAttributes,
                    $aLegendClasses
                ), 'legend'),
                $aLegendMatches[1]
            ) . PHP_EOL;
            $sMarkup = str_replace($aLegendMatches[0], '', $sMarkup);
        }

        if ($sColumSize) {
            $sMarkup = $this->htmlElement(
                'div',
                $this->setClassesToAttributes([], [$this->getColumnClass($sColumSize)]),
                $sMarkup
            );
        }

        $sMarkup = $sLegendContent . $sMarkup;

        if ($sElementLayout === \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL) {
            $sMarkup = $this->htmlElement('div', ['class' => 'row'], $sMarkup);
        }

        return $aMatches[1] . $this->addProperIndentation($sMarkup) . $aMatches[3];
    }

    /**
     * Only render a template
     *
     * @param \Laminas\Form\Element\Collection $oCollection
     * @return string
     */
    public function renderTemplate(\Laminas\Form\Element\Collection $oCollection): string
    {
        // Set inline class
        $sElementLayout = $oCollection->getOption('layout');
        if ($sElementLayout === \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE) {
            $oElementOrFieldset = $oCollection->getTemplateElement();
            if ($oElementOrFieldset) {
                $oElementOrFieldset->setOption('layout', $sElementLayout);
            }
        }

        return parent::renderTemplate($oCollection);
    }
}
