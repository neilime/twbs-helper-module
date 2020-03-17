<?php

namespace TwbsHelper\Navigation\Page;

class DropdownPage extends \Laminas\Navigation\Page\AbstractPage
{
    /**
     * Page dropdown options
     *
     * @var array|null
     */
    protected $dropdown = null;

    public function getDropdown()
    {
        return $this->dropdown;
    }

    public function setDropdown(array $aDropdown)
    {
        $this->dropdown = $aDropdown;
        return $this;
    }

    public function getHref()
    {
        return '#';
    }
}
