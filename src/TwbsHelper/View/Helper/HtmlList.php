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


        $aLiAttributes = isset($aOptionsAndAttributes['class'])
            && strpos($aOptionsAndAttributes['class'], 'list-inline') !== false
            ? $this->setClassesToAttributes([], ['list-inline-item'])
            : [];

        $sListContent = '';
        foreach ($aItems as $sKey => $sItem) {
            $sListContent .= ($sListContent ? PHP_EOL : '') . $this->renderListItem(
                $sItem,
                is_string($sKey) ? $sKey : '',
                $aOptionsAndAttributes,
                $aLiAttributes,
                $bEscape
            );
        }

        $bOrdered = isset($aOptionsAndAttributes['ordered']) ? $aOptionsAndAttributes['ordered'] : false;
        unset($aOptionsAndAttributes['ordered']);

        return $this->htmlElement(
            $bOrdered ? 'ol' : 'ul',
            $aOptionsAndAttributes,
            $sListContent,
            false
        );
    }

    protected function renderListItem(
        $sItem,
        string $sItemLabel = '',
        array $aOptionsAndAttributes = [],
        array $aLiAttributes = [],
        bool $bEscape = true
    ): string {

        if (is_array($sItem)) {
            if ($sItemLabel) {
                if ($bEscape) {
                    $sItemLabel = $this->getView()->plugin('escapeHtml')->__invoke($sItemLabel);
                }
                $sItemLabel .= PHP_EOL;
            }

            // Generate nested list
            $sItem = $sItemLabel . $this(
                $sItem,
                $aOptionsAndAttributes,
                $bEscape
            );
        } elseif ($bEscape) {
            $sItem = $this->getView()->plugin('escapeHtml')->__invoke($sItem);
        }

        return $this->htmlElement(
            'li',
            $aLiAttributes,
            $sItem,
            false
        );
    }
}
