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
        $this->configuration->getFile()->appendFile(
            $this->pagePath,
            $this->getContentToPrint() . PHP_EOL,
        );
    }
}
