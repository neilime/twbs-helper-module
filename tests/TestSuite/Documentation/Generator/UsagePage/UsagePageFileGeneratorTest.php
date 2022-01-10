<?php

namespace TestSuite\Documentation\Generator\UsagePage;

class UsagePageFileGeneratorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \MockObject
     */
    protected $file;

    /**
     * @var \Documentation\Generator\UsagePageFileGenerator
     */
    protected $usagePageFileGenerator;

    protected function setUp(): void
    {
        $this->file = $this->createMock(\Documentation\Generator\FileSystem\File::class);
        $configuration = new \Documentation\Generator\Configuration(
            '/tmp/test-dir',
            '/tmp/test-dir/tests',
            'x.x',
            2
        );
        $config = new \Documentation\Test\Config();

        $this->usagePageFileGenerator = new \Documentation\Generator\UsagePage\UsagePageFileGenerator(
            $configuration,
            $this->file,
            $config
        );
    }

    public function testGenerateThrowsAnErrorWhenUsageDirPathDoesNotExist()
    {
        $this->expectExceptionMessage(
            "Usage dir path \"/tmp/test-dir/website/docs/usage\" does not exist"
        );
        $this->usagePageFileGenerator->generate('test');
    }
}
