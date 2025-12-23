<?php

namespace TestSuite\TwbsHelper\Form\View\Helper;

use Laminas\Form\Element;
use Laminas\Form\Element\Button;
use Laminas\Form\Element\Text;
use Laminas\Form\Element\MultiCheckbox;
use Laminas\I18n\Translator\TranslatorInterface;
use PHPUnit\Framework\Attributes\DataProvider;
use ReflectionProperty;
use TestSuite\TwbsHelper\AbstractViewHelperTestCase;
use TwbsHelper\Form\View\Helper\Form;
use TwbsHelper\Form\View\Helper\FormLabel;

class FormLabelTest extends AbstractViewHelperTestCase
{
    /**
     * @var FormLabel
     */
    protected $helper = 'formLabel';

    #[DataProvider('dataProviderRenderLabels')]
    public function testRenderWithLabel(Element $element, string $expected)
    {
        $this->assertEquals(
            $expected,
            $this->helper->__invoke($element)
        );
    }

    public static function dataProviderRenderLabels(): array
    {
        return [
            [
                new Text(
                    'test_one',
                    [
                        'label' => 'Without special chars',
                    ]
                ),
                '<label class="form-label" for="test_one">Without special chars</label>',
            ],
            [
                new Text(
                    'test_one',
                    [
                        'label' => 'With special chars < > &',
                    ]
                ),
                '<label class="form-label" for="test_one">With special chars &lt; &gt; &amp;</label>',
            ],
            [
                new Text(
                    'test_one',
                    [
                        'label' => 'With special chars &lt; &gt; &amp;',
                    ]
                ),
                '<label class="form-label" for="test_one">With special chars &amp;lt; &amp;gt; &amp;amp;</label>',
            ],
            [
                new Text(
                    'test_one',
                    [
                        'label' => 'With a quote\'',
                    ]
                ),
                '<label class="form-label" for="test_one">With a quote&#039;</label>',
            ],
            [
                new MultiCheckbox(
                    'test_one',
                    [
                        'label' => 'Without special chars',
                    ]
                ),
                '<div class="form-label">
    Without special chars
</div>',
            ],
            [
                new MultiCheckbox(
                    'test_one',
                    [
                        'label' => 'With special chars < > &',
                    ]
                ),
                '<div class="form-label">
    With special chars &lt; &gt; &amp;
</div>',
            ],
            [
                new MultiCheckbox(
                    'test_one',
                    [
                        'label' => 'With special chars &lt; &gt; &amp;',
                    ]
                ),
                '<div class="form-label">
    With special chars &amp;lt; &amp;gt; &amp;amp;
</div>',
            ],
            [
                new MultiCheckbox(
                    'test_one',
                    [
                        'label' => 'With a quote\'',
                    ]
                ),
                '<div class="form-label">
    With a quote&#039;
</div>',
            ],
            [
                new Text(
                    'test_one',
                    [
                        'label' => 'Without special chars',
                        'label_options' => [
                            'disable_html_escape' => true,
                        ],
                    ]
                ),
                '<label class="form-label" for="test_one">Without special chars</label>',
            ],
            [
                new Text(
                    'test_one',
                    [
                        'label' => 'With special chars < > &',
                        'label_options' => [
                            'disable_html_escape' => true,
                        ],
                    ]
                ),
                '<label class="form-label" for="test_one">With special chars < > &</label>',
            ],
            [
                new Text(
                    'test_one',
                    [
                        'label' => 'With special chars &lt; &gt; &amp;',
                        'label_options' => [
                            'disable_html_escape' => true,
                        ],
                    ]
                ),
                '<label class="form-label" for="test_one">With special chars &lt; &gt; &amp;</label>',
            ],
            [
                new Text(
                    'test_one',
                    [
                        'label' => 'With a quote\'',
                        'label_options' => [
                            'disable_html_escape' => true,
                        ],
                    ]
                ),
                '<label class="form-label" for="test_one">With a quote\'</label>',
            ],
            [
                new MultiCheckbox(
                    'test_one',
                    [
                        'label' => 'Without special chars',
                        'label_options' => [
                            'disable_html_escape' => true,
                        ],
                    ]
                ),
                '<div class="form-label">
    Without special chars
</div>',
            ],
            [
                new MultiCheckbox(
                    'test_one',
                    [
                        'label' => 'With special chars < > &',
                        'label_options' => [
                            'disable_html_escape' => true,
                        ],
                    ]
                ),
                '<div class="form-label">
    With special chars < > &
</div>',
            ],
            [
                new MultiCheckbox(
                    'test_one',
                    [
                        'label' => 'With special chars &lt; &gt; &amp;',
                        'label_options' => [
                            'disable_html_escape' => true,
                        ],
                    ]
                ),
                '<div class="form-label">
    With special chars &lt; &gt; &amp;
</div>',
            ],
            [
                new MultiCheckbox(
                    'test_one',
                    [
                        'label' => 'With a quote\'',
                        'label_options' => [
                            'disable_html_escape' => true,
                        ],
                    ]
                ),
                '<div class="form-label">
    With a quote\'
</div>',
            ],
        ];
    }

