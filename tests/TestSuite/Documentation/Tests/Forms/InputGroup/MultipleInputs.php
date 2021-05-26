<?php

// Documentation test config file for "Forms / Input group / Multiple inputs" part
return [
    'title' => 'Multiple inputs',
    'url' => '%bootstrap-url%/forms/input-group/#multiple-inputs',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        $factory = new \Laminas\Form\Factory();

        echo $view->formRow($factory->create([
            'name' => 'last-name',
            'type' => 'text',
            'options' => [
                'add_on_prepend' => [
                    'First and last name',
                    [
                        'element' => [
                            'name' => 'first-name',
                            'type' => 'text',
                        ],
                        'attributes' => [
                            'aria-label' => 'First name',
                        ],
                    ]
                ]
            ],
            'attributes' => [
                'aria-label' => 'Last name',
            ],
        ]));
    },
];
