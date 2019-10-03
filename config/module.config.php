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
            'abbreviation'        => \TwbsHelper\View\Helper\Abbreviation::class,
            'alert'               => \TwbsHelper\View\Helper\Alert::class,
            'badge'               => \TwbsHelper\View\Helper\Badge::class,
            'blockquote'          => \TwbsHelper\View\Helper\Blockquote::class,
            'buttonGroup'         => \TwbsHelper\View\Helper\ButtonGroup::class,
            'buttonToolbar'       => \TwbsHelper\View\Helper\ButtonToolbar::class,
            'card'                => \TwbsHelper\View\Helper\Card::class,
            'cardColumns'         => \TwbsHelper\View\Helper\CardColumns::class,
            'cardDeck'            => \TwbsHelper\View\Helper\CardDeck::class,
            'cardGroup'           => \TwbsHelper\View\Helper\CardGroup::class,
            'carousel'            => \TwbsHelper\View\Helper\Carousel::class,
            'dropdown'            => \TwbsHelper\View\Helper\Dropdown::class,
            'figure'              => \TwbsHelper\View\Helper\Figure::class,
            'htmlList'            => \TwbsHelper\View\Helper\HtmlList::class,
            'image'               => \TwbsHelper\View\Helper\Image::class,
            'listGroup'           => \TwbsHelper\View\Helper\ListGroup::class,
            'table'               => \TwbsHelper\View\Helper\Table::class,
            'jumbotron'           => \TwbsHelper\View\Helper\Jumbotron::class,
            'media'               => \TwbsHelper\View\Helper\Media::class,
            'mediaList'           => \TwbsHelper\View\Helper\MediaList::class,
            'modal'               => \TwbsHelper\View\Helper\Modal::class,
            'paginationControl'   => \TwbsHelper\View\Helper\PaginationControl::class,
            'progressBar'         => \TwbsHelper\View\Helper\ProgressBar::class,
            'progressBarGroup'    => \TwbsHelper\View\Helper\ProgressBarGroup::class,

            // Form view helpers
            'form'                => \TwbsHelper\Form\View\Helper\Form::class,
            'formAddOn'           => \TwbsHelper\Form\View\Helper\FormAddOn::class,
            'formButton'          => \TwbsHelper\Form\View\Helper\FormButton::class,
            'formSubmit'          => \TwbsHelper\Form\View\Helper\FormButton::class,
            'formCheckbox'        => \TwbsHelper\Form\View\Helper\FormCheckbox::class,
            'formCollection'      => \TwbsHelper\Form\View\Helper\FormCollection::class,
            'formElementErrors'   => \TwbsHelper\Form\View\Helper\FormElementErrors::class,
            'formMultiCheckbox'   => \TwbsHelper\Form\View\Helper\FormMultiCheckbox::class,
            'formRadio'           => \TwbsHelper\Form\View\Helper\FormRadio::class,
            'formRange'           => \TwbsHelper\Form\View\Helper\FormRange::class,
            'formRow'             => \TwbsHelper\Form\View\Helper\FormRow::class,
            'formSelect'          => \TwbsHelper\Form\View\Helper\FormSelect::class,
            'formStatic'          => \TwbsHelper\Form\View\Helper\FormStatic::class,
            'formErrors'          => \TwbsHelper\Form\View\Helper\FormErrors::class,
            'formLabel'           => \TwbsHelper\Form\View\Helper\FormLabel::class,

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
