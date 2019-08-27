<?php

namespace TwbsHelper\View\Helper;

trait HtmlTrait
{

    protected $indentation = '    ';

    public function htmlElement(
        string $sTag,
        array $aAttributes = [],
        string $sContent = null,
        bool $bEscape = true
    ): string {

        $sAttributes = $this->attributesToString($aAttributes, $sTag);

        $sElementContent = '<' . $sTag . $sAttributes;
        if ($sContent === null) {
            $sElementContent .= $this->getClosingBracket();
            return $sElementContent;
        }

        if ($bEscape && !$this->isHTML($sContent)) {
            $sContent = $this->getView()->plugin('escapeHtml')->__invoke($sContent);
        }

        $sTag = strtolower($sTag);

        $bForceIndentation = in_array(
            $sTag,
            ['div', 'blockquote', 'figure', 'ul', 'fieldset', 'nav'],
            true
        );

        return sprintf(
            '<%s%s>%s</%s>',
            $sTag,
            $sAttributes,
            $this->addProperIndentation($sContent, $bForceIndentation),
            $sTag
        );
    }

    public function addProperIndentation(
        string $sContent,
        bool $bForceIndentation = false,
        string $sIndentation = null
    ): string {

        if (!$sContent) {
            return $sContent;
        }

        $aLines = explode(
            PHP_EOL,
            $sContent
        );

        if (count($aLines) === 1 && !$bForceIndentation) {
            return $sContent;
        }

        if ($sIndentation === null) {
            $sIndentation = $this->indentation;
        }

        // Add proper indentation
        $sContent = join(PHP_EOL, array_map(function ($sValue) use ($sIndentation) {
            return $sIndentation . $sValue;
        }, $aLines));

        return PHP_EOL . $sContent . PHP_EOL;
    }

    public function removeIndentation(string $sContent): string
    {
        return join(PHP_EOL, array_map('ltrim', explode(
            PHP_EOL,
            $sContent
        )));
    }

    protected function isHTML(string $sString): bool
    {
        return $sString !== strip_tags($sString);
    }

    protected function attributesToString(array $aAttributes, string $sTag): string
    {
        $aPossibleHelpers = [
            [$this, 'createAttributesString'],
            [$this, 'htmlAttribs'],
        ];
        switch ($sTag) {
            case 'button':
                array_unshift(
                    $aPossibleHelpers,
                    [$this->getView()->plugin('formButton'), 'createAttributesString']
                );
                break;
        }

        foreach ($aPossibleHelpers as $aPossibleHelper) {
            if (!is_callable($aPossibleHelper)) {
                continue;
            }

            try {
                $sMarkup = trim(call_user_func($aPossibleHelper, $aAttributes));
                return $sMarkup ? ' ' . $sMarkup : '';
            } catch (\Throwable $oException) {
                if ($oException instanceof \BadMethodCallException) {
                    continue;
                }
                throw $oException;
            }
        }
        throw new \LogicException('No helpers available to transform attributes to string');
    }
}
