<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering leads (Make a paragraph stand out)
 */
class Lead extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    /**
     * Generates an 'lead' element
     *
     * @param string  $content    The content of the lead
     * @param iterable   $attributes Html attributes of the "<abbr>" element
     * @param bool $escape     True espace html content '$content'. Default True
     * @return string The abbreviation XHTML.
     */
    public function __invoke(
        string $content,
        iterable $attributes = [],
        bool $escape = true
    ) {
        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($attributes)
            ->merge(['class' => ['lead']]);

        return $this->getView()->plugin('htmlElement')->__invoke('p', $attributes, $content, $escape);
    }
}
