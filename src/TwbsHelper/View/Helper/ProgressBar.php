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
    public function __invoke($min = 0, $max = 0, $current = 0): string
    {
        $options = is_array($min) ? $min : ['min' => $min, 'max' => $max, 'current' => $current];

        return $this->render($options);
    }

    public function render(array $options): string
    {

        $current = $options['current'] ?? 0;
        $min = $options['min'] ?? 0;
        $max = $options['max'] ?? 0;

        $percent = $options['min'] === $options['max']
            ? .0
            : (float)(
                ($current - $min) / ($max - $min)) * 100;

        $defaultAttributes = [
            'role' => 'progressbar',
            'aria-valuenow' => $current,
            'aria-valuemin' => $min,
            'aria-valuemax' => $max,
        ];

        $progressBarClasses = ['progress-bar'];
        if (!empty($options['variant'])) {
            $progressBarClasses[] = $this->getVariantClass($options['variant'], 'bg');
        }

        if (!empty($options['striped'])) {
            $progressBarClasses[] = 'progress-bar-striped';
        }

        if (!empty($options['animated'])) {
            $progressBarClasses[] = 'progress-bar-animated';
        }

        $progressBarWidthAttributes = $percent !== false && $percent > 0 ? ['width' => $percent . '%'] : [];
        $progressBarContent = empty($options['show_label']) ? '' : $percent . '%';

        $progressBarContent = $this->htmlElement(
            'div',
            $this->setStylesToAttributes(
                $this->setClassesToAttributes(
                    $defaultAttributes,
                    $progressBarClasses
                ),
                $progressBarWidthAttributes
            ),
            $progressBarContent
        );

        if (isset($options['container']) && $options['container'] === false) {
            return $progressBarContent;
        }

        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes($options['attributes'] ?? [], ['progress']),
            $progressBarContent
        );
    }
}
