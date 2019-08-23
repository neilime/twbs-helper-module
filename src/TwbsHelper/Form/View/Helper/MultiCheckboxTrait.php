<?php

namespace TwbsHelper\Form\View\Helper;

trait MultiCheckboxTrait
{
    use \TwbsHelper\View\Helper\ClassAttributeTrait;
    use \TwbsHelper\View\Helper\HtmlTrait;

    /**
     * Render a form <input type="radio"> element from the provided $oElement
     *
     * @param \Zend\Form\ElementInterface $oElement
     * @return string
     */
    public function render(\Zend\Form\ElementInterface $oElement): string
    {

        $this->prepareElement($oElement);
        $bIsCustom = $oElement->getOption('custom');

        $sOriginalSeparator = $this->getSeparator();
        $sTmpSeparator = '[SEPARATOR]';
        $this->setSeparator($sTmpSeparator);

        $aOriginalLabelAttributes = $this->labelAttributes;
        $this->labelAttributes = ['class' => $bIsCustom ? 'custom-control-label' : 'form-check-label'];

        $sTmpContent = parent::render($oElement);

        // Restore default params
        $this->setSeparator($sOriginalSeparator);
        $this->labelAttributes = $aOriginalLabelAttributes;

        $sContent = '';

        foreach (explode($sTmpSeparator, $sTmpContent) as $sOptionContent) {
            // Retrieve input content
            if (preg_match('/(<label[^>]*>.*)(<input[^>]+>)(.*<\/label[^>]*>)/', $sOptionContent, $aMatches)) {
                $sLabelContent = $aMatches[1] . $aMatches[3];
                if (preg_match('/<label[^>]*>\s*<\/label[^>]*>/', $sLabelContent)) {
                    $sLabelContent = '';
                }

                $sContent .= ($sContent ? PHP_EOL : '') . $this->renderElementOption(
                    $oElement,
                    $aMatches[2] . ($sLabelContent ? PHP_EOL . $sLabelContent : '')
                );
            }
        }
        return $sContent;
    }

    protected function prepareElement(\Zend\Form\ElementInterface $oElement)
    {
        if ($oElement->getOption('disable_twbs')) {
            return;
        }

        $bIsCustom = $oElement->getOption('custom');

        $this->setClassesToElement(
            $oElement,
            [$bIsCustom ? 'custom-control-input' : 'form-check-input'],
            ['form-control']
        );

        // Handle label attributes for options
        $aValueOptions = $oElement->getValueOptions();
        foreach ($aValueOptions as &$aOption) {
            if (!is_array($aOption)) {
                continue;
            }

            if (empty($aOption['label'])) {
                $aOption['attributes'] = $this->setClassesToAttributes(
                    $aOption['attributes'] ?? [],
                    ['position-static', 'form-check-input']
                );
            }

            if (isset($aOption['attributes']['id'])) {
                $aOption['label_attributes'] = \Zend\Stdlib\ArrayUtils::merge(
                    $aOption['label_attributes'] ?? [],
                    [
                        'for' => $aOption['attributes']['id'],
                    ]
                );
            }
        }
        $oElement->setValueOptions($aValueOptions);
    }

    protected function renderElementOption(\Zend\Form\ElementInterface $oElement, string $sOptionContent): string
    {

        if ($oElement->getOption('disable_twbs')) {
            return $sOptionContent;
        }

        $bIsCustom = $oElement->getOption('custom');
        $aGroupClasses = $bIsCustom ? ['custom-control', 'custom-radio'] : ['form-check'];

        if ($oElement->getOption('layout') === \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE) {
            $aGroupClasses[] = $bIsCustom ? 'custom-control-inline' : 'form-check-inline';
        }
        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes([], $aGroupClasses),
            $sOptionContent
        );
    }
}
