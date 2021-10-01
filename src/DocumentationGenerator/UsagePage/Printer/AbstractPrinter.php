<?php

namespace DocumentationGenerator\UsagePage\Printer;

abstract class AbstractPrinter
{
    /**
     * @var \DocumentationGenerator\Configuration
     */
    protected $configuration;

    /**
     * @var \TestSuite\Documentation\DocumentationTestConfig
     */
    protected $testConfig;

    /**
     * @var string
     */
    protected $pagePath;

    /**
     * @return string
     */
    abstract protected function getContentToPrint();

    public function __construct(
        \DocumentationGenerator\Configuration $oConfiguration,
        \TestSuite\Documentation\DocumentationTestConfig $oTestConfig,
        $sPagePath
    ) {
        $this->configuration = $oConfiguration;
        $this->testConfig = $oTestConfig;
        $this->pagePath = $sPagePath;
    }

    public function printContentToPage()
    {
        $sContent = $this->getContentToPrint();
        if ($sContent) {
            $this->configuration->getFile()->appendFile(
                $this->pagePath,
                $sContent . PHP_EOL,
            );
        }
    }

    protected function pageExists()
    {
        return $this->configuration->getFile()->fileExists($this->pagePath);
    }
}
