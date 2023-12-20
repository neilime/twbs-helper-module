<?php

namespace TwbsHelper\Form\View\Helper;

class FormRows extends \Laminas\Form\View\Helper\AbstractHelper
{
    use \TwbsHelper\Form\View\ElementHelperTrait;

    /**
     * @var null|\TwbsHelper\Form\View\Helper\FormCollection
     */
    protected $formCollectionHelper;

    /**
     * @var null|\TwbsHelper\Form\View\Helper\FormRow
     */
    protected $formRowHelper;

    /**
     * @var null|\TwbsHelper\View\Helper\HtmlElement
     */
    protected $htmlElementHelper;

    /**
     * @var null|\TwbsHelper\View\Helper\HtmlAttributes
     */
    protected $htmlAttributesHelper;

    /**
     * @var null|\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass
     */
    protected $htmlClassHelper;

    /**
     * @var null|\TwbsHelper\View\Helper\ButtonGroup
     */
    protected $buttonGroupHelper;

    /**
     * @param \Laminas\Form\FormInterface $form
     * @return \TwbsHelper\Form\View\Helper\FormRows|string
     */
    public function __invoke(\Laminas\Form\FormInterface $form = null)
    {
        if ($form !== null) {
            return $this->renderFormRows($form);
        }

        return $this;
    }

