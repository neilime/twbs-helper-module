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
    public const MODAL_GRID = 'grid';
    public const MODAL_FORM = 'form';
    public const MODAL_BUTTON = 'button';
    public const MODAL_FOOTER = 'footer';

    protected static $allowedOptions = [
        'backdrop',
        'body_attributes',
        'centered',
        'fade',
        'fullscreen',
        'hidden',
        'scrollable',
        'size',
    ];

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
        iterable $optionsAndAttributes = [],
        bool $escape = true
    ): string {

        $parts = $this->preparePartsFromContent($content);

        $content = $this->renderModalDialog($parts, $optionsAndAttributes, $escape);

        $attributes = $this->prepareModalAttributes($parts, $optionsAndAttributes);

        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            $attributes,
            $content,
            $escape
        );
    }

    protected function preparePartsFromContent($content): iterable
    {

        if (!is_iterable($content)) {
            $content = [$content];
        }

        $parts = [];
        foreach ($content as $key => $partContent) {
            $type = is_numeric($key) ? self::MODAL_TEXT : $key;
            $parts = array_merge($parts, $this->preparePartFromContent($type, $partContent));
        }

        return $parts;
    }

    protected function preparePartFromContent(string $type, $content): iterable
    {

        $parts = [];
        switch (true) {
            case \Laminas\Stdlib\ArrayUtils::isList($content):
                foreach ($content as $part) {
                    $parts[] = $this->preparePartFromContent($type, $part);
                }
                break;

            case is_iterable($content):
                $part = $content;
                $part['type'] = $part['type'] ?? $type;
                $parts[] = $part;
                break;

            case is_string($content):
                $parts[] = [
                    'type' => $content === self::MODAL_DIVIDER ? self::MODAL_DIVIDER : $type,
                    'content' => $content === self::MODAL_DIVIDER ? null : $content,
                    'attributes' => [],
                ];
                break;

            default:
                throw new \InvalidArgumentException(sprintf(
                    'Part content "$key" expects a string or an iterable value, "%s" given',
                    is_object($content)
                        ? get_class($content)
                        : gettype($content)
                ));
        }

        return $parts;
    }

    protected function prepareModalAttributes(
        iterable $parts,
        iterable $optionsAndAttributes
    ): iterable {

        $modalClasses = ['modal'];
        if (!empty($optionsAndAttributes['fade'])) {
            $modalClasses[] = 'fade';
        }

        $modalAttributes = [
            'tabindex' => '-1',
            'class' => $modalClasses,
        ];

        if (!empty($optionsAndAttributes['backdrop'])) {
            $modalAttributes['data-bs-backdrop'] = 'static';
            $modalAttributes['data-bs-keyboard'] = 'false';
        }

        if (!empty($optionsAndAttributes['hidden'])) {
            $modalAttributes['aria-hidden'] = 'true';
        }

        $titleId = $this->getTitleId($parts);
        if ($titleId) {
            $modalAttributes['aria-labelledby'] = $titleId;
        }

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($optionsAndAttributes)
            ->offsetsUnset(static::$allowedOptions)
            ->merge($modalAttributes);

        return $attributes;
    }

    protected function getTitleId(iterable $parts): ?string
    {
        foreach ($parts as $part) {
            if (
                $part['type'] === self::MODAL_TITLE
                && !empty($part['attributes']['id'])
            ) {
                return $part['attributes']['id'];
            }
        }

        return null;
    }

    protected function renderModalDialog(
        iterable $content,
        iterable $optionsAndAttributes,
        bool $escape
    ): string {

        $dialogClasses = ['modal-dialog'];
        foreach (['scrollable', 'centered'] as $modalOption) {
            if (!empty($optionsAndAttributes[$modalOption])) {
                $dialogClasses[] = 'modal-dialog-' . $modalOption;
            }
        }

        if (!empty($optionsAndAttributes['size'])) {
            $dialogClasses = array_merge(
                $dialogClasses,
                $this->getView()->plugin('htmlClass')->plugin('size')->getClassesFromOption(
                    $optionsAndAttributes['size'],
                    'modal'
                )
            );
        }

        if (!empty($optionsAndAttributes['fullscreen'])) {
            $fullscreenClass = 'modal-fullscreen';
            if ($optionsAndAttributes['fullscreen'] === true) {
                $dialogClasses[] = $fullscreenClass;
            } else {
                $dialogClasses = array_merge(
                    $dialogClasses,
                    $this->getView()->plugin('htmlClass')->plugin('size')->getClassesFromOption(
                        $optionsAndAttributes['fullscreen'],
                        $fullscreenClass,
                        'down'
                    )
                );
            }
        }

        $content = $this->renderParts(
            $content,
            $optionsAndAttributes,
            $escape
        );

        $htmlElementHelper = $this->getView()->plugin('htmlElement');

        return $htmlElementHelper->__invoke(
            'div',
            ['class' => $dialogClasses],
            $htmlElementHelper->__invoke(
                'div',
                ['class' => 'modal-content'],
                $content,
                $escape
            ),
            $escape
        );
    }

    protected function renderParts(
        iterable $parts,
        iterable $optionsAndAttributes,
        bool $escape
    ): string {
        $headerPart = '';
        $bodyPart = '';
        $footerPart = '';

        foreach ($parts as $part) {
            $partContent = $this->renderPart(
                $part,
                $escape
            );

            switch ($part['type']) {
                case self::MODAL_TITLE:
                    $headerPart .= ($headerPart ? PHP_EOL : '') . $partContent;
                    break;

                case self::MODAL_GRID:
                case self::MODAL_FORM:
                case self::MODAL_SUBTITLE:
                case self::MODAL_TEXT:
                case self::MODAL_DIVIDER:
                case self::MODAL_BUTTON:
                    $bodyPart .= ($bodyPart ? PHP_EOL : '') . $partContent;
                    break;

                case self::MODAL_FOOTER:
                    $footerPart .= ($footerPart ? PHP_EOL : '') . $partContent;
                    break;

                default:
                    throw new \DomainException(__CLASS__ . ' part type "' . $part['type'] . '" is not supported');
            }
        }

        return join(PHP_EOL, array_filter([
            $this->renderHeaderPart($headerPart, $optionsAndAttributes, $escape),
            $this->renderBodyPart($bodyPart, $optionsAndAttributes, $escape),
            $this->renderFooterPart($footerPart, $escape)
        ]));
    }

    protected function renderHeaderPart(string $headerPart, iterable $optionsAndAttributes, bool $escape): string
    {
        if (empty($optionsAndAttributes['disable_close'])) {
            $headerPart .= ($headerPart ? PHP_EOL : '') . $this->getView()->plugin('formButton')->renderSpec([
                'options' => [
                    'close' => true,
                ],
                'attributes' => [
                    'data-bs-dismiss' => 'modal',
                ],
            ], '');
        }

        if (!$headerPart) {
            return '';
        }

        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            ['class' => 'modal-header'],
            $headerPart,
            $escape
        );
    }

    protected function renderBodyPart(string $bodyPart, iterable $optionsAndAttributes, bool $escape): string
    {
        if (!$bodyPart) {
            return '';
        }

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($optionsAndAttributes['body_attributes'] ?? [])
            ->merge(['class' => ['modal-body']]);

        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            $attributes,
            $bodyPart,
            $escape
        );
    }

    protected function renderFooterPart(string $footerPart, bool $escape): string
    {
        if (!$footerPart) {
            return '';
        }

        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            ['class' => 'modal-footer'],
            $footerPart,
            $escape
        );
    }

    protected function renderPart(
        iterable $part = [],
        bool $escape = true
    ): string {
        $type = $part['type'] ?? null;
        unset($part['type']);

        if ($type === self::MODAL_GRID) {
            return $this->renderPartGrid($part, $escape);
        }

        if ($type === self::MODAL_FORM) {
            return $this->renderPartForm($part);
        }

        if (\Laminas\Stdlib\ArrayUtils::isList($part)) {
            return $this->renderPartList(
                $type,
                \Laminas\Stdlib\ArrayUtils::iteratorToArray($part),
                $escape
            );
        }

        $attributes = $this->getView()->plugin('htmlattributes')->__invoke($part['attributes'] ?? []);
        switch ($type) {
            case self::MODAL_TITLE:
            case self::MODAL_SUBTITLE:
                if (empty($part['content'])) {
                    throw new \DomainException('Modal part type "' . $type . '" expects a content, none given');
                }
                $tag = 'h5';

                if ($type === self::MODAL_SUBTITLE) {
                    break;
                }

                $attributes->merge(['class' => ['modal-title']]);
                break;

            case self::MODAL_TEXT:
                if (empty($part['content'])) {
                    throw new \DomainException(__CLASS__ . ' part type "' . $type . '" expects a content, none given');
                }
                $tag = 'p';
                break;

            case self::MODAL_DIVIDER:
                $tag = 'hr';
                break;

            case self::MODAL_BUTTON:
                return $this->getView()->plugin('formButton')->renderSpec($part);

            case self::MODAL_FOOTER:
                $footerContent = '';

                $footerParts = $this->preparePartsFromContent($part);

                foreach ($footerParts as $footerPart) {
                    $partContent = $this->renderPart(
                        $footerPart,
                        $escape
                    );
                    $footerContent .= ($footerContent ? PHP_EOL : '') . $partContent;
                }
                return $footerContent;

            default:
                throw new \DomainException(__CLASS__ . ' part type "' . $type . '" is not supported');
        }

        return $this->getView()->plugin('htmlElement')->__invoke(
            $tag,
            $attributes,
            $part['content'] ?? null,
            $escape
        );
    }

    protected function renderPartGrid(
        iterable $part,
        bool $escape = true
    ): string {
        $items = $part['rows'] ?? [];
        $attributes = $part['attributes'] ?? [];

        return $this->getView()->plugin('grid')->__invoke(
            $items,
            $attributes,
            $escape
        );
    }

    protected function renderPartForm(
        iterable $part
    ): string {
        return $this->getView()->plugin('form')->__invoke()->renderSpec($part);
    }

    protected function renderPartList(
        string $type = null,
        array $part = [],
        bool $escape = true
    ): string {
        $that = $this;
        return join(
            PHP_EOL,
            array_map(function ($partItem) use ($that, $type, $escape) {
                if (is_string($partItem)) {
                    $partItem = [
                        'content' => $partItem,
                    ];
                }
                $partItem['type'] = $partItem['type'] ?? $type;
                return $that->renderPart($partItem, $escape);
            }, \Laminas\Stdlib\ArrayUtils::iteratorToArray($part))
        );
    }
}
