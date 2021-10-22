<?php

// Documentation test config file for "Components / Forms / Layout / Form groups" part
return [
    'title' => 'Form groups',
    'url' => '%bootstrap-url%/components/forms/#form-groups',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        $factory = new \Laminas\Form\Factory();

        echo $view->form($factory->create([
            'type' => 'form',
            'elements' => [
                [
                    'spec' => [
                        'name' => 'exampleInput',
                        'options' => [
                            'label' => 'Example label',
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'id' => 'formGroupExampleInput',
                            'placeholder' => 'Example input',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'exampleInput2',
                        'options' => [
                            'label' => 'Another label',
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'id' => 'formGroupExampleInput2',
                            'placeholder' => 'Another input',
                        ],
                    ],
                ],
            ]
        ]));
    },
];
