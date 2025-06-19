<?php

namespace TestSuite\Documentation\Generator\UsagePage\Printer;

use Documentation\Generator\Configuration;
use Documentation\Generator\FileSystem\File;
use Documentation\Generator\UsagePage\Printer\TitlePrinter;
use Documentation\Test\Config;
use PHPUnit\Framework\TestCase;

class TitlePrinterTest extends TestCase
{
    /**
     * @var Configuration
     */
    protected $configuration;

    /**
     * @var TitlePrinter
     */
    protected $titlePrinter;

    protected function setUp(): void
    {
        $this->configuration = new Configuration(
            '/tmp/test-dir',
            '/tmp/test-dir/tests',
            'x.x',
            2,
            $this->createMock(File::class)
        );
    }

    public function testPrintContentToPageForFirstLevelTitle()
    {
        $this->titlePrinter = new TitlePrinter(
            $this->configuration,
            Config::fromArray([
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
        $this->titlePrinter = new TitlePrinter(
            $this->configuration,
            Config::fromArray([
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
