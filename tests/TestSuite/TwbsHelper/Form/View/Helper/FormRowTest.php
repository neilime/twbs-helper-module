<?php

namespace TestSuite\TwbsHelper\Form\View\Helper;

use Laminas\Form\Element\Hidden;
use Laminas\Form\Element\Text;
use Laminas\Form\Factory;
use Laminas\I18n\Translator\TranslatorInterface;
use Laminas\View\Renderer\PhpRenderer;
use ReflectionMethod;
use TestSuite\TwbsHelper\AbstractViewHelperTestCase;
use TwbsHelper\Form\View\Helper\FormRowElement;
use TwbsHelper\Form\View\Helper\FormRow;
use TwbsHelper\Options\ModuleOptions;

class FormRowTest extends AbstractViewHelperTestCase
{
    /**
     * @var FormRow
     */
    protected $helper = 'formRow';

    private function invokeProtected(object $helper, string $method, mixed ...$arguments): mixed
    {
        $reflectionMethod = new ReflectionMethod($helper, $method);

        return $reflectionMethod->invoke($helper, ...$arguments);
    }

    public function testRenderWithPartial()
    {
        $factory = new Factory();

        $form = $factory->create([
            'type' => 'form',
            'elements' => [
                [
                    'spec' => [
                        'name' => 'test',
                    ],
                ],
            ],
        ]);

        $this->assertEquals(
            '{"element":{},"label":null,"labelAttributes":[],"labelPosition":"prepend","renderErrors":true}',
            $this->helper->__invoke(
                element: $form,
                partial: 'test/json'
            )
        );
    }

    public function testRenderUsesDefaultLabelPositionWhenNullIsPassed(): void
    {
        $element = new Text('test');

        $this->helper->setPartial('test/json');

        $this->assertStringContainsString(
            '"labelPosition":"prepend"',
            $this->helper->render($element, null)
        );
    }

    public function testWithRowRowSpacingClassDisabled()
    {
        $element = new Text(
            'form',
            [
                'row_class' => 'mb-5',
                'row_spacing_class' => false,
            ]
        );

        $this->assertEquals(
            '<div class="mb-5">' . PHP_EOL .
                '    <input class="form-control" name="form" type="text" value=""/>' . PHP_EOL .
                '</div>',
            $this->helper->__invoke($element)
        );
    }

    public function testRenderHiddenElementWithoutMessagesUsesParentRendering(): void
    {
        $element = new Hidden('token');
        $element->setValue('abc123');

        $result = $this->helper->render($element);

        $this->assertStringContainsString('type="hidden"', $result);
        $this->assertStringContainsString('name="token"', $result);
        $this->assertStringContainsString('value="abc123"', $result);
    }

    public function testRenderWithPartialTranslatesLabel(): void
    {
        $translator = $this->createMock(TranslatorInterface::class);
        $translator->method('translate')->with('hello', 'default')->willReturn('bonjour');

        $element = new Text('test', ['label' => 'hello']);

        $this->helper->setTranslator($translator);
        $this->helper->setTranslatorTextDomain('default');

        $this->assertStringContainsString(
            '"label":"bonjour"',
            $this->helper->__invoke(element: $element, partial: 'test/json')
        );
    }

    public function testRenderFormRowMergesAdditionalAttributesAndValidPrefixes(): void
    {
        $moduleOptions = new ModuleOptions();
        $moduleOptions->setDefaultRowSpacingClass('mb-3');
        $moduleOptions->setValidTagAttributes(['data-test']);
        $moduleOptions->setValidTagAttributePrefixes(['aria']);
        $viewHelperPluginManager = \TestSuite\Bootstrap::getServiceManager()->get('ViewHelperManager');
        $phpRenderer = new PhpRenderer();
        $phpRenderer->setHelperPluginManager($viewHelperPluginManager);

        $helper = new FormRow($moduleOptions);
        $helper->setView($phpRenderer);

        $element = new Text('field', [
            'row-attributes' => [
                'data-test' => 'row',
                'aria-live' => 'polite',
            ],
        ]);

        $result = $helper->renderFormRow($element, 'content');

        $this->assertStringContainsString('data-test="row"', $result);
        $this->assertStringContainsString('aria-live="polite"', $result);
    }

    public function testGetFormRowElementHelperFallsBackToNewHelper(): void
    {
        $moduleOptions = new ModuleOptions();
        $moduleOptions->setDefaultRowSpacingClass('mb-3');
        $helper = new FormRow($moduleOptions);

        $this->assertInstanceOf(
            FormRowElement::class,
            $this->invokeProtected($helper, 'getFormRowElementHelper')
        );
    }
}
