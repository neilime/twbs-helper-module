<?php

namespace TwbsHelper\Form\View\Helper;

class Form extends \Laminas\Form\View\Helper\Form
{
    use \TwbsHelper\Form\View\ElementHelperTrait;

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
     * @param \Laminas\Form\FormInterface $form
     * @return \TwbsHelper\Form\View\Helper\Form|string
     */
    public function __invoke(\Laminas\Form\FormInterface $form = null)
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

    protected function getFormFromSpec(array $formSpec): \Laminas\Form\FormInterface
    {
        $factory = new \Laminas\Form\Factory();

        if (empty($formSpec['type'])) {
            $formSpec['type'] = 'form';
        }

        $form = $factory->create($formSpec);

        if (!$form instanceof \Laminas\Form\FormInterface) {
            throw new \InvalidArgumentException(sprintf(
                'Invalid spec specified, %s does not inherit from %s.',
                get_class($form),
                \Laminas\Form\FormInterface::class
            ));
        }
        return $form;
    }


    /**
     * Render a form from the provided $form,
     *
     * @param \Laminas\Form\FormInterface $form
     * @return string
     */
    public function render(\Laminas\Form\FormInterface $form): string
    {
        $this->prepareForm($form);

        $elementsContent = $this->getView()->plugin('formRows')->__invoke($form);
        $elementsContent = empty($elementsContent)
            ? ''
            : $this->getView()->plugin('htmlElement')->addProperIndentation($elementsContent, true);

        return $this->openTag($form) . $elementsContent . $this->closeTag();
    }


    protected function prepareForm(\Laminas\Form\FormInterface $form)
    {
        // Prepare form if needed
        if (method_exists($form, 'prepare')) {
            $form->prepare();
        }

        // Set form role
        if (!$form->getAttribute('role')) {
            $form->setAttribute('role', 'form');
        }

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
                    $this->getView()->plugin('htmlClass')->plugin('column')->getClassesFromOption($column, 'row-cols'),
                );
            }

            $gutter = $form->getOption('gutter');
            if ($gutter) {
                $classes = array_merge(
                    $classes,
                    $this->getView()->plugin('htmlClass')->plugin('gutter')->getClassesFromOption($gutter),
                );
            }
        }
        $this->setClassesToElement($form, $classes);
    }
}
