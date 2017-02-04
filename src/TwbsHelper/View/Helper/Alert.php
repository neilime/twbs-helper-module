<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering alerts
 */
class Alert extends \Zend\View\Helper\AbstractHtmlElement {

    /**
     * Generates an 'alert' element
     *
     * @param string $sContent The content of the alert
     * @param string $sType The type of the alert (success, info, warning, danger). Default : empty
     * @param bool $bDismissible True if the alert can be dismissable. Default : false
     * @param array $aAttributes Html attributes of the "<div>" element
     * @param bool $bEscape True espace html content '$sContent'. Default True
     * @return string The alert XHTML.
     * @throws \InvalidArgumentException
     */
    public function __invoke($sContent, $sType = '', $bDismissible = false, array $aAttributes = array(), $bEscape = true) {
        if (!is_string($sContent)) {
            throw new \InvalidArgumentException('Argument "$sContent" expects a string, "' . (is_object($sContent) ? get_class($sContent) : gettype($sContent)) . '" given');
        }
        if (!is_string($sType)) {
            throw new \InvalidArgumentException('Argument "$sType" expects a string, "' . (is_object($sType) ? get_class($sType) : gettype($sType)) . '" given');
        }
        if (!is_bool($bDismissible)) {
            throw new \InvalidArgumentException('Argument "$bDismissible" expects a boolean, "' . (is_object($bDismissible) ? get_class($bDismissible) : gettype($bDismissible)) . '" given');
        }
        if (!is_bool($bEscape)) {
            throw new \InvalidArgumentException('Argument "$bEscape" expects a boolean, "' . (is_object($bEscape) ? get_class($bEscape) : gettype($bEscape)) . '" given');
        }

        if (empty($aAttributes['class'])) {
            $aAttributes['class'] = 'alert alert-' . $sType;
        } else {
            $aAttributes['class'] = trim($aAttributes['class']) . ' alert alert-' . $sType;
        }
        $aAttributes['role'] = 'alert';

        if ($bEscape) {
            $sContent = $this->getView()->plugin('escapeHtml')->__invoke($sContent);
        }
        return '<div' . ($aAttributes ? $this->htmlAttribs($aAttributes) : '') . '>' . PHP_EOL . '    ' . $sContent . PHP_EOL . '</div>';
    }

}
