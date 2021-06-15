<?php

namespace TwbsHelper\Form\View\Helper;

class FormButton extends \Laminas\Form\View\Helper\FormButton
{
    use \TwbsHelper\View\Helper\HtmlTrait;

    public const POSITION_PREPEND = 'prepend';
    public const POSITION_APPEND  = 'append';

    protected static $dropdownContainerFormat = '<div %s>%s</div>';

    // Allowed variants
    protected static $variants = [
        'danger',
        'dark',
        // Added in BS4
        'info',
        'light',
        // Added in BS4
        'link',
        'primary',
        'secondary',
        // BS4 Renamed .btn-default to .btn-secondary
        'success',
        'warning',
    ];

    /**
     * Invoke helper as functor
     *
     * Proxies to {@link render()}.
     *
     * @param array|\Laminas\Form\ElementInterface|null $oElement
     * @param null|string           $sButtonContent
     * @return string|FormButton
     */
    public function __invoke($oElement = null, $sButtonContent = null)
    {
        if (!$oElement) {
            return $this;
        }

        if (is_array($oElement)) {
            return $this->renderSpec($oElement, $sButtonContent);
        }

        if ($oElement instanceof \Laminas\Form\ElementInterface) {
            return $this->render($oElement, $sButtonContent);
        }

        throw new \InvalidArgumentException(sprintf(
            'Button expects an instanceof \Laminas\Form\ElementInterface or an array, "%s" given',
            is_object($oElement) ? get_class($oElement) : gettype($oElement)
        ));
    }
    
    /**
     * Renders a button from an array specification
     *
     * @see FormButton::render()
     */
    public function renderSpec(array $oElementSpec, ?string $sButtonContent = null): string
    {
        $oFactory = new \Laminas\Form\Factory();

        // Set default type if none given
        if (empty($oElementSpec['type'])) {
            $oElementSpec['type'] = \Laminas\Form\Element\Button::class;
        }

        $oElement = $oFactory->create($oElementSpec);

        return $this->render($oElement);
    }

    /**
     * Accept following extra options:
     * * string variant:  'danger', 'dark', 'info', 'light', 'link', 'primary', 'secondary', 'success', 'warning'
     * * string size:  'sm', 'lg'
     * * bool block
     *
     * @see \Laminas\Form\View\Helper\FormButton::render()
     */
    public function render(\Laminas\Form\ElementInterface $oElement, ?string $sButtonContent = null): string
    {
        // Dropdown button
        if ($oElement->getOption('dropdown')) {
            return $this->getView()->plugin('dropdown')->render($oElement);
        }

        $this->defineButtonClasses($oElement);
        $sButtonContent = $this->renderButtonContent($oElement, $sButtonContent);

        $sTag = $oElement->getOption('tag');

        $aValidTagAttributes = $this->validTagAttributes;
        if ($sTag === 'a') {
            $this->validTagAttributes['href'] = true;

            unset($this->validTagAttributes['type']);
            unset($this->validTagAttributes['value']);
            unset($this->validTagAttributes['name']);

            $oElement->setAttribute('type', null);
            $oElement->setAttribute('name', 'dummy');

            if (!$oElement->getAttribute('role')) {
                $oElement->setAttribute('role', 'button');
            }
        }

        // Popover
        $aPopoverAttributes = $this->getPopoverAttributes($oElement);

        // Tooltip
        $aTooltipAttributes = $this->getTooltipAttributes($oElement);

        $bIsDisabled = $oElement->getAttribute('disabled');
        if ($aPopoverAttributes || $aTooltipAttributes) {
            if ($bIsDisabled) {
                $this->setStylesToElement($oElement, [
                    'pointer-events' => 'none',
                ]);
            } else {
                $oElement->setAttributes(array_merge(
                    $aPopoverAttributes,
                    $aTooltipAttributes,
                    $oElement->getAttributes()
                ));
            }
        }

        $sMarkup =  $this->openTag($oElement) . $this->addProperIndentation($sButtonContent) . $this->closeTag();
        $this->validTagAttributes = $aValidTagAttributes;

        if ($sTag && $sTag !== 'button') {
            unset($this->booleanAttributes['type'], $this->booleanAttributes['value']);

            $sMarkup = str_replace(
                ['<button', '</button>'],
                ['<' . $sTag,  '</' . $sTag . '>'],
                $sMarkup
            );
        }

        if ($bIsDisabled && ($aPopoverAttributes || $aTooltipAttributes)) {
            $sMarkup = $this->htmlElement(
                'span',
                $this->setClassesToAttributes(
                    array_merge(
                        $aPopoverAttributes,
                        $aTooltipAttributes,
                        ['tabindex' => '0']
                    ),
                    ['d-inline-block']
                ),
                $sMarkup
            );
        }

        return $sMarkup;
    }

