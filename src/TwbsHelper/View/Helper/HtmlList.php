<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for ordered and unordered lists
 */
class HtmlList extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    /**
     * Generates a 'List' element. Manage indentation of Xhtml markup
     *
     * @param  array   $items      Array with the elements of the list
     * @param  array   $optionsAndAttributes Attributes for the ol/ul tag.
     * If class attributes contains "list-inline", so the li will have the class "list-inline-item"
     * @param  boolean $escape     Escape the items.
     * @throws \InvalidArgumentException
     * @return string The list XHTML.
     */
    public function __invoke(array $items, array $optionsAndAttributes = [], bool $escape = true)
    {
        if (empty($items)) {
            throw new \InvalidArgumentException('Argument "$items" must not be empty');
        }

        $itemAttributes = isset($optionsAndAttributes['class'])
            && strpos($optionsAndAttributes['class'], 'list-inline') !== false
            ? $this->setClassesToAttributes([], ['list-inline-item'])
            : [];

        $listContent = '';
        foreach ($items as $key => $item) {
            $listContent .= ($listContent ? PHP_EOL : '') . $this->renderListItem(
                $item,
                is_string($key) ? $key : '',
                $optionsAndAttributes,
                $itemAttributes,
                $escape
            );
        }

        $ordered = isset($optionsAndAttributes['ordered']) ? $optionsAndAttributes['ordered'] : false;
        unset($optionsAndAttributes['ordered']);
        return $this->renderContainer(
            $ordered ? 'ol' : 'ul',
            $optionsAndAttributes,
            $listContent,
            $escape
        );
    }

    protected function renderContainer(
        string $tag,
        array $optionsAndAttributes,
        string $listContent,
        bool $escape = true
    ) {
        return $this->htmlElement(
            $tag,
            $optionsAndAttributes,
            $listContent,
            $escape
        );
    }

    protected function renderListItem(
        $item,
        string $itemLabel = '',
        array $optionsAndAttributes = [],
        array $itemAttributes = [],
        bool $escape = true,
        string $tag = 'li'
    ): string {

        if (is_array($item)) {
            if ($itemLabel && ($escape && !$this->isHTML($itemLabel))) {
                $itemLabel = $this->getView()->plugin('escapeHtml')->__invoke($itemLabel);
            }

            if ($item !== []) {
                // Generate nested list
                $item = ($itemLabel ? $itemLabel . PHP_EOL : '') . $this(
                    $item,
                    $optionsAndAttributes,
                    $escape
                );
            } else {
                $item = $itemLabel;
            }
        } elseif ($escape && !$this->isHTML($item)) {
            $item = $this->getView()->plugin('escapeHtml')->__invoke($item);
        }

        return $this->htmlElement(
            $tag,
            $itemAttributes,
            $item,
            $escape
        );
    }
}
