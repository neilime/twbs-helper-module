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
     * @param \Laminas\Form\ElementInterface|array $oDropdown
     * @param boolean $bEscape     Escape the dropdown.
     * @return \TwbsHelper\View\Helper\Dropdown|string
     */
    public function __invoke($oDropdown = null, bool $bEscape = true)
    {
        return $oDropdown ? $this->render($oDropdown, $bEscape) : $this;
    }

    /**
     * Render dropdown markup
     * @param \Laminas\Form\ElementInterface|iterable $oDropdown
     * @param boolean $bEscape     Escape the dropdown.
     * @return string
     */
    public function render($oDropdown, bool $bEscape = true): string
    {

        $oDropdown = $this->createDropdown($oDropdown);

        $aDropdownOptions = $oDropdown->getOption('dropdown');
        if (\Laminas\Stdlib\ArrayUtils::isList($aDropdownOptions)) {
            $oDropdown->setOption('dropdown', $aDropdownOptions =  [
                'items' => $aDropdownOptions,
            ]);
        }

        // Toggle
        $sDropdownContent = $this->renderToggle($oDropdown) . PHP_EOL;

        // Menu
        $sDropdownContent .= $this->renderMenuFromElement($oDropdown, $bEscape);

        if (!empty($aDropdownOptions['disable_container'])) {
            return $sDropdownContent;
        }

        return $this->renderContainer($aDropdownOptions, $sDropdownContent);
    }

    /**
     * @param \Laminas\Form\ElementInterface|iterable $oDropdown
     * @return \Laminas\Form\ElementInterface
     */
    protected function createDropdown($oDropdown)
    {
        if (
            is_iterable($oDropdown)
            && !($oDropdown instanceof \Laminas\Form\ElementInterface)
        ) {
            $oFactory = new \Laminas\Form\Factory();
            $oDropdown = $oFactory->create($oDropdown);
        } elseif (!($oDropdown instanceof \Laminas\Form\ElementInterface)) {
            throw new \InvalidArgumentException(sprintf(
                'Argument "$oDropdown" expects %s, "%s" given',
                'an instanceof \Laminas\Form\ElementInterface or an iterable',
                is_object($oDropdown) ? get_class($oDropdown) : gettype($oDropdown)
            ));
        }
        return $oDropdown;
    }

    protected function renderContainer(array $aDropdownOptions, string $sDropdownContent): string
    {
        $aClasses = $this->getClassesAttribute($aDropdownOptions['attributes']['class'] ?? '');
        if (!empty($aDropdownOptions['direction'])) {
            if (!in_array($aDropdownOptions['direction'], static::$directions, true)) {
                throw new \InvalidArgumentException(sprintf(
                    'Direction option "%s" does not exist',
                    $aDropdownOptions['direction']
                ));
            }
            $aClasses[] = 'drop' . $aDropdownOptions['direction'];
        }

        if (!preg_grep('/^drop(' . join('|', static::$directions) . ')$/', $aClasses)) {
            $aClasses[] = 'drop' . static::$directions[0];
        }

        if (!empty($aDropdownOptions['split'])) {
            $aClasses[] = 'btn-group';
        }

        // Render dropdown container
        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes($aDropdownOptions['attributes']  ?? [], $aClasses),
            $sDropdownContent
        );
    }

    /**
     * Render dropdown toggle markup
     * @param \Laminas\Form\ElementInterface $oDropdown
     * @throws \InvalidArgumentException
     * @return string
     */
    public function renderToggle(\Laminas\Form\ElementInterface $oDropdown): string
    {

        $aDropdownOptions = $oDropdown->getOption('dropdown');
        $sSplitOption = $aDropdownOptions['split'] ?? false;

        if ($sSplitOption) {
            $aOptions = $oDropdown->getOptions();
            unset($aOptions['dropdown']);
            if (empty($aOptions['label'])) {
                $aOptions['label'] = $oDropdown->getLabel();
            }
            $aSplitElement = [
                'type' => \Laminas\Form\Element\Button::class,
                'name' => $oDropdown->getName() . '-toggle',
                'options' => $aOptions,
                'attributes' => [
                    'class' => 'dropdown-toggle-split',
                ],
            ];

            if (is_string($sSplitOption)) {
                $aSplitElement['options']['label'] = $sSplitOption;
            } elseif (is_array($sSplitOption)) {
                $aSplitElement = \Laminas\Stdlib\ArrayUtils::merge($aSplitElement, $sSplitOption);
            } elseif ($sSplitOption !== true) {
                throw new \InvalidArgumentException(sprintf(
                    '"split" option expects a string an array or true, "%s" given',
                    is_object($sSplitOption)
                        ? get_class($sSplitOption)
                        : gettype($sSplitOption)
                ));
            }
            $oFactory = new \Laminas\Form\Factory();
            $oToogleElement = $oFactory->create($aSplitElement);

            if ($oToogleElement instanceof \Laminas\Form\LabelAwareInterface) {
                $oToogleElement->setLabel('<span class="sr-only">' . $oToogleElement->getLabel() . '</span>');
                $oToogleElement->setLabelOption('disable_html_escape', true);
            }
        } else {
            $oToogleElement = clone $oDropdown;
            $oToogleElement->setOption('dropdown', null);
        }

        // Dropdown toggle default attributes
        $aToogleElementAttributes = $oToogleElement->getAttributes();
        foreach (
            [
                'data-toggle' => 'dropdown',
                'role' => 'button',
                'aria-haspopup' => 'true',
                'aria-expanded' => 'false',
                'data-offset' => $aDropdownOptions['offset'] ?? null,
            ] as $sAttributeName => $sDefaultValue
        ) {
            if ($sDefaultValue !== null && !isset($aToogleElementAttributes[$sAttributeName])) {
                $aToogleElementAttributes[$sAttributeName] =  $sDefaultValue;
            }
        }

        $sTag = $oToogleElement->getOption('tag');
        if ($sTag && $sTag === 'a') {
            $aToogleElementAttributes['href'] = '#';
        }

        // Dropdown toggle class attribute
        $oToogleElement->setAttributes($this->setClassesToAttributes(
            $aToogleElementAttributes,
            ['dropdown-toggle']
        ));
        $sToogleMarkup = $this->getView()->plugin('formButton')->render($oToogleElement);

        if (!$sSplitOption) {
            return $sToogleMarkup;
        }

        // Render button without dropdown
        $oDropdown->setOption('dropdown', null);
        $sToogleMarkup = $this->getView()->plugin('formButton')->render($oDropdown) . PHP_EOL . $sToogleMarkup;
        $oDropdown->setOption('dropdown', $aDropdownOptions);
        return  $sToogleMarkup;
    }

    protected function renderMenuFromElement(\Laminas\Form\ElementInterface $oDropdown, bool $bEscape = true)
    {
        $aDropdownOptions = $oDropdown->getOption('dropdown');
        if (!isset($aDropdownOptions['items'])) {
            throw new \InvalidArgumentException(__METHOD__ . ' expects "items" option');
        }
        if (!is_array($aDropdownOptions['items'])) {
            throw new \InvalidArgumentException(sprintf(
                '"items" option expects an array, "%s" given',
                is_object($aDropdownOptions['items'])
                    ? get_class($aDropdownOptions['items'])
                    : gettype($aDropdownOptions['items'])
            ));
        }

        // List items
        $aMenuAttributes = [];
        if ($sId = $oDropdown->getAttribute('id')) {
            $aMenuAttributes['aria-labelledby'] = $sId;
        }

        if (!empty($aDropdownOptions['alignment'])) {
            if (is_string($aDropdownOptions['alignment'])) {
                $aDropdownOptions['alignment'] = [$aDropdownOptions['alignment']];
            }

            $aAligmentClasses = [];
            foreach ($aDropdownOptions['alignment'] as $sAligment) {
                if (
                    !in_array($sAligment, static::$alignments, true)
                    && !preg_match(
                        '/^(' . join('|', $this->getSizes()) . ')-(' . join('|', static::$alignments) . ')$/',
                        $sAligment
                    )
                ) {
                    throw new \InvalidArgumentException('Alignment option "' . $sAligment . '" does not exist');
                }
                $aAligmentClasses[]   = 'dropdown-menu-' .  $sAligment;
            }
            if ($aAligmentClasses) {
                $aMenuAttributes = $this->setClassesToAttributes(
                    $aMenuAttributes,
                    $aAligmentClasses
                );
            }
        }

        return $this->renderMenu($aDropdownOptions['items'], $aMenuAttributes, $bEscape);
    }

    /**
     * Render dropdown menu markup
     * @param array $aItems Dropdown menu items
     * @param array $aAttributes Dropdown menu attributes
     * @param boolean $bEscape     Escape the dropdown menu.
     * @throws \InvalidArgumentException
     * @return string
     */
    public function renderMenu(array $aItems, array $aAttributes = [], bool $bEscape = true): string
    {
        // Dropdown list class attribute
        $aAttributes = $this->setClassesToAttributes(
            $aAttributes,
            ['dropdown-menu']
        );

        // Dropdown list items
        $sItems = '';
        foreach ($aItems as $sKey => $aItemOptions) {
            switch (true) {
                case $aItemOptions instanceof \Laminas\Form\FormInterface:
                    // Free html
                    $aItemOptions = [
                        'type' => self::TYPE_ITEM_HTML,
                        'label' =>  $this->getView()->plugin('form')->__invoke($aItemOptions),
                    ];
                    break;
                case is_array($aItemOptions):
                    if (!isset($aItemOptions['label'])) {
                        $aItemOptions['label'] = is_string($sKey) ? $sKey : null;
                    }
                    if (!isset($aItemOptions['type'])) {
                        $aItemOptions['type'] = self::TYPE_ITEM_LINK;
                    }
                    break;
                case is_scalar($aItemOptions):
                    if (isset(static::$dropdownItemTags[$aItemOptions])) {
                        $aItemOptions = ['type' => $aItemOptions];
                        if (is_string($sKey)) {
                            $aItemOptions['label'] = $sKey;
                        }
                    } else {
                        if ($this->isHTML($aItemOptions)) {
                            // Free html
                            $aItemOptions = [
                                'type' => self::TYPE_ITEM_HTML,
                                'label' => $aItemOptions,
                            ];
                        } else {
                            // Link
                            $aItemOptions = [
                                'label' => $aItemOptions,
                                'type' => self::TYPE_ITEM_LINK,
                                'item_attributes' => ['href' => is_string($sKey) ? $sKey : null],
                            ];
                        }
                    }
                    break;
                default:
                    throw new \LogicException(sprintf(
                        '"item" option expects an array, an instance of "\Laminas\Form\FormInterface" ' .
                            'or a scalar value, "%s" given',
                        is_object($aItemOptions)
                            ? get_class($aItemOptions)
                            : gettype($aItemOptions)
                    ));
            }

            $sItems .= ($sItems ? PHP_EOL : '') . $this->renderItem($aItemOptions, $bEscape);
        }

        return $this->htmlElement('div', $aAttributes, $sItems, $bEscape);
    }
    /**
     * Render dropdown list item markup
     * @param array $aItemOptions
     * @throws \InvalidArgumentException
     * @return string
     */
    protected function renderItem(array $aItemOptions, bool $bEscape): string
    {
        if (empty($aItemOptions['type'])) {
            throw new \InvalidArgumentException(__METHOD__ . ' expects a "type" option');
        }

        $sItemContent = '';
        $aClasses = [];
        $aAttributes = $aItemOptions['attributes']  ?? [];
        switch ($aItemOptions['type']) {
            case self::TYPE_ITEM_HEADER:
                // Define item container "header" class
                $aClasses[] = 'dropdown-header';

                // Header label
                if (empty($aItemOptions['label'])) {
                    throw new \LogicException('"' . $aItemOptions['type'] . '" item expects a "label" option');
                }
                if (!is_scalar($aItemOptions['label'])) {
                    throw new \LogicException(sprintf(
                        '"%s" item "label" option expect a scalar value, "%s" given',
                        $aItemOptions['type'],
                        is_object($aItemOptions['label'])
                            ? get_class($aItemOptions['label'])
                            : gettype($aItemOptions['label'])
                    ));
                }
                $sItemContent = $aItemOptions['label'];

                break;

            case self::TYPE_ITEM_DIVIDER:
                // Define item container "divider" class
                $aClasses[] = 'dropdown-divider';
                $sItemContent = '';
                break;

            case self::TYPE_ITEM_LINK:
                // Define item container "item" class
                $aClasses[] = 'dropdown-item';
                $aDefaultAttributes = ['href' => '#'];

                foreach (
                    [
                        'active' => true,
                        'disabled' => ['tabindex' => '-1', 'aria-disabled' => 'true'],
                    ] as $sOption => $aOptionAttributes
                ) {
                    if (!empty($aItemOptions[$sOption])) {
                        $aClasses[] = $sOption;

                        if (is_array($aOptionAttributes)) {
                            $aDefaultAttributes = \Laminas\Stdlib\ArrayUtils::merge(
                                $aDefaultAttributes,
                                $aOptionAttributes
                            );
                        }
                    }
                }

                if (empty($aItemOptions['label'])) {
                    throw new \LogicException('"' . $aItemOptions['type'] . '" item expects a "label" option');
                }
                if (!is_scalar($aItemOptions['label'])) {
                    throw new \LogicException(sprintf(
                        '"label" option expect a scalar value, "%s" given',
                        is_object($aItemOptions['label'])
                            ? get_class($aItemOptions['label'])
                            : gettype($aItemOptions['label'])
                    ));
                }
                $sItemContent = $aItemOptions['label'];

                // Default attributes
                foreach ($aDefaultAttributes as $sAttributeName => $sDefaultValue) {
                    if ($sDefaultValue !== null && empty($aAttributes[$sAttributeName])) {
                        $aAttributes[$sAttributeName] = $sDefaultValue;
                    }
                }

                break;

            case self::TYPE_ITEM_TEXT:
                // Define item container "item-text" class
                $aClasses[] = 'dropdown-item-text';
                if (empty($aItemOptions['label'])) {
                    throw new \LogicException('"' . $aItemOptions['type'] . '" item expects a "label" option');
                }
                if (!is_scalar($aItemOptions['label'])) {
                    throw new \LogicException(sprintf(
                        '"label" option expect a scalar value, "%s" given',
                        is_object($aItemOptions['label'])
                            ? get_class($aItemOptions['label'])
                            : gettype($aItemOptions['label'])
                    ));
                }
                $sItemContent = $aItemOptions['label'];
                break;
            case self::TYPE_ITEM_HTML:
                if (empty($aItemOptions['label'])) {
                    throw new \LogicException('"' . $aItemOptions['type'] . '" item expects a "label" option');
                }
                if (!is_scalar($aItemOptions['label'])) {
                    throw new \LogicException(sprintf(
                        '"label" option expect a scalar value, "%s" given',
                        is_object($aItemOptions['label'])
                            ? get_class($aItemOptions['label'])
                            : gettype($aItemOptions['label'])
                    ));
                }
                return $aItemOptions['label'];
        }

        // Dropdown list class attribute
        $aAttributes = $this->setClassesToAttributes($aAttributes, $aClasses);

        if ($sItemContent) {
            if (($oTranslator = $this->getTranslator())) {
                $sItemContent = $oTranslator->translate($sItemContent, $this->getTranslatorTextDomain());
            }
        }

        $sItemMarkup = $this->htmlElement(
            static::$dropdownItemTags[$aItemOptions['type']],
            $aAttributes,
            $sItemContent,
            $bEscape
        );

        return $sItemMarkup;
    }
}
