<?php

// Documentation test config file for "Components / Card / Navigation" part
return [
    'title' => 'Navigation',
    'url' => '%bootstrap-url%/components/card/#navigation',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        // Nav tabs (pages defined by a \Laminas\Navigation\Navigation object as container)
        echo $oView->card([
            'nav' => new \Laminas\Navigation\Navigation(
                [
                    ['label' => 'Active', 'uri' => '#', 'active' => true,],
                    ['label' => 'Link', 'uri' => '#',],
                    ['label' => 'Link', 'uri' => '#',],
                    ['label' => 'Disabled', 'uri' => '#', 'visible' => false,],
                ]
            ),
            'title' => 'Special title treatment',
            'text' => 'With supporting text below as a natural lead-in to additional content.',
            '<a href="#" class="btn btn-primary">Go somewhere</a>',
        ], ['class' => 'text-center']);

        echo PHP_EOL . '<br/>' . PHP_EOL;

        // Nav pills (pages defined by an array as  container)
        echo $oView->card([
            'nav' => [
                'options' => ['pills' => true],
                'container' => [
                    ['label' => 'Active', 'uri' => '#', 'active' => true,],
                    ['label' => 'Link', 'uri' => '#',],
                    ['label' => 'Link', 'uri' => '#',],
                    ['label' => 'Disabled', 'uri' => '#', 'visible' => false,],
                ]
            ],
            'title' => 'Special title treatment',
            'text' => 'With supporting text below as a natural lead-in to additional content.',
            '<a href="#" class="btn btn-primary">Go somewhere</a>',
        ], ['class' => 'text-center']);
    },
];
