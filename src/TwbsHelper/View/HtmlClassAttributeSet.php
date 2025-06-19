<?php

namespace TwbsHelper\View;

use Laminas\Stdlib\ArrayUtils;
use ArrayObject;
use Stringable;

/**
 * Class for storing and processing HTML class attribute.
 * @extends ArrayObject<int, string>
 */
class HtmlClassAttributeSet extends ArrayObject implements Stringable
{
    public const ATTRIBUTE_NAME = 'class';

    /**
     * Constructor.
     *
     * @param string|iterable<string> $classes
     *   If a string is provided, it should be a space-separated list of classes (e.g., "class1 class2 class3").
     *   If an iterable is provided, it should contain class names.
     */
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
     * @param iterable<string> $classes
     */
    public function merge(iterable $classes): self
    {
        $this->exchangeArray(array_merge(
            $this->getArrayCopy(),
            ArrayUtils::iteratorToArray($classes)
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
