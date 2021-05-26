<?php

// Documentation test config file for "Components / Spinners / Border spinner" part
return [
    'title' => 'Border spinner',
    'url' => '%bootstrap-url%/components/spinners/#border-spinner',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->spinner('Loading...');
    },
    'tests' => [
        [
            'title' => 'Colors',
            'url' => '%bootstrap-url%/components/spinners/#colors',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                foreach (
                    [
                    'primary', 'secondary', 'success', 'danger',
                    'warning', 'info', 'light', 'dark',
                    ] as $variant
                ) {
                    echo $view->spinner([
                        'variant' => $variant,
                        'label' => 'Loading...',
                    ]) . PHP_EOL;
                }
            },
        ],
    ],
];
