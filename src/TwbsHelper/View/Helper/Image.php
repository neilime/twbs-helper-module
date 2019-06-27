<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering images
 */
class Image extends \Zend\View\Helper\AbstractHtmlElement
{
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
     * @param array $aOptions IMage options. Default : empty
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

        // Image class & src
        if ($aImageClasses) {
            if (!empty($aOptionsAndAttributes['class'])) {
                $aImageClasses = array_merge ($aImageClasses, array_filter(explode(' ', $aOptionsAndAttributes['class']), function ($sClass) {
                    return !!trim($sClass);
                }));
            }
            $aOptionsAndAttributes['class'] = join(' ', array_unique($aImageClasses));
        }
        $aOptionsAndAttributes['src'] = $sImageSrc;

        return '<img' . ($aOptionsAndAttributes ? $this->htmlAttribs($aOptionsAndAttributes) : '') . '/>';
    }
}
