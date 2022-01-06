<?php

namespace TestSuite\TwbsHelper\Navigation\Page;

class DropdownPageTest extends \PHPUnit\Framework\TestCase
{
    public function testInitializeANewDropdownPage()
    {
        $dropdownPage = new \TwbsHelper\Navigation\Page\DropdownPage();
        $this->assertNull($dropdownPage->getDropdown());
        $this->assertEquals('#', $dropdownPage->getHref());
    }

    public function testSetDropdown()
    {
        $dropdownPage = new \TwbsHelper\Navigation\Page\DropdownPage();
        $dropdown = [];

        $dropdownPage->setDropdown($dropdown);

        $this->assertSame($dropdown, $dropdownPage->getDropdown());
    }
}
