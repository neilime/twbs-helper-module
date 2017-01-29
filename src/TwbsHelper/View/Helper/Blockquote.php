<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering blockquotes
 */
class Blockquote extends \Zend\View\Helper\AbstractHtmlElement {

    /**
     * Generates an 'blockquote' element : <blockquote class="blockquote"><p class="mb-0">Blockquote content</p></blockquote>
     *
     * @param string $sContent : the content of the blockquote
     * @param array $aAttributes : html attributes of the <blockquote> element. Default : empty
     * @param array $aContentAttributes : html attributes of the <p> (content) element. Default : empty
     * @param bool $bEscape : true espace html content '$sContent'. Default : true
     * @return string : the blockquote XHTML.
     * @throws \InvalidArgumentException
     */
    public function __invoke($sContent, $aAttributes = array(), $aContentAttributes = array(), $bEscape = true) {
        if (!is_string($sContent)) {
            throw new \InvalidArgumentException('Argument "$sContent" expects a string, "' . (is_object($sContent) ? get_class($sContent) : gettype($sContent)) . '" given');
        }
        if (!is_array($aAttributes)) {
            throw new \InvalidArgumentException('Argument "$aAttributes" expects a boolean, "' . (is_object($aAttributes) ? get_class($aAttributes) : gettype($aAttributes)) . '" given');
        }
        if (!is_array($aContentAttributes)) {
            throw new \InvalidArgumentException('Argument "$aContentAttributes" expects a boolean, "' . (is_object($aContentAttributes) ? get_class($aContentAttributes) : gettype($aContentAttributes)) . '" given');
        }
        if (!is_bool($bEscape)) {
            throw new \InvalidArgumentException('Argument "$bEscape" expects a boolean, "' . (is_object($bEscape) ? get_class($bEscape) : gettype($bEscape)) . '" given');
        }


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
        return '<blockquote' . ($aAttributes ? $this->htmlAttribs($aAttributes) : '') . '>' . PHP_EOL .
                '    <p' . ($aContentAttributes ? $this->htmlAttribs($aContentAttributes) : '') . '>' . $sContent . '</p>' . PHP_EOL .
                '</blockquote>';
    }

}
