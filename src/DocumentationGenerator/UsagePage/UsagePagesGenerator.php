<?php

namespace DocumentationGenerator\UsagePage;

class UsagePagesGenerator
{
    private static $USAGE_DIR_PATH = __DIR__ . '/../../../website/docs/usage';

    /**
     * @var \DocumentationGenerator\Configuration
     */
    private $configuration;

    /**
     * @var \TestSuite\Documentation\DocumentationTestConfig[]
     */
    private $testConfigs;

    public function __construct(\DocumentationGenerator\Configuration $oConfiguration, $aTestConfigs)
    {
        $this->configuration = $oConfiguration;
        $this->testConfigs = $aTestConfigs;
    }

    public function generate()
    {
        $this->cleanUsagePages();

        foreach ($this->testConfigs as $oTestConfig) {
            try {
                $this->parseTestsConfig($oTestConfig);
            } catch (\Exception $oException) {
                throw new \LogicException(
                    'An error occured while parsing test config "' . $oTestConfig->title . '"',
                    $oException->getCode(),
                    $oException
                );
            }
        }
    }

    private function cleanUsagePages()
    {
        $this->rrmdir(self::$USAGE_DIR_PATH . DIRECTORY_SEPARATOR . 'components');
        $this->rrmdir(self::$USAGE_DIR_PATH . DIRECTORY_SEPARATOR . 'content');
    }

    private function rrmdir($path)
    {
        if (is_dir($path)) {
            array_map([$this, "rrmdir"], glob($path . DIRECTORY_SEPARATOR . '{,.[!.]}*', GLOB_BRACE));
            @rmdir($path);
        } else {
            @unlink($path);
        }
    }

    /**
     * Extract test cases values for a given tests configuration
     */
    private function parseTestsConfig(\TestSuite\Documentation\DocumentationTestConfig $oTestConfig)
    {
        $this->generateDocPageFromTest($oTestConfig);

        foreach ($oTestConfig->tests as $oNestedTestConfig) {
            $this->parseTestsConfig($oNestedTestConfig);
        }
    }

    /**
     * Write the test content for the given params into the given demo page file
     */
    private function generateDocPageFromTest(\TestSuite\Documentation\DocumentationTestConfig $oTestConfig)
    {
        $oUsagePageGenerator = new \DocumentationGenerator\UsagePage\UsagePageGenerator($this->configuration, $oTestConfig);
        $oUsagePageGenerator->generate();
    }
}
