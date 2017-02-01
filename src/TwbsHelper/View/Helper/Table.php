<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering tables
 */
class Table extends \Zend\View\Helper\AbstractHtmlElement {

    const TABLE_HEAD = 'thead';
    const TABLE_BODY = 'tbody';
    const TABLE_ROW = 'tr';
    const TABLE_H = 'th';
    const TABLE_DATA = 'td';

    /**
     * Generates an 'table' element : "<table>"
     *
     * @param array $aRows table rows
     * @param array $aAttributes Html attributes of the "<table>" element. Default : empty
     * @param bool $bEscape True espace html content of cells. Default True
     * @return string The table XHTML.
     * @throws \InvalidArgumentException
     */
    public function __invoke(array $aRows, array $aAttributes = array(), $bEscape = true) {

        // Table class
        if (empty($aAttributes['class'])) {
            $aAttributes['class'] = 'table';
        } else {
            $aAttributes['class'] = trim($aAttributes['class']) . ' table';
        }
        return '<table' . ($aAttributes ? $this->htmlAttribs($aAttributes) : '') . '>' . PHP_EOL . $this->renderTableRows($aRows, $bEscape) . '</table>';
    }

    /**
     * Generate table rows elements
     * @param array $aRows The array of rows.
     * @param boolean $bEscape True espace html content of cells. Default True
     * @return string The rows XHTML.
     * @throws \InvalidArgumentException
     */
    public function renderTableRows(array $aRows, $bEscape = true) {

        $sMarkup = '';
        if (!$aRows) {
            return $sMarkup;
        }
        if (isset($aRows['head'])) {
            if (!is_array($aRows['head'])) {
                throw new \InvalidArgumentException('Argument "$aRows[\'head\']" expects an array, "' . (is_object($aRows['head']) ? get_class($aRows['head']) : gettype($aRows['head'])) . '" given');
            }
            $aHeadRows = $aRows['head'];
            unset($aRows['head']);
        }
        if (isset($aRows['body'])) {
            if (!is_array($aRows['body'])) {
                throw new \InvalidArgumentException('Argument "$aRows[\'body\']" expects an array, "' . (is_object($aRows['body']) ? get_class($aRows['body']) : gettype($aRows['body'])) . '" given');
            }
            $aBodyRows = $aRows['body'];
            unset($aRows['body']);
        }

        if (!isset($aBodyRows)) {
            $aBodyRows = $aRows;
        }
        if (!isset($aHeadRows) && $aBodyRows) {
            // Define head from first row keys
            $aFirstRow = current($aBodyRows[0]);
            if (\Zend\Stdlib\ArrayUtils::hasStringKeys($aFirstRow)) {
                $aHeadRows = array_keys($aFirstRow);
            }
        }

        if (isset($aHeadRows)) {
            $sMarkup .= $this->renderHeadRows($aHeadRows);
        }

        if (!empty($aBodyRows)) {
            $sMarkup .= '    <' . self::TABLE_BODY . '>' . PHP_EOL;
            foreach ($aBodyRows as $aBodyRow) {
                $sMarkup .= $this->renderTableRow($aBodyRow, self::TABLE_DATA, $bEscape);
            }
            $sMarkup .= '    </' . self::TABLE_BODY . '>' . PHP_EOL;
        }
        return $sMarkup;
    }

