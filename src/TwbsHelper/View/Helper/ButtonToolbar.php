<?php

namespace TwbsHelper\View\Helper;

use LogicException;

class ButtonToolbar extends \TwbsHelper\View\Helper\AbstractHtmlElement
{

    /**
     * @var \TwbsHelper\View\Helper\ButtonGroup|null
     */
    protected $buttonGroupHelper;

    /**
     * @var \TwbsHelper\Form\View\Helper\FormElement|null
     */
    protected $formElementHelper;

    /**
     *
     * @param  array $aItems
     * @param  array $aButtonToolbarOptions
     * @return ButtonGroup|string
     */
    public function __invoke(array $aItems = null, array $aButtonToolbarOptions = null)
    {
        return $aItems ? $this->render($aItems, $aButtonToolbarOptions) : $this;
    }

    /**
     * Render button toolbar markup
     *
     * @param  array $aItems
     * @param  array $aButtonToolbarOptions
     * @throws LogicException
     * @return string
     */
    public function render(array $aItems, array $aButtonToolbarOptions = null): string
    {
        // Button group container attributes
        $aClasses = ['btn-toolbar'];
        $aAttributes = $this->setClassesToAttributes($aButtonToolbarOptions['attributes'] ?? [], $aClasses);

        // Render button group
        return $this->htmlElement('div', $aAttributes, $this->renderToolbarItems($aItems));
    }

    /**
     * Render toolbar items markup
     *
     * @param array $aItems
     * @return string
     */
    protected function renderToolbarItems(array $aItems): string
    {
        $sMarkup = '';
        foreach ($aItems as $aItem) {
            $sMarkup .= ($sMarkup ? PHP_EOL : '') . $this->renderToolbarItem($aItem);
        }
        return $sMarkup;
    }

    /**
     * Render toolbar item markup
     *
     * @param array|\Laminas\Form\ElementInterface $oItem
     * @return string
     */
    protected function renderToolbarItem($oItem): string
    {
        if (is_array($oItem)) {
            if (isset($oItem['buttons'])) {
                return $this->getButtonGroupHelper()->__invoke(
                    $oItem['buttons'],
                    $oItem['options'] ?? []
                );
            }
            $oFactory = new \Laminas\Form\Factory();
            $oItem = $oFactory->create($oItem);
        }

        if ($oItem instanceof \Laminas\Form\ElementInterface) {
            return $this->getFormElementHelper()->__invoke($oItem);
        }
    }

    /**
     * @return \TwbsHelper\View\Helper\ButtonGroup
     */
    public function getButtonGroupHelper(): \TwbsHelper\View\Helper\ButtonGroup
    {
        if ($this->buttonGroupHelper instanceof \TwbsHelper\View\Helper\ButtonGroup) {
            return $this->buttonGroupHelper;
        }

        if ($this->view !== null && method_exists($this->view, 'plugin')) {
            return $this->buttonGroupHelper = $this->view->plugin('buttonGroup');
        }

        return $this->buttonGroupHelper = new \TwbsHelper\View\Helper\ButtonGroup();
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
