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
        $aItemClasses = [];

        foreach ([
            'tabs' => 'nav-tabs',
            'pills' => 'nav-pills',
            'fill' => 'nav-fill',
            'justified' => 'nav-justified',
            'centered' => 'justify-content-center',
            'right_aligned' => 'justify-content-end',
            'vertical' => 'flex-column',
        ] as $sOption => $sClassName) {
            if (!empty($aOptions[$sOption])) {
                $aUlClasses[] = $sClassName;
            }
        }


        if (isset($aOptions['vertical']) && is_string($aOptions['vertical'])) {
            $aUlClasses[] = $this->getSizeClass($aOptions['vertical'], 'flex-%s-row');
            $aItemClasses[] = $this->getSizeClass($aOptions['vertical'], 'flex-%s-fill');
            $aItemClasses[] = $this->getSizeClass($aOptions['vertical'], 'text-%s-center');
        }

        $aOptions['ulClass'] = join(' ', $this->addClassesAttribute($aOptions['ulClass'] ?? '', $aUlClasses));

        $sContent = parent::renderMenu(
            $container,
            array_merge([
                'liActiveClass' => '',
                'addClassToListItem' => true,
                'onlyActiveBranch' => false,
            ], $aOptions)
        );

        if (isset($aOptions['list']) && $aOptions['list'] === false) {
            $sContent = preg_replace('/(<)ul([^>]*>[\s\S]*<\/)ul([^>]*>)/imU', '$1nav$2nav$3', $sContent);
            $sContent = preg_replace('/<li[^>]*>\s*(\S(.*\S)?)\s*<\/li[^>]*>/imU', '$1', $sContent);

            // When using a <nav>-based navigation, include .nav-item on the anchors
            // For nav-fill & nav-justified
            if (
                !empty($aOptions['fill'])
                || !empty($aOptions['justified'])
            ) {
                $aItemClasses[] = 'nav-item';
            }
        }

        if ($aItemClasses) {
            $sContent = preg_replace(
                '/(<a.*class=")([^"]*"[^>]*>)/imU',
                sprintf(
                    '$1%s$2',
                    $this->getView()->plugin('escapehtmlattr')->__invoke(
                        join(' ', $this->cleanClassesAttribute($aItemClasses)).' '
                    )
                ),
                $sContent
            );
        }

        return $sContent;
    }

    /**
     * Returns an HTML string containing an 'a' element for the given page if
     * the page's href is not empty, and a 'span' element if it is empty.
     *
     * Overrides {@link AbstractHelper::htmlify()}.
     *
     * @param \Zend\Navigation\Page\AbstractPage $oPage page to generate HTML for
     * @param bool $bEscapeLabel        Whether or not to escape the label
     * @param bool $bAddClassToListItem Whether or not to add the page class to the list item
     * @return string
     */
    public function htmlify(
        \Zend\Navigation\Page\AbstractPage $oPage,
        $bEscapeLabel = true,
        $bAddClassToListItem = false
    ) {
        $sPageClass = $oPage->getClass();

        $aClasses = ['nav-link'];
        if ($oPage->isActive(true)) {
            $aClasses[] = 'active';
        }
        if (!$oPage->isVisible(true)) {
            $aClasses[] = 'disabled';
        }

        $oPage->setClass(join(' ', $aClasses));
        $sHtml = parent::htmlify($oPage, $bEscapeLabel, false);
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
