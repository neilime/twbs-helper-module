<?php

namespace TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper;

abstract class AbstractHelper implements \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\HelperInterface
{
    protected static $optionName;

    /**
     * @var \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass|null
     */
    protected $htmlclasshelper;

    /**
     * Set htmlclasshelper
     *
     * @param \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass $htmlclasshelper
     * @return \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\AbstractHelper
     */
    public function setHtmlClassHelper(
        \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass $htmlclasshelper
    ): \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\HelperInterface {
        $this->htmlclasshelper = $htmlclasshelper;
        return $this;
    }

    /**
     * Retrieve HtmlClass helper instance
     *
     * @return null|\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass
     */
    public function getHtmlClassHelper(): ?\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass
    {
        return $this->htmlclasshelper;
    }
}
