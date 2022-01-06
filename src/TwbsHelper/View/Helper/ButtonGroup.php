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
     * @return \TwbsHelper\View\Helper\ButtonGroup|string
     */
    public function __invoke(array $buttons = null, array $buttonGroupOptions = null)
    {
        return $buttons ? $this->render($buttons, $buttonGroupOptions) : $this;
    }

    /**
     * Render button groups markup
     *
     * @throws \LogicException
     */
    public function render(array $buttons, array $buttonGroupOptions = null): string
    {
        // Button group container attributes: regular or vertical
        $classes = empty($buttonGroupOptions['vertical']) ? ['btn-group'] : ['btn-group-vertical'];

        // Size option
        if (!empty($buttonGroupOptions['size'])) {
            $classes[] = $this->getSizeClass($buttonGroupOptions['size'], 'btn-group');
        }

        $attributes = $this->setClassesToAttributes(
            $buttonGroupOptions['attributes'] ?? [],
            $classes
        );

        $markup = $this->renderButtons(
            $buttons,
            strpos($attributes['class'], 'btn-group-justified') !== false
        );

        // Render button group
        $markup = $this->htmlElement('div', $attributes, $markup);

        if (!empty($buttonGroupOptions['column'])) {
            $classes = [];
            $classes[] = $this->getColumnClass($buttonGroupOptions['column']);

            if ($buttons[0]->getOption('layout') == \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL) {
                $classes[] = $this->getOffsetCounterpartClass($buttonGroupOptions['column']);
            }

            $markup = $this->htmlElement(
                'div',
                $this->setClassesToAttributes([], $classes),
                $markup
            );
        }

        return $markup;
    }

    /**
     * Render buttons markup
     */
    protected function renderButtons(array $buttons, bool $justified = false): string
    {
        $markup = '';
        foreach ($buttons as $button) {
            if (
                is_array($button)
                || ($button instanceof \Traversable
                    && !($button instanceof \Laminas\Form\ElementInterface))
            ) {
                $factory = new \Laminas\Form\Factory();
                $button = $factory->create($button);
            } elseif (!($button instanceof \Laminas\Form\ElementInterface)) {
                throw new \LogicException(sprintf(
                    'Button expects an instanceof \Laminas\Form\ElementInterface or an array / Traversable, "%s" given',
                    is_object($button) ? get_class($button) : gettype($button)
                ));
            }

            $dropdownOptions = $button->getOption('dropdown');
            if ($dropdownOptions) {
                if (\Laminas\Stdlib\ArrayUtils::isList($dropdownOptions)) {
                    $dropdownOptions = ['items' => $dropdownOptions];
                }

                $dropdownOptions['disable_container'] = true;
                $button->setOption('dropdown', $dropdownOptions);
            }

            $buttonMarkup = $this->getFormElementHelper()->__invoke($button);

            if ($justified || $dropdownOptions) {
                $buttonMarkup = $this->htmlElement('div', ['class' => 'btn-group', 'role' => 'group'], $buttonMarkup);
            }

            $markup .= ($markup ? PHP_EOL : '') . $buttonMarkup;
        }

        return $markup;
    }

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
