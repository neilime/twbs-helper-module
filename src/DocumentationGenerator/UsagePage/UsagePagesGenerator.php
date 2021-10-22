<?php

namespace DocumentationGenerator\UsagePage;

class UsagePagesGenerator
{
    private static $USAGE_DIR_PATH = 'website/docs/usage';

    /**
     * @var \DocumentationGenerator\Configuration
     */
    private $configuration;

    /**
     * @var \TestSuite\Documentation\DocumentationTestConfig[]
     */
    private $testConfigs = [];

    public function __construct(\DocumentationGenerator\Configuration $configuration, $testConfigs)
    {
        $this->configuration = $configuration;
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
            if (is_dir($directoryPath)) {
                $this->rrmdir($directoryPath);
            }
        }
    }

    /**
     * Extract test cases values for a given tests configuration
     */
    private function parseTestsConfig(\TestSuite\Documentation\DocumentationTestConfig $documentationTestConfig)
    {
        $this->generateDocPageFromTest($documentationTestConfig);

        foreach ($documentationTestConfig->tests as $nestedTestConfig) {
            $this->parseTestsConfig($nestedTestConfig);
        }
    }

    private function getUsageDirPath()
    {
        $usageDirPath = $this->configuration->getRootDirPath() . DIRECTORY_SEPARATOR . self::$USAGE_DIR_PATH;

        if (!is_dir($usageDirPath)) {
            throw new \LogicException('Usage dir path "' . $usageDirPath . '" does not exist');
        }

        return realpath($usageDirPath);
    }

    private function rrmdir($path)
    {
        if (is_dir($path)) {
            array_map(function ($path) {
                return $this->rrmdir($path);
            }, glob($path . DIRECTORY_SEPARATOR . '{,.[!.]}*', GLOB_BRACE));
            @rmdir($path);
        } else {
            @unlink($path);
        }
    }

    /**
     * Write the test content for the given params into the given demo page file
     */
    private function generateDocPageFromTest(\TestSuite\Documentation\DocumentationTestConfig $documentationTestConfig)
    {
        $usagePageGenerator = new \DocumentationGenerator\UsagePage\UsagePageGenerator(
            $this->configuration,
            $documentationTestConfig
        );
        $usagePageGenerator->generate();
    }
}
