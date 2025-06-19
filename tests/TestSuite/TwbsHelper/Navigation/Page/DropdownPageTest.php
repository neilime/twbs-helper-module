<?php

namespace TestSuite\TwbsHelper\Navigation\Page;

use PHPUnit\Framework\TestCase;
use TwbsHelper\Navigation\Page\DropdownPage;

class DropdownPageTest extends TestCase
{
    public function testInitializeANewDropdownPage()
    {
        $dropdownPage = new DropdownPage();
        $this->assertNull($dropdownPage->getDropdown());
        $this->assertEquals('#', $dropdownPage->getHref());
    }

    public function testSetDropdown()
    {
        $dropdownPage = new DropdownPage();
        $dropdown = [];

        $dropdownPage->setDropdown($dropdown);

        $this->assertSame($dropdown, $dropdownPage->getDropdown());
    }
}
