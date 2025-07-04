<?php

namespace TwbsHelper\Form\View\Helper;

use Laminas\Form\Factory;
use Laminas\Form\FormInterface;
use TwbsHelper\Form\View\ElementHelperTrait;
use TwbsHelper\Options\ModuleOptions;
use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass;
use TwbsHelper\View\Helper\HtmlElement;
use InvalidArgumentException;
use Laminas\Form\FieldsetInterface;
use LogicException;

class Form extends \Laminas\Form\View\Helper\Form
{
    use ElementHelperTrait;

    /**
     * @var string
     */
    public const LAYOUT_HORIZONTAL = 'horizontal';

    /**
     * @var string
     */
    public const LAYOUT_INLINE     = 'inline';

    /**
     * Hold configurable options
     */
    protected $options;

    /**
     * @var null|FormRows
     */
    protected $formRowsHelper;

    /**
     * @var null|HtmlElement
     */
    protected $htmlElementHelper;

    /**
     * @var null|HtmlClass
     */
    protected $htmlClassHelper;

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
     * @param FormInterface $form
     * @return Form|string
     */
    public function __invoke(?FormInterface $form = null)
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

        if ($form !== null) {
            return $this->render($form);
        }

        return $this;
    }


    /**
     * Renders a form from an array specification
     *
     * @see Form::render()
     */
    public function renderSpec(array $formSpec): string
    {
        $form = $this->getFormFromSpec($formSpec);

        return $this->render($form);
    }

    protected function getFormFromSpec(array $formSpec): FormInterface
    {
        $factory = new Factory();

        if (empty($formSpec['type'])) {
            $formSpec['type'] = 'form';
        }

        $form = $factory->create($formSpec);

        if (!$form instanceof FormInterface) {
            throw new InvalidArgumentException(sprintf(
                'Invalid spec specified, %s does not inherit from %s.',
                $form::class,
                FormInterface::class
            ));
        }
        return $form;
    }


    /**
     * Render a form from the provided $form,
     *
     * @param FormInterface $form
     * @return string
     */
    public function render(FormInterface $form): string
    {
        $this->prepareForm($form);

        $elementsContent = $this->getFormRowsHelper()->__invoke($form);
        $elementsContent = empty($elementsContent)
            ? ''
            : $this->getHtmlElementHelper()->addProperIndentation($elementsContent, true);

        return $this->openTag($form) . $elementsContent . $this->closeTag();
    }

    protected function prepareForm(FormInterface $form)
    {
        // Prepare form if needed
        if (method_exists($form, 'prepare')) {
            $form->prepare();
        }

        // Set form role
        if (!$form->getAttribute('role')) {
            $form->setAttribute('role', 'form');
        }

        $this->prepareFormClasses($form);
        $this->inheritOptionsToElements($form);
    }

    protected function prepareFormClasses(FormInterface $form)
    {
        $classes = [];

        if ($form->getOption('custom_validation')) {
            $classes[] = 'needs-validation';
            $form->setAttribute('novalidate', true);
        } elseif ($form->getMessages()) {
            $classes[] = 'was-validated';
        }

        // Set inline classes
        $formLayout = $form->getOption('layout');
        if ($formLayout === self::LAYOUT_INLINE) {
            $classes = ['row', 'align-items-center'];

            $column = $form->getOption('column');
            if ($column) {
                $classes = array_merge(
                    $classes,
                    $this->getHtmlClassHelper()->plugin('column')->getClassesFromOption($column, 'row-cols'),
                );
            }

            $gutter = $form->getOption('gutter');
            if ($gutter) {
                $classes = array_merge(
                    $classes,
                    $this->getHtmlClassHelper()->plugin('gutter')->getClassesFromOption($gutter),
                );
            }
        }
        $this->setClassesToElement($form, $classes);
    }

    protected function inheritOptionsToElements(FieldsetInterface $form)
    {
        $formLayout = $form->getOption('layout');
        $tooltipFeedback = $form->getOption('tooltip_feedback');

        foreach ($form as $element) {
            // Define layout option to form elements if not already defined
            if ($formLayout && !$element->getOption('layout')) {
                $element->setOption('layout', $formLayout);
                if ($element instanceof FieldsetInterface) {
                    $this->inheritOptionsToElements($element);
                }
            }
            // Define tooltip_feedback option to form elements if not already defined
            if ($element->getOption('tooltip_feedback') === null) {
                $element->setOption('tooltip_feedback', $tooltipFeedback);
            }
        }
    }

    /**
     * Retrieve the formRow helper
     */
    protected function getFormRowsHelper(): FormRows
    {
        if ($this->formRowsHelper) {
            return $this->formRowsHelper;
        }

        if ($this->view !== null && method_exists($this->view, 'plugin')) {
            $this->formRowsHelper = $this->view->plugin('formRows');
        }

        if (!$this->formRowsHelper instanceof FormRows) {
            throw new LogicException(sprintf(
                'FormCollection helper expects an instanceof \TwbsHelper\Form\View\Helper\FormRows, "%s" defined',
                get_debug_type($this->formRowsHelper)
            ));
        }

        return $this->formRowsHelper;
    }

    /**
     * Retrieve the htmlElement helper
     */
    protected function getHtmlElementHelper()
    {
        if ($this->htmlElementHelper) {
            return $this->htmlElementHelper;
        }

        if ($this->view !== null && method_exists($this->view, 'plugin')) {
            $this->htmlElementHelper = $this->view->plugin('htmlElement');
        }

        if (!$this->htmlElementHelper instanceof HtmlElement) {
            $this->htmlElementHelper = new HtmlElement();
        }

        return $this->htmlElementHelper;
    }

    /**
     * Retrieve the htmlclass helper
     */
    protected function getHtmlClassHelper()
    {
        if ($this->htmlClassHelper) {
            return $this->htmlClassHelper;
        }

        if ($this->view !== null && method_exists($this->view, 'plugin')) {
            $this->htmlClassHelper = $this->view->plugin('htmlClass');
        }

        if (!$this->htmlClassHelper instanceof HtmlClass) {
            $this->htmlClassHelper = new HtmlClass();
        }

        return $this->htmlClassHelper;
    }
}
