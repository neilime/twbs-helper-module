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
        iterable $attributes = [],
        iterable $imageOptionsAndAttributes = [],
        iterable $captionAttributes = [],
        bool $escape = true
    ) {

        $htmlElementHelper = $this->getView()->plugin('htmlElement');

        // Handle caption
        $captionAttributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($captionAttributes)
            ->merge(['class' => ['figure-caption']]);

        $captionContent = $caption ? PHP_EOL . $htmlElementHelper->__invoke(
            'figcaption',
            $captionAttributes,
            $caption,
            $escape
        ) : '';

        // Handle image
        $imageOptionsAndAttributes['figure'] = true;
        $imageContent = $this->getView()->plugin('image')->__invoke($imageSrc, $imageOptionsAndAttributes);

        // Container
        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($attributes)
            ->merge(['class' => ['figure']]);

        return $htmlElementHelper->__invoke(
            'figure',
            $attributes,
            $imageContent . $captionContent,
            false
        );
    }
}
