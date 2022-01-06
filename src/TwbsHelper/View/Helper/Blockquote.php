<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering blockquotes
 */
class Blockquote extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    /**
     * Generates a 'blockquote' element
     *
     * @param  string  $content           The content of the blockquote
     * @param  string  $footer            The content of the footer of the blockquote. Default : empty
     * @param  array   $attributes        Html attributes of the "<blockquote>" element. Default : empty
     * @param  array   $contentAttributes Html attributes of the "<p>" (content) element. Default : empty
     * @param  array   $footerAttributes  Html attributes of the "<footer>" (footer) element. Default : empty
     * @param  boolean $escape            True espace html content '$content'. Default True
     * @return string The blockquote XHTML.
     */
    public function __invoke(
        string $content,
        string $footer = '',
        array $attributes = [],
        array $contentAttributes = [],
        array $footerAttributes = [],
        bool $escape = true
    ) {

        // Handle content
        $blockquoteContent = $this->htmlElement(
            'p',
            $this->setClassesToAttributes($contentAttributes, ['mb-0']),
            $content,
            $escape
        );

        // Handle footer
        $footerContent = $footer ?  PHP_EOL . $this->htmlElement(
            'footer',
            $this->setClassesToAttributes($footerAttributes, ['blockquote-footer']),
            $footer,
            $escape
        ) : '';

        return $this->htmlElement(
            'blockquote',
            $this->setClassesToAttributes($attributes, ['blockquote']),
            $blockquoteContent . $footerContent,
            $escape
        );
    }
}
