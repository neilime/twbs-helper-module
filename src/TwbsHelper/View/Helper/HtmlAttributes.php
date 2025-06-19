<?php

namespace TwbsHelper\View\Helper;

use Laminas\View\Helper\AbstractHelper;
use TwbsHelper\View\HtmlAttributesSet;

/**
 * Helper for creating HtmlAttributesSet objects
 */
class HtmlAttributes extends AbstractHelper
{
    /**
     * Returns a new HtmlAttributesSet object, optionally initializing it with
     * the provided value.
     *
     * @param iterable<string, scalar|array|null> $attributes
     */
    public function __invoke(iterable $attributes = []): HtmlAttributesSet
    {
        return new HtmlAttributesSet(
            $this->getView()->plugin('escapehtml')->getEscaper(),
            $attributes
        );
    }
}
