<?php

namespace TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper;

class Gutter extends \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Size
{
    public const GUTTER_HORIZONTAL = 'horizontal';
    public const GUTTER_VERTICAL = 'vertical';

    protected static $optionName = 'gutter';

    protected static $allowedGutterOptions = [
        self::GUTTER_HORIZONTAL,
        self::GUTTER_VERTICAL,
    ];

    public function getClassesFromOption(...$options): array
    {
        $option = $options[0] ?? null;
        $this->validateOption($option);

        if (is_int($option)) {
            $option = (string)$option;
        }

        if (is_string($option)) {
            return [$this->getHtmlClassHelper()->getPrefixedClass((string) $option, 'g')];
        }

        if (\Laminas\Stdlib\ArrayUtils::isList($option)) {
            $classes = [];
            foreach ($option as $optionValue) {
                $classes = array_merge(
                    $classes,
                    $this->getClassesFromOption($optionValue)
                );
            }
            return $classes;
        }

        $classes = [];
        if (isset($option[static::GUTTER_HORIZONTAL])) {
            $classes[] = $this->getHtmlClassHelper()->getPrefixedClass($option[static::GUTTER_HORIZONTAL], 'gx');
            unset($option[static::GUTTER_HORIZONTAL]);
        }

        if (isset($option[static::GUTTER_VERTICAL])) {
            $classes[] = $this->getHtmlClassHelper()->getPrefixedClass($option[static::GUTTER_VERTICAL], 'gy');
            unset($option[static::GUTTER_VERTICAL]);
        }

        return $classes;
    }

    protected function validateOption($option)
    {
        if (is_int($option)) {
            $option = (string)$option;
        }

        if (is_string($option)) {
            return $this->validateStringOption($option);
        }

        if (\Laminas\Stdlib\ArrayUtils::isList($option)) {
            return $this->validateListOption($option);
        }

        if (\Laminas\Stdlib\ArrayUtils::isHashTable($option)) {
            return $this->validateHashOption($option);
        }

        throw new \InvalidArgumentException(sprintf(
            '"%s" option expects an integer, a string or an array, "%s" given',
            static::$optionName,
            is_object($option) ? get_class($option) : gettype($option)
        ));
    }

    protected function validateIntOption(int $option)
    {
        if ($option >= 0 && $option <= 5) {
            return;
        }
        throw new \InvalidArgumentException(sprintf(
            '"%s" option expects an integer between 0 and 5, "%s" given',
            static::$optionName,
            $option
        ));
    }

    protected function validateStringOption(string $option)
    {
        if (
            // Number option. Example: "5"
            preg_match('/^[0-5]$/', $option)
            // Sized numbered option. Example: "sm-5"
            || preg_match('/^(' . implode('|', static::$allowedOptions) . ')-([0-5])$/', $option)
        ) {
            return;
        }

        throw new \InvalidArgumentException(sprintf(
            '"%s" option "%s" is not supported. ' .
                'Expects a number between 0 and 5; ' .
                'or a sized (%s) numbered value. Example: "sm-5"',
            static::$optionName,
            $option,
            implode(',', static::$allowedOptions)
        ));
    }

    protected function validateListOption(array $option)
    {
        foreach ($option as $optionValue) {
            if (is_int($optionValue)) {
                return $this->validateIntOption($optionValue);
            }

            if (\Laminas\Stdlib\ArrayUtils::isHashTable($optionValue)) {
                return $this->validateHashOption($optionValue);
            }

            throw new \InvalidArgumentException(sprintf(
                '"%s" option list entry expects an integer or an associative array, "%s" given',
                static::$optionName,
                is_object($optionValue) ? get_class($optionValue) : gettype($optionValue)
            ));
        }
    }

    protected function validateHashOption(array $option)
    {
        foreach (static::$allowedGutterOptions as $allowedOption) {
            if (isset($option[$allowedOption])) {
                $this->validateIntOption($option[$allowedOption]);
                unset($option[$allowedOption]);
            }
        }

        if (!$option) {
            return;
        }

        throw new \InvalidArgumentException(sprintf(
            '"%s" array option does accept given keys "%s", it only accepts "%s"',
            static::$optionName,
            implode(', ', array_keys($option)),
            implode(', ', static::$allowedGutterOptions),
        ));
    }
}
