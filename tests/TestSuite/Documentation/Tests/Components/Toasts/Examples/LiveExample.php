<?php

// Documentation test config file for "Components / Toasts / Examples / Live example" part
return [
    'title' => 'Live example',
    'url' => '%bootstrap-url%/components/toasts/#live-example',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Show live toast',
                'variant' => 'primary',
            ],
            'attributes' => [
                'id' => 'liveToastBtn',
            ],
        ]) . PHP_EOL;

        echo $view->toast([
            'placement' => 'bottom-right',
            'header' => [
                'image' => [
                    '/twbs-helper-module/img/docs/rounded-blue.svg',
                    ['alt' => '...', 'class' => 'rounded me-2'],
                ],
                'title' => 'Bootstrap',
                'subtitle' => '11 mins ago',
            ],
            'body' => 'Hello, world! This is a toast message.',
            'attributes' => ['id' => 'liveToast'],
        ]);
    },
];
