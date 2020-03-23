<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering jumbotrons
 */
class Jumbotron extends \TwbsHelper\View\Helper\AbstractHtmlElement
{

    public const JUMBOTRON_TITLE = 'title';
    public const JUMBOTRON_LEAD = 'lead';
    public const JUMBOTRON_TEXT = 'text';
    public const JUMBOTRON_LINK = 'link';
    public const JUMBOTRON_BUTTON = 'button';
    public const JUMBOTRON_DIVIDER = '---';

    /**
     * Generates a 'jumbotron' element
     *
     * @param string|array  $sContent The content of the alert
     * @param array  $aAttributes Options & Html attributes
     * @param boolean $bEscape True espace html content '$sContent'. Default True
     * @return string The jumbotron XHTML.
     */
    public function __invoke(
        $sContent,
        array $aOptionsAndAttributes = [],
        bool $bEscape = true
    ): string {
        $bFluid = !empty($aOptionsAndAttributes['fluid']);
        unset($aOptionsAndAttributes['fluid']);
        if ($bFluid) {
            $aOptionsAndAttributes = $this->setClassesToAttributes($aOptionsAndAttributes, ['jumbotron-fluid']);
        }

        if (is_array($sContent)) {
            $sContent = $this->renderJumbotronParts($sContent, $bEscape);
        }

        if ($bFluid) {
            $sContent = $this->htmlElement(
                'div',
                ['class' => 'container'],
                $sContent,
                $bEscape
            );
        }

        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes($aOptionsAndAttributes, ['jumbotron']),
            $sContent,
            $bEscape
        );
    }

    protected function renderJumbotronParts(array $aParts = [], bool $bEscape = true): string
    {
        $sContent = '';

        foreach ($aParts as $sKey => $sPartContent) {
            $sType = is_numeric($sKey) ? self::JUMBOTRON_TEXT : $sKey;
            if (is_string($sPartContent)) {
                $aOptions = [];
                if ($sPartContent === self::JUMBOTRON_DIVIDER) {
                    $sType =  self::JUMBOTRON_DIVIDER;
                } else {
                    $aOptions['content'] = $sPartContent;
                }
            } elseif (is_array($sPartContent)) {
                $aOptions = $sPartContent;
            }

            $sContent .= ($sContent ? PHP_EOL : '') . $this->renderJumbotronPart(
                $sType,
                $aOptions,
                $bEscape
            );
        }

        return $sContent;
    }

    protected function renderJumbotronPart(
        string $sType,
        array $aOptions = [],
        bool $bEscape = true
    ): string {

        $aAttributes = $aOptions['attributes'] ?? [];
        switch ($sType) {
            case self::JUMBOTRON_TITLE:
                $sTag = 'h1';
                $aAttributes = $this->setClassesToAttributes(
                    $aAttributes,
                    ['display-' . ($aOptions['size'] ?? 4)]
                );
                break;

            case self::JUMBOTRON_LEAD:
                $sTag = 'p';
                $aAttributes = $this->setClassesToAttributes($aAttributes, ['lead']);
                break;

            case self::JUMBOTRON_TEXT:
                $sTag = 'p';
                break;

            case self::JUMBOTRON_BUTTON:
                return $this->getView()->plugin('formButton')->__invoke($aOptions);

            case self::JUMBOTRON_DIVIDER:
                $sTag = 'hr';
                break;

            default:
                throw new \DomainException('Jumbotron part type "' . $sType . '" is not supported');
        }


        if (empty($aOptions['content']) && $sType !== self::JUMBOTRON_DIVIDER) {
            throw new \DomainException('Jumbotron part type "' . $sType . '" expects a content, none given');
        }

        return $this->htmlElement(
            $sTag,
            $aAttributes,
            $aOptions['content'] ?? null,
            $bEscape
        );
    }
}
