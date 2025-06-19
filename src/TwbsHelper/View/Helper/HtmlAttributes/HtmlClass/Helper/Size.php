<?php

namespace TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper;

use InvalidArgumentException;

class Size extends AbstractHelper
{
    public const SIZE_XS = 'xs';
    public const SIZE_SM = 'sm';
    public const SIZE_MD = 'md';
    public const SIZE_LG = 'lg';
    public const SIZE_XL = 'xl';
    public const SIZE_XXL = 'xxl';

    protected static $optionName = 'size';

    protected static $allowedOptions = [
        self::SIZE_XS,
        self::SIZE_SM,
        self::SIZE_MD,
        self::SIZE_LG,
        self::SIZE_XL,
        self::SIZE_XXL,
    ];

    public function getClassesFromOption(...$options): array
    {
        $size = $options[0] ?? null;
        $prefix = $options[1] ?? null;
        $suffix = $options[2] ?? null;

        $this->validateOption($size);

        if ($prefix) {
            $size = $this->getHtmlClassHelper()->getPrefixedClass($size, $prefix);
        }

        if ($suffix) {
            $size = $this->getHtmlClassHelper()->getSuffixedClass($size, $suffix);
        }

        return [$size];
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
        if (!in_array($option, static::$allowedOptions)) {
            throw new InvalidArgumentException(sprintf(
                '"%s" option "%s" is not supported. Expects one of these values "%s"',
                static::$optionName,
                $option,
                implode(',', static::$allowedOptions)
            ));
        }
    }
}
