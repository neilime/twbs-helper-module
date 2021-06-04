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
     * @param string  $sContent    The content of the lead
     * @param array   $aAttributes Html attributes of the "<abbr>" element
     * @param bool $bEscape     True espace html content '$sContent'. Default True
     * @return string The abbreviation XHTML.
     */
    public function __invoke(
        string $sContent,
        array $aAttributes = [],
        bool $bEscape = true
    ) {
        $aAttributes = $this->setClassesToAttributes($aAttributes, ['lead']);

        return $this->htmlElement('p', $aAttributes, $sContent, $bEscape);
    }
}
