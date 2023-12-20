<?php

namespace TestSuite\Documentation\Generator;

class HomePageGeneratorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \MockObject
     */
    protected $file;

    /**
     * @var \Documentation\Generator\HomePageGenerator
     */
    protected $homePageGenerator;

    protected function setUp(): void
    {
        $this->file = $this->createMock(\Documentation\Generator\FileSystem\File::class);
        $configuration = new \Documentation\Generator\Configuration(
            '/tmp/test-dir',
            '/tmp/test-dir/tests',
            'x.x',
            2,
            $this->file
        );
        $this->homePageGenerator = new \Documentation\Generator\HomePageGenerator(
            $configuration,
        );
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
