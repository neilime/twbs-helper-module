<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering pagination
 */
class PaginationControl extends \Zend\View\Helper\PaginationControl
{
    use \TwbsHelper\View\Helper\HtmlTrait;
    use \TwbsHelper\View\Helper\ClassAttributeTrait;

    /**
     * Default view partial
     *
     * @var string|array
     */
    protected static $defaultViewPartial = 'TwbsHelper/pagination_control';
}
