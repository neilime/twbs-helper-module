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
            'abbreviation' => 'TwbsHelper\View\Helper\Abbreviation',
            'alert'        => 'TwbsHelper\View\Helper\Alert',
            'badge'        => 'TwbsHelper\View\Helper\Badge',
            'blockquote'   => 'TwbsHelper\View\Helper\Blockquote',
            'buttonGroup'  => 'TwbsHelper\View\Helper\ButtonGroup',
            'figure'       => 'TwbsHelper\View\Helper\Figure',
            'htmlList'     => 'TwbsHelper\View\Helper\HtmlList',
            'table'        => 'TwbsHelper\View\Helper\Table',

            // Form view helpers
            'form'              => 'TwbsHelper\Form\View\Helper\Form',
            'formButton'        => 'TwbsHelper\Form\View\Helper\FormButton',
            'formSubmit'        => 'TwbsHelper\Form\View\Helper\FormButton',
            'formCheckbox'      => 'TwbsHelper\Form\View\Helper\FormCheckbox',
            'formCollection'    => 'TwbsHelper\Form\View\Helper\FormCollection',
            'formElementErrors' => 'TwbsHelper\Form\View\Helper\FormElementErrors',
            'formMultiCheckbox' => 'TwbsHelper\Form\View\Helper\FormMultiCheckbox',
            'formRadio'         => 'TwbsHelper\Form\View\Helper\FormRadio',
            'formRow'           => 'TwbsHelper\Form\View\Helper\FormRow',
            'formStatic'        => 'TwbsHelper\Form\View\Helper\FormStatic',
            'formErrors'        => 'TwbsHelper\Form\View\Helper\FormErrors',

            // ZF3
            'form_button'         => 'TwbsHelper\Form\View\Helper\FormButton',
            'form_submit'         => 'TwbsHelper\Form\View\Helper\FormButton',
            'form_checkbox'       => 'TwbsHelper\Form\View\Helper\FormCheckbox',
            'form_collection'     => 'TwbsHelper\Form\View\Helper\FormCollection',
            'form_element_errors' => 'TwbsHelper\Form\View\Helper\FormElementErrors',
            'form_multi_checkbox' => 'TwbsHelper\Form\View\Helper\FormMultiCheckbox',
            'form_radio'          => 'TwbsHelper\Form\View\Helper\FormRadio',
            'form_row'            => 'TwbsHelper\Form\View\Helper\FormRow',
            'form_static'         => 'TwbsHelper\Form\View\Helper\FormStatic',
            'form_errors'         => 'TwbsHelper\Form\View\Helper\FormErrors',
            'formbutton'          => 'TwbsHelper\Form\View\Helper\FormButton',
            'formsubmit'          => 'TwbsHelper\Form\View\Helper\FormButton',
            'formcheckbox'        => 'TwbsHelper\Form\View\Helper\FormCheckbox',
            'formcollection'      => 'TwbsHelper\Form\View\Helper\FormCollection',
            'formelement_errors'  => 'TwbsHelper\Form\View\Helper\FormElementErrors',
            'formfile'            => 'TwbsHelper\Form\View\Helper\FormFile',
            'formmulticheckbox'   => 'TwbsHelper\Form\View\Helper\FormMultiCheckbox',
            'formradio'           => 'TwbsHelper\Form\View\Helper\FormRadio',
            'formrow'             => 'TwbsHelper\Form\View\Helper\FormRow',
            'formstatic'          => 'TwbsHelper\Form\View\Helper\FormStatic',
            'formerrors'          => 'TwbsHelper\Form\View\Helper\FormErrors',

            // Zend
            'form_label'   => 'Zend\Form\View\Helper\FormLabel',
            'formlabel'    => 'Zend\Form\View\Helper\FormLabel',
            'formemail'    => 'Zend\Form\View\Helper\FormEmail',
            'formpassword' => 'Zend\Form\View\Helper\FormPassword',
            'formtext'     => 'Zend\Form\View\Helper\FormText',
            'formtextarea' => 'Zend\Form\View\Helper\FormTextarea',
            'formselect'   => 'Zend\Form\View\Helper\FormSelect',
            'forminput'    => 'Zend\Form\View\Helper\FormInput',
            'formhidden'   => 'Zend\Form\View\Helper\FormHidden',
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
];

