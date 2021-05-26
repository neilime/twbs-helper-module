<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for numbered and unnumbered lists
 */
class HtmlList extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    protected static $allowedOptions = ['tag', 'inline', 'unstyled', 'numbered'];

    /**
     * Generates a 'List' element. Manage indentation of Xhtml markup
     *
     * @param  iterable   $items      Array with the elements of the list
     * @param  iterable   $optionsAndAttributes Attributes for the ol/ul tag.
     * If class attributes contains "list-inline", so the li will have the class "list-inline-item"
     * @param  boolean $escape     Escape the items.
     * @throws \InvalidArgumentException
     * @return string The list XHTML.
     */
    public function __invoke(iterable $items, iterable $optionsAndAttributes = [], bool $escape = true): string
    {
        if (empty($items)) {
            throw new \InvalidArgumentException('Argument "$items" must not be empty');
        }

        $listContent = '';
        foreach ($items as $key => $item) {
            $listItemContent = $this->renderListItem(
                $item,
                is_string($key) ? $key : '',
                $optionsAndAttributes,
                $escape,
            );
            if ($listItemContent) {
                $listContent .= ($listContent ? PHP_EOL : '') . $listItemContent;
            }
        }

        return $this->renderContainer(
            $optionsAndAttributes,
            $listContent,
            $escape
        );
    }

    protected function getContainerClassesFromOptionsAndAttributes(iterable $optionsAndAttributes): array
    {
        $classes = [];
        if (!empty($optionsAndAttributes['inline'])) {
            $classes[] = 'list-inline';
        }

        if (!empty($optionsAndAttributes['unstyled'])) {
            $classes[] = 'list-unstyled';
        }

        if (!empty($optionsAndAttributes['numbered'])) {
            $classes[] = 'list-group-numbered';
        }

        return $classes;
    }

    protected function renderContainer(
        iterable $optionsAndAttributes,
        string $listContent,
        bool $escape
    ): string {
        if (isset($optionsAndAttributes['tag'])) {
            $tag = $optionsAndAttributes['tag'];
        } else {
            $tag = empty($optionsAndAttributes['numbered']) ? 'ul' : 'ol';
        }

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($optionsAndAttributes)
            ->offsetsUnset(static::$allowedOptions)
            ->merge(['class' => $this->getContainerClassesFromOptionsAndAttributes($optionsAndAttributes)]);

        return $this->getView()->plugin('htmlElement')->__invoke(
            $tag,
            $attributes,
            $listContent,
            $escape
        );
    }

    protected function renderListItem(
        $item,
        string $itemContent,
        iterable $optionsAndAttributes,
        bool $escape
    ): string {


        if (\Laminas\Stdlib\ArrayUtils::isList($item)) {
            $itemContent = $this->renderNestedListItem(
                $item,
                $itemContent,
                $optionsAndAttributes,
                $escape
            );
            $item = [];
        } else {
            $item = $this->prepareItemSpec($item, $optionsAndAttributes);
            $itemContent = $this->renderListItemContent($item, $itemContent, $escape);
        }

        return $this->getView()->plugin('htmlElement')->__invoke(
            $item['tag'] ?? 'li',
            $item['attributes'] ?? [],
            $itemContent,
            $escape
        );
    }

    protected function renderNestedListItem(
        iterable $item,
        string $itemContent,
        iterable $optionsAndAttributes,
        bool $escape
    ): string {
        // Generate nested list
        $nestedListContent = $this(
            $item,
            $optionsAndAttributes,
            $escape
        );

        if ($itemContent) {
            if ($escape && !$this->getView()->plugin('htmlElement')->isHTML($itemContent)) {
                $itemContent = $this->getView()->plugin('escapeHtml')->__invoke($itemContent);
            }

            $itemContent .= PHP_EOL . $nestedListContent;
        } else {
            $itemContent = $nestedListContent;
        }

        return $itemContent;
    }

    protected function renderListItemContent(iterable $item, string $itemContent, bool $escape): string
    {
        $itemContent = implode(
            PHP_EOL,
            array_filter([$item['content'] ?? '', $itemContent])
        );

        if ($itemContent) {
            if ($escape && !$this->getView()->plugin('htmlElement')->isHTML($itemContent)) {
                $itemContent = $this->getView()->plugin('escapeHtml')->__invoke($itemContent);
            }
        }
        return $itemContent;
    }

    protected function prepareItemSpec($item, iterable $optionsAndAttributes): iterable
    {
        if (is_scalar($item)) {
            $item = ['content' => $item];
        } elseif (!is_iterable($item)) {
            throw new \InvalidArgumentException(sprintf(
                '"$item" expects a scalar or an iterable value, "%s" given',
                is_object($item)
                    ? get_class($item)
                    : gettype($item)
            ));
        }

        $item['attributes'] = $this->getView()->plugin('htmlattributes')
            ->__invoke($item['attributes'] ?? [])
            ->merge([
                'class' => $this->getListItemClassesFromOptionsAndAttributes($optionsAndAttributes)
            ]);

        return $item;
    }

    protected function getListItemClassesFromOptionsAndAttributes(iterable $optionsAndAttributes): array
    {
        $classes = [];
        $inline = isset($optionsAndAttributes['inline']) ? $optionsAndAttributes['inline'] : false;
        if ($inline) {
            $classes[] = 'list-inline-item';
        }

        return $classes;
    }
}
