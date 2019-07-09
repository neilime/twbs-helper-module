<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering tables
 */
class Table extends \TwbsHelper\View\Helper\AbstractHtmlElement
{

    const TABLE_HEAD = 'thead';
    const TABLE_BODY = 'tbody';
    const TABLE_ROW  = 'tr';
    const TABLE_H    = 'th';
    const TABLE_DATA = 'td';

    /**
     * Generates a 'table' element
     *
     * @param array $aRows table rows
     * @param array $aAttributes html attributes of the "<table>" element.
     *   Default : empty
     * @param bool $bEscape true espace html content of cells. Default True
     * @return string The table XHTML.
     * @throws \InvalidArgumentException
     */
    public function __invoke(
        array $aRows,
        array $aAttributes = [],
        bool $bEscape = true
    ) {

        $sResponsiveOption = $aRows['responsive'] ?? null;
        unset($aRows['responsive']);

        $sTableContent = $this->htmlElement(
            'table',
            $this->setClassesToAttributes($aAttributes, ['table']),
            $this->renderTableRows($aRows, $bEscape),
            $bEscape
        );

        if (!$sResponsiveOption) {
            return $sTableContent;
        }

        $sReponsiveClass = $sResponsiveOption === true
            ? 'table-responsive'
            : $this->getSizeClass($sResponsiveOption, 'table-responsive');

        return $this->htmlElement(
            'div',
            ['class' => $sReponsiveClass],
            $sTableContent,
            $bEscape
        );
    }

    /**
     * Generate table rows elements
     *
     * @param array $aRows the array of rows.
     * @param bool $bEscape true espace html content of cells. Default True
     * @return string The rows XHTML.
     * @throws \InvalidArgumentException
     */
    public function renderTableRows(array $aRows, bool $bEscape = true): string
    {
        $sMarkup = '';
        if (!$aRows) {
            return $sMarkup;
        }

        if (isset($aRows['caption'])) {
            $sCaption = $aRows['caption'];
            unset($aRows['caption']);
        }


        if (isset($aRows['head'])) {
            if (!is_array($aRows['head'])) {
                throw new \InvalidArgumentException(
                    sprintf(
                        'Argument "%s" expects an array, "%s" given',
                        '$aRows[\'head\']',
                        is_object($aRows['head'])
                            ? get_class($aRows['head'])
                            : gettype($aRows['head'])
                    )
                );
            }

            $aHeadRows = $aRows['head'];
            unset($aRows['head']);
        }

        if (isset($aRows['body'])) {
            if (!is_array($aRows['body'])) {
                throw new \InvalidArgumentException(
                    sprintf(
                        'Argument "%s" expects an array, "%s" given',
                        '$aRows[\'body\']',
                        is_object($aRows['body'])
                            ? get_class($aRows['body'])
                            : gettype($aRows['body'])
                    )
                );
            }

            $aBodyRows = $aRows['body'];
            unset($aRows['body']);
        }

        if (!isset($aBodyRows)) {
            $aBodyRows = $aRows;
        }

        if (!isset($aHeadRows) && $aBodyRows) {
            // Define head from first row keys
            $aFirstRow = current($aBodyRows);
            if (\Zend\Stdlib\ArrayUtils::hasStringKeys($aFirstRow)) {
                $aHeadRows = array_keys($aFirstRow);
            }
        }

        if (isset($sCaption)) {
            $sMarkup .= ($sMarkup ? PHP_EOL : '') . $this->renderTableCation($sCaption, $bEscape);
        }

        if (isset($aHeadRows)) {
            $sMarkup .= ($sMarkup ? PHP_EOL : '') . $this->renderHeadRows($aHeadRows, $bEscape);
        }

        if (!empty($aBodyRows)) {
            $sRowsContent = '';
            foreach ($aBodyRows as $iKey => $aBodyRow) {
                if (!is_array($aBodyRow)) {
                    throw new \InvalidArgumentException(sprintf(
                        'Body row "%s" expects an array, "%s" given',
                        $iKey,
                        is_object($aBodyRow)
                            ? get_class($aBodyRow)
                            : gettype($aBodyRow)
                    ));
                }

                $sRowsContent .= ($sRowsContent ? PHP_EOL : '') . $this->renderTableRow(
                    $aBodyRow,
                    self::TABLE_DATA,
                    $bEscape
                );
            }

            $sMarkup .= ($sMarkup ? PHP_EOL : '') . $this->htmlElement(self::TABLE_BODY, [], $sRowsContent, $bEscape);
        }

        return $sMarkup;
    }

