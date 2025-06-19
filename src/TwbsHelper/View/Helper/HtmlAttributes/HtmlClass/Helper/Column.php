<?php

namespace TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper;

use InvalidArgumentException;

class Column extends Size
{
    protected static $optionName = 'column';

    protected static $prefix = 'col';

    /**
     * Get prefixed column classes.
     */
    public function getClassesFromOption(...$options): array
    {
        $column = $options[0] ?? null;
        $prefix = $options[1] ?? static::$prefix;

        $this->validateOption($column);

        if ($column === true) {
            return [$prefix];
        }

        if (is_iterable($column)) {
            $classes = [];
            foreach ($column as $col) {
                if ($col === true) {
                    $classes[] = $prefix;
                } else {
                    $classes[] = $this->getColumnClass($col, $prefix);
                }
            }
            return $classes;
        }

        return [$this->getColumnClass($column, $prefix)];
    }

    public function classesIncludeColumn(
        iterable $classes
    ): bool {
        foreach ($classes as $testClass) {
            if ($testClass === static::$prefix) {
                return true;
            }

            $testClass = $this->getHtmlClassHelper()->trimClassPrefix($testClass, static::$prefix);

            if ($this->isColumnOption($testClass)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Get prefixed column class.
     * @param string|int $column column option to be transformed into prefexed class. Allowed values:
     *        "auto"
     *        int from 1-12
     *        all allowed sizes (sm, md,...)
     *        int/"auto" prefixed by allowed sizes (sm-9, md-auto,...)
     * @param string $prefix
     */
    protected function getColumnClass($column, string $prefix): string
    {
        return $this->getHtmlClassHelper()->getPrefixedClass($column, $prefix);
    }

    protected function validateOption($option)
    {
        if ($option === true) {
            return;
        }

        if (is_int($option)) {
            $option = (string) $option;
        }

        if (is_string($option)) {
            return $this->validateStringOption($option);
        }

        if (is_iterable($option)) {
            return $this->validateIterableOption($option);
        }

        throw new InvalidArgumentException(sprintf(
            '"%s" option expects a string, an integer, an iterable or true value, "%s" given',
            static::$optionName,
            get_debug_type($option)
        ));
    }

    protected function validateStringOption(string $option)
    {
        if (!$this->isColumnOption($option)) {
            throw new InvalidArgumentException(sprintf(
                '"%s" option "%s" is not supported. ' .
                    'Expects one of these values "%s"; ' .
                    'or "auto" or number value. Example: "auto" or "6"; ' .
                    'or a sized numbered value. Example: "sm-6"',
                static::$optionName,
                $option,
                implode(',', static::$allowedOptions)
            ));
        }
    }

    protected function isColumnOption(string $option): bool
    {
        return
            // "auto" or number option. Example: "auto" or "6"
            preg_match('/^([1-9]|1[0-2]|auto)$/', $option)
            // Sized option. Example "sm"
            || in_array($option, static::$allowedOptions, true)
            // Sized numbered option. Example: "sm-6"
            || preg_match('/^(' . implode('|', static::$allowedOptions) . ')-([1-9]|1[0-2]|auto)$/', $option);
    }

    protected function validateIterableOption(iterable $option)
    {
        foreach ($option as $column) {
            $this->validateOption($column);
        }
    }
}
