<?php

namespace TestSuite\Documentation\Generator\UsagePage\Printer;

use Documentation\Generator\Configuration;
use Documentation\Generator\FileSystem\File;
use Documentation\Generator\UsagePage\Printer\CodePrinter;
use Documentation\Test\Config;
use PHPUnit\Framework\TestCase;
use Spatie\Snapshots\MatchesSnapshots;
use MockObject;

class CodePrinterTest extends TestCase
{
    use MatchesSnapshots;

    /**
     * @var MockObject
     */
    protected $file;

    /**
     * @var Configuration
     */
    protected $configuration;

    /**
     * @var CodePrinter
     */
    protected $codePrinter;

    protected function setUp(): void
    {
        $this->file = $this->createMock(File::class);

        $this->configuration = new Configuration(
            '/tmp/test-dir',
            '/tmp/test-dir/tests',
            'x.x',
            2,
            $this->file
        );
    }

    public function testGetPageContentShouldReturnRenderedPage()
    {

        $this->codePrinter = new CodePrinter(
            $this->configuration,
            Config::fromArray([
                'title' => 'Test',
                'url' => '%bootstrap-url%/test',
                'rendering' => function () {
                    echo 'test';
                },
            ]),
            'test-page.mdx',
            false
        );

        $this->file->expects($this->once())->method('readFile')->with(
            '/tmp/test-dir/tests/__snapshots__/Test__1.html'
        )->willReturn('test');

        $pageContent = $this->codePrinter->getPageContent();

        $this->assertNotEmpty($pageContent);
        $this->assertMatchesSnapshot($pageContent);
    }

    public function testGetPageContentWithoutRendering()
    {
        $this->codePrinter = new CodePrinter(
            $this->configuration,
            Config::fromArray([
                'title' => 'Test',
                'url' => '%bootstrap-url%/test',
            ]),
            'test-page.mdx',
            true
        );

        $pageContent = $this->codePrinter->getPageContent();
        $this->assertEquals('', $pageContent);
    }
}
