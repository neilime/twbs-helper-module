<?php

// Documentation test config file for "Components / Forms / Layout / Form grid / Column sizing" part
return [
    'title' => 'Column sizing',
    'url' => '%bootstrap-url%/components/forms/#column-sizing',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        $factory = new \Laminas\Form\Factory();

        echo $view->form($factory->create([
            'type' => 'form',
            'options' => ['row_class' => 'form-row'],
            'elements' => [
                [
                    'spec' => [
                        'name' => 'city',
                        'options' => [
                            'column' => 7,
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'placeholder' => 'City',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'state',
                        'options' => [
                            'column' => true,
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'placeholder' => 'State',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'zip',
                        'options' => [
                            'column' => true,
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'placeholder' => 'Zip',
                        ],
                    ],
                ],
            ]
        ]));
    },
];
