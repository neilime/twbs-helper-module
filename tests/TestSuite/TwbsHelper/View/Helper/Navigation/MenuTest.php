<?php

namespace TestSuite\TwbsHelper\View\Helper\Navigation;

class MenuTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase
{
    /**
     * @var \TwbsHelper\View\Helper\Navigation\Menu
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
