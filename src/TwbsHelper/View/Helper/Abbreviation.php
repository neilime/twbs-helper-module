<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering abbreviations
 */
class Abbreviation extends AbstractHtmlElement
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
        iterable $attributes = [],
        bool $escape = true
    ) {

        $attributes = $this->getView()->plugin('htmlattributes')->__invoke($attributes);

        if ($title) {
            $attributes['title'] = $title;
        }

        if ($initialism) {
            $attributes->merge(['class' => ['initialism']]);
        }

        return $this->getView()->plugin('htmlElement')->__invoke(
            'abbr',
            $attributes,
            $content,
            $escape
        );
    }
}
