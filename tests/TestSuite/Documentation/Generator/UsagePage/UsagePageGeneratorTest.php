<?php

namespace TestSuite\Documentation\Generator\UsagePage;

use Documentation\Generator\Configuration;
use Documentation\Generator\FileSystem\File;
use Documentation\Generator\UsagePageGenerator;
use Documentation\Test\Config;
use PHPUnit\Framework\TestCase;
use MockObject;

class UsagePageGeneratorTest extends TestCase
{
    /**
     * @var MockObject
     */
    protected $file;

    /**
     * @var UsagePageGenerator
     */
    protected $usagePageGenerator;

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

        $this->usagePageGenerator = new \Documentation\Generator\UsagePage\UsagePageGenerator(
            $configuration,
            $config
        );
    }

    public function testGenerateThrowsAnErrorWhenUsageDirPathDoesNotExist()
    {
        $this->expectExceptionMessage(
            "Usage dir path \"/tmp/test-dir/website/docs/usage\" does not exist"
        );
        $this->usagePageGenerator->generate('test');
    }
}
