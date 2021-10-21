<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for media list
 */
class MediaList extends \TwbsHelper\View\Helper\AbstractGroup
{
    protected static $groupClass = 'list-unstyled';

    protected static $groupTag = 'ul';

    protected static $helperName = 'media';

    protected function renderGroupItem(
        \Laminas\View\Helper\HelperInterface $itemHelper,
        array $arguments
    ): string {
        $arguments[1] = empty($arguments[1])
            ? ['tag' => 'li']
            : \Laminas\Stdlib\ArrayUtils::merge($arguments[1], ['tag' => 'li']);

        return parent::renderGroupItem($itemHelper, $arguments);
    }
}
