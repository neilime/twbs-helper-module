<?php

namespace TestSuite\TwbsHelper\View\Helper;

class HtmlListTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase
{

    /**
     * @var \TwbsHelper\View\Helper\HtmlList
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
        $sExpectedMarkup = '<ul>' . PHP_EOL .
            '    <li>' . PHP_EOL .
            '        <ul>' . PHP_EOL .
            '            <li>test</li>' . PHP_EOL .
            '        </ul>' . PHP_EOL .
            '    </li>' . PHP_EOL .
            '</ul>';

        $this->assertSame($sExpectedMarkup, $this->helper->__invoke([['test']]));
    }

    public function testInvokeWithEmptyArgumentItems()
    {
        $this->expectExceptionMessage('Argument "$aItems" must not be empty');
        $this->helper->__invoke([]);
    }
}
