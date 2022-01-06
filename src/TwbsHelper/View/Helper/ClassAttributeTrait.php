<?php

namespace TwbsHelper\View\Helper;

trait ClassAttributeTrait
{
    // Allowed variants
    protected static $variants = [
        'danger',
        'dark',
        // Added in BS4
        'info',
        'light',
        // Added in BS4
        'link',
        'primary',
        'secondary',
        // BS4 Renamed .btn-default to .btn-secondary
        'success',
        'warning',
    ];

    // Allowed sizes
    protected static $sizes = [
        'sm',
        'md',
        'lg',
        'xl',
    ];

    protected function hasClassAttribute(string $classAttribute, string $class): bool
    {
        return preg_match('/(\s|^)' . preg_quote($class, '/') . '(\s|$)/', $classAttribute);
    }

    protected function getClassesAttribute(string $classAttribute, $cleanClasses = true): array
    {
        $classes = explode(' ', $classAttribute);
        return $cleanClasses ? $this->cleanClassesAttribute($classes) : $classes;
    }

    protected function setClassesToElement(
        \Laminas\Form\ElementInterface $element,
        iterable $addClasses = [],
        iterable $removeClasses = []
    ): \Laminas\Form\ElementInterface {
        return $element->setAttributes(
            $this->setClassesToAttributes(
                $element->getAttributes(),
                $addClasses,
                $removeClasses
            )
        );
    }

    public function setClassesToAttributes(
        iterable $attributes,
        iterable $addClasses = [],
        iterable $removeClasses = []
    ): iterable {
        $classes = $this->addClassesAttribute($attributes['class'] ?? '', $addClasses);
        if ($classes) {
            $classes = array_diff(
                $classes,
                is_array($removeClasses) ? $removeClasses : iterator_to_array($removeClasses)
            );
            $attributes['class'] = implode(' ', $classes);
        }

        return $attributes;
    }

    protected function addClassesAttribute(string $classAttribute, iterable $classes): array
    {
        return $this->cleanClassesAttribute(array_merge(
            $this->getClassesAttribute($classAttribute, false),
            is_array($classes) ? $classes : iterator_to_array($classes)
        ));
    }

    protected function cleanClassesAttribute(iterable $classes): array
    {
        $classes = array_unique(
            array_filter(
                is_array($classes) ? $classes : iterator_to_array($classes),
                function ($class) {
                    return !!trim($class);
                }
            )
        );
        sort($classes);
        return $classes;
    }

    public function getPrefixedClass(string $class, string $prefix): string
    {
        if (!strstr($prefix, '%s')) {
            return $prefix . '-' . $class;
        }

        return sprintf($prefix, $class);
    }

    protected function getVariants(): array
    {
        return static::$variants;
    }

    protected function getVariantClass(string $variant, string $prefix, string $allowedVariantPrefix = null): string
    {
        $variants = $this->getVariants();
        if (
            !in_array($variant, $variants, true)
            && (!$allowedVariantPrefix
                || !preg_match('/^' . $allowedVariantPrefix . '-(' . implode('|', $variants) . ')$/', $variant))
        ) {
            throw new \InvalidArgumentException('Variant "' . $variant . '" does not exist');
        }

        return $this->getPrefixedClass($variant, $prefix);
    }

    protected function getSizes(): array
    {
        return static::$sizes;
    }

    public function getSizeClass(string $size, string $prefix): string
    {
        if (!in_array($size, $this->getSizes())) {
            throw new \InvalidArgumentException('Size "' . $size . '" does not exist');
        }

        return $this->getPrefixedClass($size, $prefix);
    }

    protected function getColumnClass($column): string
    {
        if ($column === true) {
            return 'col';
        }

        if (
            // "auto" or number col class. Example: "auto" or "6"
            !preg_match('/(\s|^)([1-9]|1[0-2]|auto)(\s|$)/', $column)
            // Sized col class. Example: "sm-6"
            && !preg_match('/^(' . implode('|', $this->getSizes()) . ')-([1-9]|1[0-2])$/', $column)
        ) {
            throw new \InvalidArgumentException('Column "' . $column . '" is not valid');
        }

        return $this->getPrefixedClass($column, 'col');
    }

    protected function getOffsetClass($column): string
    {
        if (
            // "auto" or number col class. Example: "auto" or "6"
            !preg_match('/(\s|^)([1-9]|1[0-2]|auto)(\s|$)/', $column)
            // Sized col class. Example: "sm-6"
            && !preg_match('/^(' . implode('|', $this->getSizes()) . ')-([1-9]|1[0-2])$/', $column)
        ) {
            throw new \InvalidArgumentException('Column "' . $column . '" is not valid');
        }

        return $this->getPrefixedClass($column, 'offset');
    }

    protected function hasColumnClassAttribute(string $classAttribute): bool
    {
        return
            // Simple "col" class
            preg_match('/(\s|^)col(\s|$)/', $classAttribute)
            // "auto" or number col class. Example: "col-auto" or "col-6"
            || preg_match('/(\s|^)col-([1-9]|1[0-2]|auto)(\s|$)/', $classAttribute)
            // Sized col class. Example: "col-sm-6"
            || preg_match(
                '/(\s|^)col-(' . implode('|', $this->getSizes()) . ')-([1-9]|1[0-2])(\s|$)/',
                $classAttribute
            );
    }

    protected function getColumnCounterpartClass(string $column): string
    {
        if ($column === 'auto') {
            return $column;
        }

        if (preg_match('/^([1-9]|1[0-2]|auto)$/', $column, $matches)) {
            return $this->getColumnClass((int) $matches[1]);
        }

        if (preg_match('/^(' . implode('|', $this->getSizes()) . ')-([1-9]|1[0-2])$/', $column, $matches)) {
            return $this->getColumnClass(
                $matches[1] . '-' . (12 - (int) $matches[2])
            );
        }

        throw new \InvalidArgumentException('Column class "' . $column . '" is not valid');
    }

    protected function getOffsetCounterpartClass(string $column): string
    {
        if ($column === 'auto') {
            return '';
        }

        if (preg_match('/^([1-9]|1[0-2]|auto)$/', $column, $matches)) {
            return $this->getOffsetClass((int) $matches[1]);
        }

        if (preg_match('/^(' . implode('|', $this->getSizes()) . ')-([1-9]|1[0-2])$/', $column, $matches)) {
            return $this->getOffsetClass(
                $matches[1] . '-' . (12 - (int) $matches[2])
            );
        }

        throw new \InvalidArgumentException('Column class "' . $column . '" is not valid');
    }
}
