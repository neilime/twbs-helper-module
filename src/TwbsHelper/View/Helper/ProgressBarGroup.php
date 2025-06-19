<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering multiple progress bar
 */
class ProgressBarGroup extends AbstractHtmlElement
{
    /**
     * Generates a 'progressbar' element
     */
    public function __invoke(array $progressBars, array $options = []): string
    {
        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($options['attributes'] ?? [])
            ->merge(['class' => ['progress']]);

        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            $attributes,
            join(PHP_EOL, array_map(function ($progressBar) {
                $progressBar['container'] = false;
                return $this->getView()->plugin('progressBar')->__invoke($progressBar);
            }, $progressBars))
        );
    }
}
