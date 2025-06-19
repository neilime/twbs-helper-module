<?php

namespace TestSuite\TwbsHelper\Form\View\Helper;

use Laminas\Form\Element\Email;
use Laminas\Form\Form;
use Laminas\View\Renderer\PhpRenderer;
use PHPUnit\Framework\TestCase;
use TestSuite\Bootstrap;
use TwbsHelper\Form\View\Helper\FormElement;

class FormElementTest extends TestCase
{
    /**
     * @var FormElement
     */
    protected $formElementHelper;

    /**
     * @var Form
     */
    private $form;

    /**
     * @see \PHPUnit\Framework\TestCase::setUp()
     */
    protected function setUp(): void
    {
        $viewHelperPluginManager = Bootstrap::getServiceManager()->get('ViewHelperManager');
        $phpRenderer = new PhpRenderer();
        $this->formElementHelper = $viewHelperPluginManager
            ->get('formElement')
            ->setView($phpRenderer->setHelperPluginManager($viewHelperPluginManager));

        $this->form = new Form();
        $this->form->add([
            'name' => 'email',
            'id' => 'email',
            'type' => Email::class,
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
        $element = $this->form->get('email');

        $this->assertEquals(
            $this->formElementHelper->render($element),
            '<input class="form-control" maxlength="254" name="email" type="email" value=""/>'
        );
    }
}
