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
     * @param  array   $aItems      Array with the elements of the list
     * @param  array   $aOptionsAndAttributes Attributes for the ul tag.
     * @param  boolean $bEscape     Escape the items.
     * @return string The list XHTML.
     */
    public function __invoke(array $aItems, array $aOptionsAndAttributes = [], bool $bEscape = true)
    {

        return parent::__invoke(
            $aItems,
            $this->setClassesToAttributes($aOptionsAndAttributes, ['list-group']),
            $bEscape
        );
    }

    protected function renderContainer(
        string $sTag,
        array $aOptionsAndAttributes,
        string $sListContent,
        bool $bEscape = true
    ) {
        if (isset($aOptionsAndAttributes['type'])) {
            $sTag = 'div';
        }
        unset($aOptionsAndAttributes['type']);

        if (isset($aOptionsAndAttributes['flush'])) {
            $aOptionsAndAttributes = $this->setClassesToAttributes($aOptionsAndAttributes, ['list-group-flush']);
        }
        unset($aOptionsAndAttributes['flush']);

        if (isset($aOptionsAndAttributes['horizontal'])) {
            $aOptionsAndAttributes = $this->setClassesToAttributes(
                $aOptionsAndAttributes,
                [
                    $aOptionsAndAttributes['horizontal'] === true
                        ? 'list-group-horizontal'
                        : $this->getSizeClass(
                            $aOptionsAndAttributes['horizontal'],
                            'list-group-horizontal'
                        ),
                ]
            );
        }
        unset($aOptionsAndAttributes['horizontal']);

        return parent::renderContainer(
            $sTag,
            $aOptionsAndAttributes,
            $sListContent,
            $bEscape
        );
    }

    protected function renderListItem(
        $sItem,
        string $sItemLabel = '',
        array $aOptionsAndAttributes = [],
        array $aItemAttributes = [],
        bool $bEscape = true,
        string $sTag = 'li'
    ): string {

        $bDisabled = false;

        // Item with options
        if (is_array($sItem)) {
            // Content
            if (!empty($sItem['content'])) {
                $sItemLabel = $sItem['content'];
            }
            unset($sItem['content']);

            // Custom attributes
            if (!empty($sItem['attributes'])) {
                $aItemAttributes = \Laminas\Stdlib\ArrayUtils::merge($aItemAttributes, $sItem['attributes']);
            }
            unset($sItem['attributes']);

            // Disabled state
            $bDisabled =  !empty($sItem['disabled']);
            unset($sItem['disabled']);
            if ($bDisabled) {
                $aItemAttributes['aria-disabled'] = 'true';
                $aItemAttributes = $this->setClassesToAttributes($aItemAttributes, ['disabled']);
            }

            // Active state
            if (!empty($sItem['active'])) {
                $aItemAttributes = $this->setClassesToAttributes($aItemAttributes, ['active']);
            }
            unset($sItem['active']);

            // Variant
            if (!empty($sItem['variant'])) {
                $aItemAttributes = $this->setClassesToAttributes(
                    $aItemAttributes,
                    [$this->getVariantClass($sItem['variant'], 'list-group-item')]
                );
            }
            unset($sItem['variant']);

            // Badge
            if (!empty($sItem['badge'])) {
                $aItemAttributes = $this->setClassesToAttributes(
                    $aItemAttributes,
                    ['d-flex', 'justify-content-between', 'align-items-center']
                );
                $sItemLabel = $this->renderBadge($sItem['badge'], $sItemLabel, $bEscape);
            }
            unset($sItem['badge']);
        }

        // Item type
        if (!empty($aOptionsAndAttributes['type'])) {
            switch ($aOptionsAndAttributes['type']) {
                case 'action':
                    $sTag = 'a';
                    $aItemAttributes = $this->setClassesToAttributes($aItemAttributes, ['list-group-item-action']);
                    if ($bDisabled) {
                        $aItemAttributes['tabindex'] = -1;
                    }
                    break;
                case 'button':
                    $sTag = 'button';
                    $aItemAttributes = $this->setClassesToAttributes($aItemAttributes, ['list-group-item-action']);
                    $aItemAttributes['type'] = 'button';
                    if ($bDisabled) {
                        $aItemAttributes = $this->setClassesToAttributes($aItemAttributes, [], ['disabled']);
                        $aItemAttributes['disabled'] = true;
                    }
                    break;

                default:
                    throw new \DomainException('Item "type" option "' . $sItem['type'] . '" is not supported');
            }
        }

        return parent::renderListItem(
            $sItem,
            $sItemLabel,
            $aOptionsAndAttributes,
            $this->setClassesToAttributes($aItemAttributes, ['list-group-item']),
            $bEscape,
            $sTag
        );
    }

    protected function renderBadge($aBadgeOptions, string $sItemLabel, bool $bEscape): string
    {
        if ($sItemLabel && $bEscape && !$this->isHTML($sItemLabel)) {
            $sItemLabel = $this->getView()->plugin('escapeHtml')->__invoke($sItemLabel);
        }

        $sBadgeContent =  call_user_func_array(
            [$this->getView()->plugin('badge'), '__invoke'],
            is_array($aBadgeOptions) ? $aBadgeOptions : [$aBadgeOptions]
        );

        return ($sItemLabel ? $sItemLabel . PHP_EOL : '') . $sBadgeContent;
    }
}
