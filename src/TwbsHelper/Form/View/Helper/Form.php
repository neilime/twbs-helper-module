<?php

namespace TwbsHelper\Form\View\Helper;

use Zend\Form\FormInterface;
use Zend\Form\FieldsetInterface;

class Form extends \Zend\Form\View\Helper\Form
{
    use \TwbsHelper\View\Helper\HtmlTrait;
    use \TwbsHelper\View\Helper\ClassAttributeTrait;

    const LAYOUT_HORIZONTAL = 'horizontal';
    const LAYOUT_INLINE     = 'inline';


    /**
     * @param  FormInterface $oForm
     * @param  string        $sFormLayout
     * @return TwbsHelperForm|string
     */
    public function __invoke(FormInterface $oForm = null, $sFormLayout = null)
    {
        if ($oForm) {
            return $this->render($oForm, $sFormLayout);
        }
        return $this;
    }


    /**
     * Render a form from the provided $oForm,
     *
     * @param  FormInterface $oForm
     * @param  string|null   $sFormLayout
     * @return string
     */
    public function render(FormInterface $oForm, string $sFormLayout = null): string
    {
        // Prepare form if needed
        if (method_exists($oForm, 'prepare')) {
            $oForm->prepare();
        }

        // Set form role
        if (!$oForm->getAttribute('role')) {
            $oForm->setAttribute('role', 'form');
        }

        if ($sFormLayout === null) {
            $sFormLayout = $oForm->getOption('twbs-layout');
        }

        // Set inline class
        if ($sFormLayout === self::LAYOUT_INLINE) {
            $oForm->setAttributes($this->setClassesToAttributes(
                $oForm->getAttributes(),
                ['form-inline']
            ));
        }

        return $this->openTag($oForm) .
            $this->addProperIndentation($this->renderElements($oForm, $sFormLayout)) .
            $this->closeTag();
    }


    /**
     * @param  FormInterface $oForm
     * @param  string|null   $sFormLayout
     * @return string
     */
    protected function renderElements(FormInterface $oForm, string $sFormLayout = null): string
    {
        // Store button groups
        $aButtonGroups = [];

        // Store button groups column-size from buttons
        $aButtonGroupsColumnSize = [];

        // Store elements rendering
        $aElementsRendering = [];

        // Retrieve view helper plugin manager
        $oHelperPluginManager = $this->getView()->getHelperPluginManager();

        // Retrieve form row helper
        $oFormRowHelper = $oHelperPluginManager->get('formRow');

        // Retrieve form collection helper
        $oFormCollectionHelper = $oHelperPluginManager->get('formCollection');

        // Retrieve button group helper
        $oButtonGroupHelper = $oHelperPluginManager->get('buttonGroup');

        // Store column size option
        $bHasColumnSize = false;

        // Prepare options
        foreach ($oForm as $iKey => $oElement) {
            $aOptions = $oElement->getOptions();

            if (!$bHasColumnSize && !empty($aOptions['column-size'])) {
                $bHasColumnSize = true;
            }

            // Define layout option to form elements if not already defined
            if ($sFormLayout && empty($aOptions['twbs-layout'])) {
                $oElement->setOption('twbs-layout', $sFormLayout);
            }

            // Manage button group option
            if (isset($aOptions['button-group'])) {
                $sButtonGroupKey = $aOptions['button-group'];

                if (isset($aButtonGroups[$sButtonGroupKey])) {
                    $aButtonGroups[$sButtonGroupKey][] = $oElement;
                } else {
                    $aButtonGroups[$sButtonGroupKey] = [$oElement];
                    $aElementsRendering[$iKey]       = $sButtonGroupKey;
                }

                if (!empty($aOptions['column-size']) && !isset($aButtonGroupsColumnSize[$sButtonGroupKey])) {
                    // Only the first occured column-size will be set, other are ignored.
                    $aButtonGroupsColumnSize[$sButtonGroupKey] = $aOptions['column-size'];
                }
            } elseif ($oElement instanceof FieldsetInterface) {
                $aElementsRendering[$iKey] = $oFormCollectionHelper->__invoke($oElement);
            } else {
                $aElementsRendering[$iKey] = $oFormRowHelper->__invoke($oElement);
            }
        }

        // Assemble elements rendering
        $sFormContent = '';

        foreach ($aElementsRendering as $sElementRendering) {
            // Check if element rendering is a button group key
            if (isset($aButtonGroups[$sElementRendering])) {
                $aButtons = $aButtonGroups[$sElementRendering];

                // Render button group content
                $aGroupOptions = isset($aButtonGroupsColumnSize[$sElementRendering])
                    ? ['attributes' => ['class' => 'col-' . $aButtonGroupsColumnSize[$sElementRendering]]]
                    : null;

                $sElementRendering = $oFormRowHelper->renderElementFormGroup(
                    $oButtonGroupHelper($aButtons, $aGroupOptions),
                    $oFormRowHelper->getRowClassFromElement(current($aButtons))
                );
            }
            if ($sElementRendering) {
                $sFormContent .= ($sFormContent ? PHP_EOL : '') . $sElementRendering;
            }
        }

        if ($bHasColumnSize && self::LAYOUT_HORIZONTAL !== $sFormLayout) {
            $sFormContent = $this->htmlElement('div', ['class' => 'row'], $sFormContent);
        }

        return $sFormContent;
    }
}
