<?php

namespace TestSuite\Documentation\Generator\UsagePage\Printer;

class CodePrinterTest extends \PHPUnit\Framework\TestCase
{
    use \Spatie\Snapshots\MatchesSnapshots;

    /**
     * @var \MockObject
     */
    protected $file;

    /**
     * @var \Documentation\Generator\Configuration
     */
    protected $configuration;

    /**
     * @var \Documentation\Generator\UsagePage\Printer\CodePrinter
     */
    protected $codePrinter;

    protected function setUp(): void
    {
        $this->file = $this->createMock(\Documentation\Generator\FileSystem\File::class);

        $this->configuration = new \Documentation\Generator\Configuration(
            '/tmp/test-dir',
            '/tmp/test-dir/tests',
            'x.x',
            2,
            $this->file
        );
    }

    public function testGetPageContentShouldReturnRenderedPage()
    {

        $this->codePrinter = new \Documentation\Generator\UsagePage\Printer\CodePrinter(
            $this->configuration,
            \Documentation\Test\Config::fromArray([
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
        $this->codePrinter = new \Documentation\Generator\UsagePage\Printer\CodePrinter(
            $this->configuration,
            \Documentation\Test\Config::fromArray([
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
