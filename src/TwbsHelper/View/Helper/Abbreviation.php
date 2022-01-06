<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering abbreviations
 */
class Abbreviation extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    /**
     * Generates an 'abbreviation' element
     *
     * @param string  $content    The content of the abbreviation
     * @param string  $title      The title of the abbreviation. Default : empty
     * @param bool $initialism True set the class 'initialism' to an abbreviation for a slightly smaller font-size.
     * Default : false
     * @param array   $attributes Html attributes of the "<abbr>" element
     * @param bool $escape     True espace html content '$content'. Default True
     * @return string The abbreviation XHTML.
     */
    public function __invoke(
        string $content,
        string $title = '',
        bool $initialism = false,
        array $attributes = [],
        bool $escape = true
    ) {

        if ($title) {
            $attributes['title'] = $title;
        }

        if ($initialism) {
            $attributes = $this->setClassesToAttributes($attributes, ['initialism']);
        }

        return $this->htmlElement('abbr', $attributes, $content, $escape);
    }
}
