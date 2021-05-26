<?php

// Documentation test config file for "Forms / Select" part
return [
    'title' => 'Select',
    'url' => '%bootstrap-url%/forms/select',
    'tests' => [
        [
            'title' => 'Default',
            'url' => '%bootstrap-url%/forms/select/#default',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();

                echo $view->formElement($factory->create([
                    'name' => 'default-select',
                    'type' => 'select',
                    'options' => [
                        'empty_option' => 'Open this select menu',
                        'value_options' => [
                            1 => 'One',
                            2 => 'Two',
                            3 => 'Three',
                        ],
                    ],
                    'attributes' => [
                        'aria-label' => 'Default select example',
                    ],
                ]));
            },
        ],
        [
            'title' => 'Sizing',
            'url' => '%bootstrap-url%/forms/select/#sizing',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();

                echo $view->formElement($factory->create([
                    'name' => 'lg-select',
                    'type' => 'select',
                    'options' => [
                        'size' => 'lg',
                        'empty_option' => 'Open this select menu',
                        'value_options' => [
                            1 => 'One',
                            2 => 'Two',
                            3 => 'Three',
                        ],
                    ],
                    'attributes' => [
                        'aria-label' => '.form-select-lg example',
                    ],
                ]));

                echo PHP_EOL . '<br/>' . PHP_EOL;

                echo $view->formElement($factory->create([
                    'name' => 'sm-select',
                    'type' => 'select',
                    'options' => [
                        'size' => 'sm',
                        'empty_option' => 'Open this select menu',
                        'value_options' => [
                            1 => 'One',
                            2 => 'Two',
                            3 => 'Three',
                        ],
                    ],
                    'attributes' => [
                        'aria-label' => '.form-select-sm example',
                    ],
                ]));

                echo PHP_EOL . '<br/>' . PHP_EOL;

                echo $view->formElement($factory->create([
                    'name' => 'multiple-select',
                    'type' => 'select',
                    'options' => [
                        'empty_option' => 'Open this select menu',
                        'value_options' => [
                            1 => 'One',
                            2 => 'Two',
                            3 => 'Three',
                        ],
                    ],
                    'attributes' => [
                        'multiple' => true,
                        'aria-label' => 'multiple select example',
                    ],
                ]));

                echo PHP_EOL . '<br/>' . PHP_EOL;

                echo $view->formElement($factory->create([
                    'name' => 'size-3-select',
                    'type' => 'select',
                    'options' => [
                        'empty_option' => 'Open this select menu',
                        'value_options' => [
                            1 => 'One',
                            2 => 'Two',
                            3 => 'Three',
                        ],
                    ],
                    'attributes' => [
                        'size' => 3,
                        'aria-label' => 'size 3 select example',
                    ],
                ]));
            },
        ],
        [
            'title' => 'Disabled',
            'url' => '%bootstrap-url%/forms/select/#disabled',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();

                echo $view->formElement($factory->create([
                    'name' => 'default-select',
                    'type' => 'select',
                    'options' => [
                        'empty_option' => 'Open this select menu',
                        'value_options' => [
                            1 => 'One',
                            2 => 'Two',
                            3 => 'Three',
                        ],
                    ],
                    'attributes' => [
                        'disabled' => true,
                        'aria-label' => 'Disabled select example',
                    ],
                ]));
            },
        ],
    ],
];
