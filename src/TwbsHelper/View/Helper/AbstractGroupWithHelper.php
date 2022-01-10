<?php

namespace TwbsHelper\View\Helper;

/**
 * Abstract helper for group rendering
 */
abstract class AbstractGroupWithHelper extends \TwbsHelper\View\Helper\AbstractGroup
{
    /**
     * @var string
     */
    protected static $helperName;

    // @var \Laminas\View\Helper\HelperInterface
    protected $itemViewHelper = null;

    protected function renderGroupItem(
        $itemKey,
        $itemSpec,
        iterable $attributes,
        iterable $options,
        bool $escape
    ): string {
        $itemHelper = $this->getItemViewHelper();
        return call_user_func_array([$itemHelper, '__invoke'], [$itemSpec, $attributes, $escape]);
    }

    /**
     * @throws \LogicException if the view or plugin method is unavailable in the current context
     */
    protected function getItemViewHelper(): \Laminas\View\Helper\HelperInterface
    {
        if ($this->itemViewHelper) {
            return $this->itemViewHelper;
        }

        $phpRenderer = $this->getView();
        if ($phpRenderer !== null && method_exists($phpRenderer, 'plugin')) {
            return $this->itemViewHelper = $phpRenderer->plugin(static::$helperName);
        }

        throw new \LogicException('Unable to retrieve helper "' . static::$helperName . '"');
    }
}
