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
     * @param array $items Array with the elements of the group
     * @param array $optionsAndAttributes Attributes for the group tag.
     * @param boolean $escape Escape the items.
     * @return string The group XHTML.
     */
    public function __invoke(array $items, array $optionsAndAttributes = [], bool $escape = true): string
    {
        return $this->htmlElement(
            static::$groupTag,
            $this->setClassesToAttributes($optionsAndAttributes, [static::$groupClass]),
            $this->renderGroupItems($items, $escape),
            $escape
        );
    }

    protected function renderGroupItems(array $items, bool $escape = true): string
    {
        $content = '';

        $itemHelper = $this->getViewHelper(static::$helperName);

        foreach ($items as $item) {
            $arguments = \Laminas\Stdlib\ArrayUtils::isList($item) ?
                [$item[0], $item[1] ?? [], $item[2] ??  $escape]
                : [$item, [], $escape];

            $content .= ($content ? PHP_EOL : '') . $this->renderGroupItem(
                $itemHelper,
                $arguments
            );
        }

        return $content;
    }

    protected function renderGroupItem(
        \Laminas\View\Helper\HelperInterface $itemHelper,
        array $arguments
    ): string {
        return call_user_func_array([$itemHelper, '__invoke'], $arguments);
    }

    /**
     * @param string $helperName the name of the helper to retrieve
     * @throws \LogicException if the view or plugin method is unavailable in the current context
     */
    public function getViewHelper(string $helperName): \Laminas\View\Helper\HelperInterface
    {
        $phpRenderer = $this->getView();
        if ($phpRenderer !== null && method_exists($phpRenderer, 'plugin')) {
            return $phpRenderer->plugin($helperName);
        }

        throw new \LogicException('Unable to retrieve helper "' . $helperName . '"');
    }
}
