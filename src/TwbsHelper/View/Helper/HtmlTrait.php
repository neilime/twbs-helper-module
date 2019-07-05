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




        $sElementContent = '<' . $sTag . $this->attributesToString($aAttributes);
        if ($sContent === null) {
            $sElementContent .= $this->getClosingBracket();
            return $sElementContent;
        }

        if ($bEscape && !$this->isHTML($sContent)) {
            $sContent = $this->getView()->plugin('escapeHtml')->__invoke($sContent);
        }

        $sTag = strtolower($sTag);

        $bForceIndentation = in_array($sTag, ['div', 'blockquote', 'figure', 'ul'], true);

        return sprintf(
            '<%s%s>%s</%s>',
            $sTag,
            $this->attributesToString($aAttributes),
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

    protected function isHTML(string $sString): bool
    {
        return $sString !== strip_tags($sString);
    }

    protected function attributesToString(array $aAttributes): string
    {
        $aPossibleHelpers = [
            [$this, 'htmlAttribs'],
            [$this, 'createAttributesString'],
            [$this->getView()->plugin('form'), 'createAttributesString'],
        ];

        foreach ($aPossibleHelpers as $aPossibleHelper) {
            if (!is_callable($aPossibleHelper)) {
                continue;
            }
            $sMarkup = trim($aPossibleHelper($aAttributes));
            return $sMarkup ? ' ' . $sMarkup : '';
        }
        throw new \LogicException('No helpers available to transform attributes to string');
    }
}
