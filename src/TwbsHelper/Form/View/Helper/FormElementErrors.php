<?php

namespace TwbsHelper\Form\View\Helper;

use TwbsHelper\Form\View\ElementHelperTrait;

/**
 * FormElementErrors
 *
 * @uses \Laminas\Form\View\Helper\FormElementErrors
 */
/** @phpstan-ignore class.extendsFinalByPhpDoc */
class FormElementErrors extends \Laminas\Form\View\Helper\FormElementErrors
{
    use ElementHelperTrait;

    /**
     * @var string Templates for the open/close/separators for message tags
     */
    /** @phpstan-ignore property.parentPropertyFinalByPhpDoc */
    protected $messageCloseString = '</div>';

    /** @phpstan-ignore property.parentPropertyFinalByPhpDoc */
    protected $messageOpenFormat = '<div%s>';

    /** @phpstan-ignore property.parentPropertyFinalByPhpDoc */
    protected $messageSeparatorString = '<br />';

    /**
     * @var array Default attributes for the open format tag
     */
    /** @phpstan-ignore property.parentPropertyFinalByPhpDoc */
    protected $attributes = ['class' => 'invalid-feedback'];
}
