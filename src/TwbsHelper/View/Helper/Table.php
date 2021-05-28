<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering tables
 */
class Table extends \TwbsHelper\View\Helper\AbstractHtmlElement
{

    public const TABLE_HEAD = 'thead';
    public const TABLE_BODY = 'tbody';
    public const TABLE_FOOTER = 'tfoot';
    public const TABLE_ROW  = 'tr';
    public const TABLE_H    = 'th';
    public const TABLE_DATA = 'td';

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

        $aTableClasses = [
            'table',
            isset($aRows['align']) ? $this->getAlignmentClass($aRows['align']) : null,
            empty($aRows['borderless']) ? null : 'table-borderless',
            empty($aRows['captionTop']) ? null : 'caption-top',
            empty($aRows['hover']) ? null : 'table-hover',
            isset($aRows['size']) ? $this->getSizeClass($aRows['size'], 'table') : null,
            empty($aRows['striped']) ? null : 'table-striped',
            isset($aRows['variant']) ? $this->getVariantClass($aRows['variant'], 'table') : null,
        ];

        if (isset($aRows['bordered'])) {
            $aTableClasses[] = 'table-bordered';
            if (is_string($aRows['bordered'])) {
                $aTableClasses[] = $this->getVariantClass($aRows['bordered'], 'border');
            }
        }

