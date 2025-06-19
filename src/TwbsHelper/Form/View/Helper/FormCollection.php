<?php

namespace TwbsHelper\Form\View\Helper;

use Laminas\Form\ElementInterface;
use Laminas\Form\Element\Collection;
use Laminas\Form\LabelAwareInterface;
use TwbsHelper\Form\View\ElementHelperTrait;
use TwbsHelper\Options\ModuleOptions;
use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Column;

/**
 * FormCollection
 */
class FormCollection extends \Laminas\Form\View\Helper\FormCollection
{
    use ElementHelperTrait;

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
     * @param ModuleOptions $moduleOptions
     * @access public
     * @return void
     */
    public function __construct(ModuleOptions $moduleOptions)
    {
        $this->options = $moduleOptions;
    }

    /**
     * Render a collection by iterating through all fieldsets and elements
     *
     * @param ElementInterface $element
     * @return string
     */
    public function render(ElementInterface $element): string
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

        $this->setClassesToElement($element, $this->getElementLayoutClasses($element));

        return $this->renderFieldset($element);
    }

    /**
     * Only render a template
     *
     * @param Collection $collection
     * @return string
     */
    public function renderTemplate(Collection $collection): string
    {
        // Set inline class
        $elementLayout = $collection->getOption('layout');
        if ($elementLayout === Form::LAYOUT_INLINE) {
            $elementOrFieldset = $collection->getTemplateElement();
            if ($elementOrFieldset !== null) {
                $elementOrFieldset->setOption('layout', $elementLayout);
            }
        }

        return parent::renderTemplate($collection);
    }

    protected function getElementLayoutClasses(ElementInterface $element): array
    {
        $elementLayout = $element->getOption('layout');

        // Set form layout class
        if ($elementLayout === Form::LAYOUT_INLINE) {
            return ['form-' . $elementLayout];
        }

        if ($elementLayout === Form::LAYOUT_HORIZONTAL) {
            return ['row', 'mb-3'];
        }

        return [];
    }

    protected function renderFieldset(ElementInterface $element): string
    {
        $wrapper = $this->wrapper;

        $columSize = $element->getOption('column');
        if ($columSize) {
            $columnWrapper = $this->getView()->plugin('htmlElement')->__invoke(
                'div',
                ['class' => $this->getView()->plugin('htmlClass')->plugin('column')->getClassesFromOption($columSize)],
                '%1$s%3$s'
            );
            $this->wrapper = '<fieldset%4$s>%2$s' . $columnWrapper . '</fieldset>';
        }

        $markup = parent::render($element);

        $this->wrapper = $wrapper;

        if (!$markup || !$this->shouldWrap) {
            return $markup;
        }

        if (!preg_match(self::$fieldsetRegex, $markup, $matches)) {
            return $markup;
        }

        $markup = $matches[2];

        $markup = $this->renderFieldsetLegend($element, $markup);

        return $matches[1] . $this->getView()->plugin('htmlElement')->addProperIndentation($markup) . $matches[3];
    }

    protected function renderFieldsetLegend(ElementInterface $element, string $markup): string
    {
        return preg_replace_callback(self::$legendRegex, function ($legendMatches) use ($element) {
            // Define legend class
            $labelAttributes = $this->getView()->plugin('htmlattributes')->__invoke(
                $element instanceof LabelAwareInterface
                    ? $element->getLabelAttributes()
                    : []
            );

            // Define legend column classes
            $legendClasses = [];

            /** @var Column $columnClassHelper **/
            $columnClassHelper = $this->getView()->plugin('htmlClass')->plugin('column');
            $columSize = $element->getOption('column');
            if (
                $columSize
                && !$columnClassHelper->classesIncludeColumn($labelAttributes['class'])
            ) {
                $legendClasses = array_merge(
                    $legendClasses,
                    $this->getView()->plugin('htmlClass')->plugin('columnCounterpart')->getClassesFromOption($columSize)
                );
            }

            $labelAttributes->merge(['class' => $legendClasses]);

            return $this->getView()->plugin('htmlElement')->__invoke(
                'legend',
                $labelAttributes,
                $legendMatches[1]
            ) . PHP_EOL;
        }, $markup);
    }
}
