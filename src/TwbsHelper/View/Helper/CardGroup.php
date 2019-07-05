<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for card group
 */
class CardGroup extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    protected static $groupClass = 'card-group';

    /**
     * Render a card group
     * @param  array   $aCards      Array with the elements of the group
     * @param  array   $aOptionsAndAttributes Attributes for the ul tag.
     * @param  boolean $bEscape     Escape the items.
     * @return string The card group XHTML.
     */
    public function __invoke(array $aItems, array $aOptionsAndAttributes = [], bool $bEscape = true): string
    {
        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes($aOptionsAndAttributes, [static::$groupClass]),
            $this->renderCards($aItems, $bEscape),
            $bEscape
        );
    }

    protected function renderCards(array $aItems, bool $bEscape = true): string
    {
        $sContent = '';
        $oItemHelper = $this->getView()->plugin('card');
        foreach ($aItems as $aItem) {
            $aArguments = \Zend\Stdlib\ArrayUtils::isList($aItem) ?
                [$aItem[0], $aItem[1] ?? [], $aItem[2] ??  $bEscape]
                : [$aItem, [], $bEscape];

            $sContent .= ($sContent ? PHP_EOL : '') . call_user_func_array([$oItemHelper, '__invoke'], $aArguments);
        }
        return $sContent;
    }
}
