<?php

// Documentation test config file for "Forms / Layout / Utilities" part

return [
    'title' => 'Utilities',
    'url' => '%bootstrap-url%/forms/layout/#utilities',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        $factory = new \Laminas\Form\Factory();

        echo $view->form($factory->create([
            'type' => 'form',
            'elements' => [
                [
                    'spec' => [
                        'name' => 'exampleLabel',
                        'options' => [
                            'label' => 'Example label',
                        ],
                        'attributes' => [
                            'id' => 'formGroupExampleInput',
                            'placeholder' => 'Example input placeholder',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'anotherLabel',
                        'options' => [
                            'label' => 'Another label',
                        ],
                        'attributes' => [
                            'id' => 'formGroupExampleInput2',
                            'placeholder' => 'Another input placeholder',
                        ],
                    ],
                ],
            ],
        ]));
    },
];
