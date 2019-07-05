<?php

namespace TestSuite\TwbsHelper\View\Helper;

use TwbsHelper\Form\View\Helper\FormElement;
use Zend\Filter\StringToLower;
use Zend\Filter\StringTrim;
use Zend\Form\Element\Email;
use Zend\Form\Form;
use Zend\InputFilter\InputFilter;
use Zend\Validator\EmailAddress;

class FormElementTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var FormElement
     */
    protected $formElementHelper;

    /**
     * @var Form
     */
    private $testform;

    /**
     * @see \PHPUnit_Framework_TestCase::setUp()
     */
    public function setUp(): void
    {
        $oViewHelperPluginManager = \TestSuite\Bootstrap::getServiceManager()->get('ViewHelperManager');
        $oRenderer = new \Zend\View\Renderer\PhpRenderer();
        $this->formElementHelper = $oViewHelperPluginManager
            ->get('formElement')
            ->setView($oRenderer->setHelperPluginManager($oViewHelperPluginManager));

        $this->testform = new Form();
        $this->testform->add([
            'name' => 'email',
            'id' => 'email',
            'type' => Email::class,
            'options' => [
                'label' => "Your Email Address",
                'label_attributes' => ['for' => 'email'],
            ],
            'attributes' => [
                'maxlength' => 254,
            ],
        ]);
    }

    public function testRenderElement()
    {
        $element = $this->testform->get('email');

        $this->assertEquals(
            $this->formElementHelper->render($element),
            '<input type="email" name="email" maxlength="254" class="form-control" value="">'
        );
    }
}
