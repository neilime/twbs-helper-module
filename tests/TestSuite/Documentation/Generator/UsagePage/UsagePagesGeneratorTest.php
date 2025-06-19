<?php

namespace TestSuite\Documentation\Generator\UsagePage;

use Documentation\Generator\Configuration;
use Documentation\Generator\FileSystem\File;
use Documentation\Generator\UsagePagesGenerator;
use PHPUnit\Framework\TestCase;
use MockObject;

class UsagePagesGeneratorTest extends TestCase
{
    /**
     * @var MockObject
     */
    protected $file;

    /**
     * @var UsagePagesGenerator
     */
    protected $usagePagesGenerator;

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

        $testConfigs = [];

        $this->usagePagesGenerator = new \Documentation\Generator\UsagePage\UsagePagesGenerator(
            $configuration,
            $testConfigs
        );
    }

    public function testGenerateThrowsAnErrorWhenUsageDirPathDoesNotExist()
    {
        $this->expectExceptionMessage(
            "Usage dir path \"/tmp/test-dir/website/docs/usage\" does not exist"
        );
        $this->usagePagesGenerator->generate('test');
    }
}
