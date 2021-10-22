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
    private $documentationTestConfig;

    public function __construct(
        \DocumentationGenerator\Configuration $configuration,
        \TestSuite\Documentation\DocumentationTestConfig $documentationTestConfig
    ) {
        $this->configuration = $configuration;
        $this->documentationTestConfig = $documentationTestConfig;
    }

    public function generate()
    {
        $pagePath = $this->createPageFile();

        if (!$pagePath) {
            return;
        }

        foreach ($this->printers as $printerClass) {
            $printer = new $printerClass($this->configuration, $this->documentationTestConfig, $pagePath);
            $printer->printContentToPage();
        }
    }

    private function createPageFile()
    {
        $usagePageFileGenerator = new \DocumentationGenerator\UsagePage\UsagePageFileGenerator(
            $this->configuration,
            $this->documentationTestConfig
        );
        return $usagePageFileGenerator->generate();
    }
}
