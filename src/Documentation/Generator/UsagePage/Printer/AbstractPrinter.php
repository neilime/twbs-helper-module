<?php

namespace Documentation\Generator\UsagePage\Printer;

use Documentation\Generator\Configuration;
use Documentation\Test\Config;

abstract class AbstractPrinter
{
    /**
     * @var Configuration
     */
    protected $configuration;

    /**
     * @var Config
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
        Configuration $configuration,
        Config $documentationTestConfig,
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
