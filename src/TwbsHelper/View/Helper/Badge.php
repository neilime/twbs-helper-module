<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering badges
 */
class Badge extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    /**
     * @var string
     */
    public const TYPE_SIMPLE = 'simple';

    /**
     * @var string
     */
    public const TYPE_PILL   = 'pill';

    /**
     * @var string
     */
    public const TYPE_LINK   = 'link';

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
        $optionsAndAttributes = null,
        bool $escape = true
    ) {

        if (!$optionsAndAttributes) {
            $optionsAndAttributes = [];
        } elseif (is_string($optionsAndAttributes)) {
            $optionsAndAttributes = [
                'variant' => $optionsAndAttributes,
            ];
        }

        $variantClass = $this->getVariantClass(
            $optionsAndAttributes['variant'] ?? 'secondary',
            'badge'
        );
        unset($optionsAndAttributes['variant']);

        // Badge class
        $classes = [
            'badge',
            $variantClass,
        ];

        $type = $optionsAndAttributes['type'] ?? self::TYPE_SIMPLE;
        unset($optionsAndAttributes['type']);
        $tag = 'span';
        if ($type == self::TYPE_PILL) {
            $classes[] = 'badge-pill';
        } elseif ($type == self::TYPE_LINK) {
            $tag = 'a';
        }

        return $this->htmlElement(
            $tag,
            $this->setClassesToAttributes($optionsAndAttributes, $classes),
            $content,
            $escape
        );
    }
}
