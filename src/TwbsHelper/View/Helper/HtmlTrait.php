<?php

namespace TwbsHelper\View\Helper;

trait HtmlTrait
{
    use \TwbsHelper\View\Helper\StyleAttributeTrait;
    use \TwbsHelper\View\Helper\ClassAttributeTrait;

    protected $indentation = '    ';

    public function htmlElement(
        string $sTag,
        iterable $aAttributes = [],
        string $sContent = null,
        bool $bEscape = true
    ): string {

        $sAttributes = $this->attributesToString($aAttributes, $sTag);

        $sElementContent = '<' . $sTag . $sAttributes;
        if ($sContent === null) {
            $sElementContent .= $this->getView()->plugin('HtmlTag')->getClosingBracket();
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

        // Divs must start on  new line
        $sContent = preg_replace('/<\/div>([^\s].*)/', '</div>' . PHP_EOL . '$1', $sContent);

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

        $sContent = '';
        $bShouldIndent = true;
        foreach ($aLines as $sLine) {
            if ($sLine && $bShouldIndent) {
                $sLine = $sIndentation . $sLine;
            }

            $bIsStartOfTextArea = !!preg_match('/<textarea[^>]*>/i', $sLine);
            if ($bIsStartOfTextArea) {
                $bShouldIndent = false;
            }

            $bIsEndOfTextArea = !!preg_match('/<\/textarea[^>]*>/i', $sLine);
            if ($bIsEndOfTextArea) {
                $bShouldIndent = true;
            }

            $sContent .= $sLine . PHP_EOL;
        }

        return PHP_EOL . $sContent;
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

    public function attributesToString(iterable $aAttributes, string $sTag): string
    {
        // Clean attributes
        if (!empty($aAttributes['class'])) {
            $aAttributes = $this->setClassesToAttributes($aAttributes);
        }
        if (!empty($aAttributes['style'])) {
            $aAttributes = $this->setStylesToAttributes($aAttributes);
        }
        if (!is_array($aAttributes)) {
            $aAttributes = iterator_to_array($aAttributes);
        }
        ksort($aAttributes);

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

        $oHelper = $this->getView()->plugin('HtmlTag');
        $oReflectionClass = new \ReflectionClass($oHelper);
        $oMethod = $oReflectionClass->getMethod('htmlAttribs');
        $oMethod->setAccessible(true);

        $sMarkup = trim($oMethod->invoke($oHelper, $aAttributes));
        return $sMarkup ? ' ' . $sMarkup : '';
    }
}
