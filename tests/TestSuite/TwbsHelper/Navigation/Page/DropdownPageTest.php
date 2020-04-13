<?php

namespace TestSuite\TwbsHelper\Navigation\Page;

class DropdownPageTest extends \PHPUnit\Framework\TestCase
{

    public function testInitializeANewDropdownPage()
    {
        $oDropdownPage = new \TwbsHelper\Navigation\Page\DropdownPage();
        $this->assertNull($oDropdownPage->getDropdown());
        $this->assertEquals('#', $oDropdownPage->getHref());
    }

    public function testSetDropdown()
    {
        $oDropdownPage = new \TwbsHelper\Navigation\Page\DropdownPage();
        $aDropdown = [];

        $oDropdownPage->setDropdown($aDropdown);

        $this->assertSame($aDropdown, $oDropdownPage->getDropdown());
    }
}
