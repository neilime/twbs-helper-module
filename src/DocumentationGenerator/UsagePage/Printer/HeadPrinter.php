<?php

namespace DocumentationGenerator\UsagePage\Printer;

class HeadPrinter extends \DocumentationGenerator\UsagePage\Printer\AbstractPrinter
{
    use \DocumentationGenerator\BootstrapVersionTrait;

    private static $WEBSITE_PATH = __DIR__ . '/../../../../website/';
    private static $HTML_CODE_PATH = 'src/components/HtmlCode.tsx';

    private static $CODE_TEMPLATE = '---
sidebar_position: %d
---

import Tabs from "@theme/Tabs";
import TabItem from "@theme/TabItem";
import CodeBlock from "@theme/CodeBlock";
import HtmlCode from "%s";';

    public function getContentToPrint()
    {
        if ($this->pageExists()) {
            return;
        }

        touch($this->pagePath);

        $sHtmlCodeRelativePath = $this->getHtmlCodeRelativePath();

        $iSidebarPosition = $this->getSidebarPosition();

        return sprintf(
            self::$CODE_TEMPLATE,
            $iSidebarPosition,
            $sHtmlCodeRelativePath,
        ) . PHP_EOL;
    }

    private function getHtmlCodeRelativePath()
    {
        $sPagePath = realpath($this->pagePath);
        $sWebsitePath = realpath(self::$WEBSITE_PATH);

        $aDirectoryPathParts = explode(DIRECTORY_SEPARATOR, is_file($sPagePath)
            ? dirname($sPagePath)
            : rtrim($sPagePath, DIRECTORY_SEPARATOR));

        $aFilePathParts = explode(DIRECTORY_SEPARATOR, $sWebsitePath);

        while ($aDirectoryPathParts && $aFilePathParts && ($aDirectoryPathParts[0] == $aFilePathParts[0])) {
            array_shift($aDirectoryPathParts);
            array_shift($aFilePathParts);
        }
        $sWebsiteRelativePath = str_repeat(
            '..' . DIRECTORY_SEPARATOR,
            count($aDirectoryPathParts)
        ) . implode(DIRECTORY_SEPARATOR, $aFilePathParts);

        return $sWebsiteRelativePath . self::$HTML_CODE_PATH;
    }

    private function getSidebarPosition()
    {

        $bIsIndexPage = basename($this->pagePath) === 'index.mdx';

        return $bIsIndexPage ? 0 : $this->testConfig->position;
    }
}
