<?php

// Documentation test config file for "Components / Card / Card layout" part
return [
    'title' => 'Card layout',
    'url' => '%bootstrap-url%/components/card/#card-layout',
    'tests' => [
        [
            'title' => 'Card groups',
            'url' => '%bootstrap-url%/components/card/#card-groups',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->cardGroup([
                    [
                        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Card title',
                        'text' => [
                            'This is a wider card with supporting text below as a natural lead-in to ' .
                                'additional content. This content is a little bit longer.',
                            '<small class="text-muted">Last updated 3 mins ago</small>',
                        ],
                    ],
                    [
                        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Card title',
                        'text' => [
                            'This card has supporting text below as a natural lead-in to additional content.',
                            '<small class="text-muted">Last updated 3 mins ago</small>',
                        ],
                    ],
                    [
                        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Card title',
                        'text' => [
                            'This is a wider card with supporting text below as a natural lead-in to ' .
                                'additional content. ' .
                                'This card has even longer content than the first to show that equal height action.',
                            '<small class="text-muted">Last updated 3 mins ago</small>',
                        ],
                    ],
                ]);


                echo PHP_EOL . '<br/>' . PHP_EOL;

                // With footers
                echo $view->cardGroup([
                    [
                        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Card title',
                        'text' => 'This is a wider card with supporting text below as a natural lead-in to ' .
                            'additional content. This content is a little bit longer.',
                        'footer' => '<small class="text-muted">Last updated 3 mins ago</small>',
                    ],
                    [
                        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Card title',
                        'text' => 'This card has supporting text below as a natural lead-in to additional content.',
                        'footer' => '<small class="text-muted">Last updated 3 mins ago</small>',
                    ],
                    [
                        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Card title',
                        'text' => 'This is a wider card with supporting text below ' .
                            'as a natural lead-in to additional content. ' .
                            'This card has even longer content than the first to show that equal height action.',
                        'footer' => '<small class="text-muted">Last updated 3 mins ago</small>',
                    ],
                ]);
            },
        ],
        [
            'title' => 'Grid cards',
            'url' => '%bootstrap-url%/components/card/#grid-cards',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->cardGrid(
                    [
                        [
                            'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                            'title' => 'Card title',
                            'text' => [
                                'This is a wider card with supporting text below as a natural lead-in to ' .
                                    'additional content. This content is a little bit longer.',
                                '<small class="text-muted">Last updated 3 mins ago</small>',
                            ],
                        ],
                        [
                            'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                            'title' => 'Card title',
                            'text' => [
                                'This is a wider card with supporting text below as a natural lead-in to ' .
                                    'additional content. This content is a little bit longer.',
                                '<small class="text-muted">Last updated 3 mins ago</small>',
                            ],
                        ],
                        [
                            'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                            'title' => 'Card title',
                            'text' => [
                                'This card has supporting text below as a natural lead-in to additional content.',
                                '<small class="text-muted">Last updated 3 mins ago</small>',
                            ],
                        ],
                        [
                            'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                            'title' => 'Card title',
                            'text' => [
                                'This is a wider card with supporting text below as a natural lead-in to ' .
                                    'additional content. This content is a little bit longer.',
                                '<small class="text-muted">Last updated 3 mins ago</small>',
                            ],
                        ],
                    ],
                    ['class' => 'row-cols-1 row-cols-md-2 g-4'],
                );


                echo PHP_EOL . '<br/>' . PHP_EOL;

                echo $view->cardGrid(
                    [
                        [
                            'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                            'title' => 'Card title',
                            'text' => [
                                'This is a wider card with supporting text below as a natural lead-in to ' .
                                    'additional content. This content is a little bit longer.',
                                '<small class="text-muted">Last updated 3 mins ago</small>',
                            ],
                        ],
                        [
                            'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                            'title' => 'Card title',
                            'text' => [
                                'This is a wider card with supporting text below as a natural lead-in to ' .
                                    'additional content. This content is a little bit longer.',
                                '<small class="text-muted">Last updated 3 mins ago</small>',
                            ],
                        ],
                        [
                            'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                            'title' => 'Card title',
                            'text' => [
                                'This card has supporting text below as a natural lead-in to additional content.',
                                '<small class="text-muted">Last updated 3 mins ago</small>',
                            ],
                        ],
                        [
                            'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                            'title' => 'Card title',
                            'text' => [
                                'This is a wider card with supporting text below as a natural lead-in to ' .
                                    'additional content. This content is a little bit longer.',
                                '<small class="text-muted">Last updated 3 mins ago</small>',
                            ],
                        ],
                    ],
                    ['class' => 'row-cols-1 row-cols-md-3 g-4'],
                );
            },
        ],
    ],
];
