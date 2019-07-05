<?php
namespace TwbsHelper\Form\View\Helper;

use Zend\Form\View\Helper\AbstractHelper;
use Zend\Form\FormInterface;

/**
 * FormErrors
 *
 * @uses AbstractHelper
 */
class FormErrors extends AbstractHelper
{
    protected $sDefaultErrorText = 'There were errors in the form submission';

    protected $sMessageOpenFormat = '<h4>%s</h4><ul><li>';

    protected $sMessageCloseString = '</li></ul>';

    protected $sMessageSeparatorString = '</li><li>';


    /**
     * __invoke
     * Invoke as function
     *
     * @param  \Zend\Form\FormInterface $oForm
     * @param  string                   $sMessage
     * @param  string                   $bDismissable
     * @access public
     * @return string|null
     */
    public function __invoke(FormInterface $oForm = null, $sMessage = null, $bDismissable = false)
    {
        if (! $oForm) {
            return $this;
        }

        if (! $sMessage) {
            $sMessage = $this->sDefaultErrorText;
        }

        if ($oForm->hasValidated() && ! $oForm->isValid()) {
            return $this->render($oForm, $sMessage, $bDismissable);
        }

        return null;
    }


    /**
     * render
     * Renders the error messages.
     *
     * @param  \Zend\Form\FormInterface $oForm
     * @access public
     * @return string
     */
    public function render(FormInterface $oForm, $sMessage, $bDismissable = false)
    {
        $errorHtml = sprintf($this->sMessageOpenFormat, $sMessage);
        $aMessages = [];

        foreach ($oForm->getMessages() as $fieldName => $aFormMessages) {
            foreach ($aFormMessages as $sFormMessage) {
                if ($oForm->get($fieldName)->getAttribute('id')) {
                    $aMessages[] = sprintf(
                        '<a href="#%s">%s</a>',
                        $oForm->get($fieldName)->getAttribute('id'),
                        $oForm->get($fieldName)->getLabel().': '.$sFormMessage
                    );
                } else {
                    $aMessages[] = $oForm->get($fieldName)->getLabel().': '.$sFormMessage;
                }
            }
        }

        return $this->dangerAlert(
            $errorHtml.implode($this->sMessageSeparatorString, $aMessages).$this->sMessageCloseString,
            $bDismissable
        );
    }


    /**
     * dangerAlert
     * Creates and returns a "danger" alert.
     *
     * @param  string  $content
     * @param  boolean $bDismissable
     * @return string
     */
    public function dangerAlert($content, $bDismissable = false)
    {
        return $this->getView()->alert($content, ['class' => 'alert-danger'], $bDismissable);
    }
}
