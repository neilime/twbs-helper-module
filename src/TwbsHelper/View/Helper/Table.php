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
    public const TABLE_FOOTER = 'tfoot';
    public const TABLE_ROW  = 'tr';

    /**
     * @var string
     */
    public const TABLE_H    = 'th';

    /**
     * @var string
     */
    public const TABLE_DATA = 'td';

    protected static $allowedAlignments = [
        'baseline',
        'top',
        'middle',
        'bottom',
        'text-top',
        'text-bottom',
    ];

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

        $tableClasses = [
            'table',
            isset($rows['align']) ? $this->getAlignmentClass($rows['align']) : null,
            empty($rows['borderless']) ? null : 'table-borderless',
            empty($rows['captionTop']) ? null : 'caption-top',
            empty($rows['hover']) ? null : 'table-hover',
            empty($rows['striped']) ? null : 'table-striped',
        ];

        if (isset($rows['variant'])) {
            $tableClasses = array_merge(
                $tableClasses,
                $this->getView()->plugin('htmlClass')->plugin('variant')->getClassesFromOption(
                    $rows['variant'],
                    'table'
                )
            );
        }

        if (isset($rows['size'])) {
            $tableClasses = array_merge(
                $tableClasses,
                $this->getView()->plugin('htmlClass')->plugin('size')->getClassesFromOption(
                    $rows['size'],
                    'table'
                )
            );
        }

        if (isset($rows['bordered'])) {
            $tableClasses[] = 'table-bordered';
            if (is_string($rows['bordered'])) {
                $tableClasses = array_merge(
                    $tableClasses,
                    $this->getView()->plugin('htmlClass')->plugin('variant')->getClassesFromOption(
                        $rows['bordered'],
                        'border'
                    )
                );
            }
        }

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($attributes)
            ->merge(['class' => $tableClasses]);

        $tableContent = $this->getView()->plugin('htmlElement')->__invoke(
            'table',
            $attributes,
            $this->renderTableRows($rows, $escape),
            $escape
        );

        if (!$responsiveOption) {
            return $tableContent;
        }

        $reponsiveClasses = $responsiveOption === true
            ? ['table-responsive']
            : $this->getView()->plugin('htmlClass')->plugin('size')->getClassesFromOption(
                $responsiveOption,
                'table-responsive'
            );

        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            ['class' => $reponsiveClasses],
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
    protected function renderTableRows(array $rows, bool $escape = true): string
    {
        $markup = '';
        if ($rows === []) {
            return $markup;
        }

        if (isset($rows['caption'])) {
            $caption = $rows['caption'];
            unset($rows['caption']);
        }

        if (isset($rows['captionTop'])) {
            $caption = $rows['captionTop'];
            unset($rows['captionTop']);
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

        if (isset($rows['footer'])) {
            if (!is_array($rows['footer'])) {
                throw new \InvalidArgumentException(
                    sprintf(
                        'Argument "%s" expects an array, "%s" given',
                        '$rows[\'footer\']',
                        is_object($rows['footer'])
                            ? get_class($rows['footer'])
                            : gettype($rows['footer'])
                    )
                );
            }

            $footerRows = $rows['footer'];
            unset($rows['footer']);
        }

        if (!isset($bodyRows)) {
            $bodyRows = $rows;
        }

        if (isset($caption)) {
            $markup .= $this->renderTableCation($caption, $escape);
        }

        if (isset($headRows)) {
            $markup .= ($markup ? PHP_EOL : '') . $this->renderTableGroupRows(self::TABLE_HEAD, $headRows, $escape);
        }

        if (!empty($bodyRows)) {
            $markup .= ($markup ? PHP_EOL : '') . $this->renderTableGroupRows(self::TABLE_BODY, $bodyRows, $escape);
        }

        if (isset($footerRows)) {
            $markup .= ($markup ? PHP_EOL : '') . $this->renderTableGroupRows(
                self::TABLE_FOOTER,
                $footerRows,
                $escape
            );
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

        return $this->getView()->plugin('htmlElement')->__invoke(
            'caption',
            $caption['attributes'] ?? [],
            $caption['data'],
            $escape
        );
    }

    /**
     * Generate table group rows elements
     *
     * @param string $groupType the row group type to be rendered.
     * Can be TABLE_HEAD, TABLE_BODY or TABLE_FOOTER
     * @param array $groupRows the rows to be rendered
     * @param bool $escape true espace html content of cells. Default True
     * @return string The grouped rows XHTML.
     * @throws \InvalidArgumentException
     */
    protected function renderTableGroupRows(string $groupType, array $groupRows, bool $escape = true): string
    {
        if (!$groupRows) {
            return '';
        }

        if (isset($groupRows['attributes'])) {
            $groupAttributes = $groupRows['attributes'];
            if (!is_array($groupAttributes)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        '"$groupRows[\'attributes\']" expects an array, "%s" given',
                        is_object($groupAttributes)
                            ? get_class($groupAttributes)
                            : gettype($groupAttributes)
                    )
                );
            }
            unset($groupRows['attributes']);
        } else {
            $groupAttributes = [];
        }

        $groupClasses = isset($groupRows['variant'])
            ? $this->getView()->plugin('htmlClass')->plugin('variant')->getClassesFromOption(
                $groupRows['variant'],
                'table'
            )
            : [];
        unset($groupRows['variant']);

        if (isset($groupRows['rows'])) {
            $groupRows = $groupRows['rows'];
            if (!is_array($groupRows)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        '"$groupRows[\'rows\']" expects an array, "%s" given',
                        is_object($groupRows)
                            ? get_class($groupRows)
                            : gettype($groupRows)
                    )
                );
            }
        } else {
            // Rows can be a list of cells
            $rowsAreListOfcells = !in_array(false, array_map(function ($value) {
                return is_scalar($value) || !\Laminas\Stdlib\ArrayUtils::isList($value);
            }, $groupRows));

            if ($rowsAreListOfcells) {
                $groupRows = [$groupRows];
            }
        }

        $defaultCellType = null;
        switch ($groupType) {
            case self::TABLE_HEAD:
                $defaultCellType = self::TABLE_H;
                break;
            case self::TABLE_BODY:
                break;
            case self::TABLE_FOOTER:
                $defaultCellType = self::TABLE_DATA;
                break;
            default:
                throw new \DomainException(sprintf(
                    'Argument "%s" "%s" is not supported',
                    '$groupType',
                    $groupType,
                ));
        }

        $groupRowsContent = '';
        foreach ($groupRows as $groupRow) {
            $groupRowsContent .= ($groupRowsContent ? PHP_EOL : '') . $this->renderTableRow(
                $groupRow,
                $defaultCellType,
                $escape
            );
        }

        $groupAttributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($groupAttributes)
            ->merge(['class' => $groupClasses]);

        return $this->getView()->plugin('htmlElement')->__invoke(
            $groupType,
            $groupAttributes,
            $groupRowsContent,
            false
        );
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
    protected function renderTableRow(
        array $row,
        string $defaultCellType = null,
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

        $rowClasses = [
            empty($row['active']) ? null : 'table-active',
            isset($row['align']) ? $this->getAlignmentClass($row['align']) : null,
        ];

        if (isset($row['variant'])) {
            $rowClasses = array_merge(
                $rowClasses,
                $this->getView()->plugin('htmlClass')->plugin('variant')->getClassesFromOption($row['variant'], 'table')
            );
        }

        unset($row['active'], $row['align'], $row['variant']);


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

        $rowAttributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($rowAttributes)
            ->merge(['class' => $rowClasses]);

        return $this->getView()->plugin('htmlElement')->__invoke(
            self::TABLE_ROW,
            $rowAttributes,
            $rowsContent,
            false
        );
    }

    /**
     * Generate table cell element "<th>" or "<td>"
     *
     * @param int|float|string|bool|array $cell the cell data
     * @param string|null $defaultCellType the default cell element
     * (th or td) to be used
     * @param boolean $isFirstCol weither the given cell is the first cell in the row
     * @param boolean $escape true espace html content of cells. Default True
     * @return string The cell XHTML.
     * @throws \InvalidArgumentException
     */
    public function renderTableCell(
        $cell,
        string $defaultCellType = null,
        bool $isFirstCol,
        bool $escape = true
    ): string {

        $cell = $this->defineCellStructure($cell, $defaultCellType, $isFirstCol);

        if (!isset($cell['data'])) {
            throw new \InvalidArgumentException('Argument "$cell[\'data\']" is undefined');
        }

        if (is_array($cell['data'])) {
            $cellData = $this->__invoke($cell['data'], ['class' => 'mb-0'], $escape);
        } elseif (is_scalar($cell['data'])) {
            $cellData = $cell['data'];
        } else {
            throw new \InvalidArgumentException(sprintf(
                'Argument "$cell[\'data\']" expects an array or a scalar value, "%s" given',
                is_object($cell['data'])
                    ? get_class($cell['data'])
                    : gettype($cell['data'])
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
                    'Argument "$cell[\'attributes\']" expects an array, ' .
                        '"%s" given',
                    is_object($attributes)
                        ? get_class($attributes)
                        : gettype($attributes)
                ));
            }
        }

        $attributes = $this->getView()->plugin('htmlattributes')->__invoke($attributes);

        $alignOption = $cell['align'] ?? null;
        unset($cell['align']);
        if ($alignOption) {
            $attributes->merge(['class' => [$this->getAlignmentClass($alignOption)]]);
        }

        if (!empty($cell['active'])) {
            $attributes->merge(['class' => ['table-active']]);
        }
        unset($cell['active']);

        return $this->getView()->plugin('htmlElement')->__invoke(
            $cellType,
            $attributes,
            $cellData,
            $escape
        );
    }

    protected function defineCellStructure(
        $cell,
        string $defaultCellType = null,
        bool $isFirstCol
    ): array {
        if (is_scalar($cell)) {
            $cell = [
                'data' => $cell,
                'attributes' => [],
            ];
        } elseif (is_array($cell)) {
            if (!isset($cell['data'])) {
                throw new \InvalidArgumentException('Argument "$cell[\'data\']" is undefined');
            }

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



        if (is_array($cell['data'])) {
            $cell['type'] = self::TABLE_DATA;
            return $cell;
        }
        $hasCellScope = array_key_exists('scope', $cell['attributes']);
        if ($hasCellScope && is_null($cell['attributes']['scope'])) {
            unset($cell['attributes']['scope']);
        }

        switch ($defaultCellType) {
            case self::TABLE_H:
                if (!$hasCellScope) {
                    $cell['attributes']['scope'] = 'col';
                }
                break;
            case self::TABLE_DATA:
                break;
            case null:
                if (
                    $isFirstCol
                    && !$hasCellScope
                ) {
                    $cell['attributes']['scope'] = 'row';
                }
                $defaultCellType = $isFirstCol ? self::TABLE_H : self::TABLE_DATA;
                break;
            default:
                throw new \DomainException(sprintf(
                    'Argument "%s" "%s" is not supported',
                    '$defaultCellType',
                    $defaultCellType,
                ));
        }

        if (!isset($cell['type'])) {
            $cell['type'] = $defaultCellType;
        }
        return $cell;
    }

    protected function getAlignmentClass(string $alignment): string
    {
        if (!in_array($alignment, self::$allowedAlignments)) {
            throw new \InvalidArgumentException(sprintf(
                'Given "align" option "%s" is not supported. Expects one of these values "%s"',
                $alignment,
                implode(',', self::$allowedAlignments)
            ));
        }
        return $this->getView()->plugin('htmlClass')->getPrefixedClass($alignment, 'align');
    }
}
