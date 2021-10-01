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

    public function setUp(): void
    {
        $this->file = $this->createMock(\DocumentationGenerator\FileSystem\File::class);
        $oConfiguration = new \DocumentationGenerator\Configuration(
            '/tmp/test-dir',
            'x.x',
            2,
            $this->file
        );
        $this->homePageGenerator = new \DocumentationGenerator\HomePageGenerator($oConfiguration);
    }

    public function testGenerate()
    {

        $sContent = 'test content';
        $this->file->method("readFile")->willReturn($sContent);

        $this->file->expects($this->once())->method('writeFile')->with(
            'website/src/pages/index.mdx',
            '---' . PHP_EOL . 'title: Home' . PHP_EOL . '---' . PHP_EOL . PHP_EOL . $sContent
        );
        $this->homePageGenerator->generate();
    }
}
