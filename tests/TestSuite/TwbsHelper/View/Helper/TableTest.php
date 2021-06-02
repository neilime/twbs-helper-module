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

    public function testInvokeWithEmptyHeadRows()
    {
        $this->assertSame('<table class="table"></table>', $this->helper->__invoke([
            'head' => []
        ]));
    }

    public function testInvokeWithHeadAttributesRows()
    {
        $this->assertSame(
            '<table class="table"><thead class="test"><tr></tr></thead></table>',
            $this->helper->__invoke([
                'head' => [
                    'attributes' => ['class' => 'test']
                ]
            ])
        );
    }

    public function testInvokeWithHeadRows()
    {
        $this->assertSame(
            '<table class="table"><thead><tr><th scope="col">test</th></tr></thead></table>',
            $this->helper->__invoke([
                'head' => [
                    'rows' => [['test']]
                ]
            ])
        );
    }

    public function testInvokeWithRowAttributes()
    {
        $this->assertSame(
            '<table class="table"><thead><tr class="test"><th scope="col">test</th></tr></thead></table>',
            $this->helper->__invoke([
                'head' => [
                    "rows" => [
                        [
                            "attributes" => ["class" => "test"],
                            "cells" => ["test"]
                        ]
                    ]
                ]
            ])
        );
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

    public function testInvokeWithWrongTypeForRow()
    {
        $this->expectExceptionMessage('Argument "$aCell" expects an array or a scalar value, "stdClass" given');
        $this->helper->__invoke([
            new \stdClass()
        ]);
    }

    public function testInvokeWithWrongTypeForHead()
    {
        $this->expectExceptionMessage('Argument "$aRows[\'head\']" expects an array, "stdClass" given');
        $this->helper->__invoke([
            'head' => new \stdClass()
        ]);
    }

    public function testInvokeWithTypeForWrongBody()
    {
        $this->expectExceptionMessage('Argument "$aRows[\'body\']" expects an array, "stdClass" given');
        $this->helper->__invoke([
            'body' => new \stdClass()
        ]);
    }

    public function testInvokeWithWrongFooterType()
    {
        $this->expectExceptionMessage('Argument "$aRows[\'footer\']" expects an array, "stdClass" given');
        $this->helper->__invoke([
            'footer' => new \stdClass()
        ]);
    }

    public function testInvokeWithWrongTypeForCaption()
    {
        $this->expectExceptionMessage('Argument "$sCaption" expects an array or a scalar value, "stdClass" given');
        $this->helper->__invoke([
            'caption' => new \stdClass()
        ]);
    }

    public function testInvokeWithWrongTypeForGroupRowAttributes()
    {
        $this->expectExceptionMessage('"$aGroupRows[\'attributes\']" expects an array, "stdClass" given');
        $this->helper->__invoke([
            'head' => [
                'attributes' => new \stdClass()
            ]
        ]);
    }

    public function testInvokeWithWrongGroupTypeForRowRows()
    {
        $this->expectExceptionMessage('"$aGroupRows[\'rows\']" expects an array, "stdClass" given');
        $this->helper->__invoke([
            'head' => [
                'rows' => new \stdClass()
            ]
        ]);
    }

    public function testInvokeWithWrongTypeForRowAttributes()
    {
        $this->expectExceptionMessage('Argument "$aRow[\'attributes\']" expects an array, "stdClass" given');
        $this->helper->__invoke([
            'head' => [
                "rows" => [
                    [
                        "attributes" => new \stdclass(),
                        "cells" => ["test"]
                    ]
                ]
            ]
        ]);
    }

    public function testInvokeWithWrongTypeForRowCells()
    {
        $this->expectExceptionMessage('Argument "$aRow[\'cells\']" expects an array, "stdClass" given');
        $this->helper->__invoke([
            'head' => [
                "rows" => [
                    [
                        "cells" => new \stdclass(),
                    ]
                ]
            ]
        ]);
    }

    public function testInvokeWithUndefinedForRowCellData()
    {
        $this->expectExceptionMessage('Argument "$aCell[\'data\']" is undefined');
        $this->helper->__invoke([
            'head' => [
                "rows" => [
                    [
                        "cells" => [[]],
                    ]
                ]
            ]
        ]);
    }

    public function testInvokeWithWrongTypeForRowCellData()
    {
        $this->expectExceptionMessage(
            'Argument "$aCell[\'data\']" expects an array or a scalar value, "stdClass" given'
        );

        $this->helper->__invoke([
            'head' => [
                "rows" => [
                    [
                        "cells" => [["data" => new \stdclass()]],
                    ]
                ]
            ]
        ]);
    }

    public function testInvokeWithWrongTypeForRowCellType()
    {
        $this->expectExceptionMessage('Argument "$aCell[\'type\']" expects a string, "stdClass" given');
        $this->helper->__invoke([
            'head' => [
                "rows" => [
                    [
                        "cells" => [["type" => new \stdclass(), "data" => "test"]],
                    ]
                ]
            ]
        ]);
    }

    public function testInvokeWithWrongTypeForRowCellAttributes()
    {
        $this->expectExceptionMessage('Argument "$aCell[\'attributes\']" expects an array, "stdClass" given');
        $this->helper->__invoke([
            'head' => [
                "rows" => [
                    [
                        "cells" => [["attributes" => new \stdclass(), "data" => "test"]],
                    ]
                ]
            ]
        ]);
    }
}
