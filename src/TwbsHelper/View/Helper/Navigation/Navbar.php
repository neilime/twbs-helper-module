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
            $aTogglerOptions = $aOptions['toggler'] ?? [];
            if (!empty($sId)) {
                \Zend\Stdlib\ArrayUtils::merge(
                    [
                        'data-target' => '#' . $sId,
                        'aria-controls' => $sId,
                    ],
                    $aTogglerOptions['attributes'] ?? []
                );
            }
            $sContent .= ($sContent ? PHP_EOL : '') . $this->renderToggler($aTogglerOptions);
        }

        // Nav
        $aNavContainerAttributes = [];
        if ($sId) {
            $aNavContainerAttributes['id'] = $sId;
        }

        $sNavContent =  $this->renderNav($oContainer);

        // Nav form
        if (isset($aOptions['form'])) {
            $sNavContent .= ($sNavContent ? PHP_EOL : '') . $this->renderForm($aOptions['form']);
        }

        if ($sNavContent) {
            $sContent .= ($sContent ? PHP_EOL : '') . $this->htmlElement(
                'div',
                $this->setClassesToAttributes(
                    $aNavContainerAttributes,
                    ['collapse', 'navbar-collapse']
                ),
                $sNavContent
            );
        }

        return $this->htmlElement(
            'nav',
            $this->setClassesToAttributes($aAttributes, $aClasses),
            $sContent
        );
    }

    public function renderToggler(array $aTogglerOptions): string
    {
        $oTranslator = $this->getTranslator();
        return $this->getView()->plugin('formButton')->__invoke(\Zend\Stdlib\ArrayUtils::merge(
            [
                'name' => 'navbar_toggler',
                'options' => [
                    'label' => '<span class="navbar-toggler-icon"></span>',
                    'disable_twbs' => true,
                ],
                'attributes' => [
                    'class' => 'navbar-toggler',
                    'type' => 'button',
                    'data-toggle' => 'collapse',
                    'aria-expanded' => 'false',
                    'aria-label' => $oTranslator
                        ? $oTranslator->translate('Toggle navigation', $this->getTranslatorTextDomain())
                        : 'Toggle navigation',
                ],
            ],
            $aTogglerOptions
        ));
    }

    public function renderBrand($aBrandOptions): string
    {
        if (is_string($aBrandOptions)) {
            $aBrandOptions = ['content' => $aBrandOptions];
        }
        $sContent = $aBrandOptions['content'] ?? '';
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

    public function renderNav(\Zend\Navigation\AbstractContainer $oContainer): string
    {
        return $this->getView()->navigation()->menu()->renderMenu(
            $oContainer,
            [
                'ulClass' => 'navbar-nav mr-auto',
            ]
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
