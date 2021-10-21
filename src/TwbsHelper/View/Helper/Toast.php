<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering toast
 */
class Toast extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    public const PLACEMENT_TOP_CENTER = 'top-center';
    public const PLACEMENT_BOTTOM_CENTER = 'bottom-center';
    public const PLACEMENT_BOTTOM_LEFT = 'bottom-left';
    public const PLACEMENT_BOTTOM_RIGHT = 'bottom-right';
    public const PLACEMENT_TOP_LEFT = 'top-left';
    public const PLACEMENT_TOP_RIGHT = 'top-right';

    /**
     * Generates a 'toast' element
     */
    public function __invoke(array $options): string
    {
        return $this->render($options);
    }

    public function render(array $options): string
    {
        $classes = ['toast'];
        $styles = [];

        if (!empty($options['placement'])) {
            switch ($options['placement']) {
                case self::PLACEMENT_TOP_CENTER:
                    $styles = [
                        'position' => 'absolute',
                        'top' => '0',
                        'left' => '0',
                        'right' => '0',
                        'margin-left' => 'auto',
                        'margin-right' => 'auto',
                    ];
                    break;
                case self::PLACEMENT_BOTTOM_CENTER:
                    $styles = [
                        'position' => 'absolute',
                        'bottom' => '0',
                        'left' => '0',
                        'right' => '0',
                        'margin-left' => 'auto',
                        'margin-right' => 'auto',
                    ];
                    break;
                case self::PLACEMENT_BOTTOM_LEFT:
                    $styles = [
                        'position' => 'absolute',
                        'bottom' => '0',
                        'left' => '0',
                    ];
                    break;
                case self::PLACEMENT_BOTTOM_RIGHT:
                    $styles = [
                        'position' => 'absolute',
                        'bottom' => '0',
                        'right' => '0',
                    ];
                    break;
                case self::PLACEMENT_TOP_LEFT:
                    $styles = [
                        'position' => 'absolute',
                        'top' => '0',
                        'left' => '0',
                    ];
                    break;
                case self::PLACEMENT_TOP_RIGHT:
                    $styles = [
                        'position' => 'absolute',
                        'top' => '0',
                        'right' => '0',
                    ];
                    break;
                default:
                    throw new \InvalidArgumentException(sprintf(
                        'Option "placement" "%s" is not supported',
                        $options['placement']
                    ));
            }
        }

        $defaultAttributes = [
            'role' => 'alert',
            'aria-live' => 'assertive',
            'aria-atomic' => 'true',
        ];

        if (isset($options['autohide'])) {
            $defaultAttributes['data-autohide'] = $options['autohide'] ? 'true' : 'false';
        }

        $attributes = $this->setClassesToAttributes(array_merge(
            $defaultAttributes,
            $options['attributes'] ?? []
        ), $classes);

        if ($styles) {
            $attributes = $this->setStylesToAttributes(
                $attributes,
                $styles
            );
        }

        $toastContent =
            $this->renderHeader($options['header'] ?? []) .
            PHP_EOL .
            $this->renderBody($options['body'] ?? '');

        return $this->htmlElement(
            'div',
            $attributes,
            $toastContent
        );
    }

    public function renderHeader(array $headerOptions): string
    {
        $toastHeader = '';

        if (!empty($headerOptions['image'])) {
            $toastHeader .= $this->getView()->plugin('image')->__invoke(
                ...$headerOptions['image']
            );
        }

        if (!empty($headerOptions['title'])) {
            $titleOptions = is_array($headerOptions['title'])
                ? $headerOptions['title']
                : ['content' => $headerOptions['title']];

            $toastHeader .= ($toastHeader ? PHP_EOL : '') . $this->htmlElement(
                'strong',
                $this->setClassesToAttributes(
                    $titleOptions['attributes'] ?? [],
                    ['mr-auto']
                ),
                $titleOptions['content']
            );
        }

        if (!empty($headerOptions['subtitle'])) {
            $subtitleOptions = is_array($headerOptions['subtitle'])
                ? $headerOptions['subtitle']
                : ['content' => $headerOptions['subtitle']];


            $toastHeader .= ($toastHeader ? PHP_EOL : '') . $this->htmlElement(
                'small',
                $this->setClassesToAttributes(
                    $subtitleOptions['attributes'] ?? [],
                    ['text-muted']
                ),
                $subtitleOptions['content']
            );
        }

        // Close button
        $translator = $this->getTranslator();
        $toastHeader .= ($toastHeader ? PHP_EOL : '') . $this->htmlElement(
            'button',
            [
                'type' => 'button',
                'class' => 'ml-2 mb-1 close',
                'data-dismiss' => 'toast',
                'aria-label' => $translator ? $translator->translate(
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
            $toastHeader
        );
    }

    public function renderBody(string $body): string
    {
        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes([], ['toast-body']),
            $body
        );
    }
}
