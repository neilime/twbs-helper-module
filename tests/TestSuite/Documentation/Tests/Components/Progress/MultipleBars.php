<?php

// Documentation test config file for "Components / Progress / Multiple bars" part
return [
    'title' => 'Multiple bars',
    'url' => '%bootstrap-url%/components/progress/#multiple-bars',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->progressBarGroup([
            ['min' => 0, 'max' => 100, 'current' => 15],
            ['variant' => 'success', 'min' => 0, 'max' => 100, 'current' => 30],
            ['variant' => 'info', 'min' => 0, 'max' => 100, 'current' => 20],
        ]);
    },
];
