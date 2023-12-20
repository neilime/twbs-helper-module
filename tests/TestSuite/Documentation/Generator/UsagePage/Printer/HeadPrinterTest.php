<?php

namespace TestSuite\Documentation\Generator\UsagePage\Printer;

class HeadPrinterTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Documentation\Generator\Configuration
     */
    protected $configuration;

    /**
     * @var \Documentation\Generator\UsagePage\Printer\HeadPrinter
     */
    protected $headPrinter;

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

    public function testPrintContentOnExistingPage()
    {
        $this->headPrinter = new \Documentation\Generator\UsagePage\Printer\HeadPrinter(
            $this->configuration,
            \Documentation\Test\Config::fromArray([
                'title' => 'Component',
                'url' => '%bootstrap-url%/test',
            ]),
            'test-page.mdx',
            true,
        );

        $pageContent = $this->headPrinter->getPageContent();
        $this->assertEquals('', $pageContent);
    }

    public function testGetPageContentOnUnexistingPage()
    {
        $this->headPrinter = new \Documentation\Generator\UsagePage\Printer\HeadPrinter(
            $this->configuration,
            \Documentation\Test\Config::fromArray([
                'title' => 'Component / Alert / Exemples',
                'url' => '%bootstrap-url%/test',
            ]),
            'test-page.mdx',
            false
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
            'import HtmlCode from "../tmp/test-dir/website/src/components/HtmlCode.tsx";' . PHP_EOL;

        $pageContent = $this->headPrinter->getPageContent();
        $this->assertEquals($expectedContent, $pageContent);
    }
}
