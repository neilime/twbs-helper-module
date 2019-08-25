<?php

namespace TwbsHelper\Form\View\Helper;

class FormAddOn extends \Zend\Form\View\Helper\AbstractHelper
{
    use \TwbsHelper\View\Helper\HtmlTrait;
    use \TwbsHelper\View\Helper\ClassAttributeTrait;

    const POSITION_APPEND = 'append';
    const POSITION_PREPEND = 'prepend';

    /**
     * @param \Zend\Form\ElementInterface $oElement
     * @return \TwbsHelper\Form\View\Helper\FormAddOn|string
     */
    public function __invoke(\Zend\Form\ElementInterface $oElement = null, string $sContent = '')
    {
        return $oElement ? $this->render($oElement, $sContent) : $this;
    }

    public function render(\Zend\Form\ElementInterface $oElement = null, string $sContent = ''): string
    {
        // Addon
        $bHasAddOn = false;
        $sAddOnId = $oElement->getAttribute('aria-describedby');

        foreach ([self::POSITION_APPEND, self::POSITION_PREPEND] as $sAddOnPosition) {
            if ($aAddOnOptions = $oElement->getOption('add_on_' . $sAddOnPosition)) {
                $bHasAddOn = true;

                $aAttributes = ['class' => 'input-group-' . $sAddOnPosition];
                if ($sAddOnId && \Zend\Stdlib\ArrayUtils::isList($aAddOnOptions)) {
                    $aAttributes['id'] = $sAddOnId;
                }

                $sAddOnContent = $this->htmlElement(
                    'div',
                    $aAttributes,
                    $this->renderAddOn($aAddOnOptions, $sAddOnId)
                );

                if ($sAddOnPosition === self::POSITION_APPEND) {
                    $sContent .= PHP_EOL . $sAddOnContent;
                } else {
                    $sContent = $sAddOnContent . PHP_EOL . $sContent;
                }
            }
        }

        if (!$bHasAddOn) {
            return $sContent;
        }

        $aInputGroupClasses = ['input-group'];

        // Input group size
        if ($sSize = $oElement->getOption('size')) {
            $aInputGroupClasses[] = $this->getSizeClass($sSize, 'input-group');
        }

        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes(
                [
                    'class' => $oElement->getOption('input_group_class'),
                ],
                $aInputGroupClasses
            ),
            $sContent
        );
    }

    /**
     * Render add-on markup
     *
     * @param \Zend\Form\ElementInterface|array|string $aAddOnOptions
     * @param  string $sPosition
     * @throws \InvalidArgumentException
     * @throws \LogicException
     * @return string
     */
    protected function renderAddOn($aAddOnOptions, string $sAddOnId = null): string
    {
        if (empty($aAddOnOptions)) {
            throw new \InvalidArgumentException('Addon options are empty');
        }

        if ($aAddOnOptions instanceof \Zend\Form\ElementInterface) {
            $aAddOnOptions = ['element' => $aAddOnOptions];
        } elseif (is_scalar($aAddOnOptions)) {
            $aAddOnOptions = ['text' => $aAddOnOptions];
        } elseif (is_array($aAddOnOptions)) {
            if (\Zend\Stdlib\ArrayUtils::isList($aAddOnOptions)) {
                $sContent = '';
                foreach ($aAddOnOptions as $aAddOnOptionsTmp) {
                    $sContent .= ($sContent ? PHP_EOL : '') . $this->renderAddOn(
                        $aAddOnOptionsTmp
                    );
                }
                return $sContent;
            }
        } else {
            throw new \InvalidArgumentException(sprintf(
                'Addon options expects an array or a scalar value, "%s" given',
                is_object($aAddOnOptions) ? get_class($aAddOnOptions) : gettype($aAddOnOptions)
            ));
        }

        if ($sAddOnId && !isset($aAddOnOptions['attributes']['id'])) {
            $aAddOnOptions['attributes']['id'] = $sAddOnId;
        }

        return $this->renderContent($aAddOnOptions);
    }

    protected function renderContent(array $aAddOnOptions): string
    {
        switch (true) {
            case isset($aAddOnOptions['text']):
                if (!is_string($aAddOnOptions['text'])) {
                    throw new \InvalidArgumentException(sprintf(
                        '"text" option expects a string, "%s" given',
                        is_object($aAddOnOptions['text'])
                            ? get_class($aAddOnOptions['text'])
                            : gettype($aAddOnOptions['text'])
                    ));
                }
                return $this->renderText(
                    $aAddOnOptions['text'],
                    $aAddOnOptions['attributes'] ?? []
                );

            case isset($aAddOnOptions['element']):
                if (
                    is_array($aAddOnOptions['element'])
                    || ($aAddOnOptions['element'] instanceof \Traversable
                        && !($aAddOnOptions['element'] instanceof \Zend\Form\ElementInterface))
                ) {
                    $oFactory  = new \Zend\Form\Factory();
                    $aAddOnOptions['element'] = $oFactory->create($aAddOnOptions['element']);
                } elseif (!($aAddOnOptions['element'] instanceof \Zend\Form\ElementInterface)) {
                    throw new \LogicException(sprintf(
                        '"element" option expects an instanceof \Zend\Form\ElementInterface, "%s" given',
                        is_object($aAddOnOptions['element'])
                            ? get_class($aAddOnOptions['element'])
                            : gettype($aAddOnOptions['element'])
                    ));
                }
                return $this->renderElement(
                    $aAddOnOptions['element'],
                    $aAddOnOptions['attributes'] ?? []
                );

            default:
                throw new \InvalidArgumentException('Addon options expects a text or an element to render, none given');
        }
    }

    protected function renderText(string $sAddonText, array $aAttributes = []): string
    {
        $oTranslator = $this->getTranslator();
        if ($oTranslator) {
            $sAddonText =  $oTranslator->translate(
                $sAddonText,
                $this->getTranslatorTextDomain()
            );
        }
        return $this->renderAddOnElement($sAddonText, $aAttributes);
    }

    protected function renderElement(\Zend\Form\ElementInterface $oElement, array $aAttributes = []): string
    {
        // Set options to improve rendering
        $oElement->setOption('disable_twbs', true);
        if ($aDropdownOptions = $oElement->getOption('dropdown')) {
            if (\Zend\Stdlib\ArrayUtils::isList($aDropdownOptions)) {
                $oElement->setOption('dropdown', [
                    'items' => $aDropdownOptions,
                    'disable_container'      => true,
                ]);
            } elseif (!isset($aDropdownOptions['disable_container'])) {
                $aDropdownOptions['disable_container'] = true;
                $oElement->setOption('dropdown', $aDropdownOptions);
            }
        }

        $oElement->setAttributes(\Zend\Stdlib\ArrayUtils::merge(
            $aAttributes,
            $oElement->getAttributes()
        ));
        $sMarkup = $this->getView()->plugin('formElement')->render($oElement);
        if (
            $oElement instanceof \Zend\Form\Element\Checkbox
            || $oElement instanceof \Zend\Form\Element\Radio
        ) {
            return $this->renderAddOnElement($sMarkup, $aAttributes);
        }
        return $sMarkup;
    }

    protected function renderAddOnElement(string $sAddonText, array $aAttributes = []): string
    {
        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes($aAttributes, ['input-group-text']),
            $sAddonText
        );
    }
}
