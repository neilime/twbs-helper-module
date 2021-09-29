<?php

namespace DocumentationGenerator\UsagePage\Printer;

class TitlePrinter extends \DocumentationGenerator\UsagePage\Printer\AbstractPrinter
{
    public function getContentToPrint()
    {
        $aTitleParts = explode(' / ', $this->testConfig->title);
        $sTitle = array_pop($aTitleParts);
        return '# ' . $sTitle . PHP_EOL;
    }
}