    /**
     * @param \Laminas\Form\FormInterface $form
     * @return string
     */
    protected function renderFormRows(\Laminas\Form\FormInterface $form): string
    {
        $rowClass = $form->getOption('row_class') ?? 'row';
        $gutter = $form->getOption('gutter');

        // Store element rows rendering
        $rowsRendering = [];
        foreach ($form as $element) {
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

        if (
            $element->getOption('row_name')
            && (
                $element instanceof \Laminas\Form\Element\Button
                || $element instanceof \Laminas\Form\Element\Submit
            )
        ) {
            return $this->renderButtonGroup($element, $rowsRendering, $rowOptions);
        }

        if ($element instanceof \Laminas\Form\FieldsetInterface) {
            $elementMarkup = $this->getFormCollectionHelper()->__invoke($element);
        } else {
            $elementMarkup = $this->getFormRowHelper()->__invoke($element);
        }

        if (!$elementMarkup) {
            return $rowsRendering;
        }

        $rowRenderingKey = $this->generateRowRenderingKey($element, $rowsRendering);

        if (isset($rowsRendering[$rowRenderingKey])) {
            $rowsRendering[$rowRenderingKey]['content'] .= PHP_EOL . $elementMarkup;
        } else {
            $rowRendering = $this->getElementRowRendering($element, $rowOptions);
            $rowRendering['content'] = $elementMarkup;
            $rowsRendering[$rowRenderingKey] = $rowRendering;
        }

        return $rowsRendering;
    }

    protected function getElementRowRendering(
        \Laminas\Form\ElementInterface $element,
        array $rowOptions
    ): array {
        $options = $element->getOptions();
        $hasNoLayout = empty($options['layout']);
        $rowRendering = [];

        $shouldWrapElement = !empty($options['column']) && $hasNoLayout;
        if (!$shouldWrapElement) {
            return $rowRendering;
        }

        $rowRendering['helper'] = [
            $this->getHtmlElementHelper(),
            '__invoke'
        ];

        $rowAttributes = $this->getHtmlattributesHelper()->__invoke([
            'class' => $rowOptions['row_class'],
        ]);

        // Gutter
        $gutter = $rowOptions['gutter'];
        if ($gutter) {
            $rowAttributes->merge([
                'class' => $this->getHtmlClassHelper()->plugin('gutter')->getClassesFromOption(
                    $gutter
                ),
            ]);
        }

        $rowRendering['helper_params'] = [
            'div',
            $rowAttributes,
            '%content%'
        ];

        return $rowRendering;
    }

    /**
     * Retrieve button group element rendering
     */
    protected function renderButtonGroup(
        \Laminas\Form\ElementInterface $button,
        array $rowsRendering,
        array $rowOptions
    ): array {
        $rowRenderingKey = $this->generateRowRenderingKey($button, $rowsRendering);

        if (isset($rowsRendering[$rowRenderingKey])) {
            $rowsRendering[$rowRenderingKey]['content'][] = $button;
        } else {
            $buttonOptions = $button->getOptions();
            $isNotLayoutHorizontal = empty($buttonOptions['layout'])
                || \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL !== $buttonOptions['layout'];

            if (empty($buttonOptions['column']) || !$isNotLayoutHorizontal) {
                $rowClass = 'form-group';
            } else {
                $rowClass = $rowOptions['row_class'];
            }


            $rowsRendering[$rowRenderingKey] = [
                'content' => [$button],
                'helper' => [
                    $this->getButtonGroupHelper(),
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

    /**
     * Retrieve the formCollection helper
     */
    protected function getFormCollectionHelper(): \TwbsHelper\Form\View\Helper\FormCollection
    {
        if ($this->formCollectionHelper) {
            return $this->formCollectionHelper;
        }

        if ($this->view !== null && method_exists($this->view, 'plugin')) {
            $this->formCollectionHelper = $this->view->plugin('formCollection');
        }

        if (!$this->formCollectionHelper instanceof \TwbsHelper\Form\View\Helper\FormCollection) {
            throw new \LogicException(sprintf(
                'FormCollection helper expects an instanceof \TwbsHelper\Form\View\Helper\FormCollection, "%s" defined',
                is_object($this->formCollectionHelper)
                    ? get_class($this->formCollectionHelper)
                    : gettype($this->formCollectionHelper)
            ));
        }

        return $this->formCollectionHelper;
    }

    /**
     * Retrieve the formRow helper
     */
    protected function getFormRowHelper(): \TwbsHelper\Form\View\Helper\FormRow
    {
        if ($this->formRowHelper) {
            return $this->formRowHelper;
        }

        if ($this->view !== null && method_exists($this->view, 'plugin')) {
            $this->formRowHelper = $this->view->plugin('formRow');
        }

        if (!$this->formRowHelper instanceof \TwbsHelper\Form\View\Helper\FormRow) {
            throw new \LogicException(sprintf(
                'FormCollection helper expects an instanceof \TwbsHelper\Form\View\Helper\FormRow, "%s" defined',
                is_object($this->formRowHelper)
                    ? get_class($this->formRowHelper)
                    : gettype($this->formRowHelper)
            ));
        }

        return $this->formRowHelper;
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

        if (!$this->htmlElementHelper instanceof \TwbsHelper\View\Helper\HtmlElement) {
            $this->htmlElementHelper = new \TwbsHelper\View\Helper\HtmlElement();
        }

        return $this->htmlElementHelper;
    }

    /**
     * Retrieve the htmlattributes helper
     */
    protected function getHtmlattributesHelper()
    {
        if ($this->htmlAttributesHelper) {
            return $this->htmlAttributesHelper;
        }

        if ($this->view !== null && method_exists($this->view, 'plugin')) {
            $this->htmlAttributesHelper = $this->view->plugin('htmlAttributes');
        }

        if (!$this->htmlAttributesHelper instanceof \TwbsHelper\View\Helper\HtmlAttributes) {
            $this->htmlAttributesHelper = new \TwbsHelper\View\Helper\HtmlAttributes();
        }

        return $this->htmlAttributesHelper;
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

        if (!$this->htmlClassHelper instanceof \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass) {
            $this->htmlClassHelper = new \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass();
        }

        return $this->htmlClassHelper;
    }

    /**
     * Retrieve the buttongroup helper
     */
    protected function getButtonGroupHelper()
    {
        if ($this->buttonGroupHelper) {
            return $this->buttonGroupHelper;
        }

        if ($this->view !== null && method_exists($this->view, 'plugin')) {
            $this->buttonGroupHelper = $this->view->plugin('buttonGroup');
        }

        if (!$this->buttonGroupHelper instanceof \TwbsHelper\View\Helper\ButtonGroup) {
            $this->buttonGroupHelper = new \TwbsHelper\View\Helper\ButtonGroup();
        }

        return $this->buttonGroupHelper;
    }
}
