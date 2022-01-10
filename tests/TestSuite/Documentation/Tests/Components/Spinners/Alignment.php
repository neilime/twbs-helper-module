<?php

// Documentation test config file for "Components / Spinners / Alignment" part
return [
    'title' => 'Alignment',
    'url' => '%bootstrap-url%/components/spinners/#alignment',
    'tests' => [
        [
            'title' => 'Margin',
            'url' => '%bootstrap-url%/components/spinners/#margin',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->spinner([
                    'margin' => 5,
                    'label' => 'Loading...',
                ]);
            },
        ],
        [
            'title' => 'Placement',
            'url' => '%bootstrap-url%/components/spinners/#placement',
            'tests' => [
                [
                    'title' => 'Flex',
                    'url' => '%bootstrap-url%/components/spinners/#flex',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->spinner([
                            'placement' => 'center',
                            'label' => 'Loading...',
                        ]);

                        echo PHP_EOL . '<br/>' . PHP_EOL;

                        echo $view->spinner([
                            'placement' => 'center',
                            'label' => 'Loading...',
                            'show_label' => true,
                        ]);
                    },
                ],
                [
                    'title' => 'Floats',
                    'url' => '%bootstrap-url%/components/spinners/#floats',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->spinner([
                            'placement' => 'end',
                            'label' => 'Loading...',
                        ]);
                    },
                ],
                [
                    'title' => 'Text align',
                    'url' => '%bootstrap-url%/components/spinners/#text-align',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->spinner([
                            'placement' => 'text-center',
                            'label' => 'Loading...',
                        ]);
                    },
                ],
            ],
        ],
    ],
];
