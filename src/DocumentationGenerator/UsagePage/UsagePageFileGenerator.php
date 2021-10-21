<?php

namespace DocumentationGenerator\UsagePage;

class UsagePageFileGenerator
{
    private static $USAGE_PAGE_DIRECTORY_TEMPLATE = '{
    "label": "%s",
    "position": %d
}';

    private static $USAGE_DIR_PATH = 'website/docs/usage';

    /**
     * @var \DocumentationGenerator\Configuration
     */
    private $configuration;

    /**
     * @var \TestSuite\Documentation\DocumentationTestConfig
     */
    private $documentationTestConfig;

    /**
     * @var \DocumentationGenerator\UsagePage\PagePathInfo
     */
    private $pagePathInfo;


    public function __construct(
        \DocumentationGenerator\Configuration $configuration,
        \TestSuite\Documentation\DocumentationTestConfig $documentationTestConfig
    ) {
        $this->configuration = $configuration;
        $this->documentationTestConfig = $documentationTestConfig;
        $this->pagePathInfo = $this->getPagePathInfo();
    }

    public function generate()
    {
        $this->createPageDir();
        return $this->pagePathInfo->pagePath;
    }

    private function getPagePathInfo()
    {
        $titleParts = $this->documentationTestConfig->getTitleParts();
        $dirName = $this->getUsageDirPath();
        $pageDirPath = $dirName;

        $maxNestedDir = $this->configuration->getMaxNestedDir();
        for ($iterator = 1; $iterator < $maxNestedDir; ++$iterator) {
            if (!empty($titleParts)) {
                $dirName = array_shift($titleParts);
                $pageDirPath = $pageDirPath . DIRECTORY_SEPARATOR . $this->sanitizePath($dirName);
            } else {
                break;
            }
        }

        $pagePathInfo = new \DocumentationGenerator\UsagePage\PagePathInfo();
        $pagePathInfo->dirName = $dirName;
        $pagePathInfo->dirPath = $pageDirPath;
        $pagePathInfo->pageName = array_shift($titleParts);
        $pageFileName = $this->sanitizePath($pagePathInfo->pageName) . '.mdx';
        $pagePathInfo->pagePath = $pagePathInfo->dirPath . DIRECTORY_SEPARATOR . $pageFileName;

        return $pagePathInfo;
    }

    private function createPageDir()
    {
        $pageDirPath = $this->pagePathInfo->dirPath;

        if (empty($pageDirPath)) {
            throw new \LogicException('Page directory path is undefined');
        }

        if (!is_dir($pageDirPath)) {
            mkdir($pageDirPath);
            $this->generateCategoryFile();
        }
    }

    private function getUsageDirPath()
    {
        $usageDirPath = $this->configuration->getRootDirPath() . DIRECTORY_SEPARATOR . self::$USAGE_DIR_PATH;

        if (!is_dir($usageDirPath)) {
            throw new \LogicException('Usage dir path "' . $usageDirPath . '" does not exist');
        }

        return realpath($usageDirPath);
    }

    private function sanitizePath($path)
    {
        $divider = '-';

        // Replace non letter or digits by divider
        $safePath = preg_replace('/[^\pL\d]+/u', $divider, $path);

        // transliterate
        $safePath = iconv('utf-8', 'us-ascii//TRANSLIT', $safePath);

        // remove unwanted characters
        $safePath = preg_replace('/[^-\w]+/', '', $safePath);

        // trim
        $safePath = trim($safePath, $divider);

        // remove duplicate divider
        $safePath = preg_replace('/-+/', $divider, $safePath);

        // lowercase
        $safePath = strtolower($safePath);

        if (empty($safePath)) {
            return 'n-a';
        }

        return $safePath;
    }

    private function generateCategoryFile()
    {
        $this->configuration->getFile()->writeFile(
            $this->pagePathInfo->dirPath . DIRECTORY_SEPARATOR . '_category_.json',
            sprintf(
                self::$USAGE_PAGE_DIRECTORY_TEMPLATE,
                $this->pagePathInfo->dirName,
                $this->documentationTestConfig->position
            )
        );
    }
}
