<?php

namespace TestSuite\TwbsHelper\View;

class HtmlStyleAttributeSetTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \\Laminas\View\Renderer\PhpRenderer
     */
    protected $phpRenderer;

    protected function setUp(): void
    {
        $viewHelperPluginManager = \TestSuite\Bootstrap::getServiceManager()->get('ViewHelperManager');
        $this->phpRenderer = new \Laminas\View\Renderer\PhpRenderer();
        $this->phpRenderer->setHelperPluginManager($viewHelperPluginManager);
    }

    public function testToString()
    {
        $htmlStyleAttributeSet = new \TwbsHelper\View\HtmlStyleAttributeSet([
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
        $htmlStyleAttributeSet = new \TwbsHelper\View\HtmlStyleAttributeSet([
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
