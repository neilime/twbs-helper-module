<?php

namespace TwbsHelper\Form\View\Helper;

class Form extends \Laminas\Form\View\Helper\Form
{
    use \TwbsHelper\View\Helper\HtmlTrait;

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
     * Render a form from the provided $form,
     *
     * @param \Laminas\Form\FormInterface $form
     * @return string
     */
    public function render(\Laminas\Form\FormInterface $form): string
    {
        // Prepare form if needed
        if (method_exists($form, 'prepare')) {
            $form->prepare();
        }

        // Set form role
        if (!$form->getAttribute('role')) {
            $form->setAttribute('role', 'form');
        }

        $formLayout = $form->getOption('layout');

        // Set inline class
        if ($formLayout === self::LAYOUT_INLINE) {
            $this->setClassesToElement($form, ['form-inline']);
        }

        $elementsContent = $this->renderElements($form);
        $elementsContent = empty($elementsContent) ? '' : $this->addProperIndentation($elementsContent, true);

        return $this->openTag($form) . $elementsContent . $this->closeTag();
    }


    /**
     * @param \Laminas\Form\FormInterface $form
     * @return string
     */
    protected function renderElements(\Laminas\Form\FormInterface $form): string
    {
        $rowClass = $form->getOption('row_class') ?? 'row';
        $formLayout = $form->getOption('layout');

        // Store element rows rendering
        $rowsRendering = [];
        foreach ($form as $element) {
            // Define layout option to form elements if not already defined
            if ($formLayout && !$element->getOption('layout')) {
                $element->setOption('layout', $formLayout);
            }

            $rowsRendering = $this->renderElement($element, $rowClass, $rowsRendering);
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
        string $rowClass,
        array $rowsRendering
    ): array {

        if ($element instanceof \Laminas\Form\Element\Button && $element->getOption('row_name')) {
            return $this->renderButtonGroup($element, $rowClass, $rowsRendering);
        }

        $helperPluginManager = $this->getView()->getHelperPluginManager();

        if ($element instanceof \Laminas\Form\FieldsetInterface) {
            $this->setClassesToElement($element, ['form-group']);
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


            $isNotLayoutHorizontal = empty($options['layout']) || self::LAYOUT_HORIZONTAL !== $options['layout'];

            if (!empty($options['column']) && $isNotLayoutHorizontal) {
                $rowsRendering[$rowRenderingKey]['helper'] = [$this, 'htmlElement'];
                $rowsRendering[$rowRenderingKey]['helper_params'] = [
                    'div',
                    $this->setClassesToAttributes([], [$rowClass]), '%content%'
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
        string $rowClass,
        array $rowsRendering
    ): array {
        $rowRenderingKey = $this->generateRowRenderingKey($button, $rowsRendering);

        if (isset($rowsRendering[$rowRenderingKey])) {
            $rowsRendering[$rowRenderingKey]['content'][] = $button;
        } else {
            $options = $button->getOptions();
            $isNotLayoutHorizontal = empty($options['layout']) || self::LAYOUT_HORIZONTAL !== $options['layout'];

            if (empty($options['column']) || !$isNotLayoutHorizontal) {
                $rowClass = 'form-group';
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
