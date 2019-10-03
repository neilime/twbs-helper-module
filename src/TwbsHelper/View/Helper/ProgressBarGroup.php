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
    public function __invoke(array $aProgressBars, array $aOptions = []) : string
    {
        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes($aOptions['attributes'] ?? [], ['progress']),
            join(PHP_EOL, array_map(function ($aProgressBar) {
                $aProgressBar['container'] = false;
                return $this->getView()->plugin('progressBar')->__invoke($aProgressBar);
            }, $aProgressBars))
        );
    }
}
