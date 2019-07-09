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

    protected function getClassesAttribute(string $sClassAttribute, $bCleanClasses = true): array
    {
        $aClasses = explode(' ', $sClassAttribute);
        return $bCleanClasses ? $this->cleanClassesAttribute($aClasses) : $aClasses;
    }

    protected function setClassesToAttributes(array $aAttributes, array $aClasses): array
    {
        $aClasses = $this->addClassesAttribute($aAttributes['class'] ?? '', $aClasses);
        if ($aClasses) {
            $aAttributes['class'] = join(' ', $aClasses);
        }
        return $aAttributes;
    }

    protected function addClassesAttribute(string $sClassAttribute, array $aClasses): array
    {
        return $this->cleanClassesAttribute(array_merge(
            $this->getClassesAttribute($sClassAttribute, false),
            $aClasses
        ));
    }

    protected function cleanClassesAttribute(array $aClasses): array
    {
        $aClasses = array_unique(
            array_filter(
                $aClasses,
                function ($sClass) {
                    return !!trim($sClass);
                }
            )
        );
        sort($aClasses);
        return $aClasses;
    }

    protected function getVariants(): array
    {
        return static::$variants;
    }

    protected function getVariantClass(string $sVariant, string $sPrefix, string $sAllowedVariantPrefix = null): string
    {
        $aVariants = $this->getVariants();
        if (
            !in_array($sVariant, $aVariants, true)
            && (!$sAllowedVariantPrefix
                || !preg_match('/^' . $sAllowedVariantPrefix . '-(' . join('|', $aVariants) . ')$/', $sVariant))
        ) {
            throw new \InvalidArgumentException('Variant "' . $sVariant . '" does not exist');
        }
        return $sPrefix . '-' . $sVariant;
    }

    protected function getSizes(): array
    {
        return static::$sizes;
    }

    protected function getSizeClass(string $sSize, string $sPrefix): string
    {
        if (!in_array($sSize, $this->getSizes())) {
            throw new \InvalidArgumentException('Size "' . $sSize . '" does not exist');
        }
        return $sPrefix . '-' . $sSize;
    }
}
