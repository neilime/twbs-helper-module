<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for stacking toasts
 */
class ToastStack extends \TwbsHelper\View\Helper\AbstractGroupWithHelper
{
    protected static $allowedOptions = ['placement'];

    protected static $groupClass = 'toast-container';

    protected static $groupTag = 'div';

    protected static $helperName = 'toast';

    protected function prepareAttributes(iterable $optionsAndAttributes): \TwbsHelper\View\HtmlAttributesSet
    {
        $attributes = parent::prepareAttributes($optionsAndAttributes);

        if (!empty($optionsAndAttributes['placement'])) {
            $helper = $this->getItemViewHelper();
            if (!$helper instanceof \TwbsHelper\View\Helper\Toast) {
                throw new \LogicException(
                    'Helper "' . static::$helperName . '" must be an instance of "\TwbsHelper\View\Helper\Toast"'
                );
            }

            $classes = $helper->__invoke()->getContainerPlacementClasses(
                $optionsAndAttributes['placement']
            );
            $classes[] = 'position-absolute';

            $attributes
                ->merge(['class' => $classes])
                ->offsetGet('class')->remove('position-fixed');
        }

        return $attributes;
    }
}
