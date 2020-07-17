<?php

namespace TwbsHelper\Form\View\Helper;

class Form extends \Laminas\Form\View\Helper\Form
{
    use \TwbsHelper\View\Helper\HtmlTrait;

    public const LAYOUT_HORIZONTAL = 'horizontal';
    public const LAYOUT_INLINE     = 'inline';

    // Hold configurable options
    protected $options;

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
     * @param \Laminas\Form\FormInterface $oForm
     * @return \TwbsHelper\Form\View\Helper\Form|string
     */
    public function __invoke(\Laminas\Form\FormInterface $oForm = null)
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

        if ($oForm) {
            return $this->render($oForm);
        }
        return $this;
    }

    /**
     * Render a form from the provided $oForm,
     *
     * @param \Laminas\Form\FormInterface $oForm
     * @return string
     */
    public function render(\Laminas\Form\FormInterface $oForm): string
    {
        // Prepare form if needed
        if (method_exists($oForm, 'prepare')) {
            $oForm->prepare();
        }

        // Set form role
        if (!$oForm->getAttribute('role')) {
            $oForm->setAttribute('role', 'form');
        }

        $sFormLayout = $oForm->getOption('layout');

        // Set inline class
        if ($sFormLayout === self::LAYOUT_INLINE) {
            $this->setClassesToElement($oForm, ['form-inline']);
        }

        $sElementsContent = $this->renderElements($oForm);

        return $this->openTag($oForm)
            . ($sElementsContent ? $this->addProperIndentation($sElementsContent, true) : '') .
            $this->closeTag();
    }


    /**
     * @param \Laminas\Form\FormInterface $oForm
     * @return string
     */
    protected function renderElements(\Laminas\Form\FormInterface $oForm): string
    {
        $sRowClass = $oForm->getOption('row_class') ?? 'row';
        $sFormLayout = $oForm->getOption('layout');

        // Store element rows rendering
        $aRowsRendering = [];
        foreach ($oForm as $oElement) {
            // Define layout option to form elements if not already defined
            if ($sFormLayout && !$oElement->getOption('layout')) {
                $oElement->setOption('layout', $sFormLayout);
            }
            $aRowsRendering = $this->renderElement($oElement, $sRowClass, $aRowsRendering);
        }

        // Assemble rows rendering
        $sFormContent = '';

        foreach ($aRowsRendering as $aRowRendering) {
            $sRowContent = $aRowRendering['content'];
            if (!empty($aRowRendering['helper'])) {
                $aHelperParams = $aRowRendering['options'] ?? [];
                array_push($aHelperParams, $sRowContent);
                $sRowContent = call_user_func_array($aRowRendering['helper'], $aHelperParams);
            }

            $sFormContent .= ($sFormContent ? PHP_EOL : '') . $sRowContent;
        }

        return $sFormContent;
    }

    /**
     * Retrieve element rendering
     */
    protected function renderElement(\Laminas\Form\ElementInterface $oElement, string $sRowClass, array $aRowsRendering): array
    {

        if ($oElement instanceof \Laminas\Form\Element\Button && $oElement->getOption('row_name')) {
            return $this->renderButtonGroup($oElement, $sRowClass, $aRowsRendering);
        }

        $oHelperPluginManager = $this->getView()->getHelperPluginManager();

        if ($oElement instanceof \Laminas\Form\FieldsetInterface) {
            $this->setClassesToElement($oElement, ['form-group']);
            $sElementMarkup = $oHelperPluginManager->get('formCollection')->__invoke($oElement);
        } else {
            $sElementMarkup = $oHelperPluginManager->get('formRow')->__invoke($oElement);
        }

        if (!$sElementMarkup) {
            return $aRowsRendering;
        }

        $aOptions = $oElement->getOptions();

        $sRowRenderingKey = $aOptions['row_name'] ?? $sRowClass;

        if (isset($aRowsRendering[$sRowRenderingKey])) {
            $aRowsRendering[$sRowRenderingKey]['content'] .= PHP_EOL . $sElementMarkup;
        } else {
            $aRowsRendering[$sRowRenderingKey] = ['content' => $sElementMarkup];


            $bIsNotLayoutHorizontal = empty($aOptions['layout']) || self::LAYOUT_HORIZONTAL !== $aOptions['layout'];

            if (!empty($aOptions['column']) && $bIsNotLayoutHorizontal) {
                $aRowsRendering[$sRowRenderingKey]['helper'] = [$this, 'htmlElement'];
                $aRowsRendering[$sRowRenderingKey]['options'] = ['div', $this->setClassesToAttributes([], [$sRowClass])];
            }
        }

        return $aRowsRendering;
    }


    /**
     * Retrieve button group element rendering
     */
    protected function renderButtonGroup(\Laminas\Form\Element\Button $oElement, string $sRowClass, array $aRowsRendering): array
    {

        $aOptions = $oElement->getOptions();

        $sRowRenderingKey = $aOptions['row_name'] ?? $sRowClass;

        if (isset($aRowsRendering[$sRowRenderingKey])) {
            $aRowsRendering[$sRowRenderingKey]['content'][] = $oElement;
        } else {
            $aRowsRendering[$sRowRenderingKey] = ['content' => [$oElement]];


            $bIsNotLayoutHorizontal = empty($aOptions['layout']) || self::LAYOUT_HORIZONTAL !== $aOptions['layout'];

            if (!empty($aOptions['column']) && $bIsNotLayoutHorizontal) {
                $aRowsRendering[$sRowRenderingKey]['helper'] = [
                    $this->getView()->getHelperPluginManager()->get('buttonGroup'),
                    '__invoke'
                ];
            }
        }
        return $aRowsRendering;
    }
}
