<?php

namespace TestSuite\TwbsHelper;

abstract class AbstractViewHelperTestCase extends \PHPUnit\Framework\TestCase
{

    /**
     * @var \Zend\View\Helper\AbstractHtmlElement
     */
    protected $helper;

    public function setUp(): void
    {
        if (!is_string($this->helper)) {
            throw new \LogicException(sprintf(
                'Property "helper" expects a string, "%s" defined',
                is_object($this->helper) ? get_class($this->helper) : gettype($this->helper)
            ));
        }

        $oViewHelperPluginManager = \TestSuite\Bootstrap::getServiceManager()->get('ViewHelperManager');
        $oRenderer = new \Zend\View\Renderer\PhpRenderer();
        $oRenderer->setHelperPluginManager($oViewHelperPluginManager);
        $this->helper = $oRenderer->getHelperPluginManager()->get($this->helper);
    }
}
