<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering offcanvas
 */
class Offcanvas extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    public const PLACEMENT_START = 'start';
    public const PLACEMENT_END = 'end';
    public const PLACEMENT_TOP = 'top';
    public const PLACEMENT_BOTTOM = 'bottom';

    protected static $allowedPlacements = [
        self::PLACEMENT_START,
        self::PLACEMENT_END,
        self::PLACEMENT_TOP,
        self::PLACEMENT_BOTTOM,
    ];

    protected static $allowedOptions = [
        'backdrop',
        'body',
        'header',
        'placement',
        'triggers',
        'scroll',
    ];

    /**
     * Generates an 'offcanvas' element
     *
     * @param  string  $content     The content of the offcanvas body
     * @param  iterable   $optionsAndAttributes  Html attributes of the offcanvas "container"
     * @param  boolean $escape      True espace html content '$content'. Default True
     * @return string The offcanvas XHTML.
     */
    public function __invoke(
        string $content,
        iterable $optionsAndAttributes = [],
        bool $escape = true
    ) {

        $offcanvasContent = '';

        if (!empty($optionsAndAttributes['header'])) {
            $offcanvasContent .= $this->renderHeader($optionsAndAttributes['header'], $escape);
        }

        if ($content) {
            $bodyAttributes = $this->getView()->plugin('htmlattributes')->__invoke(
                $optionsAndAttributes['body'] ?? []
            );
            $content = $this->renderBody(
                $content,
                $bodyAttributes,
                $escape
            );
        }

        if ($offcanvasContent) {
            $content = $offcanvasContent . ($content ? PHP_EOL : '') . $content;
        }

        $content = $this->renderContainer($content, $optionsAndAttributes, $escape);

        if (!empty($optionsAndAttributes['triggers'])) {
            $content = $this->renderTriggers(
                $optionsAndAttributes['triggers'],
                $optionsAndAttributes['id'] ?? null
            ) . ($content ? PHP_EOL . $content : '');
        }

        return $content;
    }

    protected function renderHeader(iterable $headerOptions, bool $escape): string
    {
        $headerContent = '';

        if (!empty($headerOptions['title'])) {
            $titleOptions = $headerOptions['title'];
            if (is_scalar($titleOptions)) {
                $titleOptions = ['content' => $titleOptions];
            } elseif (!is_iterable($titleOptions)) {
                throw new \InvalidArgumentException(sprintf(
                    '["offcanvas"]["header"]["title"] option expects a string or an iterable, "%s" given',
                    is_object($titleOptions) ? get_class($titleOptions) : gettype($titleOptions)
                ));
            }

            $attributes = $this->getView()->plugin('htmlattributes')
                ->__invoke($titleOptions['attributes'] ?? [])
                ->merge(['class' => ['offcanvas-title']]);

            $headerContent = $this->getView()->plugin('htmlElement')->__invoke(
                $titleOptions['tag'] ?? 'h5',
                $attributes,
                $titleOptions['content'] ?? '',
                $escape
            );
        }

        if (!isset($headerOptions['close'])) {
            $headerOptions['close'] = true;
        }

        if (!empty($headerOptions['close'])) {
            $headerContent .= ($headerContent ? PHP_EOL : '') . $this->getView()->plugin('formButton')->renderSpec(
                [
                    'options' => ['close' => $headerOptions['close']],
                    'attributes' => [
                        'data-bs-dismiss' => 'offcanvas',
                        'class' => 'text-reset',
                    ],
                ],
                ''
            );
        }

        $headerAttributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($headerOptions['attributes'] ?? [])
            ->merge(['class' => ['offcanvas-header']]);

        return $this->getView()->plugin('htmlElement')->__invoke(
            $headerOptions['tag'] ?? 'div',
            $headerAttributes,
            $headerContent,
            $escape
        );
    }

    protected function renderTriggers(
        iterable $triggers,
        ?string $id = null
    ): string {
        $content = '';
        foreach ($triggers as $trigger) {
            $triggerContent = $this->renderTrigger($trigger, $id);
            if ($content) {
                $content .= PHP_EOL;
            }
            $content .= $triggerContent;
        }
        return $content;
    }


    protected function renderTrigger(
        iterable $trigger,
        ?string $id = null
    ): string {

        $triggerAttributes = [
            'data-bs-toggle' => 'offcanvas',
        ];

        if ($id) {
            $triggerAttributes['aria-controls'] = $id;
            $target = '#' . $id;
            $isLinkWithHref = isset($trigger['options']['tag']) && $trigger['options']['tag'] === 'a';
            if ($isLinkWithHref) {
                $triggerAttributes['href'] = $target;
            } else {
                $triggerAttributes['data-bs-target'] = $target;
            }
        }

        $triggerAttributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($trigger['attributes'] ?? [])
            ->merge($triggerAttributes);

        $trigger['attributes'] = $triggerAttributes;

        return $this->getView()->plugin('formButton')->renderSpec(
            $trigger,
            empty($trigger['options']['label']) ? '' : null
        );
    }


    protected function renderBody(string $content, \TwbsHelper\View\HtmlAttributesSet $attributes, bool $escape): string
    {
        $attributes->merge(['class' => ['offcanvas-body']]);

        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            $attributes,
            $content,
            $escape
        );
    }

    protected function renderContainer(
        string $content,
        iterable $optionsAndAttributes,
        bool $escape
    ): string {

        $defaultAttributes = [
            'tabindex' => '-1',
            'class' => ['offcanvas'],
        ];

        if (!empty($optionsAndAttributes['header']['title']['attributes']['id'])) {
            $defaultAttributes['aria-labelledby'] = $optionsAndAttributes['header']['title']['attributes']['id'];
        }

        if (isset($optionsAndAttributes['backdrop'])) {
            $defaultAttributes['data-bs-backdrop'] = $optionsAndAttributes['backdrop'] ? 'true' : 'false';
        }
        if (isset($optionsAndAttributes['scroll'])) {
            $defaultAttributes['data-bs-scroll'] = $optionsAndAttributes['scroll'] ? 'true' : 'false';
        }

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($optionsAndAttributes)
            ->offsetsUnset(static::$allowedOptions)
            ->merge($defaultAttributes);

        $placement = $optionsAndAttributes['placement'] ?? self::PLACEMENT_START;
        if (
            !in_array(
                $placement,
                self::$allowedPlacements
            )
        ) {
            throw new \InvalidArgumentException(sprintf(
                'Given "placement" option "%s" is not supported. Expects one of these values "%s"',
                $placement,
                implode(',', self::$allowedPlacements)
            ));
        }

        $attributes['class']->merge([
            $this->getView()->plugin('htmlClass')->getPrefixedClass($placement, 'offcanvas'),
        ]);

        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            $attributes,
            $content,
            $escape
        );
    }
}
