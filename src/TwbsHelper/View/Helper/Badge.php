<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering badges
 */
class Badge extends \Zend\View\Helper\AbstractHtmlElement
{
    use \TwbsHelper\View\Helper\ClassAttributeTrait;

    const TYPE_SIMPLE = 'simple';
    const TYPE_PILL = 'pill';
    const TYPE_LINK = 'link';

    /**
     * Generates a 'badge' element
     *
     * @param string $sContent The content of the badge
     * @param string $sVariation The type of the badge (default, success, info, warning, danger). Default : default
     * @param string $sType type of the badge ("simple", "pill", "link"). Default : 'simple'
     * @param array $aAttributes Html attributes of the "<span>" element
     * @param bool $bEscape True espace html content '$sContent'. Default True
     * @return string The badge XHTML.
     * @throws \InvalidArgumentException
     */
    public function __invoke($sContent, $sVariation = 'default', $sType = self::TYPE_SIMPLE, array $aAttributes = [], $bEscape = true)
    {
        if (!is_string($sContent)) {
            throw new \InvalidArgumentException('Argument "$sContent" expects a string, "' . (is_object($sContent) ? get_class($sContent) : gettype($sContent)) . '" given');
        }
        if (!is_string($sVariation)) {
            throw new \InvalidArgumentException('Argument "$sVariation" expects a string, "' . (is_object($sVariation) ? get_class($sVariation) : gettype($sVariation)) . '" given');
        }
        if (!is_string($sType)) {
            throw new \InvalidArgumentException('Argument "$sType" expects a string, "' . (is_object($sType) ? get_class($sType) : gettype($sType)) . '" given');
        }
        if (!is_bool($bEscape)) {
            throw new \InvalidArgumentException('Argument "$bEscape" expects a boolean, "' . (is_object($bEscape) ? get_class($bEscape) : gettype($bEscape)) . '" given');
        }

        // Badge class        
        $aClasses = ['badge', 'badge-' . $sVariation];
        $sElement = 'span';
        switch ($sType) {
            case self::TYPE_PILL:
                $aClasses[] = 'badge-pill';
                break;
            case self::TYPE_LINK:
                $sElement = 'a';
                break;
        }

        $aAttributes['class'] = join(' ', $this->addClassesAttribute($aAttributes['class'] ?? '', $aClasses));

        // Content
        if ($bEscape) {
            $sContent = $this->getView()->plugin('escapeHtml')->__invoke($sContent);
        }
        return '<' . $sElement . ($aAttributes ? $this->htmlAttribs($aAttributes) : '') . '>' . $sContent . '</' . $sElement . '>';
    }
}
