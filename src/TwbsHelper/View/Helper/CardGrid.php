<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for card grid
 */
class CardGrid extends \TwbsHelper\View\Helper\AbstractGroupWithHelper
{
    protected static $groupClass = 'row';

    protected static $groupTag = 'div';

    protected static $helperName = 'card';

    protected static $allowedOptions = ['column'];

    protected function renderGroupItem(
        $itemKey,
        $itemSpec,
        iterable $attributes,
        iterable $options,
        bool $escape
    ): string {
        $colOption = $attributes['column'] ?? $options['column'] ?? true;
        $columnClasses = $this->getView()->plugin('htmlClass')->plugin('column')->getClassesFromOption($colOption);

        $groupItemContent = parent::renderGroupItem(
            $itemKey,
            $itemSpec,
            $attributes,
            $options,
            $escape
        );

        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            ['class' => $columnClasses],
            $groupItemContent
        );
    }
}
