<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for ordered and unordered lists
 */
class HtmlList extends \Zend\View\Helper\AbstractHtmlElement {

    /**
     * Generates a 'List' element.
     *
     * @param array $aItems   Array with the elements of the list
     * @param bool $bOrdered Specifies ordered/unordered list; default unordered
     * @param array $aAttributes Attributes for the ol/ul tag. If class attributes contains "list-inline", so the li will have the class "list-inline-item"
     * @param bool $bEscape  Escape the items.
     * @throws \InvalidArgumentException
     * @return string The list XHTML.
     */
    public function __invoke(array $aItems, $bOrdered = false, $aAttributes = false, $bEscape = true) {
        if (empty($aItems)) {
            throw new \InvalidArgumentException('Argument "$aItems" must not be empty');
        }
        if (!is_bool($bOrdered)) {
            throw new \InvalidArgumentException('Argument "$bOrdered" expects a boolean, "' . (is_object($bOrdered) ? get_class($bOrdered) : gettype($bOrdered)) . '" given');
        }
        if (!is_bool($bEscape)) {
            throw new \InvalidArgumentException('Argument "$bEscape" expects a boolean, "' . (is_object($bEscape) ? get_class($bEscape) : gettype($bEscape)) . '" given');
        }

        $sList = '';

        if ($aAttributes) {
            $sUlAttributes = $this->htmlAttribs($aAttributes);
            $sLiAttributes = isset($aAttributes['class']) && strpos($aAttributes['class'], 'list-inline') !== false ? $this->htmlAttribs(array('class' => 'list-inline-item',)) : '';
            if (isset($aAttributes['indentation'])) {
                $iIndentation = $aAttributes['indentation'];
                unset($aAttributes['indentation']);
            } else {
                $iIndentation = 0;
            }
        } else {
            $sUlAttributes = $sLiAttributes = '';
            $iIndentation = 0;
        }


        foreach ($aItems as $sItem) {
            if (!is_array($sItem)) {
                if ($bEscape) {
                    $oEscaper = $this->getView()->plugin('escapeHtml');
                    $sItem = $oEscaper($sItem);
                }
                $sList .= str_repeat(' ', $iIndentation * 4) . '<li' . ($sLiAttributes ?: '') . '>' . $sItem . '</li>' . PHP_EOL;
            } else {
                // Remove end of last li element (</li>)
                $iItemLength = 5 + strlen(PHP_EOL);

                // Generate nested list
                $sNestedList = $this($sItem, $bOrdered, array_merge($aAttributes, array('indentation' => $iIndentation + 1)), $bEscape) . '</li>' . PHP_EOL;

                if ($iItemLength < strlen($sList)) {
                    $sList = substr($sList, 0, strlen($sList) - $iItemLength) . $sNestedList;
                } else {
                    $sList .= '<li>' . $sNestedList;
                }
            }
        }

        $sTag = $bOrdered ? 'ol' : 'ul';

        return '<' . $sTag . ($sUlAttributes ?: '') . '>' . PHP_EOL . $sList . '</' . $sTag . '>' . PHP_EOL;
    }

}
