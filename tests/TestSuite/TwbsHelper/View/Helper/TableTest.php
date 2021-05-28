<?php

namespace TestSuite\TwbsHelper\View\Helper;

class TableTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase
{

    /**
     * @var \TwbsHelper\View\Helper\Table
     */
    protected $helper = 'table';

    public function testInvokeWithEmptyRows()
    {
        $this->assertSame('<table class="table"></table>', $this->helper->__invoke([]));
    }

    public function testInvokeWithWrongArgumentHead()
    {
        $this->expectExceptionMessage('Argument "$aRows[\'head\']" expects an array, "string" given');
        $this->helper->__invoke([
            'head' => 'wrong'
        ]);
    }

    public function testInvokeWithWrongArgumentBody()
    {
        $this->expectExceptionMessage('Argument "$aRows[\'body\']" expects an array, "string" given');
        $this->helper->__invoke([
            'body' => 'wrong'
        ]);
    }

    public function testInvokeWithWrongRowType()
    {
        $this->expectExceptionMessage('Argument "$aCell" expects an array or a scalar value, "stdClass" given');
        $this->helper->__invoke([
            new \stdClass()
        ]);
    }
}
