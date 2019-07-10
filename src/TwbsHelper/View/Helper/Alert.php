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
     * @param  string|array   $aOptionsAndAttributes  Html attributes of the "<div>" element
     * @param  boolean $bEscape      True espace html content '$sContent'. Default True
     * @return string The alert XHTML.
     */
    public function __invoke(
        string $sContent,
        $aOptionsAndAttributes = null,
        bool $bEscape = true
    ) {

        if (!$aOptionsAndAttributes) {
            $aOptionsAndAttributes = [];
        } elseif (is_string($aOptionsAndAttributes)) {
            $aOptionsAndAttributes = [
                'variant' => $aOptionsAndAttributes,
            ];
        }

        $sVariantClass = $this->getVariantClass(
            $aOptionsAndAttributes['variant'] ?? 'secondary',
            'alert'
        );
        unset($aOptionsAndAttributes['variant']);

        $aClasses = ['alert', $sVariantClass];

        // Heading
        $sHeading = $aOptionsAndAttributes['heading'] ?? null;
        unset($aOptionsAndAttributes['heading']);
        if ($sHeading) {
            $sContent = $this->htmlElement(
                'h4',
                ['class' => 'alert-heading'],
                $sHeading
            ) . ($sContent ? PHP_EOL . $sContent : '');
        }

        // Dismissible
        $bDismissible = $aOptionsAndAttributes['dismissible'] ?? false;
        unset($aOptionsAndAttributes['dismissible']);
        if ($bDismissible) {
            $aClasses = array_merge($aClasses, ['alert-dismissible', 'fade', 'show']);
            $sContent .= ($sContent ? PHP_EOL : '') . $this->htmlElement(
                'button',
                ['type' => 'button', 'class' => 'close', 'data-dismiss' => 'alert', 'aria-label' => 'Close'],
                $this->htmlElement('span', ['aria-hidden' => 'true'], '&times;', false),
                $bEscape
            );
        }

        $aAttributes = $this->setClassesToAttributes($aOptionsAndAttributes, $aClasses);
        if (!isset($aAttributes['role'])) {
            $aAttributes['role'] = 'alert';
        }
        return $this->htmlElement('div', $aAttributes, $sContent, $bEscape);
    }
}
