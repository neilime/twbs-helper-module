<?php
namespace TwbsHelper\Form\View\Helper;

use Zend\Form\View\Helper\FormElementErrors as ZendFormElementErrorsViewHelper;

/**
 * FormElementErrors
 *
 * @uses ZendFormElementErrorsViewHelper
 */
class FormElementErrors extends ZendFormElementErrorsViewHelper
{
    /**@+
     * @var string Templates for the open/close/separators for message tags
     */
    protected $messageCloseString     = '</div>';
    protected $messageOpenFormat      = '<div%s>';
    protected $messageSeparatorString = '<br />';

    /**
     * @var array Default attributes for the open format tag
     */
    protected $attributes = [
        'class' => 'invalid-feedback'
    ];
}
