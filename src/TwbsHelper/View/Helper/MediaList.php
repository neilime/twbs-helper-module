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
        \Zend\View\Helper\HelperInterface $oItemHelper,
        array $aArguments
    ): string {
        $aArguments[1] = empty($aArguments[1])
            ? ['tag' => 'li']
            : \Zend\Stdlib\ArrayUtils::merge($aArguments[1], ['tag' => 'li']);

        return parent::renderGroupItem($oItemHelper, $aArguments);
    }
}
