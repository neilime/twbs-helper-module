<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering toast
 */
class Toast extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    /**
     * Generates a 'toast' element
     */
    public function __invoke(array $aOptions) : string
    {
        return $this->render($aOptions);
    }

    public function render(array $aOptions) : string
    {
        $aAttributes = array_merge(
            [
                'role' => 'alert',
                'aria-live' => 'assertive',
                'aria-atomic' => 'true',
            ],
            $aOptions['attributes'] ?? []
        );

        $aClasses = ['toast'];

        $sToastContent =
            $this->renderHeader($aOptions['header'] ?? []) .
            PHP_EOL .
            $this->renderBody($aOptions['body'] ?? '');

        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes($aAttributes, $aClasses),
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
