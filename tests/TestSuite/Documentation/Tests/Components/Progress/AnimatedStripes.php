<?php

// Documentation test config file for "Components / Progress / Animated stripes" part
return [
    'title' => 'Animated stripes',
    'url' => '%bootstrap-url%/components/progress/#animated-stripes',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->progressBar([
            'striped' => true,
            'animated' => true,
            'current' => 75,
            'min' => 0,
            'max' => 100,
        ]);
    },
];
