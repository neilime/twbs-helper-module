<?php

namespace TwbsHelper\View\Helper;

use Laminas\Form\ElementInterface;
use Laminas\Form\Element\Button;
use Laminas\Form\Factory;
use Laminas\Form\FormInterface;
use Laminas\Form\LabelAwareInterface;
use Laminas\Stdlib\ArrayUtils;
use TwbsHelper\View\HtmlAttributesSet;
use InvalidArgumentException;
use LogicException;

class Dropdown extends AbstractHtmlElement
{
    /**
     * @var string
     */
    public const TYPE_ITEM_HEADER = 'header';

    /**
     * @var string
     */
    public const TYPE_ITEM_DIVIDER = '---';

    /**
     * @var string
     */
    public const TYPE_ITEM_LINK = 'link';

    /**
     * @var string
     */
    public const TYPE_ITEM_BUTTON = 'button';

    /**
     * @var string
     */
    public const TYPE_ITEM_TEXT = 'text';

    /**
     * @var string
     */
    public const TYPE_ITEM_HTML = 'html';

    /**
     * @var array
     */
    protected static $dropdownItemTags = [
        self::TYPE_ITEM_HEADER => 'h6',
        self::TYPE_ITEM_DIVIDER => 'hr',
        self::TYPE_ITEM_LINK => 'a',
        self::TYPE_ITEM_BUTTON => 'button',
        self::TYPE_ITEM_TEXT => 'span',
    ];

    /**
     * @var array
     */
    protected static $directions = [
        'down', 'up', 'start', 'end',
    ];

    /**
     * @param ElementInterface|array $dropdown
     * @param boolean $escape     Escape the dropdown.
     * @return Dropdown|string
     */
    public function __invoke($dropdown = null, bool $escape = true)
    {
        return $dropdown ? $this->render($dropdown, $escape) : $this;
    }

    /**
     * Render dropdown markup
     * @param ElementInterface|iterable $dropdown
     * @param boolean $escape     Escape the dropdown.
     * @return string
     */
    public function render($dropdown, bool $escape = true): string
    {

        $dropdown = $this->createDropdown($dropdown);

        $dropdownOptions = $dropdown->getOption('dropdown');
        if (ArrayUtils::isList($dropdownOptions)) {
            $dropdown->setOption('dropdown', $dropdownOptions =  [
                'items' => $dropdownOptions,
            ]);
        }

        // Toggle
        $dropdownContent = $this->renderToggle($dropdown) . PHP_EOL;

        // Menu
        $dropdownContent .= $this->renderMenuFromElement($dropdown, $escape);

        if (!empty($dropdownOptions['disable_container'])) {
            return $dropdownContent;
        }

        return $this->renderContainer($dropdownOptions, $dropdownContent);
    }

    /**
     * @param ElementInterface|iterable $dropdown
     * @return ElementInterface
     */
    protected function createDropdown($dropdown)
    {
        if (
            is_iterable($dropdown)
            && !($dropdown instanceof ElementInterface)
        ) {
            $factory = new Factory();
            $dropdown = $factory->create($dropdown);
        } elseif (!($dropdown instanceof ElementInterface)) {
            throw new InvalidArgumentException(sprintf(
                'Argument "$dropdown" expects %s, "%s" given',
                'an instanceof \Laminas\Form\ElementInterface or an iterable',
                $dropdown::class
            ));
        }
        return $dropdown;
    }

