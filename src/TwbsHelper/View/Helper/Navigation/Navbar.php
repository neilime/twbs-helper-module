<?php

namespace TwbsHelper\View\Helper\Navigation;

/**
 * Helper for rendering navbar
 */
class Navbar extends \Zend\View\Helper\Navigation\AbstractHelper
{
    use \TwbsHelper\View\Helper\ClassAttributeTrait;
    use \TwbsHelper\View\Helper\HtmlTrait;
    use \Zend\I18n\Translator\TranslatorAwareTrait;

    /**
     * View helper entry point.
     *
     * Retrieves helper and optionally sets container to operate on.
     *
     * @param \Zend\Navigation\AbstractContainer $oContainer [optional] container to operate on
     * @return self|string
     */
    public function __invoke($oContainer = null)
    {
        if (null !== $oContainer) {
            $this->setContainer($oContainer);
        }

        return $this;
    }

    /**
     * Renders navbar.
     *
     * Implements {@link HelperInterface::render()}.
     *
     * @see renderNavbar()
     * @param \Zend\Navigation\AbstractContainer $oContainer [optional] container to render. Default is
     *     to render the container registered in the helper.
     * @param array $aOptions [optional] options for controlling rendering
     * @return string
     */
    public function render($oContainer = null, array $aOptions = []): string
    {
        return $this->renderNavbar($oContainer, $aOptions);
    }

    /**
     * Renders helper.
     *
     * Renders a HTML 'ul' for the given $container. If $container is not given,
     * the container registered in the helper will be used.
     *
     * Available $options:
     *
     * @param \Zend\Navigation\AbstractContainer $oContainer [optional] container to create menu from.
     *     Default is to use the container retrieved from {@link getContainer()}.
     * @param array $aOptions [optional] options for controlling rendering
     * @return string
     */
    public function renderNavbar($oContainer = null, array $aOptions = []): string
    {
        $this->parseContainer($oContainer);
        if (null === $oContainer) {
            $oContainer = $this->getContainer();
        }

        $aAttributes = $aOptions['attributes'] ?? [];
        $sId = $aAttributes['id'] ?? null;
        unset($aAttributes['id']);

        $aClasses = ['navbar'];
        if (!isset($aOptions['expand']) || $aOptions['expand'] !== false) {
            $aClasses[] = $this->getSizeClass(
                $aOptions['expand'] ?? 'lg',
                'navbar-expand'
            );
        }
        if (!isset($aOptions['variant']) || $aOptions['variant'] !== false) {
            $aClasses[] = $this->getVariantClass(
                $aOptions['variant'] ?? 'light',
                'navbar'
            );
        }
        if (!isset($aOptions['background']) || $aOptions['background'] !== false) {
            $aClasses[] = $this->getVariantClass(
                $aOptions['background'] ?? 'light',
                'bg'
            );
        }

        $sContent = '';

        // Brand
        if (isset($aOptions['brand'])) {
            $sContent .= ($sContent ? PHP_EOL : '') . $this->renderBrand($aOptions['brand']);
        }

        // Toggler
        if (!isset($aOptions['toggler']) || $aOptions['toggler'] !== false) {
            $sContent .= ($sContent ? PHP_EOL : '') . $this->renderToggler(
                $aOptions['toggler'] ?? [],
                $sId
            );
        }

        // Nav
        $aNavContainerAttributes = [];
        if ($sId) {
            $aNavContainerAttributes['id'] = $sId;
        }

        $sNavContent =  $this->renderNav($oContainer, $aOptions['nav'] ?? []);

        // Nav form
        if (isset($aOptions['form'])) {
            $sNavContent .= ($sNavContent ? PHP_EOL : '') . $this->renderForm($aOptions['form']);
        }

        // Nav text
        if (isset($aOptions['text'])) {
            $sTextContent = $this->renderText($aOptions['text']);
            if ($sNavContent) {
                $sNavContent .=  PHP_EOL . $sTextContent;
            } else {
                $sContent .= ($sContent ? PHP_EOL : '') . $sTextContent;
            }
        }

        if ($sNavContent) {
            $bCollapse = !isset($aOptions['collapse']) || $aOptions['collapse'] !== false;
            $sContent .= ($sContent ? PHP_EOL : '') . ($bCollapse
                ? $this->htmlElement(
                    'div',
                    $this->setClassesToAttributes(
                        $aNavContainerAttributes,
                        ['collapse', 'navbar-collapse']
                    ),
                    $sNavContent
                )
                : $sNavContent);
        }

        $sContainerOption = $aOptions['container'] ?? null;

        if ($sContainerOption === 'within') {
            $sContent = $this->htmlElement(
                'div',
                ['class' => 'container'],
                $sContent
            );
        }

        $sContent = $this->htmlElement(
            'nav',
            $this->setClassesToAttributes($aAttributes, $aClasses),
            $sContent
        );

        if ($sContainerOption === 'wrap') {
            $sContent = $this->htmlElement(
                'div',
                ['class' => 'container'],
                $sContent
            );
        }

        return $sContent;
    }

