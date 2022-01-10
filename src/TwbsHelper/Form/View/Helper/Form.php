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

    // Hold configurable options
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

        $elementsContent = $this->renderElements($form);
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

    /**
     * @param \Laminas\Form\FormInterface $form
     * @return string
     */
    protected function renderElements(\Laminas\Form\FormInterface $form): string
    {
        $rowClass = $form->getOption('row_class') ?? 'row';
        $gutter = $form->getOption('gutter');
        $formLayout = $form->getOption('layout');
        $tooltipFeedback = $form->getOption('tooltip_feedback');

        // Store element rows rendering
        $rowsRendering = [];
        foreach ($form as $element) {
            // Define layout option to form elements if not already defined
            if ($formLayout && !$element->getOption('layout')) {
                $element->setOption('layout', $formLayout);
            }

            // Define tooltip_feedback option to form elements if not already defined
            if ($element->getOption('tooltip_feedback') === null) {
                $element->setOption('tooltip_feedback', $tooltipFeedback);
            }

            $rowsRendering = $this->renderElement($element, $rowsRendering, [
                'row_class' => $rowClass,
                'gutter' => $gutter,
            ]);
        }

        // Assemble rows rendering
        $formContent = '';
        ksort($rowsRendering, SORT_STRING);

        foreach ($rowsRendering as $rowRendering) {
            $rowContent = $rowRendering['content'];
            if (!empty($rowRendering['helper'])) {
                $helperParams = $rowRendering['helper_params'];
                foreach ($helperParams as $key => $value) {
                    if ($value === '%content%') {
                        $helperParams[$key] = $rowContent;
                        break;
                    }
                }

                $rowContent = call_user_func_array($rowRendering['helper'], $helperParams);
            }

            $formContent .= ($formContent ? PHP_EOL : '') . $rowContent;
        }

        return $formContent;
    }

    /**
     * Retrieve element rendering
     */
    protected function renderElement(
        \Laminas\Form\ElementInterface $element,
        array $rowsRendering,
        array $rowOptions
    ): array {

        if ($element instanceof \Laminas\Form\Element\Button && $element->getOption('row_name')) {
            return $this->renderButtonGroup($element, $rowsRendering, $rowOptions);
        }

        $helperPluginManager = $this->getView()->getHelperPluginManager();

        if ($element instanceof \Laminas\Form\FieldsetInterface) {
            $elementMarkup = $helperPluginManager->get('formCollection')->__invoke($element);
        } else {
            $elementMarkup = $helperPluginManager->get('formRow')->__invoke($element);
        }

        if (!$elementMarkup) {
            return $rowsRendering;
        }

        $options = $element->getOptions();

        $rowRenderingKey = $this->generateRowRenderingKey($element, $rowsRendering);

        if (isset($rowsRendering[$rowRenderingKey])) {
            $rowsRendering[$rowRenderingKey]['content'] .= PHP_EOL . $elementMarkup;
        } else {
            $rowsRendering[$rowRenderingKey] = ['content' => $elementMarkup];

            $hasNoLayout = empty($options['layout']);

            if (!empty($options['column']) && $hasNoLayout) {
                $rowsRendering[$rowRenderingKey]['helper'] = [
                    $this->getView()->plugin('htmlElement'),
                    '__invoke'
                ];

                $rowAttributes = $this->getView()->plugin('htmlattributes')->__invoke([
                    'class' => $rowOptions['row_class'],
                ]);

                // Gutter
                $gutter = $rowOptions['gutter'];
                if ($gutter) {
                    $rowAttributes->merge([
                        'class' => $this->getView()->plugin('htmlClass')->plugin('gutter')->getClassesFromOption(
                            $gutter
                        ),
                    ]);
                }

                $rowsRendering[$rowRenderingKey]['helper_params'] = [
                    'div',
                    $rowAttributes,
                    '%content%'
                ];
            }
        }

        return $rowsRendering;
    }

    /**
     * Retrieve button group element rendering
     */
    protected function renderButtonGroup(
        \Laminas\Form\Element\Button $button,
        array $rowsRendering,
        array $rowOptions
    ): array {
        $rowRenderingKey = $this->generateRowRenderingKey($button, $rowsRendering);

        if (isset($rowsRendering[$rowRenderingKey])) {
            $rowsRendering[$rowRenderingKey]['content'][] = $button;
        } else {
            $buttonOptions = $button->getOptions();
            $isNotLayoutHorizontal = empty($buttonOptions['layout'])
                || self::LAYOUT_HORIZONTAL !== $buttonOptions['layout'];

            if (empty($buttonOptions['column']) || !$isNotLayoutHorizontal) {
                $rowClass = 'form-group';
            } else {
                $rowClass = $rowOptions['row_class'];
            }


            $rowsRendering[$rowRenderingKey] = [
                'content' => [$button],
                'helper' => [
                    $this->getView()->getHelperPluginManager()->get('buttonGroup'),
                    '__invoke'
                ],
                'helper_params' => [
                    '%content%',
                    ['attributes' => ['class' => $rowClass]]
                ]
            ];
        }

        return $rowsRendering;
    }

    /**
     * Generate
     */
    private function generateRowRenderingKey(\Laminas\Form\ElementInterface $element, array $rowsRendering): string
    {
        $existingKeys = array_keys($rowsRendering);
        $options = $element->getOptions();

        $rowName = $options['row_name'] ?? '';

        if ($existingKeys === []) {
            return '0_' . $rowName;
        }

        if ($rowName) {
            foreach ($existingKeys as $existingKey) {
                if (preg_match('/^[0-9]+_' . preg_quote($rowName, '/') . '$/', $existingKey)) {
                    return $existingKey;
                }
            }

            $lastKey = array_pop($existingKeys);
            $rowRenderingKeyPrefix = $this->incrementRowRenderingKeyPrefix($lastKey);

            return $rowRenderingKeyPrefix . $rowName;
        }

        $lastKey = array_pop($existingKeys);
        if (preg_match('/^\d+_$/', $lastKey)) {
            return $lastKey;
        }

        return $this->incrementRowRenderingKeyPrefix($lastKey);
    }

    private function incrementRowRenderingKeyPrefix(string $key): string
    {
        return (int) explode('_', $key)[0] + 1 . '_';
    }
}
