<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering modal objects
 */
class Modal extends \TwbsHelper\View\Helper\AbstractHtmlElement
{

    public const MODAL_TITLE = 'title';
    public const MODAL_SUBTITLE = 'subtitle';
    public const MODAL_TEXT = 'text';
    public const MODAL_DIVIDER = '---';
    public const MODAL_FOOTER = 'footer';
    public const MODAL_BUTTON = 'button';

    /**
     * Generates a 'modal' element
     *
     * @param string|array $content The content of the alert
     * @param array $optionsAndAttributes Options & Html attributes
     * @param boolean $escape True espace html content '$content'. Default True
     * @return string The jumbotron XHTML.
     */
    public function __invoke(
        $content,
        array $optionsAndAttributes = [],
        bool $escape = true
    ): string {

        $modalClasses = ['modal'];
        if (!empty($optionsAndAttributes['fade'])) {
            $modalClasses[] = 'fade';
        }
        unset($optionsAndAttributes['fade']);

        $dialogClasses = ['modal-dialog'];
        foreach (['scrollable', 'centered'] as $modalOption) {
            if (!empty($optionsAndAttributes[$modalOption])) {
                $dialogClasses[] = 'modal-dialog-' . $modalOption;
            }
            unset($optionsAndAttributes[$modalOption]);
        }

        if (!empty($optionsAndAttributes['size'])) {
            $dialogClasses[] = $this->getSizeClass($optionsAndAttributes['size'], 'modal');
        }

        unset($optionsAndAttributes['size']);

        $content = $this->renderParts(
            (array) $content,
            $optionsAndAttributes,
            $escape
        );

        $optionsAndAttributes = \Laminas\Stdlib\ArrayUtils::merge(
            [
                'tabindex' => '-1',
                'role' => 'dialog',
            ],
            $optionsAndAttributes
        );

        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes($optionsAndAttributes, $modalClasses),
            $this->htmlElement(
                'div',
                $this->setClassesToAttributes(['role' => 'document'], $dialogClasses),
                $this->htmlElement(
                    'div',
                    ['class' => 'modal-content'],
                    $content,
                    $escape
                ),
                $escape
            ),
            $escape
        );
    }

    protected function renderParts(
        array $parts,
        array $optionsAndAttributes,
        bool $escape
    ): string {
        $headerPart = '';
        $bodyPart = '';
        $footerPart = '';
        foreach ($parts as $key => $partContent) {
            $type = is_numeric($key) ? self::MODAL_TEXT : $key;

            if (is_array($partContent)) {
                $options = $partContent;
                if (empty($options['type'])) {
                    $options['type'] = $type;
                }
            } elseif (is_string($partContent)) {
                if ($partContent === self::MODAL_DIVIDER) {
                    $options = ['type' => self::MODAL_DIVIDER];
                } else {
                    $options = [
                        'type' => $type,
                        'content' => $partContent,
                    ];
                }
            }

            $partContent = $this->renderPart(
                $options ?? [],
                $escape
            );

            switch ($type) {
                case self::MODAL_TITLE:
                    $headerPart .= ($headerPart ? PHP_EOL : '') . $partContent;
                    break;

                case self::MODAL_TEXT:
                case self::MODAL_DIVIDER:
                case self::MODAL_BUTTON:
                    $bodyPart .= ($bodyPart ? PHP_EOL : '') . $partContent;
                    break;

                case self::MODAL_FOOTER:
                    $footerPart .= ($footerPart ? PHP_EOL : '') . $partContent;
                    break;

                default:
                    throw new \DomainException(__CLASS__ . ' part type "' . $type . '" is not supported');
            }
        }

        // Render header
        if (empty($optionsAndAttributes['disable_close'])) {
            $translator = $this->getTranslator();
            $headerPart .= ($headerPart ? PHP_EOL : '') .  $this->htmlElement(
                'button',
                [
                    'type' => 'button',
                    'class' => 'close',
                    'data-dismiss' => 'modal',
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
                ),
                $escape
            );
        }
        $headerPart = $headerPart ? $this->htmlElement(
            'div',
            ['class' => 'modal-header'],
            $headerPart,
            $escape
        ) : '';

        // Render body
        $bodyPart = $bodyPart ? $this->htmlElement(
            'div',
            ['class' => 'modal-body'],
            $bodyPart,
            $escape
        ) : '';

        // Render footer
        $footerPart = $footerPart ? $this->htmlElement(
            'div',
            ['class' => 'modal-footer'],
            $footerPart,
            $escape
        ) : '';

        return join(PHP_EOL, array_filter([$headerPart, $bodyPart, $footerPart]));
    }

    protected function renderPart(
        array $options = [],
        bool $escape = true
    ): string {
        if (empty($options['type'])) {
            throw new \DomainException('Modal part expects a type, none given');
        }
        $type = $options['type'];
        unset($options['type']);

        if (\Laminas\Stdlib\ArrayUtils::isList($options)) {
            $that = $this;
            return join(
                PHP_EOL,
                array_map(function ($optionsItem) use ($that, $type, $escape) {
                    if (is_string($optionsItem)) {
                        $optionsItem = [
                            'content' => $optionsItem,
                        ];
                    }
                    if (!isset($optionsItem['type'])) {
                        $optionsItem['type'] = $type;
                    }
                    return $that->renderPart($optionsItem, $escape);
                }, $options)
            );
        }

        $attributes = $options['attributes'] ?? [];
        switch ($type) {
            case self::MODAL_TITLE:
            case self::MODAL_SUBTITLE:
                if (empty($options['content'])) {
                    throw new \DomainException('Modal part type "' . $type . '" expects a content, none given');
                }
                $tag = 'h5';

                if ($type === self::MODAL_SUBTITLE) {
                    break;
                }

                $attributes = $this->setClassesToAttributes(
                    $attributes,
                    ['modal-title']
                );
                break;

            case self::MODAL_TEXT:
                if (empty($options['content'])) {
                    throw new \DomainException(__CLASS__ . ' part type "' . $type . '" expects a content, none given');
                }
                $tag = 'p';
                break;

            case self::MODAL_DIVIDER:
                $tag = 'hr';
                break;

            case self::MODAL_BUTTON:
                return $this->getView()->plugin('formButton')->renderSpec($options);

            case self::MODAL_FOOTER:
                $footerContent = '';
                foreach ($options as $key => $partContent) {
                    $type = is_numeric($key) ? self::MODAL_TEXT : $key;
                    if (is_array($partContent)) {
                        $tmpOptions = $partContent;
                    } elseif (is_string($partContent)) {
                        $tmpOptions = ['content' => $partContent];
                    }

                    if (!isset($tmpOptions['type'])) {
                        $tmpOptions['type'] = $type;
                    }

                    $partContent = $this->renderPart(
                        $tmpOptions,
                        $escape
                    );
                    $footerContent .= ($footerContent ? PHP_EOL : '') . $partContent;
                }
                return $footerContent;

            default:
                throw new \DomainException(__CLASS__ . ' part type "' . $type . '" is not supported');
        }

        return $this->htmlElement(
            $tag,
            $attributes,
            $options['content'] ?? null,
            $escape
        );
    }
}
