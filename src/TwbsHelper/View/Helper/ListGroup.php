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

    protected function renderListItem(
        $sItem,
        string $sItemLabel = '',
        array $aOptionsAndAttributes = [],
        array $aLiAttributes = [],
        bool $bEscape = true
    ): string {
        return parent::renderListItem(
            $sItem,
            $sItemLabel,
            $aOptionsAndAttributes,
            $this->setClassesToAttributes($aLiAttributes, ['list-group-item']),
            $bEscape
        );
    }
}
