<?php
namespace TwbsHelper\Form\View\Helper;

use Zend\Form\View\Helper\Form as ZendFormViewHelper;
use Zend\Form\FormInterface;
use Zend\Form\FieldsetInterface;

/**
 * Form
 *
 * @uses ZendFormViewHelper
 */
class Form extends ZendFormViewHelper
{
    const LAYOUT_HORIZONTAL = 'horizontal';
    const LAYOUT_INLINE     = 'inline';

    // @var string
    protected static $sFormRowFormat = '<div class="row">%s</div>';

    // Form layout (see LAYOUT_* consts)
    // @var string
    protected $sFormLayout = null;


    /**
     * __invoke
     *
     * @see    Form::__invoke()
     * @param  FormInterface $oForm
     * @param  string $sFormLayout
     * @access public
     * @return TwbsHelperForm|string
     */
    public function __invoke(FormInterface $oForm = null, $sFormLayout = null)
    {
        $this->sFormLayout = $sFormLayout;

        if ($oForm) {
            return $this->render($oForm, $sFormLayout);
        }

        return $this;
    }


    /**
     * render
     * Render a form from the provided $oForm,
     *
     * @see    Form::render()
     * @param  FormInterface $oForm
     * @param  string|null $sFormLayout
     * @access public
     * @return string
     */
    public function render(FormInterface $oForm, $sFormLayout = null)
    {
        // Prepare form if needed
        if (method_exists($oForm, 'prepare')) {
            $oForm->prepare();
        }

        $this->setFormClass($oForm, $sFormLayout);

        // Set form role
        if (! $oForm->getAttribute('role')) {
            $oForm->setAttribute('role', 'form');
        }

        return $this->openTag($oForm) . "\n" . $this->renderElements($oForm, $sFormLayout) . $this->closeTag();
    }


    /**
     * renderElements
     *
     * @param  FormInterface $oForm
     * @param  string|null $sFormLayout
     * @access protected
     * @return string
     */
    protected function renderElements(FormInterface $oForm, $sFormLayout = null)
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

            if (! $bHasColumnSize && ! empty($aOptions['column-size'])) {
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

                if (! empty($aOptions['column-size']) && ! isset($aButtonGroupsColumnSize[$sButtonGroupKey])) {
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
                $options       = (isset($aButtonGroupsColumnSize[$sElementRendering])) ? ['attributes' => ['class' => 'col-' . $aButtonGroupsColumnSize[$sElementRendering]]] : null;
                $sFormContent .= $oFormRowHelper->renderElementFormGroup($oButtonGroupHelper($aButtons, $options), $oFormRowHelper->getRowClassFromElement(current($aButtons)));
            } else {
                $sFormContent .= $sElementRendering;
            }
        }

        if ($bHasColumnSize && self::LAYOUT_HORIZONTAL !== $sFormLayout) {
            $sFormContent = sprintf(static::$sFormRowFormat, $sFormContent);
        }

        return $sFormContent;
    }


    /**
     * setFormClass
     * Sets form layout class
     *
     * @param  FormInterface $oForm
     * @param  string|null $sFormLayout
     * @access protected
     * @return TwbsHelper\Form\View\Helper\TwbsHelperForm
     */
    protected function setFormClass(FormInterface $oForm, $sFormLayout = null)
    {
        if (is_string($sFormLayout)) {
            $sLayoutClass = 'form-' . $sFormLayout;

            if ($sFormClass = $oForm->getAttribute('class')) {
                if (! preg_match('/(\s|^)' . preg_quote($sLayoutClass, '/') . '(\s|$)/', $sFormClass)) {
                    $oForm->setAttribute('class', trim($sFormClass . ' ' . $sLayoutClass));
                }
            } else {
                $oForm->setAttribute('class', $sLayoutClass);
            }
        }

        return $this;
    }


    /**
     * openTag
     * Generate an opening form tag
     *
     * @param FormInterface|null $oForm
     * @access public
     * @return string
     */
    public function openTag(FormInterface $oForm = null)
    {
        $this->setFormClass($oForm, $this->sFormLayout);

        return parent::openTag($oForm);
    }
}
