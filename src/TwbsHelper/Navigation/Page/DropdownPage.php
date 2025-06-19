<?php

namespace TwbsHelper\Navigation\Page;

use Laminas\Navigation\Page\AbstractPage;

class DropdownPage extends AbstractPage
{
    /**
     * Page dropdown options
     *
     * @var array|null
     */
    protected $dropdown;

    public function getDropdown()
    {
        return $this->dropdown;
    }

    public function setDropdown(array $dropdown)
    {
        $this->dropdown = $dropdown;
        return $this;
    }

    public function getHref()
    {
        return '#';
    }
}
