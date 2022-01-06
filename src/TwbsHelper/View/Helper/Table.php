<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering tables
 */
class Table extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    /**
     * @var string
     */
    public const TABLE_HEAD = 'thead';

    /**
     * @var string
     */
    public const TABLE_BODY = 'tbody';

    /**
     * @var string
     */
    public const TABLE_ROW  = 'tr';

    /**
     * @var string
     */
    public const TABLE_H    = 'th';

    /**
     * @var string
     */
    public const TABLE_DATA = 'td';

    /**
     * Generates a 'table' element
     *
     * @param array $rows table rows
     * @param array $attributes html attributes of the "<table>" element.
     *   Default : empty
     * @param bool $escape true espace html content of cells. Default True
     * @return string The table XHTML.
     * @throws \InvalidArgumentException
     */
    public function __invoke(
        array $rows,
        array $attributes = [],
        bool $escape = true
    ) {

        $responsiveOption = $rows['responsive'] ?? null;
        unset($rows['responsive']);

        $tableContent = $this->htmlElement(
            'table',
            $this->setClassesToAttributes($attributes, ['table']),
            $this->renderTableRows($rows, $escape),
            $escape
        );

        if (!$responsiveOption) {
            return $tableContent;
        }

        $reponsiveClass = $responsiveOption === true
            ? 'table-responsive'
            : $this->getSizeClass($responsiveOption, 'table-responsive');

        return $this->htmlElement(
            'div',
            ['class' => $reponsiveClass],
            $tableContent,
            $escape
        );
    }

    /**
     * Generate table rows elements
     *
     * @param array $rows the array of rows.
     * @param bool $escape true espace html content of cells. Default True
     * @return string The rows XHTML.
     * @throws \InvalidArgumentException
     */
    public function renderTableRows(array $rows, bool $escape = true): string
    {
        $markup = '';
        if ($rows === []) {
            return $markup;
        }

        if (isset($rows['caption'])) {
            $caption = $rows['caption'];
            unset($rows['caption']);
        }


        if (isset($rows['head'])) {
            if (!is_array($rows['head'])) {
                throw new \InvalidArgumentException(
                    sprintf(
                        'Argument "%s" expects an array, "%s" given',
                        '$rows[\'head\']',
                        is_object($rows['head'])
                            ? get_class($rows['head'])
                            : gettype($rows['head'])
                    )
                );
            }

            $headRows = $rows['head'];
            unset($rows['head']);
        }

        if (isset($rows['body'])) {
            if (!is_array($rows['body'])) {
                throw new \InvalidArgumentException(
                    sprintf(
                        'Argument "%s" expects an array, "%s" given',
                        '$rows[\'body\']',
                        is_object($rows['body'])
                            ? get_class($rows['body'])
                            : gettype($rows['body'])
                    )
                );
            }

            $bodyRows = $rows['body'];
            unset($rows['body']);
        }

        if (!isset($bodyRows)) {
            $bodyRows = $rows;
        }

        if (!isset($headRows) && $bodyRows) {
            // Define head from first row keys
            $firstRow = current($bodyRows);
            if (\Laminas\Stdlib\ArrayUtils::hasStringKeys($firstRow)) {
                $headRows = array_keys($firstRow);
            }
        }

        if (isset($caption)) {
            $markup .= $this->renderTableCation($caption, $escape);
        }

        if (isset($headRows)) {
            $markup .= ($markup ? PHP_EOL : '') . $this->renderHeadRows($headRows, $escape);
        }

        if (!empty($bodyRows)) {
            $rowsContent = '';
            foreach ($bodyRows as $key => $bodyRow) {
                if (!is_array($bodyRow)) {
                    throw new \InvalidArgumentException(sprintf(
                        'Body row "%s" expects an array, "%s" given',
                        $key,
                        is_object($bodyRow)
                            ? get_class($bodyRow)
                            : gettype($bodyRow)
                    ));
                }

                $rowsContent .= ($rowsContent ? PHP_EOL : '') . $this->renderTableRow(
                    $bodyRow,
                    self::TABLE_DATA,
                    $escape
                );
            }

            $markup .= ($markup ? PHP_EOL : '') . $this->htmlElement(self::TABLE_BODY, [], $rowsContent, $escape);
        }

        return $markup;
    }

    protected function renderTableCation($caption, bool $escape = true): string
    {
        if (is_scalar($caption)) {
            $caption = [
                'data' => $caption,
                'attributes' => [],
            ];
        } elseif (!is_array($caption)) {
            throw new \InvalidArgumentException(sprintf(
                'Argument "%s" expects %s value, "%s" given',
                '$caption',
                'an array or a scalar',
                is_object($caption) ? get_class($caption) : gettype($caption)
            ));
        }

        return $this->htmlElement(
            'caption',
            $caption['attributes'] ?? [],
            $caption['data'],
            $escape
        );
    }


    /**
     * Generate table "<thead>" rows elements
     *
     * @param bool $escape true espace html content of cells. Default True
     * @return string The "<thead>" rows XHTML.
     * @throws \InvalidArgumentException
     */
    public function renderHeadRows(array $headRows, bool $escape = true): string
    {
        if ($headRows === []) {
            return '';
        }

        if (isset($headRows['attributes'])) {
            $headAttributes = $headRows['attributes'];
            if (!is_array($headAttributes)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        'Head "[\'attributes\']" expects an array, "%s" given',
                        is_object($headAttributes)
                            ? get_class($headAttributes)
                            : gettype($headAttributes)
                    )
                );
            }

            unset($headRows['attributes']);
        } else {
            $headAttributes = [];
        }

        if (isset($headRows['rows'])) {
            $headRows = $headRows['rows'];
            if (!is_array($headRows)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        'Head "[\'rows\']" expects an array, "%s" given',
                        is_object($headRows)
                            ? get_class($headRows)
                            : gettype($headRows)
                    )
                );
            }
        }

        if (!is_array(current($headRows))) {
            $headRows = [$headRows];
        }

        $headRowsContent = '';
        foreach ($headRows as $headRow) {
            $headRowsContent .= ($headRowsContent ? PHP_EOL : '') . $this->renderTableRow(
                $headRow,
                self::TABLE_H,
                $escape
            );
        }

        return $this->htmlElement(self::TABLE_HEAD, $headAttributes, $headRowsContent, false);
    }

    /**
     * Generate table row element "<tr>"
     *
     * @param array $row the array of cells.
     * @param string $defaultCellType the default cell element
     * (th or td) to be used
     * @param boolean $escape true espace html content of cells. Default True
     * @return string The row XHTML.
     */
    public function renderTableRow(
        array $row,
        string $defaultCellType,
        bool $escape = true
    ): string {
        if (isset($row['attributes'])) {
            $rowAttributes = $row['attributes'];
            if (!is_array($rowAttributes)) {
                throw new \InvalidArgumentException(sprintf(
                    'Argument "%s" expects an array, "%s" given',
                    '$row[\'attributes\']',
                    is_object($rowAttributes)
                        ? get_class($rowAttributes)
                        : gettype($rowAttributes)
                ));
            }

            unset($row['attributes']);
        } else {
            $rowAttributes = [];
        }

        if (isset($row['cells'])) {
            $row = $row['cells'];
            if (!is_array($row)) {
                throw new \InvalidArgumentException(sprintf(
                    'Argument "%s" expects an array, "%s" given',
                    '$row[\'cells\']',
                    is_object($row) ? get_class($row) : gettype($row)
                ));
            }
        }

        $rowsContent = '';
        $isFirstCol = true;
        foreach ($row as $singleRow) {
            $rowsContent .= ($rowsContent ? PHP_EOL : '') . $this->renderTableCell(
                $singleRow,
                $defaultCellType,
                $isFirstCol,
                $escape
            );
            $isFirstCol = false;
        }

        return $this->htmlElement(self::TABLE_ROW, $rowAttributes, $rowsContent, false);
    }

    /**
     * Generate table cell element "<th>" or "<td>"
     *
     * @param int|float|string|bool|array $cell the cell data
     * @param string $defaultCellType the default cell element
     * (th or td) to be used
     * @param boolean $escape true espace html content of cells. Default True
     * @return string The cell XHTML.
     * @throws \InvalidArgumentException
     */
    public function renderTableCell(
        $cell,
        string $defaultCellType,
        bool $isFirstCol,
        bool $escape = true
    ): string {
        if (is_scalar($cell)) {
            $cell = [
                'data' => $cell,
                'attributes' => [],
            ];
        } elseif (is_array($cell)) {
            if (!isset($cell['attributes'])) {
                $cell['attributes'] = [];
            } elseif (!is_array($cell['attributes'])) {
                throw new \InvalidArgumentException(sprintf(
                    'Argument "$cell[\'attributes\']" expects an array, "%s" given',
                    is_object($cell['attributes'])
                        ? get_class($cell['attributes'])
                        : gettype($cell['attributes'])
                ));
            }
        } else {
            throw new \InvalidArgumentException(sprintf(
                'Argument "$cell" expects an array or a scalar value, "%s" given',
                get_class($cell)
            ));
        }

        if ($defaultCellType === self::TABLE_H && !isset($cell['attributes']['scope'])) {
            $cell['attributes']['scope'] = 'col';
        } elseif (
            $defaultCellType === self::TABLE_DATA
            && $isFirstCol
            && !isset($cell['attributes']['scope'])
        ) {
            $cell['attributes']['scope'] = 'row';
        }

        if (!isset($cell['type'])) {
            $cell['type'] = $isFirstCol ? self::TABLE_H : $defaultCellType;
        }

        return $this->renderTableCellFromArray($cell, $escape);
    }

    protected function renderTableCellFromArray(array $cell, bool $escape): string
    {
        if (!isset($cell['data'])) {
            throw new \InvalidArgumentException('Argument "$cell[\'data\']" is undefined');
        }

        $cellData = $cell['data'];
        if (!is_string($cellData)) {
            throw new \InvalidArgumentException(sprintf(
                'Argument "$cell[\'data\']" expects a string value, "%s" given',
                is_object($cellData)
                    ? get_class($cellData)
                    : gettype($cellData)
            ));
        }

        if (!isset($cell['type'])) {
            throw new \InvalidArgumentException('Argument "$cell[\'type\']" is undefined');
        }

        $cellType = $cell['type'];
        if (!is_string($cellType)) {
            throw new \InvalidArgumentException(sprintf(
                'Argument "$cell[\'type\']" expects a string, "%s" given',
                is_object($cellType)
                    ? get_class($cellType)
                    : gettype($cellType)
            ));
        }

        $attributes = [];
        if (isset($cell['attributes'])) {
            $attributes = $cell['attributes'];
            if (!is_array($attributes)) {
                throw new \InvalidArgumentException(sprintf(
                    'Argument "$cell[\'attributes\']" expects an array, "%s" given',
                    is_object($attributes)
                        ? get_class($attributes)
                        : gettype($attributes)
                ));
            }
        }

        return $this->htmlElement($cellType, $attributes, $cellData, $escape);
    }
}
