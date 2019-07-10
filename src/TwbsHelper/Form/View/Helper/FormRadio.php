<?php

namespace TwbsHelper\Form\View\Helper;

class FormRadio extends \Zend\Form\View\Helper\FormRadio
{
    use \TwbsHelper\View\Helper\ClassAttributeTrait;
    use \TwbsHelper\View\Helper\HtmlTrait;

    /**
     * The attributes applied to option label
     *
     * @var array
     */
    protected $labelAttributes = ['class' => 'form-check-label'];

    /**
     * Render a form <input type="radio"> element from the provided $oElement
     *
     * @param \Zend\Form\ElementInterface $oElement
     * @return string
     */
    public function render(\Zend\Form\ElementInterface $oElement): string
    {
        $oElement->setAttributes($this->setClassesToAttributes(
            $oElement->getAttributes() ?? [],
            ['form-check-input'],
            ['form-control']
        ));

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

        $sSeparator = $this->getSeparator();
        $sTmpSeparator = '[SEPARATOR]';
        $this->setSeparator($sTmpSeparator);

        $sTmpContent = parent::render($oElement);

        $this->setSeparator($sSeparator);

        $sContent = '';

        $aGroupClasses = ['form-check'];

        if ($oElement->getOption('twbs-layout') === \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE) {
            $aGroupClasses[] = 'form-check-inline';
        }

        foreach (explode($sTmpSeparator, $sTmpContent) as $sOptionContent) {
            // Retrieve input content
            if (preg_match('/(<label[^>]*>.*)(<input[^>]+>)(.*<\/label[^>]*>)/', $sOptionContent, $aMatches)) {
                $sLabelContent = $aMatches[1] . $aMatches[3];
                if (preg_match('/<label[^>]*>\s*<\/label[^>]*>/', $sLabelContent)) {
                    $sLabelContent = '';
                }

                $sContent .= ($sContent ? PHP_EOL : '') . $this->htmlElement(
                    'div',
                    $this->setClassesToAttributes([], $aGroupClasses),
                    $aMatches[2] . ($sLabelContent ? PHP_EOL . $sLabelContent : '')
                );
            }
        }
        return $sContent;
    }
}
