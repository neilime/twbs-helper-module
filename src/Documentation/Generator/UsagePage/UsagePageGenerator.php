<?php

namespace Documentation\Generator\UsagePage;

use Documentation\Generator\Configuration;
use Documentation\Generator\UsagePage\Printer\CodePrinter;
use Documentation\Generator\UsagePage\Printer\HeadPrinter;
use Documentation\Generator\UsagePage\Printer\TitlePrinter;
use Documentation\Generator\UsagePage\Printer\UrlPrinter;
use Documentation\Test\Config;

class UsagePageGenerator
{
    /**
     * @var array
     */
    private $printers = [
        HeadPrinter::class,
        TitlePrinter::class,
        UrlPrinter::class,
        CodePrinter::class,
    ];

    /**
     * @var string
     */
    private $usagePageContent = '';

    public function __construct(private readonly Configuration $configuration, private readonly Config $documentationTestConfig)
    {
    }

    public function generate()
    {
        $usagePageFileGenerator = new UsagePageFileGenerator(
            $this->configuration,
            $this->documentationTestConfig
        );

        $pagePath = $usagePageFileGenerator->getPagePathInfo()->pagePath;

        if ($pagePath) {

            $file = $this->configuration->getFile();

            foreach ($this->printers as $printerClass) {
                $pageExists = $this->usagePageContent || $file->fileExists($pagePath);

                $printer = new $printerClass(
                    $this->configuration,
                    $this->documentationTestConfig,
                    $pagePath,
                    $pageExists
                );

                $pageContent = $printer->getPageContent();

                if ($pageContent) {
                    $this->usagePageContent .=  $pageContent . PHP_EOL;
                }
            }
        }

        $usagePageFileGenerator->generate($this->usagePageContent);
    }
}
