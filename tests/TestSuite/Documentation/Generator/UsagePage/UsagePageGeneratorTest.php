<?php

namespace TestSuite\Documentation\Generator\UsagePage;

class UsagePageGeneratorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \MockObject
     */
    protected $file;

    /**
     * @var \Documentation\Generator\UsagePageGenerator
     */
    protected $usagePageGenerator;

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
        $config = new \Documentation\Test\Config();

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
