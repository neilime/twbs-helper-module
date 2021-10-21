<?php

namespace TestSuite\DocumentationGenerator\UsagePage\Printer;

class HeadPrinterTest extends \PHPUnit\Framework\TestCase
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
     * @var \DocumentationGenerator\UsagePage\Printer\HeadPrinter
     */
    protected $headPrinter;

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

    public function testPrintContentOnExistingPage()
    {
        $this->file->method("fileExists")->willReturn(true);

        $this->headPrinter = new \DocumentationGenerator\UsagePage\Printer\HeadPrinter(
            $this->configuration,
            \TestSuite\Documentation\DocumentationTestConfig::fromArray([
                'title' => 'Component',
                'url' => '%bootstrap-url%/test',
            ]),
            'test-page.mdx'
        );

        $this->file->expects($this->never())->method('appendFile');

        $this->headPrinter->printContentToPage();
    }

    public function testPrintContentOnUnexistingPage()
    {
        $this->file->method("fileExists")->willReturn(false);

        $this->headPrinter = new \DocumentationGenerator\UsagePage\Printer\HeadPrinter(
            $this->configuration,
            \TestSuite\Documentation\DocumentationTestConfig::fromArray([
                'title' => 'Component / Alert / Exemples',
                'url' => '%bootstrap-url%/test',
            ]),
            'test-page.mdx'
        );

        $expectedContent =
            '---' . PHP_EOL .
            'sidebar_position: 1' . PHP_EOL .
            'label: Exemples' . PHP_EOL .
            '---' . PHP_EOL .
            '' . PHP_EOL .
            'import Tabs from "@theme/Tabs";' . PHP_EOL .
            'import TabItem from "@theme/TabItem";' . PHP_EOL .
            'import CodeBlock from "@theme/CodeBlock";' . PHP_EOL .
            'import HtmlCode from "src/components/HtmlCode.tsx";' . PHP_EOL . PHP_EOL;
        $this->file->expects($this->once())->method('appendFile')->with('test-page.mdx', $expectedContent);

        $this->headPrinter->printContentToPage();
    }
}
