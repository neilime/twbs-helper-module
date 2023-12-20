<?php

// Documentation test config file for "Components / Progress / Backgrounds" part
return [
    'title' => 'Backgrounds',
    'url' => '%bootstrap-url%/components/progress/#backgrounds',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        foreach (
            [
                'success' => 25,
                'info' => 50,
                'warning' => 75,
                'danger' => 100,
            ] as $variant => $current
        ) {
            echo $view->progressBar([
                'variant' => $variant,
                'min' => 0,
                'max' => 100,
                'current' => $current,
            ]) . PHP_EOL;
        }
    },
];
