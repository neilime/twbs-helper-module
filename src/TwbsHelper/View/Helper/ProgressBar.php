<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering tables
 */
class ProgressBar extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    /**
     * Generates a 'progressbar' element
     */
    public function __invoke(float $iMin, float $iMax, array $aOptions = [])
    {

        $sPersistenceNamespace = $aOptions['persistence_namespace'] ?? 'twbs_progress_bar';
        unset($aOptions['persistence_namespace']);

        return new \Zend\ProgressBar\ProgressBar(new \TwbsHelper\ProgressBar\Adapter\Html(array_merge($aOptions, [
            'helper' => $this,
            'min' => $iMin,
            'max' => $iMax,
        ])), $iMin, $iMax, $sPersistenceNamespace);
    }
}
