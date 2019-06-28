<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering figures
 */
class Figure extends \Zend\View\Helper\AbstractHtmlElement
{
    use \TwbsHelper\View\Helper\ClassAttributeTrait;

    /**
     * Generates a 'figure' element
     *
     * @param string $sImageSrc The path to the image of the figure
     * @param string $sCaption The content of the caption of the figure. Default : empty
     * @param array $aAttributes Html attributes of the "<figure>" element. Default : empty
     * @param array $aImageOptionsAndAttributes \TwbsHelper\View\Helper\Image options and attributes. Default : empty
     * @param array $aCaptionAttributes Html attributes of the "<figcaption>" (caption) element. Default : empty
     * @param bool $bEscape True espace html caption '$sCaption'. Default True
     * @return string The figure XHTML.
     * @throws \InvalidArgumentException
     */
    public function __invoke(
        $sImageSrc,
        $sCaption = '',
        array $aAttributes = [],
        array $aImageOptionsAndAttributes = [],
        array $aCaptionAttributes = [],
        $bEscape = true
    ) {
        if (!is_string($sImageSrc)) {
            throw new \InvalidArgumentException('Argument "$sImageSrc" expects a string, "' . (is_object($sImageSrc) ? get_class($sImageSrc) : gettype($sImageSrc)) . '" given');
        }
        if (!is_string($sCaption)) {
            throw new \InvalidArgumentException('Argument "$sCaption" expects a string, "' . (is_object($sCaption) ? get_class($sCaption) : gettype($sCaption)) . '" given');
        }
        if (!is_bool($bEscape)) {
            throw new \InvalidArgumentException('Argument "$bEscape" expects a boolean, "' . (is_object($bEscape) ? get_class($bEscape) : gettype($bEscape)) . '" given');
        }

        // Figure class
        $aAttributes['class'] = join(' ', $this->addClassesAttribute($aAttributes['class'] ?? '', array('figure')));

        // Manage caption
        if ($sCaption) {
            if ($bEscape) {
                $sCaption = $this->getView()->plugin('escapeHtml')->__invoke($sCaption);
            }

            // Caption class
            $aCaptionAttributes['class'] = join(' ', $this->addClassesAttribute($aCaptionAttributes['class'] ?? '', array('figure-caption')));
        }

        // Images options
        $aImageOptionsAndAttributes['figure'] = true;

        return '<figure' . ($aAttributes ? $this->htmlAttribs($aAttributes) : '') . '>' . PHP_EOL .
            '    ' . $this->getView()->plugin('image')->__invoke($sImageSrc, $aImageOptionsAndAttributes) . PHP_EOL . ($sCaption ?
                '    <figcaption' . ($aCaptionAttributes ? $this->htmlAttribs($aCaptionAttributes) : '') . '>' . $sCaption . '</figcaption>' . PHP_EOL
                : '') .
            '</figure>';
    }
}
