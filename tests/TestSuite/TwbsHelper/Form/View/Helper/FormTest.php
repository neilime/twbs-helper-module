<?php

namespace TestSuite\TwbsHelper\Form\View\Helper;

class FormTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \TwbsHelper\Form\View\Helper\Form
     */
    protected $form;

    /**
     * @see \PHPUnit_Framework_TestCase::setUp()
     */
    public function setUp(): void
    {
        $this->form = new \TwbsHelper\Form\View\Helper\Form();
    }

    public function testInvokeWithoutArgumentsReturnSelf()
    {
        $this->assertSame(
            $this->form,
            $this->form->__invoke()
        );
    }
}
