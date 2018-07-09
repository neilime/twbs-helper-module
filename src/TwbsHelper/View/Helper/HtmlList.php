<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for ordered and unordered lists
 */
class HtmlList extends \Zend\View\Helper\AbstractHtmlElement
{

    /**
     * Generates a 'List' element. Manage indentation of Xhtml markup
     *
     * @param array $aItems Array with the elements of the list
     * @param bool $bOrdered Specifies ordered/unordered list; default unordered
     * @param array $aAttributes Attributes for the ol/ul tag. If class attributes contains "list-inline", so the li will have the class "list-inline-item"
     * @param bool $bEscape  Escape the items.
     * @throws \InvalidArgumentException
     * @return string The list XHTML.
     */
    public function __invoke(array $aItems, $bOrdered = false, $aAttributes = false, $bEscape = true)
    {
        if (empty($aItems)) {
            throw new \InvalidArgumentException('Argument "$aItems" must not be empty');
        }
        if (! is_bool($bOrdered)) {
            throw new \InvalidArgumentException('Argument "$bOrdered" expects a boolean, "' . (is_object($bOrdered) ? get_class($bOrdered) : gettype($bOrdered)) . '" given');
        }
        if (! is_bool($bEscape)) {
            throw new \InvalidArgumentException('Argument "$bEscape" expects a boolean, "' . (is_object($bEscape) ? get_class($bEscape) : gettype($bEscape)) . '" given');
        }

        $sList = '';

        if ($aAttributes) {
            if (isset($aAttributes['nested_level'])) {
                $iNestedLevel = $aAttributes['nested_level'];
                unset($aAttributes['nested_level']);
            } else {
                $iNestedLevel = 0;
            }
            $sUlAttributes = $this->htmlAttribs($aAttributes);
            $sLiAttributes = isset($aAttributes['class']) && strpos($aAttributes['class'], 'list-inline') !== false ? $this->htmlAttribs(['class' => 'list-inline-item',]) : '';
        } else {
            $sUlAttributes = $sLiAttributes = '';
            $iNestedLevel = 0;
            $aAttributes = [];
        }


        foreach ($aItems as $sItem) {
            $iNestedLevel++;
            $sItemIndentation = str_repeat(' ', $iNestedLevel * 4);
            if (! is_array($sItem)) {
                if ($bEscape) {
                    $oEscaper = $this->getView()->plugin('escapeHtml');
                    $sItem = $oEscaper($sItem);
                }
                $sList .= $sItemIndentation . '<li' . ($sLiAttributes ?: '') . '>' . $sItem . '</li>' . PHP_EOL;
            } else {
                // Remove end of last li element (</li>)
                $iItemLength = 5 + strlen(PHP_EOL);

                // Generate nested list
                $sNestedList = PHP_EOL . $this($sItem, $bOrdered, array_merge($aAttributes, ['nested_level' => $iNestedLevel + 1]), $bEscape) . $sItemIndentation . '</li>' . PHP_EOL;

                if ($iItemLength < strlen($sList)) {
                    $sList = substr($sList, 0, strlen($sList) - $iItemLength) . $sNestedList;
                } else {
                    $sList .= $sItemIndentation . '<li>' . $sNestedList;
                }
            }
            $iNestedLevel--;
        }

        $sTag = $bOrdered ? 'ol' : 'ul';
        $sIndentation = str_repeat(' ', $iNestedLevel * 4);
        return $sIndentation . '<' . $sTag . ($sUlAttributes ?: '') . '>' . PHP_EOL . $sList . $sIndentation . '</' . $sTag . '>' . PHP_EOL;
    }
}
