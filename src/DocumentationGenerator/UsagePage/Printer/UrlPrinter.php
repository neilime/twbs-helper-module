<?php

namespace DocumentationGenerator\UsagePage\Printer;

class UrlPrinter extends \DocumentationGenerator\UsagePage\Printer\AbstractPrinter
{
    private static $BOOTSTRAP_URL = 'https://getbootstrap.com/docs/';

    public function getContentToPrint()
    {
        if (!$this->pageExists()) {
            return "";
        }

        $sUrl = $this->testConfig->url;

        if (!$sUrl) {
            return "";
        }

        $sBootstrapUrl = self::$BOOTSTRAP_URL . $this->configuration->getBootstrapVersion();
        $sUrl = str_replace('%bootstrap-url%', $sBootstrapUrl, $sUrl);
        $sUrl = '[Twitter bootstrap Documentation](' . $sUrl . ')' . PHP_EOL;

        return $sUrl;
    }
}
