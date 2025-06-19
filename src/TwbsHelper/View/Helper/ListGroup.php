<?php

namespace TwbsHelper\View\Helper;

use Laminas\Form\Element\Checkbox;
use Laminas\Form\Factory;
use DomainException;
use InvalidArgumentException;

/**
 * Helper for ordered and unordered lists
 */
class ListGroup extends HtmlList
{
    protected static $allowedOptions = [
        'type',
        'flush',
        'horizontal',
        'tag',
        'inline',
        'unstyled',
        'numbered',
    ];

    /**
     * Generates a 'List' element. Manage indentation of Xhtml markup
     *
     * @param  iterable   $items      Array with the elements of the list
     * @param  iterable   $optionsAndAttributes Attributes for the ul tag.
     * @param  boolean $escape     Escape the items.
     * @return string The list XHTML.
     */
    public function __invoke(iterable $items, iterable $optionsAndAttributes = [], bool $escape = true): string
    {
        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($optionsAndAttributes)
            ->merge(['class' => ['list-group']]);

        return parent::__invoke(
            $items,
            $attributes,
            $escape
        );
    }

    protected function renderContainer(
        iterable $optionsAndAttributes,
        string $listContent,
        bool $escape
    ): string {

        $optionsAndAttributes = $this->getView()->plugin('htmlattributes')->__invoke($optionsAndAttributes);

        if (isset($optionsAndAttributes['type'])) {
            $optionsAndAttributes['tag'] = 'div';
        }
        if (isset($optionsAndAttributes['flush'])) {
            $optionsAndAttributes->merge(['class' => ['list-group-flush']]);
        }

        if (isset($optionsAndAttributes['horizontal'])) {
            if ($optionsAndAttributes['horizontal'] === true) {
                $optionsAndAttributes->merge(['class' => ['list-group-horizontal']]);
            } else {
                $optionsAndAttributes->merge([
                    'class' => $this->getView()->plugin('htmlClass')->plugin('size')->getClassesFromOption(
                        $optionsAndAttributes['horizontal'],
                        'list-group-horizontal'
                    ),
                ]);
            }
        }

        return parent::renderContainer(
            $optionsAndAttributes,
            $listContent,
            $escape
        );
    }

    protected function prepareItemSpec($item, iterable $optionsAndAttributes): iterable
    {

        $item = parent::prepareItemSpec($item, $optionsAndAttributes);

        $item['attributes'] = $this->getView()->plugin('htmlattributes')
            ->__invoke($item['attributes'] ?? [])
            ->merge(['class' => ['list-group-item']]);

        // Disabled state
        $disabled = !empty($item['disabled']);
        unset($item['disabled']);
        if ($disabled) {
            $item['attributes']['aria-disabled'] = 'true';
            $item['attributes']->merge(['class' => ['disabled']]);
        }

        // Active state
        if (!empty($item['active'])) {
            $item['attributes']['aria-current'] = 'true';
            $item['attributes']->merge(['class' => ['active']]);
        }
        unset($item['active']);

        // Variant
        if (!empty($item['variant'])) {
            $item['attributes']['class']->merge(
                $this->getView()->plugin('htmlClass')->plugin('variant')->getClassesFromOption(
                    $item['variant'],
                    'list-group-item'
                )
            );
        }
        unset($item['variant']);

        // Item type
        if (!empty($optionsAndAttributes['type'])) {
            switch ($optionsAndAttributes['type']) {
                case 'action':
                    $item['tag'] = 'a';
                    $item['attributes']->merge(['class' => ['list-group-item-action']]);

                    if ($disabled) {
                        $item['attributes']['tabindex'] = -1;
                    }
                    break;
                case 'button':
                    $item['tag'] = 'button';
                    $item['attributes']->merge(['class' => ['list-group-item-action']]);
                    $item['attributes']['type'] = 'button';

                    if ($disabled) {
                        $item['attributes']->offsetGet('class')->remove('disabled');
                        $item['attributes']['disabled'] = true;
                    }
                    break;

                default:
                    throw new DomainException(
                        'Item "type" option "' . $optionsAndAttributes['type'] . '" is not supported'
                    );
            }
        }

        if (!empty($item['badge'])) {
            $isNumbered = !empty($optionsAndAttributes['numbered']);
            $item['attributes']->merge([
                'class' => [
                    'd-flex',
                    'justify-content-between',
                    $isNumbered ? 'align-items-start' : 'align-items-center',
                ],
            ]);
        }

        if (!empty($item['checkbox']['label'])) {
            $item['tag'] = 'label';
        }

        return $item;
    }

    protected function renderListItemContent(iterable $item, string $itemContent, bool $escape): string
    {
        $itemContent = parent::renderListItemContent($item, $itemContent, $escape);

        // Badge
        if (!empty($item['badge'])) {
            $itemContent = $this->renderBadge(
                $item['badge'],
                $itemContent,
                $escape
            );
        }

        // Checkbox
        if (!empty($item['checkbox'])) {
            $itemContent = $this->renderCheckbox(
                $item['checkbox'],
                $itemContent
            );
        }

        return $itemContent;
    }

    protected function renderBadge($badgeOptions, string $itemContent, bool $escape): string
    {
        $badgeHelper = $this->getView()->plugin('badge');

        $badgeContent = call_user_func_array(
            [$badgeHelper, '__invoke'],
            is_array($badgeOptions) ? $badgeOptions : [$badgeOptions, [], $escape]
        );

        $itemContent = ($itemContent ? $itemContent . PHP_EOL : '') . $badgeContent;

        return $itemContent;
    }

    protected function renderCheckbox($elementSpec, string $itemContent): string
    {
        $factory = new Factory();

        // Set default type if none given
        if (empty($elementSpec['type'])) {
            $elementSpec['type'] = Checkbox::class;
        }

        $element = $factory->create($elementSpec);

        if (!$element instanceof Checkbox) {
            throw new InvalidArgumentException(sprintf(
                'Invalid checkbox type specified, %s does not inherit from %s.',
                $element::class,
                Checkbox::class
            ));
        }

        $element->setAttributes(
            $this->getView()->plugin('htmlattributes')
                ->__invoke($element->getAttributes())
                ->merge(['class' => ['me-1']])
        );

        $checkboxContent = $this->getView()->plugin('formElement')->render($element);

        $itemContent = $checkboxContent . ($itemContent ? PHP_EOL . $itemContent : '');


        return $itemContent;
    }
}
