<?php

namespace TestSuite\TwbsHelper;

use Laminas\View\Helper\AbstractHtmlElement;
use Laminas\View\Renderer\PhpRenderer;
use PHPUnit\Framework\TestCase;
use TestSuite\Bootstrap;
use LogicException;

abstract class AbstractViewHelperTestCase extends TestCase
{
    /**
     * @var AbstractHtmlElement
     */
    protected $helper;

    protected function setUp(): void
    {
        if (!is_string($this->helper)) {
            throw new LogicException(sprintf(
                'Property "helper" expects a string, "%s" defined',
                is_object($this->helper) ? get_class($this->helper) : gettype($this->helper)
            ));
        }

        $viewHelperPluginManager = Bootstrap::getServiceManager()->get('ViewHelperManager');
        $resolver = Bootstrap::getServiceManager()->get('ViewResolver');
        $phpRenderer = new PhpRenderer();
        $phpRenderer
            ->setResolver($resolver)
            ->setHelperPluginManager($viewHelperPluginManager);

        $this->helper = $phpRenderer->getHelperPluginManager()->get($this->helper, ['test' => 'test']);
    }
}
