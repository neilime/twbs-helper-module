<?php

namespace Documentation\Generator\UsagePage;

use Documentation\Generator\Configuration;
use Documentation\Test\Config;
use Exception;
use LogicException;

class UsagePagesGenerator
{
    private static $USAGE_DIR_PATH = 'website/docs/usage';

    public function __construct(
        private readonly Configuration $configuration,
        /**
         * @var Config[]
         */
        private readonly array $testConfigs
    ) {
    }

    public function generate()
    {
        $this->cleanUsagePages();

        foreach ($this->testConfigs as $testConfig) {
            try {
                $this->parseTestsConfig($testConfig);
            } catch (Exception $exception) {
                throw new LogicException(
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

        $file = $this->configuration->getFile();

        foreach ($usageDirectories as $usageDirectory) {
            $directoryPath = $usageDirPath . DIRECTORY_SEPARATOR . $usageDirectory;
            if ($file->dirExists($directoryPath)) {
                $file->removeDir($directoryPath);
            }
        }
    }

    /**
     * Extract test cases values for a given tests configuration
     */
    private function parseTestsConfig(Config $documentationTestConfig)
    {
        $this->generateDocPageFromTest($documentationTestConfig);

        foreach ($documentationTestConfig->tests as $nestedTestConfig) {
            $this->parseTestsConfig($nestedTestConfig);
        }
    }

    private function getUsageDirPath()
    {
        $usageDirPath = $this->configuration->getRootDirPath() . DIRECTORY_SEPARATOR . self::$USAGE_DIR_PATH;

        if (!$this->configuration->getFile()->dirExists($usageDirPath)) {
            throw new LogicException('Usage dir path "' . $usageDirPath . '" does not exist');
        }

        return realpath($usageDirPath);
    }

    /**
     * Write the test content for the given params into the given demo page file
     */
    private function generateDocPageFromTest(Config $documentationTestConfig)
    {
        $usagePageGenerator = new UsagePageGenerator(
            $this->configuration,
            $documentationTestConfig
        );
        $usagePageGenerator->generate();
    }
}
