<?php

namespace TwbsHelper\View\Helper\Navigation;

/**
 * Helper for rendering abbreviations
 */
class Menu extends \Laminas\View\Helper\Navigation\Menu
{
    use \TwbsHelper\View\Helper\HtmlTrait;

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
        // Create iterator
        $oIterator = new \RecursiveIteratorIterator(
            $container,
            \RecursiveIteratorIterator::SELF_FIRST
        );

        foreach ($oIterator as $oPage) {
            $aPageClasses = ['nav-item'];
            if ($oPage instanceof \TwbsHelper\Navigation\Page\DropdownPage) {
                $aPageClasses[] = 'dropdown';
            }
            $oPage->setClass(join(
                ' ',
                $this->addClassesAttribute($oPage->getClass() ?? '', $aPageClasses)
            ));
        }

        $aUlClasses = [$this->ulClass];
        $aItemClasses = [];

        foreach (
            [
            'tabs' => 'nav-tabs',
            'pills' => 'nav-pills',
            'fill' => 'nav-fill',
            'justified' => 'nav-justified',
            'centered' => 'justify-content-center',
            'right_aligned' => 'justify-content-end',
            'vertical' => 'flex-column',
            ] as $sOption => $sClassName
        ) {
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

        if (!$sContent) {
            return '';
        }

        if (isset($aOptions['list']) && $aOptions['list'] === false) {
            $sContent = preg_replace('/(<)ul([^>]*>[\s\S]*<\/)ul([^>]*>)/imU', '$1nav$2nav$3', $sContent);
            if (!$sContent) {
                return '';
            }

            $sContent = preg_replace('/<li[^>]*>\s*(\S(.*\S)?)\s*<\/li[^>]*>/imU', '$1', $sContent);
            if (!$sContent) {
                return '';
            }

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
                        join(' ', $this->cleanClassesAttribute($aItemClasses)) . ' '
                    )
                ),
                $sContent
            );
        }

        return $sContent ?? '';
    }

    /**
     * Returns an HTML string containing an 'a' element for the given page if
     * the page's href is not empty, and a 'span' element if it is empty.
     *
     * Overrides {@link AbstractHelper::htmlify()}.
     *
     * @param \Laminas\Navigation\Page\AbstractPage $oPage page to generate HTML for
     * @param bool $bEscapeLabel        Whether or not to escape the label
     * @param bool $bAddClassToListItem Whether or not to add the page class to the list item
     * @return string
     */
    public function htmlify(
        \Laminas\Navigation\Page\AbstractPage $oPage,
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

        if ($oPage instanceof \TwbsHelper\Navigation\Page\DropdownPage) {
            $aClasses[] = 'dropdown-toggle';
            $aDropdownOptions = $oPage->getDropdown();
            $aDropdownAttributes = [];
            if (\Laminas\Stdlib\ArrayUtils::isList($aDropdownOptions)) {
                $aDropdownOptions = ['items' => $aDropdownOptions];
            } else {
                if (!empty($aDropdownOptions['attributes'])) {
                    $aDropdownAttributes = $aDropdownOptions['attributes'];
                }
            }
            return trim($this->addProperIndentation($this->getView()->plugin('dropdown')->render([
                'name' => 'dropdown',
                'options' => [
                    'disable_twbs' => true,
                    'tag' => 'a',
                    'label' => $oPage->getLabel(),
                    'dropdown' => \Laminas\Stdlib\ArrayUtils::merge(
                        ['disable_container' => true],
                        $aDropdownOptions
                    ),
                ],
                'attributes' => $this->setClassesToAttributes($aDropdownAttributes, $aClasses)
            ]), true, $this->indentation . $this->indentation));
        }


        $oPage->setClass(join(' ', $aClasses));

        if (
            $bEscapeLabel
            && $this->isHTML($this->translate($oPage->getLabel(), $oPage->getTextDomain()))
        ) {
            $bEscapeLabel = false;
        }

        $sHtml = parent::htmlify($oPage, $bEscapeLabel, false);
        $oPage->setClass($sPageClass);
        return $sHtml;
    }

    /**
     * Converts an associative array to a string of tag attributes.
     *
     * Overloads {@link View\Helper\AbstractHtmlElement::htmlAttribs()}.
     *
     * @param  array $aAttributes  an array where each key-value pair is converted
     *                         to an attribute name and value
     * @return string
     */
    protected function htmlAttribs($aAttributes)
    {
        if (isset($aAttributes['class'])) {
            if (strstr($aAttributes['class'], 'disabled')) {
                $aAttributes['tabindex'] = '-1';
                $aAttributes['aria-disabled'] = 'true';
            }
            if (strstr($aAttributes['class'], 'dropdown-toggle')) {
                $aAttributes['data-toggle'] = 'dropdown';
                $aAttributes['role'] = 'button';
                $aAttributes['aria-haspopup'] = 'true';
                $aAttributes['aria-expanded'] = 'false';
            }
        }

        return parent::htmlAttribs($aAttributes);
    }
}
