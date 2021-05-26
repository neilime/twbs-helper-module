<?php

// Documentation test config file for "Forms / Range" part
return [
    'title' => 'Range',
    'url' => '%bootstrap-url%/forms/range',
    'tests' => [
        [
            'title' => 'Overview',
            'url' => '%bootstrap-url%/forms/range/#overview',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();

                echo $view->formRow($factory->create([
                    'name' => 'range',
                    'options' => [
                        'label' => 'Example Range'
                    ],
                    'attributes' => [
                        'type' => 'range',
                        'id' => 'customRange1',
                    ],
                ]));
            },
        ],
        [
            'title' => 'Disabled',
            'url' => '%bootstrap-url%/forms/range/#disabled',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();

                echo $view->formRow($factory->create([
                    'name' => 'range',
                    'options' => [
                        'label' => 'Disabled range'
                    ],
                    'attributes' => [
                        'type' => 'range',
                        'id' => 'disabledRange',
                        'disabled' => true
                    ],
                ]));
            },
        ],
        [
            'title' => 'Min and max',
            'url' => '%bootstrap-url%/forms/range/#min-and-max',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();

                echo $view->formRow($factory->create([
                    'name' => 'range',
                    'options' => [
                        'label' => 'Example Range'
                    ],
                    'attributes' => [
                        'type' => 'range',
                        'id' => 'customRange2',
                        'min' => 0,
                        'max' => 5
                    ],
                ]));
            },
        ],
        [
            'title' => 'Steps',
            'url' => '%bootstrap-url%/forms/range/#steps',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();

                echo $view->formRow($factory->create([
                    'name' => 'range',
                    'options' => [
                        'label' => 'Example Range'
                    ],
                    'attributes' => [
                        'type' => 'range',
                        'id' => 'customRange3',
                        'min' => 0,
                        'max' => 5,
                        'step' => 0.5
                    ],
                ]));
            },
        ],
    ]
];
