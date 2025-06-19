<?php

declare(strict_types=1);

namespace TwbsHelper\View;

use ArrayObject;
use Laminas\Escaper\Escaper;
use Traversable;
use Stringable;

use function array_merge;
use function implode;
use function in_array;
use function is_array;
use function is_scalar;
use function iterator_to_array;
use function json_encode;
use function sprintf;

use const JSON_HEX_AMP;
use const JSON_HEX_APOS;
use const JSON_HEX_QUOT;
use const JSON_HEX_TAG;
use const JSON_THROW_ON_ERROR;

/**
 * Exact copy of \Laminas\View\HtmlAttributesSet final class, in order to allow extending it.
 * Class for storing and processing HTML tag attributes.
 *
 * @psalm-type AttributeSet = array<string, scalar|array|null>
 */
class OriginalHtmlAttributesSet extends ArrayObject implements Stringable
{
    public function __construct(
        /**
         * HTML escaper
         */
        private readonly Escaper $escaper,
        iterable $attributes = []
    ) {
        $attributes    = $attributes instanceof Traversable ? iterator_to_array($attributes, true) : $attributes;
        parent::__construct($attributes);
    }

    /**
     * Set several attributes at once.
     *
     * @param AttributeSet $attributes
     */
    public function set(iterable $attributes): self
    {
        foreach ($attributes as $name => $value) {
            $this->offsetSet($name, $value);
        }

        return $this;
    }

    /**
     * Add a value to an attribute.
     *
     * Sets the attribute if it does not exist.
     *
     * @param scalar|array|null $value
     */
    public function add(string $name, $value): self
    {
        $this->offsetSet(
            $name,
            $this->offsetExists($name)
                ? array_merge((array) $this->offsetGet($name), (array) $value)
                : $value
        );

        return $this;
    }

    /**
     * Merge attributes with existing attributes.
     *
     * @param AttributeSet $attributes
     */
    public function merge(iterable $attributes): self
    {
        foreach ($attributes as $name => $value) {
            $this->add($name, $value);
        }

        return $this;
    }

    /**
     * Whether the named attribute equals or contains the given value
     *
     * @param scalar|array|null $value
     */
    public function hasValue(string $name, $value): bool
    {
        if (! $this->offsetExists($name)) {
            return false;
        }

        $storeValue = $this->offsetGet($name);
        if (is_array($storeValue) && is_scalar($value)) {
            return in_array($value, $storeValue, true);
        }

        return $value === $storeValue;
    }

    /**
     * Return a string of tag attributes.
     */
    public function __toString(): string
    {
        $xhtml = '';

        foreach ($this->getArrayCopy() as $key => $value) {
            $key = $this->escaper->escapeHtml((string) $key);

            if ((str_starts_with($key, 'on') || ('constraints' === $key)) && ! is_scalar($value)) {
                // Don't escape event attributes; _do_ substitute double quotes with singles
                // non-scalar data should be cast to JSON first
                $flags = JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_THROW_ON_ERROR;
                $value = json_encode($value, $flags);
            }

            if (!str_starts_with($key, 'on') && 'constraints' !== $key && is_array($value)) {
                // Non-event keys and non-constraints keys with array values
                // should have values separated by whitespace
                $value = implode(' ', $value);
            }

            $value  = $this->escaper->escapeHtmlAttr((string) $value);
            $quote  = str_contains($value, '"') ? "'" : '"';
            $xhtml .= sprintf(' %2$s=%1$s%3$s%1$s', $quote, $key, $value);
        }

        return $xhtml;
    }
}
