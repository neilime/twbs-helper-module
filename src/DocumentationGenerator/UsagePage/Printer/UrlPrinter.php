<?php

namespace DocumentationGenerator\UsagePage\Printer;

class UrlPrinter extends \DocumentationGenerator\UsagePage\Printer\AbstractPrinter
{
    use \DocumentationGenerator\BootstrapVersionTrait;

    private static $BOOTSTRAP_URL = 'https://getbootstrap.com/docs/';

    public function getContentToPrint()
    {
        $sUrl = $this->testConfig->url;

        if (!$sUrl) {
            return;
        }

        $sBootstrapUrl = self::$BOOTSTRAP_URL . $this->getBootstrapVersion();
        $sUrl = str_replace('%bootstrap-url%', $sBootstrapUrl, $sUrl);
        $sUrl = '[Twitter bootstrap Documentation](' . $sUrl . ')' . PHP_EOL;

        return $sUrl;
    }
}
