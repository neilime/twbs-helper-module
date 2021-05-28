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
     * @param  string  $sContent           The content of the blockquote
     * @param  string  $sFooter            The content of the footer of the blockquote. Default : empty
     * @param  array   $aAttributes        Html attributes of the "<blockquote>" element. Default : empty
     * @param  array   $aContentAttributes Html attributes of the "<p>" (content) element. Default : empty
     * @param  array   $aFooterAttributes  Html attributes of the "<footer>" (footer) element. Default : empty
     * @param  boolean $bEscape            True espace html content '$sContent'. Default True
     * @return string The blockquote XHTML.
     */
    public function __invoke(
        string $sContent,
        string $sFooter = '',
        array $aAttributes = [],
        array $aContentAttributes = [],
        array $aFooterAttributes = [],
        array $aFigureAttributes = [],
        bool $bEscape = true
    ) {

        // Handle content
        $sBlockquoteContent = $this->htmlElement(
            'p',
            $aContentAttributes,
            $sContent,
            $bEscape
        );

        $sRenderedBlockquote = $this->htmlElement(
            'blockquote',
            $this->setClassesToAttributes($aAttributes, ['blockquote']),
            $sBlockquoteContent,
            $bEscape
        );

        if (!$sFooter) {
            return $sRenderedBlockquote;
        }

        // Handle footer
        $sFooterContent = $this->htmlElement(
            'figcaption',
            $this->setClassesToAttributes($aFooterAttributes, ['blockquote-footer']),
            $sFooter,
            $bEscape
        );

        return $this->htmlElement(
            'figure',
            $aFigureAttributes,
            $sRenderedBlockquote . PHP_EOL . $sFooterContent,
            $bEscape
        );
    }
}