        $sTableContent = $this->htmlElement(
            'table',
            $this->setClassesToAttributes($aAttributes, $aTableClasses),
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
    protected function renderTableRows(array $aRows, bool $bEscape = true): string
    {
        $sMarkup = '';
        if (!$aRows) {
            return $sMarkup;
        }

        if (isset($aRows['caption'])) {
            $sCaption = $aRows['caption'];
            unset($aRows['caption']);
        }

        if (isset($aRows['captionTop'])) {
            $sCaption = $aRows['captionTop'];
            unset($aRows['captionTop']);
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

        if (isset($aRows['footer'])) {
            if (!is_array($aRows['footer'])) {
                throw new \InvalidArgumentException(
                    sprintf(
                        'Argument "%s" expects an array, "%s" given',
                        '$aRows[\'footer\']',
                        is_object($aRows['footer'])
                            ? get_class($aRows['footer'])
                            : gettype($aRows['footer'])
                    )
                );
            }

            $aFooterRows = $aRows['footer'];
            unset($aRows['footer']);
        }

        if (!isset($aBodyRows)) {
            $aBodyRows = $aRows;
        }

        if (isset($sCaption)) {
            $sMarkup .= $this->renderTableCation($sCaption, $bEscape);
        }

        if (isset($aHeadRows)) {
            $sMarkup .= ($sMarkup ? PHP_EOL : '') . $this->renderTableGroupRows(self::TABLE_HEAD, $aHeadRows, $bEscape);
        }

        if (!empty($aBodyRows)) {
            $sMarkup .= ($sMarkup ? PHP_EOL : '') . $this->renderTableGroupRows(self::TABLE_BODY, $aBodyRows, $bEscape);
        }

        if (isset($aFooterRows)) {
            $sMarkup .= ($sMarkup ? PHP_EOL : '') . $this->renderTableGroupRows(
                self::TABLE_FOOTER,
                $aFooterRows,
                $bEscape
            );
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
     * Generate table group rows elements
     *
     * @param string $sGroupType the row group type to be rendered.
     * Can be TABLE_HEAD, TABLE_BODY or TABLE_FOOTER
     * @param array $aGroupRows the rows to be rendered
     * @param bool $bEscape true espace html content of cells. Default True
     * @return string The grouped rows XHTML.
     * @throws \InvalidArgumentException
     */
    protected function renderTableGroupRows(string $sGroupType, array $aGroupRows, bool $bEscape = true): string
    {
        if (!$aGroupRows) {
            return '';
        }

        if (isset($aGroupRows['attributes'])) {
            $aGroupAttributes = $aGroupRows['attributes'];
            if (!is_array($aGroupAttributes)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        '"$aGroupRows[\'attributes\']" expects an array, "%s" given',
                        is_object($aGroupAttributes)
                            ? get_class($aGroupAttributes)
                            : gettype($aGroupAttributes)
                    )
                );
            }
            unset($aGroupRows['attributes']);
        } else {
            $aGroupAttributes = [];
        }

        $aGroupClasses = [
            isset($aGroupRows['variant']) ? $this->getVariantClass($aGroupRows['variant'], 'table') : null,
        ];
        unset($aGroupRows['variant']);

        if (isset($aGroupRows['rows'])) {
            $aGroupRows = $aGroupRows['rows'];
            if (!is_array($aGroupRows)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        '"$aGroupRows[\'rows\']" expects an array, "%s" given',
                        is_object($aGroupRows)
                            ? get_class($aGroupRows)
                            : gettype($aGroupRows)
                    )
                );
            }
        } else {
            // Rows can be a list of cells
            $bRowsAreListOfcells = !in_array(false, array_map(function ($sValue) {
                return is_scalar($sValue) || !\Laminas\Stdlib\ArrayUtils::isList($sValue);
            }, $aGroupRows));

            if ($bRowsAreListOfcells) {
                $aGroupRows = [$aGroupRows];
            }
        }

        $sDefaultCellType = null;
        switch ($sGroupType) {
            case self::TABLE_HEAD:
                $sDefaultCellType = self::TABLE_H;
                break;
            case self::TABLE_BODY:
                break;
            case self::TABLE_FOOTER:
                $sDefaultCellType = self::TABLE_DATA;
                break;
            default:
                throw new \DomainException(sprintf(
                    'Argument "%s" "%s" is not supported',
                    '$sGroupType',
                    $sGroupType,
                ));
        }

        $sGroupRowsContent = '';
        foreach ($aGroupRows as $aGroupRow) {
            $sGroupRowsContent .= ($sGroupRowsContent ? PHP_EOL : '') . $this->renderTableRow(
                $aGroupRow,
                $sDefaultCellType,
                $bEscape
            );
        }

        return $this->htmlElement(
            $sGroupType,
            $this->setClassesToAttributes($aGroupAttributes, $aGroupClasses),
            $sGroupRowsContent,
            false
        );
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
    protected function renderTableRow(
        array $aRow,
        string $sDefaultCellType = null,
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

        $aRowClasses = [
            empty($aRow['active']) ? null : 'table-active',
            isset($aRow['align']) ? $this->getAlignmentClass($aRow['align']) : null,
            isset($aRow['variant']) ? $this->getVariantClass($aRow['variant'], 'table') : null,
        ];
        unset($aRow['active'], $aRow['align'], $aRow['variant']);


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

        return $this->htmlElement(
            self::TABLE_ROW,
            $this->setClassesToAttributes($aRowAttributes, $aRowClasses),
            $sRowsContent,
            false
        );
    }

    /**
     * Generate table cell element "<th>" or "<td>"
     *
     * @param int|float|string|bool|array $aCell the cell data
     * @param string|null $sDefaultCellType the default cell element
     * (th or td) to be used
     * @param boolean $bIsFirstCol weither the given cell is the first cell in the row
     * @param boolean $bEscape true espace html content of cells. Default True
     * @return string The cell XHTML.
     * @throws \InvalidArgumentException
     */
    public function renderTableCell(
        $aCell,
        string $sDefaultCellType = null,
        bool $bIsFirstCol,
        bool $bEscape = true
    ): string {

        $aCell = $this->defineCellStructure($aCell, $sDefaultCellType, $bIsFirstCol);

        if (!isset($aCell['data'])) {
            throw new \InvalidArgumentException('Argument "$aCell[\'data\']" is undefined');
        }

        if (is_array($aCell['data'])) {
            $sCellData = $this->__invoke($aCell['data'], ['class' => 'mb-0'], $bEscape);
        } elseif (is_scalar($aCell['data'])) {
            $sCellData = $aCell['data'];
        } else {
            throw new \InvalidArgumentException(sprintf(
                'Argument "$aCell[\'data\']" expects an array or a scalar value, "%s" given',
                is_object($aCell['data'])
                    ? get_class($aCell['data'])
                    : gettype($aCell['data'])
            ));
        }

        if (!isset($aCell['type'])) {
            throw new \InvalidArgumentException('Argument "$aCell[\'type\']" is undefined');
        }

        $sCellType = $aCell['type'];
        if (!is_string($sCellType)) {
            throw new \InvalidArgumentException(sprintf(
                'Argument "$aCell[\'type\']" expects a string, "%s" given',
                is_object($sCellType)
                    ? get_class($sCellType)
                    : gettype($sCellType)
            ));
        }

        $aAttributes = [];
        if (isset($aCell['attributes'])) {
            $aAttributes = $aCell['attributes'];
            if (!is_array($aAttributes)) {
                throw new \InvalidArgumentException(sprintf(
                    'Argument "$aCell[\'attributes\']" expects an array, ' .
                        '"%s" given',
                    is_object($aAttributes)
                        ? get_class($aAttributes)
                        : gettype($aAttributes)
                ));
            }
        }


        $sAlignOption = $aCell['align'] ?? null;
        unset($aCell['align']);
        if ($sAlignOption) {
            $aAttributes = $this->setClassesToAttributes($aAttributes, [$this->getAlignmentClass($sAlignOption)]);
        }

        if (!empty($aCell['active'])) {
            $aAttributes = $this->setClassesToAttributes($aAttributes, ['table-active']);
        }
        unset($aCell['active']);

        return $this->htmlElement($sCellType, $aAttributes, $sCellData, $bEscape);
    }

    protected function defineCellStructure(
        $aCell,
        string $sDefaultCellType = null,
        bool $bIsFirstCol
    ): array {
        if (is_scalar($aCell)) {
            $aCell = [
                'data' => $aCell,
                'attributes' => [],
            ];
        } elseif (is_array($aCell)) {
            if (!isset($aCell['data'])) {
                throw new \InvalidArgumentException('Argument "$aCell[\'data\']" is undefined');
            }

            if (!isset($aCell['attributes'])) {
                $aCell['attributes'] = [];
            } elseif (!is_array($aCell['attributes'])) {
                throw new \InvalidArgumentException(sprintf(
                    'Argument "$aCell[\'attributes\']" expects an array, "%s" given',
                    is_object($aCell['attributes'])
                        ? get_class($aCell['attributes'])
                        : gettype($aCell['attributes'])
                ));
            }
        } else {
            throw new \InvalidArgumentException(sprintf(
                'Argument "$aCell" expects an array or a scalar value, "%s" given',
                get_class($aCell)
            ));
        }



        if (is_array($aCell['data'])) {
            $aCell['type'] = self::TABLE_DATA;
            return $aCell;
        }
        $sHasCellScope = array_key_exists('scope', $aCell['attributes']);
        if ($sHasCellScope && is_null($aCell['attributes']['scope'])) {
            unset($aCell['attributes']['scope']);
        }

        switch ($sDefaultCellType) {
            case self::TABLE_H:
                if (!$sHasCellScope) {
                    $aCell['attributes']['scope'] = 'col';
                }
                break;
            case self::TABLE_DATA:
                break;
            case null:
                if (
                    $bIsFirstCol
                    && !$sHasCellScope
                ) {
                    $aCell['attributes']['scope'] = 'row';
                }
                $sDefaultCellType = $bIsFirstCol ? self::TABLE_H : self::TABLE_DATA;
                break;
            default:
                throw new \DomainException(sprintf(
                    'Argument "%s" "%s" is not supported',
                    '$sDefaultCellType',
                    $sDefaultCellType,
                ));
        }



        if (!isset($aCell['type'])) {
            $aCell['type'] = $sDefaultCellType;
        }
        return $aCell;
    }
}
