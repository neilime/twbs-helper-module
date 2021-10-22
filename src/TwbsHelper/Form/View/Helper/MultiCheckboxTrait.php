<?php

namespace TwbsHelper\Form\View\Helper;

trait MultiCheckboxTrait
{
    use \TwbsHelper\View\Helper\HtmlTrait;

    /**
     * Render a form <input type="radio"> element from the provided $element
     */
    public function render(\Laminas\Form\ElementInterface $element): string
    {
        if (!$element instanceof \Laminas\Form\Element\MultiCheckbox) {
            throw new \InvalidArgumentException(sprintf(
                '%s requires that the element is of type \Laminas\Form\Element\MultiCheckbox',
                __METHOD__
            ));
        }

        $this->prepareElement($element);
        $isCustom = $element->getOption('custom');

        $originalSeparator = $this->getSeparator();
        $tmpSeparator = '[SEPARATOR]';
        $this->setSeparator($tmpSeparator);

        $originalLabelAttributes = $this->labelAttributes;
        $this->labelAttributes = ['class' => $isCustom ? 'custom-control-label' : 'form-check-label'];

        $tmpContent = parent::render($element);

        // Restore default params
        $this->setSeparator($originalSeparator);
        $this->labelAttributes = $originalLabelAttributes;

        $content = '';

        foreach (explode($tmpSeparator, $tmpContent) as $optionContent) {
            // Retrieve input content
            if (preg_match('/(<label[^>]*>.*)(<input[^>]+>)(.*<\/label[^>]*>)/', $optionContent, $matches)) {
                $labelContent = $matches[1] . $matches[3];
                if (preg_match('/<label[^>]*>\s*<\/label[^>]*>/', $labelContent)) {
                    $labelContent = '';
                }

                $content .= ($content ? PHP_EOL : '') . $this->renderElementOption(
                    $element,
                    $matches[2] . ($labelContent ? PHP_EOL . $labelContent : '')
                );
            }
        }

        return $content;
    }

    protected function prepareElement(\Laminas\Form\Element\MultiCheckbox $multiCheckbox)
    {
        if ($multiCheckbox->getOption('disable_twbs')) {
            return;
        }

        $isCustom = $multiCheckbox->getOption('custom');

        $this->setClassesToElement(
            $multiCheckbox,
            [$isCustom ? 'custom-control-input' : 'form-check-input'],
            ['form-control']
        );

        // Handle label attributes for options
        $valueOptions = $multiCheckbox->getValueOptions();
        foreach ($valueOptions as &$valueOption) {
            if (!is_array($valueOption)) {
                continue;
            }

            if (empty($valueOption['label'])) {
                $valueOption['attributes'] = $this->setClassesToAttributes(
                    $valueOption['attributes'] ?? [],
                    ['position-static', 'form-check-input']
                );
            }

            if (isset($valueOption['attributes']['id'])) {
                $valueOption['label_attributes'] = \Laminas\Stdlib\ArrayUtils::merge(
                    $valueOption['label_attributes'] ?? [],
                    [
                        'for' => $valueOption['attributes']['id'],
                    ]
                );
            }
        }

        $multiCheckbox->setValueOptions($valueOptions);
    }

    protected function renderElementOption(\Laminas\Form\ElementInterface $element, string $optionContent): string
    {

        if ($element->getOption('disable_twbs')) {
            return $optionContent;
        }

        $isCustom = $element->getOption('custom');
        $groupClasses = $isCustom ? ['custom-control', 'custom-radio'] : ['form-check'];

        if ($element->getOption('layout') === \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE) {
            $groupClasses[] = $isCustom ? 'custom-control-inline' : 'form-check-inline';
        }

        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes([], $groupClasses),
            $optionContent
        );
    }
}
