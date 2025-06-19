<?php

namespace TestSuite\TwbsHelper\View\Helper;

use TestSuite\TwbsHelper\AbstractViewHelperTestCase;
use TwbsHelper\View\Helper\DescriptionList;
use stdClass;

class DescriptionListTest extends AbstractViewHelperTestCase
{
    /**
     * @var DescriptionList
     */
    protected $helper = 'descriptionList';

    public function testRenderWithTermAndDetailProperties()
    {
        $this->assertSame(
            '<dl class="row">' . PHP_EOL .
                '    <dt class="col-sm-3">test</dt>' . PHP_EOL .
                '    <dd class="col-sm-9">test</dd>' . PHP_EOL .
                '</dl>',
            $this->helper->render([
                ['term' => 'test', 'detail' => 'test'],
            ])
        );
    }

    public function testRenderWithEmptyArgumentItems()
    {
        $this->expectExceptionMessage('Argument "$items" must not be empty');
        $this->helper->render([]);
    }

    public function testRenderWithWrongTypeForItem()
    {
        $this->expectExceptionMessage('Argument "$items[0]" expects a string or an array, "stdClass" given');
        $this->helper->render([
            new stdClass(),
        ]);
    }

    public function testRenderWithWrongTypeForItemTerm()
    {
        $this->expectExceptionMessage('Argument "$items[0][term]" expects a string or an array, "stdClass" given');
        $this->helper->render([
            ['term' => new stdClass()],
        ]);
    }

    public function testRenderWithWrongTypeForItemDetail()
    {
        $this->expectExceptionMessage('Argument "$items[0][detail]" expects a string or an array, "stdClass" given');
        $this->helper->render([
            ['term' => 'test', 'detail' => new stdClass()],
        ]);
    }
}