    protected function renderTableCation($sCaption, bool $bEscape = true): string
    {
        if (is_scalar($sCaption)) {
            $sCaption = [
                'data' => $sCaption,
                'attributes' => [],
            ];
        } elseif (!is_array($sCaption)) {
            throw new \InvalidArgumentException(sprintf(
                'Argument "%s" expects %s value, "%s" given',
                '$sCaption',
                'an array or a scalar',
                is_object($sCaption) ? get_class($sCaption) : gettype($sCaption)
            ));
        }
        return $this->htmlElement(
            'caption',
            $sCaption['attributes'] ?? [],
            $sCaption['data'],
            $bEscape
        );
    }


    /**
     * Generate table "<thead>" rows elements
     *
     * @param arra $aHeadRows
     * @param bool $bEscape true espace html content of cells. Default True
     * @return string The "<thead>" rows XHTML.
     * @throws \InvalidArgumentException
     */
    public function renderHeadRows(array $aHeadRows, bool $bEscape = true): string
    {
        if (!$aHeadRows) {
            return '';
        }

        if (isset($aHeadRows['attributes'])) {
            $aHeadAttributes = $aHeadRows['attributes'];
            if (!is_array($aHeadAttributes)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        'Head "[\'attributes\']" expects an array, "%s" given',
                        is_object($aHeadAttributes)
                            ? get_class($aHeadAttributes)
                            : gettype($aHeadAttributes)
                    )
                );
            }
            unset($aHeadRows['attributes']);
        } else {
            $aHeadAttributes = [];
        }

        if (isset($aHeadRows['rows'])) {
            $aHeadRows = $aHeadRows['rows'];
            if (!is_array($aHeadRows)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        'Head "[\'rows\']" expects an array, "%s" given',
                        is_object($aHeadRows)
                            ? get_class($aHeadRows)
                            : gettype($aHeadRows)
                    )
                );
            }
        }

        if (!is_array(current($aHeadRows))) {
            $aHeadRows = [$aHeadRows];
        }

        $sHeadRowsContent = '';
        foreach ($aHeadRows as $aHeadRow) {
            $sHeadRowsContent .= ($sHeadRowsContent ? PHP_EOL : '') . $this->renderTableRow(
                $aHeadRow,
                self::TABLE_H,
                $bEscape
            );
        }

        return $this->htmlElement(self::TABLE_HEAD, $aHeadAttributes, $sHeadRowsContent, false);
    }

    /**
     * Generate table row element "<tr>"
     *
     * @param array $aRow the array of cells.
     * @param string $sDefaultCellType the default cell element
     * (th or td) to be used
     * @param boolean $bEscape true espace html content of cells. Default True
     * @return string The row XHTML.
     */
    public function renderTableRow(
        array $aRow,
        string $sDefaultCellType,
        bool $bEscape = true
    ): string {
        if (isset($aRow['attributes'])) {
            $aRowAttributes = $aRow['attributes'];
            if (!is_array($aRowAttributes)) {
                throw new \InvalidArgumentException(sprintf(
                    'Argument "%s" expects an array, "%s" given',
                    '$aRow[\'attributes\']',
                    is_object($aRowAttributes)
                        ? get_class($aRowAttributes)
                        : gettype($aRowAttributes)
                ));
            }
            unset($aRow['attributes']);
        } else {
            $aRowAttributes = [];
        }

        if (isset($aRow['cells'])) {
            $aRow = $aRow['cells'];
            if (!is_array($aRow)) {
                throw new \InvalidArgumentException(sprintf(
                    'Argument "%s" expects an array, "%s" given',
                    '$aRow[\'cells\']',
                    is_object($aRow) ? get_class($aRow) : gettype($aRow)
                ));
            }
        }

        $sRowsContent = '';
        $bIsFirstCol = true;
        foreach ($aRow as $aCell) {
            $sRowsContent .= ($sRowsContent ? PHP_EOL : '') . $this->renderTableCell(
                $aCell,
                $sDefaultCellType,
                $bIsFirstCol,
                $bEscape
            );
            $bIsFirstCol = false;
        }

        return $this->htmlElement(self::TABLE_ROW, $aRowAttributes, $sRowsContent, false);
    }

    /**
     * Generate table cell element "<th>" or "<td>"
     *
     * @param scalar|array $sCell the cell data
     * @param string $sDefaultCellType the default cell element
     * (th or td) to be used
     * @param boolean $bEscape true espace html content of cells. Default True
     * @return string The cell XHTML.
     * @throws \InvalidArgumentException
     */
    public function renderTableCell(
        $sCell,
        string $sDefaultCellType,
        bool $bIsFirstCol,
        bool $bEscape = true
    ): string {
        if (is_scalar($sCell)) {
            $sCell = [
                'data' => $sCell,
                'attributes' => [],
            ];
        } elseif (is_array($sCell)) {
            if (!isset($sCell['attributes'])) {
                $sCell['attributes'] = [];
            } elseif (!is_array($sCell['attributes'])) {
                throw new \InvalidArgumentException(sprintf(
                    'Argument "$sCell[\'attributes\']" expects an array, "%s" given',
                    is_object($sCell['attributes'])
                        ? get_class($sCell['attributes'])
                        : gettype($sCell['attributes'])
                ));
            }
        } else {
            throw new \InvalidArgumentException(sprintf(
                'Argument "$sCell" expects an array or a scalar value, "%s" given',
                is_object($sCell) ? get_class($sCell) : gettype($sCell)
            ));
        }

        if ($sDefaultCellType === self::TABLE_H && !isset($sCell['attributes']['scope'])) {
            $sCell['attributes']['scope'] = 'col';
        } elseif (
            $sDefaultCellType === self::TABLE_DATA
            && $bIsFirstCol
            && !isset($sCell['attributes']['scope'])
        ) {
            $sCell['attributes']['scope'] = 'row';
        }

        if (!isset($sCell['type'])) {
            $sCell['type'] = $bIsFirstCol ? self::TABLE_H : $sDefaultCellType;
        }

        return $this->renderTableCellFromArray($sCell, $bEscape);
    }

    protected function renderTableCellFromArray(array $aCell, bool $bEscape): string
    {
        if (!isset($aCell['data'])) {
            throw new \InvalidArgumentException('Argument "$sCell[\'data\']" is undefined');
        }

        $sCellData = $aCell['data'];
        if (!is_scalar($sCellData)) {
            throw new \InvalidArgumentException(sprintf(
                'Argument "$sCell[\'data\']" expects a scalar value, "%s" given',
                is_object($sCellData)
                    ? get_class($sCellData)
                    : gettype($sCellData)
            ));
        }

        if (isset($aCell['type'])) {
            $sCellType = $aCell['type'];
            if (!is_string($sCellType)) {
                throw new \InvalidArgumentException(sprintf(
                    'Argument "$sCell[\'type\']" expects a string, "%s" given',
                    is_object($sCellType)
                        ? get_class($sCellType)
                        : gettype($sCellType)
                ));
            }
        }

        $aAttributes = [];
        if (isset($aCell['attributes'])) {
            $aAttributes = $aCell['attributes'];
            if (!is_array($aAttributes)) {
                throw new \InvalidArgumentException(sprintf(
                    'Argument "$sCell[\'attributes\']" expects an array, ' .
                        '"%s" given',
                    is_object($aAttributes)
                        ? get_class($aAttributes)
                        : gettype($aAttributes)
                ));
            }
        }

        return $this->htmlElement($sCellType, $aAttributes, $sCellData, $bEscape);
    }
}
