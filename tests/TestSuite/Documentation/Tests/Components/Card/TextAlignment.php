<?php

// Documentation test config file for "Components / Card / Text alignment" part
return [
    'title' => 'Text alignment',
    'url' => '%bootstrap-url%/components/card/#text-alignment',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->card([
            'title' => 'Special title treatment',
            'text' => 'With supporting text below as a natural lead-in to additional content.',
            '<a href="#" class="btn btn-primary">Go somewhere</a>',
        ], ['style' => 'width: 18rem;']) . PHP_EOL;

        echo '<br/>' . PHP_EOL;

        // Text center
        echo $view->card([
            'title' => 'Special title treatment',
            'text' => 'With supporting text below as a natural lead-in to additional content.',
            '<a href="#" class="btn btn-primary">Go somewhere</a>',
        ], ['class' => 'text-center', 'style' => 'width: 18rem;']) . PHP_EOL;

        echo '<br/>' . PHP_EOL;

        // Text end
        echo $view->card([
            'title' => 'Special title treatment',
            'text' => 'With supporting text below as a natural lead-in to additional content.',
            '<a href="#" class="btn btn-primary">Go somewhere</a>',
        ], ['class' => 'text-end', 'style' => 'width: 18rem;']);
    },
];
