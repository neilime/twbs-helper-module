<?php

namespace TwbsHelper\View;

/**
 * Class for storing and processing HTML tag attributes.
 */
class HtmlAttributesSet extends \TwbsHelper\View\OriginalHtmlAttributesSet
{
    protected static $attributeWithSet = [
        \TwbsHelper\View\HtmlClassAttributeSet::ATTRIBUTE_NAME => \TwbsHelper\View\HtmlClassAttributeSet::class,
        \TwbsHelper\View\HtmlStyleAttributeSet::ATTRIBUTE_NAME => \TwbsHelper\View\HtmlStyleAttributeSet::class,
    ];

    /**
     * Constructor.
     *
     * @param \Laminas\Escaper\Escaper $htmlEscaper General HTML escaper
     * @param iterable $attributes Attributes to manage
     */
    public function __construct(
        \Laminas\Escaper\Escaper $htmlEscaper,
        iterable $attributes = []
    ) {
        foreach (static::$attributeWithSet as $attributeName => $attributeSetClassName) {
            if (!empty($attributes[$attributeName])) {
                $attributes[$attributeName] = new $attributeSetClassName(
                    $attributes[$attributeName] ?? []
                );
            } else {
                unset($attributes[$attributeName]);
            }
        }

        parent::__construct(
            $htmlEscaper,
            $attributes
        );

        $this->cleanAttributes();
    }

    #[\ReturnTypeWillChange]
    public function offsetGet($key)
    {
        if (!$this->offsetExists($key) && isset(static::$attributeWithSet[$key])) {
            $attributeSetClassName = static::$attributeWithSet[$key];
            $this->offsetSet($key, new $attributeSetClassName([]));
        }
        return parent::offsetGet($key);
    }

    public function offsetsUnset(iterable $keys): self
    {
        foreach ($keys as $key) {
            $this->offsetUnset($key);
        }
        return $this;
    }

    public function offsetUnset($key): void
    {
        if ($this->offsetExists($key)) {
            parent::offsetUnset($key);
        }
    }

    /**
     * Merge attributes with existing attributes.
     */
    public function merge(iterable $attributes): self
    {
        foreach ($attributes as $name => $value) {
            if (isset(static::$attributeWithSet[$name])) {
                $attributeSetClassName = static::$attributeWithSet[$name];

                $value = new $attributeSetClassName($value);

                if (!$value->count()) {
                    continue;
                }

                if ($this->offsetExists($name)) {
                    $this->offsetGet($name)->merge($value);
                    continue;
                }
            }

            if (!$this->offsetExists($name)) {
                $this->offsetSet($name, $value);
            }
        }

        return  $this;
    }

    public function getArrayCopy(): array
    {
        $this->cleanAttributes();
        return parent::getArrayCopy();
    }

    /**
     * Return a string of tag attributes.
     */
    public function __toString(): string
    {
        $this->cleanAttributes();
        return parent::__toString();
    }

    protected function cleanAttributes(): self
    {
        foreach (array_keys(static::$attributeWithSet) as $attributeName) {
            if (!empty($this[$attributeName])) {
                $this[$attributeName]->cleanAttribute();
            }

            if (empty($this[$attributeName]) || !$this[$attributeName]->count()) {
                unset($this[$attributeName]);
            }
        }

        $cleanedAttributes = [];
        foreach ($this as $key => $value) {
            $cleanedAttributes[strtolower($key)] = $value;
        }
        ksort($cleanedAttributes);

        $this->exchangeArray($cleanedAttributes);

        return $this;
    }
}
