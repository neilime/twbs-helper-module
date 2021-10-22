<?php

namespace TwbsHelper\View\Helper;

trait StyleAttributeTrait
{
    protected function getStylesAttribute(string $styleAttribute, $cleanStyles = true): array
    {
        $styles = array_map(
            function ($style) {
                return explode(':', $style);
            },
            explode(';', $styleAttribute)
        );

        $parsedStyles = [];
        foreach ($styles as $style) {
            if (count($style) !== 2) {
                continue;
            }

            $parsedStyles[$style[0]] = $style[1];
        }

        return $cleanStyles ? $this->cleanStylesAttribute($parsedStyles) : $parsedStyles;
    }

    protected function setStylesToElement(
        \Laminas\Form\ElementInterface $element,
        iterable $addStyles = [],
        iterable $removeStyles = []
    ): \Laminas\Form\ElementInterface {
        return $element->setAttributes(
            $this->setStylesToAttributes(
                $element->getAttributes(),
                $addStyles,
                $removeStyles
            )
        );
    }

    public function setStylesToAttributes(
        iterable $attributes,
        iterable $addStyles = [],
        iterable $removeStyles = []
    ): iterable {
        $styles = $this->addStylesAttribute($attributes['style'] ?? '', $addStyles);
        if ($styles) {
            $styles = array_diff_key(
                $styles,
                is_array($removeStyles) ? $removeStyles : iterator_to_array($removeStyles)
            );

            $stylesContent = '';
            foreach ($styles as $key => $style) {
                $stylesContent .= $key . ': ' . $style . ';';
            }

            $attributes['style'] = $stylesContent;
        }

        return $attributes;
    }

    protected function addStylesAttribute(string $styleAttribute, iterable $styles): array
    {
        return array_merge(
            $this->getStylesAttribute($styleAttribute),
            $this->cleanStylesAttribute($styles)
        );
    }

    protected function cleanStylesAttribute(iterable $styles): array
    {
        $cleanedStyles = [];
        foreach ($styles as $key => $value) {
            $cleanedStyles[strtolower(trim($key))] = trim($value);
        }

        ksort($cleanedStyles);
        return $cleanedStyles;
    }
}
