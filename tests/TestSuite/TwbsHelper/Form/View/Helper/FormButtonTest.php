<?php

namespace TestSuite\TwbsHelper\Form\View\Helper;

use Laminas\Form\Element\Button;
use Laminas\Form\Element\Text;
use Laminas\View\Renderer\PhpRenderer;
use PHPUnit\Framework\TestCase;
use TestSuite\Bootstrap;
use TwbsHelper\Form\View\Helper\FormButton;
use DomainException;
use InvalidArgumentException;
use stdClass;

class FormButtonTest extends TestCase
{
    /**
     * @var FormButton
     */
    protected $formButtonHelper;

    /**
     * @see \PHPUnit\Framework\TestCase::setUp()
     */
    protected function setUp(): void
    {
        $viewHelperPluginManager = Bootstrap::getServiceManager()->get('ViewHelperManager');
        $phpRenderer = new PhpRenderer();
        $this->formButtonHelper = $viewHelperPluginManager
            ->get('formButton')
            ->setView($phpRenderer->setHelperPluginManager($viewHelperPluginManager));
    }

    public function testRenderWithWrongPopoverOptionThrowsAnException()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'Option "popover" expects a string or an iterable, "stdClass" given'
        );

        $this->formButtonHelper->render(new Button(
            'test',
            [
                'label' => 'test',
                'popover' => new stdClass(),
            ]
        ));
    }

    public function testRenderWithoutButtonContentThrowsAnException()
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage(
            FormButton::class . '::renderButtonContent expects either button content ' .
                'as the second argument, or that the element provided has a label value, a glyphicon option, ' .
                'or a fontAwesome option; none found'
        );

        $this->formButtonHelper->render(new Button('test', []));
    }

    public function testRenderIconWithStringIconOption()
    {
        $this->assertEquals(
            '<button class="btn&#x20;btn-secondary" name="test" type="button" value="">' .
                '<i class="fa-bootstrap&#x20;fab"></i>' .
                '</button>',
            $this->formButtonHelper->render(new Button(
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
            '<button class="btn&#x20;btn-secondary" name="test" type="button" value="">' .
                '<i class="fa-bootstrap&#x20;fab"></i> test' .
                '</button>',
            $this->formButtonHelper->render(new Button(
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
            '<button class="btn&#x20;btn-secondary" name="test" type="button" value="">' .
                'test <i class="fa-bootstrap&#x20;fab"></i>' .
                '</button>',
            $this->formButtonHelper->render(new Button(
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
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('"icon" button option expects a scalar value or an array, "stdClass" given');

        $this->formButtonHelper->render(new Button(
            'test',
            [
                'label' => 'test',
                'icon' => new stdClass(),
            ]
        ));
    }

    public function testRenderWithoutIconClassOptionThrowsAnException()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('"[icon][class]" option is undefined');

        $this->formButtonHelper->render(new Button(
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
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('"[icon][class]" option expects a scalar value, "stdClass" given');

        $this->formButtonHelper->render(new Button(
            'test',
            [
                'label' => 'test',
                'icon' => ['class' => new stdClass()],
            ]
        ));
    }

    public function testRenderWithWrongTypeIconPositionOptionThrowsAnException()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('"[icon][position]" option expects a string, "stdClass" given');

        $this->formButtonHelper->render(new Button(
            'test',
            [
                'label' => 'test',
                'icon' => [
                    'class' => 'fab fa-bootstrap',
                    'position' => new stdClass(),
                ],
            ]
        ));
    }

    public function testRenderWithWrongIconPositionOptionThrowsAnException()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('"[icon][position]" option allows "prepend" or "append", "wrong" given');

        $this->formButtonHelper->render(new Button(
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

    public function testRenderSpecWithInvalidTypeThrowsAnException()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'Invalid button type specified, Laminas\Form\Element\Text '
                . 'does not inherit from Laminas\Form\Element\Button.'
        );

        $this->formButtonHelper->renderSpec([
            'type' => Text::class,
            'name' => 'test',
        ]);
    }
}
