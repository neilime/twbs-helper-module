<?php

// Documentation test config file for "Components / Forms / Layout / Form grid" part
return [
    'title' => 'Form grid',
    'url' => '%bootstrap-url%/components/forms/#form-grid',
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
    'tests' => [
        include __DIR__ . DIRECTORY_SEPARATOR . 'FormGrid/FormRow.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'FormGrid/HorizontalForm.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'FormGrid/ColumnSizing.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'FormGrid/AutoSizing.php',
    ],
];
