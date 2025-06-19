<?php

namespace TestSuite\Documentation\Generator\UsagePage\Printer;

use Documentation\Generator\Configuration;
use Documentation\Generator\FileSystem\File;
use Documentation\Generator\UsagePage\Printer\UrlPrinter;
use Documentation\Test\Config;
use PHPUnit\Framework\TestCase;

class UrlPrinterTest extends TestCase
{
    /**
     * @var Configuration
     */
    protected $configuration;

    /**
     * @var UrlPrinter
     */
    protected $urlPrinter;

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

    public function testPrintContentToPageWithUrl()
    {
        $this->urlPrinter = new UrlPrinter(
            $this->configuration,
            Config::fromArray([
                'title' => 'Component',
                'url' => '%bootstrap-url%/test',
            ]),
            'test-page.mdx',
            true
        );

        $pageContent = $this->urlPrinter->getPageContent();
        $this->assertEquals(
            "[Twitter bootstrap Documentation](https://getbootstrap.com/docs/x.x/test)" . PHP_EOL,
            $pageContent
        );
    }

    public function testPrintContentToPageWithoutUrl()
    {
        $this->urlPrinter = new UrlPrinter(
            $this->configuration,
            Config::fromArray([
                'title' => 'Component',
            ]),
            'test-page.mdx',
            true
        );

        $pageContent = $this->urlPrinter->getPageContent();
        $this->assertEquals(
            "",
            $pageContent
        );
    }
}
