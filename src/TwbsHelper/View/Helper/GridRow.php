<?php

namespace TwbsHelper\View\Helper;

use TwbsHelper\View\HtmlAttributesSet;

/**
 * Helper for grid row
 */
class GridRow extends AbstractGroupWithHelper
{
    protected static $groupClass = 'row';

    protected static $groupTag = 'div';

    protected static $helperName = 'gridColumn';

    protected static $allowedOptions = [
        'align',
        'column',
        'columns',
        'gutter',
        'justify_content',
    ];

    protected function prepareAttributes(iterable $optionsAndAttributes): HtmlAttributesSet
    {
        $attributes = parent::prepareAttributes($optionsAndAttributes);

        if (!empty($optionsAndAttributes['columns'])) {
            $attributes['class']->merge(
                $this->getView()->plugin('htmlClass')->plugin('column')->getClassesFromOption(
                    $optionsAndAttributes['columns'],
                    'row-cols'
                ),
            );
        }

        if (isset($optionsAndAttributes['gutter'])) {
            $attributes['class']->merge(
                $this->getView()->plugin('htmlClass')->plugin('gutter')->getClassesFromOption(
                    $optionsAndAttributes['gutter']
                ),
            );
        }

        if (!empty($optionsAndAttributes['align'])) {
            $align = $optionsAndAttributes['align'];
            $attributes['class']->merge(
                $this->getView()->plugin('htmlClass')->plugin('align')->getClassesFromOption(
                    $align,
                    'align-items'
                )
            );
        }


        if (!empty($optionsAndAttributes['justify_content'])) {
            $justifyContent = $optionsAndAttributes['justify_content'];
            $attributes['class']->merge(
                $this->getView()->plugin('htmlClass')->plugin('justifyContent')->getClassesFromOption(
                    $justifyContent
                )
            );
        }

        return $attributes;
    }

    protected function renderGroupItem(
        $itemKey,
        $itemSpec,
        iterable $attributes,
        iterable $options,
        bool $escape
    ): string {
        if (isset($options['column']) && !isset($attributes['column'])) {
            $attributes['column'] = $options['column'];
        }

        return parent::renderGroupItem(
            $itemKey,
            $itemSpec,
            $attributes,
            $options,
            $escape
        );
    }
}
