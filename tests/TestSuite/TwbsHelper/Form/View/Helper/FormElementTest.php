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
    private $form;

    /**
     * @see \PHPUnit\Framework\TestCase::setUp()
     */
    protected function setUp(): void
    {
        $viewHelperPluginManager = \TestSuite\Bootstrap::getServiceManager()->get('ViewHelperManager');
        $phpRenderer = new \Laminas\View\Renderer\PhpRenderer();
        $this->formElementHelper = $viewHelperPluginManager
            ->get('formElement')
            ->setView($phpRenderer->setHelperPluginManager($viewHelperPluginManager));

        $this->form = new \Laminas\Form\Form();
        $this->form->add([
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
        $element = $this->form->get('email');

        $this->assertEquals(
            $this->formElementHelper->render($element),
            '<input class="form-control" maxlength="254" name="email" type="email" value=""/>'
        );
    }
}