    protected function getTooltipAttributes(\Laminas\Form\ElementInterface $oElement): array
    {
        // Retrieve tooltip options
        $aTooltipOptions = $oElement->getOption('tooltip');
        if (!$aTooltipOptions) {
            return [];
        }

        if (is_string($aTooltipOptions)) {
            $aTooltipOptions = ['content' => $aTooltipOptions];
        }

        $aTooltipAttributes = [
            'title' => $aTooltipOptions['content'],
            'data-toggle' => 'tooltip',
        ];

        if ($this->isHTML($aTooltipOptions['content'])) {
            $aTooltipAttributes['data-html'] = 'true';
        }

        if (isset($aTooltipOptions['placement'])) {
            $aTooltipAttributes['data-placement'] = $aTooltipOptions['placement'];
        }
        return $aTooltipAttributes;
    }

    protected function getPopoverAttributes(\Laminas\Form\ElementInterface $oElement): array
    {
        $aPopoverOption = $oElement->getOption('popover');
        if (!$aPopoverOption) {
            return [];
        }

        if (is_string($aPopoverOption)) {
            $aPopoverOption = ['content' => $aPopoverOption];
        } elseif (!is_array($aPopoverOption)) {
            throw new \InvalidArgumentException(sprintf(
                'Option "popover" expects a string or an array, "%s" given',
                is_object($aPopoverOption) ? get_class($aPopoverOption) : gettype($aPopoverOption)
            ));
        }

        $aPopoverAttributes = [
            'data-toggle' => 'popover',
            'data-content' => $aPopoverOption['content'],
        ];

        if (isset($aPopoverOption['placement'])) {
            $aPopoverAttributes['data-placement'] = $aPopoverOption['placement'];
            $aPopoverAttributes['data-container'] = 'body';
        }

        if (isset($aPopoverOption['trigger'])) {
            $aPopoverAttributes['data-trigger'] = $aPopoverOption['trigger'];
        }
        return $aPopoverAttributes;
    }

    protected function defineButtonClasses(\Laminas\Form\ElementInterface $oElement)
    {
        if (!empty($oElement->getOption('disable_twbs'))) {
            return;
        }

        $aClassesToAdd = ['btn'];

        // Variant option
        if ($sVariant = $oElement->getOption('variant')) {
            $aClassesToAdd[] = $this->getVariantClass($sVariant, 'btn', 'outline');
        }

        // Size option
        if ($sSize = $oElement->getOption('size')) {
            $aClassesToAdd[] = $this->getSizeClass($sSize, 'btn');
        }

        // Block option
        if ($oElement->getOption('block')) {
            $aClassesToAdd[] = 'btn-block';
        }

        $aClasses = $this->addClassesAttribute(($oElement->getAttribute('class') ?? ''), $aClassesToAdd);

        if (!preg_grep('/^btn-.*(' . join('|', static::$variants) . ')$/', $aClasses)) {
            $aClasses[] = 'btn-secondary';
        }

        $this->setClassesToElement($oElement, $aClasses);
    }

    protected function renderButtonContent(\Laminas\Form\ElementInterface $oElement, string $sButtonContent = null)
    {
        // Define button content
        if (null === $sButtonContent) {
            $sButtonContent = $oElement->getLabel();

            if (!$sButtonContent) {
                $sButtonContent = $oElement->getValue();
            }
        }

        if ($sButtonContent) {
            // Translate button content upon request
            $oTranslator = $this->getTranslator();
            if ($oTranslator) {
                $sButtonContent = $oTranslator->translate($sButtonContent, $this->getTranslatorTextDomain());
            }

            if (
                !$this->isHTML($sButtonContent)
                && (!$oElement instanceof \Laminas\Form\LabelAwareInterface
                    || !$oElement->getLabelOption('disable_html_escape'))
            ) {
                $sButtonContent = $this->getEscapeHtmlHelper()($sButtonContent);
            }
        }

        // Render icon
        $sButtonContent = $this->renderIconContent($oElement, $sButtonContent);

        // Render spinner
        $sButtonContent = $this->renderSpinnerContent($oElement, $sButtonContent);

        if (null === $sButtonContent) {
            throw new \DomainException(sprintf(
                '%s expects either button content as the second argument, ' .
                    'or that the element provided has a label value, ' .
                    'a glyphicon option, or a fontAwesome option; none found',
                __METHOD__
            ));
        }
        return $sButtonContent;
    }

