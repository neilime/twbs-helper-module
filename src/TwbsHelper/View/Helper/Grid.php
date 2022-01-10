<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for grid
 */
class Grid extends \TwbsHelper\View\Helper\AbstractGroupWithHelper
{
    protected static $helperName = 'gridRow';

    protected static $allowedOptions = ['fluid', 'container'];

    protected function renderGroupContainer(string $content, iterable $optionsAndAttributes, bool $escape): string
    {
        if (isset($optionsAndAttributes['container']) && $optionsAndAttributes['container'] === false) {
            return $content;
        }

        $attributes = $this->prepareAttributes($optionsAndAttributes);

        return $this->getView()->plugin('container')->__invoke(
            $content,
            $optionsAndAttributes['container'] ?? true,
            $attributes,
            $escape
        );
    }
}
