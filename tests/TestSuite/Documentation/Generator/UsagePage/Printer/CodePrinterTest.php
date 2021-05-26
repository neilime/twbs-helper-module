<?php

namespace TestSuite\Documentation\Generator\UsagePage\Printer;

class CodePrinterTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Documentation\Generator\Configuration
     */
    protected $configuration;

    /**
     * @var \Documentation\Generator\UsagePage\Printer\CodePrinter
     */
    protected $codePrinter;

    protected function setUp(): void
    {
        $this->configuration = new \Documentation\Generator\Configuration(
            '/tmp/test-dir',
            '/tmp/test-dir/tests',
            'x.x',
            2
        );
    }

    public function testGetPageContentWithoutRendering()
    {
        $this->codePrinter = new \Documentation\Generator\UsagePage\Printer\CodePrinter(
            $this->configuration,
            \Documentation\Test\Config::fromArray([
                'title' => 'Test',
                'url' => '%bootstrap-url%/test',
            ]),
            'test-page.mdx',
            true
        );

        $pageContent = $this->codePrinter->getPageContent();
        $this->assertEquals('', $pageContent);
    }
}
