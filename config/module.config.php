<?php

return [
    'twbshelper' => [
        'ignoredViewHelpers' => [
            'button',
            'checkbox',
            'file',
            'hidden',
            'multi_checkbox',
            'radio',
            'reset',
            'submit',
            'static',
            'add_on',
        ],
        'validTagAttributes' => [],
        'validTagAttributePrefixes' => [],
        'type_map'  => [],
        'class_map' => [],
    ],

    'service_manager' => [
        'factories' => [
            'TwbsHelper\Options\ModuleOptions' => 'TwbsHelper\Options\Factory\ModuleOptionsFactory',
        ],
    ],

    'view_helpers' => [
        'invokables' => [
            // Misc view helpers
            'abbreviation'        => 'TwbsHelper\View\Helper\Abbreviation',
            'alert'               => 'TwbsHelper\View\Helper\Alert',
            'badge'               => 'TwbsHelper\View\Helper\Badge',
            'blockquote'          => 'TwbsHelper\View\Helper\Blockquote',
            'buttonGroup'         => 'TwbsHelper\View\Helper\ButtonGroup',
            'buttonToolbar'       => 'TwbsHelper\View\Helper\ButtonToolbar',
            'card'                => 'TwbsHelper\View\Helper\Card',
            'cardColumns'         => 'TwbsHelper\View\Helper\CardColumns',
            'cardDeck'            => 'TwbsHelper\View\Helper\CardDeck',
            'cardGroup'           => 'TwbsHelper\View\Helper\CardGroup',
            'carousel'            => 'TwbsHelper\View\Helper\Carousel',
            'dropdown'            => 'TwbsHelper\View\Helper\Dropdown',
            'figure'              => 'TwbsHelper\View\Helper\Figure',
            'htmlList'            => 'TwbsHelper\View\Helper\HtmlList',
            'image'               => 'TwbsHelper\View\Helper\Image',
            'listGroup'           => 'TwbsHelper\View\Helper\ListGroup',
            'table'               => 'TwbsHelper\View\Helper\Table',
            'jumbotron'           => 'TwbsHelper\View\Helper\Jumbotron',
            'media'               => 'TwbsHelper\View\Helper\Media',
            'mediaList'           => 'TwbsHelper\View\Helper\MediaList',

            // Form view helpers
            'form'                => 'TwbsHelper\Form\View\Helper\Form',
            'formAddOn'           => 'TwbsHelper\Form\View\Helper\FormAddOn',
            'formButton'          => 'TwbsHelper\Form\View\Helper\FormButton',
            'formSubmit'          => 'TwbsHelper\Form\View\Helper\FormButton',
            'formCheckbox'        => 'TwbsHelper\Form\View\Helper\FormCheckbox',
            'formCollection'      => 'TwbsHelper\Form\View\Helper\FormCollection',
            'formElementErrors'   => 'TwbsHelper\Form\View\Helper\FormElementErrors',
            'formMultiCheckbox'   => 'TwbsHelper\Form\View\Helper\FormMultiCheckbox',
            'formRadio'           => 'TwbsHelper\Form\View\Helper\FormRadio',
            'formRange'           => 'TwbsHelper\Form\View\Helper\FormRange',
            'formRow'             => 'TwbsHelper\Form\View\Helper\FormRow',
            'formSelect'          => 'TwbsHelper\Form\View\Helper\FormSelect',
            'formStatic'          => 'TwbsHelper\Form\View\Helper\FormStatic',
            'formErrors'          => 'TwbsHelper\Form\View\Helper\FormErrors',
            'formLabel'           => 'TwbsHelper\Form\View\Helper\FormLabel',

            // ZF3
            'form_add_on'         => 'TwbsHelper\Form\View\Helper\FormAddOn',
            'form_button'         => 'TwbsHelper\Form\View\Helper\FormButton',
            'form_submit'         => 'TwbsHelper\Form\View\Helper\FormButton',
            'form_checkbox'       => 'TwbsHelper\Form\View\Helper\FormCheckbox',
            'form_collection'     => 'TwbsHelper\Form\View\Helper\FormCollection',
            'form_element_errors' => 'TwbsHelper\Form\View\Helper\FormElementErrors',
            'form_label'          => 'TwbsHelper\Form\View\Helper\FormLabel',
            'form_multi_checkbox' => 'TwbsHelper\Form\View\Helper\FormMultiCheckbox',
            'form_radio'          => 'TwbsHelper\Form\View\Helper\FormRadio',
            'form_row'            => 'TwbsHelper\Form\View\Helper\FormRow',
            'form_static'         => 'TwbsHelper\Form\View\Helper\FormStatic',
            'form_errors'         => 'TwbsHelper\Form\View\Helper\FormErrors',
            'formaddon'           => 'TwbsHelper\Form\View\Helper\FormAddOn',
            'formbutton'          => 'TwbsHelper\Form\View\Helper\FormButton',
            'formsubmit'          => 'TwbsHelper\Form\View\Helper\FormButton',
            'formcheckbox'        => 'TwbsHelper\Form\View\Helper\FormCheckbox',
            'formcollection'      => 'TwbsHelper\Form\View\Helper\FormCollection',
            'formelement_errors'  => 'TwbsHelper\Form\View\Helper\FormElementErrors',
            'formfile'            => 'TwbsHelper\Form\View\Helper\FormFile',
            'formmulticheckbox'   => 'TwbsHelper\Form\View\Helper\FormMultiCheckbox',
            'formradio'           => 'TwbsHelper\Form\View\Helper\FormRadio',
            'formrange'           => 'TwbsHelper\Form\View\Helper\FormRange',
            'formrow'             => 'TwbsHelper\Form\View\Helper\FormRow',
            'formselect'          => 'TwbsHelper\Form\View\Helper\FormSelect',
            'formstatic'          => 'TwbsHelper\Form\View\Helper\FormStatic',
            'formerrors'          => 'TwbsHelper\Form\View\Helper\FormErrors',
            'formlabel'           => 'TwbsHelper\Form\View\Helper\FormLabel',

            // Zend
            'formemail'           => 'Zend\Form\View\Helper\FormEmail',
            'formpassword'        => 'Zend\Form\View\Helper\FormPassword',
            'formtext'            => 'Zend\Form\View\Helper\FormText',
            'formtextarea'        => 'Zend\Form\View\Helper\FormTextarea',
            'forminput'           => 'Zend\Form\View\Helper\FormInput',
            'formhidden'          => 'Zend\Form\View\Helper\FormHidden',
        ],

        'factories' => [
            'TwbsHelper\Form\View\Helper\FormElement' => 'TwbsHelper\Form\View\Helper\Factory\FormElementFactory',
        ],

        'aliases' => [
            'formElement'  => 'TwbsHelper\Form\View\Helper\FormElement',
            'form_element' => 'TwbsHelper\Form\View\Helper\FormElement',
            'formelement'  => 'TwbsHelper\Form\View\Helper\FormElement',
        ],
    ],
    'navigation_helpers' => array(
        'invokables' => array(
            // Navigation
            'breadcrumbs'                          => 'TwbsHelper\View\Helper\Navigation\Breadcrumbs',
            'zendviewhelpernavigationbreadcrumbs'  => 'TwbsHelper\View\Helper\Navigation\Breadcrumbs',
            'menu'                                 => 'TwbsHelper\View\Helper\Navigation\Menu',
            'zendviewhelpernavigationmenu'         => 'TwbsHelper\View\Helper\Navigation\Menu',
        ),
    ),
];
