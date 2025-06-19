<?php

namespace TwbsHelper\View\Helper;

use Laminas\Stdlib\ArrayUtils;
use TwbsHelper\View\HtmlAttributesSet;

/**
 * Abstract helper for group rendering
 */
abstract class AbstractGroup extends AbstractHtmlElement
{
    /**
     * @var string
     */
    protected static $groupClass;

    /**
     * @var string
     */
    protected static $groupTag;

    protected static $allowedOptions = [];

    /**
     * Render a group
     * @param iterable $items Array with the elements of the group
     * @param iterable $optionsAndAttributes Attributes for the group tag.
     * @param boolean $escape Escape the items.
     * @return string The group XHTML.
     */
    public function __invoke(iterable $items, iterable $optionsAndAttributes = [], bool $escape = true): string
    {
        $content = $this->renderGroupItems($items, $optionsAndAttributes, $escape);
        return $this->renderGroupContainer($content, $optionsAndAttributes, $escape);
    }

    protected function renderGroupContainer(string $content, iterable $optionsAndAttributes, bool $escape): string
    {
        $attributes = $this->prepareAttributes($optionsAndAttributes);
        return $this->getView()->plugin('htmlElement')->__invoke(
            static::$groupTag,
            $attributes,
            $content,
            $escape
        );
    }

    protected function prepareAttributes(iterable $optionsAndAttributes): HtmlAttributesSet
    {
        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($optionsAndAttributes)
            ->offsetsUnset(static::$allowedOptions)
            ->merge(['class' => [static::$groupClass]]);

        return $attributes;
    }

    protected function renderGroupItems(iterable $items, iterable $optionsAndAttributes, bool $escape = true): string
    {
        $content = '';
        foreach ($items as $itemKey => $item) {
            if (ArrayUtils::isList($item)) {
                $itemSpec = $item[0];
                $itemAttributes = $item[1] ?? [];
                $itemEscape = $item[2] ??  $escape;
            } else {
                $itemSpec = $item;
                $itemAttributes = [];
                $itemEscape =  $escape;
            }

            $content .= ($content ? PHP_EOL : '') . $this->renderGroupItem(
                $itemKey,
                $itemSpec,
                $itemAttributes,
                $optionsAndAttributes,
                $itemEscape,
            );
        }

        return $content;
    }

    abstract protected function renderGroupItem(
        $itemKey,
        $itemSpec,
        iterable $attributes,
        iterable $options,
        bool $escape
    ): string;
}
