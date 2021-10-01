<?php

namespace DocumentationGenerator\UsagePage\Printer;

class TitlePrinter extends \DocumentationGenerator\UsagePage\Printer\AbstractPrinter
{

    public function getContentToPrint()
    {
        if (!$this->pageExists()) {
            return "";
        }

        $sHeadings = $this->getHeadings();
        $sTitle = $this->getDisplayTitle();
        return $sHeadings . ' ' . $sTitle . PHP_EOL;
    }

    private function getDisplayTitle()
    {
        return $this->testConfig->getShortTitle();
    }

    private function getHeadings()
    {
        $iHeadings = ($this->testConfig->getNestedPosition() - $this->configuration->getMaxNestedDir()) + 1;
        return str_repeat('#', max($iHeadings, 1));
    }
}
