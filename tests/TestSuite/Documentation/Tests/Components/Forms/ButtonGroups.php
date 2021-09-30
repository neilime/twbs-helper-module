<?php

// Documentation test config file for "Components / Forms / Custom forms" part
return [
    'title' => 'Button groups',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Laminas\Form\Factory();

        echo $oView->form($oFactory->create([
            'type' => 'form',
            'elements' => [
                [
                    'spec' => [
                        'name' => 'email',
                        'options' => ['label' => 'Email'],
                        'attributes' => ['type' => 'email'],
                    ]
                ],
                [
                    'spec' => [
                        'type' => \Laminas\Form\Element\Button::class,
                        'name' => 'button1',
                        'options' => ['label' => 'Button 1', 'row_name' => 'my-button-group']
                    ]
                ],
                [
                    'spec' => [
                        'type' => \Laminas\Form\Element\Button::class,
                        'name' => 'button2',
                        'options' => ['label' => 'Button 2', 'row_name' => 'my-button-group']
                    ]
                ],

                [
                    'spec' => [
                        'type' => 'submit',
                        'options' => ['label' => 'Submit', 'variant' => 'primary'],
                    ]
                ],
            ],
        ]));
    },
];
