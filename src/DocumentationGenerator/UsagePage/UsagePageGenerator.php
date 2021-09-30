<?php

namespace DocumentationGenerator\UsagePage;

class UsagePageGenerator
{
    private $printers = [];

    /**
     * @var \TestSuite\Documentation\DocumentationTestConfig
     */
    private $testConfig;

    public function __construct(\TestSuite\Documentation\DocumentationTestConfig $oTestConfig)
    {
        $this->testConfig = $oTestConfig;

        $this->printers = [
            \DocumentationGenerator\UsagePage\Printer\HeadPrinter::class,
            \DocumentationGenerator\UsagePage\Printer\TitlePrinter::class,
            \DocumentationGenerator\UsagePage\Printer\UrlPrinter::class,
            \DocumentationGenerator\UsagePage\Printer\CodePrinter::class,
        ];
    }

    public function generate()
    {
        $sPagePath = $this->createPageFile();

        if (!$sPagePath || !$this->testConfig->rendering) {
            return;
        }

        foreach ($this->printers as $sPrinterClass) {
            $oPrinter = new $sPrinterClass($this->testConfig, $sPagePath);
            $oPrinter->printContentToPage();
        }
    }

    private function createPageFile()
    {
        $oUsagePageDirectoryGenerator = new \DocumentationGenerator\UsagePage\UsagePageFileGenerator(
            $this->testConfig
        );
        return $oUsagePageDirectoryGenerator->generate();
    }
}
