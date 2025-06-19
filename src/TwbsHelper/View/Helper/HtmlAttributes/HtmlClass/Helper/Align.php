<?php

namespace TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper;

use InvalidArgumentException;

class Align extends Size
{
    protected static $optionName = 'align';

    public const ALIGN_START = 'start';
    public const ALIGN_CENTER = 'center';
    public const ALIGN_END = 'end';

    protected static $allowedAlignOptions = [
        self::ALIGN_START,
        self::ALIGN_CENTER,
        self::ALIGN_END,
    ];

    public function getClassesFromOption(...$options): array
    {
        $align = $options[0] ?? null;
        $prefix = $options[1] ?? null;

        $this->validateOption($align);

        if ($prefix) {
            $align = $this->getHtmlClassHelper()->getPrefixedClass($align, $prefix);
        }

        return [$align];
    }

    protected function validateStringOption(string $option)
    {
        if (in_array($option, static::$allowedAlignOptions, true)) {
            return;
        }

        $sizedClassRegex = '/^(' . implode('|', static::$allowedOptions) . ')-(' .
            implode('|', static::$allowedAlignOptions) . ')$/';

        if (preg_match($sizedClassRegex, $option)) {
            return;
        }

        throw new InvalidArgumentException(sprintf(
            '"%s" option "%s" is not supported. Expects one of these values "%s"; ' .
                'or Sized (%s) class. Example: "sm-center"',
            static::$optionName,
            $option,
            implode(',', static::$allowedAlignOptions),
            implode(',', static::$allowedOptions)
        ));
    }
}
