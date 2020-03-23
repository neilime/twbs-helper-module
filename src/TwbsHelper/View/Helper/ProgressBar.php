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
    public function __invoke($iMin = 0, $iMax = 0, $iCurrent = 0): string
    {
        if (is_array($iMin)) {
            $aOptions = $iMin;
        } else {
            $aOptions = ['min' => $iMin, 'max' => $iMax, 'current' => $iCurrent];
        }
        
        return $this->render($aOptions);
    }

    public function render(array $aOptions): string
    {

        $iCurrent = $aOptions['current'] ?? 0;
        $iMin = $aOptions['min'] ?? 0;
        $iMax = $aOptions['max'] ?? 0;

        $iPercent = $aOptions['min'] === $aOptions['max']
            ? .0
            : (float)(
                ($iCurrent - $iMin) / ($iMax - $iMin)
            ) * 100;

        $aDefaultAttributes = [
            'role' => 'progressbar',
            'aria-valuenow' => $iCurrent,
            'aria-valuemin' => $iMin,
            'aria-valuemax' => $iMax,
        ];

        $sPercent = $iPercent . '%';

        $aProgressBarClasses = ['progress-bar'];
        if (!empty($aOptions['variant'])) {
            $aProgressBarClasses[] = $this->getVariantClass($aOptions['variant'], 'bg');
        }
        if (!empty($aOptions['striped'])) {
            $aProgressBarClasses[] = 'progress-bar-striped';
        }
        if (!empty($aOptions['animated'])) {
            $aProgressBarClasses[] = 'progress-bar-animated';
        }

        $sProgressBarContent = $this->htmlElement(
            'div',
            $this->setStylesToAttributes(
                $this->setClassesToAttributes(
                    $aDefaultAttributes,
                    $aProgressBarClasses
                ),
                $iPercent !== false && $iPercent > 0 ? ['width' => $sPercent] : []
            ),
            empty($aOptions['show_label']) ? '' : $sPercent
        );

        if (isset($aOptions['container']) && $aOptions['container'] === false) {
            return $sProgressBarContent;
        }

        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes($aOptions['attributes'] ?? [], ['progress']),
            $sProgressBarContent
        );
    }
}
