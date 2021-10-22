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
     * @param \Laminas\Form\ElementInterface|null $element
     * @param null|string           $buttonContent
     * @return string|FormButton
     */
    public function __invoke(?\Laminas\Form\ElementInterface $element = null, $buttonContent = null)
    {
        if (!$element) {
            return $this;
        }

        return $this->render($element, $buttonContent);
    }

    /**
     * Renders a button from an array specification
     *
     * @see FormButton::render()
     */
    public function renderSpec(array $elementSpec, ?string $buttonContent = null): string
    {
        $factory = new \Laminas\Form\Factory();

        // Set default type if none given
        if (empty($elementSpec['type'])) {
            $elementSpec['type'] = \Laminas\Form\Element\Button::class;
        }

        $element = $factory->create($elementSpec);

        if (!$element instanceof \Laminas\Form\Element\Button) {
            throw new \InvalidArgumentException(sprintf(
                'Invalid button type specified, %s does not inherit from %s.',
                get_class($element),
                \Laminas\Form\Element\Button::class
            ));
        }

        return $this->render($element, $buttonContent);
    }

    /**
     * Accept following extra options:
     * * string variant:  'danger', 'dark', 'info', 'light', 'link', 'primary', 'secondary', 'success', 'warning'
     * * string size:  'sm', 'lg'
     * * bool block
     *
     * @see \Laminas\Form\View\Helper\FormButton::render()
     */
    public function render(\Laminas\Form\ElementInterface $element, ?string $buttonContent = null): string
    {
        // Dropdown button
        if ($element->getOption('dropdown')) {
            return $this->getView()->plugin('dropdown')->render($element);
        }

        $this->defineButtonClasses($element);
        $buttonContent = $this->renderButtonContent($element, $buttonContent);

        $tag = $element->getOption('tag');

        $validTagAttributes = $this->validTagAttributes;
        if ($tag === 'a') {
            $this->validTagAttributes['href'] = true;

            unset($this->validTagAttributes['type']);
            unset($this->validTagAttributes['value']);
            unset($this->validTagAttributes['name']);

            $element->setAttribute('type', null);
            $element->setAttribute('name', 'dummy');

            if (!$element->getAttribute('role')) {
                $element->setAttribute('role', 'button');
            }
        }

        // Popover
        $popoverAttributes = $this->getPopoverAttributes($element);

        // Tooltip
        $tooltipAttributes = $this->getTooltipAttributes($element);

        $isDisabled = $element->getAttribute('disabled');
        if ($popoverAttributes || $tooltipAttributes) {
            if ($isDisabled) {
                $this->setStylesToElement($element, [
                    'pointer-events' => 'none',
                ]);
            } else {
                $element->setAttributes(array_merge(
                    $popoverAttributes,
                    $tooltipAttributes,
                    $element->getAttributes()
                ));
            }
        }

        $markup =  $this->openTag($element) . $this->addProperIndentation($buttonContent) . $this->closeTag();
        $this->validTagAttributes = $validTagAttributes;

        if ($tag && $tag !== 'button') {
            unset($this->booleanAttributes['type'], $this->booleanAttributes['value']);

            $markup = str_replace(
                ['<button', '</button>'],
                ['<' . $tag,  '</' . $tag . '>'],
                $markup
            );
        }

        if ($isDisabled && ($popoverAttributes || $tooltipAttributes)) {
            $markup = $this->htmlElement(
                'span',
                $this->setClassesToAttributes(
                    array_merge(
                        $popoverAttributes,
                        $tooltipAttributes,
                        ['tabindex' => '0']
                    ),
                    ['d-inline-block']
                ),
                $markup
            );
        }

        return $markup;
    }

    protected function getTooltipAttributes(\Laminas\Form\ElementInterface $element): array
    {
        // Retrieve tooltip options
        $tooltipOptions = $element->getOption('tooltip');
        if (!$tooltipOptions) {
            return [];
        }

        if (is_string($tooltipOptions)) {
            $tooltipOptions = ['content' => $tooltipOptions];
        }

        $tooltipAttributes = [
            'title' => $tooltipOptions['content'],
            'data-toggle' => 'tooltip',
        ];

        if ($this->isHTML($tooltipOptions['content'])) {
            $tooltipAttributes['data-html'] = 'true';
        }

        if (isset($tooltipOptions['placement'])) {
            $tooltipAttributes['data-placement'] = $tooltipOptions['placement'];
        }
        return $tooltipAttributes;
    }

    protected function getPopoverAttributes(\Laminas\Form\ElementInterface $element): array
    {
        $popoverOption = $element->getOption('popover');
        if (!$popoverOption) {
            return [];
        }

        if (is_string($popoverOption)) {
            $popoverOption = ['content' => $popoverOption];
        } elseif (!is_array($popoverOption)) {
            throw new \InvalidArgumentException(sprintf(
                'Option "popover" expects a string or an array, "%s" given',
                is_object($popoverOption) ? get_class($popoverOption) : gettype($popoverOption)
            ));
        }

        $popoverAttributes = [
            'data-toggle' => 'popover',
            'data-content' => $popoverOption['content'],
        ];

        if (isset($popoverOption['placement'])) {
            $popoverAttributes['data-placement'] = $popoverOption['placement'];
            $popoverAttributes['data-container'] = 'body';
        }

        if (isset($popoverOption['trigger'])) {
            $popoverAttributes['data-trigger'] = $popoverOption['trigger'];
        }
        return $popoverAttributes;
    }

    protected function defineButtonClasses(\Laminas\Form\ElementInterface $element)
    {
        if (!empty($element->getOption('disable_twbs'))) {
            return;
        }

        $classesToAdd = ['btn'];

        // Variant option
        if ($variant = $element->getOption('variant')) {
            $classesToAdd[] = $this->getVariantClass($variant, 'btn', 'outline');
        }

        // Size option
        if ($size = $element->getOption('size')) {
            $classesToAdd[] = $this->getSizeClass($size, 'btn');
        }

        // Block option
        if ($element->getOption('block')) {
            $classesToAdd[] = 'btn-block';
        }

        $classes = $this->addClassesAttribute(($element->getAttribute('class') ?? ''), $classesToAdd);

        if (!preg_grep('/^btn-.*(' . join('|', static::$variants) . ')$/', $classes)) {
            $classes[] = 'btn-secondary';
        }

        $this->setClassesToElement($element, $classes);
    }

    protected function renderButtonContent(\Laminas\Form\ElementInterface $element, string $buttonContent = null)
    {
        // Define button content
        if (null === $buttonContent) {
            $buttonContent = $element->getLabel();

            if (!$buttonContent) {
                $buttonContent = $element->getValue();
            }
        }

        if ($buttonContent) {
            // Translate button content upon request
            $translator = $this->getTranslator();
            if ($translator) {
                $buttonContent = $translator->translate($buttonContent, $this->getTranslatorTextDomain());
            }

            if (
                !$this->isHTML($buttonContent)
                && (!$element instanceof \Laminas\Form\LabelAwareInterface
                    || !$element->getLabelOption('disable_html_escape'))
            ) {
                $buttonContent = $this->getEscapeHtmlHelper()($buttonContent);
            }
        }

        // Render icon
        $buttonContent = $this->renderIconContent($element, $buttonContent);

        // Render spinner
        $buttonContent = $this->renderSpinnerContent($element, $buttonContent);

        if (null === $buttonContent) {
            throw new \DomainException(sprintf(
                '%s expects either button content as the second argument, ' .
                    'or that the element provided has a label value, ' .
                    'a glyphicon option, or a fontAwesome option; none found',
                __METHOD__
            ));
        }
        return $buttonContent;
    }

    protected function renderIconContent(\Laminas\Form\ElementInterface $element, string $buttonContent = null)
    {
        // Retrieve icon options
        $iconOptions = $element->getOption('icon');
        if (!$iconOptions) {
            return $buttonContent;
        }

        // Set default icon options if scalar provided
        if (is_scalar($iconOptions)) {
            $iconOptions = [
                'class'     => $iconOptions,
                'position' => self::POSITION_PREPEND,
            ];
        } elseif (is_array($iconOptions)) {
            if (empty($iconOptions['class'])) {
                throw new \InvalidArgumentException('"[icon][class]" option is undefined');
            }

            if (!is_scalar($iconOptions['class'])) {
                throw new \InvalidArgumentException(sprintf(
                    '"[icon][class]" option expects a scalar value, "%s" given',
                    is_object($iconOptions['class'])
                        ? get_class($iconOptions['class'])
                        : gettype($iconOptions['class'])
                ));
            }

            if (isset($iconOptions['position'])) {
                if (!is_string($iconOptions['position'])) {
                    throw new \InvalidArgumentException(sprintf(
                        '"[icon][position]" option expects a string, "%s" given',
                        is_object($iconOptions['position'])
                            ? get_class($iconOptions['position'])
                            : gettype($iconOptions['position'])
                    ));
                }
                if (!in_array($iconOptions['position'], [self::POSITION_PREPEND, self::POSITION_APPEND], true)) {
                    throw new \InvalidArgumentException(sprintf(
                        '"[icon][position]" option allows "%s" or "%s", "%s" given',
                        self::POSITION_PREPEND,
                        self::POSITION_APPEND,
                        $iconOptions['position']
                    ));
                }
            }
        } else {
            throw new \InvalidArgumentException(sprintf(
                '"icon" button option expects a scalar value or an array, "%s" given',
                is_object($iconOptions) ? get_class($iconOptions) : gettype($iconOptions)
            ));
        }

        $iconContent = $this->htmlElement('i', ['class' => $iconOptions['class']], '');

        // No button content provided, set icon as button content
        if (!$buttonContent) {
            return $iconContent;
        }

        // Define icon position
        $iconPosition = $iconOptions['position'] ?? self::POSITION_PREPEND;
        if ($iconPosition === self::POSITION_PREPEND) {
            // Append icon to button content
            return $iconContent . ' ' . $buttonContent;
        } else {
            // Prepend icon to button content
            return $buttonContent . ' ' . $iconContent;
        }
    }

    protected function renderSpinnerContent(\Laminas\Form\ElementInterface $element, string $buttonContent = null)
    {
        // Retrieve spinner options
        $spinnerOptions = $element->getOption('spinner');
        if (!$spinnerOptions) {
            return $buttonContent;
        }

        if (is_string($spinnerOptions)) {
            $spinnerOptions = ['label' => $spinnerOptions];
        }
        if ($spinnerOptions === true) {
            $spinnerOptions = [];
        }
        $spinnerOptions['tag'] = 'span';
        $spinnerOptions['size'] = 'sm';

        $spinnerOptions['attributes'] = array_merge(
            $spinnerOptions['attributes'] ?? [],
            ['aria-hidden' => 'true']
        );

        $spinnerContent = $this->getView()->plugin('spinner')->__invoke($spinnerOptions);

        // No button content provided, set spinner as button content
        if (!$buttonContent) {
            return $spinnerContent;
        }

        // Define spinner position
        $spinnerPosition = $spinnerOptions['position'] ?? self::POSITION_PREPEND;

        if ($spinnerPosition === self::POSITION_PREPEND) {
            // Append spinner to button content
            return $spinnerContent . PHP_EOL . $buttonContent;
        } else {
            // Prepend spinner to button content
            return $buttonContent . PHP_EOL . $spinnerContent;
        }
    }

    /**
     * Determine button type to use
     *
     * @param \Laminas\Form\ElementInterface $element
     * @return string
     */
    protected function getType(\Laminas\Form\ElementInterface $element): string
    {
        $tag = $element->getOption('tag');
        if (!$tag || $tag === 'button') {
            return parent::getType($element);
        }
        return '';
    }
}
