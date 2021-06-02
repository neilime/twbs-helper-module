<?php

namespace TwbsHelper\View\Helper;

/**
 * ButtonGroup
 *
 * @uses AbstractHelper
 */
class ButtonGroup extends \TwbsHelper\View\Helper\AbstractHtmlElement
{

    /**
     * @var \TwbsHelper\Form\View\Helper\FormElement|null
     */
    protected $formElementHelper;


    /**
     * @param array $aButtons
     * @param array $aButtonGroupOptions
     * @return \TwbsHelper\View\Helper\ButtonGroup|string
     */
    public function __invoke(array $aButtons = null, array $aButtonGroupOptions = null)
    {
        return $aButtons ? $this->render($aButtons, $aButtonGroupOptions) : $this;
    }

    /**
     * Render button groups markup
     *
     * @param  array $aButtons
     * @param  array $aButtonGroupOptions
     * @throws \LogicException
     * @return string
     */
    public function render(array $aButtons, array $aButtonGroupOptions = null): string
    {
        // Button group container attributes: regular or vertical
        $aClasses = empty($aButtonGroupOptions['vertical']) ? ['btn-group'] : ['btn-group-vertical'];

        // Size option
        if (!empty($aButtonGroupOptions['size'])) {
            $aClasses[] = $this->getSizeClass($aButtonGroupOptions['size'], 'btn-group');
        }

        $aAttributes = $this->setClassesToAttributes(
            $aButtonGroupOptions['attributes'] ?? [],
            $aClasses
        );

        $sMarkup = $this->renderButtons(
            $aButtons,
            strpos($aAttributes['class'], 'btn-group-justified') !== false
        );

        // Render button group
        $sMarkup = $this->htmlElement('div', $aAttributes, $sMarkup);

        if (!empty($aButtonGroupOptions['column'])) {
            $aClasses = [];
            $aClasses[] = $this->getColumnClass($aButtonGroupOptions['column']);

            $sMarkup = $this->htmlElement(
                'div',
                $this->setClassesToAttributes([], $aClasses),
                $sMarkup
            );
        }

        return $sMarkup;
    }

    /**
     * Render buttons markup
     *
     * @param array $aButtons
     * @return string
     */
    protected function renderButtons(array $aButtons, bool $bJustified = false): string
    {
        $sMarkup = '';
        foreach ($aButtons as $oButton) {
            if (
                is_array($oButton)
                || ($oButton instanceof \Traversable
                    && !($oButton instanceof \Laminas\Form\ElementInterface))
            ) {
                $oFactory = new \Laminas\Form\Factory();
                $oButton = $oFactory->create($oButton);
            } elseif (!($oButton instanceof \Laminas\Form\ElementInterface)) {
                throw new \LogicException(sprintf(
                    'Button expects an instanceof \Laminas\Form\ElementInterface or an array / Traversable, "%s" given',
                    is_object($oButton) ? get_class($oButton) : gettype($oButton)
                ));
            }

            $aDropdownOptions = $oButton->getOption('dropdown');
            if ($aDropdownOptions) {
                if (\Laminas\Stdlib\ArrayUtils::isList($aDropdownOptions)) {
                    $aDropdownOptions = ['items' => $aDropdownOptions];
                }
                $aDropdownOptions['disable_container'] = true;
                $oButton->setOption('dropdown', $aDropdownOptions);
            }
            $sButtonMarkup = $this->getFormElementHelper()->__invoke($oButton);

            if ($bJustified || $aDropdownOptions) {
                $sButtonMarkup = $this->htmlElement('div', ['class' => 'btn-group', 'role' => 'group'], $sButtonMarkup);
            }

            $sMarkup .= ($sMarkup ? PHP_EOL : '') . $sButtonMarkup;
        }

        return $sMarkup;
    }

    /**
     * @return \TwbsHelper\Form\View\Helper\FormElement
     */
    public function getFormElementHelper(): \TwbsHelper\Form\View\Helper\FormElement
    {
        if ($this->formElementHelper instanceof \TwbsHelper\Form\View\Helper\FormElement) {
            return $this->formElementHelper;
        }

        if ($this->view !== null && method_exists($this->view, 'plugin')) {
            return $this->formElementHelper = $this->view->plugin('form_element');
        }

        return $this->formElementHelper = new \TwbsHelper\Form\View\Helper\FormElement(
            new \TwbsHelper\Options\ModuleOptions()
        );
    }
}
