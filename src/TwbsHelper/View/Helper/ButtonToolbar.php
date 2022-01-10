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
     * @var \TwbsHelper\Form\View\Helper\FormRow|null
     */
    protected $formRowHelper;

    /**
     * @var \TwbsHelper\View\Helper\HtmlElement|null
     */
    protected $htmlElementHelper;

    /**
     *
     * @return ButtonGroup|string
     */
    public function __invoke(array $items = null, array $buttonToolbarOptions = null)
    {
        return $items ? $this->render($items, $buttonToolbarOptions) : $this;
    }

    /**
     * Render button toolbar markup
     *
     * @throws LogicException
     */
    public function render(array $items, array $buttonToolbarOptions = null): string
    {
        // Button group container attributes
        $classes = ['btn-toolbar'];

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($buttonToolbarOptions['attributes'] ?? [])
            ->merge(['class' => $classes]);

        // Render button group
        return $this->getHtmlElementHelper()->__invoke(
            'div',
            $attributes,
            $this->renderToolbarItems($items)
        );
    }

    /**
     * Render toolbar items markup
     */
    protected function renderToolbarItems(array $items): string
    {
        $markup = '';
        foreach ($items as $item) {
            if (empty($item)) {
                continue;
            }

            $itemMarkup = '';

            if (is_array($item)) {
                $itemMarkup = $this->renderToolbarItemSpec($item);
            } elseif ($item instanceof \Laminas\Form\ElementInterface) {
                $itemMarkup = $this->renderToolbarItem($item);
            } else {
                throw new \InvalidArgumentException(sprintf(
                    'Item expects an instanceof \Laminas\Form\ElementInterface or an array, "%s" given',
                    is_object($item) ? get_class($item) : gettype($item)
                ));
            }

            $markup .= ($markup ? PHP_EOL : '') . $itemMarkup;
        }

        return $markup;
    }

    /**
     * Render toolbar item markup
     */
    protected function renderToolbarItem(\Laminas\Form\ElementInterface $element): string
    {
        $element->setOption('form_group', false);
        return $this->getFormRowHelper()->__invoke($element);
    }

    /**
     * Render toolbar item markup from given specifications
     */
    protected function renderToolbarItemSpec(array $item): string
    {
        if (isset($item['buttons'])) {
            return   $this->getButtonGroupHelper()->__invoke($item['buttons'], $item['options'] ?? []);
        }

        $formFactory = new \Laminas\Form\Factory();
        $item = $formFactory->create($item);

        return $this->renderToolbarItem($item);
    }

    public function getButtonGroupHelper(): \TwbsHelper\View\Helper\ButtonGroup
    {
        if ($this->buttonGroupHelper instanceof \TwbsHelper\View\Helper\ButtonGroup) {
            return $this->buttonGroupHelper;
        }

        $view = $this->getView();
        if ($view !== null && method_exists($view, 'plugin')) {
            return $this->buttonGroupHelper = $view->plugin('buttonGroup');
        }

        return $this->buttonGroupHelper = new \TwbsHelper\View\Helper\ButtonGroup();
    }

    public function getFormRowHelper(): \TwbsHelper\Form\View\Helper\FormRow
    {
        if ($this->formRowHelper instanceof \TwbsHelper\Form\View\Helper\FormRow) {
            return $this->formRowHelper;
        }

        $view = $this->getView();
        if ($view !== null && method_exists($view, 'plugin')) {
            return $this->formRowHelper = $view->plugin('form_row');
        }

        return $this->formRowHelper = new \TwbsHelper\Form\View\Helper\FormRow(
            new \TwbsHelper\Options\ModuleOptions()
        );
    }

    public function getHtmlElementHelper(): \TwbsHelper\View\Helper\HtmlElement
    {
        if ($this->htmlElementHelper instanceof \TwbsHelper\View\Helper\HtmlElement) {
            return $this->htmlElementHelper;
        }

        $view = $this->getView();
        if ($view !== null && method_exists($view, 'plugin')) {
            return $this->htmlElementHelper = $view->plugin('htmlElement');
        }

        return $this->htmlElementHelper = new \TwbsHelper\View\Helper\HtmlElement();
    }
}
