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
        \DocumentationGenerator\Configuration $configuration,
        \TestSuite\Documentation\DocumentationTestConfig $documentationTestConfig,
        $pagePath
    ) {
        $this->configuration = $configuration;
        $this->testConfig = $documentationTestConfig;
        $this->pagePath = $pagePath;
    }

    public function printContentToPage()
    {
        $contentToPrint = $this->getContentToPrint();
        if ($contentToPrint) {
            $this->configuration->getFile()->appendFile(
                $this->pagePath,
                $contentToPrint . PHP_EOL,
            );
        }
    }

    protected function pageExists()
    {
        return $this->configuration->getFile()->fileExists($this->pagePath);
    }
}
