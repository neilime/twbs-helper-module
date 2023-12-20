<?php

// Documentation test config file for "Components / Modal / Examples / Using the grid" part
return [
    'title' => 'Using the grid',
    'url' => '%bootstrap-url%/components/modal/#using-the-grid',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Launch demo modal',
                'variant' => 'primary',
            ],
            'attributes' => [
                'data-bs-toggle' => 'modal',
                'data-bs-target' => '#gridSystemModal',
            ],
        ]) . PHP_EOL;

        echo $view->modal(
            [
                'title' => [
                    'content' => 'Grids in modals',
                    'attributes' => ['id' => 'gridModalLabel'],
                ],
                'grid' => [
                    'rows' => [
                        [
                            [
                                [
                                    '.col-md-4',
                                    ['column' => 'md-4'],
                                ],
                                [
                                    '.col-md-4 .ms-auto',
                                    ['column' => 'md-4', 'class' => 'ms-auto'],
                                ],
                            ],
                        ],
                        [
                            [
                                [
                                    '.col-md-3 .ms-auto',
                                    ['column' => 'md-3', 'class' => 'ms-auto'],
                                ],
                                [
                                    '.col-md-2 .ms-auto',
                                    ['column' => 'md-2', 'class' => 'ms-auto'],
                                ],
                            ],
                        ],
                        [
                            [
                                [
                                    '.col-md-6 .ms-auto',
                                    ['column' => 'md-6', 'class' => 'ms-auto'],
                                ],
                            ],
                        ],
                        [
                            [
                                [
                                    'Level 1: .col-sm-9',
                                    [
                                        'column' => 'sm-9',
                                        'grid' => [
                                            'rows' => [
                                                [
                                                    [
                                                        [
                                                            'Level 2: .col-8 .col-sm-6',
                                                            ['column' => [8, 'sm-6']],
                                                        ],
                                                        [
                                                            'Level 2: .col-4 .col-sm-6',
                                                            ['column' => [4, 'sm-6']],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'attributes' => [
                        'container' => 'fluid',
                        'class' => 'bd-example-row',
                    ],
                ],
                'footer' => [
                    'button' => [
                        [
                            'options' => [
                                'label' => 'Close',
                                'variant' => 'secondary',
                            ],
                            'attributes' => [
                                'data-bs-dismiss' => 'modal',
                            ],
                        ],
                        [
                            'options' => [
                                'label' => 'Save changes',
                                'variant' => 'primary',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'fade' => true,
                'hidden' => true,
                'id' => 'gridSystemModal',
            ]
        );
    },
];
