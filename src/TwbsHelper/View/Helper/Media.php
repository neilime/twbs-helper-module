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
    const MEDIA_MEDIA = 'media';

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

        $sTag = $aOptionsAndAttributes['tag'] ?? 'div';
        unset($aOptionsAndAttributes['tag']);

        if (is_array($sContent)) {
            $sContent = $this->renderParts($sContent, $bEscape);
        }

        return $this->htmlElement(
            $sTag,
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
            if (is_array($sPartContent)) {
                $aOptions = $sPartContent;
            } elseif (is_string($sPartContent)) {
                $aOptions = ['content' => $sPartContent];
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
                $sContent .= ($sContent ? PHP_EOL : '') . $sPartContent;
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

        if (
            $sType !== self::MEDIA_IMAGE
            && \Laminas\Stdlib\ArrayUtils::isList($aOptions)
        ) {
            $that = $this;
            return join(
                PHP_EOL,
                array_map(function ($aOptionsItem) use ($that, $sType, $bEscape) {
                    if (is_string($aOptionsItem)) {
                        $aOptionsItem = [
                            'content' => $aOptionsItem,
                        ];
                    }
                    return $that->renderPart($sType, $aOptionsItem, $bEscape);
                }, $aOptions)
            );
        }

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
                $sTag = 'p';
                break;

            case self::MEDIA_MEDIA:
                if (empty($aOptions['content'])) {
                    throw new \DomainException('Media part type "' . $sType . '" expects a content, none given');
                }
                return $this->__invoke($aOptions['content'], $aAttributes, $bEscape);

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
