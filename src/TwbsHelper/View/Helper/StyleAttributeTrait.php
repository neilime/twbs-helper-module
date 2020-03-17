<?php

namespace TwbsHelper\View\Helper;

trait StyleAttributeTrait
{
    protected function getStylesAttribute(string $sStyleAttribute, $bCleanStyles = true): array
    {
        $aStyles = [];
        foreach (array_map(
            function ($sStyle) {
                return explode(':', $sStyle);
            },
            explode(';', $sStyleAttribute)
        ) as $aStyle) {
            if (count($aStyle) !== 2) {
                continue;
            }
            $aStyles[$aStyle[0]] = $aStyle[1];
        }

        return $bCleanStyles?$this->cleanStylesAttribute($aStyles) : $aStyles;
    }

    protected function setStylesToElement(
        \Laminas\Form\ElementInterface $oElement,
        array $aAddStyles = [],
        array $aRemoveStyles = []
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
        array $aAttributes,
        array $aAddStyles = [],
        array $aRemoveStyles = []
    ): array {
        $aStyles = $this->addStylesAttribute($aAttributes['style'] ?? '', $aAddStyles);
        if ($aStyles) {
            $aStyles = array_diff_key($aStyles, $aRemoveStyles);

            $sStyles = '';
            foreach ($aStyles as $sKey => $sStyle) {
                $sStyles .= $sKey . ': '.$sStyle.';';
            }

            $aAttributes['style'] = $sStyles;
        }
        return $aAttributes;
    }

    protected function addStylesAttribute(string $sStyleAttribute, array $aStyles): array
    {
        return array_merge(
            $this->getStylesAttribute($sStyleAttribute),
            $this->cleanStylesAttribute($aStyles)
        );
    }

    protected function cleanStylesAttribute(array $aStyles): array
    {
        $aCleanedStyles = [];
        foreach ($aStyles as $sKey => $sValue) {
            $aCleanedStyles[strtolower(trim($sKey))] = trim($sValue);
        }
        ksort($aCleanedStyles);
        return $aCleanedStyles;
    }
}
