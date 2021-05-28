<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering cards
 */
class Card extends \TwbsHelper\View\Helper\AbstractHtmlElement
{

    public const CARD_HEADER = 'header';
    public const CARD_HEADER_NAV_TABS = 'nav';
    public const CARD_FOOTER = 'footer';
    public const CARD_IMG_TOP = 'image_top';
    public const CARD_OVERLAY = 'overlay';
    public const CARD_LIST_GROUP = 'listGroup';
    public const CARD_BODY_TITLE = 'title';
    public const CARD_BODY_SUBTITLE = 'subtitle';
    public const CARD_BODY_TEXT = 'text';
    public const CARD_BODY_LINK = 'link';
    public const CARD_BODY_BLOCKQUOTE = 'blockquote';

    protected static $cardParts = [
        self::CARD_HEADER => 'renderCardHeader',
        self::CARD_HEADER_NAV_TABS => 'renderCardHeaderNav',
        self::CARD_FOOTER => 'renderCardFooter',
        self::CARD_IMG_TOP => 'renderCardImgTop',
        self::CARD_OVERLAY => 'renderCardOverlay',
        self::CARD_LIST_GROUP => 'renderCardListGroup'
    ];

    /**
     * Generates an 'alert' element
     *
     * @param  string  $sContent     The content of the alert
     * @param  array   $aAttributes  Html attributes of the "<div>" element
     * @param  boolean $bEscape      True espace html content '$sContent'. Default True
     * @return string The card XHTML.
     */
    public function __invoke(
        $sContent,
        array $aAttributes = [],
        bool $bEscape = true
    ) {
        return $this->renderCardContainer($sContent, $aAttributes, $bEscape);
    }

