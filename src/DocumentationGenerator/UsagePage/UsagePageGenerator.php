<?php

namespace DocumentationGenerator\UsagePage;

class UsagePageGenerator
{
    /**
     * @var array
     */
    private $printers = [
        \DocumentationGenerator\UsagePage\Printer\HeadPrinter::class,
        \DocumentationGenerator\UsagePage\Printer\TitlePrinter::class,
        \DocumentationGenerator\UsagePage\Printer\UrlPrinter::class,
        \DocumentationGenerator\UsagePage\Printer\CodePrinter::class,
    ];

    /**
     * @var \DocumentationGenerator\Configuration
     */
    private $configuration;

    /**
     * @var \TestSuite\Documentation\DocumentationTestConfig
     */
    private $testConfig;
    public function __construct(
        \DocumentationGenerator\Configuration $oConfiguration,
        \TestSuite\Documentation\DocumentationTestConfig $oTestConfig
    ) {
        $this->configuration = $oConfiguration;
        $this->testConfig = $oTestConfig;
    }

    public function generate()
    {
        $sPagePath = $this->createPageFile();

        if (!$sPagePath) {
            return;
        }

        foreach ($this->printers as $sPrinterClass) {
            $oPrinter = new $sPrinterClass($this->configuration, $this->testConfig, $sPagePath);
            $oPrinter->printContentToPage();
        }
    }

    private function createPageFile()
    {
        $oUsagePageDirectoryGenerator = new \DocumentationGenerator\UsagePage\UsagePageFileGenerator(
            $this->configuration,
            $this->testConfig
        );
        return $oUsagePageDirectoryGenerator->generate();
    }
}
