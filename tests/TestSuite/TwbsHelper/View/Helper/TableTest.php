<?php

namespace TestSuite\TwbsHelper\View\Helper;

class TableTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase
{
    /**
     * @var \TwbsHelper\View\Helper\Table
     */
    protected $helper = 'table';

    public function testRenderTableRowsWithEmptyRows()
    {
        $this->assertSame('', $this->helper->renderTableRows([]));
    }

    public function testRenderTableRowsWithWrongArgumentHead()
    {
        $this->expectExceptionMessage('Argument "$rows[\'head\']" expects an array, "string" given');
        $this->helper->renderTableRows([
            'head' => 'wrong'
        ]);
    }

    public function testRenderTableRowsWithWrongArgumentBody()
    {
        $this->expectExceptionMessage('Argument "$rows[\'body\']" expects an array, "string" given');
        $this->helper->renderTableRows([
            'body' => 'wrong'
        ]);
    }

    public function testRenderTableRowsWithWrongRowType()
    {
        $this->expectExceptionMessage('Body row "0" expects an array, "string" given');
        $this->helper->renderTableRows([
            'wrong'
        ]);
    }

    public function testRenderTableRowsWithHeadDefinedInFirstBodyRow()
    {
        $expectedMarkup = '<thead>' . PHP_EOL .
            '    <tr>' . PHP_EOL .
            '        <th scope="col">head 1</th>' . PHP_EOL .
            '        <th scope="col">head 2</th>' . PHP_EOL .
            '    </tr>' . PHP_EOL .
            '</thead>' . PHP_EOL .
            '<tbody>' . PHP_EOL .
            '    <tr>' . PHP_EOL .
            '        <th scope="row">value 1</th>' . PHP_EOL .
            '        <td>value 2</td>' . PHP_EOL .
            '    </tr>' . PHP_EOL .
            '</tbody>';
        $this->assertSame($expectedMarkup, $this->helper->renderTableRows([
            ['head 1' => 'value 1', 'head 2' => 'value 2'],
        ]));
    }

    public function testRenderHeadRowsWithWrongAttributesType()
    {
        $this->expectExceptionMessage('Head "[\'attributes\']" expects an array, "string" given');
        $this->helper->renderHeadRows([
            'attributes' => 'wrong'
        ]);
    }

    public function testRenderHeadRowsWithWrongRowType()
    {
        $this->expectExceptionMessage('Head "[\'rows\']" expects an array, "string" given');
        $this->helper->renderHeadRows([
            'rows' => 'wrong'
        ]);
    }

    public function testRenderHeadRowsWithEmptyRows()
    {
        $this->assertSame('', $this->helper->renderHeadRows([]));
    }

    public function testRenderTableRowWithWrongAttributesType()
    {
        $this->expectExceptionMessage('Argument "$row[\'attributes\']" expects an array, "string" given');
        $this->helper->renderTableRow([
            'attributes' => 'wrong'
        ], 'td');
    }

    public function testRenderTableRowWithWrongCellsType()
    {
        $this->expectExceptionMessage('Argument "$row[\'cells\']" expects an array, "string" given');
        $this->helper->renderTableRow([
            'cells' => 'wrong'
        ], 'td');
    }

    public function testRenderTableCellWithEmptyArgumentCell()
    {
        $this->expectExceptionMessage('Argument "$cell" expects an array or a scalar value, "stdClass" given');
        $this->helper->renderTableCell(new \stdClass(), 'td', true);
    }

    public function testRenderTableCellWithUndefinedCellData()
    {
        $this->expectExceptionMessage('Argument "$cell[\'data\']" is undefined');
        $this->helper->renderTableCell([
            'data' => null,
        ], 'td', true);
    }

    public function testRenderTableCellWithWrongTypeCellData()
    {
        $this->expectExceptionMessage('Argument "$cell[\'data\']" expects a string value, "array" given');
        $this->helper->renderTableCell([
            'data' => [],
        ], 'td', true);
    }

    public function testRenderTableCellWithWrongTypeCellType()
    {
        $this->expectExceptionMessage('Argument "$cell[\'type\']" expects a string, "array" given');
        $this->helper->renderTableCell([
            'data' => 'test',
            'type' => [],
        ], 'td', true);
    }

    public function testRenderTableCellWithWrongTypeCellAttributes()
    {
        $this->expectExceptionMessage('Argument "$cell[\'attributes\']" expects an array, "string" given');
        $this->helper->renderTableCell([
            'data' => 'test',
            'attributes' => 'wrong',
        ], 'td', true);
    }
}
