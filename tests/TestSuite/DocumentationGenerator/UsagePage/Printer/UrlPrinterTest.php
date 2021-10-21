<?php

namespace TestSuite\DocumentationGenerator\UsagePage\Printer;

class UrlPrinterTest extends \PHPUnit\Framework\TestCase
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
     * @var \DocumentationGenerator\UsagePage\Printer\UrlPrinter
     */
    protected $urlPrinter;

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

    public function testPrintContentToPageWithUrl()
    {
        $this->file->method("fileExists")->willReturn(true);

        $this->urlPrinter = new \DocumentationGenerator\UsagePage\Printer\UrlPrinter(
            $this->configuration,
            \TestSuite\Documentation\DocumentationTestConfig::fromArray([
                'title' => 'Component',
                'url' => '%bootstrap-url%/test',
            ]),
            'test-page.mdx'
        );

        $this->file->expects($this->once())->method('appendFile')->with(
            "test-page.mdx",
            "[Twitter bootstrap Documentation](https://getbootstrap.com/docs/x.x/test)" . PHP_EOL . PHP_EOL
        );

        $this->urlPrinter->printContentToPage();
    }

    public function testPrintContentToPageWithoutUrl()
    {
        $this->file->method("fileExists")->willReturn(true);

        $this->urlPrinter = new \DocumentationGenerator\UsagePage\Printer\UrlPrinter(
            $this->configuration,
            \TestSuite\Documentation\DocumentationTestConfig::fromArray([
                'title' => 'Component',
            ]),
            'test-page.mdx'
        );

        $this->file->expects($this->never())->method('appendFile');

        $this->urlPrinter->printContentToPage();
    }
}
