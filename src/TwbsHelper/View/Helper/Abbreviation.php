<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering abbreviations
 */
class Abbreviation extends \Zend\View\Helper\AbstractHtmlElement {

    /**
     * Generates an 'abbreviation' element
     *
     * @param string $sContent The content of the abbreviation
     * @param string $sTitle The title of the abbreviation. Default : empty
     * @param bool $bInitialism True set the class 'initialism' to an abbreviation for a slightly smaller font-size. Default : false
     * @param array $aAttributes Html attributes of the "<abbr>" element
     * @param bool $bEscape True espace html content '$sContent'. Default True
     * @return string The abbreviation XHTML.
     * @throws \InvalidArgumentException
     */
    public function __invoke($sContent, $sTitle = '', $bInitialism = false, array $aAttributes = array(), $bEscape = true) {
        if (!is_string($sContent)) {
            throw new \InvalidArgumentException('Argument "$sContent" expects a string, "' . (is_object($sContent) ? get_class($sContent) : gettype($sContent)) . '" given');
        }
        if (!is_string($sTitle)) {
            throw new \InvalidArgumentException('Argument "$sTitle" expects a string, "' . (is_object($sTitle) ? get_class($sTitle) : gettype($sTitle)) . '" given');
        }
        if (!is_bool($bInitialism)) {
            throw new \InvalidArgumentException('Argument "$bInitialism" expects a boolean, "' . (is_object($bInitialism) ? get_class($bInitialism) : gettype($bInitialism)) . '" given');
        }
        if (!is_bool($bEscape)) {
            throw new \InvalidArgumentException('Argument "$bEscape" expects a boolean, "' . (is_object($bEscape) ? get_class($bEscape) : gettype($bEscape)) . '" given');
        }


        if ($bEscape) {
            $sContent = $this->getView()->plugin('escapeHtml')->__invoke($sContent);
        }
        if ($sTitle) {
            $aAttributes['title'] = $sTitle;
        }
        if ($bInitialism) {
            if (empty($aAttributes['class'])) {
                $aAttributes['class'] = 'initialism';
            } else {
                $aAttributes['class'] = trim($aAttributes['class']) . ' initialism';
            }
        }

        return '<abbr' . ($aAttributes ? $this->htmlAttribs($aAttributes) : '') . '>' . $sContent . '</abbr>';
    }

}
