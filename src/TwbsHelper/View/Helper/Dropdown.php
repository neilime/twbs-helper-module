<?php

namespace TwbsHelper\View\Helper;

class Dropdown extends \TwbsHelper\View\Helper\AbstractHtmlElement
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
        self::TYPE_ITEM_DIVIDER => 'div',
        self::TYPE_ITEM_LINK => 'a',
        self::TYPE_ITEM_TEXT => 'span',
    ];

    /**
     * @var array
     */
    protected static $directions = [
        'down', 'up', 'right', 'left'
    ];

    /**
     * @var array
     */
    protected static $alignments = [
        'right', 'left'
    ];

    /**
     * @param \Laminas\Form\ElementInterface|array $dropdown
     * @param boolean $escape     Escape the dropdown.
     * @return \TwbsHelper\View\Helper\Dropdown|string
     */
    public function __invoke($dropdown = null, bool $escape = true)
    {
        return $dropdown ? $this->render($dropdown, $escape) : $this;
    }

    /**
     * Render dropdown markup
     * @param \Laminas\Form\ElementInterface|iterable $dropdown
     * @param boolean $escape     Escape the dropdown.
     * @return string
     */
    public function render($dropdown, bool $escape = true): string
    {
        if (
            is_iterable($dropdown)
            && !($dropdown instanceof \Laminas\Form\ElementInterface)
        ) {
            $factory = new \Laminas\Form\Factory();
            $dropdown = $factory->create($dropdown);
        } elseif (!($dropdown instanceof \Laminas\Form\ElementInterface)) {
            throw new \InvalidArgumentException(sprintf(
                'Argument "$dropdown" expects %s, "%s" given',
                'an instanceof \Laminas\Form\ElementInterface or an iterable',
                is_object($dropdown) ? get_class($dropdown) : gettype($dropdown)
            ));
        }

        $dropdownOptions = $dropdown->getOption('dropdown');
        if (\Laminas\Stdlib\ArrayUtils::isList($dropdownOptions)) {
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

    protected function renderContainer(array $dropdownOptions, string $dropdownContent): string
    {
        $classes = $this->getClassesAttribute($dropdownOptions['attributes']['class'] ?? '');
        if (!empty($dropdownOptions['direction'])) {
            if (!in_array($dropdownOptions['direction'], static::$directions, true)) {
                throw new \InvalidArgumentException(sprintf(
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

        // Render dropdown container
        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes($dropdownOptions['attributes']  ?? [], $classes),
            $dropdownContent
        );
    }

    /**
     * Render dropdown toggle markup
     * @param \Laminas\Form\ElementInterface $dropdown
     * @throws \InvalidArgumentException
     * @return string
     */
    public function renderToggle(\Laminas\Form\ElementInterface $dropdown): string
    {

        $dropdownOptions = $dropdown->getOption('dropdown');
        $splitOption = $dropdownOptions['split'] ?? false;

        if ($splitOption) {
            $options = $dropdown->getOptions();
            unset($options['dropdown']);
            if (empty($options['label'])) {
                $options['label'] = $dropdown->getLabel();
            }
            $splitElement = [
                'type' => \Laminas\Form\Element\Button::class,
                'name' => $dropdown->getName() . '-toggle',
                'options' => $options,
                'attributes' => [
                    'class' => 'dropdown-toggle-split',
                ],
            ];

            if (is_string($splitOption)) {
                $splitElement['options']['label'] = $splitOption;
            } elseif (is_array($splitOption)) {
                $splitElement = \Laminas\Stdlib\ArrayUtils::merge($splitElement, $splitOption);
            } elseif ($splitOption !== true) {
                throw new \InvalidArgumentException(sprintf(
                    '"split" option expects a string an array or true, "%s" given',
                    is_object($splitOption)
                        ? get_class($splitOption)
                        : gettype($splitOption)
                ));
            }
            $factory = new \Laminas\Form\Factory();
            $toogleElement = $factory->create($splitElement);

            if ($toogleElement instanceof \Laminas\Form\LabelAwareInterface) {
                $toogleElement->setLabel('<span class="sr-only">' . $toogleElement->getLabel() . '</span>');
                $toogleElement->setLabelOption('disable_html_escape', true);
            }
        } else {
            $toogleElement = clone $dropdown;
            $toogleElement->setOption('dropdown', null);
        }

        // Dropdown toggle default attributes
        $toogleElementAttributes = $toogleElement->getAttributes();
        foreach (
            [
                'data-toggle' => 'dropdown',
                'role' => 'button',
                'aria-haspopup' => 'true',
                'aria-expanded' => 'false',
                'data-offset' => $dropdownOptions['offset'] ?? null,
            ] as $attributeName => $defaultValue
        ) {
            if ($defaultValue !== null && !isset($toogleElementAttributes[$attributeName])) {
                $toogleElementAttributes[$attributeName] =  $defaultValue;
            }
        }

        $tag = $toogleElement->getOption('tag');
        if ($tag === 'a') {
            $toogleElementAttributes['href'] = '#';
        }

        // Dropdown toggle class attribute
        $toogleElement->setAttributes($this->setClassesToAttributes(
            $toogleElementAttributes,
            ['dropdown-toggle']
        ));
        $toogleMarkup = $this->getView()->plugin('formButton')->render($toogleElement);

        if (!$splitOption) {
            return $toogleMarkup;
        }

        // Render button without dropdown
        $dropdown->setOption('dropdown', null);
        $toogleMarkup = $this->getView()->plugin('formButton')->render($dropdown) . PHP_EOL . $toogleMarkup;
        $dropdown->setOption('dropdown', $dropdownOptions);
        return  $toogleMarkup;
    }

    public function renderMenuFromElement($dropdown, bool $escape = true)
    {
        if (
            is_array($dropdown)
            || ($dropdown instanceof \Traversable
                && !($dropdown instanceof \Laminas\Form\ElementInterface))
        ) {
            $factory = new \Laminas\Form\Factory();
            $dropdown = $factory->create($dropdown);
        } elseif (!($dropdown instanceof \Laminas\Form\ElementInterface)) {
            throw new \InvalidArgumentException(sprintf(
                'Argument "$dropdown" expects %s, "%s" given',
                'an instanceof \Laminas\Form\ElementInterface or an array / Traversable',
                is_object($dropdown) ? get_class($dropdown) : gettype($dropdown)
            ));
        }

        $dropdownOptions = $dropdown->getOption('dropdown');
        if (!isset($dropdownOptions['items'])) {
            throw new \InvalidArgumentException(__METHOD__ . ' expects "items" option');
        }
        if (!is_array($dropdownOptions['items'])) {
            throw new \InvalidArgumentException(sprintf(
                '"items" option expects an array, "%s" given',
                is_object($dropdownOptions['items'])
                    ? get_class($dropdownOptions['items'])
                    : gettype($dropdownOptions['items'])
            ));
        }

        // List items
        $menuAttributes = [];
        if ($id = $dropdown->getAttribute('id')) {
            $menuAttributes['aria-labelledby'] = $id;
        }

        if (!empty($dropdownOptions['alignment'])) {
            if (is_string($dropdownOptions['alignment'])) {
                $dropdownOptions['alignment'] = [$dropdownOptions['alignment']];
            }

            $aligmentClasses = [];
            foreach ($dropdownOptions['alignment'] as $aligment) {
                if (
                    !in_array($aligment, static::$alignments, true)
                    && !preg_match(
                        '/^(' . join('|', $this->getSizes()) . ')-(' . join('|', static::$alignments) . ')$/',
                        $aligment
                    )
                ) {
                    throw new \InvalidArgumentException('Alignment option "' . $aligment . '" does not exist');
                }
                $aligmentClasses[]   = 'dropdown-menu-' .  $aligment;
            }
            if ($aligmentClasses) {
                $menuAttributes = $this->setClassesToAttributes(
                    $menuAttributes,
                    $aligmentClasses
                );
            }
        }

        return $this->renderMenu($dropdownOptions['items'], $menuAttributes, $escape);
    }

    /**
     * Render dropdown menu markup
     * @param iterable $items Dropdown menu items
     * @param iterable $attributes Dropdown menu attributes
     * @param boolean $escape     Escape the dropdown menu.
     * @throws \InvalidArgumentException
     * @return string
     */
    public function renderMenu(iterable $items, iterable $attributes = [], bool $escape = true): string
    {
        // Dropdown list class attribute
        $attributes = $this->setClassesToAttributes(
            $attributes,
            ['dropdown-menu']
        );

        // Dropdown list items
        $itemsContent = '';
        foreach ($items as $key => $itemOptions) {
            switch (true) {
                case $itemOptions instanceof \Laminas\Form\FormInterface:
                    // Free html
                    $itemOptions = [
                        'type' => self::TYPE_ITEM_HTML,
                        'label' =>  $this->getView()->plugin('form')->__invoke($itemOptions),
                    ];
                    break;
                case !is_array($itemOptions):
                    if (!is_scalar($itemOptions)) {
                        throw new \LogicException(sprintf(
                            '"item" option expects an array or a scalar value, "%s" given',
                            is_object($itemOptions)
                                ? get_class($itemOptions)
                                : gettype($itemOptions)
                        ));
                    }

                    if (isset(static::$dropdownItemTags[$itemOptions])) {
                        $itemOptions = ['type' => $itemOptions];
                        if (is_string($key)) {
                            $itemOptions['label'] = $key;
                        }
                    } else {
                        if ($this->isHTML($itemOptions)) {
                            // Free html
                            $itemOptions = [
                                'type' => self::TYPE_ITEM_HTML,
                                'label' => $itemOptions,
                            ];
                        } else {
                            // Link
                            $itemOptions = [
                                'label' => $itemOptions,
                                'type' => self::TYPE_ITEM_LINK,
                                'item_attributes' => ['href' => is_string($key) ? $key : null],
                            ];
                        }
                    }
                    break;
                default:
                    if (!isset($itemOptions['label'])) {
                        $itemOptions['label'] = is_string($key) ? $key : null;
                    }
                    if (!isset($itemOptions['type'])) {
                        $itemOptions['type'] = self::TYPE_ITEM_LINK;
                    }
            }

            $itemsContent .= ($itemsContent ? PHP_EOL : '') . $this->renderItem($itemOptions, $escape);
        }

        return $this->htmlElement('div', $attributes, $itemsContent, $escape);
    }
    /**
     * Render dropdown list item markup
     * @param array $itemOptions
     * @throws \InvalidArgumentException
     * @return string
     */
    protected function renderItem(array $itemOptions, bool $escape): string
    {
        if (empty($itemOptions['type'])) {
            throw new \InvalidArgumentException(__METHOD__ . ' expects "type" option');
        }

        $itemContent = '';
        $classes = [];
        $attributes = $itemOptions['attributes']  ?? [];
        switch ($itemOptions['type']) {
            case self::TYPE_ITEM_HEADER:
                // Define item container "header" class
                $classes[] = 'dropdown-header';

                // Header label
                if (empty($itemOptions['label'])) {
                    throw new \LogicException('"' . $itemOptions['type'] . '" item expects "label" option');
                }
                if (!is_scalar($itemOptions['label'])) {
                    throw new \LogicException(sprintf(
                        '"label" option expect scalar value, "%s" given',
                        is_object($itemOptions['label'])
                            ? get_class($itemOptions['label'])
                            : gettype($itemOptions['label'])
                    ));
                }
                $itemContent = $itemOptions['label'];

                break;

            case self::TYPE_ITEM_DIVIDER:
                // Define item container "divider" class
                $classes[] = 'dropdown-divider';
                $itemContent = '';
                break;

            case self::TYPE_ITEM_LINK:
                // Define item container "item" class
                $classes[] = 'dropdown-item';
                $defaultAttributes = ['href' => '#'];

                foreach (
                    [
                        'active' => true,
                        'disabled' => ['tabindex' => '-1', 'aria-disabled' => 'true'],
                    ] as $option => $optionAttributes
                ) {
                    if (!empty($itemOptions[$option])) {
                        $classes[] = $option;

                        if (is_array($optionAttributes)) {
                            $defaultAttributes = \Laminas\Stdlib\ArrayUtils::merge(
                                $defaultAttributes,
                                $optionAttributes
                            );
                        }
                    }
                }

                if (empty($itemOptions['label'])) {
                    throw new \LogicException('"' . $itemOptions['type'] . '" item expects "label" option');
                }
                if (!is_scalar($itemOptions['label'])) {
                    throw new \LogicException(sprintf(
                        '"label" option expect scalar value, "%s" given',
                        is_object($itemOptions['label'])
                            ? get_class($itemOptions['label'])
                            : gettype($itemOptions['label'])
                    ));
                }
                $itemContent = $itemOptions['label'];

                // Default attributes
                foreach ($defaultAttributes as $attributeName => $defaultValue) {
                    if ($defaultValue !== null && empty($attributes[$attributeName])) {
                        $attributes[$attributeName] = $defaultValue;
                    }
                }

                break;

            case self::TYPE_ITEM_TEXT:
                // Define item container "item-text" class
                $classes[] = 'dropdown-item-text';
                if (empty($itemOptions['label'])) {
                    throw new \LogicException('"' . $itemOptions['type'] . '" item expects "label" option');
                }
                if (!is_scalar($itemOptions['label'])) {
                    throw new \LogicException(sprintf(
                        '"label" option expect scalar value, "%s" given',
                        is_object($itemOptions['label'])
                            ? get_class($itemOptions['label'])
                            : gettype($itemOptions['label'])
                    ));
                }
                $itemContent = $itemOptions['label'];
                break;
            case self::TYPE_ITEM_HTML:
                if (empty($itemOptions['label'])) {
                    throw new \LogicException('"' . $itemOptions['type'] . '" item expects "label" option');
                }
                if (!is_scalar($itemOptions['label'])) {
                    throw new \LogicException(sprintf(
                        '"label" option expect scalar value, "%s" given',
                        is_object($itemOptions['label'])
                            ? get_class($itemOptions['label'])
                            : gettype($itemOptions['label'])
                    ));
                }
                return $itemOptions['label'];
        }

        // Dropdown list class attribute
        $attributes = $this->setClassesToAttributes($attributes, $classes);

        if ($itemContent) {
            if (($translator = $this->getTranslator())) {
                $itemContent = $translator->translate($itemContent, $this->getTranslatorTextDomain());
            }
        }

        $itemMarkup = $this->htmlElement(
            static::$dropdownItemTags[$itemOptions['type']],
            $attributes,
            $itemContent,
            $escape
        );
        return $itemMarkup;
    }
}
