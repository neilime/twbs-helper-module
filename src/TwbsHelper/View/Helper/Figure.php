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
     * @param string $imageSrc The path to the image of the figure
     * @param string $caption The content of the caption of the figure. Default : empty
     * @param array $attributes Html attributes of the "<figure>" element. Default : empty
     * @param array $imageOptionsAndAttributes \TwbsHelper\View\Helper\Image options and attributes. Default : empty
     * @param array $captionAttributes Html attributes of the "<figcaption>" (caption) element. Default : empty
     * @param boolean $escape True espace html caption '$caption'. Default True
     * @return string The figure XHTML.
     * @throws \InvalidArgumentException
     */
    public function __invoke(
        string $imageSrc,
        string $caption = '',
        array $attributes = [],
        array $imageOptionsAndAttributes = [],
        array $captionAttributes = [],
        bool $escape = true
    ) {

        // Handle caption
        $captionContent = $caption ? PHP_EOL . $this->htmlElement(
            'figcaption',
            $this->setClassesToAttributes($captionAttributes, ['figure-caption']),
            $caption,
            $escape
        ) : '';

        // Handle image
        $imageOptionsAndAttributes['figure'] = true;
        $imageContent = $this->getView()->plugin('image')->__invoke($imageSrc, $imageOptionsAndAttributes);

        return $this->htmlElement(
            'figure',
            $this->setClassesToAttributes($attributes, ['figure']),
            $imageContent . $captionContent,
            false
        );
    }
}
