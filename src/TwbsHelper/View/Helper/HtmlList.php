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
     * @param  array   $aItems      Array with the elements of the list
     * @param  boolean $bOrdered    Specifies ordered/unordered list; default unordered
     * @param  array   $aAttributes Attributes for the ol/ul tag.
     * If class attributes contains "list-inline", so the li will have the class "list-inline-item"
     * @param  boolean $bEscape     Escape the items.
     * @throws \InvalidArgumentException
     * @return string The list XHTML.
     */
    public function __invoke(array $aItems, array $aOptionsAndAttributes = [], bool $bEscape = true)
    {
        if (empty($aItems)) {
            throw new \InvalidArgumentException('Argument "$aItems" must not be empty');
        }


        $aItemAttributes = isset($aOptionsAndAttributes['class'])
            && strpos($aOptionsAndAttributes['class'], 'list-inline') !== false
            ? $this->setClassesToAttributes([], ['list-inline-item'])
            : [];

        $sListContent = '';
        foreach ($aItems as $sKey => $sItem) {
            $sListContent .= ($sListContent ? PHP_EOL : '') . $this->renderListItem(
                $sItem,
                is_string($sKey) ? $sKey : '',
                $aOptionsAndAttributes,
                $aItemAttributes,
                $bEscape
            );
        }

        $bOrdered = isset($aOptionsAndAttributes['ordered']) ? $aOptionsAndAttributes['ordered'] : false;
        unset($aOptionsAndAttributes['ordered']);
        return $this->renderContainer(
            $bOrdered ? 'ol' : 'ul',
            $aOptionsAndAttributes,
            $sListContent,
            $bEscape
        );
    }

    protected function renderContainer(
        string $sTag,
        array $aOptionsAndAttributes,
        string $sListContent,
        bool $bEscape = true
    ) {
        return $this->htmlElement(
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

        if (is_array($sItem)) {
            if ($sItemLabel) {
                if ($bEscape) {
                    $sItemLabel = $this->getView()->plugin('escapeHtml')->__invoke($sItemLabel);
                }
            }

            if ($sItem) {
                // Generate nested list
                $sItem = ($sItemLabel ? $sItemLabel . PHP_EOL : '') . $this(
                    $sItem,
                    $aOptionsAndAttributes,
                    $bEscape
                );
            } else {
                $sItem = $sItemLabel;
            }
        } elseif ($bEscape) {
            $sItem = $this->getView()->plugin('escapeHtml')->__invoke($sItem);
        }

        return $this->htmlElement(
            $sTag,
            $aItemAttributes,
            $sItem,
            $bEscape
        );
    }
}
