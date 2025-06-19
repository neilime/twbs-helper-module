<?php

namespace TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper;

use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass;

interface HelperInterface
{
    /**
     * Retrieve the expected html classes releated to the given option
     * @return array the list of expected classes
     */
    public function getClassesFromOption(...$options): array;

    public function setHtmlClassHelper(
        HtmlClass $htmlclasshelper
    ): HelperInterface;

    /**
     * Retrieve HtmlClass helper instance
     *
     * @return null|HtmlClass
     */
    public function getHtmlClassHelper(): ?HtmlClass;
}
