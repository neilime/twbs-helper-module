<?php

namespace Documentation\Generator\UsagePage;

class UsagePageFileGenerator
{
    private static $USAGE_PAGE_DIRECTORY_TEMPLATE = '{
    "label": "%s",
    "position": %d
}';

    private static $USAGE_DIR_PATH = 'website/docs/usage';

    /**
     * @var \Documentation\Generator\Configuration
     */
    private $configuration;

    /**
     * @var \Documentation\Test\Config
     */
    private $documentationTestConfig;

    /**
     * @var \Documentation\Generator\UsagePage\PagePathInfo
     */
    private $pagePathInfo = null;

    public function __construct(
        \Documentation\Generator\Configuration $configuration,
        \Documentation\Test\Config $documentationTestConfig
    ) {
        $this->configuration = $configuration;
        $this->documentationTestConfig = $documentationTestConfig;
    }

    public function generate(string $content)
    {
        $pagePathInfo = $this->getPagePathInfo();
        $pageDirPath = $pagePathInfo->dirPath;

        if (empty($pageDirPath)) {
            throw new \LogicException('Page directory path is undefined');
        }

        $file = $this->configuration->getFile();

        if (!$file->dirExists($pageDirPath)) {
            mkdir($pageDirPath);
            $this->generateCategoryFile();
        }

        if ($content) {
            return
                $file->appendFile(
                    $pagePathInfo->pagePath,
                    $content,
                );
        }
    }

    public function getPagePathInfo(): \Documentation\Generator\UsagePage\PagePathInfo
    {
        if ($this->pagePathInfo === null) {
            $this->pagePathInfo = $this->generatePagePathInfo();
        }
        return $this->pagePathInfo;
    }

    private function generatePagePathInfo()
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

        $pagePathInfo = new \Documentation\Generator\UsagePage\PagePathInfo();
        $pagePathInfo->dirName = $dirName;
        $pagePathInfo->dirPath = $pageDirPath;
        $pagePathInfo->pageName = $titleParts ? array_shift($titleParts) : $dirName;
        $pageFileName = $this->sanitizePath($pagePathInfo->pageName) . '.mdx';
        $pagePathInfo->pagePath = $pagePathInfo->dirPath . DIRECTORY_SEPARATOR . $pageFileName;

        return $pagePathInfo;
    }

    private function getUsageDirPath()
    {
        $usageDirPath = $this->configuration->getRootDirPath() . DIRECTORY_SEPARATOR . self::$USAGE_DIR_PATH;

        if (!$this->configuration->getFile()->dirExists($usageDirPath)) {
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
        $pagePathInfo = $this->getPagePathInfo();
        $this->configuration->getFile()->writeFile(
            $pagePathInfo->dirPath . DIRECTORY_SEPARATOR . '_category_.json',
            sprintf(
                self::$USAGE_PAGE_DIRECTORY_TEMPLATE,
                $pagePathInfo->dirName,
                $this->documentationTestConfig->position
            )
        );
    }
}