    public function renderToggler(array $aTogglerOptions, string $sId = null): string
    {
        $oTranslator = $this->getTranslator();

        $aAttributes = [
            'class' => 'navbar-toggler',
            'type' => 'button',
            'data-toggle' => 'collapse',
            'aria-expanded' => 'false',
            'aria-label' => $oTranslator
                ? $oTranslator->translate('Toggle navigation', $this->getTranslatorTextDomain())
                : 'Toggle navigation',
        ];

        if ($sId) {
            $aAttributes['data-target'] = '#' . $sId;
            $aAttributes['aria-controls'] = $sId;
        }

        return $this->getView()->plugin('formButton')->__invoke(\Zend\Stdlib\ArrayUtils::merge(
            [
                'name' => 'navbar_toggler',
                'options' => [
                    'label' => '<span class="navbar-toggler-icon"></span>',
                    'disable_twbs' => true,
                ],
                'attributes' => $aAttributes,
            ],
            $aTogglerOptions
        ));
    }

    public function renderBrand($aBrandOptions): string
    {
        if (is_string($aBrandOptions)) {
            $aBrandOptions = ['content' => $aBrandOptions];
        }

        $sContent = '';
        if (!empty($aBrandOptions['content'])) {
            $sContent .= $aBrandOptions['content'];
        }

        if (!empty($aBrandOptions['img'])) {
            $aImgAttributes = [
                'width' => 30,
                'height' => 30,
                'alt' => '',
            ];
            if ($sContent) {
                $aImgAttributes['class'] = 'd-inline-block align-top';
            }
            $aBrandOptions['img'][1] = \Zend\Stdlib\ArrayUtils::merge(
                $aImgAttributes,
                $aBrandOptions['img'][1] ?? []
            );

            $sContent = $this->getView()->plugin('image')->__invoke(...$aBrandOptions['img']) . ($sContent
                ? PHP_EOL . $sContent
                : '');
        }

        $sType =  $aBrandOptions['type'] ?? 'link';
        $aAttributes = [];

        switch ($sType) {
            case 'link':
                $sTag = 'a';
                $aAttributes['href'] = '#';
                break;
            case 'heading':
                $sTag = 'span';
                break;
            default:
                throw new \DomainException(__METHOD__ . ' doe snot support brand type "' . $sType . '"');
        }

        $aAttributes = \Zend\Stdlib\ArrayUtils::merge(
            $aAttributes,
            $aBrandOptions['attributes'] ?? []
        );

        return $this->htmlElement(
            $sTag,
            $this->setClassesToAttributes($aAttributes, ['navbar-brand']),
            $sContent
        );
    }

    public function renderText($aTextOptions): string
    {
        if (is_string($aTextOptions)) {
            $aTextOptions = ['content' => $aTextOptions];
        }

        $sContent = '';
        if (!empty($aTextOptions['content'])) {
            $sContent .= $aTextOptions['content'];
        }

        return $this->htmlElement(
            'span',
            $this->setClassesToAttributes(
                $aTextOptions['attributes'] ?? [],
                ['navbar-text']
            ),
            $sContent
        );
    }

    public function renderNav(\Zend\Navigation\AbstractContainer $oContainer, array $aNavOptions = []): string
    {
        return $this->getView()->navigation()->menu()->renderMenu(
            $oContainer,
            \Zend\Stdlib\ArrayUtils::merge([
                'ulClass' => 'navbar-nav mr-auto',
            ], $aNavOptions)
        );
    }


    public function renderForm($oForm): string
    {
        if (
            is_array($oForm)
            || ($oForm instanceof \Traversable
                && !($oForm instanceof \Zend\Form\FormInterface))
        ) {
            $oFactory = new \Zend\Form\Factory();

            // Set default type if none given
            if (empty($oForm['type'])) {
                $oForm['type'] = \Zend\Form\Form::class;
            }

            $oForm = $oFactory->create($oForm);
        } elseif (!($oForm instanceof \Zend\Form\FormInterface)) {
            throw new \InvalidArgumentException(sprintf(
                __METHOD__ . ' expects an instanceof \Zend\Form\FormInterface or an array / Traversable, "%s" given',
                is_object($oForm) ? get_class($oForm) : gettype($oForm)
            ));
        }

        // Disable form_group
        foreach ($oForm as $oElement) {
            $oElement->setOption('form_group', false);
        }

        $oForm->setOption('layout', \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE);
        return $this->getView()->plugin('form')->__invoke($oForm);
    }

    /**
     * Normalize an ID
     *
     * Overrides {@link View\Helper\AbstractHtmlElement::normalizeId()}.
     *
     * @param string $value
     * @return string
     */
    protected function normalizeId($sValue)
    {
        return $sValue;
    }
}
