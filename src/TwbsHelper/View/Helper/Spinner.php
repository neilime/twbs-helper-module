<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering spinner
 */
class Spinner extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    /**
     * Generates a 'spinner' element
     */
    public function __invoke($label = null): string
    {
        if (is_array($label)) {
            $options = $label;
        } elseif ($label) {
            $options = ['label' => $label];
        } else {
            $options = [];
        }

        return $this->render($options);
    }

    public function render(array $options): string
    {
        $attributes = array_merge(
            ['role' => 'status'],
            $options['attributes'] ?? []
        );

        $typeClass = $this->getPrefixedClass($options['type'] ?? 'border', 'spinner');
        $classes = [$typeClass];

        if (!empty($options['size'])) {
            $classes[] = $this->getPrefixedClass($options['size'], $typeClass);
        }

        if (!empty($options['variant'])) {
            $classes[] = $this->getVariantClass($options['variant'], 'text');
        }

        if (!empty($options['margin'])) {
            $classes[] = $this->getPrefixedClass($options['margin'], 'm');
        }

        $labelContent = $options['label'] ?? '';
        $showLabel = !empty($options['show_label']);

        $labelMarkup = $labelContent
            ? $showLabel
            ? $this->htmlElement(
                'strong',
                [],
                $labelContent
            )
            : $this->htmlElement(
                'span',
                ['class' => 'sr-only'],
                $labelContent
            )
            : '';

        $placement = $options['placement'] ?? null;

        if ($placement == 'center') {
            if ($showLabel) {
                $classes[] = 'ml-auto';
            }
        } elseif ($placement == 'right') {
            $classes[] = 'float-right';
        }

        if (!$labelMarkup || ($placement === 'center' && $showLabel)) {
            $attributes['aria-hidden'] = 'true';
        }

        $spinnerMarkup = $this->htmlElement(
            $options['tag'] ?? 'div',
            $this->setClassesToAttributes($attributes, $classes),
            $labelMarkup && !($placement === 'center' && $showLabel) ? $labelMarkup : ''
        );

        if (!$placement) {
            return $spinnerMarkup;
        }

        $classes = [];
        switch ($placement) {
            case 'center':
                $classes[] = 'd-flex';
                if ($labelMarkup && $showLabel) {
                    $spinnerMarkup = $labelMarkup . PHP_EOL . $spinnerMarkup;
                    $classes[] = 'align-items-center';
                } else {
                    $classes[] = 'justify-content-center';
                }

                break;
            case 'right':
                $classes[] = 'clearfix';
                break;
            case 'text-center':
                $classes[] = 'text-center';
                break;
        }

        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes([], $classes),
            $spinnerMarkup
        );
    }
}
