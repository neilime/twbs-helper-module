<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering figures
 */
class Figure extends \Zend\View\Helper\AbstractHtmlElement
{

    /**
     * Generates a 'figure' element
     *
     * @param string $sImageSrc The path to the image of the figure
     * @param string $sCaption The content of the caption of the figure. Default : empty
     * @param array $aAttributes Html attributes of the "<figure>" element. Default : empty
     * @param array $aImageAttributes Html attributes of the "<img>" (image) element. Default : empty
     * @param array $aCaptionAttributes Html attributes of the "<figcaption>" (caption) element. Default : empty
     * @param bool $bEscape True espace html caption '$sCaption'. Default True
     * @return string The figure XHTML.
     * @throws \InvalidArgumentException
     */
    public function __invoke($sImageSrc, $sCaption = '', array $aAttributes = [], array $aImageAttributes = [], array $aCaptionAttributes = [], $bEscape = true)
    {
        if (! is_string($sImageSrc)) {
            throw new \InvalidArgumentException('Argument "$sImageSrc" expects a string, "' . (is_object($sImageSrc) ? get_class($sImageSrc) : gettype($sImageSrc)) . '" given');
        }
        if (! is_string($sCaption)) {
            throw new \InvalidArgumentException('Argument "$sCaption" expects a string, "' . (is_object($sCaption) ? get_class($sCaption) : gettype($sCaption)) . '" given');
        }
        if (! is_bool($bEscape)) {
            throw new \InvalidArgumentException('Argument "$bEscape" expects a boolean, "' . (is_object($bEscape) ? get_class($bEscape) : gettype($bEscape)) . '" given');
        }

        // Figure class
        if (empty($aAttributes['class'])) {
            $aAttributes['class'] = 'figure';
        } else {
            $aAttributes['class'] = trim($aAttributes['class']) . ' figure';
        }

        // Image src & class
        $aImageAttributes['src'] = $sImageSrc;
        if (empty($aImageAttributes['class'])) {
            $aImageAttributes['class'] = 'figure-img img-fluid rounded';
        } else {
            $aImageAttributes['class'] = trim($aImageAttributes['class']) . ' figure-img img-fluid rounded';
        }

        // Manage caption
        if ($sCaption) {
            if ($bEscape) {
                $sCaption = $this->getView()->plugin('escapeHtml')->__invoke($sCaption);
            }
            // Footer class
            if (empty($aCaptionAttributes['class'])) {
                $aCaptionAttributes['class'] = 'figure-caption';
            } else {
                $aCaptionAttributes['class'] = trim($aCaptionAttributes['class']) . ' figure-caption';
            }
        }

        return '<figure' . ($aAttributes ? $this->htmlAttribs($aAttributes) : '') . '>' . PHP_EOL .
                '    <img' . ($aImageAttributes ? $this->htmlAttribs($aImageAttributes) : '') . '/>' . PHP_EOL .
                ($sCaption ? '    <figcaption' . ($aCaptionAttributes ? $this->htmlAttribs($aCaptionAttributes) : '') . '>' . $sCaption . '</figcaption>' . PHP_EOL : '') .
                '</figure>';
    }
}
