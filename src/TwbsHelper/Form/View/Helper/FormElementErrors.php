<?php
namespace TwbsHelper\Form\View\Helper;

use Laminas\Form\View\Helper\FormElementErrors as LaminasFormElementErrorsViewHelper;

/**
 * FormElementErrors
 *
 * @uses LaminasFormElementErrorsViewHelper
 */
class FormElementErrors extends LaminasFormElementErrorsViewHelper
{

    /**
     * @+
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
