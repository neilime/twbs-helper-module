<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering progress bar
 */
class ProgressBar extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    /**
     * Generates a 'progressbar' element
     */
    public function __invoke($min = 0, $max = 0, $current = 0, bool $escape = true): string
    {
        $optionsAndAttributes = is_array($min) ? $min : ['min' => $min, 'max' => $max, 'current' => $current];

        return $this->render($optionsAndAttributes, $escape);
    }

    public function render(iterable $optionsAndAttributes, bool $escape): string
    {
        $progressBarContent = $this->renderProgressBarContent($optionsAndAttributes, $escape);

        if (isset($optionsAndAttributes['container']) && $optionsAndAttributes['container'] === false) {
            return $progressBarContent;
        }

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($optionsAndAttributes['attributes'] ?? [])
            ->merge(['class' => ['progress']]);

        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            $attributes,
            $progressBarContent,
            $escape
        );
    }

    public function renderProgressBarContent(iterable $optionsAndAttributes, bool $escape): string
    {
        $current = $optionsAndAttributes['current'] ?? 0;
        $min = $optionsAndAttributes['min'] ?? 0;
        $max = $optionsAndAttributes['max'] ?? 0;

        $percent = $optionsAndAttributes['min'] === $optionsAndAttributes['max']
            ? .0
            : (float)(
                ($current - $min) / ($max - $min)
            ) * 100;

        $attributes = $this->getView()->plugin('htmlattributes')->__invoke([
            'role' => 'progressbar',
            'aria-valuenow' => $current,
            'aria-valuemin' => $min,
            'aria-valuemax' => $max,
            'class' => ['progress-bar'],
        ]);

        if (!empty($optionsAndAttributes['variant'])) {
            $attributes['class']->merge(
                $this->getView()->plugin('htmlClass')->plugin('variant')->getClassesFromOption(
                    $optionsAndAttributes['variant'],
                    'bg'
                )
            );
        }

        if (!empty($optionsAndAttributes['striped'])) {
            $attributes['class']->merge(['progress-bar-striped']);
        }

        if (!empty($optionsAndAttributes['animated'])) {
            $attributes['class']->merge(['progress-bar-animated']);
        }

        $progressBarStyles = $percent !== false && $percent > 0 ? ['width' => $percent . '%'] : [];
        $attributes->merge(['style' => $progressBarStyles]);

        $progressBarContent = empty($optionsAndAttributes['show_label']) ? '' : $percent . '%';

        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            $attributes,
            $progressBarContent
        );
    }
}
