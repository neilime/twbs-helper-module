<?php

namespace TwbsHelper\View\Helper\Navigation;

/**
 * Helper for rendering abbreviations
 */
class Menu extends \Zend\View\Helper\Navigation\Menu
{
    use \TwbsHelper\View\Helper\ClassAttributeTrait;

    /**
     * CSS class to use for the ul element.
     *
     * @var string
     */
    protected $ulClass = 'nav';

    /**
     * Whether invisible items should be rendered by this helper
     *
     * @var bool
     */
    protected $renderInvisible = true;

    public function renderMenu($container = null, array $aOptions = [])
    {
        $this->parseContainer($container);
        if (null === $container) {
            $container = $this->getContainer();
        }
        // create iterator
        $oIterator = new \RecursiveIteratorIterator(
            $container,
            \RecursiveIteratorIterator::SELF_FIRST
        );

        foreach ($oIterator as $oPage) {
            $oPage->setClass(join(' ', $this->addClassesAttribute($oPage->getClass() ?? '', ['nav-item'])));
        }

        $aUlClasses = [$this->ulClass];
        if (!empty($aOptions['tabs'])) {
            $aUlClasses[] = 'nav-tabs';
        }
        if (!empty($aOptions['pills'])) {
            $aUlClasses[] = 'nav-pills';
        }
        $aOptions['ulClass'] = join(' ', $this->addClassesAttribute($aOptions['ulClass'] ?? '', $aUlClasses));

        return parent::renderMenu(
            $container,
            array_merge([
                'liActiveClass' => '',
                'addClassToListItem' => true,
                'onlyActiveBranch' => false,
            ], $aOptions),
        );
    }

    /**
     * Returns an HTML string containing an 'a' element for the given page if
     * the page's href is not empty, and a 'span' element if it is empty.
     *
     * Overrides {@link AbstractHelper::htmlify()}.
     *
     * @param  AbstractPage $page               page to generate HTML for
     * @param  bool         $escapeLabel        Whether or not to escape the label
     * @param  bool         $addClassToListItem Whether or not to add the page class to the list item
     * @return string
     */
    public function htmlify(\Zend\Navigation\Page\AbstractPage $oPage, $escapeLabel = true, $addClassToListItem = false)
    {
        $sPageClass = $oPage->getClass();

        $aClasses = ['nav-link'];
        if ($oPage->isActive(true)) {
            $aClasses[] = 'active';
        }
        if (!$oPage->isVisible(true)) {
            $aClasses[] = 'disabled';
        }

        $oPage->setClass(join(' ', $aClasses));
        $sHtml = parent::htmlify($oPage, $escapeLabel, false);
        $oPage->setClass($sPageClass);
        return $sHtml;
    }

    /**
     * Converts an associative array to a string of tag attributes.
     *
     * Overloads {@link View\Helper\AbstractHtmlElement::htmlAttribs()}.
     *
     * @param  array $attribs  an array where each key-value pair is converted
     *                         to an attribute name and value
     * @return string
     */
    protected function htmlAttribs($attribs)
    {
        if (isset($attribs['class']) && strstr($attribs['class'], 'disabled')) {
            $attribs['tabindex'] = '-1';
            $attribs['aria-disabled'] = 'true';
        }

        return parent::htmlAttribs($attribs);
    }
}
