<?php

namespace TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper;

class Offset extends \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Size
{
    protected static $optionName = 'offset';

    protected static $prefix = 'offset';

    /**
     * Get prefixed offset classes.
     */
    public function getClassesFromOption(...$options): array
    {
        $offset = $options[0] ?? null;
        $prefix = $options[1] ?? static::$prefix;

        $this->validateOption($offset);

        if (is_iterable($offset)) {
            $classes = [];
            foreach ($offset as $col) {
                $classes[] = $this->getOffsetClass($col, $prefix);
            }
            return $classes;
        }

        return [$this->getOffsetClass($offset, $prefix)];
    }

    /**
     * Get prefixed offset class.
     * @param string|int $offset offset option to be transformed into prefexed class. Allowed values:
     *        "auto"
     *        all allowed sizes (sm, md,...)
     *        int/"auto" prefixed by allowed sizes (sm-9, md-auto,...)
     * @param string $prefix
     */
    protected function getOffsetClass($offset, string $prefix): string
    {
        return $this->getHtmlClassHelper()->getPrefixedClass($offset, $prefix);
    }

    protected function validateOption($option)
    {
        if (is_string($option)) {
            return $this->validateStringOption($option);
        }

        if (is_iterable($option)) {
            return $this->validateIterableOption($option);
        }

        throw new \InvalidArgumentException(sprintf(
            '"%s" option expects a string or an iterable value, "%s" given',
            static::$optionName,
            is_object($option) ? get_class($option) : gettype($option)
        ));
    }

    protected function validateStringOption(string $option)
    {
        if (!$this->isOffsetOption($option)) {
            throw new \InvalidArgumentException(sprintf(
                '"%s" option "%s" is not supported. ' .
                    'Expects Sized (%s) numbered class. Example: "sm-6"',
                static::$optionName,
                $option,
                implode(',', static::$allowedOptions)
            ));
        }
    }

    public function isOffsetOption(string $option): bool
    {
        return
            // Sized class. Example: "sm-6"
            preg_match('/^(' . implode('|', self::$allowedOptions) . ')-([0-9]|1[0-2])$/', $option);
    }

    protected function validateIterableOption(iterable $option)
    {
        foreach ($option as $offset) {
            $this->validateOption($offset);
        }
    }
}
