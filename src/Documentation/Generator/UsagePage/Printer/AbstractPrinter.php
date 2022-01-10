<?php

namespace Documentation\Generator\UsagePage\Printer;

abstract class AbstractPrinter
{
    /**
     * @var \Documentation\Generator\Configuration
     */
    protected $configuration;

    /**
     * @var \Documentation\Test\Config
     */
    protected $testConfig;

    /**
     * @var string
     */
    protected $pagePath;

    /**
     * @var bool
     */
    protected $pageExists;

    /**
     * @return string
     */
    abstract public function getPageContent();

    public function __construct(
        \Documentation\Generator\Configuration $configuration,
        \Documentation\Test\Config $documentationTestConfig,
        string $pagePath,
        bool $pageExists
    ) {
        $this->configuration = $configuration;
        $this->testConfig = $documentationTestConfig;
        $this->pagePath = $pagePath;
        $this->pageExists = $pageExists;
    }

    protected function pageExists()
    {
        return $this->pageExists;
    }
}
