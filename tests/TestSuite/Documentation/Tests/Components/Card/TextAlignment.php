<?php

// Documentation test config file for "Components / Card / Text alignment" part
return [
    'title' => 'Text alignment',
    'url' => '%bootstrap-url%/components/card/#text-alignment',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        echo $oView->card([
            'title' => 'Special title treatment',
            'text' => 'With supporting text below as a natural lead-in to additional content.',
            '<a href="#" class="btn btn-primary">Go somewhere</a>',
        ], ['style' => 'width: 18rem;']) . PHP_EOL;

        echo '<br/>' . PHP_EOL;

        // Text center
        echo $oView->card([
            'title' => 'Special title treatment',
            'text' => 'With supporting text below as a natural lead-in to additional content.',
            '<a href="#" class="btn btn-primary">Go somewhere</a>',
        ], ['class' => 'text-center', 'style' => 'width: 18rem;']) . PHP_EOL;

        echo '<br/>' . PHP_EOL;

        // Text right
        echo $oView->card([
            'title' => 'Special title treatment',
            'text' => 'With supporting text below as a natural lead-in to additional content.',
            '<a href="#" class="btn btn-primary">Go somewhere</a>',
        ], ['class' => 'text-right', 'style' => 'width: 18rem;']);
    },
];
