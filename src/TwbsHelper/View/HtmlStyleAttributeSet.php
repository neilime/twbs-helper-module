<?php

namespace TwbsHelper\View;

/**
 * Class for storing and processing HTML class attribute.
 */
class HtmlStyleAttributeSet extends \ArrayObject
{
    public const ATTRIBUTE_NAME = 'style';

    public function __construct($styles = [])
    {
        if (is_string($styles)) {
            preg_match_all("/([\w-]+)\s*:\s*([^;]+)\s*;?/", $styles, $matches, PREG_SET_ORDER);
            $styles = [];
            foreach ($matches as $match) {
                $styles[$match[1]] = $match[2];
            }
        }

        parent::__construct($styles);
    }

    /**
     * Merge styles with existing styles.
     */
    public function merge(iterable $styles): self
    {
        $this->exchangeArray(array_merge(
            $this->getArrayCopy(),
            \Laminas\Stdlib\ArrayUtils::iteratorToArray($styles)
        ));
        $this->cleanAttribute();

        return $this;
    }

    /**
     * Return a string of tag attributes.
     */
    public function __toString(): string
    {
        $this->cleanAttribute();

        $styles = $this->getArrayCopy();

        $stylesContent = '';
        foreach ($styles as $key => $style) {
            $stylesContent .= ($stylesContent ? ' ' : '') . $key . ': ' . $style . ';';
        }
        return $stylesContent;
    }

    public function cleanAttribute(): self
    {
        $styles = $this->getArrayCopy();

        $cleanedStyles = [];
        foreach ($styles as $key => $value) {
            $cleanedStyles[strtolower(trim($key))] = trim($value);
        }

        ksort($cleanedStyles);

        $this->exchangeArray($cleanedStyles);

        return $this;
    }
}
