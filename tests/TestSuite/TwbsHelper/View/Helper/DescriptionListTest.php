<?php

namespace TestSuite\TwbsHelper\View\Helper;

class DescriptionListTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase
{

    /**
     * @var \TwbsHelper\View\Helper\DescriptionList
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
                ['term' => 'test', 'detail' => 'test']
            ])
        );
    }

    public function testRenderWithEmptyArgumentItems()
    {
        $this->expectExceptionMessage('Argument "$aItems" must not be empty');
        $this->helper->render([]);
    }

    public function testRenderWithWrongTypeForItem()
    {
        $this->expectExceptionMessage('Argument "$aItems[0]" expects a string or an array, "stdClass" given');
        $this->helper->render([
            new \stdClass()
        ]);
    }

    public function testRenderWithWrongTypeForItemTerm()
    {
        $this->expectExceptionMessage('Argument "$aItems[0][term]" expects a string or an array, "stdClass" given');
        $this->helper->render([
            ['term' => new \stdClass()]
        ]);
    }

    public function testRenderWithWrongTypeForItemDetail()
    {
        $this->expectExceptionMessage('Argument "$aItems[0][detail]" expects a string or an array, "stdClass" given');
        $this->helper->render([
            ['term' => 'test', 'detail' => new \stdClass()]
        ]);
    }
}
