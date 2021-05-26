<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering badges
 */
class Badge extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    protected static $allowedOptions = [
        'hidden_content',
        'variant',
        'text_variant',
        'type',
        'positioned',
    ];

    /**
     * @var string
     */
    public const TYPE_SIMPLE = 'simple';

    /**
     * @var string
     */
    public const TYPE_PILL   = 'pill';

    /**
     * Generates a 'badge' element
     *
     * @param string $content    The content of the badge
     * @param string|array $optionsAndAttributes options and Html attributes of the "<span>" element
     * @param boolean $escape     True espace html content '$content'. Default True
     * @return string The badge XHTML.
     * @throws \InvalidArgumentException
     */
    public function __invoke(
        string $content,
        $optionsAndAttributes = [],
        bool $escape = true
    ) {

        if (!$optionsAndAttributes) {
            $optionsAndAttributes = [];
        } elseif (is_string($optionsAndAttributes)) {
            $optionsAndAttributes = [
                'variant' => $optionsAndAttributes,
            ];
        }

        $attributes = $this->prepareAttributes($optionsAndAttributes, $content);

        if (!empty($optionsAndAttributes['hidden_content'])) {
            $content .= ($content ? PHP_EOL : '') . $this->renderHiddenContent(
                $optionsAndAttributes['hidden_content'],
                $escape
            );
        }

        return $this->getView()->plugin('htmlElement')->__invoke(
            'span',
            $attributes,
            $content,
            $escape
        );
    }

    protected function prepareAttributes(
        iterable $optionsAndAttributes,
        string $content
    ): \TwbsHelper\View\HtmlAttributesSet {
        $optionsAndAttributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($optionsAndAttributes)
            ->merge(['class' => ['badge']]);

        $this->prepareAttributesForVariant($optionsAndAttributes);
        $this->prepareAttributesForText($optionsAndAttributes);
        $this->prepareAttributesForType($optionsAndAttributes);
        $this->prepareAttributesForPositioned($optionsAndAttributes, $content);

        return $optionsAndAttributes->offsetsUnset(static::$allowedOptions);
    }

    protected function prepareAttributesForVariant(\TwbsHelper\View\HtmlAttributesSet $optionsAndAttributes)
    {
        $optionsAndAttributes['class']->merge(
            $this->getView()->plugin('htmlClass')->plugin('variant')->getClassesFromOption(
                $optionsAndAttributes['variant'] ?? 'secondary',
                'bg'
            )
        );
    }

    protected function prepareAttributesForText(\TwbsHelper\View\HtmlAttributesSet $optionsAndAttributes)
    {
        if (empty($optionsAndAttributes['text_variant'])) {
            return;
        }

        $optionsAndAttributes['class']->merge(
            $this->getView()->plugin('htmlClass')->plugin('variant')->getClassesFromOption(
                $optionsAndAttributes['text_variant'],
                'text'
            )
        );
    }

    protected function prepareAttributesForType(\TwbsHelper\View\HtmlAttributesSet $optionsAndAttributes)
    {
        $type = $optionsAndAttributes['type'] ?? self::TYPE_SIMPLE;
        if ($type == self::TYPE_PILL) {
            $optionsAndAttributes->merge(['class' => ['rounded-pill']]);
        }
    }

    protected function prepareAttributesForPositioned(
        \TwbsHelper\View\HtmlAttributesSet $optionsAndAttributes,
        string $content
    ) {
        if (empty($optionsAndAttributes['positioned'])) {
            return;
        }

        $optionsAndAttributes->merge(['class' => ['position-absolute', 'top-0', 'start-100', 'translate-middle']]);

        if (!$content) {
            $optionsAndAttributes
                ->merge(['class' => ['p-2', 'border', 'border-light']])
                ->offsetGet('class')->remove('badge');
        }
    }

    protected function renderHiddenContent(string $hiddenContent, bool $escape): string
    {
        return $this->getView()->plugin('htmlElement')->__invoke(
            'span',
            ['class' => 'visually-hidden'],
            $hiddenContent,
            $escape
        );
    }
}
