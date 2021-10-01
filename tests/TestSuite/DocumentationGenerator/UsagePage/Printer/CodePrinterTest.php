<?php

namespace TestSuite\DocumentationGenerator\UsagePage\Printer;

class CodePrinterTest extends \PHPUnit\Framework\TestCase
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
     * @var \DocumentationGenerator\UsagePage\Printer\CodePrinter
     */
    protected $codePrinter;

    public function setUp(): void
    {
        $this->file = $this->createMock(\DocumentationGenerator\FileSystem\File::class);
        $this->configuration = new \DocumentationGenerator\Configuration(
            'x.x',
            2,
            $this->file
        );
    }

    public function testPrintContentToPageWithoutRendering()
    {

        $this->codePrinter = new \DocumentationGenerator\UsagePage\Printer\CodePrinter(
            $this->configuration,
            \TestSuite\Documentation\DocumentationTestConfig::fromArray([
                'title' => 'Test',
                'url' => '%bootstrap-url%/test',
            ]),
            'test-page.mdx'
        );

        $this->file->expects($this->once())->method('appendFile')->with(
            "test-page.mdx",
            PHP_EOL
        );

        $this->codePrinter->printContentToPage();
    }
}
