<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering blockquotes
 */
class Blockquote extends \Zend\View\Helper\AbstractHtmlElement
{

    /**
     * Generates a 'blockquote' element
     *
     * @param string $sContent The content of the blockquote
     * @param string $sFooter The content of the footer of the blockquote. Default : empty
     * @param array $aAttributes Html attributes of the "<blockquote>" element. Default : empty
     * @param array $aContentAttributes Html attributes of the "<p>" (content) element. Default : empty
     * @param array $aFooterAttributes Html attributes of the "<footer>" (footer) element. Default : empty
     * @param bool $bEscape True espace html content '$sContent'. Default True
     * @return string The blockquote XHTML.
     * @throws \InvalidArgumentException
     */
    public function __invoke($sContent, $sFooter = '', array $aAttributes = [], array $aContentAttributes = [], array $aFooterAttributes = [], $bEscape = true)
    {
        if (! is_string($sContent)) {
            throw new \InvalidArgumentException('Argument "$sContent" expects a string, "' . (is_object($sContent) ? get_class($sContent) : gettype($sContent)) . '" given');
        }
        if (! is_string($sFooter)) {
            throw new \InvalidArgumentException('Argument "$sFooter" expects a string, "' . (is_object($sFooter) ? get_class($sFooter) : gettype($sFooter)) . '" given');
        }
        if (! is_bool($bEscape)) {
            throw new \InvalidArgumentException('Argument "$bEscape" expects a boolean, "' . (is_object($bEscape) ? get_class($bEscape) : gettype($bEscape)) . '" given');
        }

        // Manage content
        if ($bEscape) {
            $sContent = $this->getView()->plugin('escapeHtml')->__invoke($sContent);
        }

        // Blockquote class
        if (empty($aAttributes['class'])) {
            $aAttributes['class'] = 'blockquote';
        } else {
            $aAttributes['class'] = trim($aAttributes['class']) . ' blockquote';
        }

        // Content class
        if (empty($aContentAttributes['class'])) {
            $aContentAttributes['class'] = 'mb-0';
        } else {
            $aContentAttributes['class'] = trim($aContentAttributes['class']) . ' mb-0';
        }

        // Manage footer
        if ($sFooter) {
            if ($bEscape) {
                $sFooter = $this->getView()->plugin('escapeHtml')->__invoke($sFooter);
            }
            // Footer class
            if (empty($aFooterAttributes['class'])) {
                $aFooterAttributes['class'] = 'blockquote-footer';
            } else {
                $aFooterAttributes['class'] = trim($aFooterAttributes['class']) . ' blockquote-footer';
            }
        }

        return '<blockquote' . ($aAttributes ? $this->htmlAttribs($aAttributes) : '') . '>' . PHP_EOL .
                '    <p' . ($aContentAttributes ? $this->htmlAttribs($aContentAttributes) : '') . '>' . $sContent . '</p>' . PHP_EOL .
                ($sFooter ? '    <footer' . ($aFooterAttributes ? $this->htmlAttribs($aFooterAttributes) : '') . '>' . $sFooter . '</footer>' . PHP_EOL : '') .
                '</blockquote>';
    }
}
