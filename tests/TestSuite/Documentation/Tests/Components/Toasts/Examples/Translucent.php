<?php

// Documentation test config file for "Components / Toasts / Examples / Translucent" part
return [
    'title' => 'Translucent',
    'url' => '%bootstrap-url%/components/toasts/#translucent',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo '<div class="bg-dark">';

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

        echo '</div>';
    },
];
