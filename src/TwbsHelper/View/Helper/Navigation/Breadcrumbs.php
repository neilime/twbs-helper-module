<?php

namespace TwbsHelper\View\Helper\Navigation;

/**
 * Helper for rendering breadcrumbs
 */
class Breadcrumbs extends \Laminas\View\Helper\Navigation\Breadcrumbs
{
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
        if (null === $container) {
            $container = $this->getContainer();
        }
        $this->parseContainer($container);

        // Find deepest active
        $activePage = $this->findActive($container);
        if ($activePage === []) {
            return $this->renderNavContainer('');
        }

        $activePage = $activePage['page'];

        // Put the deepest active page last in breadcrumbs
        if ($this->getLinkLast() && !$activePage->isActive()) {
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

        return $this->renderNavContainer($html);
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

    protected function renderNavContainer(string $content): string
    {
        $olContent = $this->getView()->plugin('htmlElement')->__invoke(
            'ol',
            ['class' => 'breadcrumb'],
            $content
        );

        $label = 'breadcrumb';
        if ($this->hasTranslator()) {
            $label = $this->getTranslator()->translate($label);
        }
        $attributes = [
            'aria-label' => $label,
        ];

        $separator = trim($this->getSeparator());
        if ($separator !== '&gt;') {
            if (!preg_match('/^\s*url(.+)\s*$/', $separator)) {
                $separator = '\'' . $separator . '\'';
            }

            $attributes['style'] = '--bs-breadcrumb-divider: ' . $separator . ';';
        }

        return $this->getView()->plugin('htmlElement')->__invoke('nav', $attributes, $olContent);
    }


    protected function renderBreadcrumbItem(string $content, bool $active = false)
    {
        $attributes = $this->getView()->plugin('htmlattributes')->__invoke(['class' => 'breadcrumb-item']);
        if ($active) {
            $attributes->merge(['class' => ['active']]);
            $attributes['aria-current'] = 'page';
        }

        return $this->getView()->plugin('htmlElement')->__invoke('li', $attributes, $content);
    }
}
