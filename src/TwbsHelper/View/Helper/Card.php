<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering cards
 */
class Card extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    public const CARD_HEADER = 'header';
    public const CARD_HEADER_NAV_TABS = 'nav';
    public const CARD_FOOTER = 'footer';
    public const CARD_IMG_TOP = 'image_top';
    public const CARD_OVERLAY = 'overlay';
    public const CARD_LIST_GROUP = 'listGroup';
    public const CARD_BODY_TITLE = 'title';
    public const CARD_BODY_SUBTITLE = 'subtitle';
    public const CARD_BODY_TEXT = 'text';
    public const CARD_BODY_LINK = 'link';
    public const CARD_BODY_BLOCKQUOTE = 'blockquote';

    protected static $cardParts = [
        self::CARD_HEADER => 'renderCardHeader',
        self::CARD_HEADER_NAV_TABS => 'renderCardHeaderNav',
        self::CARD_FOOTER => 'renderCardFooter',
        self::CARD_IMG_TOP => 'renderCardImgTop',
        self::CARD_OVERLAY => 'renderCardOverlay',
        self::CARD_LIST_GROUP => 'renderCardListGroup'
    ];

    /**
     * Generates an 'alert' element
     *
     * @param  string  $content     The content of the alert
     * @param  array   $attributes  Html attributes of the "<div>" element
     * @param  boolean $escape      True espace html content '$content'. Default True
     * @return string The card XHTML.
     */
    public function __invoke(
        $content,
        array $attributes = [],
        bool $escape = true
    ) {
        return $this->renderCardContainer($content, $attributes, $escape);
    }

    protected function renderCardContainer($content, array $attributes = [], bool $escape = true): string
    {
        $bodyAttributes = [];
        if (!empty($attributes['bodyVariant'])) {
            $bodyAttributes['class'] = $this->getVariantClass($attributes['bodyVariant'], 'text');
        }
        unset($attributes['bodyVariant']);

        if (is_string($content)) {
            $content = $this->renderCardBody($content, $bodyAttributes);
        } elseif (is_array($content)) {
            $tmpContent = '';

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
                        $tmpContent .= ($tmpContent ? PHP_EOL : '') . $this->renderCardBody(
                            $bodyItems,
                            $bodyAttributes
                        );
                        $bodyItems = [];
                    }

                    $tmpContent .= ($tmpContent ? PHP_EOL : '') . call_user_func_array(
                        [$this, self::$cardParts[$key]],
                        [$arguments, $escape]
                    );
                } else {
                    $bodyItems[$key] = $contentData;
                }
            }

            if ($bodyItems) {
                $tmpContent .= ($tmpContent ? PHP_EOL : '') . $this->renderCardBody($bodyItems, $bodyAttributes);
            }

            $content = $tmpContent;
        }

        $classes = ['card'];
        if (!empty($attributes['bgVariant'])) {
            $classes[] = $this->getVariantClass($attributes['bgVariant'], 'bg');
        }
        unset($attributes['bgVariant']);

        if (!empty($attributes['borderVariant'])) {
            $classes[] = $this->getVariantClass($attributes['borderVariant'], 'border');
        }
        unset($attributes['borderVariant']);

        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes($attributes, $classes),
            $content,
            false
        );
    }

    protected function renderCardHeader(array $arguments, bool $escape = true): string
    {
        $attributes = $this->setClassesToAttributes($arguments[1] ?? [], ['card-header']);
        $content = $arguments[0];
        return $this->htmlElement('div', $attributes, $content, $escape);
    }

    protected function renderCardHeaderNav(array $arguments, bool $escape = true): string
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

    protected function renderCardFooter(array $arguments, bool $escape = true): string
    {
        $arguments[1] = $this->setClassesToAttributes($arguments[1] ?? [], ['card-footer']);
        return $this->htmlElement('div', $arguments[1], $arguments[0], $escape);
    }

    protected function renderCardImgTop(array $arguments, bool $escape = true): string
    {
        $arguments[1] = $this->setClassesToAttributes($arguments[1] ?? [], ['card-img-top']);
        return $this->getView()->plugin('image')->__invoke(...$arguments);
    }

    protected function renderCardOverlay(array $arguments, bool $escape = true): string
    {
        $attributes = $this->setClassesToAttributes($arguments[1] ?? [], ['card-img-overlay']);
        $items = $arguments[0];

        // Render image
        if (!isset($items['img'])) {
            throw new \InvalidArgumentException('overlay[\'img\'] is undefined');
        }
        $items['img'][1] = $this->setClassesToAttributes($items['img'][1] ?? [], ['card-img']);
        $imgContent = $this->getView()->plugin('image')->__invoke(...$items['img']);
        unset($items['img']);

        $content = '';
        foreach ($items as $type => $typeContent) {
            $content .= ($content ? PHP_EOL : '') . $this->renderCardItem($type, $typeContent, $escape);
        }

        return $imgContent . PHP_EOL . $this->htmlElement(
            'div',
            $attributes,
            $content,
            false
        );
    }

    protected function renderCardListGroup(array $arguments, bool $escape = true): string
    {
        $arguments[1] = $this->setClassesToAttributes($arguments[1] ?? [], ['list-group-flush']);
        return $this->getView()->plugin('listGroup')->__invoke(...$arguments);
    }

    protected function renderCardBody($content, array $attributes = [], bool $escape = true): string
    {
        if (is_array($content)) {
            $tmpContent = '';

            foreach ($content as $type => $typeContent) {
                $tmpContent .= ($tmpContent ? PHP_EOL : '') . $this->renderCardItem($type, $typeContent, $escape);
            }

            $content = trim($tmpContent);
        } else {
            // Content
            if ($escape) {
                $content = $this->getView()->plugin('escapeHtml')->__invoke($content);
            }
        }

        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes($attributes, ['card-body']),
            $content,
            false
        );
    }

    protected function renderCardItem($type, $typeContent, bool $escape = true): string
    {
        $typeAttributes = [];
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
                $arguments = [
                    $typeContent[0],
                    $typeContent[1] ?? '',
                    $typeContent[2] ?? [],
                    $typeContent[3] ?? [],
                    $typeContent[4] ?? [],
                    $typeContent[5] ?? $escape,
                ];
                $blockquoteHelper = $this->getView()->plugin('blockquote');
                return call_user_func_array([$blockquoteHelper, '__invoke'], $arguments);
            case is_int($type):
                return $typeContent;
            default:
                throw new \InvalidArgumentException('Card item "' . $type . '" is not supported');
        }

        if (is_array($typeContent)) {
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
                $typeAttributes = array_merge($typeAttributes, $typeContent['attributes']);
            }

            $typeContent = $typeContent['content'] ?? '';
        }

        return $this->htmlElement(
            $tag,
            $this->setClassesToAttributes($typeAttributes, $classes),
            $typeContent,
            $escape
        );
    }
}
