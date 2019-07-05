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
     * @param string $sImageSrc   The path to the image
     * @param array  $aOptions    Image options. Default : empty. Allowed options:
     *     - boolean fluid: responsive image
     *     - boolean thumbnail: thumbnail image
     *     - boolean rounded: rounded image
     *     - boolean figure: figure image
     *     - [srcset => type] sources: list of sources for <picture element>
     *
     * @param  array  $aAttributes Html attributes of the "<img>" element. Default : empty
     * @return string The image XHTML.
     * @throws \InvalidArgumentException
     */
    public function __invoke(string $sImageSrc, array $aOptionsAndAttributes = [])
    {
        $aImageClasses = [];
        foreach ($this->imagesClasses as $sOptions => $sClass) {
            if (!empty($aOptionsAndAttributes[$sOptions])) {
                $aImageClasses[] = $sClass;
            }
            unset($aOptionsAndAttributes[$sOptions]);
        }

        // Image class
        if ($aImageClasses) {
            $aOptionsAndAttributes = $this->setClassesToAttributes($aOptionsAndAttributes, $aImageClasses);
        }

        // Image src
        $aOptionsAndAttributes['src'] = $sImageSrc;

        $aSources = $aOptionsAndAttributes['sources'] ?? [];
        unset($aOptionsAndAttributes['sources']);

        $sImageContent = $this->htmlElement('img', $aOptionsAndAttributes);
        if (!$aSources) {
            return $sImageContent;
        }
        return $this->htmlElement('picture', [], $this->renderSources($aSources) . PHP_EOL . $sImageContent, false);
    }


    public function renderSources(array $aSources)
    {
        $sSourcesContent = '';
        foreach ($aSources as $sSrcSet => $sType) {
            $sSourcesContent  .= ($sSourcesContent ? PHP_EOL : '') . $this->htmlElement('source', [
                'srcset' => $sSrcSet,
                'type'   => $sType,
            ]);
        }

        return $sSourcesContent;
    }
}
