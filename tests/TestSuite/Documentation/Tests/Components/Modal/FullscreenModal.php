<?php

// Documentation test config file for "Components / Modal / Fullscreen Modal" part
return [
    'title' => 'Fullscreen Modal',
    'url' => '%bootstrap-url%/components/modal/#fullscreen-modal',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

        $fullscreenSizes = ['sm', 'md', 'lg', 'xl', 'xxl'];

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Full screen',
                'variant' => 'primary',
            ],
            'attributes' => [
                'data-bs-toggle' => 'modal',
                'data-bs-target' => '#exampleModalFullscreen',
            ],
        ]) . PHP_EOL;

        foreach ($fullscreenSizes as $size) {
            echo $view->formButton()->renderSpec([
                'options' => [
                    'label' => 'Full screen below ' . $size,
                    'variant' => 'primary',
                ],
                'attributes' => [
                    'data-bs-toggle' => 'modal',
                    'data-bs-target' => '#exampleModalFullscreen' . ucfirst($size),
                ],
            ]) . PHP_EOL;
        }

        echo $view->modal([
            'title' => [
                'content' => 'Full screen modal',
                'attributes' => ['id' => 'exampleModalFullscreenLabel', 'class' => 'h4'],
            ],
            '...',
            'footer' => [
                'button' => [
                    [
                        'options' => [
                            'label' => 'Close',
                            'variant' => 'secondary',
                        ],
                        'attributes' => [
                            'data-bs-dismiss' => 'modal',
                        ],
                    ],
                ],
            ],
        ], [
            'hidden' => true,
            'fade' => true,
            'fullscreen' => true,
            'id' => 'exampleModalFullscreen',
        ]) . PHP_EOL;

        foreach ($fullscreenSizes as $size) {
            echo $view->modal([
                'title' => [
                    'content' => 'Full screen below ' . $size,
                    'attributes' => ['id' => 'exampleModalFullscreen' . ucfirst($size) . 'Label', 'class' => 'h4'],
                ],
                '...',
                'footer' => [
                    'button' => [
                        [
                            'options' => [
                                'label' => 'Close',
                                'variant' => 'secondary',
                            ],
                            'attributes' => [
                                'data-bs-dismiss' => 'modal',
                            ],
                        ],
                    ],
                ],
            ], [
                'hidden' => true,
                'fade' => true,
                'fullscreen' => $size,
                'id' => 'exampleModalFullscreen' . ucfirst($size),
            ]) . PHP_EOL;
        }
    },
];
