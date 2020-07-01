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


        // Retrieve view helper plugin manager
        $oHelperPluginManager = $this->getView()->getHelperPluginManager();

        // Retrieve form row helper
        $oFormRowHelper = $oHelperPluginManager->get('formRow');

        // Retrieve form collection helper
        $oFormCollectionHelper = $oHelperPluginManager->get('formCollection');

        // Store column option
        $bHasColumn = false;

        $sRowClass = $oForm->getOption('row_class') ?? 'row';

        // Store element rows rendering
        $aRowsRendering = [];

        // Prepare options
        $sFormLayout = $oForm->getOption('layout');
        foreach ($oForm as $oElement) {
            $aOptions = $oElement->getOptions();

            if (!$bHasColumn && !empty($aOptions['column'])) {
                $bHasColumn = true;
            }

            // Define layout option to form elements if not already defined
            if ($sFormLayout && empty($aOptions['layout'])) {
                $aOptions = $oElement->setOption('layout', $sFormLayout)->getOptions();
            }

            $sRowRenderingKey = $aOptions['row_name'] ?? $sRowClass;

            if ($oElement instanceof \Laminas\Form\FieldsetInterface) {
                $this->setClassesToElement($oElement, ['form-group']);
                $sElementMarkup = $oFormCollectionHelper->__invoke($oElement);
            } else {
                $sElementMarkup = $oFormRowHelper->__invoke($oElement);
            }

            if ($sElementMarkup) {
                if(isset($aRowsRendering[$sRowRenderingKey])){
                    $aRowsRendering[$sRowRenderingKey]['content'] .= PHP_EOL . $sElementMarkup;
                    if(!empty($aOptions['column'])){
                        $aRowsRendering[$sRowRenderingKey]['hasColumn'] = true;
                    }
                }
                else{
                    $aRowsRendering[$sRowRenderingKey] = [
                        'hasColumn' => !empty($aOptions['column']),
                        'attributes' => $this->setClassesToAttributes([], [$sRowClass]),
                        'content' => $sElementMarkup,
                    ];
                }
            }
        }

        // Assemble rows rendering
        $sFormContent = '';

        foreach ($aRowsRendering as $aRowRendering) {
            $sRowContent = $aRowRendering['content'];
            if ($aRowRendering['hasColumn'] && self::LAYOUT_HORIZONTAL !== $sFormLayout) {
                $sRowContent = $this->htmlElement(
                    'div',
                    $aRowRendering['attributes'],
                    $sRowContent
                );
            }

            $sFormContent .= ($sFormContent ? PHP_EOL : '') . $sRowContent;
        }

        return $sFormContent;
    }
}
