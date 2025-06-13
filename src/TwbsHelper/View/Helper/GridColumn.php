<?php

namespace TwbsHelper\View\Helper;

/**
 * Generates a grid 'column' element
 *
 * @param  string $content The content of the column
 * @param  string|array $optionsAndAttributes  Column options and Html attributes of the "<div>" element
 * @param  boolean $escape True espace html content '$content'. Default True
 * @return string The column XHTML.
 */
class GridColumn extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    public const ORDER_FIRST = 'first';
    public const ORDER_LAST = 'last';

    protected static $allowedOrder = [
        self::ORDER_FIRST,
        self::ORDER_LAST,
    ];

    protected static $allowedOptions = [
        'align',
        'column',
        'divider',
        'grid',
        'offset',
        'order',
    ];

    public function __invoke(
        ?string $content = null,
        iterable $optionsAndAttributes = [],
        bool $escape = true
    ): string {

        if (!empty($optionsAndAttributes['divider'])) {
            $divider = $optionsAndAttributes['divider'];
            $dividerClasses = ['w-100'];
            if ($divider !== true) {
                $dividerClasses[] = 'd-none';
                $dividerClasses = array_merge(
                    $dividerClasses,
                    $this->getView()->plugin('htmlClass')->plugin('size')->getClassesFromOption($divider, 'd', 'block')
                );
            }

            $attributes = $this->getView()->plugin('htmlattributes')
                ->__invoke($optionsAndAttributes)
                ->offsetsUnset(static::$allowedOptions)
                ->merge(['class' => $dividerClasses]);

            return $this->getView()->plugin('htmlElement')->__invoke('div', $attributes, '');
        }

        if (!empty($optionsAndAttributes['grid'])) {
            $rows = $optionsAndAttributes['grid']['rows'] ?? [];
            $gridAttributes = $optionsAndAttributes['grid']['attributes'] ?? [];
            $gridAttributes['container'] = false;

            $gridContent = $this->getView()->plugin('grid')->__invoke(
                $rows,
                $gridAttributes,
                $escape
            );

            if ($gridContent) {
                $content .= ($content ? PHP_EOL : '') . $gridContent;
            }
        }

        $attributes = $this->prepareAttributes($optionsAndAttributes);

        return $this->getView()->plugin('htmlElement')->__invoke('div', $attributes, $content);
    }

    protected function prepareAttributes(iterable $optionsAndAttributes): iterable
    {
        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($optionsAndAttributes)
            ->offsetsUnset(static::$allowedOptions);

        if (!empty($optionsAndAttributes['align'])) {
            $align = $optionsAndAttributes['align'];

            $attributes['class']->merge(
                $this->getView()->plugin('htmlClass')->plugin('align')->getClassesFromOption(
                    $align,
                    'align-self'
                )
            );
        }

        if (!empty($optionsAndAttributes['order'])) {
            $order = $optionsAndAttributes['order'];
            if (
                !in_array($order, self::$allowedOrder)
                && (
                    !is_int($order)
                    || $order < 1
                    || $order > 12
                )
            ) {
                throw new \InvalidArgumentException(sprintf(
                    'Given "order" option "%s" is not supported. ' .
                        'Expects one of these values "%s", or an integer between 1 and 12',
                    $order,
                    implode(',', self::$allowedOrder)
                ));
            }

            $attributes['class']->merge([
                $this->getView()->plugin('htmlClass')->getPrefixedClass($order, 'order'),
            ]);
        }

        if (!empty($optionsAndAttributes['offset'])) {
            $offset = $optionsAndAttributes['offset'];
            $attributes['class']->merge(
                $this->getView()->plugin('htmlClass')->plugin('offset')->getClassesFromOption($offset)
            );
        }

        $colOption = $optionsAndAttributes['column'] ?? true;
        $attributes['class']->merge(
            $this->getView()->plugin('htmlClass')->plugin('column')->getClassesFromOption($colOption)
        );

        return $attributes;
    }
}
