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
    public function __invoke($sLabel = null): string
    {
        if (is_array($sLabel)) {
            $aOptions = $sLabel;
        } elseif ($sLabel) {
            $aOptions = ['label' => $sLabel];
        } else {
            $aOptions = [];
        }

        return $this->render($aOptions);
    }

    public function render(array $aOptions): string
    {
        $aAttributes = array_merge(
            ['role' => 'status'],
            $aOptions['attributes'] ?? []
        );

        $sTypeClass = $this->getPrefixedClass($aOptions['type'] ?? 'border', 'spinner');
        $aClasses = [$sTypeClass];

        if (!empty($aOptions['size'])) {
            $aClasses[] = $this->getPrefixedClass($aOptions['size'], $sTypeClass);
        }
        if (!empty($aOptions['variant'])) {
            $aClasses[] = $this->getVariantClass($aOptions['variant'], 'text');
        }
        if (!empty($aOptions['margin'])) {
            $aClasses[] = $this->getPrefixedClass($aOptions['margin'], 'm');
        }

        $sLabelContent = $aOptions['label'] ?? '';
        $bShowLabel = !empty($aOptions['show_label']);

        if ($sLabelContent) {
            $sLabelMarkup = $bShowLabel
                ? $this->htmlElement(
                    'strong',
                    [],
                    $sLabelContent
                )
                : $this->htmlElement(
                    'span',
                    ['class' => 'sr-only'],
                    $sLabelContent
                );
        } else {
            $sLabelMarkup = '';
        }

        $sPlacement = $aOptions['placement'] ?? null;

        switch ($sPlacement) {
            case 'center':
                if ($bShowLabel) {
                    $aClasses[] = 'ml-auto';
                }
                break;
            case 'right':
                $aClasses[] = 'float-right';
                break;
        }

        if (!$sLabelMarkup || ($sPlacement === 'center' && $bShowLabel)) {
            $aAttributes['aria-hidden'] = 'true';
        }

        $sSpinnerMarkup = $this->htmlElement(
            $aOptions['tag'] ?? 'div',
            $this->setClassesToAttributes($aAttributes, $aClasses),
            $sLabelMarkup && !($sPlacement === 'center' && $bShowLabel) ? $sLabelMarkup : ''
        );

        if (!$sPlacement) {
            return $sSpinnerMarkup;
        }

        $aClasses = [];
        switch ($sPlacement) {
            case 'center':
                $aClasses[] = 'd-flex';
                if ($sLabelMarkup && $bShowLabel) {
                    $sSpinnerMarkup = $sLabelMarkup . PHP_EOL . $sSpinnerMarkup;
                    $aClasses[] = 'align-items-center';
                } else {
                    $aClasses[] = 'justify-content-center';
                }
                break;
            case 'right':
                $aClasses[] = 'clearfix';
                break;
            case 'text-center':
                $aClasses[] = 'text-center';
                break;
        }

        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes([], $aClasses),
            $sSpinnerMarkup
        );
    }
}
