<?php

// Documentation test config file for "Components / Forms / Layout / Form grid / Form row" part
return [
    'title' => 'Form row',
    'url' => '%bootstrap-url%/components/forms/#form-row',

    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Laminas\Form\Factory();

        echo $oView->form($oFactory->create([
            'type' => 'form',
            'options' => ['row_class' => 'form-row'],
            'elements' => [
                [
                    'spec' => [
                        'name' => 'firstName',
                        'options' => [
                            'column' => true,
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'placeholder' => 'First name',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'lastName',
                        'options' => [
                            'column' => true,
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'placeholder' => 'Last name',
                        ],
                    ],
                ],
            ]
        ]));
    },
];
