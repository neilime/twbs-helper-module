<?php

namespace TwbsHelper\Form\View\Helper;

use TwbsHelper\Form\View\ElementHelperTrait;

/**
 * FormElementErrors
 *
 * @uses \Laminas\Form\View\Helper\FormElementErrors
 */
class FormElementErrors extends \Laminas\Form\View\Helper\FormElementErrors
{
    use ElementHelperTrait;

    /**
     * @var string Templates for the open/close/separators for message tags
     */
    protected $messageCloseString = '</div>';

    protected $messageOpenFormat = '<div%s>';

    protected $messageSeparatorString = '<br />';

    /**
     * @var array Default attributes for the open format tag
     */
    protected $attributes = ['class' => 'invalid-feedback'];
}
