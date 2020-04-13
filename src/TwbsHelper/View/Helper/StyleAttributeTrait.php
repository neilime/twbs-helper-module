<?php

namespace TwbsHelper\View\Helper;

trait StyleAttributeTrait
{
    protected function getStylesAttribute(string $sStyleAttribute, $bCleanStyles = true): array
    {
        $aStyles = [];
        foreach (
            array_map(
                function ($sStyle) {
                    return explode(':', $sStyle);
                },
                explode(';', $sStyleAttribute)
            ) as $aStyle
        ) {
            if (count($aStyle) !== 2) {
                continue;
            }
            $aStyles[$aStyle[0]] = $aStyle[1];
        }

        return $bCleanStyles ? $this->cleanStylesAttribute($aStyles) : $aStyles;
    }

    protected function setStylesToElement(
        \Laminas\Form\ElementInterface $oElement,
        iterable $aAddStyles = [],
        iterable $aRemoveStyles = []
    ): \Laminas\Form\ElementInterface {
        return $oElement->setAttributes(
            $this->setStylesToAttributes(
                $oElement->getAttributes(),
                $aAddStyles,
                $aRemoveStyles
            )
        );
    }

    public function setStylesToAttributes(
        iterable $aAttributes,
        iterable $aAddStyles = [],
        iterable $aRemoveStyles = []
    ): iterable {
        $aStyles = $this->addStylesAttribute($aAttributes['style'] ?? '', $aAddStyles);
        if ($aStyles) {
            $aStyles = array_diff_key(
                $aStyles,
                is_array($aRemoveStyles) ? $aRemoveStyles : iterator_to_array($aRemoveStyles)
            );

            $sStyles = '';
            foreach ($aStyles as $sKey => $sStyle) {
                $sStyles .= $sKey . ': ' . $sStyle . ';';
            }

            $aAttributes['style'] = $sStyles;
        }
        return $aAttributes;
    }

    protected function addStylesAttribute(string $sStyleAttribute, iterable $aStyles): array
    {
        return array_merge(
            $this->getStylesAttribute($sStyleAttribute),
            $this->cleanStylesAttribute($aStyles)
        );
    }

    protected function cleanStylesAttribute(iterable $aStyles): array
    {
        $aCleanedStyles = [];
        foreach ($aStyles as $sKey => $sValue) {
            $aCleanedStyles[strtolower(trim($sKey))] = trim($sValue);
        }
        ksort($aCleanedStyles);
        return $aCleanedStyles;
    }
}
