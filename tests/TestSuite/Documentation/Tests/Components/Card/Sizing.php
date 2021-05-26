<?php

// Documentation test config file for "Components / Card / Sizing" part
return [
    'title' => 'Sizing',
    'url' => '%bootstrap-url%/components/card/#sizing',
    'tests' => [
        [
            'title' => 'Using grid markup',
            'url' => '%bootstrap-url%/components/card/#using-grid-markup',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->cardGrid(
                    [
                        [
                            [
                                'title' => 'Special title treatment',
                                'text' => 'With supporting text below as a natural lead-in to additional content.',
                                '<a href="#" class="btn btn-primary">Go somewhere</a>',
                            ],
                        ],
                        [
                            [
                                'title' => 'Special title treatment',
                                'text' => 'With supporting text below as a natural lead-in to additional content.',
                                '<a href="#" class="btn btn-primary">Go somewhere</a>',
                            ],
                        ],
                    ],
                    ['column' => 'sm-6'],
                );
            },
        ],
        [
            'title' => 'Using utilities',
            'url' => '%bootstrap-url%/components/card/#using-utilities',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->card(
                    [
                        'title' => 'Card title',
                        'text' => 'With supporting text below as a natural lead-in to additional content.',
                        '<a href="#" class="btn btn-primary">Button</a>',
                    ],
                    ['class' => 'w-75']
                );

                echo PHP_EOL . '<br/>' . PHP_EOL;

                echo $view->card(
                    [
                        'title' => 'Card title',
                        'text' => 'With supporting text below as a natural lead-in to additional content.',
                        '<a href="#" class="btn btn-primary">Button</a>',
                    ],
                    ['class' => 'w-50']
                );
            },
        ],
        [
            'title' => 'Using custom CSS',
            'url' => '%bootstrap-url%/components/card/#using-custom-css',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->card(
                    [
                        'title' => 'Special title treatment',
                        'text' => 'With supporting text below as a natural lead-in to additional content.',
                        '<a href="#" class="btn btn-primary">Go somewhere</a>',
                    ],
                    ['style' => 'width: 18rem;']
                );
            },
        ],
    ],
];