    public function testInvokeReturnsProvidedLabelContentForButtons(): void
    {
        $element = new Button('action', ['label' => 'Ignored']);

        $this->assertSame('Rendered elsewhere', $this->helper->__invoke($element, 'Rendered elsewhere'));
    }

    public function testInvokeWithoutElementReturnsHelper(): void
    {
        $this->assertSame($this->helper, $this->helper->__invoke());
    }

    public function testInvokeSkipsBootstrapDecorationWhenDisabled(): void
    {
        $element = new Text('test_one', [
            'label' => 'Disabled twbs',
            'disable_twbs' => true,
        ]);

        $this->assertSame(
            '<label for="test_one">Disabled twbs</label>',
            $this->helper->__invoke($element)
        );
    }

    public function testRenderAddsVisuallyHiddenClassWhenLabelIsHidden(): void
    {
        $element = new Text('test_one', [
            'label' => 'Hidden label',
            'show_label' => false,
        ]);

        $result = $this->helper->__invoke($element);

        $this->assertStringContainsString('visually-hidden', $result);
        $this->assertStringContainsString('Hidden label', $result);
    }

    public function testRenderAddsHorizontalColumnCounterpartClasses(): void
    {
        $element = new Text('test_one', [
            'label' => 'Horizontal label',
            'layout' => Form::LAYOUT_HORIZONTAL,
            'column' => 'sm-4',
        ]);

        $result = $this->helper->__invoke($element);

        $this->assertStringContainsString('col-sm-8', $result);
        $this->assertStringContainsString('col-form-label', $result);
    }

    public function testInvokeAppendsRequiredFormatWhenMissing(): void
    {
        $requiredFormatProperty = new ReflectionProperty($this->helper, 'requiredFormat');
        $requiredFormatProperty->setValue($this->helper, ' *');

        $element = new Text('test_one', ['label' => 'Required label']);
        $element->setAttribute('required', true);

        $this->assertStringContainsString('Required label *', $this->helper->__invoke($element));
    }

    public function testRenderPartialReturnsEmptyStringForNonLabelAwareElement(): void
    {
        $element = $this->createMock(Element::class);

        $this->assertSame('', $this->helper->renderPartial($element));
    }

    public function testRenderPartialTranslatesLabelWhenTranslatorIsPresent(): void
    {
        $translator = $this->createMock(TranslatorInterface::class);
        $translator->method('translate')->with('hello', 'default')->willReturn('bonjour');

        $this->helper->setTranslator($translator);
        $this->helper->setTranslatorTextDomain('default');

        $element = new Text('test_one', ['label' => 'hello']);

        $this->assertSame('bonjour', $this->helper->renderPartial($element));
    }
}
