<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering images
 */
class Image extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    protected static $allowedOptions = [
        'centered',
        'figure',
        'fluid',
        'rounded',
        'sources',
        'thumbnail',
    ];

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
     * @param iterable $optionsAndAttributes  Image options and Html attributes. Default : empty. Allowed options:
     *     - boolean fluid: responsive image
     *     - boolean thumbnail: thumbnail image
     *     - boolean rounded: rounded image
     *     - boolean figure: figure image
     *     - [srcset => type] sources: list of sources for <picture element>
     * @param  boolean $escape   True espace html content '$content'. Default True
     *
     * @return string The image XHTML.
     * @throws \InvalidArgumentException
     */
    public function __invoke(string $imageSrc, iterable $optionsAndAttributes = [], bool $escape = true)
    {
        $imageClasses = [];

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($optionsAndAttributes)
            ->offsetsUnset(static::$allowedOptions);

        foreach ($this->imagesClasses as $options => $class) {
            if (!empty($optionsAndAttributes[$options])) {
                $classOption = $optionsAndAttributes[$options];
                if (is_string($classOption)) {
                    $imageClasses[] = $this->getView()->plugin('htmlClass')->getSuffixedClass($class, $classOption);
                } else {
                    $imageClasses[] = $class;
                }
            }
        }

        // Image class
        if ($imageClasses !== []) {
            $attributes->merge(['class' => $imageClasses]);
        }

        // Image src
        $attributes['src'] = $imageSrc;

        $sources = $optionsAndAttributes['sources'] ?? [];

        $centered = $optionsAndAttributes['centered'] ?? false;

        $imageContent = $this->getView()->plugin('htmlElement')->__invoke(
            'img',
            $attributes,
            null,
            $escape
        );

        if ($centered) {
            $imageContent = $this->getView()->plugin('htmlElement')->__invoke(
                'div',
                ['class' => 'text-center'],
                $imageContent,
                $escape
            );
        }

        if (!$sources) {
            return $imageContent;
        }

        return $this->getView()->plugin('htmlElement')->__invoke(
            'picture',
            [],
            $this->renderSources($sources) . PHP_EOL . $imageContent,
            $escape
        );
    }


    public function renderSources(array $sources, bool $escape = true): string
    {
        $sourcesContent = '';
        foreach ($sources as $srcSet => $type) {
            $sourcesContent  .= ($sourcesContent ? PHP_EOL : '') . $this->getView()->plugin('htmlElement')
                ->__invoke(
                    'source',
                    [
                        'srcset' => $srcSet,
                        'type'   => $type,
                    ],
                    null,
                    $escape
                );
        }

        return $sourcesContent;
    }
}