    protected function renderContainer(array $dropdownOptions, string $dropdownContent): string
    {
        $attributes = $this->getView()->plugin('htmlattributes')->__invoke($dropdownOptions['attributes'] ?? []);

        $classes = $attributes['class']->getArrayCopy();

        if (!empty($dropdownOptions['direction'])) {
            if (!in_array($dropdownOptions['direction'], static::$directions, true)) {
                throw new InvalidArgumentException(sprintf(
                    'Direction option "%s" does not exist',
                    $dropdownOptions['direction']
                ));
            }
            $classes[] = 'drop' . $dropdownOptions['direction'];
        }

        if (!preg_grep('/^drop(' . join('|', static::$directions) . ')$/', $classes)) {
            $classes[] = 'drop' . static::$directions[0];
        }

        if (!empty($dropdownOptions['split'])) {
            $classes[] = 'btn-group';
        }

        $attributes->merge(['class' => $classes]);

        if (in_array('btn-group', $classes, true)) {
            $attributes->offsetGet('class')->remove('dropdown');
        }

        // Render dropdown container
        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            $attributes,
            $dropdownContent
        );
    }

    /**
     * Render dropdown toggle markup
     * @param ElementInterface $dropdown
     * @throws InvalidArgumentException
     * @return string
     */
    protected function renderToggle(ElementInterface $dropdown): string
    {
        $dropdownOptions = $dropdown->getOption('dropdown');

        $toogleElement = $this->getToggleSplitElement($dropdown);
        $hasSplitElement = !!$toogleElement;

        if (!$hasSplitElement) {
            $toogleElement = clone $dropdown;
            $toogleElement->setOption('dropdown', null);
        }

        // Dropdown toggle default attributes
        $toogleElementAttributes = $toogleElement->getAttributes();
        foreach (
            [
                'data-bs-toggle' => 'dropdown',
                'data-bs-offset' => $dropdownOptions['offset'] ?? null,
                'aria-expanded' => 'false',
            ] as $attributeName => $defaultValue
        ) {
            if ($defaultValue !== null && !isset($toogleElementAttributes[$attributeName])) {
                $toogleElementAttributes[$attributeName] =  $defaultValue;
            }
        }

        $tag = $toogleElement->getOption('tag');
        if ($tag === 'a') {
            $toogleElementAttributes['role'] = 'button';
            $toogleElementAttributes['href'] = '#';
        }

        // Dropdown toggle class attribute
        $toogleElementAttributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($toogleElementAttributes)
            ->merge(['class' => ['dropdown-toggle']]);

        // Toggle options
        if (isset($dropdownOptions['auto_close'])) {
            if (is_bool($dropdownOptions['auto_close'])) {
                $autoClose = $dropdownOptions['auto_close'] ? 'true' : 'false';
            } else {
                $autoClose = $dropdownOptions['auto_close'];
            }
            $toogleElementAttributes['data-bs-auto-close'] = $autoClose;
        }

        $toogleElement->setAttributes($toogleElementAttributes);


        $toogleMarkup = $this->getView()->plugin('formButton')->render($toogleElement);

        if (!$hasSplitElement) {
            return $toogleMarkup;
        }

        // Render button without dropdown
        $dropdown->setOption('dropdown', null);
        $toogleMarkup = $this->getView()->plugin('formButton')->render($dropdown) . PHP_EOL . $toogleMarkup;
        $dropdown->setOption('dropdown', $dropdownOptions);
        return $toogleMarkup;
    }

    /**
     * Retrieve dropdown toggle split element
     * @param ElementInterface $dropdown
     * @throws InvalidArgumentException
     * @return ElementInterface|null
     */
    protected function getToggleSplitElement(ElementInterface $dropdown): ?ElementInterface
    {
        $dropdownOptions = $dropdown->getOption('dropdown');

        if (empty($dropdownOptions['split'])) {
            return null;
        }
        $splitOption = $dropdownOptions['split'];
        $options = $dropdown->getOptions();
        unset($options['dropdown']);
        if (empty($options['label'])) {
            $options['label'] = $dropdown->getLabel();
        }
        $splitElement = [
            'type' => Button::class,
            'name' => $dropdown->getName() . '-toggle',
            'options' => $options,
            'attributes' => [
                'class' => 'dropdown-toggle-split',
            ],
        ];

        if (is_string($splitOption)) {
            $splitElement['options']['label'] = $splitOption;
        } elseif (is_iterable($splitOption)) {
            $splitElement = ArrayUtils::merge(
                $splitElement,
                ArrayUtils::iteratorToArray($splitOption)
            );
        } elseif ($splitOption !== true) {
            throw new InvalidArgumentException(sprintf(
                '"split" option expects a string an array or true, "%s" given',
                get_debug_type($splitOption)
            ));
        }
        $factory = new Factory();
        $toogleElement = $factory->create($splitElement);

        if ($toogleElement instanceof LabelAwareInterface) {
            $toogleElement->setLabel('<span class="visually-hidden">' . $toogleElement->getLabel() . '</span>');
            $toogleElement->setLabelOption('disable_html_escape', true);
        }

        return $toogleElement;
    }

    protected function renderMenuFromElement(ElementInterface $dropdown, bool $escape = true)
    {
        $dropdownOptions = $dropdown->getOption('dropdown');
        if (!isset($dropdownOptions['items'])) {
            throw new InvalidArgumentException(__METHOD__ . ' expects "items" option');
        }
        if (!is_array($dropdownOptions['items'])) {
            throw new InvalidArgumentException(sprintf(
                '"items" option expects an array, "%s" given',
                get_debug_type($dropdownOptions['items'])
            ));
        }

        $menuAttributes = $this->prepareMenuAttributes($dropdown);

        return $this->renderMenu($dropdownOptions['items'], $menuAttributes, $escape);
    }

    protected function prepareMenuAttributes(
        ElementInterface $dropdown
    ): HtmlAttributesSet {
        // Dropdown list class attribute
        $menuAttributes = $this->getView()->plugin('htmlattributes')->__invoke([]);

        if ($id = $this->getDropdownId($dropdown)) {
            $menuAttributes['aria-labelledby'] = $id;
        }

        $dropdownOptions = $dropdown->getOption('dropdown');

        if (isset($dropdownOptions['type'])) {
            $menuAttributes['type'] = $dropdownOptions['type'];
        }

        if (!empty($dropdownOptions['alignment'])) {
            if (is_string($dropdownOptions['alignment'])) {
                $dropdownOptions['alignment'] = [$dropdownOptions['alignment']];
            }

            $aligmentClasses = [];
            foreach ($dropdownOptions['alignment'] as $aligment) {
                $aligmentClasses = array_merge(
                    $aligmentClasses,
                    $this->getView()->plugin('htmlClass')->plugin('align')->getClassesFromOption(
                        $aligment,
                        'dropdown-menu'
                    )
                );
            }

            if ($aligmentClasses) {
                $menuAttributes->merge(['class' => $aligmentClasses]);
            }
        }

        if (!empty($dropdownOptions['dark'])) {
            $menuAttributes->merge(['class' => ['dropdown-menu-dark']]);
        }

        return $menuAttributes;
    }

    protected function getDropdownId(ElementInterface $dropdown): ?string
    {

        if ($id = $dropdown->getAttribute('id')) {
            return $id;
        }

        $options = $dropdown->getOption('dropdown');
        return $options['split']['attributes']['id'] ?? null;
    }

    /**
     * Render dropdown menu markup
     * @param iterable $items Dropdown menu items
     * @param iterable $attributes Dropdown menu attributes
     * @param boolean $escape     Escape the dropdown menu.
     * @throws InvalidArgumentException
     * @return string
     */
    public function renderMenu(iterable $items, iterable $attributes = [], bool $escape = true): string
    {

        $itemType = $attributes['type'] ?? self::TYPE_ITEM_LINK;
        unset($attributes['type']);

        // Dropdown list class attribute
        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($attributes)
            ->merge(['class' => ['dropdown-menu']]);

        // Dropdown list items
        $itemsContent = '';
        foreach ($items as $key => $itemOptions) {
            switch (true) {
                case $itemOptions instanceof FormInterface:
                    // Free html
                    $itemOptions = [
                        'type' => self::TYPE_ITEM_HTML,
                        'label' =>  $this->getView()->plugin('form')->__invoke($itemOptions),
                    ];
                    break;
                case is_array($itemOptions):
                    if (!isset($itemOptions['label'])) {
                        $itemOptions['label'] = is_string($key) ? $key : null;
                    }
                    if (!isset($itemOptions['type'])) {
                        $itemOptions['type'] = $itemType;
                    }
                    break;
                case is_scalar($itemOptions):
                    if (isset(static::$dropdownItemTags[$itemOptions])) {
                        $itemOptions = ['type' => $itemOptions];
                        if (is_string($key)) {
                            $itemOptions['label'] = $key;
                        }
                    } else {
                        if ($this->getView()->plugin('htmlElement')->isHTML($itemOptions)) {
                            // Free html
                            $itemOptions = [
                                'type' => self::TYPE_ITEM_HTML,
                                'label' => $itemOptions,
                            ];
                        } else {
                            // Link
                            $itemOptions = [
                                'label' => $itemOptions,
                                'type' => $itemType,
                                'item_attributes' => ['href' => is_string($key) ? $key : null],
                            ];
                        }
                    }
                    break;
                default:
                    throw new LogicException(sprintf(
                        '"item" option expects an array, an instance of "\Laminas\Form\FormInterface" ' .
                            'or a scalar value, "%s" given',
                        get_debug_type($itemOptions)
                    ));
            }

            $itemContent = $this->getView()->plugin('htmlElement')->__invoke(
                'li',
                [],
                $this->renderItem($itemOptions, $escape),
                $escape
            );
            $itemsContent .= ($itemsContent ? PHP_EOL : '') . $itemContent;
        }

        return $this->getView()->plugin('htmlElement')->__invoke('ul', $attributes, $itemsContent, $escape);
    }

    /**
     * Render dropdown list item markup
     * @param array $itemOptions
     * @throws InvalidArgumentException
     * @return string
     */
    protected function renderItem(array $itemOptions, bool $escape): string
    {
        if (empty($itemOptions['type'])) {
            throw new InvalidArgumentException(__METHOD__ . ' expects a "type" option');
        }

        $itemContent = '';
        $classes = [];
        $attributes = $this->getView()->plugin('htmlattributes')->__invoke($itemOptions['attributes'] ?? []);
        switch ($itemOptions['type']) {
            case self::TYPE_ITEM_HEADER:
                // Define item container "header" class
                $classes[] = 'dropdown-header';

                // Header label
                $itemContent = $this->getLabelFromItemOptions($itemOptions);

                break;

            case self::TYPE_ITEM_DIVIDER:
                // Define item container "divider" class
                $classes[] = 'dropdown-divider';
                $itemContent = '';
                break;

            case self::TYPE_ITEM_BUTTON:
            case self::TYPE_ITEM_LINK:
                // Define item container "item" class
                $classes[] = 'dropdown-item';

                if ($itemOptions['type'] === self::TYPE_ITEM_BUTTON) {
                    $defaultAttributes = ['type' => 'button'];
                } else {
                    $defaultAttributes = ['href' => '#'];
                }

                foreach (
                    [
                        'active' => ['aria-current' => 'true'],
                        'disabled' => ['tabindex' => '-1', 'aria-disabled' => 'true'],
                    ] as $option => $optionAttributes
                ) {
                    if (empty($itemOptions[$option])) {
                        continue;
                    }

                    $classes[] = $option;
                    $defaultAttributes = ArrayUtils::merge(
                        $defaultAttributes,
                        $optionAttributes
                    );
                }

                $itemContent = $this->getLabelFromItemOptions($itemOptions);

                $attributes->merge($defaultAttributes);

                break;

            case self::TYPE_ITEM_TEXT:
                // Define item container "item-text" class
                $classes[] = 'dropdown-item-text';

                $itemContent = $this->getLabelFromItemOptions($itemOptions);
                break;
            case self::TYPE_ITEM_HTML:
                return $this->getLabelFromItemOptions($itemOptions);
        }

        // Dropdown list class attribute
        $attributes->merge(['class' => $classes]);

        if ($itemContent) {
            if (($translator = $this->getTranslator())) {
                $itemContent = $translator->translate($itemContent, $this->getTranslatorTextDomain());
            }
        }

        $itemMarkup = $this->getView()->plugin('htmlElement')->__invoke(
            static::$dropdownItemTags[$itemOptions['type']],
            $attributes,
            $itemContent,
            $escape
        );

        return $itemMarkup;
    }

    protected function getLabelFromItemOptions(iterable $itemOptions)
    {
        if (empty($itemOptions['label'])) {
            throw new LogicException('"' . $itemOptions['type'] . '" item expects a "label" option');
        }
        if (!is_scalar($itemOptions['label'])) {
            throw new LogicException(sprintf(
                '"label" option expect a scalar value, "%s" given',
                get_debug_type($itemOptions['label'])
            ));
        }

        return $itemOptions['label'];
    }
}
