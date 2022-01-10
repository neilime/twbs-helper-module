<?php

// Documentation test config file for "Components / Progress / Striped" part
return [
    'title' => 'Striped',
    'url' => '%bootstrap-url%/components/progress/#striped',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        foreach (
            [
            null => 10,
            'success' => 25,
            'info' => 50,
            'warning' => 75,
            'danger' => 100,
            ] as $variant => $current
        ) {
            echo $view->progressBar([
                'striped' => true,
                'variant' => $variant,
                'current' => $current,
                'min' => 0,
                'max' => 100,
            ]) . PHP_EOL;
        }
    },
];
