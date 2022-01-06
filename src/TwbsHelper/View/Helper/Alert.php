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
     * @param  string  $content     The content of the alert
     * @param  string|array   $optionsAndAttributes  Html attributes of the "<div>" element
     * @param  boolean $escape      True espace html content '$content'. Default True
     * @return string The alert XHTML.
     */
    public function __invoke(
        string $content,
        $optionsAndAttributes = null,
        bool $escape = true
    ) {

        if (!$optionsAndAttributes) {
            $optionsAndAttributes = [];
        } elseif (is_string($optionsAndAttributes)) {
            $optionsAndAttributes = [
                'variant' => $optionsAndAttributes,
            ];
        }

        $variantClass = $this->getVariantClass(
            $optionsAndAttributes['variant'] ?? 'secondary',
            'alert'
        );
        unset($optionsAndAttributes['variant']);

        $classes = ['alert', $variantClass];

        // Heading
        $heading = $optionsAndAttributes['heading'] ?? null;
        unset($optionsAndAttributes['heading']);
        if ($heading) {
            $content = $this->htmlElement(
                'h4',
                ['class' => 'alert-heading'],
                $heading
            ) . ($content ? PHP_EOL . $content : '');
        }

        // Dismissible
        $dismissible = $optionsAndAttributes['dismissible'] ?? false;
        unset($optionsAndAttributes['dismissible']);
        if ($dismissible) {
            $classes = array_merge($classes, ['alert-dismissible', 'fade', 'show']);
            $content .= ($content ? PHP_EOL : '') . $this->htmlElement(
                'button',
                ['type' => 'button', 'class' => 'close', 'data-dismiss' => 'alert', 'aria-label' => 'Close'],
                $this->htmlElement('span', ['aria-hidden' => 'true'], '&times;', false),
                $escape
            );
        }

        $attributes = $this->setClassesToAttributes($optionsAndAttributes, $classes);
        if (!isset($attributes['role'])) {
            $attributes['role'] = 'alert';
        }

        return $this->htmlElement('div', $attributes, $content, $escape);
    }
}
