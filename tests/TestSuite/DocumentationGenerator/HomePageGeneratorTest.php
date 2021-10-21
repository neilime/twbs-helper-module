<?php

namespace TestSuite\DocumentationGenerator;

class HomePageGeneratorTest extends \PHPUnit\Framework\TestCase
{
    use \Spatie\Snapshots\MatchesSnapshots;

    /**
     * @var \MockObject
     */
    protected $file;

    /**
     * @var \DocumentationGenerator\HomePageGenerator
     */
    protected $homePageGenerator;

    protected function setUp(): void
    {
        $this->file = $this->createMock(\DocumentationGenerator\FileSystem\File::class);
        $configuration = new \DocumentationGenerator\Configuration(
            '/tmp/test-dir',
            'x.x',
            2,
            $this->file
        );
        $this->homePageGenerator = new \DocumentationGenerator\HomePageGenerator($configuration);
    }

    public function testGenerate()
    {

        $content = 'test content';
        $this->file->method("readFile")->willReturn($content);

        $this->file->expects($this->once())->method('writeFile')->with(
            'website/src/pages/index.mdx',
            '---' . PHP_EOL . 'title: Home' . PHP_EOL . '---' . PHP_EOL . PHP_EOL . $content
        );
        $this->homePageGenerator->generate();
    }
}
