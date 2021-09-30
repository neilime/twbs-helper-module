<?php

namespace DocumentationGenerator\UsagePage;

class UsagePageFileGenerator
{

    private static $MAX_NESTED_DIR = 3;
    private static $USAGE_PAGE_DIRECTORY_TEMPLATE = '{
    "label": "%s",
    "position": %d
}';

    private static $USAGE_DIR_PATH = __DIR__ . '/../../../website/docs/usage';

    /**
     * @var \TestSuite\Documentation\DocumentationTestConfig
     */
    private $testConfig;

    /**
     * @var \DocumentationGenerator\UsagePage\PagePathInfo
     */
    private $pagePathInfo;

    public function __construct(\TestSuite\Documentation\DocumentationTestConfig $oTestConfig)
    {
        $this->testConfig = $oTestConfig;
        $this->pagePathInfo = $this->getPagePathInfo();
    }

    private function getPagePathInfo()
    {
        $aTitleParts = explode(' / ', $this->testConfig->title);

        if (!is_dir(self::$USAGE_DIR_PATH)) {
            throw new \LogicException('Usage dir path "' . self::$USAGE_DIR_PATH . '" does not exist');
        }

        $sDirName = $sPageDirPath = realpath(self::$USAGE_DIR_PATH);

        for ($iIterator = 0; $iIterator < self::$MAX_NESTED_DIR; $iIterator++) {
            if (!empty($aTitleParts)) {
                $sDirName = array_shift($aTitleParts);
                $sPageDirPath = $sPageDirPath . DIRECTORY_SEPARATOR . $this->sanitizePath($sDirName);
            } else {
                break;
            }
        }

        $oPageInfo = new \DocumentationGenerator\UsagePage\PagePathInfo();
        $oPageInfo->dirName = $sDirName;
        $oPageInfo->dirPath = $sPageDirPath;

        if (!empty($aTitleParts)) {
            $oPageInfo->pageName = array_shift($aTitleParts);
            $sPageFileName = $this->sanitizePath($oPageInfo->pageName) . '.mdx';
            $oPageInfo->pagePath = $oPageInfo->dirPath . DIRECTORY_SEPARATOR . $sPageFileName;
        } else {
            $oPageInfo->pageName = $oPageInfo->dirName;
            $oPageInfo->pagePath = dirname($oPageInfo->dirPath) . DIRECTORY_SEPARATOR . 'index.mdx';
        }



        return $oPageInfo;
    }

    private function sanitizePath($sPath)
    {
        $sDivider = '-';

        // Replace non letter or digits by divider
        $sSafePath = preg_replace('~[^\pL\d]+~u', $sDivider, $sPath);

        // transliterate
        $sSafePath = iconv('utf-8', 'us-ascii//TRANSLIT', $sSafePath);

        // remove unwanted characters
        $sSafePath = preg_replace('~[^-\w]+~', '', $sSafePath);

        // trim
        $sSafePath = trim($sSafePath, $sDivider);

        // remove duplicate divider
        $sSafePath = preg_replace('~-+~', $sDivider, $sSafePath);

        // lowercase
        $sSafePath = strtolower($sSafePath);

        if (empty($sSafePath)) {
            return 'n-a';
        }

        return $sSafePath;
    }

    public function generate()
    {
        $this->createPageDir();
        return $this->pagePathInfo->pagePath;
    }

    private function createPageDir()
    {
        $sPageDirPath = $this->pagePathInfo->dirPath;

        if (!is_dir($sPageDirPath)) {
            mkdir($sPageDirPath);
            $this->generateCategoryFile();
        }
    }

    private function generateCategoryFile()
    {
        file_put_contents(
            $this->pagePathInfo->dirPath . DIRECTORY_SEPARATOR . '_category_.json',
            sprintf(
                self::$USAGE_PAGE_DIRECTORY_TEMPLATE,
                $this->pagePathInfo->dirName,
                $this->testConfig->position
            )
        );
    }
}
