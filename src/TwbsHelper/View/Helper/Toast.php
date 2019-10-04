<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering toast
 */
class Toast extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    const PLACEMENT_TOP_CENTER = 'top-center';
    const PLACEMENT_BOTTOM_CENTER = 'bottom-center';
    const PLACEMENT_BOTTOM_LEFT = 'bottom-left';
    const PLACEMENT_BOTTOM_RIGHT = 'bottom-right';
    const PLACEMENT_TOP_LEFT = 'top-left';
    const PLACEMENT_TOP_RIGHT = 'top-right';

    /**
     * Generates a 'toast' element
     */
    public function __invoke(array $aOptions) : string
    {
        return $this->render($aOptions);
    }

    public function render(array $aOptions) : string
    {
        $aClasses = ['toast'];
        $aStyles = [];

        if (!empty($aOptions['placement'])) {
            switch ($aOptions['placement']) {
                case self::PLACEMENT_TOP_CENTER:
                    $aStyles = [
                        'position' => 'absolute',
                        'top' => '0',
                        'left' => '0',
                        'margin-left' => 'auto',
                        'margin-right'=> 'auto',
                    ];
                    break;
                case self::PLACEMENT_BOTTOM_CENTER:
                    $aStyles = [
                        'position' => 'absolute',
                        'bottom' => '0',
                        'left' => '0',
                        'margin-left' => 'auto',
                        'margin-right'=> 'auto',
                    ];
                    break;
                case self::PLACEMENT_BOTTOM_LEFT:
                    $aStyles = [
                        'position' => 'absolute',
                        'bottom' => '0',
                        'left' => '0',
                    ];
                    break;
                case self::PLACEMENT_BOTTOM_RIGHT:
                    $aStyles = [
                        'position' => 'absolute',
                        'bottom' => '0',
                        'right' => '0',
                    ];
                    break;
                case self::PLACEMENT_TOP_LEFT:
                    $aStyles = [
                        'position' => 'absolute',
                        'top' => '0',
                        'left' => '0',
                    ];
                    break;
                case self::PLACEMENT_TOP_RIGHT:
                    $aStyles = [
                        'position' => 'absolute',
                        'top' => '0',
                        'right' => '0',
                    ];
                    break;
                default:
                    throw new \InvalidArgumentException(sprintf(
                        'Option "placement" "%s" is not supported',
                        $aOptions['placement']
                    ));
            }
        }

        $aDefaultAttributes = [
            'role' => 'alert',
            'aria-live' => 'assertive',
            'aria-atomic' => 'true',
        ];

        if (isset($aOptions['autohide'])) {
            $aDefaultAttributes['data-autohide'] = $aOptions['autohide'] ? 'true' : 'false';
        }
        
        $aAttributes = $this->setClassesToAttributes(array_merge(
            $aDefaultAttributes,
            $aOptions['attributes'] ?? []
        ), $aClasses);

        if ($aStyles) {
            $aAttributes = $this->setStylesToAttributes(
                $aAttributes,
                $aStyles
            );
        }

        $sToastContent =
            $this->renderHeader($aOptions['header'] ?? []) .
            PHP_EOL .
            $this->renderBody($aOptions['body'] ?? '');

        return $this->htmlElement(
            'div',
            $aAttributes,
            $sToastContent
        );
    }

    public function renderHeader(array $aHeaderOptions) : string
    {
        $sToastHeader = '';

        if (!empty($aHeaderOptions['image'])) {
            $sToastHeader .= ($sToastHeader ? PHP_EOL : '') . $this->getView()->plugin('image')->__invoke(
                ...$aHeaderOptions['image']
            );
        }

        if (!empty($aHeaderOptions['title'])) {
            $aTitleOptions = is_array($aHeaderOptions['title'])
                ? $aHeaderOptions['title']
                : ['content' => $aHeaderOptions['title']];

            $sToastHeader .= ($sToastHeader ? PHP_EOL : '') . $this->htmlElement(
                'strong',
                $this->setClassesToAttributes(
                    $aTitleOptions['attributes'] ?? [],
                    ['mr-auto']
                ),
                $aTitleOptions['content']
            );
        }

        if (!empty($aHeaderOptions['subtitle'])) {
            $aSubtitleOptions = is_array($aHeaderOptions['subtitle'])
                ? $aHeaderOptions['subtitle']
                : ['content' => $aHeaderOptions['subtitle']];


            $sToastHeader .= ($sToastHeader ? PHP_EOL : '') . $this->htmlElement(
                'small',
                $this->setClassesToAttributes(
                    $aSubtitleOptions['attributes'] ?? [],
                    ['text-muted']
                ),
                $aSubtitleOptions['content']
            );
        }

        // Close button
        $oTranslator = $this->getTranslator();
        $sToastHeader .= ($sToastHeader ? PHP_EOL : '') . $this->htmlElement(
            'button',
            [
                'type' => 'button',
                'class' => 'ml-2 mb-1 close',
                'data-dismiss' => 'toast',
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
            )
        );

        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes([], ['toast-header']),
            $sToastHeader
        );
    }

    public function renderBody(string $sBody) : string
    {
        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes([], ['toast-body']),
            $sBody
        );
    }
}
