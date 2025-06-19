<?php

namespace TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper;

use InvalidArgumentException;

class Spacing extends AbstractHelper
{
    public const PROPERTY_MARGIN = 'm';
    public const PROPERTY_PADDING = 'p';

    public const SIDE_TOP = 't';
    public const SIDE_BOTTOM = 'b';
    public const SIDE_LEFT = 'l';
    public const SIDE_RIGHT = 'r';
    public const SIDE_X = 'x';
    public const SIDE_Y = 'y';
    public const SIDE_ALL = '';

    public const SIZE_AUTO = 'auto';

    protected static $optionName = 'spacing';

    protected static $allowedProperties = [
        self::PROPERTY_MARGIN,
        self::PROPERTY_PADDING,
    ];

    protected static $allowedSides = [
        self::SIDE_TOP,
        self::SIDE_BOTTOM,
        self::SIDE_LEFT,
        self::SIDE_RIGHT,
        self::SIDE_X,
        self::SIDE_Y,
        self::SIDE_ALL,
    ];

    protected static $allowedSizes = [
        self::SIZE_AUTO,
        '0',
        '1',
        '2',
        '3',
        '4',
        '5',
    ];

    public function getClassesFromOption(...$options): array
    {
        $spacing = $options[0] ?? null;

        $this->validateOption($spacing);

        return [$spacing];
    }

    protected function validateOption($option)
    {
        if (!is_string($option)) {
            throw new InvalidArgumentException(sprintf(
                '"%s" option expects a string, "%s" given',
                static::$optionName,
                get_debug_type($option)
            ));
        }

        $this->validateStringOption($option);
    }

    protected function validateStringOption(string $option)
    {
        // Expect a string like mt-3, p-0, mx-auto, ...
        if (!$this->isSpacingClass($option)) {
            throw new InvalidArgumentException(sprintf(
                '"%s" option "%s" is invalid. Expects a string like "m-0", "mt-3", "mx-auto", ...',
                static::$optionName,
                $option
            ));
        }
    }

    protected function isSpacingClass(string $testClass): bool
    {
        return preg_match('/^(' . implode('|', static::$allowedProperties) . ')?-?(' . implode('|', static::$allowedSides) . ')?-?(' . implode('|', static::$allowedSizes) . ')$/', $testClass);
    }
}
