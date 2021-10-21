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
                        'title' => 'Primary card title',
                        'text' => [
                            'This is a wider card with supporting text below as a natural lead-in to additional ' .
                                'content. This content is a little bit longer.',
                            '<small class="text-muted">Last updated 3 mins ago</small>',
                        ],
                    ],
                    [
                        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Primary card title',
                        'text' => [
                            'This card has supporting text below as a natural lead-in to additional content.',
                            '<small class="text-muted">Last updated 3 mins ago</small>'
                        ],
                    ],
                    [
                        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Primary card title',
                        'text' => [
                            'This is a wider card with supporting text below as a natural lead-in ' .
                                'to additional content. This card has even longer content than the ' .
                                'first to show that equal height action.',
                            '<small class="text-muted">Last updated 3 mins ago</small>',
                        ],
                    ],
                ]);


                echo PHP_EOL . '<br/>' . PHP_EOL;

                // With footers
                echo $view->cardGroup([
                    [
                        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Primary card title',
                        'text' => 'This is a wider card with supporting text below as a natural lead-in to ' .
                            'additional content. This content is a little bit longer.',
                        'footer' => '<small class="text-muted">Last updated 3 mins ago</small>',
                    ],
                    [
                        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Primary card title',
                        'text' => 'This card has supporting text below as a natural lead-in to additional content.',
                        'footer' => '<small class="text-muted">Last updated 3 mins ago</small>',
                    ],
                    [
                        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Primary card title',
                        'text' => 'This is a wider card with supporting text below ' .
                            'as a natural lead-in to additional content. ' .
                            'This card has even longer content than the first to show that equal height action.',
                        'footer' => '<small class="text-muted">Last updated 3 mins ago</small>',
                    ],
                ]);
            },
        ],
        [
            'title' => 'Card decks',
            'url' => '%bootstrap-url%/components/card/#card-decks',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->cardDeck([
                    [
                        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Primary card title',
                        'text' => [
                            'This is a wider card with supporting text below ' .
                                'as a natural lead-in to additional content. ' .
                                'This content is a little bit longer.',
                            '<small class="text-muted">Last updated 3 mins ago</small>',
                        ],
                    ],
                    [
                        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Primary card title',
                        'text' => [
                            'This card has supporting text below as a natural lead-in to additional content.',
                            '<small class="text-muted">Last updated 3 mins ago</small>'
                        ],
                    ],
                    [
                        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Primary card title',
                        'text' => [
                            'This is a wider card with supporting text below as a ' .
                                'natural lead-in to additional content. ' .
                                'This card has even longer content than the first to show that equal height action.',
                            '<small class="text-muted">Last updated 3 mins ago</small>',
                        ],
                    ],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // With footers
                echo $view->cardDeck([
                    [
                        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Primary card title',
                        'text' => 'This is a wider card with supporting text below as a ' .
                            'natural lead-in to additional content. This content is a little bit longer.',
                        'footer' => '<small class="text-muted">Last updated 3 mins ago</small>',
                    ],
                    [
                        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Primary card title',
                        'text' => 'This card has supporting text below as a natural lead-in to additional content.',
                        'footer' => '<small class="text-muted">Last updated 3 mins ago</small>',
                    ],
                    [
                        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Primary card title',
                        'text' => 'This is a wider card with supporting text below as a natural ' .
                            'lead-in to additional content. This card has even longer content than ' .
                            'the first to show that equal height action.',
                        'footer' => '<small class="text-muted">Last updated 3 mins ago</small>',
                    ],
                ]);
            },
        ],
        [
            'title' => 'Card columns',
            'url' => '%bootstrap-url%/components/card/#card-columns',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->cardColumns([
                    [
                        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Card title that wraps to a new line',
                        'text' => 'This is a longer card with supporting text below as ' .
                            'a natural lead-in to additional content. This content is a little bit longer.',
                    ],
                    [
                        [
                            'blockquote' => [
                                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.',
                                'Someone famous in <cite title="Source Title">Source Title</cite>',
                                ['class' => 'mb-0'],
                            ],
                        ],
                        ['class' => 'p-3'],
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
                        [
                            'blockquote' => [
                                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.',
                                'Someone famous in <cite title="Source Title">Source Title</cite>',
                                ['class' => 'mb-0'],
                                [],
                                ['class' => 'text-white'],
                            ],
                        ],
                        ['bgVariant' => 'primary', 'class' => 'text-white text-center p-3'],
                    ],
                    [
                        [
                            'title' => 'Card title',
                            'text' => [
                                'This card has a regular title and short paragraphy of text below it.',
                                '<small class="text-muted">Last updated 3 mins ago</small>',
                            ],
                        ],
                        ['class' => 'text-center'],
                    ],
                    [
                        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                    ],
                    [
                        [
                            'blockquote' => [
                                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.',
                                'Someone famous in <cite title="Source Title">Source Title</cite>',
                                ['class' => 'mb-0'],
                            ],
                        ],
                        ['class' => 'p-3 text-right'],
                    ],
                    [
                        'title' => 'Card title',
                        'text' => [
                            'This is another card with title and supporting text below. ' .
                                'This card has some additional content to make it slightly taller overall.',
                            '<small class="text-muted">Last updated 3 mins ago</small>',
                        ],
                    ],
                ]);
            },
        ],
    ],
];
