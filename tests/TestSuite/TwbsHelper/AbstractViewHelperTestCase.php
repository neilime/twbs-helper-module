<?php

namespace TestSuite\TwbsHelper;

abstract class AbstractViewHelperTestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Laminas\View\Helper\AbstractHtmlElement
     */
    protected $helper;

    protected function setUp(): void
    {
        if (!is_string($this->helper)) {
            throw new \LogicException(sprintf(
                'Property "helper" expects a string, "%s" defined',
                is_object($this->helper) ? get_class($this->helper) : gettype($this->helper)
            ));
        }

        $viewHelperPluginManager = \TestSuite\Bootstrap::getServiceManager()->get('ViewHelperManager');
        $phpRenderer = new \Laminas\View\Renderer\PhpRenderer();
        $phpRenderer->setHelperPluginManager($viewHelperPluginManager);

        $this->helper = $phpRenderer->getHelperPluginManager()->get($this->helper);
    }
}
