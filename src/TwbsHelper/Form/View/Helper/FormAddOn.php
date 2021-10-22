<?php

namespace TwbsHelper\Form\View\Helper;

class FormAddOn extends \Laminas\Form\View\Helper\AbstractHelper
{
    use \TwbsHelper\View\Helper\HtmlTrait;

    public const POSITION_APPEND = 'append';
    public const POSITION_PREPEND = 'prepend';

    /**
     * @var \Laminas\Form\Factory|null
     */
    protected $formFactory;

    /**
     * @param \Laminas\Form\ElementInterface $element
     * @return \TwbsHelper\Form\View\Helper\FormAddOn|string
     */
    public function __invoke(\Laminas\Form\ElementInterface $element = null, string $content = '')
    {
        return $element ? $this->render($element, $content) : $this;
    }

    public function render(\Laminas\Form\ElementInterface $element = null, string $content = ''): string
    {
        // Addon
        $hasAddOn = false;
        $addOnId = $element->getAttribute('aria-describedby');

        foreach ([self::POSITION_APPEND, self::POSITION_PREPEND] as $addOnPosition) {
            if ($addOnOptions = $element->getOption('add_on_' . $addOnPosition)) {
                $hasAddOn = true;

                $attributes = ['class' => 'input-group-' . $addOnPosition];

                // Define global add-on id based on element's aria-describedby
                if ($addOnId && \Laminas\Stdlib\ArrayUtils::isList($addOnOptions)) {
                    $attributes['id'] = $addOnId;
                }

                $addOnContent = $this->htmlElement(
                    'div',
                    $attributes,
                    $this->renderAddOn($addOnOptions, $element, $addOnId)
                );

                if ($addOnPosition === self::POSITION_APPEND) {
                    $content .= ($content ? PHP_EOL : '') . $addOnContent;
                } else {
                    $content = $addOnContent . ($content ? PHP_EOL . $content : '');
                }
            }
        }

        if (!$hasAddOn) {
            return $content;
        }

        $inputGroupClasses = ['input-group'];

        // Input group size
        if ($size = $element->getOption('size')) {
            $inputGroupClasses[] = $this->getSizeClass($size, 'input-group');
        }

        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes(
                [
                    'class' => $element->getOption('input_group_class'),
                ],
                $inputGroupClasses
            ),
            $content
        );
    }

    /**
     * Render add-on markup
     *
     * @param \Laminas\Form\ElementInterface|array|string $addOnOptions
     * @param \Laminas\Form\ElementInterface $element
     * @throws \InvalidArgumentException
     * @throws \LogicException
     * @return string
     */
    protected function renderAddOn(
        $addOnOptions,
        \Laminas\Form\ElementInterface $element,
        string $addOnId = null
    ): string {
        if ($addOnOptions instanceof \Laminas\Form\ElementInterface) {
            $addOnOptions = ['element' => $addOnOptions];
        } elseif (is_string($addOnOptions)) {
            $addOnOptions = ['text' => $addOnOptions];
        }

        if (\Laminas\Stdlib\ArrayUtils::isList($addOnOptions)) {
            $content = '';
            foreach ($addOnOptions as $addOnOptionsTmp) {
                $content .= ($content ? PHP_EOL : '') . $this->renderAddOn(
                    $addOnOptionsTmp,
                    $element
                );
            }
            return $content;
        }

        // Define add-on id based on element's aria-describedby
        if ($addOnId && !isset($addOnOptions['attributes']['id'])) {
            $addOnOptions['attributes']['id'] = $addOnId;
        }

        return $this->renderContent($addOnOptions, $element);
    }

    protected function renderContent(array $addOnOptions, \Laminas\Form\ElementInterface $element): string
    {
        $attributes = $addOnOptions['attributes'] ?? [];

        switch (true) {
            case isset($addOnOptions['text']):
                if (!is_string($addOnOptions['text'])) {
                    throw new \InvalidArgumentException(sprintf(
                        '"text" option expects a string, "%s" given',
                        is_object($addOnOptions['text'])
                            ? get_class($addOnOptions['text'])
                            : gettype($addOnOptions['text'])
                    ));
                }
                return $this->renderText(
                    $addOnOptions['text'],
                    $attributes
                );

            case isset($addOnOptions['label']):
                if (!is_string($addOnOptions['label'])) {
                    throw new \InvalidArgumentException(sprintf(
                        '"label" option expects a string, "%s" given',
                        is_object($addOnOptions['label'])
                            ? get_class($addOnOptions['label'])
                            : gettype($addOnOptions['label'])
                    ));
                }

                return $this->renderLabel(
                    $addOnOptions['label'],
                    $attributes,
                    $element
                );

            case isset($addOnOptions['element']):
                if (
                    is_iterable($addOnOptions['element'])
                    && !($addOnOptions['element'] instanceof \Laminas\Form\ElementInterface)
                ) {
                    $addOnOptions['element'] = $this->createElement($addOnOptions['element']);
                }

                return $this->renderElement(
                    $addOnOptions['element'],
                    $attributes
                );

            default:
                throw new \InvalidArgumentException('Addon options expects a text or an element to render, none given');
        }
    }

    protected function renderText(string $addonText, array $attributes): string
    {
        $translator = $this->getTranslator();
        if ($translator) {
            $addonText =  $translator->translate(
                $addonText,
                $this->getTranslatorTextDomain()
            );
        }
        return $this->renderAddOnElement($addonText, $attributes);
    }

    protected function renderLabel(
        string $addonLabel,
        array $attributes,
        \Laminas\Form\ElementInterface $element
    ): string {
        return $this->getView()->plugin('formLabel')->__invoke($this->createElement([
            'name' => $element->getName(),
            'options' => [
                'label' => $addonLabel,
                'label_attributes' => $this->setClassesToAttributes(
                    $attributes,
                    ['input-group-text']
                ),
            ],
            'attributes' => ['id' => $element->getAttribute('id')],
        ]));
    }

    /**
     * @param \Laminas\Form\ElementInterface $element
     * @return string
     */
    protected function renderElement(\Laminas\Form\ElementInterface $element, array $attributes): string
    {
        // Set options to improve rendering
        if ($dropdownOptions = $element->getOption('dropdown')) {
            if (\Laminas\Stdlib\ArrayUtils::isList($dropdownOptions)) {
                $element->setOption('dropdown', [
                    'items' => $dropdownOptions,
                    'disable_container' => true,
                ]);
            } elseif (!isset($dropdownOptions['disable_container'])) {
                $dropdownOptions['disable_container'] = true;
                $element->setOption('dropdown', $dropdownOptions);
            }
        }

        $element->setAttributes(\Laminas\Stdlib\ArrayUtils::merge(
            $attributes,
            $element->getAttributes()
        ));

        $helper = $this->getView()->plugin('formElement');

        if ($element instanceof \Laminas\Form\Element\Checkbox) {
            $element->setOption('disable_twbs', true);
            return $this->renderAddOnElement(
                $helper->render($element),
                $attributes
            );
        }
        return $helper->render($element);
    }

    protected function renderAddOnElement(string $addonText, array $attributes = []): string
    {
        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes($attributes, ['input-group-text']),
            $addonText
        );
    }

    protected function createElement(array $element): \Laminas\Form\ElementInterface
    {
        if (!$this->formFactory) {
            $this->formFactory = new \Laminas\Form\Factory();
        }
        return $this->formFactory->createElement($element);
    }
}