    protected function renderIconContent(\Laminas\Form\ElementInterface $oElement, string $sButtonContent = null)
    {
        // Retrieve icon options
        $aIconOptions = $oElement->getOption('icon');
        if (!$aIconOptions) {
            return $sButtonContent;
        }

        // Set default icon options if scalar provided
        if (is_scalar($aIconOptions)) {
            $aIconOptions = [
                'class'     => $aIconOptions,
                'position' => self::POSITION_PREPEND,
            ];
        } elseif (is_array($aIconOptions)) {
            if (empty($aIconOptions['class'])) {
                throw new \InvalidArgumentException('"[icon][class]" option is undefined');
            }

            if (!is_scalar($aIconOptions['class'])) {
                throw new \InvalidArgumentException(sprintf(
                    '"[icon][class]" option expects a scalar value, "%s" given',
                    is_object($aIconOptions['class'])
                        ? get_class($aIconOptions['class'])
                        : gettype($aIconOptions['class'])
                ));
            }

            if (isset($aIconOptions['position'])) {
                if (!is_string($aIconOptions['position'])) {
                    throw new \InvalidArgumentException(sprintf(
                        '"[icon][position]" option expects a string, "%s" given',
                        is_object($aIconOptions['position'])
                            ? get_class($aIconOptions['position'])
                            : gettype($aIconOptions['position'])
                    ));
                }
                if (!in_array($aIconOptions['position'], [self::POSITION_PREPEND, self::POSITION_APPEND], true)) {
                    throw new \InvalidArgumentException(sprintf(
                        '"[icon][position]" option allows "%s" or "%s", "%s" given',
                        self::POSITION_PREPEND,
                        self::POSITION_APPEND,
                        $aIconOptions['position']
                    ));
                }
            }
        } else {
            throw new \InvalidArgumentException(sprintf(
                '"icon" button option expects a scalar value or an array, "%s" given',
                is_object($aIconOptions) ? get_class($aIconOptions) : gettype($aIconOptions)
            ));
        }

        // Define icon position
        $sIconPosition = $aIconOptions['position'] ?? self::POSITION_PREPEND;

        $sIconContent = $this->htmlElement('i', ['class' => $aIconOptions['class']], '');

        return $sButtonContent
            ? $sIconPosition === self::POSITION_PREPEND
            // Append icon to button content
            ? $sIconContent . ' ' . $sButtonContent
            // Prepend icon to button content
            : $sButtonContent . ' ' . $sIconContent
            // No button content provided, set icon as button content
            : $sIconContent;
    }

    protected function renderSpinnerContent(\Laminas\Form\ElementInterface $oElement, string $sButtonContent = null)
    {
        // Retrieve spinner options
        $aSpinnerOptions = $oElement->getOption('spinner');
        if (!$aSpinnerOptions) {
            return $sButtonContent;
        }

        if (is_string($aSpinnerOptions)) {
            $aSpinnerOptions = ['label' => $aSpinnerOptions];
        }
        if ($aSpinnerOptions === true) {
            $aSpinnerOptions = [];
        }
        $aSpinnerOptions['tag'] = 'span';
        $aSpinnerOptions['size'] = 'sm';

        $aSpinnerOptions['attributes'] = array_merge(
            $aSpinnerOptions['attributes'] ?? [],
            ['aria-hidden' => 'true']
        );

        // Define spinner position
        $sSpinnerPosition = $aSpinnerOptions['position'] ?? self::POSITION_PREPEND;

        $sSpinnerContent = $this->getView()->plugin('spinner')->__invoke($aSpinnerOptions);

        return $sButtonContent
            ? $sSpinnerPosition === self::POSITION_PREPEND
            // Append spinner to button content
            ? $sSpinnerContent . PHP_EOL . $sButtonContent
            // Prepend spinner to button content
            : $sButtonContent . PHP_EOL . $sSpinnerContent
            // No button content provided, set spinner as button content
            : $sSpinnerContent;
    }

    /**
     * Determine button type to use
     *
     * @param \Laminas\Form\ElementInterface $oElement
     * @return string|boolean
     */
    protected function getType(\Laminas\Form\ElementInterface $oElement): string
    {
        $sTag = $oElement->getOption('tag');
        if (!$sTag || $sTag === 'button') {
            return parent::getType($oElement);
        }
        return '';
    }
}
