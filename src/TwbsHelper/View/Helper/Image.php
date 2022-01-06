<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering images
 */
class Image extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    protected $imagesClasses = [
        'fluid'     => 'img-fluid',
        'thumbnail' => 'img-thumbnail',
        'rounded'   => 'rounded',
        'figure'    => 'figure-img',
    ];

    /**
     * Generates a 'image' element
     *
     * @param string $imageSrc   The path to the image
     * @param array  $optionsAndAttributes  Image options and Html attributes. Default : empty. Allowed options:
     *     - boolean fluid: responsive image
     *     - boolean thumbnail: thumbnail image
     *     - boolean rounded: rounded image
     *     - boolean figure: figure image
     *     - [srcset => type] sources: list of sources for <picture element>
     *
     * @return string The image XHTML.
     * @throws \InvalidArgumentException
     */
    public function __invoke(string $imageSrc, array $optionsAndAttributes = [])
    {
        $imageClasses = [];
        foreach ($this->imagesClasses as $options => $class) {
            if (!empty($optionsAndAttributes[$options])) {
                $imageClasses[] = $class;
            }

            unset($optionsAndAttributes[$options]);
        }

        // Image class
        if ($imageClasses !== []) {
            $optionsAndAttributes = $this->setClassesToAttributes($optionsAndAttributes, $imageClasses);
        }

        // Image src
        $optionsAndAttributes['src'] = $imageSrc;

        $sources = $optionsAndAttributes['sources'] ?? [];
        unset($optionsAndAttributes['sources']);

        $imageContent = $this->htmlElement('img', $optionsAndAttributes);
        if (!$sources) {
            return $imageContent;
        }

        return $this->htmlElement('picture', [], $this->renderSources($sources) . PHP_EOL . $imageContent, false);
    }


    public function renderSources(array $sources)
    {
        $sourcesContent = '';
        foreach ($sources as $srcSet => $type) {
            $sourcesContent  .= ($sourcesContent ? PHP_EOL : '') . $this->htmlElement('source', [
                'srcset' => $srcSet,
                'type'   => $type,
            ]);
        }

        return $sourcesContent;
    }
}
