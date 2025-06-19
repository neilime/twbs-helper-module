<?php

namespace TestSuite\TwbsHelper\View;

use Laminas\View\Renderer\PhpRenderer;
use PHPUnit\Framework\TestCase;
use TestSuite\Bootstrap;
use TwbsHelper\View\HtmlAttributesSet;

class HtmlAttributesSetTest extends TestCase
{
    /**
     * @var \\Laminas\View\Renderer\PhpRenderer
     */
    protected $phpRenderer;

    protected function setUp(): void
    {
        $viewHelperPluginManager = Bootstrap::getServiceManager()->get('ViewHelperManager');
        $this->phpRenderer = new PhpRenderer();
        $this->phpRenderer->setHelperPluginManager($viewHelperPluginManager);
    }

    public function testToString()
    {
        $htmlAttributesSet = new HtmlAttributesSet(
            $this->phpRenderer->plugin('escapehtml')->getEscaper(),
            [
                'class' => 'two one',
                'style' => 'width: 50%; color: red',
            ]
        );

        $this->assertSame(
            ' class="one&#x20;two" style="color&#x3A;&#x20;red&#x3B;&#x20;width&#x3A;&#x20;50&#x25;&#x3B;"',
            $htmlAttributesSet->__toString()
        );
    }

    public function testMerge()
    {
        $htmlAttributesSet = new HtmlAttributesSet(
            $this->phpRenderer->plugin('escapehtml')->getEscaper(),
            [
                'data-bs-target' => '.multi-collapse',
                'aria-controls' => 'multiCollapseExample1 multiCollapseExample2',
            ]
        );

        $htmlAttributesSet->merge([
            'data-bs-toggle' => 'collapse',
            'aria-controls' => 'multiCollapseExample1',
            'aria-expanded' => 'false',
            'data-bs-target' => '#multiCollapseExample1',
        ]);

        $this->assertSame(
            [
                'aria-controls' => 'multiCollapseExample1 multiCollapseExample2',
                'aria-expanded' => 'false',
                'data-bs-target' => '#multiCollapseExample1',
                'data-bs-target' => '.multi-collapse',
                'data-bs-toggle' => 'collapse',
            ],
            $htmlAttributesSet->getArrayCopy()
        );
    }
}
