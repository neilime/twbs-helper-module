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
     * @param  \Laminas\Navigation\AbstractContainer $oContainer [optional] container to render.
     * Default is to render the container registered in the helper.
     * @return string
     */
    public function renderStraight($oContainer = null)
    {
        $this->parseContainer($oContainer);
        if (null === $oContainer) {
            $oContainer = $this->getContainer();
        }

        // Find deepest active
        $oActivePage = $this->findActive($oContainer);
        if (!$oActivePage) {
            return sprintf(static::$navFormat, '');
        }

        $oActivePage = $oActivePage['page'];

        // Put the deepest active page last in breadcrumbs
        if ($this->getLinkLast()) {
            $sHtml = $this->htmlify($oActivePage);
        } else {
            $oEscapeHtml = $this->getView()->plugin('escapeHtml');
            $sHtml = $this->renderBreadcrumbItem(
                $oEscapeHtml(
                    $this->translate(
                        $oActivePage->getLabel(),
                        $oActivePage->getTextDomain()
                    )
                ),
                true
            );
        }

        // Walk back to root
        while ($parent = $oActivePage->getParent()) {
            if ($parent instanceof \Laminas\Navigation\Page\AbstractPage) {
                // Prepend crumb to html
                $sHtml = $this->htmlify($parent) . PHP_EOL . $sHtml;
            }

            if ($parent === $oContainer) {
                // At the root of the given container
                break;
            }

            $oActivePage = $parent;
        }

        return sprintf(
            static::$navFormat,
            $sHtml ? PHP_EOL . $sHtml . PHP_EOL . '    ' : ''
        );
    }


    /**
     * Returns an HTML string containing an 'a' element for the given page
     *
     * @param \Laminas\Navigation\Page\AbstractPage $oPage
     * @return string HTML string
     */
    public function htmlify(\Laminas\Navigation\Page\AbstractPage $oPage)
    {
        return $this->renderBreadcrumbItem(
            parent::htmlify($oPage),
            $oPage->isActive()
        );
    }


    protected function renderBreadcrumbItem($sHtml, bool $bActive = false)
    {
        return '        ' . sprintf(
            $bActive
                ? static::$activeBreadcrumbItemFormat
                : self::$breadcrumbItemFormat,
            $sHtml
        );
    }
}
