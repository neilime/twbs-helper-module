<?php

namespace TwbsHelper\Form\View\Helper;

use Laminas\Form\ElementInterface;
use Laminas\Form\Element\Button;
use Laminas\Form\Factory;
use Laminas\Form\LabelAwareInterface;
use TwbsHelper\Form\View\ElementHelperTrait;
use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Variant;
use TwbsHelper\View\HtmlAttributesSet;
use DomainException;
use InvalidArgumentException;

class FormButton extends \Laminas\Form\View\Helper\FormButton
{
    use ElementHelperTrait;

    public const POSITION_PREPEND = 'prepend';
    public const POSITION_APPEND  = 'append';

    /**
     * Invoke helper as functor
     *
     * Proxies to {@link render()}.
     *
     * @param ElementInterface|null $element
     * @param null|string           $buttonContent
     * @return string|FormButton
     */
    public function __invoke(?ElementInterface $element = null, $buttonContent = null)
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
        $element = $this->getElementFromSpec($elementSpec);

        return $this->render($element, $buttonContent);
    }

    protected function getElementFromSpec(array $elementSpec): ElementInterface
    {
        $factory = new Factory();

        // Set default type if none given
        if (empty($elementSpec['type'])) {
            $elementSpec['type'] = Button::class;
        }

        $element = $factory->create($elementSpec);

        if (!$element instanceof Button) {
            throw new InvalidArgumentException(sprintf(
                'Invalid button type specified, %s does not inherit from %s.',
                $element::class,
                Button::class
            ));
        }
        return $element;
    }

    /**
     * Accept following extra options:
     * * string variant:  'danger', 'dark', 'info', 'light', 'link', 'primary', 'secondary', 'success', 'warning'
     * * string size:  'sm', 'lg'
     * * bool block
     *
     * @see \Laminas\Form\View\Helper\FormButton::render()
     */
    public function render(ElementInterface $element, ?string $buttonContent = null): string
    {
        // Dropdown button
        if ($element->getOption('dropdown')) {
            return $this->getView()->plugin('dropdown')->render($element);
        }

        // Checkbox or radio button
        if ($element->getAttribute('type') === 'checkbox' || $element->getAttribute('type') === 'radio') {
            $element->setOption('button', $element->getOption('variant') ?? true);
            $element->setOption('form_check_group', false);
            $element->setAttribute('autocomplete', 'off');
            return $this->getView()->plugin('form_row_element')->__invoke($element);
        }

        $this->prepareElementAttributes($element);

        $validTagAttributes = $this->validTagAttributes;
        $this->prepareElementValidTagAttributes($element);

        $buttonContent = $this->renderButtonContent($element, $buttonContent);

        $buttonContent = $this->renderButton($element, $buttonContent);

        $buttonContent = $this->renderPopoverAndTooltip($element, $buttonContent);

        $this->validTagAttributes = $validTagAttributes;

        return $buttonContent;
    }

    protected function prepareElementAttributes(ElementInterface $element)
    {
        if (!empty($element->getOption('disable_twbs'))) {
            return;
        }

        $this->prepareElementAttributesForToggle($element);
        $this->prepareElementAttributesForPopover($element);
        $this->prepareElementAttributesForTooltip($element);
        $this->prepareElementAttributesForClose($element);
        $this->prepareElementAttributesForTag($element);
        $this->prepareElementClassAttributes($element);
    }

    protected function prepareElementClassAttributes(ElementInterface $element)
    {
        if ($element->getOption('close')) {
            return;
        }

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($element->getAttributes())
            ->merge(['class' => ['btn']]);

        // Size option
        if ($size = $element->getOption('size')) {
            $attributes['class']->merge(
                $this->getView()->plugin('htmlClass')->plugin('size')->getClassesFromOption($size, 'btn')
            );
        }

        // Positioned badge
        $badge = $element->getOption('badge');
        if (!empty($badge[1]['positioned'])) {
            $attributes['class']->merge(['position-relative']);
        }

        // Variant option
        /** @var Variant $variantClassHelper **/
        $variantClassHelper = $this->getView()->plugin('htmlClass')->plugin('variant');
        if ($variant = $element->getOption('variant')) {
            $attributes['class']->merge($variantClassHelper->getClassesFromOption(
                $variant,
                'btn',
                'outline'
            ));
        }
        if (!$variantClassHelper->classesIncludeVariant($attributes['class'], 'btn', 'outline')) {
            $attributes['class']->merge($variantClassHelper->getClassesFromOption('secondary', 'btn'));
        }

        $classes = $attributes['class']->getArrayCopy();
        $this->setClassesToElement($element, $classes);
    }

    protected function prepareElementAttributesForClose(ElementInterface $element)
    {
        $close = $element->getOption('close');
        if (!$close) {
            return;
        }

        $this->setClassesToElement($element, ['btn-close']);

        if (
            !$element->getOption('label') &&
            !$element->hasAttribute('aria-label')
        ) {
            if ($close === true) {
                $close = 'Close';
            }
            if ($this->hasTranslator()) {
                $close = $this->getTranslator()->translate($close);
            }
            $element->setAttribute('aria-label', $close);
        }
    }

    protected function prepareElementAttributesForToggle(ElementInterface $element)
    {
        $toggle = $element->getOption('toggle');
        if ($toggle === null) {
            return;
        }

        $attributes = [
            'data-bs-toggle' => 'button',
            'autocomplete' => 'off',
        ];

        if ($toggle) {
            $this->setClassesToElement($element, ['active']);
            $attributes['aria-pressed'] = 'true';
        }

        $element->setAttributes(
            $this->getView()->plugin('htmlattributes')->__invoke($element->getAttributes())->merge($attributes)
        );
    }

    protected function prepareElementAttributesForPopover(ElementInterface $element)
    {
        $isDisabled = $element->getAttribute('disabled');
        if ($isDisabled) {
            return;
        }

        $popoverAttributes = $this->getElementPopoverAttributes($element);
        if (!$popoverAttributes) {
            return;
        }

        $element->setAttributes(
            $this->getView()->plugin('htmlattributes')->__invoke($element->getAttributes())->merge($popoverAttributes)
        );
    }

    protected function getElementPopoverAttributes(
        ElementInterface $element
    ): ?HtmlAttributesSet {
        $popoverOption = $element->getOption('popover');
        if (!$popoverOption) {
            return null;
        }

        if (is_string($popoverOption)) {
            $popoverOption = ['content' => $popoverOption];
        } elseif (!is_iterable($popoverOption)) {
            throw new InvalidArgumentException(sprintf(
                'Option "popover" expects a string or an iterable, "%s" given',
                get_debug_type($popoverOption)
            ));
        }

        $attributes = $this->getView()->plugin('htmlattributes')->__invoke([
            'data-bs-toggle' => 'popover',
            'data-bs-content' => $popoverOption['content'],
        ]);

        $title = $element->getAttribute('title');
        $attributes['data-bs-original-title'] = $title ?? '';
        if ($title) {
            $element->setAttribute('title', '');
        }

        if (isset($popoverOption['placement'])) {
            $attributes['data-bs-placement'] = $popoverOption['placement'];
            $attributes['data-bs-container'] = 'body';
        }

        if (isset($popoverOption['trigger'])) {
            $attributes['data-bs-trigger'] = $popoverOption['trigger'];
        }

        return $attributes;
    }

    protected function prepareElementAttributesForTooltip(ElementInterface $element)
    {
        $isDisabled = $element->getAttribute('disabled');
        if ($isDisabled) {
            return;
        }

        $tooltipAttributes = $this->getElementTooltipAttributes($element);
        if (!$tooltipAttributes) {
            return;
        }

        $element->setAttributes(
            $this->getView()->plugin('htmlattributes')
                ->__invoke($element->getAttributes())
                ->merge($tooltipAttributes)
        );
    }

    protected function getElementTooltipAttributes(
        ElementInterface $element
    ): ?HtmlAttributesSet {
        $this->getView()->plugin('htmlattributes');
        // Retrieve tooltip options
        $tooltipOptions = $element->getOption('tooltip');
        if (!$tooltipOptions) {
            return null;
        }

        if (is_string($tooltipOptions)) {
            $tooltipOptions = ['content' => $tooltipOptions];
        }

        $attributes = $this->getView()->plugin('htmlattributes')->__invoke([
            'title' => '',
            'data-bs-original-title' => $tooltipOptions['content'],
            'data-bs-toggle' => 'tooltip',
        ]);

        if ($this->getView()->plugin('htmlElement')->isHTML($tooltipOptions['content'])) {
            $attributes['data-bs-html'] = 'true';
        }

        if (isset($tooltipOptions['placement'])) {
            $attributes['data-bs-placement'] = $tooltipOptions['placement'];
        }

        return $attributes;
    }

    protected function prepareElementAttributesForTag(ElementInterface $element)
    {
        switch ($element->getOption('tag')) {
            case 'a':
                $disabled = $element->getAttribute('disabled');
                if ($disabled) {
                    $this->setClassesToElement($element, ['disabled']);

                    if (!$element->hasAttribute('aria-disabled')) {
                        $element->setAttribute('aria-disabled', 'true');
                    }

                    if ($element->getAttribute('href') && !$element->hasAttribute('tabindex')) {
                        $element->setAttribute('tabindex', '-1');
                    }
                }

                $element->setAttribute('type', null);

                if (!$element->getAttribute('role')) {
                    $element->setAttribute('role', 'button');
                }
                break;
            default:
                // Nothing to prepare for default tag
        }
    }

    protected function prepareElementValidTagAttributes(ElementInterface $element)
    {
        switch ($element->getOption('tag')) {
            case 'a':
                $this->validTagAttributes['href'] = true;

                unset($this->validTagAttributes['type']);
                unset($this->validTagAttributes['value']);
                unset($this->validTagAttributes['name']);
                unset($this->validTagAttributes['disabled']);
                break;
            default:
                $this->validTagAttributes['autocomplete'] = true;
        }
    }

    protected function renderButtonContent(ElementInterface $element, ?string $buttonContent = null)
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
                !$this->getView()->plugin('htmlElement')->isHTML($buttonContent)
                && (!$element instanceof LabelAwareInterface
                    || !$element->getLabelOption('disable_html_escape'))
            ) {
                $buttonContent = $this->getEscapeHtmlHelper()($buttonContent);
            }

            if ($element->getOption('show_label') === false) {
                $buttonContent = $this->getView()->plugin('htmlElement')->__invoke(
                    'span',
                    ['class' => 'visually-hidden'],
                    $buttonContent
                );
            }
        }

        // Render icon
        $buttonContent = $this->renderIconContent($element, $buttonContent);

        // Render spinner
        $buttonContent = $this->renderSpinnerContent($element, $buttonContent);

        // Render badge
        $buttonContent = $this->renderBadgeContent($element, $buttonContent);

        if (null === $buttonContent) {
            throw new DomainException(sprintf(
                '%s expects either button content as the second argument, ' .
                    'or that the element provided has a label value, ' .
                    'a glyphicon option, or a fontAwesome option; none found',
                __METHOD__
            ));
        }
        return $buttonContent;
    }

    protected function renderIconContent(ElementInterface $element, ?string $buttonContent = null)
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
                throw new InvalidArgumentException('"[icon][class]" option is undefined');
            }

            if (!is_scalar($iconOptions['class'])) {
                throw new InvalidArgumentException(sprintf(
                    '"[icon][class]" option expects a scalar value, "%s" given',
                    get_debug_type($iconOptions['class'])
                ));
            }

            if (isset($iconOptions['position'])) {
                if (!is_string($iconOptions['position'])) {
                    throw new InvalidArgumentException(sprintf(
                        '"[icon][position]" option expects a string, "%s" given',
                        get_debug_type($iconOptions['position'])
                    ));
                }
                if (!in_array($iconOptions['position'], [self::POSITION_PREPEND, self::POSITION_APPEND], true)) {
                    throw new InvalidArgumentException(sprintf(
                        '"[icon][position]" option allows "%s" or "%s", "%s" given',
                        self::POSITION_PREPEND,
                        self::POSITION_APPEND,
                        $iconOptions['position']
                    ));
                }
            }
        } else {
            throw new InvalidArgumentException(sprintf(
                '"icon" button option expects a scalar value or an array, "%s" given',
                get_debug_type($iconOptions)
            ));
        }

        $iconContent = $this->getView()->plugin('htmlElement')->__invoke('i', ['class' => $iconOptions['class']], '');

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

    protected function renderSpinnerContent(ElementInterface $element, ?string $buttonContent = null)
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

        $spinnerOptions['attributes'] = $this->getView()->plugin('htmlattributes')
            ->__invoke($spinnerOptions['attributes'] ?? [])
            ->merge(['aria-hidden' => 'true']);

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

    protected function renderBadgeContent(ElementInterface $element, ?string $buttonContent = null)
    {
        $badgeOptions = $element->getOption('badge');
        if (!$badgeOptions) {
            return $buttonContent;
        }

        if (is_string($badgeOptions)) {
            $arguments = [$badgeOptions];
        } else {
            $arguments = $badgeOptions;
        }

        $badgeContent = call_user_func_array([$this->getView()->plugin('badge'), '__invoke'], $arguments);

        // No button content provided, set badge as button content
        if (!$buttonContent) {
            return $badgeContent;
        }
        return $buttonContent . PHP_EOL . $badgeContent;
    }

    protected function renderButton(ElementInterface $element, ?string $buttonContent = null): string
    {
        $htmlElementHelper = $this->getView()->plugin('htmlElement');
        $tag = $element->getOption('tag');
        return match ($tag) {
            'a' => $htmlElementHelper->__invoke(
                $tag,
                $this->prepareAttributes($element->getAttributes()),
                $buttonContent
            ),
            'input' => $htmlElementHelper->__invoke(
                $tag,
                $this->getView()->plugin('htmlattributes')
                    ->__invoke($this->prepareAttributes($element->getAttributes()))
                    ->merge(['value' => $buttonContent])
            ),
            default => $this->openTag($element)
                . $htmlElementHelper->addProperIndentation($buttonContent)
                . $this->closeTag(),
        };
    }


    protected function renderPopoverAndTooltip(
        ElementInterface $element,
        ?string $buttonContent = null
    ): string {

        $isDisabled = $element->getAttribute('disabled');
        if (!$isDisabled) {
            return $buttonContent;
        }

        $attributes = $this->getView()->plugin('htmlattributes')->__invoke([]);

        $popoverAttributes = $this->getElementPopoverAttributes($element);
        if ($popoverAttributes) {
            $attributes = $popoverAttributes->merge($attributes);
        }

        $tooltipAttributes = $this->getElementTooltipAttributes($element);
        if ($tooltipAttributes) {
            $attributes = $tooltipAttributes->merge($attributes);
        }

        if (!$attributes->count()) {
            return $buttonContent;
        }

        $attributes->merge([
            'class' => ['d-inline-block'],
            'tabindex' => '0',
            'title' => isset($attributes['data-bs-original-title']) ? '' : null,
        ]);

        $buttonContent = $this->getView()->plugin('htmlElement')->__invoke(
            'span',
            $attributes,
            $buttonContent
        );

        return $buttonContent;
    }

    /**
     * Determine button type to use
     *
     * @param ElementInterface $element
     * @return string
     */
    protected function getType(ElementInterface $element): string
    {
        $tag = $element->getOption('tag');
        if (!$tag || $tag === 'button' ||  $tag === 'input') {
            return parent::getType($element);
        }

        return '';
    }
}
