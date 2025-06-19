<?php

namespace TwbsHelper\View;

use Laminas\Stdlib\ArrayUtils;
use ArrayObject;
use Stringable;

/**
 * Class for storing and processing HTML style attribute.
 * @extends ArrayObject<string, string>
 */
class HtmlStyleAttributeSet extends ArrayObject implements Stringable
{
    public const ATTRIBUTE_NAME = 'style';

    /**
     * Constructor.
     *
     * @param string|iterable<string, string> $styles
     *   If a string is provided, it should be a CSS style string (e.g., "color: red; font-size: 12px;").
     *   If an iterable is provided, it should contain key-value pairs of styles.
     */
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
     * @param iterable<string, string> $styles
     */
    public function merge(iterable $styles): self
    {
        $this->exchangeArray(array_merge(
            $this->getArrayCopy(),
            ArrayUtils::iteratorToArray($styles)
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
            $cleanedStyles[strtolower(trim($key))] = trim((string) $value);
        }

        ksort($cleanedStyles);

        $this->exchangeArray($cleanedStyles);

        return $this;
    }
}
