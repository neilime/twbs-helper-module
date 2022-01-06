<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering media objects
 */
class Media extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    public const MEDIA_IMAGE = 'img';
    public const MEDIA_TITLE = 'title';
    public const MEDIA_TEXT = 'text';
    public const MEDIA_MEDIA = 'media';

    /**
     * Generates a 'media' element
     *
     * @param string|array  $content The content of the alert
     * @param array $optionsAndAttributes Options & Html attributes
     * @param boolean $escape True espace html content '$content'. Default True
     * @return string The jumbotron XHTML.
     */
    public function __invoke(
        $content,
        array $optionsAndAttributes = [],
        bool $escape = true
    ): string {

        $tag = $optionsAndAttributes['tag'] ?? 'div';
        unset($optionsAndAttributes['tag']);

        if (is_array($content)) {
            $content = $this->renderParts($content, $escape);
        }

        return $this->htmlElement(
            $tag,
            $this->setClassesToAttributes($optionsAndAttributes, ['media']),
            $content,
            $escape
        );
    }

    protected function renderParts(array $parts = [], bool $escape = true): string
    {
        $content = '';
        $bodyPart = '';
        foreach ($parts as $key => $partContent) {
            $type = is_numeric($key) ? self::MEDIA_TEXT : $key;
            if (is_array($partContent)) {
                $options = $partContent;
            } elseif (is_string($partContent)) {
                $options = ['content' => $partContent];
            }

            $partContent = $this->renderPart(
                $type,
                $options ?? [],
                $escape
            );

            // Every part except image are wrapped in a body element
            if ($type !== self::MEDIA_IMAGE) {
                $bodyPart .= ($bodyPart ? PHP_EOL : '') . $partContent;
            } else {
                if ($bodyPart) {
                    $bodyPart = $this->htmlElement(
                        'div',
                        ['class' => 'media-body'],
                        $bodyPart,
                        $escape
                    );
                    $content .= ($content ? PHP_EOL : '') . $bodyPart;
                    $bodyPart = '';
                }
                $content .= ($content ? PHP_EOL : '') . $partContent;
            }
        }
        if ($bodyPart) {
            $content .= ($content ? PHP_EOL : '') . $this->htmlElement(
                'div',
                ['class' => 'media-body'],
                $bodyPart,
                $escape
            );
        }

        return $content;
    }

    protected function renderPart(
        string $type,
        array $options = [],
        bool $escape = true
    ): string {

        if (
            $type !== self::MEDIA_IMAGE
            && \Laminas\Stdlib\ArrayUtils::isList($options)
        ) {
            $that = $this;
            return join(
                PHP_EOL,
                array_map(function ($optionsItem) use ($that, $type, $escape) {
                    if (is_string($optionsItem)) {
                        $optionsItem = [
                            'content' => $optionsItem,
                        ];
                    }
                    return $that->renderPart($type, $optionsItem, $escape);
                }, $options)
            );
        }

        $attributes = $options['attributes'] ?? [];
        switch ($type) {
            case self::MEDIA_IMAGE:
                return $this->getView()->plugin('image')->__invoke(...$options);

            case self::MEDIA_TITLE:
                if (empty($options['content'])) {
                    throw new \DomainException('Media part type "' . $type . '" expects a content, none given');
                }
                $tag = 'h5';
                $attributes = $this->setClassesToAttributes(
                    $attributes,
                    ['mt-0']
                );
                break;

            case self::MEDIA_TEXT:
                if (empty($options['content'])) {
                    throw new \DomainException('Media part type "' . $type . '" expects a content, none given');
                }
                $tag = 'p';
                break;

            case self::MEDIA_MEDIA:
                if (empty($options['content'])) {
                    throw new \DomainException('Media part type "' . $type . '" expects a content, none given');
                }
                return $this->__invoke($options['content'], $attributes, $escape);

            default:
                throw new \DomainException('Media part type "' . $type . '" is not supported');
        }

        return $this->htmlElement(
            $tag,
            $attributes,
            $options['content'] ?? null,
            $escape
        );
    }
}
