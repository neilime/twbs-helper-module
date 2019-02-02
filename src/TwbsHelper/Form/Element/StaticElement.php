<?php
namespace TwbsHelper\Form\Element;

use Zend\Form\Element as ZendElement;

/**
 * StaticElement
 *
 * @uses ZendElement
 */
class StaticElement extends ZendElement
{
    /**
     * Seed attributes
     *
     * @var array
     * @access protected
     */
    protected $attributes = [
        'type' => 'static'
    ];

}
