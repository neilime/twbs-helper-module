<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for creating HtmlAttributesSet objects
 */
class HtmlAttributes extends \Laminas\View\Helper\AbstractHelper
{
    /**
     * Returns a new HtmlAttributesSet object, optionally initializing it with
     * the provided value.
     *
     * @param iterable<string, scalar|array|null> $attributes
     */
    public function __invoke(iterable $attributes = []): \TwbsHelper\View\HtmlAttributesSet
    {
        return new \TwbsHelper\View\HtmlAttributesSet(
            $this->getView()->plugin('escapehtml')->getEscaper(),
            $attributes
        );
    }
}
