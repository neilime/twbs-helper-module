<?php

// Documentation test config file for "Components / Card / Horizontal" part
return [
    'title' => 'Horizontal',
    'url' => '%bootstrap-url%/components/card/#horizontal',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->card([
            'row' => [
                [
                    [
                        [
                            'image' => [
                                '/twbs-helper-module/img/docs/image.svg',
                                ['alt' => '...', 'fluid' => true, 'rounded' => 'start'],
                            ],
                        ],
                        ['column' => 'md-4']
                    ],
                    [
                        [
                            'title' => 'Card title',
                            'text' => [
                                'This is a wider card with supporting text below as a natural lead-in to ' .
                                    'additional content. This content is a little bit longer.',
                                '<small class="text-muted">Last updated 3 mins ago</small>',
                            ],
                        ],
                        ['column' => 'md-8'],
                    ],
                ],
                ['class' => 'g-0'],
            ]
        ], ['class' => 'mb-3', 'style' => 'max-width: 540px;']);
    },
];
