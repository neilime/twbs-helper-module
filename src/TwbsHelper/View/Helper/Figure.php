<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering figures
 */
class Figure extends \TwbsHelper\View\Helper\AbstractHtmlElement
{

    /**
     * Generates a 'figure' element
     *
     * @param string $sImageSrc The path to the image of the figure
     * @param string $sCaption The content of the caption of the figure. Default : empty
     * @param array $aAttributes Html attributes of the "<figure>" element. Default : empty
     * @param array $aImageOptionsAndAttributes \TwbsHelper\View\Helper\Image options and attributes. Default : empty
     * @param array $aCaptionAttributes Html attributes of the "<figcaption>" (caption) element. Default : empty
     * @param boolean $bEscape True espace html caption '$sCaption'. Default True
     * @return string The figure XHTML.
     * @throws \InvalidArgumentException
     */
    public function __invoke(
        string $sImageSrc,
        string $sCaption = '',
        array $aAttributes = [],
        array $aImageOptionsAndAttributes = [],
        array $aCaptionAttributes = [],
        bool $bEscape = true
    ) {

        // Handle caption
        $sCaptionContent = $sCaption ? PHP_EOL . $this->htmlElement(
            'figcaption',
            $this->setClassesToAttributes($aCaptionAttributes, ['figure-caption']),
            $sCaption,
            $bEscape
        ) : '';

        // Handle image
        $aImageOptionsAndAttributes['figure'] = true;
        $sImageContent = $this->getView()->plugin('image')->__invoke($sImageSrc, $aImageOptionsAndAttributes);


        return $this->htmlElement(
            'figure',
            $this->setClassesToAttributes($aAttributes, ['figure']),
            $sImageContent . $sCaptionContent,
            false
        );
    }
}
