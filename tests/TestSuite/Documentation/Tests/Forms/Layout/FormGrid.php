<?php

// Documentation test config file for "Forms / Layout / Form grid" part

return [
    'title' => 'Form grid',
    'url' => '%bootstrap-url%/forms/layout/#form-grid',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        $factory = new \Laminas\Form\Factory();

        echo $view->form($factory->create([
            'type' => 'form',
            'elements' => [
                [
                    'spec' => [
                        'name' => 'firstName',
                        'options' => [
                            'column' => true,
                        ],
                        'attributes' => [
                            'aria-label' => 'First name',
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
                            'aria-label' => 'Last name',
                            'placeholder' => 'Last name',
                        ],
                    ],
                ],
            ],
        ]));
    },
];
