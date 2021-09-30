<?php

namespace DocumentationGenerator\UsagePage\Printer;

abstract class AbstractPrinter
{

    protected $testConfig;
    protected $pagePath;

    abstract protected function getContentToPrint();

    public function __construct(\TestSuite\Documentation\DocumentationTestConfig $oTestConfig, $sPagePath)
    {
        $this->testConfig = $oTestConfig;
        $this->pagePath = $sPagePath;
    }

    public function printContentToPage()
    {
        file_put_contents(
            $this->pagePath,
            $this->getContentToPrint() . PHP_EOL,
            FILE_APPEND
        );
    }

    protected function pageExists()
    {
        return file_exists($this->pagePath);
    }
}
