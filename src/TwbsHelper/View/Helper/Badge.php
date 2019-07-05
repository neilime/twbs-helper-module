<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering badges
 */
class Badge extends \TwbsHelper\View\Helper\AbstractHtmlElement
{

    const TYPE_SIMPLE = 'simple';
    const TYPE_PILL   = 'pill';
    const TYPE_LINK   = 'link';

    /**
     * Generates a 'badge' element
     *
     * @param string $sContent    The content of the badge
     * @param string $sVariation  The type of the badge (default, success, info, warning, danger). Default : default
     * @param string $sType       type of the badge ("simple", "pill", "link"). Default : 'simple'
     * @param array  $aAttributes Html attributes of the "<span>" element
     * @param boolean $bEscape     True espace html content '$sContent'. Default True
     * @return string The badge XHTML.
     * @throws \InvalidArgumentException
     */
    public function __invoke(
        string $sContent,
        string $sVariation = 'default',
        string $sType = self::TYPE_SIMPLE,
        array $aAttributes = [],
        bool  $bEscape = true
    ) {

        // Badge class
        $aClasses = [
            'badge',
            'badge-' . $sVariation,
        ];
        $sTag = 'span';
        switch ($sType) {
            case self::TYPE_PILL:
                $aClasses[] = 'badge-pill';
                break;

            case self::TYPE_LINK:
                $sTag = 'a';
                break;
        }
        
        $aAttributes = $this->setClassesToAttributes($aAttributes, $aClasses);
        
        return $this->htmlElement($sTag, $aAttributes, $sContent, $bEscape);
    }
}
