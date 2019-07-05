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
     * @param string  $sContent    The content of the abbreviation
     * @param string  $sTitle      The title of the abbreviation. Default : empty
     * @param bool $bInitialism True set the class 'initialism' to an abbreviation for a slightly smaller font-size.
     * Default : false
     * @param array   $aAttributes Html attributes of the "<abbr>" element
     * @param bool $bEscape     True espace html content '$sContent'. Default True
     * @return string The abbreviation XHTML.
     */
    public function __invoke(
        string $sContent,
        string $sTitle = '',
        bool $bInitialism = false,
        array $aAttributes = [],
        bool $bEscape = true
    ) {

        if ($sTitle) {
            $aAttributes['title'] = $sTitle;
        }

        if ($bInitialism) {
            $aAttributes = $this->setClassesToAttributes($aAttributes, ['initialism']);
        }

        return $this->htmlElement('abbr', $aAttributes, $sContent, $bEscape);
    }
}
