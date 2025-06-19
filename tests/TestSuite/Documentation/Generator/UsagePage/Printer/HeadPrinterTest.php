<?php

namespace TestSuite\Documentation\Generator\UsagePage\Printer;

use Documentation\Generator\Configuration;
use Documentation\Generator\FileSystem\File;
use Documentation\Generator\UsagePage\Printer\HeadPrinter;
use Documentation\Test\Config;
use PHPUnit\Framework\TestCase;

class HeadPrinterTest extends TestCase
{
    /**
     * @var Configuration
     */
    protected $configuration;

    /**
     * @var HeadPrinter
     */
    protected $headPrinter;

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

    public function testPrintContentOnExistingPage()
    {
        $this->headPrinter = new HeadPrinter(
            $this->configuration,
            Config::fromArray([
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
        $this->headPrinter = new HeadPrinter(
            $this->configuration,
            Config::fromArray([
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
