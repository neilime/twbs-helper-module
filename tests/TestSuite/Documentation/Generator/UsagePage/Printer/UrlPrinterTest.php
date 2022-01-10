<?php

namespace TestSuite\Documentation\Generator\UsagePage\Printer;

class UrlPrinterTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Documentation\Generator\Configuration
     */
    protected $configuration;

    /**
     * @var \Documentation\Generator\UsagePage\Printer\UrlPrinter
     */
    protected $urlPrinter;

    protected function setUp(): void
    {
        $this->configuration = new \Documentation\Generator\Configuration(
            '/tmp/test-dir',
            '/tmp/test-dir/tests',
            'x.x',
            2,
        );
    }

    public function testPrintContentToPageWithUrl()
    {
        $this->urlPrinter = new \Documentation\Generator\UsagePage\Printer\UrlPrinter(
            $this->configuration,
            \Documentation\Test\Config::fromArray([
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
        $this->urlPrinter = new \Documentation\Generator\UsagePage\Printer\UrlPrinter(
            $this->configuration,
            \Documentation\Test\Config::fromArray([
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
