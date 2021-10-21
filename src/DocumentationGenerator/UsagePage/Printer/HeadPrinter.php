<?php

namespace DocumentationGenerator\UsagePage\Printer;

class HeadPrinter extends \DocumentationGenerator\UsagePage\Printer\AbstractPrinter
{
    private static $WEBSITE_PATH = 'website/';

    private static $HTML_CODE_PATH = 'src/components/HtmlCode.tsx';

    private static $CODE_TEMPLATE = '---
sidebar_position: %d
label: %s
---

import Tabs from "@theme/Tabs";
import TabItem from "@theme/TabItem";
import CodeBlock from "@theme/CodeBlock";
import HtmlCode from "%s";';

    protected function getContentToPrint()
    {
        if (!$this->shouldWriteHead()) {
            return "";
        }

        $htmlCodeRelativePath = $this->getHtmlCodeRelativePath();

        return sprintf(
            self::$CODE_TEMPLATE,
            $this->testConfig->position,
            $this->testConfig->getShortTitle(),
            $htmlCodeRelativePath,
        ) . PHP_EOL;
    }

    private function shouldWriteHead()
    {
        $pageExists = $this->pageExists();
        if ($pageExists) {
            return false;
        }

        return $this->testConfig->getNestedPosition() >= $this->configuration->getMaxNestedDir();
    }

    private function getHtmlCodeRelativePath()
    {
        $this->configuration->getFile()->writeFile($this->pagePath, '');
        $pagePath = realpath($this->pagePath);
        $websitePath = realpath($this->configuration->getRootDirPath() . DIRECTORY_SEPARATOR . self::$WEBSITE_PATH);

        $directoryPathParts = explode(DIRECTORY_SEPARATOR, is_file($pagePath)
            ? dirname($pagePath)
            : rtrim($pagePath, DIRECTORY_SEPARATOR));

        $filePathParts = explode(DIRECTORY_SEPARATOR, $websitePath);

        while ($directoryPathParts && $filePathParts && ($directoryPathParts[0] === $filePathParts[0])) {
            array_shift($directoryPathParts);
            array_shift($filePathParts);
        }

        $websiteRelativePath = str_repeat(
            '..' . DIRECTORY_SEPARATOR,
            count($directoryPathParts)
        ) . implode(DIRECTORY_SEPARATOR, $filePathParts);

        return $websiteRelativePath . self::$HTML_CODE_PATH;
    }
}
