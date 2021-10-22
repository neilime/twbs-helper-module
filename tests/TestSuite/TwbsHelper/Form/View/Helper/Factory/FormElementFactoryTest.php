<?php

namespace TestSuite\TwbsHelper\Form\View\Helper\Factory;

use PHPUnit\Framework\TestCase;
use TestSuite\Bootstrap;
use TwbsHelper\Form\View\Helper\Factory\FormModuleOptionsFactory;
use TwbsHelper\Form\View\Helper\Form;
use TwbsHelper\Form\View\Helper\FormCollection;
use TwbsHelper\Form\View\Helper\FormElement;
use TwbsHelper\Form\View\Helper\FormRow;

class FormElementFactoryTest extends TestCase
{
    /**
     * @var \TwbsHelper\Form\View\Helper\Factory\FormModuleOptionsFactory|mixed
     */
    public $formElementFactory;

    /**
     * @var FormModuleOptionsFactory
     */
    protected $formModuleOptionsFactory;

    protected function setUp(): void
    {
        $this->formElementFactory = new FormModuleOptionsFactory();
    }

    /**
     * @dataProvider formElementProvider
     */
    public function testRenderElement(string $formElement)
    {
        $this->assertInstanceOf(
            $formElement,
            ($this->formElementFactory)(
                Bootstrap::getServiceManager(),
                $formElement
            )
        );
    }

    public function formElementProvider(): array
    {
        return [
            Form::class           => [
                Form::class,
            ],
            FormElement::class    => [
                FormElement::class,
            ],
            FormRow::class        => [
                FormRow::class,
            ],
            FormCollection::class => [
                FormCollection::class,
            ],
        ];
    }
}
