<?php

namespace TwbsHelper\View\Helper;

use TwbsHelper\View\HtmlAttributesSet;

/**
 * Helper for rendering alerts
 */
class Alert extends AbstractHtmlElement
{
    protected static $allowedOptions = [
        'heading',
        'dismissible',
        'icon',
        'variant',
    ];

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

        // Heading
        $heading = $optionsAndAttributes['heading'] ?? null;
        if ($heading) {
            $content = $this->renderHeading($heading, $escape) . ($content ? PHP_EOL . $content : '');
        }

        // Dismissible
        $dismissible = $optionsAndAttributes['dismissible'] ?? false;
        if ($dismissible) {
            $content .= ($content ? PHP_EOL : '') . $this->renderDismissible(
                $dismissible
            );
        }

        // Icon
        $icon = $optionsAndAttributes['icon'] ?? null;
        if ($icon) {
            $content = $icon . ($content ? PHP_EOL . $this->getView()->plugin('htmlElement')->__invoke(
                'div',
                [],
                $content
            ) : '');
        }

        $attributes = $this->prepareAttributes($optionsAndAttributes);

        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            $attributes,
            $content,
            $escape
        );
    }

    protected function prepareAttributes(iterable $optionsAndAttributes): HtmlAttributesSet
    {


        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($optionsAndAttributes)
            ->offsetsUnset(static::$allowedOptions)
            ->merge([
                'role' => 'alert',
                'class' => ['alert'],
            ]);


        // Dismissible
        $dismissible = $optionsAndAttributes['dismissible'] ?? false;
        if ($dismissible) {
            $attributes['class']->merge([
                'alert-dismissible',
                'fade',
                'show',
            ]);
        }

        // Icon
        $icon = $optionsAndAttributes['icon'] ?? null;
        if ($icon) {
            $attributes['class']->merge(['d-flex', 'align-items-center']);
        }

        $attributes['class']->merge(
            $this->getView()->plugin('htmlClass')->plugin('variant')->getClassesFromOption(
                $optionsAndAttributes['variant'] ?? 'secondary',
                'alert'
            )
        );

        return $attributes;
    }

    protected function renderHeading(string $heading, bool $escape): string
    {
        return $this->getView()->plugin('htmlElement')->__invoke(
            'h4',
            ['class' => 'alert-heading'],
            $heading,
            $escape
        );
    }

    protected function renderDismissible($close): string
    {
        return $this->getView()->plugin('formButton')->renderSpec(
            [
                'options' => ['close' => $close],
                'attributes' => [
                    'data-bs-dismiss' => 'alert',
                ],
            ],
            ''
        );
    }
}
