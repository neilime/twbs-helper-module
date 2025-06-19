<?php

namespace TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper;

use LogicException;

class ColumnCounterpart extends Column
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
            return [$column];
        }

        if (preg_match('/^([1-9]|1[0-2]|auto)$/', (string) $column, $matches)) {
            return parent::getClassesFromOption($matches[1], $prefix);
        }

        if (preg_match('/^(' . implode('|', static::$allowedOptions) . ')-([1-9]|1[0-2])$/', (string) $column, $matches)) {
            return parent::getClassesFromOption(
                $matches[1] . '-' . (12 - (int) $matches[2]),
                $prefix
            );
        }

        throw new LogicException(sprintf(
            '"%s" option is not supported',
            static::$optionName,
        ));
    }
}