    /**
     * Generate table "<thead>" rows elements
     * @param array $aHeadRows
     * @param boolean $bEscape True espace html content of cells. Default True
     * @return string The "<thead>" rows XHTML.
     * @throws \InvalidArgumentException
     */
    public function renderHeadRows(array $aHeadRows, $bEscape = true) {
        $sMarkup = '';
        if (!$aHeadRows) {
            return $sMarkup;
        }
        $sHeadAttributes = '';
        if (\Zend\Stdlib\ArrayUtils::hasStringKeys($aHeadRows)) {
            if (isset($aHeadRows['attributes'])) {
                $aHeadAttributes = $aHeadRows['attributes'];
                if (!is_array($aHeadAttributes)) {
                    throw new \InvalidArgumentException('Head "[\'attributes\']" expects an array, "' . (is_object($aHeadAttributes) ? get_class($aHeadAttributes) : gettype($aHeadAttributes)) . '" given');
                }
                $sHeadAttributes = $this->htmlAttribs($aHeadAttributes);
            }
            if (isset($aHeadRows['rows'])) {
                $aHeadRows = $aHeadRows['rows'];
                if (!is_array($aHeadRows)) {
                    throw new \InvalidArgumentException('Head "[\'rows\']" expects an array, "' . (is_object($aHeadRows) ? get_class($aHeadRows) : gettype($aHeadRows)) . '" given');
                }
                $sHeadAttributes = $this->htmlAttribs($aHeadAttributes);
            }
        }

        if (!is_array(current($aHeadRows))) {
            $aHeadRows = array($aHeadRows);
        }

        $sMarkup .= '    <' . self::TABLE_HEAD . $sHeadAttributes . '>' . PHP_EOL;
        foreach ($aHeadRows as $aHeadRow) {
            $sMarkup .= $this->renderTableRow($aHeadRow, self::TABLE_H, $bEscape);
        }
        return $sMarkup . '    </' . self::TABLE_HEAD . '>' . PHP_EOL;
    }

    /**
     * Generate table row element "<tr>"
     * @param array $aRow The array of cells.
     * @param string $sDefaultCellType The default cell element (th or td) to be used
     * @param boolean $bEscape True espace html content of cells. Default True
     * @return string The row XHTML.
     */
    public function renderTableRow(array $aRow, $sDefaultCellType, $bEscape = true) {
        $sMarkup = '        <' . self::TABLE_ROW . '>' . PHP_EOL;

        foreach ($aRow as $aCell) {
            $sMarkup .= $this->renderTableCell($aCell, $sDefaultCellType, $bEscape);
        }
        return $sMarkup . '        </' . self::TABLE_ROW . '>' . PHP_EOL;
    }

    /**
     * Generate table cell element "<th>" or "<td>"
     * @param scalar|array $sCell : the cell data
     * @param string $sDefaultCellType  The default cell element (th or td) to be used
     * @param boolean $bEscape True espace html content of cells. Default True
     * @return string The cell XHTML.
     * @throws \InvalidArgumentException
     */
    public function renderTableCell($sCell, $sDefaultCellType, $bEscape = true) {

        if (is_array($sCell)) {
            if (!isset($sCell['data'])) {
                throw new \InvalidArgumentException('Argument "$sCell[\'data\']" is undefined');
            }
            $sCellData = $sCell['data'];
            if (!is_scalar($sCellData)) {
                throw new \InvalidArgumentException('Argument "$sCell[\'data\']" expects an array or a scalar value, "' . (is_object($sCellData) ? get_class($sCellData) : gettype($sCellData)) . '" given');
            }
            if (isset($sCell['type'])) {
                $sCellType = $sCell['type'];
                if (!is_scalar($sCellType)) {
                    throw new \InvalidArgumentException('Argument "$sCell[\'type\']" a string, "' . (is_object($sCellType) ? get_class($sCellType) : gettype($sCellType)) . '" given');
                }
            }
            if (isset($sCell['attributes'])) {
                $aAttributes = $sCell['attributes'];
                if (!is_array($aAttributes)) {
                    throw new \InvalidArgumentException('Argument "$sCell[\'attributes\']" an array, "' . (is_object($aAttributes) ? get_class($aAttributes) : gettype($aAttributes)) . '" given');
                }
                $sAttributes = $this->htmlAttribs($aAttributes);
            }
        } elseif (is_scalar($sCell)) {
            $sCellData = $sCell;
            $sCellType = $sDefaultCellType;
            $sAttributes = '';
        } else {
            throw new \InvalidArgumentException('Argument "$sCell" expects an array or a scalar value, "' . (is_object($sCell) ? get_class($sCell) : gettype($sCell)) . '" given');
        }

        if ($bEscape) {
            $sCellData . $this->getView()->plugin('escapeHtml')->__invoke($sCellData);
        }

        return '            <' . $sCellType . $sAttributes . '>' . $sCellData . '</' . $sCellType . '>' . PHP_EOL;
    }

}
