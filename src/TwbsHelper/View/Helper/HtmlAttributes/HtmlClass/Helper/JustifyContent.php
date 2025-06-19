<?php

namespace TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper;

use InvalidArgumentException;

class JustifyContent extends Size
{
    public const JUSTIFY_CONTENT_START = 'start';
    public const JUSTIFY_CONTENT_END = 'end';
    public const JUSTIFY_CONTENT_CENTER = 'center';
    public const JUSTIFY_CONTENT_BETWEEN = 'between';
    public const JUSTIFY_CONTENT_AROUND = 'around';
    public const JUSTIFY_CONTENT_EVENLY = 'evenly';

    protected static $optionName = 'justify_content';

    protected static $prefix = 'justify-content';

    protected static $allowedJustifyContentOptions = [
        self::JUSTIFY_CONTENT_START,
        self::JUSTIFY_CONTENT_END,
        self::JUSTIFY_CONTENT_CENTER,
        self::JUSTIFY_CONTENT_BETWEEN,
        self::JUSTIFY_CONTENT_AROUND,
        self::JUSTIFY_CONTENT_EVENLY,
    ];


    public function getClassesFromOption(...$options): array
    {
        $justifyContent = $options[0] ?? null;
        $prefix = $options[1] ?? static::$prefix;

        $this->validateOption($justifyContent);

        if ($prefix) {
            $justifyContent = $this->getHtmlClassHelper()->getPrefixedClass($justifyContent, $prefix);
        }

        return [$justifyContent];
    }

    protected function validateStringOption(string $option)
    {
        if (in_array($option, static::$allowedJustifyContentOptions, true)) {
            return;
        }

        $sizedClassRegex = '/^(' . implode('|', static::$allowedOptions) . ')-(' .
            implode('|', static::$allowedJustifyContentOptions) . ')$/';

        if (preg_match($sizedClassRegex, $option)) {
            return;
        }

        throw new InvalidArgumentException(sprintf(
            '"%s" option "%s" is not supported. Expects one of these values "%s"; ' .
                'or Sized (%s) class. Example: "sm-center"',
            static::$optionName,
            $option,
            implode(',', static::$allowedJustifyContentOptions),
            implode(',', static::$allowedOptions)
        ));
    }
}
