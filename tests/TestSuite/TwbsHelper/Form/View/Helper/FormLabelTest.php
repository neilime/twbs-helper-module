<?php

namespace TestSuite\TwbsHelper\Form\View\Helper;

use Laminas\Form\Element;
use Laminas\Form\Element\MultiCheckbox;
use Laminas\Form\Element\Text;
use TestSuite\TwbsHelper\AbstractViewHelperTestCase;
use TwbsHelper\Form\View\Helper\FormLabel;

class FormLabelTest extends AbstractViewHelperTestCase
{
    /**
     * @var FormLabel
     */
    protected $helper = 'formLabel';

    /**
     * @dataProvider dataProviderRenderLabels
     */
    public function testRenderWithLabel(Element $element, string $expected)
    {
        $this->assertEquals(
            $expected,
            $this->helper->__invoke($element)
        );
    }

    public function dataProviderRenderLabels(): array
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
}
