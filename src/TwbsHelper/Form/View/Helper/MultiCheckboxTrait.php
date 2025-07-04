<?php

namespace TwbsHelper\Form\View\Helper;

use Laminas\Form\ElementInterface;
use Laminas\Form\Element\MultiCheckbox;
use TwbsHelper\Form\View\ElementHelperTrait;
use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Variant;
use InvalidArgumentException;

/**
 * @phpstan-import-type ValueOptionSpec from \Laminas\Form\Element\MultiCheckbox
 * @phpstan-type TwbsValueOptionSpec ValueOptionSpec
 */
trait MultiCheckboxTrait
{
    use ElementHelperTrait;

    private static $TMP_SEPARATOR = '[SEPARATOR]';

    /**
     * Render a form <input type="radio"> element from the provided $element
     */
    public function render(ElementInterface $element): string
    {
        if (!$element instanceof MultiCheckbox) {
            throw new InvalidArgumentException(sprintf(
                '%s requires that the element is of type \Laminas\Form\Element\MultiCheckbox',
                __METHOD__
            ));
        }

        $originalLabelAttributes = $this->labelAttributes;
        $this->labelAttributes = [];

        $originalSeparator = $this->getSeparator();
        $this->setSeparator(self::$TMP_SEPARATOR);

        $this->prepareElement($element);

        $tmpContent = parent::render($element);

        // Restore default params
        $this->setSeparator($originalSeparator);
        $this->labelAttributes = $originalLabelAttributes;

        $content = '';

        foreach (explode(self::$TMP_SEPARATOR, $tmpContent) as $optionContent) {

            // Retrieve input content
            if (preg_match('/(<label[^>]*>.*)(<input[^>]+>)(.*<\/label[^>]*>)/', $optionContent, $matches)) {
                $extraOptionContent = trim(str_replace($matches[0], '', $optionContent));


                $labelContent = $matches[1] . $matches[3];
                if (preg_match('/<label[^>]*>\s*<\/label[^>]*>/', $labelContent)) {
                    $labelContent = '';
                }

                $optionContent = $matches[2] . ($labelContent ? PHP_EOL . $labelContent : '');

                $optionContent = $this->renderElementOption(
                    $element,
                    $optionContent,
                );

                if ($extraOptionContent) {
                    $optionContent = $extraOptionContent . PHP_EOL . $optionContent;
                }

                $content .= ($content ? PHP_EOL : '') . $optionContent;
            }
        }

        return $content;
    }

    protected function prepareElement(MultiCheckbox $multiCheckbox)
    {
        if ($multiCheckbox->getOption('disable_twbs')) {
            return;
        }

        $this->setClassesToElement(
            $multiCheckbox,
            [$multiCheckbox->getOption('button') ? 'btn-check' : 'form-check-input'],
            ['form-control']
        );

        $this->prepareValueOptions($multiCheckbox);
    }

    protected function prepareValueOptions(MultiCheckbox $multiCheckbox)
    {
        $valueOptions = $multiCheckbox->getValueOptions();

        foreach ($valueOptions as &$valueOption) {
            /** @var ValueOptionSpec&TwbsValueOptionSpec $valueOption */
            // Skip from preparing simple string value
            if (!is_array($valueOption)) {
                continue;
            }

            // Input attributes
            $inputAttributes = $this->getView()->plugin('htmlattributes')->__invoke($valueOption['attributes'] ?? []);

            $buttonOption = $valueOption['button'] ?? $multiCheckbox->getOption('button');
            if ($buttonOption) {
                $inputAttributes
                    ->merge(['class' => ['btn-check']])
                    ->offsetGet('class')->remove('form-check-input');
            }

            if (empty($valueOption['label'])) {
                $inputAttributes = $inputAttributes->merge(['class' => ['position-static', 'form-check-input']]);
            }

            $valueOption['attributes'] = $inputAttributes->getArrayCopy();

            // Label attributes
            $labelAttributes = $this->getView()->plugin('htmlattributes')->__invoke(
                $valueOption['label_attributes'] ?? []
            );

            $labelAttributes->merge(['class' => $this->getValueOptionLabelClasses($multiCheckbox, $valueOption)]);

            if (isset($valueOption['attributes']['id'])) {
                $labelAttributes->merge(['for' => $valueOption['attributes']['id']]);
            }

            $valueOption['label_attributes'] = $labelAttributes->getArrayCopy();
        }

        $multiCheckbox->setValueOptions($valueOptions);
    }

    protected function getValueOptionLabelClasses(
        MultiCheckbox $multiCheckbox,
        iterable $valueOption
    ): array {
        $labelClasses = [];
        $buttonOption = $valueOption['button'] ?? $multiCheckbox->getOption('button');
        if ($buttonOption) {
            $labelClasses[] = 'btn';

            /** @var Variant $variantClassHelper **/
            $variantClassHelper = $this->getView()->plugin('htmlClass')->plugin('variant');

            $labelClasses[] = 'btn';
            if (is_string($buttonOption)) {
                $labelClasses = array_merge(
                    $labelClasses,
                    $variantClassHelper->getClassesFromOption($buttonOption, 'btn', 'outline')
                );
            }
            if (!$variantClassHelper->classesIncludeVariant($labelClasses, 'btn', 'outline')) {
                $labelClasses = array_merge(
                    $labelClasses,
                    $variantClassHelper->getClassesFromOption('secondary', 'btn')
                );
            }
        } else {
            $labelClasses[] = 'form-check-label';
        }

        return $labelClasses;
    }


    protected function renderElementOption(ElementInterface $element, string $optionContent): string
    {

        if ($element->getOption('disable_twbs') || $element->getOption('form_check_group') === false) {
            return $optionContent;
        }

        $groupClasses = ['form-check'];

        if ($element->getOption('layout') === Form::LAYOUT_INLINE) {
            $groupClasses[] = 'form-check-inline';
        }

        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            ['class' => $groupClasses],
            $optionContent
        );
    }
}
