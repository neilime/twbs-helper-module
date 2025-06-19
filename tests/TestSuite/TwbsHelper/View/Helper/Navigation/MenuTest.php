<?php

namespace TestSuite\TwbsHelper\View\Helper\Navigation;

use TestSuite\TwbsHelper\AbstractViewHelperTestCase;
use TwbsHelper\View\Helper\Navigation\Menu;

class MenuTest extends AbstractViewHelperTestCase
{
    /**
     * @var Menu
     */
    protected $helper = 'menu';

    public function testRenderMenuWithoutContainerReturnsEmptyContent()
    {
        $this->assertEquals(
            '',
            $this->helper->renderMenu()
        );
    }
}
