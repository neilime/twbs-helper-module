<?php

namespace TestSuite\DocumentationGenerator\UsagePage;

class UsagePageGeneratorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \MockObject
     */
    protected $file;

    /**
     * @var \DocumentationGenerator\UsagePageGenerator
     */
    protected $usagePageGenerator;

    protected function setUp(): void
    {
        $this->file = $this->createMock(\DocumentationGenerator\FileSystem\File::class);
        $configuration = new \DocumentationGenerator\Configuration(
            '/tmp/test-dir',
            '/tmp/test-dir/tests',
            2,
            $this->file
        );
        $config = new \TestSuite\Documentation\DocumentationTestConfig();

        $this->usagePageGenerator = new \DocumentationGenerator\UsagePage\UsagePageGenerator(
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
