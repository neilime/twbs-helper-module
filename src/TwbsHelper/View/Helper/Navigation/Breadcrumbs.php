<?php

namespace TwbsHelper\View\Helper\Navigation;

/**
 * Helper for rendering breadcrumbs
 */
class Breadcrumbs extends \Laminas\View\Helper\Navigation\Breadcrumbs
{

    protected static $navFormat =
    '<nav aria-label="breadcrumb">' . PHP_EOL .
        '    <ol class="breadcrumb">%s</ol>' . PHP_EOL . '</nav>';

    protected static $activeBreadcrumbItemFormat = '<li class="breadcrumb-item active" aria-current="page">%s</li>';

    protected static $breadcrumbItemFormat = '<li class="breadcrumb-item">%s</li>';

    /**
     * Renders breadcrumbs by chaining 'a' elements with the separator
     * registered in the helper.
     *
     * @param  \Laminas\Navigation\AbstractContainer $container [optional] container to render.
     * Default is to render the container registered in the helper.
     * @return string
     */
    public function renderStraight($container = null)
    {
        $this->parseContainer($container);
        if (null === $container) {
            $container = $this->getContainer();
        }

        // Find deepest active
        $activePage = $this->findActive($container);
        if ($activePage === []) {
            return sprintf(static::$navFormat, '');
        }

        $activePage = $activePage['page'];

        // Put the deepest active page last in breadcrumbs
        if ($this->getLinkLast()) {
            $html = $this->htmlify($activePage);
        } else {
            $escapeHtml = $this->getView()->plugin('escapeHtml');
            $html = $this->renderBreadcrumbItem(
                $escapeHtml(
                    $this->translate(
                        $activePage->getLabel(),
                        $activePage->getTextDomain()
                    )
                ),
                true
            );
        }

        // Walk back to root
        while ($parent = $activePage->getParent()) {
            if ($parent instanceof \Laminas\Navigation\Page\AbstractPage) {
                // Prepend crumb to html
                $html = $this->htmlify($parent) . PHP_EOL . $html;
            }

            if ($parent === $container) {
                // At the root of the given container
                break;
            }

            $activePage = $parent;
        }

        return sprintf(
            static::$navFormat,
            $html ? PHP_EOL . $html . PHP_EOL . '    ' : ''
        );
    }


    /**
     * Returns an HTML string containing an 'a' element for the given page
     *
     * @return string HTML string
     */
    public function htmlify(\Laminas\Navigation\Page\AbstractPage $page)
    {
        return $this->renderBreadcrumbItem(
            parent::htmlify($page),
            $page->isActive()
        );
    }


    protected function renderBreadcrumbItem($html, bool $active = false)
    {
        return '        ' . sprintf(
            $active
                ? static::$activeBreadcrumbItemFormat
                : self::$breadcrumbItemFormat,
            $html
        );
    }
}
