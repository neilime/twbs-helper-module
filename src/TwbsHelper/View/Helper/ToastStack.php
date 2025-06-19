<?php

namespace TwbsHelper\View\Helper;

use TwbsHelper\View\HtmlAttributesSet;
use LogicException;

/**
 * Helper for stacking toasts
 */
class ToastStack extends AbstractGroupWithHelper
{
    /**
     * @var non-empty-string[]
     */
    protected static $allowedOptions = ['placement'];

    protected static $groupClass = 'toast-container';

    protected static $groupTag = 'div';

    protected static $helperName = 'toast';

    protected function prepareAttributes(iterable $optionsAndAttributes): HtmlAttributesSet
    {
        $attributes = parent::prepareAttributes($optionsAndAttributes);

        if (!empty($optionsAndAttributes['placement'])) {
            $helper = $this->getItemViewHelper();
            if (!$helper instanceof Toast) {
                throw new LogicException(
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
