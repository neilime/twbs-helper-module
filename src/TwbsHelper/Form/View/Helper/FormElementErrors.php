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
    protected $attributes = [
        'class' => 'form-text'
    ];
}

