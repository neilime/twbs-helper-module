<?php

namespace DocumentationGenerator\UsagePage\Printer;

class UrlPrinter extends \DocumentationGenerator\UsagePage\Printer\AbstractPrinter
{
    private static $BOOTSTRAP_URL = 'https://getbootstrap.com/docs/';

    protected function getContentToPrint()
    {
        if (!$this->pageExists()) {
            return "";
        }

        $url = $this->testConfig->url;

        if (!$url) {
            return "";
        }

        $bootstrapUrl = self::$BOOTSTRAP_URL . $this->configuration->getBootstrapVersion();
        $url = str_replace('%bootstrap-url%', $bootstrapUrl, $url);

        return '[Twitter bootstrap Documentation](' . $url . ')' . PHP_EOL;
    }
}
