<?php

namespace TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper;

use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass;

abstract class AbstractHelper implements HelperInterface
{
    protected static $optionName;

    /**
     * @var HtmlClass|null
     */
    protected $htmlclasshelper;

    /**
     * Set htmlclasshelper
     *
     * @param HtmlClass $htmlclasshelper
     * @return AbstractHelper
     */
    public function setHtmlClassHelper(
        HtmlClass $htmlclasshelper
    ): HelperInterface {
        $this->htmlclasshelper = $htmlclasshelper;
        return $this;
    }

    /**
     * Retrieve HtmlClass helper instance
     *
     * @return null|HtmlClass
     */
    public function getHtmlClassHelper(): ?HtmlClass
    {
        return $this->htmlclasshelper;
    }
}
