<?php

// Documentation test config file for "Forms / Layout / Column sizing" part
return [
    'title' => 'Column sizing',
    'url' => '%bootstrap-url%/forms/layout/#column-sizing',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        $factory = new \Laminas\Form\Factory();

        echo $view->form($factory->create([
            'type' => 'form',
            'options' => [
                'gutter' => 3,
            ],
            'elements' => [
                [
                    'spec' => [
                        'name' => 'city',
                        'options' => [
                            'column' => 'sm-7',
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'placeholder' => 'City',
                            'aria-label' => 'City',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'state',
                        'options' => [
                            'column' => 'sm',
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'placeholder' => 'State',
                            'aria-label' => 'State',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'zip',
                        'options' => [
                            'column' => 'sm',
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'placeholder' => 'Zip',
                            'aria-label' => 'Zip',
                        ],
                    ],
                ],
            ],
        ]));
    },
];
