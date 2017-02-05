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

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Argument "$aRows['head']" expects an array, "string" given
     */
    public function testRenderTableRowsWithWrongArgumentHead() {
        $this->helper->renderTableRows(array(
            'head' => 'wrong'
        ));
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Argument "$aRows['body']" expects an array, "string" given
     */
    public function testRenderTableRowsWithWrongArgumentBody() {
        $this->helper->renderTableRows(array(
            'body' => 'wrong'
        ));
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Body row "0" expects an array, "string" given
     */
    public function testRenderTableRowsWithWrongRowType() {
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

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Head "['attributes']" expects an array, "string" given
     */
    public function testRenderHeadRowsWithWrongAttributesType() {
        $this->helper->renderHeadRows(array(
            'attributes' => 'wrong'
        ));
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Head "['rows']" expects an array, "string" given
     */
    public function testRenderHeadRowsWithWrongRowType() {
        $this->helper->renderHeadRows(array(
            'rows' => 'wrong'
        ));
    }

    public function testRenderHeadRowsWithEmptyRows() {
        $this->assertSame('', $this->helper->renderHeadRows(array()));
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Argument "$aRow['attributes']" expects an array, "string" given
     */
    public function testRenderTableRowWithWrongAttributesType() {
        $this->helper->renderTableRow(array(
            'attributes' => 'wrong'
                ), 'td');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Argument "$aRow['cells']" expects an array, "string" given
     */
    public function testRenderTableRowWithWrongCellsType() {
        $this->helper->renderTableRow(array(
            'cells' => 'wrong'
                ), 'td');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Argument "$sCell" expects an array or a scalar value, "stdClass" given
     */
    public function testRenderTableCellWithEmptyArgumentCell() {
        $this->helper->renderTableCell(new \stdClass(), 'td');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Argument "$sCell['data']" is undefined
     */
    public function testRenderTableCellWithUndefinedCellData() {
        $this->helper->renderTableCell(array(
            'data' => null,
                ), 'td');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Argument "$sCell['data']" expects a scalar value, "array" given
     */
    public function testRenderTableCellWithWrongTypeCellData() {
        $this->helper->renderTableCell(array(
            'data' => array(),
                ), 'td');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Argument "$sCell['type']" expects a string, "array" given
     */
    public function testRenderTableCellWithWrongTypeCellType() {
        $this->helper->renderTableCell(array(
            'data' => 'test',
            'type' => array(),
                ), 'td');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Argument "$sCell['attributes']" expects an array, "string" given
     */
    public function testRenderTableCellWithWrongTypeCellAttributes() {
        $this->helper->renderTableCell(array(
            'data' => 'test',
            'attributes' => 'wrong',
                ), 'td');
    }

}
