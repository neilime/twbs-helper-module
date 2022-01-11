<?php

namespace TwbsHelper\Form\View\Helper;

class FormRows extends \Laminas\Form\View\Helper\AbstractHelper
{
    use \TwbsHelper\Form\View\ElementHelperTrait;

    /**
     * @param \Laminas\Form\FormInterface $form
     * @return \TwbsHelper\Form\View\Helper\FormRows|string
     */
    public function __invoke(\Laminas\Form\FormInterface $form = null)
    {
        if ($form !== null) {
            return $this->renderFormRows($form);
        }

        return $this;
    }

    /**
     * @param \Laminas\Form\FormInterface $form
     * @return string
     */
    protected function renderFormRows(\Laminas\Form\FormInterface $form): string
    {
        $rowClass = $form->getOption('row_class') ?? 'row';
        $gutter = $form->getOption('gutter');
        $formLayout = $form->getOption('layout');
        $tooltipFeedback = $form->getOption('tooltip_feedback');

        // Store element rows rendering
        $rowsRendering = [];
        foreach ($form as $element) {
            // Define layout option to form elements if not already defined
            if ($formLayout && !$element->getOption('layout')) {
                $element->setOption('layout', $formLayout);
            }

            // Define tooltip_feedback option to form elements if not already defined
            if ($element->getOption('tooltip_feedback') === null) {
                $element->setOption('tooltip_feedback', $tooltipFeedback);
            }

            $rowsRendering = $this->renderElement($element, $rowsRendering, [
                'row_class' => $rowClass,
                'gutter' => $gutter,
            ]);
        }

        // Assemble rows rendering
        $formContent = '';
        ksort($rowsRendering, SORT_STRING);

        foreach ($rowsRendering as $rowRendering) {
            $rowContent = $rowRendering['content'];
            if (!empty($rowRendering['helper'])) {
                $helperParams = $rowRendering['helper_params'];
                foreach ($helperParams as $key => $value) {
                    if ($value === '%content%') {
                        $helperParams[$key] = $rowContent;
                        break;
                    }
                }

                $rowContent = call_user_func_array($rowRendering['helper'], $helperParams);
            }

            $formContent .= ($formContent ? PHP_EOL : '') . $rowContent;
        }

        return $formContent;
    }

    /**
     * Retrieve element rendering
     */
    protected function renderElement(
        \Laminas\Form\ElementInterface $element,
        array $rowsRendering,
        array $rowOptions
    ): array {

        if (
            $element->getOption('row_name')
            && ($element instanceof \Laminas\Form\Element\Button
                || $element instanceof \Laminas\Form\Element\Submit
            )
        ) {
            return $this->renderButtonGroup($element, $rowsRendering, $rowOptions);
        }

        $helperPluginManager = $this->getView()->getHelperPluginManager();

        if ($element instanceof \Laminas\Form\FieldsetInterface) {
            $elementMarkup = $helperPluginManager->get('formCollection')->__invoke($element);
        } else {
            $elementMarkup = $helperPluginManager->get('formRow')->__invoke($element);
        }

        if (!$elementMarkup) {
            return $rowsRendering;
        }

        $rowRenderingKey = $this->generateRowRenderingKey($element, $rowsRendering);

        if (isset($rowsRendering[$rowRenderingKey])) {
            $rowsRendering[$rowRenderingKey]['content'] .= PHP_EOL . $elementMarkup;
        } else {
            $rowRendering = $this->getElementRowRendering($element, $rowOptions);
            $rowRendering['content'] = $elementMarkup;
            $rowsRendering[$rowRenderingKey] = $rowRendering;
        }

        return $rowsRendering;
    }

    protected function getElementRowRendering(
        \Laminas\Form\ElementInterface $element,
        array $rowOptions
    ): array {
        $options = $element->getOptions();
        $hasNoLayout = empty($options['layout']);
        $rowRendering = [];

        $shouldWrapElement = !empty($options['column']) && $hasNoLayout;
        if (!$shouldWrapElement) {
            return $rowRendering;
        }

        $rowRendering['helper'] = [
            $this->getView()->plugin('htmlElement'),
            '__invoke'
        ];

        $rowAttributes = $this->getView()->plugin('htmlattributes')->__invoke([
            'class' => $rowOptions['row_class'],
        ]);

        // Gutter
        $gutter = $rowOptions['gutter'];
        if ($gutter) {
            $rowAttributes->merge([
                'class' => $this->getView()->plugin('htmlClass')->plugin('gutter')->getClassesFromOption(
                    $gutter
                ),
            ]);
        }

        $rowRendering['helper_params'] = [
            'div',
            $rowAttributes,
            '%content%'
        ];

        return $rowRendering;
    }

    /**
     * Retrieve button group element rendering
     */
    protected function renderButtonGroup(
        \Laminas\Form\ElementInterface $button,
        array $rowsRendering,
        array $rowOptions
    ): array {
        $rowRenderingKey = $this->generateRowRenderingKey($button, $rowsRendering);

        if (isset($rowsRendering[$rowRenderingKey])) {
            $rowsRendering[$rowRenderingKey]['content'][] = $button;
        } else {
            $buttonOptions = $button->getOptions();
            $isNotLayoutHorizontal = empty($buttonOptions['layout'])
                || \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL !== $buttonOptions['layout'];

            if (empty($buttonOptions['column']) || !$isNotLayoutHorizontal) {
                $rowClass = 'form-group';
            } else {
                $rowClass = $rowOptions['row_class'];
            }


            $rowsRendering[$rowRenderingKey] = [
                'content' => [$button],
                'helper' => [
                    $this->getView()->getHelperPluginManager()->get('buttonGroup'),
                    '__invoke'
                ],
                'helper_params' => [
                    '%content%',
                    ['attributes' => ['class' => $rowClass]]
                ]
            ];
        }

        return $rowsRendering;
    }

    /**
     * Generate
     */
    private function generateRowRenderingKey(\Laminas\Form\ElementInterface $element, array $rowsRendering): string
    {
        $existingKeys = array_keys($rowsRendering);
        $options = $element->getOptions();

        $rowName = $options['row_name'] ?? '';

        if ($existingKeys === []) {
            return '0_' . $rowName;
        }

        if ($rowName) {
            foreach ($existingKeys as $existingKey) {
                if (preg_match('/^[0-9]+_' . preg_quote($rowName, '/') . '$/', $existingKey)) {
                    return $existingKey;
                }
            }

            $lastKey = array_pop($existingKeys);
            $rowRenderingKeyPrefix = $this->incrementRowRenderingKeyPrefix($lastKey);

            return $rowRenderingKeyPrefix . $rowName;
        }

        $lastKey = array_pop($existingKeys);
        if (preg_match('/^\d+_$/', $lastKey)) {
            return $lastKey;
        }

        return $this->incrementRowRenderingKeyPrefix($lastKey);
    }

    private function incrementRowRenderingKeyPrefix(string $key): string
    {
        return (int) explode('_', $key)[0] + 1 . '_';
    }
}
