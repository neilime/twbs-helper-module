<?php

namespace TestSuite\Documentation\Generator\UsagePage;

class UsagePagesGeneratorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \MockObject
     */
    protected $file;

    /**
     * @var \Documentation\Generator\UsagePagesGenerator
     */
    protected $usagePagesGenerator;

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
