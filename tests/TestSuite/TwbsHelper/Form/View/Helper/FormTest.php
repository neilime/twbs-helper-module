<?php

namespace TestSuite\TwbsHelper\Form\View\Helper;

class FormTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \TwbsHelper\Form\View\Helper\Form
     */
    protected $formHelper;

    /**
     * @see \PHPUnit\Framework\TestCase::setUp()
     */
    public function setUp(): void
    {
        $oViewHelperPluginManager = \TestSuite\Bootstrap::getServiceManager()->get('ViewHelperManager');
        $oRenderer = new \Laminas\View\Renderer\PhpRenderer();
        $this->formHelper = $oViewHelperPluginManager
            ->get('form')
            ->setView($oRenderer->setHelperPluginManager($oViewHelperPluginManager));
    }

    public function testInvokeWithoutArgumentsReturnSelf()
    {
        $this->assertSame(
            $this->formHelper,
            $this->formHelper->__invoke()
        );
    }
}
