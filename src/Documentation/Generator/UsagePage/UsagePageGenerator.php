<?php

namespace Documentation\Generator\UsagePage;

class UsagePageGenerator
{
    /**
     * @var array
     */
    private $printers = [
        \Documentation\Generator\UsagePage\Printer\HeadPrinter::class,
        \Documentation\Generator\UsagePage\Printer\TitlePrinter::class,
        \Documentation\Generator\UsagePage\Printer\UrlPrinter::class,
        \Documentation\Generator\UsagePage\Printer\CodePrinter::class,
    ];

    /**
     * @var \Documentation\Generator\Configuration
     */
    private $configuration;

    /**
     * @var \Documentation\Generator\FileSystem\File
     */
    private $file;

    /**
     * @var \Documentation\Test\Config
     */
    private $documentationTestConfig;

    /**
     * @var string
     */
    private $usagePageContent = '';

    public function __construct(
        \Documentation\Generator\Configuration $configuration,
        \Documentation\Generator\FileSystem\File $file,
        \Documentation\Test\Config $documentationTestConfig
    ) {
        $this->configuration = $configuration;
        $this->file = $file;
        $this->documentationTestConfig = $documentationTestConfig;
    }

    public function generate()
    {
        $usagePageFileGenerator = new \Documentation\Generator\UsagePage\UsagePageFileGenerator(
            $this->configuration,
            $this->file,
            $this->documentationTestConfig
        );

        $pagePath = $usagePageFileGenerator->getPagePathInfo()->pagePath;

        if ($pagePath) {
            foreach ($this->printers as $printerClass) {
                $pageExists = $this->usagePageContent || $this->file->fileExists($pagePath);

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
