<?php

namespace Documentation\Generator\UsagePage;

class UsagePagesGenerator
{
    private static $USAGE_DIR_PATH = 'website/docs/usage';

    /**
     * @var \Documentation\Generator\Configuration
     */
    private $configuration;

    /**
     * @var \Documentation\Generator\FileSystem\File
     */
    private $file;

    /**
     * @var \Documentation\Test\Config[]
     */
    private $testConfigs = [];

    public function __construct(
        \Documentation\Generator\Configuration $configuration,
        \Documentation\Generator\FileSystem\File $file,
        array $testConfigs
    ) {
        $this->configuration = $configuration;
        $this->file = $file;
        $this->testConfigs = $testConfigs;
    }

    public function generate()
    {
        $this->cleanUsagePages();

        foreach ($this->testConfigs as $testConfig) {
            try {
                $this->parseTestsConfig($testConfig);
            } catch (\Exception $exception) {
                throw new \LogicException(
                    'An error occured while parsing test config "' . $testConfig->title . '"',
                    $exception->getCode(),
                    $exception
                );
            }
        }
    }

    private function cleanUsagePages()
    {
        $usageDirPath = $this->getUsageDirPath();
        $usageDirectories = array_diff(scandir($usageDirPath), ['..', '.']);

        foreach ($usageDirectories as $usageDirectory) {
            $directoryPath = $usageDirPath . DIRECTORY_SEPARATOR . $usageDirectory;
            if ($this->file->dirExists($directoryPath)) {
                $this->file->removeDir($directoryPath);
            }
        }
    }

    /**
     * Extract test cases values for a given tests configuration
     */
    private function parseTestsConfig(\Documentation\Test\Config $documentationTestConfig)
    {
        $this->generateDocPageFromTest($documentationTestConfig);

        foreach ($documentationTestConfig->tests as $nestedTestConfig) {
            $this->parseTestsConfig($nestedTestConfig);
        }
    }

    private function getUsageDirPath()
    {
        $usageDirPath = $this->configuration->getRootDirPath() . DIRECTORY_SEPARATOR . self::$USAGE_DIR_PATH;

        if (!$this->file->dirExists($usageDirPath)) {
            throw new \LogicException('Usage dir path "' . $usageDirPath . '" does not exist');
        }

        return realpath($usageDirPath);
    }

    /**
     * Write the test content for the given params into the given demo page file
     */
    private function generateDocPageFromTest(\Documentation\Test\Config $documentationTestConfig)
    {
        $usagePageGenerator = new \Documentation\Generator\UsagePage\UsagePageGenerator(
            $this->configuration,
            $this->file,
            $documentationTestConfig
        );
        $usagePageGenerator->generate();
    }
}
