<?php

// Documentation test config file for "Components / List group / Numbered" part
return [
    'title' => 'Numbered',
    'url' => '%bootstrap-url%/components/list-group/#numbered',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->listGroup(
            [
                'A list item',
                'A list item',
                'A list item',
            ],
            ['numbered' => true]
        );

        echo PHP_EOL . '<br/>' . PHP_EOL;

        echo $view->listGroup(
            [
                [
                    'content' => '<div class="ms-2 me-auto">' . PHP_EOL .
                        '<div class="fw-bold">Subheading</div>' . PHP_EOL .
                        'Content for list item' . PHP_EOL .
                        '</div>',
                    'badge' => [
                        14,
                        ['type' => 'pill', 'variant' => 'primary'],
                    ],
                ],
                [
                    'content' => '<div class="ms-2 me-auto">' . PHP_EOL .
                        '<div class="fw-bold">Subheading</div>' . PHP_EOL .
                        'Content for list item' . PHP_EOL .
                        '</div>',
                    'badge' => [
                        14,
                        ['type' => 'pill', 'variant' => 'primary'],
                    ],
                ],
                [
                    'content' => '<div class="ms-2 me-auto">' . PHP_EOL .
                        '<div class="fw-bold">Subheading</div>' . PHP_EOL .
                        'Content for list item' . PHP_EOL .
                        '</div>',
                    'badge' => [
                        14,
                        ['type' => 'pill', 'variant' => 'primary'],
                    ],
                ],
            ],
            ['numbered' => true]
        );
    },
];
