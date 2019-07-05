<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering alerts
 */
class Alert extends \TwbsHelper\View\Helper\AbstractHtmlElement
{

    /**
     * Generates an 'alert' element
     *
     * @param  string  $sContent     The content of the alert
     * @param  string  $sVariation        The type of the alert (success, info, warning, danger). Default : empty
     * @param  boolean $bDismissible True if the alert can be dismissable. Default : false
     * @param  array   $aAttributes  Html attributes of the "<div>" element
     * @param  boolean $bEscape      True espace html content '$sContent'. Default True
     * @return string The alert XHTML.
     */
    public function __invoke(
        string $sContent,
        string $sVariation = '',
        bool $bDismissible = false,
        array $aAttributes = [],
        bool $bEscape = true
    ) {
        $aClasses = ['alert', 'alert-' . $sVariation];

        // Dismissible
        if ($bDismissible) {
            $aClasses = array_merge($aClasses, ['alert-dismissible', 'fade', 'show']);
            $sDismissibleButton = $this->htmlElement(
                'button',
                ['type' => 'button', 'class' => 'close', 'data-dismiss' => 'alert', 'aria-label' => 'Close'],
                $this->htmlElement('span', ['aria-hidden' => 'true'], '&times;', false),
                false
            ) . PHP_EOL;
        } else {
            $sDismissibleButton = '';
        }
        $aAttributes = $this->setClassesToAttributes($aAttributes, $aClasses);
        
        $aAttributes['role'] = 'alert';

        return $this->htmlElement('div', $aAttributes, $sDismissibleButton . $sContent, $bEscape);
    }
}
