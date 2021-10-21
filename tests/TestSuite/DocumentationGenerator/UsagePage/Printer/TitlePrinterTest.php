<?php

namespace TestSuite\DocumentationGenerator\UsagePage\Printer;

class TitlePrinterTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \DocumentationGenerator\Configuration
     */
    protected $configuration;

    /**
     * @var \MockObject
     */
    protected $file;

    /**
     * @var \DocumentationGenerator\UsagePage\Printer\TitlePrinter
     */
    protected $titlePrinter;

    protected function setUp(): void
    {
        $this->file = $this->createMock(\DocumentationGenerator\FileSystem\File::class);
        $this->configuration = new \DocumentationGenerator\Configuration(
            '/tmp/test-dir',
            'x.x',
            2,
            $this->file
        );
    }

    public function testPrintContentToPageForFirstLevelTitle()
    {
        $this->file->method("fileExists")->willReturn(true);

        $this->titlePrinter = new \DocumentationGenerator\UsagePage\Printer\TitlePrinter(
            $this->configuration,
            \TestSuite\Documentation\DocumentationTestConfig::fromArray([
                'title' => 'Component',
                'url' => '%bootstrap-url%/test',
            ]),
            'test-page.mdx'
        );

        $this->file->expects($this->once())->method('appendFile')->with(
            "test-page.mdx",
            "# Component" . PHP_EOL . PHP_EOL
        );

        $this->titlePrinter->printContentToPage();
    }

    public function testPrintContentToPageForThirdLevelTitle()
    {
        $this->file->method("fileExists")->willReturn(true);

        $this->titlePrinter = new \DocumentationGenerator\UsagePage\Printer\TitlePrinter(
            $this->configuration,
            \TestSuite\Documentation\DocumentationTestConfig::fromArray([
                'title' => 'Component / Alert / Exemples',
                'url' => '%bootstrap-url%/test',
            ]),
            'test-page.mdx'
        );

        $this->file->expects($this->once())->method('appendFile')->with(
            "test-page.mdx",
            "## Exemples" . PHP_EOL . PHP_EOL
        );

        $this->titlePrinter->printContentToPage();
    }
}
