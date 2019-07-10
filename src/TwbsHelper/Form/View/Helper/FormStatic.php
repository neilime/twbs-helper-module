<?php

namespace TwbsHelper\Form\View\Helper;

class FormStatic extends \TwbsHelper\View\Helper\AbstractHtmlElement
{

    /**
     * Invoke helper as functor
     * Proxies to {@link render()}.
     *
     * @param \Zend\Form\ElementInterface|null $element
     * @return string|\TwbsHelper\Form\View\Helper\FormStatic
     */
    public function __invoke(\Zend\Form\ElementInterface $oElement = null)
    {
        if (!$oElement) {
            return $this;
        }

        return $this->render($oElement);
    }


    /**
     * Render a <p> static element
     *
     * @param \Zend\Form\ElementInterface $oElement
     * @access public
     * @return string
     */
    public function render(\Zend\Form\ElementInterface $oElement)
    {
        return $this->htmlElement('p', ['class' => 'form-control-static'], $oElement->getValue());
    }
}
