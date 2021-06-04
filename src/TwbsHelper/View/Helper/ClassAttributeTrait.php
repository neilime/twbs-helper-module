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

    // Allowed alignment
    protected static $alignments = [
        'baseline',
        'top',
        'middle',
        'bottom',
        'text-top',
        'text-bottom',
    ];

    protected function hasClassAttribute(string $sClassAttribute, string $sClass): bool
    {
        return preg_match('/(\s|^)' . preg_quote($sClass, '/') . '(\s|$)/', $sClassAttribute);
    }

    protected function getClassesAttribute(string $sClassAttribute, $bCleanClasses = true): array
    {
        $aClasses = explode(' ', $sClassAttribute);
        return $bCleanClasses ? $this->cleanClassesAttribute($aClasses) : $aClasses;
    }

    protected function setClassesToElement(
        \Laminas\Form\ElementInterface $oElement,
        iterable $aAddClasses = [],
        iterable $aRemoveClasses = []
    ): \Laminas\Form\ElementInterface {
        return $oElement->setAttributes(
            $this->setClassesToAttributes(
                $oElement->getAttributes(),
                $aAddClasses,
                $aRemoveClasses
            )
        );
    }

    public function setClassesToAttributes(
        iterable $aAttributes,
        iterable $aAddClasses = [],
        iterable $aRemoveClasses = []
    ): iterable {
        $aClasses = $this->addClassesAttribute($aAttributes['class'] ?? '', $aAddClasses);
        if ($aClasses) {
            $aClasses = array_diff(
                $aClasses,
                is_array($aRemoveClasses) ? $aRemoveClasses : iterator_to_array($aRemoveClasses)
            );
            $aAttributes['class'] = join(' ', $aClasses);
        }
        return $aAttributes;
    }

    protected function addClassesAttribute(string $sClassAttribute, iterable $aClasses): array
    {
        return $this->cleanClassesAttribute(array_merge(
            $this->getClassesAttribute($sClassAttribute, false),
            is_array($aClasses) ? $aClasses : iterator_to_array($aClasses)
        ));
    }

    protected function cleanClassesAttribute(iterable $aClasses): array
    {
        $aClasses = array_unique(
            array_filter(
                is_array($aClasses) ? $aClasses : iterator_to_array($aClasses),
                function ($sClass) {
                    return !!trim($sClass);
                }
            )
        );
        sort($aClasses);
        return $aClasses;
    }

    public function getPrefixedClass(string $sClass, string $sPrefix): string
    {
        if (!strstr($sPrefix, '%s')) {
            return $sPrefix . '-' . $sClass;
        }

        return sprintf($sPrefix, $sClass);
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
        return $this->getPrefixedClass($sVariant, $sPrefix);
    }

    protected function getSizes(): array
    {
        return static::$sizes;
    }

    public function getSizeClass(string $sSize, string $sPrefix): string
    {
        if (!in_array($sSize, $this->getSizes())) {
            throw new \InvalidArgumentException('Size "' . $sSize . '" does not exist');
        }
        return $this->getPrefixedClass($sSize, $sPrefix);
    }

    protected function getColumnClass($sColumn): string
    {
        if ($sColumn === true) {
            return 'col';
        }

        if (
            // "auto" or number col class. Example: "auto" or "6"
            !preg_match('/(\s|^)([1-9]|1[0-2]|auto)(\s|$)/', $sColumn)
            // Sized col class. Example: "sm-6"
            && !preg_match('/^(' . join('|', $this->getSizes()) . ')-([1-9]|1[0-2])$/', $sColumn)
        ) {
            throw new \InvalidArgumentException('Column "' . $sColumn . '" is not valid');
        }
        return $this->getPrefixedClass($sColumn, 'col');
    }

    protected function getOffsetClass($sColumn): string
    {
        if (
            // "auto" or number col class. Example: "auto" or "6"
            !preg_match('/(\s|^)([1-9]|1[0-2]|auto)(\s|$)/', $sColumn)
            // Sized col class. Example: "sm-6"
            && !preg_match('/^(' . join('|', $this->getSizes()) . ')-([1-9]|1[0-2])$/', $sColumn)
        ) {
            throw new \InvalidArgumentException('Column "' . $sColumn . '" is not valid');
        }
        return $this->getPrefixedClass($sColumn, 'offset');
    }

    protected function hasColumnClassAttribute(string $sClassAttribute): bool
    {
        return
            // Simple "col" class
            preg_match('/(\s|^)col(\s|$)/', $sClassAttribute)
            // "auto" or number col class. Example: "col-auto" or "col-6"
            || preg_match('/(\s|^)col-([1-9]|1[0-2]|auto)(\s|$)/', $sClassAttribute)
            // Sized col class. Example: "col-sm-6"
            || preg_match('/(\s|^)col-(' . join('|', $this->getSizes()) . ')-([1-9]|1[0-2])(\s|$)/', $sClassAttribute);
    }

    protected function getColumnCounterpartClass(string $sColumn): string
    {
        if ($sColumn === 'auto') {
            return $sColumn;
        }

        if (preg_match('/^([1-9]|1[0-2]|auto)$/', $sColumn, $aMatches)) {
            return $this->getColumnClass((int) $aMatches[1]);
        }

        if (preg_match('/^(' . join('|', $this->getSizes()) . ')-([1-9]|1[0-2])$/', $sColumn, $aMatches)) {
            return $this->getColumnClass(
                $aMatches[1] . '-' . (12 - (int) $aMatches[2])
            );
        }
        throw new \InvalidArgumentException('Column class "' . $sColumn . '" is not valid');
    }

    protected function getOffsetCounterpartClass(string $sColumn): string
    {
        if ($sColumn === 'auto') {
            return '';
        }

        if (preg_match('/^([1-9]|1[0-2]|auto)$/', $sColumn, $aMatches)) {
            return $this->getOffsetClass((int) $aMatches[1]);
        }

        if (preg_match('/^(' . join('|', $this->getSizes()) . ')-([1-9]|1[0-2])$/', $sColumn, $aMatches)) {
            return $this->getOffsetClass(
                $aMatches[1] . '-' . (12 - (int) $aMatches[2])
            );
        }
        throw new \InvalidArgumentException('Column class "' . $sColumn . '" is not valid');
    }

    protected function getAlignments(): array
    {
        return static::$alignments;
    }

    protected function getAlignmentClass(string $sAlignment): string
    {
        if (!in_array($sAlignment, $this->getAlignments())) {
            throw new \InvalidArgumentException('Alignment "' . $sAlignment . '" does not exist');
        }
        return $this->getPrefixedClass($sAlignment, 'align');
    }
}