    protected function renderCardContainer($sContent, array $aAttributes = [], bool $bEscape = true): string
    {
        $aBodyAttributes = [];
        if (!empty($aAttributes['bodyVariant'])) {
            $aBodyAttributes['class'] = $this->getVariantClass($aAttributes['bodyVariant'], 'text');
        }
        unset($aAttributes['bodyVariant']);

        if (is_string($sContent)) {
            $sContent = $this->renderCardBody($sContent, $aBodyAttributes);
        } elseif (is_array($sContent)) {
            $sTmpContent = '';

            $aBodyItems = [];
            foreach ($sContent as $sKey => $aContentData) {
                if (\Laminas\Stdlib\ArrayUtils::isList($aContentData)) {
                    $aArguments = $aContentData;
                } else {
                    $aArguments = [$aContentData];
                }
                if (isset(self::$cardParts[$sKey])) {
                    // Close body item
                    if ($aBodyItems) {
                        $sTmpContent .= ($sTmpContent ? PHP_EOL : '') . $this->renderCardBody(
                            $aBodyItems,
                            $aBodyAttributes
                        );
                        $aBodyItems = [];
                    }

                    $sTmpContent .= ($sTmpContent ? PHP_EOL : '') . call_user_func_array(
                        [$this, self::$cardParts[$sKey]],
                        [$aArguments, $bEscape]
                    );
                } else {
                    $aBodyItems[$sKey] = $aContentData;
                }
            }

            if ($aBodyItems) {
                $sTmpContent .= ($sTmpContent ? PHP_EOL : '') . $this->renderCardBody($aBodyItems, $aBodyAttributes);
            }

            $sContent = $sTmpContent;
        }

        $aClasses = ['card'];
        if (!empty($aAttributes['bgVariant'])) {
            $aClasses[] = $this->getVariantClass($aAttributes['bgVariant'], 'bg');
        }
        unset($aAttributes['bgVariant']);

        if (!empty($aAttributes['borderVariant'])) {
            $aClasses[] = $this->getVariantClass($aAttributes['borderVariant'], 'border');
        }
        unset($aAttributes['borderVariant']);

        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes($aAttributes, $aClasses),
            $sContent,
            false
        );
    }

    protected function renderCardHeader(array $aArguments, bool $bEscape = true): string
    {
        $aAttributes = $this->setClassesToAttributes($aArguments[1] ?? [], ['card-header']);
        $sContent = $aArguments[0];
        return $this->htmlElement('div', $aAttributes, $sContent, $bEscape);
    }

    protected function renderCardHeaderNav(array $aArguments, bool $bEscape = true): string
    {
        $aAttributes = $aArguments[1] ?? [];
        $sContent = $aArguments[0];
        // Nav header
        $aOptions = [];
        if (is_string($sContent) || $sContent instanceof \Laminas\Navigation\Navigation) {
            $oContainer = $sContent;
        } elseif (is_array($sContent)) {
            if (\Laminas\Stdlib\ArrayUtils::isList($sContent)) {
                $oContainer = new \Laminas\Navigation\Navigation($sContent);
            } else {
                if (!isset($sContent['container'])) {
                    throw new \InvalidArgumentException('nav[\'container\'] is undefined');
                }
                if (isset($sContent['options'])) {
                    $aOptions = array_merge($aOptions, $sContent['options']);
                }

                $oContainer = $sContent['container'];

                if (\Laminas\Stdlib\ArrayUtils::isList($oContainer)) {
                    $oContainer = new \Laminas\Navigation\Navigation($oContainer);
                }
            }
        } else {
            throw new \InvalidArgumentException(sprintf(
                'Content argument expects a string, an array or an instance of "%s", "%s" given',
                '\Laminas\Navigation\Navigation',
                is_object($sContent) ? get_class($sContent) : gettype($sContent)
            ));
        }


        if (empty($aOptions['tabs']) && empty($aOptions['pills'])) {
            $aOptions['tabs'] = true;
        }

        if (!isset($aOptions['ulClass'])) {
            $aOptions['ulClass'] = empty($aOptions['pills']) ? 'card-header-tabs' : 'card-header-pills';
        }

        $sContent = $this->getView()->plugin('menu')->renderMenu($oContainer, $aOptions);

        return $this->renderCardHeader([$sContent, $aAttributes], $bEscape);
    }

    protected function renderCardFooter(array $aArguments, bool $bEscape = true): string
    {
        $aArguments[1] = $this->setClassesToAttributes($aArguments[1] ?? [], ['card-footer']);
        return $this->htmlElement('div', $aArguments[1], $aArguments[0], $bEscape);
    }

    protected function renderCardImgTop(array $aArguments, bool $bEscape = true): string
    {
        $aArguments[1] = $this->setClassesToAttributes($aArguments[1] ?? [], ['card-img-top']);
        return $this->getView()->plugin('image')->__invoke(...$aArguments);
    }

    protected function renderCardOverlay(array $aArguments, bool $bEscape = true): string
    {
        $aAttributes = $this->setClassesToAttributes($aArguments[1] ?? [], ['card-img-overlay']);
        $aItems = $aArguments[0];

        // Render image
        if (!isset($aItems['img'])) {
            throw new \InvalidArgumentException('overlay[\'img\'] is undefined');
        }
        $aItems['img'][1] = $this->setClassesToAttributes($aItems['img'][1] ?? [], ['card-img']);
        $sImgContent = $this->getView()->plugin('image')->__invoke(...$aItems['img']);
        unset($aItems['img']);

        $sContent = '';
        foreach ($aItems as $sType => $sTypeContent) {
            $sContent .= ($sContent ? PHP_EOL : '') . $this->renderCardItem($sType, $sTypeContent, $bEscape);
        }

        return $sImgContent . PHP_EOL . $this->htmlElement(
            'div',
            $aAttributes,
            $sContent,
            false
        );
    }

    protected function renderCardListGroup(array $aArguments, bool $bEscape = true): string
    {
        $aArguments[1] = $this->setClassesToAttributes($aArguments[1] ?? [], ['list-group-flush']);
        return $this->getView()->plugin('listGroup')->__invoke(...$aArguments);
    }

    protected function renderCardBody($sContent, array $aAttributes = [], bool $bEscape = true): string
    {
        if (is_array($sContent)) {
            $sTmpContent = '';

            foreach ($sContent as $sType => $sTypeContent) {
                $sTmpContent .= ($sTmpContent ? PHP_EOL : '') . $this->renderCardItem($sType, $sTypeContent, $bEscape);
            }

            $sContent = trim($sTmpContent);
        } else {
            // Content
            if ($bEscape) {
                $sContent = $this->getView()->plugin('escapeHtml')->__invoke($sContent);
            }
        }

        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes($aAttributes, ['card-body']),
            $sContent,
            false
        );
    }

    protected function renderCardItem($sType, $sTypeContent, bool $bEscape = true): string
    {
        $aTypeAttributes = [];
        switch (true) {
            case $sType === self::CARD_BODY_TITLE:
                $sTag = 'h5';
                $aClasses = ['card-title'];
                break;
            case $sType === self::CARD_BODY_SUBTITLE:
                $sTag = 'h6';
                $aClasses = ['card-subtitle'];
                break;
            case $sType === self::CARD_BODY_TEXT:
                $sTag = 'p';
                $aClasses = ['card-text'];
                break;
            case $sType === self::CARD_BODY_LINK:
                $sTag = 'a';
                $aClasses = ['card-link'];
                $aTypeAttributes['href'] = '#';
                break;
            case $sType === self::CARD_BODY_BLOCKQUOTE:
                $aArguments = [
                    $sTypeContent[0],
                    $sTypeContent[1] ?? '',
                    $sTypeContent[2] ?? [],
                    $sTypeContent[3] ?? [],
                    $sTypeContent[4] ?? [],
                    $sTypeContent[5] ?? [],
                    $sTypeContent[6] ?? $bEscape,
                ];
                $oBlockquoteHelper = $this->getView()->plugin('blockquote');
                return call_user_func_array([$oBlockquoteHelper, '__invoke'], $aArguments);
            case is_int($sType):
                return $sTypeContent;
            default:
                throw new \InvalidArgumentException('Card item "' . $sType . '" is not supported');
        }

        if (is_array($sTypeContent)) {
            if (\Laminas\Stdlib\ArrayUtils::isList($sTypeContent)) {
                $sCardBodyItemContent = '';
                foreach ($sTypeContent as $sTypeContentItem) {
                    $sCardBodyItemContent .= ($sCardBodyItemContent ? PHP_EOL : '') . $this->renderCardItem(
                        $sType,
                        $sTypeContentItem,
                        $bEscape
                    );
                }
                return $sCardBodyItemContent;
            }

            if (isset($sTypeContent['attributes'])) {
                $aTypeAttributes = array_merge($aTypeAttributes, $sTypeContent['attributes']);
            }

            $sTypeContent = $sTypeContent['content'] ?? '';
        }

        return $this->htmlElement(
            $sTag,
            $this->setClassesToAttributes($aTypeAttributes, $aClasses),
            $sTypeContent,
            $bEscape
        );
    }
}
