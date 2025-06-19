<?php

namespace Documentation\Generator\UsagePage\Printer;

class HeadPrinter extends AbstractPrinter
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
import HtmlCode from "%s";
';

    public function getPageContent()
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
        );
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
        $pagePath = $this->normalizePath($this->pagePath);
        $websitePath = $this->normalizePath(
            $this->configuration->getRootDirPath() . DIRECTORY_SEPARATOR . self::$WEBSITE_PATH
        );

        $directoryPathParts = explode(DIRECTORY_SEPARATOR, dirname($pagePath));

        $filePathParts = explode(DIRECTORY_SEPARATOR, $websitePath);

        while ($directoryPathParts && $filePathParts && ($directoryPathParts[0] === $filePathParts[0])) {
            array_shift($directoryPathParts);
            array_shift($filePathParts);
        }

        $websiteRelativePath = str_repeat(
            '..' . DIRECTORY_SEPARATOR,
            count($directoryPathParts)
        ) . implode(DIRECTORY_SEPARATOR, $filePathParts);

        return rtrim($websiteRelativePath, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . self::$HTML_CODE_PATH;
    }

    /**
     * Normalize path
     *
     * @param   string  $path
     * @param   string  $separator
     * @return  string  normalized path
     */
    public function normalizePath($path, $separator = '\\/')
    {
        return array_reduce(explode('/', $path), function ($a, $b) {
            if ($a === null) {
                $a = "/";
            }
            if ($b === "" || $b === ".") {
                return $a;
            }
            if ($b === "..") {
                return dirname($a);
            }

            return preg_replace("/\/+/", "/", "$a/$b");
        });
    }
}
