<?php

// Documentation test config file for "Components / Toasts / Examples / Basic" part
return [
    'title' => 'Basic',
    'url' => '%bootstrap-url%/components/toasts/#basic',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->toast([
            'fade' => true,
            'show' => true,
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
