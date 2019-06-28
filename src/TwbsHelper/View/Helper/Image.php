<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering images
 */
class Image extends \Zend\View\Helper\AbstractHtmlElement
{
    use \TwbsHelper\View\Helper\ClassAttributeTrait;

    protected $imagesClasses = [
        'fluid' => 'img-fluid',
        'thumbnail' => 'img-thumbnail',
        'rounded' => 'rounded',
        'figure' => 'figure-img',
    ];

    /**
     * Generates a 'image' element
     *
     * @param string $sImageSrc The path to the image
     * @param array $aOptions Image options. Default : empty. Allowed options: 
     * - boolean fluid: responsive image
     * - boolean thumbnail: thumbnail image
     * - boolean rounded: rounded image
     * - boolean figure: figure image
     * - [srcset => type] sources: list of sources for <picture element>
     * 
     * @param array $aAttributes Html attributes of the "<img>" element. Default : empty
     * @return string The image XHTML.
     * @throws \InvalidArgumentException
     */
    public function __invoke($sImageSrc, array $aOptionsAndAttributes = [])
    {
        if (!is_string($sImageSrc)) {
            throw new \InvalidArgumentException('Argument "$sImageSrc" expects a string, "' . (is_object($sImageSrc) ? get_class($sImageSrc) : gettype($sImageSrc)) . '" given');
        }

        $aImageClasses = [];
        foreach ($this->imagesClasses as $sOptions => $sClass) {
            if (!empty($aOptionsAndAttributes[$sOptions])) {
                $aImageClasses[] = $sClass;
            }
            unset($aOptionsAndAttributes[$sOptions]);
        }

        // Image class
        if ($aImageClasses) {
            $aOptionsAndAttributes['class'] = join(' ', $this->addClassesAttribute($aOptionsAndAttributes['class']  ?? '', $aImageClasses));
        }

        // Image src
        $aOptionsAndAttributes['src'] = $sImageSrc;

        $aSources = $aOptionsAndAttributes['sources'] ?? [];
        unset($aOptionsAndAttributes['sources']);
        $sImageContent = '<img' . ($aOptionsAndAttributes ? $this->htmlAttribs($aOptionsAndAttributes) : '') . '/>';
        if (!$aSources) {
            return $sImageContent;
        }

        return '<picture>' . PHP_EOL . $this->renderSources($aSources) . PHP_EOL . '    ' . $sImageContent . PHP_EOL . '</picture>';
    }

    public function renderSources(array $aSources, $sIndentation = '    ')
    {
        $aSourcesContents = [];
        foreach ($aSources as $sSrcSet => $sType) {
            $aSourceAttributes = [
                'srcset' => $sSrcSet,
                'type' => $sType,
            ];
            $aSourcesContents[] = $sIndentation . '<source' . $this->htmlAttribs($aSourceAttributes) . '/>';
        }
        return join(PHP_EOL, $aSourcesContents);
    }
}
