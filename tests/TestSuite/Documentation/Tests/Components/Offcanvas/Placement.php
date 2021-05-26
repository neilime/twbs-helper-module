<?php

// Documentation test config file for "Components / Offcanvas / Placement" part
return [
    'title' => 'Placement',
    'url' => '%bootstrap-url%/components/offcanvas/#placement',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->offcanvas(
            '...',
            [
                'triggers' => [
                    [
                        'options' => [
                            'variant' => 'primary',
                            'label' => 'Toggle top offcanvas',
                        ],
                    ],
                ],
                'header' => [
                    'title' => [
                        'content' => 'Offcanvas top',
                        'attributes' => [
                            'id' => 'offcanvasTopLabel',
                        ],
                    ],
                ],
                'placement' => 'top',
                'id' => 'offcanvasTop',
            ]
        );

        echo PHP_EOL . '<br>' . PHP_EOL;

        echo $view->offcanvas(
            '...',
            [
                'triggers' => [
                    [
                        'options' => [
                            'variant' => 'primary',
                            'label' => 'Toggle right offcanvas',
                        ],
                    ],
                ],
                'header' => [
                    'title' => [
                        'content' => 'Offcanvas right',
                        'attributes' => [
                            'id' => 'offcanvasRightLabel',
                        ],
                    ],
                ],
                'placement' => 'end',
                'id' => 'offcanvasRight',
            ]
        );

        echo PHP_EOL . '<br>' . PHP_EOL;

        echo $view->offcanvas(
            '...',
            [
                'triggers' => [
                    [
                        'options' => [
                            'variant' => 'primary',
                            'label' => 'Toggle bottom offcanvas',
                        ],
                    ],
                ],
                'header' => [
                    'title' => [
                        'content' => 'Offcanvas bottom',
                        'attributes' => [
                            'id' => 'offcanvasBottomLabel',
                        ],
                    ],
                ],
                'body' => [
                    'class' => 'small',
                ],
                'placement' => 'bottom',
                'id' => 'offcanvasBottom',
            ]
        );
    },
];
