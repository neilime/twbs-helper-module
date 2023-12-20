<?php

// Documentation test config file for "Components / Card / Images" part
return [
    'title' => 'Images',
    'url' => '%bootstrap-url%/components/card/#images-1',
    'tests' => [
        [
            'title' => 'Image caps',
            'url' => '%bootstrap-url%/components/card/#image-caps',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->card([
                    'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...']],
                    'title' => 'Card title',
                    'text' => [
                        'This is a wider card with supporting text below as a natural lead-in to additional content. ' .
                            'This content is a little bit longer.',
                        '<small class="text-muted">Last updated 3 mins ago</small>',
                    ],
                ], ['class' => 'mb-3']) . PHP_EOL;

                echo $view->card([
                    'title' => 'Card title',
                    'text' => [
                        'This is a wider card with supporting text below as a natural lead-in to additional content. ' .
                            'This content is a little bit longer.',
                        '<small class="text-muted">Last updated 3 mins ago</small>',
                    ],
                    'image_bottom' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...']],
                ]);
            },
        ],
        [
            'title' => 'Image overlays',
            'url' => '%bootstrap-url%/components/card/#image-overlays',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->card([
                    'overlay' => [
                        'img' => ['/twbs-helper-module/img/docs/card-image.svg', ['alt' => '...']],
                        'title' => 'Card title',
                        'text' => [
                            'This is a wider card with supporting text below as a natural ' .
                                'lead-in to additional content. ' .
                                'This content is a little bit longer.',
                            'Last updated 3 mins ago',
                        ],
                    ],
                ], ['bg_variant' => 'dark', 'class' => 'text-white']);
            },
        ],
    ],
];
