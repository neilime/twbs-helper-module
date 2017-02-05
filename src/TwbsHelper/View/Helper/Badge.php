<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering badges
 */
class Badge extends \Zend\View\Helper\AbstractHtmlElement {

    /**
     * Generates a 'badge' element
     *
     * @param string $sContent The content of the badge
     * @param string $sType The type of the badge (default, success, info, warning, danger). Default : default
     * @param bool $bPill True if the badge is a pill badge. Default : false
     * @param array $aAttributes Html attributes of the "<span>" element
     * @param bool $bEscape True espace html content '$sContent'. Default True
     * @return string The badge XHTML.
     * @throws \InvalidArgumentException
     */
    public function __invoke($sContent, $sType = 'default', $bPill = false, array $aAttributes = array(), $bEscape = true) {
        if (!is_string($sContent)) {
            throw new \InvalidArgumentException('Argument "$sContent" expects a string, "' . (is_object($sContent) ? get_class($sContent) : gettype($sContent)) . '" given');
        }
        if (!is_string($sType)) {
            throw new \InvalidArgumentException('Argument "$sType" expects a string, "' . (is_object($sType) ? get_class($sType) : gettype($sType)) . '" given');
        }
        if (!is_bool($bPill)) {
            throw new \InvalidArgumentException('Argument "$bPill" expects a boolean, "' . (is_object($bPill) ? get_class($bPill) : gettype($bPill)) . '" given');
        }
        if (!is_bool($bEscape)) {
            throw new \InvalidArgumentException('Argument "$bEscape" expects a boolean, "' . (is_object($bEscape) ? get_class($bEscape) : gettype($bEscape)) . '" given');
        }

        // Badge container
        if (empty($aAttributes['class'])) {
            $aAttributes['class'] = 'badge badge-' . $sType;
        } else {
            $aAttributes['class'] = trim($aAttributes['class']) . ' badge badge-' . $sType;
        }

        // Pill
        if ($bPill) {
            $aAttributes['class'] = $aAttributes['class'] . ' badge-pill';
        }

        // Content
        if ($bEscape) {
            $sContent = $this->getView()->plugin('escapeHtml')->__invoke($sContent);
        }
        return '<span' . ($aAttributes ? $this->htmlAttribs($aAttributes) : '') . '>' . $sContent . '</span>';
    }

}
