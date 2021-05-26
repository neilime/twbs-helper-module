<?php

namespace TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper;

class ColumnOffsetCounterpart extends \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Column
{
    /**
     * Get column counter part classes.
     */
    public function getClassesFromOption(...$options): array
    {
        $column = $options[0] ?? null;
        $prefix = $options[1] ?? null;

        $this->validateOption($column);

        if ($column === 'auto') {
            return [];
        }

        if (preg_match('/^([1-9]|1[0-2])$/', $column, $matches)) {
            return $this->getHtmlClassHelper()->plugin('offset')->getClassesFromOption((int) $matches[1], $prefix);
        }

        if (preg_match('/^(' . implode('|', static::$allowedOptions) . ')-([1-9]|1[0-2])$/', $column, $matches)) {
            return $this->getHtmlClassHelper()->plugin('offset')->getClassesFromOption(
                $matches[1] . '-' . (12 - (int) $matches[2]),
                $prefix
            );
        }

        throw new \LogicException(sprintf(
            '"%s" option is not supported',
            static::$optionName,
        ));
    }
}
