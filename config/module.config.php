<?php

namespace TwbsHelper;

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
            \TwbsHelper\Options\ModuleOptions::class => \TwbsHelper\Options\Factory\ModuleOptionsFactory::class,
            \Zend\I18n\Translator\TranslatorInterface::class => \Zend\I18n\Translator\TranslatorServiceFactory::class,
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
            'modal'               => 'TwbsHelper\View\Helper\Modal',
            'paginationControl'   => 'TwbsHelper\View\Helper\PaginationControl',

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
            'form_add_on'         => \TwbsHelper\Form\View\Helper\FormAddOn::class,
            'form_button'         => \TwbsHelper\Form\View\Helper\FormButton::class,
            'form_submit'         => \TwbsHelper\Form\View\Helper\FormButton::class,
            'form_checkbox'       => \TwbsHelper\Form\View\Helper\FormCheckbox::class,
            'form_collection'     => \TwbsHelper\Form\View\Helper\FormCollection::class,
            'form_element_errors' => \TwbsHelper\Form\View\Helper\FormElementErrors::class,
            'form_label'          => \TwbsHelper\Form\View\Helper\FormLabel::class,
            'form_multi_checkbox' => \TwbsHelper\Form\View\Helper\FormMultiCheckbox::class,
            'form_radio'          => \TwbsHelper\Form\View\Helper\FormRadio::class,
            'form_row'            => \TwbsHelper\Form\View\Helper\FormRow::class,
            'form_static'         => \TwbsHelper\Form\View\Helper\FormStatic::class,
            'form_errors'         => \TwbsHelper\Form\View\Helper\FormErrors::class,
            'formaddon'           => \TwbsHelper\Form\View\Helper\FormAddOn::class,
            'formbutton'          => \TwbsHelper\Form\View\Helper\FormButton::class,
            'formsubmit'          => \TwbsHelper\Form\View\Helper\FormButton::class,
            'formcheckbox'        => \TwbsHelper\Form\View\Helper\FormCheckbox::class,
            'formcollection'      => \TwbsHelper\Form\View\Helper\FormCollection::class,
            'formelement_errors'  => \TwbsHelper\Form\View\Helper\FormElementErrors::class,
            'formfile'            => \TwbsHelper\Form\View\Helper\FormFile::class,
            'formmulticheckbox'   => \TwbsHelper\Form\View\Helper\FormMultiCheckbox::class,
            'formradio'           => \TwbsHelper\Form\View\Helper\FormRadio::class,
            'formrange'           => \TwbsHelper\Form\View\Helper\FormRange::class,
            'formrow'             => \TwbsHelper\Form\View\Helper\FormRow::class,
            'formselect'          => \TwbsHelper\Form\View\Helper\FormSelect::class,
            'formstatic'          => \TwbsHelper\Form\View\Helper\FormStatic::class,
            'formerrors'          => \TwbsHelper\Form\View\Helper\FormErrors::class,
            'formlabel'           => \TwbsHelper\Form\View\Helper\FormLabel::class,

            // Zend
            'formemail'           => \Zend\Form\View\Helper\FormEmail::class,
            'formpassword'        => \Zend\Form\View\Helper\FormPassword::class,
            'formtext'            => \Zend\Form\View\Helper\FormText::class,
            'formtextarea'        => \Zend\Form\View\Helper\FormTextarea::class,
            'forminput'           => \Zend\Form\View\Helper\FormInput::class,
            'formhidden'          => \Zend\Form\View\Helper\FormHidden::class,
            'formsearch'          => \Zend\Form\View\Helper\FormSearch::class,            
            'translate'           => \Zend\I18n\View\Helper\Translate::class,
        ],

        'factories' => [
            \TwbsHelper\Form\View\Helper\FormElement::class => \TwbsHelper\Form\View\Helper\Factory\FormElementFactory::class,
        ],

        'aliases' => [
            'formElement'  => \TwbsHelper\Form\View\Helper\FormElement::class,
            'form_element' => \TwbsHelper\Form\View\Helper\FormElement::class,
            'formelement'  => \TwbsHelper\Form\View\Helper\FormElement::class,
        ],
    ],
    'navigation_helpers' => [
        'invokables' => [
            // Navigation
            'breadcrumbs'                         => \TwbsHelper\View\Helper\Navigation\Breadcrumbs::class,
            'zendviewhelpernavigationbreadcrumbs' => \TwbsHelper\View\Helper\Navigation\Breadcrumbs::class,
            'menu'                                => \TwbsHelper\View\Helper\Navigation\Menu::class,
            'zendviewhelpernavigationmenu'        => \TwbsHelper\View\Helper\Navigation\Menu::class,
            'navbar'                              => \TwbsHelper\View\Helper\Navigation\Navbar::class,
            'zendviewhelpernavigationnavbar'      => \TwbsHelper\View\Helper\Navigation\Navbar::class,
        ],
    ],
    'view_manager' => [
        'template_map' => [
            __NAMESPACE__ . '/pagination_control' => __DIR__ . '/../view/partial/twbsPaginationControl.phtml',
        ],
    ],
];
