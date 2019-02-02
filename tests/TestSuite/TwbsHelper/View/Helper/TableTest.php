<?php

namespace TestSuite\TwbsHelper\View\Helper;

class TableTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase {

    /**
     * @var \TwbsHelper\View\Helper\Table
     */
    protected $helper = 'table';

    public function testRenderTableRowsWithEmptyRows() {
        $this->assertSame('', $this->helper->renderTableRows(array()));
    }

    public function testRenderTableRowsWithWrongArgumentHead() {        
        $this->expectExceptionMessage('Argument "$aRows[\'head\']" expects an array, "string" given');
        $this->helper->renderTableRows(array(
            'head' => 'wrong'
        ));
    }

    public function testRenderTableRowsWithWrongArgumentBody() {        
        $this->expectExceptionMessage('Argument "$aRows[\'body\']" expects an array, "string" given');
        $this->helper->renderTableRows(array(
            'body' => 'wrong'
        ));
    }

    public function testRenderTableRowsWithWrongRowType() {
        $this->expectExceptionMessage('Body row "0" expects an array, "string" given');
        $this->helper->renderTableRows(array(
            'wrong'
        ));
    }

    public function testRenderTableRowsWithHeadDefinedInFirstBodyRow() {
        $sExpectedMarkup = '    <thead>' . PHP_EOL .
                '        <tr>' . PHP_EOL .
                '            <th>head 1</th>' . PHP_EOL .
                '            <th>head 2</th>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '    </thead>' . PHP_EOL .
                '    <tbody>' . PHP_EOL .
                '        <tr>' . PHP_EOL .
                '            <td>value 1</td>' . PHP_EOL .
                '            <td>value 2</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '    </tbody>' . PHP_EOL;
        $this->assertSame($sExpectedMarkup, $this->helper->renderTableRows(array(
                    array('head 1' => 'value 1', 'head 2' => 'value 2'),
        )));
    }

    public function testRenderHeadRowsWithWrongAttributesType() {        
        $this->expectExceptionMessage('Head "[\'attributes\']" expects an array, "string" given');
        $this->helper->renderHeadRows(array(
            'attributes' => 'wrong'
        ));
    }

    public function testRenderHeadRowsWithWrongRowType() {        
        $this->expectExceptionMessage('Head "[\'rows\']" expects an array, "string" given');
        $this->helper->renderHeadRows(array(
            'rows' => 'wrong'
        ));
    }

    public function testRenderHeadRowsWithEmptyRows() {
        $this->assertSame('', $this->helper->renderHeadRows(array()));
    }

    public function testRenderTableRowWithWrongAttributesType() {
        $this->expectExceptionMessage('Argument "$aRow[\'attributes\']" expects an array, "string" given');
        $this->helper->renderTableRow(array(
            'attributes' => 'wrong'
                ), 'td');
    }

    public function testRenderTableRowWithWrongCellsType() {
        $this->expectExceptionMessage('Argument "$aRow[\'cells\']" expects an array, "string" given');
        $this->helper->renderTableRow(array(
            'cells' => 'wrong'
                ), 'td');
    }

    public function testRenderTableCellWithEmptyArgumentCell() {        
        $this->expectExceptionMessage('Argument "$sCell" expects an array or a scalar value, "stdClass" given');
        $this->helper->renderTableCell(new \stdClass(), 'td');
    }

    public function testRenderTableCellWithUndefinedCellData() {        
        $this->expectExceptionMessage('Argument "$sCell[\'data\']" is undefined');
        $this->helper->renderTableCell(array(
            'data' => null,
                ), 'td');
    }

    public function testRenderTableCellWithWrongTypeCellData() {        
        $this->expectExceptionMessage('Argument "$sCell[\'data\']" expects a scalar value, "array" given');
        $this->helper->renderTableCell(array(
            'data' => array(),
                ), 'td');
    }

    public function testRenderTableCellWithWrongTypeCellType() {        
        $this->expectExceptionMessage('Argument "$sCell[\'type\']" expects a string, "array" given');
        $this->helper->renderTableCell(array(
            'data' => 'test',
            'type' => array(),
                ), 'td');
    }

    public function testRenderTableCellWithWrongTypeCellAttributes() {        
        $this->expectExceptionMessage('Argument "$sCell[\'attributes\']" expects an array, "string" given');
        $this->helper->renderTableCell(array(
            'data' => 'test',
            'attributes' => 'wrong',
                ), 'td');
    }

}
