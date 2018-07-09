<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering alerts
 */
class Alert extends \Zend\View\Helper\AbstractHtmlElement
{

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
    public function __invoke($sContent, $sType = '', $bDismissible = false, array $aAttributes = [], $bEscape = true)
    {
        if (! is_string($sContent)) {
            throw new \InvalidArgumentException('Argument "$sContent" expects a string, "' . (is_object($sContent) ? get_class($sContent) : gettype($sContent)) . '" given');
        }
        if (! is_string($sType)) {
            throw new \InvalidArgumentException('Argument "$sType" expects a string, "' . (is_object($sType) ? get_class($sType) : gettype($sType)) . '" given');
        }
        if (! is_bool($bDismissible)) {
            throw new \InvalidArgumentException('Argument "$bDismissible" expects a boolean, "' . (is_object($bDismissible) ? get_class($bDismissible) : gettype($bDismissible)) . '" given');
        }
        if (! is_bool($bEscape)) {
            throw new \InvalidArgumentException('Argument "$bEscape" expects a boolean, "' . (is_object($bEscape) ? get_class($bEscape) : gettype($bEscape)) . '" given');
        }

        // Alert container
        if (empty($aAttributes['class'])) {
            $aAttributes['class'] = 'alert alert-' . $sType;
        } else {
            $aAttributes['class'] = trim($aAttributes['class']) . ' alert alert-' . $sType;
        }
        $aAttributes['role'] = 'alert';


        // Dismissible
        if ($bDismissible) {
            $sDismissibleButton = '    <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . PHP_EOL .
                    '      <span aria-hidden="true">&times;</span>' . PHP_EOL .
                    '    </button>' . PHP_EOL;
            $aAttributes['class'] = $aAttributes['class'] . ' alert-dismissible fade show';
        } else {
            $sDismissibleButton = '';
        }

        // Content
        if ($bEscape) {
            $sContent = $this->getView()->plugin('escapeHtml')->__invoke($sContent);
        }
        return '<div' . ($aAttributes ? $this->htmlAttribs($aAttributes) : '') . '>' . PHP_EOL . $sDismissibleButton . '    ' . $sContent . PHP_EOL . '</div>';
    }
}
