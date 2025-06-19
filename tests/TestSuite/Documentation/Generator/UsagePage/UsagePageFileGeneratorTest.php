<?php

namespace TestSuite\Documentation\Generator\UsagePage;

use Documentation\Generator\Configuration;
use Documentation\Generator\FileSystem\File;
use Documentation\Generator\UsagePageFileGenerator;
use Documentation\Test\Config;
use PHPUnit\Framework\TestCase;
use MockObject;

class UsagePageFileGeneratorTest extends TestCase
{
    /**
     * @var MockObject
     */
    protected $file;

    /**
     * @var UsagePageFileGenerator
     */
    protected $usagePageFileGenerator;

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
        $config = new Config();

        $this->usagePageFileGenerator = new \Documentation\Generator\UsagePage\UsagePageFileGenerator(
            $configuration,
            $config
        );
    }

    public function testGenerateShouldCreateUsagePage()
    {
        $this->file->expects($this->exactly(2))->method('dirExists')->withConsecutive(
            ['/tmp/test-dir/website/docs/usage'],
        )->willReturn(true);

        $this->usagePageFileGenerator->generate('test');
    }

    public function testGenerateThrowsAnErrorWhenUsageDirPathDoesNotExist()
    {
        $this->expectExceptionMessage(
            "Usage dir path \"/tmp/test-dir/website/docs/usage\" does not exist"
        );
        $this->usagePageFileGenerator->generate('test');
    }
}
