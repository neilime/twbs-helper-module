<?php

// Documentation test config file for "Components / Progress / How it works" part
return [
    'title' => 'How it works',
    'url' => '%bootstrap-url%/components/progress/#how-it-works',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

        // Display progressbar at 0%
        echo $view->progressBar(0, 100) . PHP_EOL;

        // Display progress bar at 25%
        echo $view->progressBar(0, 100, 25) . PHP_EOL;

        // Display progress bar at 50%
        echo $view->progressBar(0, 100, 50) . PHP_EOL;

        // Display progress bar at 75%
        echo $view->progressBar(0, 100, 75) . PHP_EOL;

        // Display progress bar at 100%
        echo $view->progressBar(0, 100, 100);
    },
];
