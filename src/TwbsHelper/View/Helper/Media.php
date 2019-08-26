<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering media objects
 */
class Media extends \TwbsHelper\View\Helper\AbstractHtmlElement
{

    const MEDIA_IMAGE = 'img';
    const MEDIA_TITLE = 'title';
    const MEDIA_TEXT = 'text';

    /**
     * Generates a 'media' element
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

        if (is_array($sContent)) {
            $sContent = $this->renderParts($sContent, $bEscape);
        }

        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes($aOptionsAndAttributes, ['media']),
            $sContent,
            $bEscape
        );
    }

    protected function renderParts(array $aParts = [], bool $bEscape = true): string
    {
        $sContent = '';
        $sBodyPart = '';
        foreach ($aParts as $sKey => $sPartContent) {
            $sType = is_numeric($sKey) ? self::MEDIA_TEXT : $sKey;
            if (is_string($sPartContent)) {
                $aOptions = ['content' => $sPartContent];
            } elseif (is_array($sPartContent)) {
                $aOptions = $sPartContent;
            }

            $sPartContent = $this->renderPart(
                $sType,
                $aOptions,
                $bEscape
            );

            // Every part except image are wrapped in a body element
            if ($sType !== self::MEDIA_IMAGE) {
                $sBodyPart .= ($sBodyPart ? PHP_EOL : '') . $sPartContent;
            } else {
                if ($sBodyPart) {
                    $sBodyPart = $this->htmlElement(
                        'div',
                        ['class' => 'media-body'],
                        $sBodyPart,
                        $bEscape
                    );
                    $sContent .= ($sContent ? PHP_EOL : '') . $sBodyPart;
                    $sBodyPart = '';
                }
                $sContent .= ($sContent ? PHP_EOL : '')  . $sPartContent;
            }
        }
        if ($sBodyPart) {
            $sContent .= ($sContent ? PHP_EOL : '') . $this->htmlElement(
                'div',
                ['class' => 'media-body'],
                $sBodyPart,
                $bEscape
            );
        }

        return $sContent;
    }

    protected function renderPart(
        string $sType,
        array $aOptions = [],
        bool $bEscape = true
    ): string {

        $aAttributes = $aOptions['attributes'] ?? [];
        switch ($sType) {
            case self::MEDIA_IMAGE:
                return $this->getView()->plugin('image')->__invoke(...$aOptions);

            case self::MEDIA_TITLE:
                if (empty($aOptions['content'])) {
                    throw new \DomainException('Media part type "' . $sType . '" expects a content, none given');
                }
                $sTag = 'h5';
                $aAttributes = $this->setClassesToAttributes(
                    $aAttributes,
                    ['mt-0']
                );
                break;

            case self::MEDIA_TEXT:
                if (empty($aOptions['content'])) {
                    throw new \DomainException('Media part type "' . $sType . '" expects a content, none given');
                }
                return $aOptions['content'];

            default:
                throw new \DomainException('Media part type "' . $sType . '" is not supported');
        }

        return $this->htmlElement(
            $sTag,
            $aAttributes,
            $aOptions['content'] ?? null,
            $bEscape
        );
    }
}
