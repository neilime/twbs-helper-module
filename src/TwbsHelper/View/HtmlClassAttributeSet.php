<?php

namespace TwbsHelper\View;

/**
 * Class for storing and processing HTML class attribute.
 */
class HtmlClassAttributeSet extends \ArrayObject
{
    public const ATTRIBUTE_NAME = 'class';

    public function __construct($classes = [])
    {
        if (is_string($classes)) {
            $classes = explode(' ', $classes);
        }

        parent::__construct($classes);
        $this->cleanAttribute();
    }

    /**
     * Merge attributes with existing attributes.
     */
    public function merge(iterable $classes): self
    {
        $this->exchangeArray(array_merge(
            $this->getArrayCopy(),
            \Laminas\Stdlib\ArrayUtils::iteratorToArray($classes)
        ));

        $this->cleanAttribute();

        return $this;
    }

    public function remove(string $classToRemove): ?string
    {
        $iterator = $this->getIterator();

        while ($iterator->valid()) {
            $currentClass = $iterator->current();
            if ($currentClass === $classToRemove) {
                $this->offsetUnset($iterator->key());
                return $currentClass;
            }

            $iterator->next();
        }

        return null;
    }

    /**
     * Return a string of tag attributes.
     */
    public function __toString(): string
    {
        $this->cleanAttribute();
        $classes = $this->getArrayCopy();

        return implode(' ', $classes);
    }

    public function cleanAttribute(): self
    {
        $classes = $this->getArrayCopy();

        $classes = array_unique(array_filter(array_map('trim', array_filter($classes))));
        sort($classes);

        $this->exchangeArray($classes);

        return $this;
    }
}
