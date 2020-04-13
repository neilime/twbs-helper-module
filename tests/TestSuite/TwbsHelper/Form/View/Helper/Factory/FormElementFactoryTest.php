<?php

namespace TestSuite\TwbsHelper\Form\View\Helper\Factory;

class FormElementFactoryTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \TwbsHelper\Form\View\Helper\Factory\FormElementFactory
     */
    protected $formElementFactory;

    /**
     * @see \PHPUnit\Framework\TestCase::setUp()
     */
    public function setUp(): void
    {
        $this->formElementFactory = new \TwbsHelper\Form\View\Helper\Factory\FormElementFactory();
    }

    public function testRenderElement()
    {
        $this->assertInstanceOf(
            \TwbsHelper\Form\View\Helper\FormElement::class,
            $this->formElementFactory->createService(\TestSuite\Bootstrap::getServiceManager())
        );
    }
}
