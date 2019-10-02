<?php

namespace TwbsHelper\Form\View\Helper;

class FormButton extends \Zend\Form\View\Helper\FormButton
{
    use \TwbsHelper\View\Helper\HtmlTrait;

    const ICON_PREPEND = 'prepend';
    const ICON_APPEND  = 'append';

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
     * @param array|\Zend\Form\ElementInterface|null $oElement
     * @param null|string           $sButtonContent
     * @return string|FormButton
     */
    public function __invoke($oElement = null, $sButtonContent = null)
    {
        if (!$oElement) {
            return $this;
        }

        return $this->render($oElement, $sButtonContent);
    }

    /**
     * Accept following extra options:
     * * string variant:  'danger', 'dark', 'info', 'light', 'link', 'primary', 'secondary', 'success', 'warning'
     * * string size:  'sm', 'lg'
     * * bool block
     *
     * @see FormButton::render()
     * @param array|\Zend\Form\ElementInterface $oElement
     * @param string $sButtonContent
     * @throws \InvalidArgumentException
     * @return string
     */
    public function render($oElement, $sButtonContent = null)
    {
        if (
            is_array($oElement)
            || ($oElement instanceof \Traversable
                && !($oElement instanceof \Zend\Form\ElementInterface))
        ) {
            $oFactory = new \Zend\Form\Factory();

            // Set default type if none given
            if (empty($oElement['type'])) {
                $oElement['type'] = \Zend\Form\Element\Button::class;
            }

            $oElement = $oFactory->create($oElement);
        } elseif (!($oElement instanceof \Zend\Form\ElementInterface)) {
            throw new \InvalidArgumentException(sprintf(
                'Button expects an instanceof \Zend\Form\ElementInterface or an array / Traversable, "%s" given',
                is_object($oElement) ? get_class($oElement) : gettype($oElement)
            ));
        }

        // Dropdown button
        if ($oElement->getOption('dropdown')) {
            return $this->getView()->dropdown()->render($oElement);
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
            $oElement->setAttribute('name', 0);

            if (!$oElement->getAttribute('role')) {
                $oElement->setAttribute('role', 'button');
            }
        }
        
        // Popover
        $aPopoverAttributes = $this->getPopoverAttributes($oElement);
        $bIsDisabled = $oElement->getAttribute('disabled');
        if ($aPopoverAttributes) {
            if ($bIsDisabled) {
                $this->setStylesToElement($oElement, ['pointer-events' => 'none']);
            } else {
                $oElement->setAttributes(array_merge(
                    $aPopoverAttributes,
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

        if ($aPopoverAttributes && $bIsDisabled) {
            $sMarkup = $this->htmlElement(
                'span',
                $this->setClassesToAttributes($aPopoverAttributes, ['d-inline-block']),
                $sMarkup
            );
        }

        return $sMarkup;
    }

    protected function getPopoverAttributes(\Zend\Form\ElementInterface $oElement) : array
    {
        $aPopoverAttributes = [];
        if ($aPopoverOption = $oElement->getOption('popover')) {
            $aPopoverAttributes['data-toggle'] = 'popover';

            if (is_string($aPopoverOption)) {
                $aPopoverOption = ['content' => $aPopoverOption];
            } elseif (!is_array($aPopoverOption)) {
                throw new \InvalidArgumentException(sprintf(
                    'Option "popover" expects a string or an array, "%s" given',
                    is_object($aPopoverOption) ? get_class($aPopoverOption) : gettype($aPopoverOption)
                ));
            }
            $aPopoverAttributes['data-content'] = $aPopoverOption['content'];

            if (isset($aPopoverOption['placement'])) {
                $aPopoverAttributes['data-placement'] = $aPopoverOption['placement'];
                $aPopoverAttributes['data-container'] = 'body';
            }

            if (isset($aPopoverOption['trigger'])) {
                $aPopoverAttributes['data-trigger'] = $aPopoverOption['trigger'];
            }
        }
        return $aPopoverAttributes;
    }
    protected function defineButtonClasses(\Zend\Form\ElementInterface $oElement)
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

    protected function renderButtonContent(\Zend\Form\ElementInterface $oElement, string $sButtonContent = null)
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
                && (!$oElement instanceof \Zend\Form\LabelAwareInterface
                    || !$oElement->getLabelOption('disable_html_escape'))
            ) {
                $sButtonContent = $this->getEscapeHtmlHelper()($sButtonContent);
            }
        }

        $sButtonContent = $this->renderIconContent($oElement, $sButtonContent);
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

    protected function renderIconContent(\Zend\Form\ElementInterface $oElement, string $sButtonContent = null)
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
                'position' => self::ICON_PREPEND,
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
                if (!in_array($aIconOptions['position'], [self::ICON_PREPEND, self::ICON_APPEND, true])) {
                    throw new \InvalidArgumentException(sprintf(
                        '"[icon][position]" option allows "%s" or "%s", "%s" given',
                        self::ICON_PREPEND,
                        self::ICON_APPEND,
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

        // Set icon position
        $sIconPosition = $aIconOptions['position'] ?? 'prepend';
        $sIconContent = '<i class="' . $aIconOptions['class'] . '"></i>';

        return $sButtonContent
            ? $sIconPosition === self::ICON_PREPEND
            // Append icon to button content
            ? $sIconContent . ' ' . $sButtonContent
            // Prepend icon to button content
            : $sButtonContent . ' ' . $sIconContent
            // No button content provided, set icon as button content
            : $sIconContent;
    }

    /**
     * Determine button type to use
     *
     * @param \Zend\Form\ElementInterface $element
     * @return string
     */
    protected function getType(\Zend\Form\ElementInterface $oElement)
    {
        $sTag = $oElement->getOption('tag');
        if (!$sTag || $sTag === 'button') {
            return parent::getType($oElement);
        }
        return false;
    }
}
