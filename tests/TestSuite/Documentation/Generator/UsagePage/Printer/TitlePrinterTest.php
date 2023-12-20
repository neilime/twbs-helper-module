<?php

namespace TestSuite\Documentation\Generator\UsagePage\Printer;

class TitlePrinterTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Documentation\Generator\Configuration
     */
    protected $configuration;

    /**
     * @var \Documentation\Generator\UsagePage\Printer\TitlePrinter
     */
    protected $titlePrinter;

    protected function setUp(): void
    {
        $this->configuration = new \Documentation\Generator\Configuration(
            '/tmp/test-dir',
            '/tmp/test-dir/tests',
            'x.x',
            2,
            $this->createMock(\Documentation\Generator\FileSystem\File::class)
        );
    }

    public function testPrintContentToPageForFirstLevelTitle()
    {
        $this->titlePrinter = new \Documentation\Generator\UsagePage\Printer\TitlePrinter(
            $this->configuration,
            \Documentation\Test\Config::fromArray([
                'title' => 'Component',
                'url' => '%bootstrap-url%/test',
            ]),
            'test-page.mdx',
            true,
        );

        $pageContent = $this->titlePrinter->getPageContent();
        $this->assertEquals("# Component" . PHP_EOL, $pageContent);
    }

    public function testPrintContentToPageForThirdLevelTitle()
    {
        $this->titlePrinter = new \Documentation\Generator\UsagePage\Printer\TitlePrinter(
            $this->configuration,
            \Documentation\Test\Config::fromArray([
                'title' => 'Component / Alert / Examples',
                'url' => '%bootstrap-url%/test',
            ]),
            'test-page.mdx',
            true
        );


        $pageContent = $this->titlePrinter->getPageContent();
        $this->assertEquals("## Examples" . PHP_EOL, $pageContent);
    }
}
