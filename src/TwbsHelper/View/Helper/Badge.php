<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering badges
 */
class Badge extends \TwbsHelper\View\Helper\AbstractHtmlElement
{

    public const TYPE_SIMPLE = 'simple';
    public const TYPE_PILL   = 'pill';
    public const TYPE_LINK   = 'link';

    /**
     * Generates a 'badge' element
     *
     * @param string $sContent    The content of the badge
     * @param string|array $aOptionsAndAttributes options and Html attributes of the "<span>" element
     * @param boolean $bEscape     True espace html content '$sContent'. Default True
     * @return string The badge XHTML.
     * @throws \InvalidArgumentException
     */
    public function __invoke(
        string $sContent,
        $aOptionsAndAttributes = null,
        bool $bEscape = true
    ) {

        if (!$aOptionsAndAttributes) {
            $aOptionsAndAttributes = [];
        } elseif (is_string($aOptionsAndAttributes)) {
            $aOptionsAndAttributes = [
                'variant' => $aOptionsAndAttributes,
            ];
        }

        $sVariantClass = $this->getVariantClass(
            $aOptionsAndAttributes['variant'] ?? 'secondary',
            'badge'
        );
        unset($aOptionsAndAttributes['variant']);

        // Badge class
        $aClasses = [
            'badge',
            $sVariantClass,
        ];

        $sType = $aOptionsAndAttributes['type'] ?? self::TYPE_SIMPLE;
        unset($aOptionsAndAttributes['type']);
        $sTag = 'span';
        switch ($sType) {
            case self::TYPE_PILL:
                $aClasses[] = 'badge-pill';
                break;

            case self::TYPE_LINK:
                $sTag = 'a';
                break;
        }

        return $this->htmlElement(
            $sTag,
            $this->setClassesToAttributes($aOptionsAndAttributes, $aClasses),
            $sContent,
            $bEscape
        );
    }
}
