<?php

// Documentation test config file for "Components / Toasts / Examples / Stacking" part
return [
    'title' => 'Stacking',
    'url' => '%bootstrap-url%/components/toasts/#stacking',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->toastStack([
            [
                'fade' => true,
                'show' => true,
                'header' => [
                    'image' => [
                        '/twbs-helper-module/img/docs/rounded-blue.svg',
                        ['alt' => '...', 'class' => 'rounded me-2'],
                    ],
                    'title' => 'Bootstrap',
                    'subtitle' => 'just now',
                ],
                'body' => 'See? Just like this.',
            ], [
                'fade' => true,
                'show' => true,
                'header' => [
                    'image' => [
                        '/twbs-helper-module/img/docs/rounded-blue.svg',
                        ['alt' => '...', 'class' => 'rounded me-2'],
                    ],
                    'title' => 'Bootstrap',
                    'subtitle' => '2 seconds ago',
                ],
                'body' => 'Heads up, toasts will stack automatically',
            ],
        ]);
    },
];
