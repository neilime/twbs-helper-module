<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering modal objects
 */
class Modal extends \TwbsHelper\View\Helper\AbstractHtmlElement
{

    const MODAL_TITLE = 'title';
    const MODAL_SUBTITLE = 'subtitle';
    const MODAL_TEXT = 'text';
    const MODAL_DIVIDER = '---';
    const MODAL_FOOTER = 'footer';
    const MODAL_BUTTON = 'button';

    /**
     * Generates a 'modal' element
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

        $aModalClasses = ['modal'];
        if (!empty($aOptionsAndAttributes['fade'])) {
            $aModalClasses[] = 'fade';
        }
        unset($aOptionsAndAttributes['fade']);

        $aDialogClasses = ['modal-dialog'];
        foreach (['scrollable', 'centered'] as $sModalOption) {
            if (!empty($aOptionsAndAttributes[$sModalOption])) {
                $aDialogClasses[] = 'modal-dialog-' . $sModalOption;
            }
            unset($aOptionsAndAttributes[$sModalOption]);
        }
        if (!empty($aOptionsAndAttributes['size'])) {
            $aDialogClasses[] = $this->getSizeClass($aOptionsAndAttributes['size'], 'modal');
        }
        unset($aOptionsAndAttributes['size']);

        $sContent = $this->renderParts(
            (array) $sContent,
            $aOptionsAndAttributes,
            $bEscape
        );

        $aOptionsAndAttributes = \Zend\Stdlib\ArrayUtils::merge(
            [
                'tabindex' => '-1',
                'role' => 'dialog',
            ],
            $aOptionsAndAttributes
        );

        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes($aOptionsAndAttributes, $aModalClasses),
            $this->htmlElement(
                'div',
                $this->setClassesToAttributes(['role' => 'document'], $aDialogClasses),
                $this->htmlElement(
                    'div',
                    ['class' => 'modal-content'],
                    $sContent,
                    $bEscape
                ),
                $bEscape
            ),
            $bEscape
        );
    }

    protected function renderParts(
        array $aParts,
        array $aOptionsAndAttributes,
        bool $bEscape
    ): string {
        $sHeaderPart = '';
        $sBodyPart = '';
        $sFooterPart = '';
        foreach ($aParts as $sKey => $sPartContent) {
            $sType = is_numeric($sKey) ? self::MODAL_TEXT : $sKey;
            if (is_array($sPartContent)) {
                $aOptions = $sPartContent;
                if (empty($aOptions['type'])) {
                    $aOptions['type'] = $sType;
                }
            } elseif (is_string($sPartContent)) {
                if ($sPartContent === self::MODAL_DIVIDER) {
                    $aOptions = ['type' => self::MODAL_DIVIDER];
                } else {
                    $aOptions = [
                        'type' => $sType,
                        'content' => $sPartContent,
                    ];
                }
            }

            $sPartContent = $this->renderPart(
                $aOptions,
                $bEscape
            );

            switch ($sType) {
                case self::MODAL_TITLE:
                    $sHeaderPart .= ($sHeaderPart ? PHP_EOL : '') . $sPartContent;
                    break;

                case self::MODAL_TEXT:
                case self::MODAL_DIVIDER:
                case self::MODAL_BUTTON:
                    $sBodyPart .= ($sBodyPart ? PHP_EOL : '') . $sPartContent;
                    break;

                case self::MODAL_FOOTER:
                    $sFooterPart .= ($sFooterPart ? PHP_EOL : '') . $sPartContent;
                    break;

                default:
                    throw new \DomainException(__CLASS__ . ' part type "' . $sType . '" is not supported');
            }
        }

        // Render header
        if (empty($aOptionsAndAttributes['disable_close'])) {
            $oTranslator = $this->getTranslator();
            $sHeaderPart .= ($sHeaderPart ? PHP_EOL : '') .  $this->htmlElement(
                'button',
                [
                    'type' => 'button',
                    'class' => 'close',
                    'data-dismiss' => 'modal',
                    'aria-label' => $oTranslator ? $oTranslator->translate(
                        'Close',
                        $this->getTranslatorTextDomain()
                    ) : 'Close',
                ],
                $this->htmlElement(
                    'span',
                    ['aria-hidden' => 'true'],
                    '&times;',
                    false
                ),
                $bEscape
            );
        }
        $sHeaderPart = $sHeaderPart ? $this->htmlElement(
            'div',
            ['class' => 'modal-header'],
            $sHeaderPart,
            $bEscape
        ) : '';

        // Render body
        $sBodyPart = $sBodyPart ? $this->htmlElement(
            'div',
            ['class' => 'modal-body'],
            $sBodyPart,
            $bEscape
        ) : '';

        // Render footer
        $sFooterPart = $sFooterPart ? $this->htmlElement(
            'div',
            ['class' => 'modal-footer'],
            $sFooterPart,
            $bEscape
        ) : '';

        return join(PHP_EOL, array_filter([$sHeaderPart, $sBodyPart, $sFooterPart]));
    }

    protected function renderPart(
        array $aOptions = [],
        bool $bEscape = true
    ): string {
        if (empty($aOptions['type'])) {
            throw new \DomainException('Modal part expects a type, none given');
        }
        $sType = $aOptions['type'];
        unset($aOptions['type']);

        if (\Zend\Stdlib\ArrayUtils::isList($aOptions)) {
            $that = $this;
            return join(
                PHP_EOL,
                array_map(function ($aOptionsItem) use ($that, $sType, $bEscape) {
                    if (is_string($aOptionsItem)) {
                        $aOptionsItem = [
                            'content' => $aOptionsItem,
                        ];
                    }
                    if (!isset($aOptionsItem['type'])) {
                        $aOptionsItem['type'] = $sType;
                    }
                    return $that->renderPart($aOptionsItem, $bEscape);
                }, $aOptions)
            );
        }

        $aAttributes = $aOptions['attributes'] ?? [];
        switch ($sType) {
            case self::MODAL_TITLE:
            case self::MODAL_SUBTITLE:
                if (empty($aOptions['content'])) {
                    throw new \DomainException('Modal part type "' . $sType . '" expects a content, none given');
                }
                $sTag = 'h5';

                if ($sType === self::MODAL_SUBTITLE) {
                    break;
                }

                $aAttributes = $this->setClassesToAttributes(
                    $aAttributes,
                    ['modal-title']
                );
                break;

            case self::MODAL_TEXT:
                if (empty($aOptions['content'])) {
                    throw new \DomainException(__CLASS__ . ' part type "' . $sType . '" expects a content, none given');
                }
                $sTag = 'p';
                break;

            case self::MODAL_DIVIDER:
                $sTag = 'hr';
                break;

            case self::MODAL_BUTTON:
                return $this->getView()->plugin('formButton')->__invoke($aOptions);

            case self::MODAL_FOOTER:
                $sFooterContent = '';
                foreach ($aOptions as $sKey => $sPartContent) {
                    $sType = is_numeric($sKey) ? self::MODAL_TEXT : $sKey;
                    if (is_array($sPartContent)) {
                        $aTmpOptions = $sPartContent;
                    } elseif (is_string($sPartContent)) {
                        $aTmpOptions = ['content' => $sPartContent];
                    }

                    if (!isset($aTmpOptions['type'])) {
                        $aTmpOptions['type'] = $sType;
                    }

                    $sPartContent = $this->renderPart(
                        $aTmpOptions,
                        $bEscape
                    );
                    $sFooterContent .= ($sFooterContent ? PHP_EOL : '') . $sPartContent;
                }
                return $sFooterContent;

            default:
                throw new \DomainException(__CLASS__ . ' part type "' . $sType . '" is not supported');
        }

        return $this->htmlElement(
            $sTag,
            $aAttributes,
            $aOptions['content'] ?? null,
            $bEscape
        );
    }
}
