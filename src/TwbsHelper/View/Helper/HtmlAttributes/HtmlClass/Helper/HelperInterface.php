<?php

namespace TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper;

interface HelperInterface
{
    /**
     * Retrieve the expected html classes releated to the given option
     * @return array the list of expected classes
     */
    public function getClassesFromOption(...$options): array;

    public function setHtmlClassHelper(
        \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass $htmlclasshelper
    ): \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\HelperInterface;

    /**
     * Retrieve HtmlClass helper instance
     *
     * @return null|\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass
     */
    public function getHtmlClassHelper(): ?\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass;
}
