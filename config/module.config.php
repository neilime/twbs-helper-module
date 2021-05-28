<?php

namespace TwbsHelper;

return [
    'twbshelper' => [
        'ignoredViewHelpers'        => [
            'button',
            'checkbox',
            'hidden',
            'multi_checkbox',
            'radio',
            'reset',
            'submit',
            'static',
            'add_on',
        ],
        'defaultRowSpacingClass'    => 'mb-3',
        'validTagAttributes'        => [],
        'validTagAttributePrefixes' => [],
        'type_map'                  => [],
        'class_map'                 => [],
    ],

    'service_manager' => [
        'factories' => [
            \TwbsHelper\Options\ModuleOptions::class         => \TwbsHelper\Options\Factory\ModuleOptionsFactory::class,
            \Laminas\I18n\Translator\TranslatorInterface::class => \Laminas\I18n\Translator\TranslatorServiceFactory::class,
        ],
    ],

    'view_helpers'       => [
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
            'lead'                => \TwbsHelper\View\Helper\Lead::class,
            'listGroup'           => \TwbsHelper\View\Helper\ListGroup::class,
            'table'               => \TwbsHelper\View\Helper\Table::class,
            'jumbotron'           => \TwbsHelper\View\Helper\Jumbotron::class,
            'media'               => \TwbsHelper\View\Helper\Media::class,
            'mediaList'           => \TwbsHelper\View\Helper\MediaList::class,
            'modal'               => \TwbsHelper\View\Helper\Modal::class,
            'paginationControl'   => \TwbsHelper\View\Helper\PaginationControl::class,
            'progressBar'         => \TwbsHelper\View\Helper\ProgressBar::class,
            'progressBarGroup'    => \TwbsHelper\View\Helper\ProgressBarGroup::class,
            'spinner'             => \TwbsHelper\View\Helper\Spinner::class,
            'toast'               => \TwbsHelper\View\Helper\Toast::class,

            // Form view helpers
            'formAddOn'           => \TwbsHelper\Form\View\Helper\FormAddOn::class,
            'formButton'          => \TwbsHelper\Form\View\Helper\FormButton::class,
            'formSubmit'          => \TwbsHelper\Form\View\Helper\FormButton::class,
            'formCheckbox'        => \TwbsHelper\Form\View\Helper\FormCheckbox::class,
            'formElementErrors'   => \TwbsHelper\Form\View\Helper\FormElementErrors::class,
            'formMultiCheckbox'   => \TwbsHelper\Form\View\Helper\FormMultiCheckbox::class,
            'formRadio'           => \TwbsHelper\Form\View\Helper\FormRadio::class,
            'formRange'           => \TwbsHelper\Form\View\Helper\FormRange::class,
            'formSelect'          => \TwbsHelper\Form\View\Helper\FormSelect::class,
            'formLabel'           => \TwbsHelper\Form\View\Helper\FormLabel::class,

            // Laminas and ZF3
            'form_add_on'         => \TwbsHelper\Form\View\Helper\FormAddOn::class,
            'form_button'         => \TwbsHelper\Form\View\Helper\FormButton::class,
            'form_submit'         => \TwbsHelper\Form\View\Helper\FormButton::class,
            'form_checkbox'       => \TwbsHelper\Form\View\Helper\FormCheckbox::class,
            'form_element_errors' => \TwbsHelper\Form\View\Helper\FormElementErrors::class,
            'form_label'          => \TwbsHelper\Form\View\Helper\FormLabel::class,
            'form_multi_checkbox' => \TwbsHelper\Form\View\Helper\FormMultiCheckbox::class,
            'form_radio'          => \TwbsHelper\Form\View\Helper\FormRadio::class,
            'formaddon'           => \TwbsHelper\Form\View\Helper\FormAddOn::class,
            'formbutton'          => \TwbsHelper\Form\View\Helper\FormButton::class,
            'formsubmit'          => \TwbsHelper\Form\View\Helper\FormButton::class,
            'formcheckbox'        => \TwbsHelper\Form\View\Helper\FormCheckbox::class,
            'formelement_errors'  => \TwbsHelper\Form\View\Helper\FormElementErrors::class,
            'formmulticheckbox'   => \TwbsHelper\Form\View\Helper\FormMultiCheckbox::class,
            'formradio'           => \TwbsHelper\Form\View\Helper\FormRadio::class,
            'formrange'           => \TwbsHelper\Form\View\Helper\FormRange::class,
            'formselect'          => \TwbsHelper\Form\View\Helper\FormSelect::class,
            'formlabel'           => \TwbsHelper\Form\View\Helper\FormLabel::class,
            'formfile'            => \TwbsHelper\Form\View\Helper\FormFile::class,
            'form_file'            => \TwbsHelper\Form\View\Helper\FormFile::class,

            // Zend
            'formemail'           => \Laminas\Form\View\Helper\FormEmail::class,
            'formpassword'        => \Laminas\Form\View\Helper\FormPassword::class,
            'formtext'            => \Laminas\Form\View\Helper\FormText::class,
            'formtextarea'        => \Laminas\Form\View\Helper\FormTextarea::class,
            'forminput'           => \Laminas\Form\View\Helper\FormInput::class,
            'formhidden'          => \Laminas\Form\View\Helper\FormHidden::class,
            'formsearch'          => \Laminas\Form\View\Helper\FormSearch::class,
            'translate'           => \Laminas\I18n\View\Helper\Translate::class,
        ],

        'factories' => [
            \TwbsHelper\Form\View\Helper\Form::class           => \TwbsHelper\Form\View\Helper\Factory\FormFactory::class,
            \TwbsHelper\Form\View\Helper\FormElement::class    => \TwbsHelper\Form\View\Helper\Factory\FormElementFactory::class,
            \TwbsHelper\Form\View\Helper\FormRow::class        => \TwbsHelper\Form\View\Helper\Factory\FormRowFactory::class,
            \TwbsHelper\Form\View\Helper\FormCollection::class => \TwbsHelper\Form\View\Helper\Factory\FormCollectionFactory::class,
        ],

        'aliases' => [
            'formElement'     => \TwbsHelper\Form\View\Helper\FormElement::class,
            'form_element'    => \TwbsHelper\Form\View\Helper\FormElement::class,
            'formelement'     => \TwbsHelper\Form\View\Helper\FormElement::class,
            'form'            => \TwbsHelper\Form\View\Helper\Form::class,
            'formCollection'  => \TwbsHelper\Form\View\Helper\FormCollection::class,
            'form_collection' => \TwbsHelper\Form\View\Helper\FormCollection::class,
            'formcollection'  => \TwbsHelper\Form\View\Helper\FormCollection::class,
            'formRow'         => \TwbsHelper\Form\View\Helper\FormRow::class,
            'form_row'        => \TwbsHelper\Form\View\Helper\FormRow::class,
            'formrow'         => \TwbsHelper\Form\View\Helper\FormRow::class,
        ],
    ],
    'navigation_helpers' => [
        'invokables' => [
            // Navigation
            'breadcrumbs'                         => \TwbsHelper\View\Helper\Navigation\Breadcrumbs::class,
            'laminasviewhelpernavigationbreadcrumbs' => \TwbsHelper\View\Helper\Navigation\Breadcrumbs::class,
            'menu'                                => \TwbsHelper\View\Helper\Navigation\Menu::class,
            'laminasviewhelpernavigationmenu'        => \TwbsHelper\View\Helper\Navigation\Menu::class,
            'navbar'                              => \TwbsHelper\View\Helper\Navigation\Navbar::class,
            'laminasviewhelpernavigationnavbar'      => \TwbsHelper\View\Helper\Navigation\Navbar::class,
        ],
    ],
    'view_manager'       => [
        'template_map' => [
            __NAMESPACE__ . '/pagination_control' => __DIR__ . '/../view/partial/twbsPaginationControl.phtml',
        ],
    ],
];
