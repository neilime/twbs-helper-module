<?php
namespace TwbsHelper\Form\View\Helper;

use Zend\Form\ElementInterface;
use Zend\View\Helper\AbstractHelper;

/**
 * FormStatic
 *
 * @uses AbstractHelper
 */
class FormStatic extends AbstractHelper
{

    /**
     * @var string
     */
    protected static $staticFormat = '<p class="form-control-static">%s</p>';


    /**
     * __invoke
     * Invoke helper as functor
     * Proxies to {@link render()}.
     *
     * @param  ElementInterface|null $element
     * @access public
     * @return string|TwbsHelperFormStatic
     */
    public function __invoke(ElementInterface $element = null)
    {
        if (! $element) {
            return $this;
        }

        return $this->render($element);
    }


    /**
     * render
     *
     * @see    \Zend\Form\View\Helper\AbstractHelper::render()
     * @param  ElementInterface $oElement
     * @access public
     * @return string
     */
    public function render(ElementInterface $oElement)
    {
        return sprintf(static::$staticFormat, $oElement->getValue());
    }
}
