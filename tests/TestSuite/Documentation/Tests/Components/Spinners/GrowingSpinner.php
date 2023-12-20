<?php

// Documentation test config file for "Components / Spinners / Growing spinner" part
return [
    'title' => 'Growing spinner',
    'url' => '%bootstrap-url%/components/spinners/#growing-spinner',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->spinner(['type' => 'grow', 'label' => 'Loading...']);

        echo PHP_EOL . '<br/>' . PHP_EOL;

        foreach (
            [
                'primary', 'secondary', 'success', 'danger',
                'warning', 'info', 'light', 'dark',
            ] as $variant
        ) {
            echo $view->spinner([
                'variant' => $variant,
                'type' => 'grow',
                'label' => 'Loading...',
            ]) . PHP_EOL;
        }
    },
];
