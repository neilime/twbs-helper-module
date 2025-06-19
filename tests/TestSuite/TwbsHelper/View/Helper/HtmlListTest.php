<?php

namespace TestSuite\TwbsHelper\View\Helper;

use TestSuite\TwbsHelper\AbstractViewHelperTestCase;
use TwbsHelper\View\Helper\HtmlList;

class HtmlListTest extends AbstractViewHelperTestCase
{
    /**
     * @var HtmlList
     */
    protected $helper = 'htmlList';

    public function testInvokeWithoutPredefinedAttributes()
    {
        $this->assertSame(
            '<ul>' . PHP_EOL . '    <li>test</li>' . PHP_EOL . '</ul>',
            $this->helper->__invoke(['test'])
        );
    }

    public function testInvokeWithDirectNestedList()
    {
        $expectedMarkup = '<ul>' . PHP_EOL .
            '    <li>' . PHP_EOL .
            '        <ul>' . PHP_EOL .
            '            <li>test</li>' . PHP_EOL .
            '        </ul>' . PHP_EOL .
            '    </li>' . PHP_EOL .
            '</ul>';

        $this->assertSame($expectedMarkup, $this->helper->__invoke([['test']]));
    }

    public function testInvokeWithEmptyArgumentItems()
    {
        $this->expectExceptionMessage('Argument "$items" must not be empty');
        $this->helper->__invoke([]);
    }
}
