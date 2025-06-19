<?php

namespace TwbsHelper\View\Helper;

use Laminas\Form\ElementInterface;
use Laminas\Form\Factory;
use Laminas\Stdlib\ArrayUtils;
use TwbsHelper\Form\View\Helper\FormButton;
use LogicException;

/**
 * ButtonGroup
 *
 * @uses AbstractHelper
 */
class ButtonGroup extends AbstractHtmlElement
{
    /**
     * @var FormButton|null
     */
    protected $formButtonHelper;

    /**
     * @return ButtonGroup|string
     */
    public function __invoke(?array $buttons = null, ?array $buttonGroupOptions = null)
    {
        return $buttons ? $this->render($buttons, $buttonGroupOptions) : $this;
    }

    /**
     * Render button groups markup
     *
     * @throws LogicException
     */
    public function render(array $buttons, ?array $buttonGroupOptions = null): string
    {
        // Button group container attributes: regular or vertical
        $classes = empty($buttonGroupOptions['vertical']) ? ['btn-group'] : ['btn-group-vertical'];

        // Size option
        if (!empty($buttonGroupOptions['size'])) {
            $classes = array_merge(
                $classes,
                $this->getView()->plugin('htmlClass')->plugin('size')->getClassesFromOption(
                    $buttonGroupOptions['size'],
                    'btn-group'
                )
            );
        }

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($buttonGroupOptions['attributes'] ?? [])
            ->merge(['class' => $classes]);

        $markup = $this->renderButtons(
            $buttons,
            $buttonGroupOptions ?? []
        );

        // Render button group
        $markup = $this->getView()->plugin('htmlElement')->__invoke('div', $attributes, $markup);

        if (!empty($buttonGroupOptions['column'])) {
            $classes = $this->getView()->plugin('htmlClass')->plugin('column')->getClassesFromOption(
                $buttonGroupOptions['column']
            );

            $markup = $this->getView()->plugin('htmlElement')->__invoke(
                'div',
                ['class' => $classes],
                $markup
            );
        }

        return $markup;
    }

    /**
     * Render buttons markup
     */
    protected function renderButtons(array $buttons, array $buttonGroupOptions): string
    {
        $markup = '';
        foreach ($buttons as $button) {
            if (
                is_iterable($button)
                && !($button instanceof ElementInterface)
            ) {
                $factory = new Factory();
                $button = $factory->create($button);
            } elseif (!($button instanceof ElementInterface)) {
                throw new LogicException(sprintf(
                    'Button expects an instanceof \Laminas\Form\ElementInterface or an array / Traversable, "%s" given',
                    get_debug_type($button)
                ));
            }

            if (isset($buttonGroupOptions['variant']) && $button->getOption('variant') === null) {
                $button->setOption('variant', $buttonGroupOptions['variant']);
            }

            $buttonMarkup = $this->renderButton($button);
            $markup .= ($markup ? PHP_EOL : '') . $buttonMarkup;
        }

        return $markup;
    }

    protected function renderButton(ElementInterface $button): string
    {
        $dropdownOptions = $button->getOption('dropdown');
        if ($dropdownOptions) {
            if (ArrayUtils::isList($dropdownOptions)) {
                $dropdownOptions = ['items' => $dropdownOptions];
            }

            $dropdownOptions['disable_container'] = true;
            $button->setOption('dropdown', $dropdownOptions);
        }

        $button->setOption('form_group', false);
        $buttonMarkup = $this->getFormButtonHelper()->__invoke($button);

        if ($dropdownOptions) {
            $buttonMarkup = $this->getView()->plugin('htmlElement')->__invoke(
                'div',
                ['class' => 'btn-group', 'role' => 'group'],
                $buttonMarkup
            );
        }

        return $buttonMarkup;
    }

    public function getFormButtonHelper(): FormButton
    {
        if ($this->formButtonHelper instanceof FormButton) {
            return $this->formButtonHelper;
        }

        if ($this->view !== null && method_exists($this->view, 'plugin')) {
            return $this->formButtonHelper = $this->view->plugin('form_button');
        }

        return $this->formButtonHelper = new FormButton();
    }
}
