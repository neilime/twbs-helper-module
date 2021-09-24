<?php

// Documentation test config file for "Components / Jumbotron" part
return [
    'title' => 'Jumbotron',
    'url' => '%bootstrap-url%/components/jumbotron/',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        echo $oView->jumbotron([
            'title' => 'Hello, world!',
            'lead' => 'This is a simple hero unit, a simple jumbotron-style component ' .
                'for calling extra attention to featured content or information.',
            '---' => ['attributes' => ['class' => 'my-4']],
            'It uses utility classes for typography and spacing to space ' .
                'content out within the larger container.',
            'button' => [
                'options' => [
                    'tag' => 'a',
                    'label' => 'Learn more',
                    'variant' => 'primary',
                    'size' => 'lg',
                ],
                'attributes' => [
                    'href' => '#',
                ]
            ],
        ]) . PHP_EOL;

        // To make the jumbotron full width, and without rounded corners, add the option fluid
        echo $oView->jumbotron(
            [
                'title' => 'Fluid jumbotron',
                'lead' => 'This is a modified jumbotron that occupies the entire horizontal space of its parent.',
            ],
            ['fluid' => true]
        );
    },
];
