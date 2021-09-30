<?php

namespace TwbsHelper\View\Helper;

/**
 * Abstract helper for group rendering
 */
abstract class AbstractGroup extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    // @var string
    protected static $groupClass;
    // @var string
    protected static $groupTag;
    // @var string
    protected static $helperName;

    /**
     * Render a group
     * @param array $aItems Array with the elements of the group
     * @param array $aOptionsAndAttributes Attributes for the group tag.
     * @param boolean $bEscape Escape the items.
     * @return string The group XHTML.
     */
    public function __invoke(array $aItems, array $aOptionsAndAttributes = [], bool $bEscape = true): string
    {
        return $this->htmlElement(
            static::$groupTag,
            $this->setClassesToAttributes($aOptionsAndAttributes, [static::$groupClass]),
            $this->renderGroupItems($aItems, $bEscape),
            $bEscape
        );
    }

    protected function renderGroupItems(array $aItems, bool $bEscape = true): string
    {
        $sContent = '';

        $oItemHelper = $this->getViewHelper(static::$helperName);

        foreach ($aItems as $aItem) {
            $aArguments = \Laminas\Stdlib\ArrayUtils::isList($aItem) ?
                [$aItem[0], $aItem[1] ?? [], $aItem[2] ??  $bEscape]
                : [$aItem, [], $bEscape];

            $sContent .= ($sContent ? PHP_EOL : '') . $this->renderGroupItem(
                $oItemHelper,
                $aArguments
            );
        }
        return $sContent;
    }

    protected function renderGroupItem(
        \Laminas\View\Helper\HelperInterface $oItemHelper,
        array $aArguments
    ): string {
        return call_user_func_array([$oItemHelper, '__invoke'], $aArguments);
    }

    /**
     * @param string $sHelperName the name of the helper to retrieve
     * @return \Laminas\View\Helper\HelperInterface
     * @throws \LogicException if the view or plugin method is unavailable in the current context
     */
    public function getViewHelper(string $sHelperName): \Laminas\View\Helper\HelperInterface
    {
        $oView = $this->getView();
        if ($oView !== null && method_exists($oView, 'plugin')) {
            return $oView->plugin($sHelperName);
        }
        throw new \LogicException('Unable to retrieve helper "' . $sHelperName . '"');
    }
}
