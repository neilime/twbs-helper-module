<?php

namespace TwbsHelper\View\Helper\Navigation;

/**
 * Helper for rendering abbreviations
 */
class Breadcrumbs extends \Zend\View\Helper\Navigation\Breadcrumbs
{
    protected static $navFormat = '<nav aria-label="breadcrumb">' . PHP_EOL .
        '    <ol class="breadcrumb">%s</ol>' . PHP_EOL .
        '</nav>';

    protected static $activeBreadcrumbItemFormat = '<li class="breadcrumb-item active" aria-current="page">%s</li>';
    protected static $breadcrumbItemFormat = '<li class="breadcrumb-item">%s</li>';

    /**
     * Indentation string
     *
     * @var string
     */
    protected $indent = '    ';


    /**
     * Renders breadcrumbs by chaining 'a' elements with the separator
     * registered in the helper.
     *
     * @param  AbstractContainer $container [optional] container to render. Default is
     *                                      to render the container registered in the helper.
     * @return string
     */
    public function renderStraight($container = null)
    {

        $this->parseContainer($container);
        if (null === $container) {
            $container = $this->getContainer();
        }

        // find deepest active
        if (!$active = $this->findActive($container)) {
            return sprintf(static::$navFormat, '');
        }

        $active = $active['page'];

        // put the deepest active page last in breadcrumbs
        if ($this->getLinkLast()) {
            $html = $this->htmlify($active);
        } else {
            /** @var \Zend\View\Helper\EscapeHtml $escaper */
            $escaper = $this->view->plugin('escapeHtml');
            $html    = $this->renderBreadcrumbItem($escaper(
                $this->translate($active->getLabel(), $active->getTextDomain())
            ), true);
        }

        // walk back to root
        while ($parent = $active->getParent()) {
            if ($parent instanceof \Zend\Navigation\Page\AbstractPage) {
                // prepend crumb to html
                $html = $this->htmlify($parent) . PHP_EOL . $html;
            }

            if ($parent === $container) {
                // at the root of the given container
                break;
            }

            $active = $parent;
        }

        return sprintf(static::$navFormat, $html ? PHP_EOL . $html . PHP_EOL . $this->indent : '');
    }

    /**
     * Returns an HTML string containing an 'a' element for the given page
     *
     * @param \Zend\Navigation\Page\AbstractPage $oPage  page to generate HTML for
     * @return string              HTML string
     */
    public function htmlify(\Zend\Navigation\Page\AbstractPage $oPage)
    {
        return $this->renderBreadcrumbItem(parent::htmlify($oPage), $oPage->isActive());
    }

    protected function renderBreadcrumbItem($sHtml, bool $active = false)
    {
        return str_repeat($this->indent, 2) . sprintf($active ? static::$activeBreadcrumbItemFormat : self::$breadcrumbItemFormat, $sHtml);
    }
}
