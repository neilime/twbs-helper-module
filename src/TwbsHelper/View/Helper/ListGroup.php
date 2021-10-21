<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for ordered and unordered lists
 */
class ListGroup extends \TwbsHelper\View\Helper\HtmlList
{

    /**
     * Generates a 'List' element. Manage indentation of Xhtml markup
     *
     * @param  array   $items      Array with the elements of the list
     * @param  array   $optionsAndAttributes Attributes for the ul tag.
     * @param  boolean $escape     Escape the items.
     * @return string The list XHTML.
     */
    public function __invoke(array $items, array $optionsAndAttributes = [], bool $escape = true)
    {

        return parent::__invoke(
            $items,
            $this->setClassesToAttributes($optionsAndAttributes, ['list-group']),
            $escape
        );
    }

    protected function renderContainer(
        string $tag,
        array $optionsAndAttributes,
        string $listContent,
        bool $escape = true
    ) {
        if (isset($optionsAndAttributes['type'])) {
            $tag = 'div';
        }
        unset($optionsAndAttributes['type']);

        if (isset($optionsAndAttributes['flush'])) {
            $optionsAndAttributes = $this->setClassesToAttributes($optionsAndAttributes, ['list-group-flush']);
        }
        unset($optionsAndAttributes['flush']);

        if (isset($optionsAndAttributes['horizontal'])) {
            $optionsAndAttributes = $this->setClassesToAttributes(
                $optionsAndAttributes,
                [
                    $optionsAndAttributes['horizontal'] === true
                        ? 'list-group-horizontal'
                        : $this->getSizeClass(
                            $optionsAndAttributes['horizontal'],
                            'list-group-horizontal'
                        ),
                ]
            );
        }
        unset($optionsAndAttributes['horizontal']);

        return parent::renderContainer(
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

        $disabled = false;

        // Item with options
        if (is_array($item)) {
            // Content
            if (!empty($item['content'])) {
                $itemLabel = $item['content'];
            }
            unset($item['content']);

            // Custom attributes
            if (!empty($item['attributes'])) {
                $itemAttributes = \Laminas\Stdlib\ArrayUtils::merge($itemAttributes, $item['attributes']);
            }
            unset($item['attributes']);

            // Disabled state
            $disabled =  !empty($item['disabled']);
            unset($item['disabled']);
            if ($disabled) {
                $itemAttributes['aria-disabled'] = 'true';
                $itemAttributes = $this->setClassesToAttributes($itemAttributes, ['disabled']);
            }

            // Active state
            if (!empty($item['active'])) {
                $itemAttributes = $this->setClassesToAttributes($itemAttributes, ['active']);
            }
            unset($item['active']);

            // Variant
            if (!empty($item['variant'])) {
                $itemAttributes = $this->setClassesToAttributes(
                    $itemAttributes,
                    [$this->getVariantClass($item['variant'], 'list-group-item')]
                );
            }
            unset($item['variant']);

            // Badge
            if (!empty($item['badge'])) {
                $itemAttributes = $this->setClassesToAttributes(
                    $itemAttributes,
                    ['d-flex', 'justify-content-between', 'align-items-center']
                );
                $itemLabel = $this->renderBadge($item['badge'], $itemLabel, $escape);
            }
            unset($item['badge']);
        }

        // Item type
        if (!empty($optionsAndAttributes['type'])) {
            switch ($optionsAndAttributes['type']) {
                case 'action':
                    $tag = 'a';
                    $itemAttributes = $this->setClassesToAttributes($itemAttributes, ['list-group-item-action']);
                    if ($disabled) {
                        $itemAttributes['tabindex'] = -1;
                    }
                    break;
                case 'button':
                    $tag = 'button';
                    $itemAttributes = $this->setClassesToAttributes($itemAttributes, ['list-group-item-action']);
                    $itemAttributes['type'] = 'button';
                    if ($disabled) {
                        $itemAttributes = $this->setClassesToAttributes($itemAttributes, [], ['disabled']);
                        $itemAttributes['disabled'] = true;
                    }
                    break;

                default:
                    throw new \DomainException('Item "type" option "' . $item['type'] . '" is not supported');
            }
        }

        return parent::renderListItem(
            $item,
            $itemLabel,
            $optionsAndAttributes,
            $this->setClassesToAttributes($itemAttributes, ['list-group-item']),
            $escape,
            $tag
        );
    }

    protected function renderBadge($badgeOptions, string $itemLabel, bool $escape): string
    {
        if ($itemLabel && $escape && !$this->isHTML($itemLabel)) {
            $itemLabel = $this->getView()->plugin('escapeHtml')->__invoke($itemLabel);
        }

        $badgeHelper = $this->getView()->plugin('badge');

        $badgeContent =  call_user_func_array(
            [$badgeHelper, '__invoke'],
            is_array($badgeOptions) ? $badgeOptions : [$badgeOptions]
        );

        return ($itemLabel ? $itemLabel . PHP_EOL : '') . $badgeContent;
    }
}
