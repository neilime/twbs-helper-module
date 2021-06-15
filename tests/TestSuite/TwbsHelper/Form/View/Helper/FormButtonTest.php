<?php

namespace TestSuite\TwbsHelper\Form\View\Helper;

class FormButtonTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \TwbsHelper\Form\View\Helper\FormButton
     */
    protected $formButtonHelper;

    /**
     * @see \PHPUnit\Framework\TestCase::setUp()
     */
    public function setUp(): void
    {
        $oViewHelperPluginManager = \TestSuite\Bootstrap::getServiceManager()->get('ViewHelperManager');
        $oRenderer = new \Laminas\View\Renderer\PhpRenderer();
        $this->formButtonHelper = $oViewHelperPluginManager
            ->get('formButton')
            ->setView($oRenderer->setHelperPluginManager($oViewHelperPluginManager));
    }

    public function testInvokeWithWrongTypeElementThrowsAnException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'Button expects an instanceof \Laminas\Form\ElementInterface or an array, "stdClass" given'
        );

        $this->formButtonHelper->__invoke(new \stdClass());
    }

    public function testRenderWithWrongPopoverOptionThrowsAnException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'Option "popover" expects a string or an array, "stdClass" given'
        );

        $this->formButtonHelper->render(new \Laminas\Form\Element\Button(
            'test',
            [
                'label' => 'test',
                'popover' => new \stdClass(),
            ]
        ));
    }

    public function testRenderWithoutButtonContentThrowsAnException()
    {
        $this->expectException(\DomainException::class);
        $this->expectExceptionMessage(
            'TwbsHelper\Form\View\Helper\FormButton::renderButtonContent expects either button content ' .
                'as the second argument, or that the element provided has a label value, a glyphicon option, ' .
                'or a fontAwesome option; none found'
        );

        $this->formButtonHelper->render(new \Laminas\Form\Element\Button('test', []));
    }

    public function testRenderIconWithStringIconOption()
    {
        $this->assertEquals(
            '<button type="button" name="test" class="btn&#x20;btn-secondary" value="">' .
                '<i class="fa-bootstrap&#x20;fab"></i>' .
                '</button>',
            $this->formButtonHelper->render(new \Laminas\Form\Element\Button(
                'test',
                [
                    'icon' => 'fab fa-bootstrap',
                ]
            ))
        );
    }

    public function testRenderIconWithArrayIconOption()
    {
        $this->assertEquals(
            '<button type="button" name="test" class="btn&#x20;btn-secondary" value="">' .
                '<i class="fa-bootstrap&#x20;fab"></i> test' .
                '</button>',
            $this->formButtonHelper->render(new \Laminas\Form\Element\Button(
                'test',
                [
                    'label' => 'test',
                    'icon' => [
                        'class' => 'fab fa-bootstrap',
                        'position' => 'prepend',
                    ],
                ]
            ))
        );

        $this->assertEquals(
            '<button type="button" name="test" class="btn&#x20;btn-secondary" value="">' .
                'test <i class="fa-bootstrap&#x20;fab"></i>' .
                '</button>',
            $this->formButtonHelper->render(new \Laminas\Form\Element\Button(
                'test',
                [
                    'label' => 'test',
                    'icon' => [
                        'class' => 'fab fa-bootstrap',
                        'position' => 'append',
                    ],
                ]
            ))
        );
    }

    public function testRenderWithWrongIconOptionThrowsAnException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('"icon" button option expects a scalar value or an array, "stdClass" given');

        $this->formButtonHelper->render(new \Laminas\Form\Element\Button(
            'test',
            [
                'label' => 'test',
                'icon' => new \stdClass(),
            ]
        ));
    }

    public function testRenderWithoutIconClassOptionThrowsAnException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('"[icon][class]" option is undefined');

        $this->formButtonHelper->render(new \Laminas\Form\Element\Button(
            'test',
            [
                'label' => 'test',
                'icon' => [
                    'position' => 'append',
                ],
            ]
        ));
    }

    public function testRenderWithWrongTypeIconClassOptionThrowsAnException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('"[icon][class]" option expects a scalar value, "stdClass" given');

        $this->formButtonHelper->render(new \Laminas\Form\Element\Button(
            'test',
            [
                'label' => 'test',
                'icon' => ['class' => new \stdClass()],
            ]
        ));
    }

    public function testRenderWithWrongTypeIconPositionOptionThrowsAnException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('"[icon][position]" option expects a string, "stdClass" given');

        $this->formButtonHelper->render(new \Laminas\Form\Element\Button(
            'test',
            [
                'label' => 'test',
                'icon' => [
                    'class' => 'fab fa-bootstrap',
                    'position' => new \stdClass(),
                ],
            ]
        ));
    }

    public function testRenderWithWrongIconPositionOptionThrowsAnException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('"[icon][position]" option allows "prepend" or "append", "wrong" given');

        $this->formButtonHelper->render(new \Laminas\Form\Element\Button(
            'test',
            [
                'label' => 'test',
                'icon' => [
                    'class' => 'fab fa-bootstrap',
                    'position' => 'wrong',
                ],
            ]
        ));
    }
}
