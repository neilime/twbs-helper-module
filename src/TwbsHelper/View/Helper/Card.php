<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering cards
 */
class Card extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    public const CARD_ROW = 'row';
    public const CARD_HEADER = 'header';
    public const CARD_HEADER_NAV_TABS = 'nav';
    public const CARD_FOOTER = 'footer';
    public const CARD_IMG = 'image';
    public const CARD_IMG_TOP = 'image_top';
    public const CARD_IMG_BOTTOM = 'image_bottom';
    public const CARD_OVERLAY = 'overlay';
    public const CARD_LIST_GROUP = 'listGroup';
    public const CARD_BODY_TITLE = 'title';
    public const CARD_BODY_SUBTITLE = 'subtitle';
    public const CARD_BODY_TEXT = 'text';
    public const CARD_BODY_LINK = 'link';
    public const CARD_BODY_BLOCKQUOTE = 'blockquote';

    protected static $allowedOptions = [
        'body_variant',
        'bg_variant',
        'border_variant',
    ];

    protected static $cardParts = [
        self::CARD_ROW => 'renderCardRow',
        self::CARD_HEADER => 'renderCardHeader',
        self::CARD_HEADER_NAV_TABS => 'renderCardHeaderNav',
        self::CARD_FOOTER => 'renderCardFooter',
        self::CARD_IMG => 'renderCardImg',
        self::CARD_IMG_TOP => 'renderCardImgTop',
        self::CARD_IMG_BOTTOM => 'renderCardImgBottom',
        self::CARD_OVERLAY => 'renderCardOverlay',
        self::CARD_LIST_GROUP => 'renderCardListGroup'
    ];

    /**
     * Generates an 'alert' element
     *
     * @param  string  $content     The content of the alert
     * @param  iterable   $optionsAndAttributes  Html attributes of the "<div>" element
     * @param  boolean $escape      True espace html content '$content'. Default True
     * @return string The card XHTML.
     */
    public function __invoke(
        $content,
        iterable $optionsAndAttributes = [],
        bool $escape = true
    ) {
        return $this->renderCardContainer($content, $optionsAndAttributes, $escape);
    }

    protected function renderCardContainer($content, iterable $optionsAndAttributes, bool $escape): string
    {
        $content = $this->renderCardContainerContent($content, $optionsAndAttributes, $escape);

        $attributes = $this->getView()->plugin('htmlattributes')->__invoke($optionsAndAttributes)
            ->offsetsUnset(static::$allowedOptions)
            ->merge(['class' => ['card']]);

        if (!empty($optionsAndAttributes['bg_variant'])) {
            $attributes['class']->merge($this->getView()->plugin('htmlClass')->plugin('variant')->getClassesFromOption(
                $optionsAndAttributes['bg_variant'],
                'bg'
            ));
        }

        if (!empty($optionsAndAttributes['border_variant'])) {
            $attributes['class']->merge($this->getView()->plugin('htmlClass')->plugin('variant')->getClassesFromOption(
                $optionsAndAttributes['border_variant'],
                'border'
            ));
        }

        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            $attributes,
            $content,
            $escape
        );
    }

    protected function renderCardContainerContent($content, iterable $optionsAndAttributes, bool $escape): string
    {
        $bodyAttributes = $this->getView()->plugin('htmlattributes')->__invoke([]);

        if (!empty($optionsAndAttributes['body_variant'])) {
            $bodyAttributes['class']->merge(
                $this->getView()->plugin('htmlClass')->plugin('variant')->getClassesFromOption(
                    $optionsAndAttributes['body_variant'],
                    'text'
                )
            );
        }

        if (is_string($content)) {
            return $this->renderCardBody($content, $bodyAttributes, $escape);
        }

        if (!is_iterable($content)) {
            throw new \InvalidArgumentException(sprintf(
                '"$content" argument expects a string or an iterable value, "%s" given',
                is_object($content)
                    ? get_class($content)
                    : gettype($content)
            ));
        }

        $renderedContent = '';

        $bodyItems = [];
        foreach ($content as $key => $contentData) {
            if (\Laminas\Stdlib\ArrayUtils::isList($contentData)) {
                $arguments = $contentData;
            } else {
                $arguments = [$contentData];
            }

            if (isset(self::$cardParts[$key])) {
                // Close body item
                if ($bodyItems) {
                    $renderedContent .= ($renderedContent ? PHP_EOL : '') . $this->renderCardBody(
                        $bodyItems,
                        $bodyAttributes,
                        $escape
                    );
                    $bodyItems = [];
                }

                $renderedContent .= ($renderedContent ? PHP_EOL : '') . call_user_func_array(
                    [$this, self::$cardParts[$key]],
                    [$arguments, $escape]
                );
            } else {
                $bodyItems[$key] = $contentData;
            }
        }

        if ($bodyItems) {
            if ($renderedContent) {
                $renderedContent .= PHP_EOL;
            }
            $renderedContent .= $this->renderCardBody($bodyItems, $bodyAttributes, $escape);
        }

        return $renderedContent;
    }

    protected function renderCardRow(iterable $arguments, bool $escape): string
    {
        $columns = $arguments[0];

        $attributes = $arguments[1] ?? [];
        $tag = $attributes['tag'] ?? 'div';
        unset($attributes['tag']);

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($attributes)
            ->merge(['class' => ['row']]);

        $content = '';
        foreach ($columns as $column) {
            $columnContent = $column[0] ?? '';
            $columnAttributes = $column[1] ?? '';
            $columnEscape = $column[2] ?? $escape;
            $renderedColumn = $this->renderCardColumn($columnContent, $columnAttributes, $columnEscape);

            if ($content) {
                $content .= PHP_EOL;
            }
            $content .= $renderedColumn;
        }

        return $this->getView()->plugin('htmlElement')->__invoke($tag, $attributes, $content, $escape);
    }

    protected function renderCardColumn($content, iterable $attributes, bool $escape): string
    {
        $tag = $attributes['tag'] ?? 'div';
        unset($attributes['tag']);

        $column = $attributes['column'] ?? true;
        unset($attributes['column']);

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($attributes)
            ->merge([
                'class' => $this->getView()->plugin('htmlClass')->plugin('column')->getClassesFromOption($column)
            ]);

        $content = $this->renderCardContainerContent($content, [], $escape);

        return $this->getView()->plugin('htmlElement')->__invoke($tag, $attributes, $content, $escape);
    }

    protected function renderCardHeader(iterable $arguments, bool $escape): string
    {
        $content = $arguments[0];

        $attributes = $arguments[1] ?? [];
        $tag = $attributes['tag'] ?? 'div';
        unset($attributes['tag']);

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($attributes)
            ->merge(['class' => ['card-header']]);

        return $this->getView()->plugin('htmlElement')->__invoke($tag, $attributes, $content, $escape);
    }

    protected function renderCardHeaderNav(iterable $arguments, bool $escape): string
    {
        $attributes = $arguments[1] ?? [];
        $content = $arguments[0];
        // Nav header
        $options = [];
        if (is_string($content) || $content instanceof \Laminas\Navigation\Navigation) {
            $container = $content;
        } elseif (is_array($content)) {
            if (\Laminas\Stdlib\ArrayUtils::isList($content)) {
                $container = new \Laminas\Navigation\Navigation($content);
            } else {
                if (!isset($content['container'])) {
                    throw new \InvalidArgumentException('nav[\'container\'] is undefined');
                }
                if (isset($content['options'])) {
                    $options = array_merge($options, $content['options']);
                }

                $container = $content['container'];

                if (\Laminas\Stdlib\ArrayUtils::isList($container)) {
                    $container = new \Laminas\Navigation\Navigation($container);
                }
            }
        } else {
            throw new \InvalidArgumentException(sprintf(
                'Content argument expects a string, an array or an instance of "%s", "%s" given',
                '\Laminas\Navigation\Navigation',
                is_object($content) ? get_class($content) : gettype($content)
            ));
        }


        if (empty($options['tabs']) && empty($options['pills'])) {
            $options['tabs'] = true;
        }

        if (!isset($options['ulClass'])) {
            $options['ulClass'] = empty($options['pills']) ? 'card-header-tabs' : 'card-header-pills';
        }

        $content = $this->getView()->plugin('menu')->renderMenu($container, $options);

        return $this->renderCardHeader([$content, $attributes], $escape);
    }

    protected function renderCardFooter(iterable $arguments, bool $escape = true): string
    {
        $content = $arguments[0];

        $attributes = $arguments[1] ?? [];
        $tag = $attributes['tag'] ?? 'div';
        unset($attributes['tag']);

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($attributes)
            ->merge(['class' => ['card-footer']]);

        return $this->getView()->plugin('htmlElement')->__invoke(
            $tag,
            $attributes,
            $content,
            $escape
        );
    }

    protected function renderCardImg(iterable $arguments, bool $escape): string
    {
        $imageSrc = $arguments[0] ?? '';
        $attributes = $arguments[1] ?? [];
        $escape = $arguments[2] ?? $escape;

        return $this->renderImage($imageSrc, $attributes, $escape);
    }

    protected function renderCardImgTop(iterable $arguments, bool $escape): string
    {
        $imageSrc = $arguments[0] ?? '';

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($arguments[1] ?? [])
            ->merge(['class' => ['card-img-top']]);

        $escape = $arguments[2] ?? $escape;

        return $this->renderImage($imageSrc, $attributes, $escape);
    }

    protected function renderCardImgBottom(iterable $arguments, bool $escape): string
    {
        $imageSrc = $arguments[0] ?? '';

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($arguments[1] ?? [])
            ->merge(['class' => ['card-img-bottom']]);

        $escape = $arguments[2] ?? $escape;

        return $this->renderImage($imageSrc, $attributes, $escape);
    }

    protected function renderCardOverlay(iterable $arguments, bool $escape): string
    {
        $items = $arguments[0];

        // Render image
        if (!isset($items['img'])) {
            throw new \InvalidArgumentException('overlay[\'img\'] is undefined');
        }

        $imageSrc = $items['img'][0] ?? '';

        $imageAttributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($items['img'][1] ?? [])
            ->merge(['class' => ['card-img']]);

        $imageEscape = $items['img'][2] ?? $escape;

        $imgContent = $this->renderImage($imageSrc, $imageAttributes, $imageEscape);
        unset($items['img']);

        $content = '';
        foreach ($items as $type => $typeContent) {
            $content .= ($content ? PHP_EOL : '') . $this->renderCardItem($type, $typeContent, $escape);
        }

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($arguments[1] ?? [])
            ->merge(['class' => ['card-img-overlay']]);

        return $imgContent . PHP_EOL . $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            $attributes,
            $content,
            $escape
        );
    }


    protected function renderImage(string $imageSrc, iterable $attributes, bool $escape): string
    {
        return $this->getView()->plugin('image')->__invoke(
            $imageSrc,
            $attributes,
            $escape
        );
    }


    protected function renderCardListGroup(iterable $arguments, bool $escape): string
    {
        $arguments[1] = $this->getView()->plugin('htmlattributes')
            ->__invoke($arguments[1] ?? [])
            ->merge(['class' => ['list-group-flush']])->getArrayCopy();

        $arguments[2] = $arguments[2] ?? $escape;

        return $this->getView()->plugin('listGroup')->__invoke(...$arguments);
    }

    protected function renderCardBody($content, iterable $attributes, bool $escape): string
    {
        if (is_iterable($content)) {
            $renderedContent = '';

            foreach ($content as $type => $typeContent) {
                if ($renderedContent) {
                    $renderedContent .= PHP_EOL;
                }
                $renderedContent .= $this->renderCardItem($type, $typeContent, $escape);
            }

            $content = trim($renderedContent);
        }

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($attributes)
            ->merge(['class' => ['card-body']]);

        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            $attributes,
            $content,
            $escape
        );
    }

    protected function renderCardItem($type, $typeContent, bool $escape): string
    {
        $typeAttributes = $this->getView()->plugin('htmlattributes')->__invoke([]);
        switch (true) {
            case $type === self::CARD_BODY_TITLE:
                $tag = 'h5';
                $classes = ['card-title'];
                break;
            case $type === self::CARD_BODY_SUBTITLE:
                $tag = 'h6';
                $classes = ['card-subtitle'];
                break;
            case $type === self::CARD_BODY_TEXT:
                $tag = 'p';
                $classes = ['card-text'];
                break;
            case $type === self::CARD_BODY_LINK:
                $tag = 'a';
                $classes = ['card-link'];
                $typeAttributes['href'] = '#';
                break;
            case $type === self::CARD_BODY_BLOCKQUOTE:
                $blockquoteContent = $typeContent[0] ?? '';
                $blockquoteFooter = $typeContent[1] ?? '';
                $blockquoteAttributes = $typeContent[2] ?? ['class' => 'mb-0'];
                $blockquoteContentAttributes = $typeContent[3] ?? [];
                $blockquoteFooterAttributes = $typeContent[4] ?? [];
                $blockquoteFooterAttributes['tag'] = $blockquoteFooterAttributes['tag'] ?? 'footer';
                $blockquoteFigureAttributes = $typeContent[5] ?? [];
                $blockquoteEscape = $typeContent[6] ?? $escape;

                $blockquoteHelper = $this->getView()->plugin('blockquote');
                return call_user_func_array([$blockquoteHelper, '__invoke'], [
                    $blockquoteContent,
                    $blockquoteFooter,
                    $blockquoteAttributes,
                    $blockquoteContentAttributes,
                    $blockquoteFooterAttributes,
                    $blockquoteFigureAttributes,
                    $blockquoteEscape,
                ]);
            case is_int($type):
                return $typeContent;
            default:
                throw new \InvalidArgumentException('Card item "' . $type . '" is not supported');
        }

        if (is_iterable($typeContent)) {
            if (\Laminas\Stdlib\ArrayUtils::isList($typeContent)) {
                $cardBodyItemContent = '';
                foreach ($typeContent as $typeContentItem) {
                    $cardBodyItemContent .= ($cardBodyItemContent ? PHP_EOL : '') . $this->renderCardItem(
                        $type,
                        $typeContentItem,
                        $escape
                    );
                }
                return $cardBodyItemContent;
            }

            if (isset($typeContent['attributes'])) {
                $typeAttributes = $this->getView()->plugin('htmlattributes')
                    ->__invoke($typeContent['attributes'])
                    ->merge($typeAttributes);
            }

            if (isset($typeContent['tag'])) {
                $tag = $typeContent['tag'];
            }

            $typeContent = $typeContent['content'] ?? '';
        }

        $typeAttributes->merge(['class' => $classes]);

        return $this->getView()->plugin('htmlElement')->__invoke(
            $tag,
            $typeAttributes,
            $typeContent,
            $escape
        );
    }
}
