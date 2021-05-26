<?php

// Documentation test config file for "Components / Toasts / Accessibility" part
return [
    'title' => 'Accessibility',
    'url' => '%bootstrap-url%/components/toasts/#accessibility',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->toast([
            'fade' => true,
            'show' => true,
            'autohide' => false,
            'header' => [
                'image' => [
                    '/twbs-helper-module/img/docs/rounded-blue.svg',
                    ['alt' => '...', 'class' => 'rounded me-2'],
                ],
                'title' => 'Bootstrap',
                'subtitle' => '11 mins ago',
            ],
            'body' => 'Hello, world! This is a toast message.',
        ]);
    },
];
