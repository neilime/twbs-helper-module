<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering multiple progress bar
 */
class ProgressBarGroup extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    /**
     * Generates a 'progressbar' element
     */
    public function __invoke(array $progressBars, array $options = []): string
    {
        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes($options['attributes'] ?? [], ['progress']),
            join(PHP_EOL, array_map(function ($progressBar) {
                $progressBar['container'] = false;
                return $this->getView()->plugin('progressBar')->__invoke($progressBar);
            }, $progressBars))
        );
    }
}
