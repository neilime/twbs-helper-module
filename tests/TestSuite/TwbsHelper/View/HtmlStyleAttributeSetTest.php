<?php

namespace TestSuite\TwbsHelper\View;

use Laminas\View\Renderer\PhpRenderer;
use PHPUnit\Framework\TestCase;
use TestSuite\Bootstrap;
use TwbsHelper\View\HtmlStyleAttributeSet;

class HtmlStyleAttributeSetTest extends TestCase
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
        $htmlStyleAttributeSet = new HtmlStyleAttributeSet([
            'width' => '50%',
            'color' => 'red',
        ]);

        $this->assertSame(
            'color: red; width: 50%;',
            $htmlStyleAttributeSet->__toString()
        );
    }

    public function testMerge()
    {
        $htmlStyleAttributeSet = new HtmlStyleAttributeSet([
            'width' => '50%',
            'color' => 'red',
        ]);

        $htmlStyleAttributeSet->merge([
            'width' => '50%',
            'color' => 'green',
            'height' => '100%',
        ]);

        $this->assertSame(
            [
                'color' => 'green',
                'height' => '100%',
                'width' => '50%',
            ],
            $htmlStyleAttributeSet->getArrayCopy()
        );
    }
}
