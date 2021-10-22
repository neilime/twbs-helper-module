<?php

namespace DocumentationGenerator\UsagePage\Printer;

class TitlePrinter extends \DocumentationGenerator\UsagePage\Printer\AbstractPrinter
{

    protected function getContentToPrint()
    {
        if (!$this->pageExists()) {
            return "";
        }

        $headings = $this->getHeadings();
        $title = $this->getDisplayTitle();
        return $headings . ' ' . $title . PHP_EOL;
    }

    private function getHeadings()
    {
        $headings = ($this->testConfig->getNestedPosition() - $this->configuration->getMaxNestedDir()) + 1;
        return str_repeat('#', max($headings, 1));
    }

    private function getDisplayTitle()
    {
        return $this->testConfig->getShortTitle();
    }
}
