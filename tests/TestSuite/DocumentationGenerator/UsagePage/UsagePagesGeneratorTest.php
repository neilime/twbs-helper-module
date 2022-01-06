<?php

namespace TestSuite\DocumentationGenerator\UsagePage;

class UsagePagesGeneratorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \MockObject
     */
    protected $file;

    /**
     * @var \DocumentationGenerator\UsagePagesGenerator
     */
    protected $usagePagesGenerator;

    protected function setUp(): void
    {
        $this->file = $this->createMock(\DocumentationGenerator\FileSystem\File::class);
        $configuration = new \DocumentationGenerator\Configuration(
            '/tmp/test-dir',
            '/tmp/test-dir/tests',
            2,
            $this->file
        );

        $testConfigs = [];

        $this->usagePagesGenerator = new \DocumentationGenerator\UsagePage\UsagePagesGenerator(
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
