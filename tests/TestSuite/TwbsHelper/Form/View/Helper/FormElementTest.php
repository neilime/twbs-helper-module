<?php

namespace TestSuite\TwbsHelper\Form\View\Helper;

class FormElementTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \TwbsHelper\Form\View\Helper\FormElement
     */
    protected $formElementHelper;

    /**
     * @var \Laminas\Form\Form
     */
    private $testform;

    /**
     * @see \PHPUnit_Framework_TestCase::setUp()
     */
    public function setUp(): void
    {
        $oViewHelperPluginManager = \TestSuite\Bootstrap::getServiceManager()->get('ViewHelperManager');
        $oRenderer = new \Laminas\View\Renderer\PhpRenderer();
        $this->formElementHelper = $oViewHelperPluginManager
            ->get('formElement')
            ->setView($oRenderer->setHelperPluginManager($oViewHelperPluginManager));

        $this->testform = new \Laminas\Form\Form();
        $this->testform->add([
            'name' => 'email',
            'id' => 'email',
            'type' => \Laminas\Form\Element\Email::class,
            'options' => [
                'label' => 'Your Email Address',
                'label_attributes' => ['for' => 'email'],
            ],
            'attributes' => [
                'maxlength' => 254,
            ],
        ]);
    }

    public function testRenderElement()
    {
        $oElement = $this->testform->get('email');

        $this->assertEquals(
            $this->formElementHelper->render($oElement),
            '<input type="email" name="email" maxlength="254" class="form-control" value="">'
        );
    }
}
