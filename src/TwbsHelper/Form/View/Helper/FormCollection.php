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
     * @param \TwbsHelper\Options\ModuleOptions $moduleOptions
     * @access public
     * @return void
     */
    public function __construct(\TwbsHelper\Options\ModuleOptions $moduleOptions)
    {
        $this->options = $moduleOptions;
    }

    /**
     * Render a collection by iterating through all fieldsets and elements
     *
     * @param \Laminas\Form\ElementInterface $element
     * @return string
     */
    public function render(\Laminas\Form\ElementInterface $element): string
    {
        // Add valid custom attributes
        if ($this->options->getValidTagAttributes()) {
            foreach ($this->options->getValidTagAttributes() as $validTagAttribute) {
                $this->addValidAttribute($validTagAttribute);
            }
        }

        if ($this->options->getValidTagAttributePrefixes()) {
            foreach ($this->options->getValidTagAttributePrefixes() as $validTagAttributePrefix) {
                $this->addValidAttributePrefix($validTagAttributePrefix);
            }
        }

        $elementLayout = $element->getOption('layout');

        // Set form layout class
        if ($elementLayout === \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE) {
            $this->setClassesToElement($element, ['form-' . $elementLayout]);
        }

        $markup = parent::render($element);
        if (!$markup || !$this->shouldWrap) {
            return $markup;
        }

        if (!preg_match(self::$fieldsetRegex, $markup, $matches)) {
            return $markup;
        }

        $markup = $matches[2];

        // Define legend class
        $labelAttributes = $element instanceof \Laminas\Form\LabelAwareInterface
            ? $element->getLabelAttributes()
            : [];
        $legendClasses = ['col-form-label'];

        // Define legend column classes
        $columSize = $element->getOption('column');
        if ($columSize && !$this->hasColumnClassAttribute($labelAttributes['class'] ?? '')) {
            $legendClasses[] = $this->getColumnCounterpartClass($columSize);
        }

        // Extract legend
        $legendContent = '';
        if (preg_match(self::$legendRegex, $markup, $legendMatches)) {
            $legendContent = sprintf(
                '<legend%s>%s</legend>',
                $this->attributesToString($this->setClassesToAttributes(
                    $labelAttributes,
                    $legendClasses
                ), 'legend'),
                $legendMatches[1]
            ) . PHP_EOL;
            $markup = str_replace($legendMatches[0], '', $markup);
        }

        if ($columSize) {
            $markup = $this->htmlElement(
                'div',
                $this->setClassesToAttributes([], [$this->getColumnClass($columSize)]),
                $markup
            );
        }

        $markup = $legendContent . $markup;

        if ($elementLayout === \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL) {
            $markup = $this->htmlElement('div', ['class' => 'row'], $markup);
        }

        return $matches[1] . $this->addProperIndentation($markup) . $matches[3];
    }

    /**
     * Only render a template
     *
     * @param \Laminas\Form\Element\Collection $collection
     * @return string
     */
    public function renderTemplate(\Laminas\Form\Element\Collection $collection): string
    {
        // Set inline class
        $elementLayout = $collection->getOption('layout');
        if ($elementLayout === \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE) {
            $elementOrFieldset = $collection->getTemplateElement();
            if ($elementOrFieldset !== null) {
                $elementOrFieldset->setOption('layout', $elementLayout);
            }
        }

        return parent::renderTemplate($collection);
    }
}
