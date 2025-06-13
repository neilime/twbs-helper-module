<?php

namespace TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper;

class Variant extends \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\AbstractHelper
{
    public const VARIANT_PRIMARY = 'primary';
    public const VARIANT_SECONDARY = 'secondary';
    public const VARIANT_SUCCESS = 'success';
    public const VARIANT_DANGER = 'danger';
    public const VARIANT_WARNING = 'warning';
    public const VARIANT_INFO = 'info';
    public const VARIANT_LIGHT = 'light';
    public const VARIANT_DARK = 'dark';
    public const VARIANT_LINK = 'link';

    protected static $optionName = 'variant';

    protected static $allowedOptions = [
        self::VARIANT_PRIMARY,
        self::VARIANT_SECONDARY,
        self::VARIANT_SUCCESS,
        self::VARIANT_DANGER,
        self::VARIANT_WARNING,
        self::VARIANT_INFO,
        self::VARIANT_LIGHT,
        self::VARIANT_DARK,
        self::VARIANT_LINK,
    ];

    public function getClassesFromOption(...$options): array
    {
        $variant = $options[0] ?? null;
        $prefix = $options[1] ?? null;
        $allowedVariantPrefix = $options[2] ?? null;

        $this->validateOption($variant, $allowedVariantPrefix);

        if ($prefix) {
            $variant = $this->getHtmlClassHelper()->getPrefixedClass($variant, $prefix);
        }

        return [$variant];
    }

    public function classesIncludeVariant(
        iterable $classes,
        string $prefix,
        string $allowedVariantPrefix
    ): bool {
        foreach ($classes as $testClass) {
            $testClass = $this->getHtmlClassHelper()->trimClassPrefix($testClass, $prefix);

            if ($this->isVariantOption($testClass)) {
                return true;
            }

            if ($this->isPrefixedVariantOption($testClass, $allowedVariantPrefix)) {
                return true;
            }
        }

        return false;
    }

    protected function validateOption($option, ?string $allowedVariantPrefix = null)
    {
        if (!is_string($option)) {
            throw new \InvalidArgumentException(sprintf(
                '"%s" option expects a string, "%s" given',
                static::$optionName,
                is_object($option) ? get_class($option) : gettype($option)
            ));
        }

        $this->validateStringOption($option, $allowedVariantPrefix);
    }

    protected function validateStringOption(string $option, ?string $allowedVariantPrefix = null)
    {
        if ($this->isVariantOption($option)) {
            return;
        }

        if (!$allowedVariantPrefix) {
            throw new \InvalidArgumentException(sprintf(
                '"%s" option "%s" is not supported. Expects one of these values "%s"',
                static::$optionName,
                $option,
                implode(',', static::$allowedOptions)
            ));
        }

        if (!$this->isPrefixedVariantOption($option, $allowedVariantPrefix)) {
            throw new \InvalidArgumentException(sprintf(
                '"%s" option "%s" is not supported. Expects one of these values "%s" or "%s"',
                static::$optionName,
                $option,
                implode(',', static::$allowedOptions),
                implode(',', array_map(function ($allowedOption) use ($allowedVariantPrefix) {
                    return $this->getHtmlClassHelper()->getPrefixedClass($allowedOption, $allowedVariantPrefix);
                }, static::$allowedOptions)),
            ));
        }

        return;
    }

    public function isVariantOption(string $option): bool
    {
        return in_array($option, static::$allowedOptions, true);
    }

    public function isPrefixedVariantOption(string $option, string $allowedVariantPrefix): bool
    {
        $regexWithAllowedVariantPrefix = '/^' . $allowedVariantPrefix
            . '-(' . implode('|', static::$allowedOptions) . ')$/';

        return (bool) preg_match($regexWithAllowedVariantPrefix, $option);
    }
}
