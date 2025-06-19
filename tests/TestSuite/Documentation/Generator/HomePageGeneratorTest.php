<?php

namespace TestSuite\Documentation\Generator;

use Documentation\Generator\Configuration;
use Documentation\Generator\FileSystem\File;
use Documentation\Generator\HomePageGenerator;
use PHPUnit\Framework\TestCase;
use MockObject;

class HomePageGeneratorTest extends TestCase
{
    /**
     * @var MockObject
     */
    protected $file;

    /**
     * @var HomePageGenerator
     */
    protected $homePageGenerator;

    protected function setUp(): void
    {
        $this->file = $this->createMock(File::class);
        $configuration = new Configuration(
            '/tmp/test-dir',
            '/tmp/test-dir/tests',
            'x.x',
            2,
            $this->file
        );
        $this->homePageGenerator = new HomePageGenerator(
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
