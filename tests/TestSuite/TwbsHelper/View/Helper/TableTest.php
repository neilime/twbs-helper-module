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
        $this->helper->__invoke(array(
            'head' => 'wrong'
        ));
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Argument "$aRows['body']" expects an array, "string" given
     */
    public function testRenderTableRowsWithWrongArgumentBody() {
        $this->helper->__invoke(array(
            'body' => 'wrong'
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

}
