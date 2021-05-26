<?php

// Documentation test config file for "Components / Toasts / Examples / Color schemes" part
return [
    'title' => 'Color schemes',
    'url' => '%bootstrap-url%/components/toasts/#custom-content',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->toast([
            'fade' => true,
            'show' => true,
            'body' => 'Hello, world! This is a toast message.',
            'close' => ['attributes' => ['class' => 'btn-close-white']],
            'attributes' => [
                'class' => 'text-white bg-primary border-0',
            ],
        ]);
    },
];
