<?php

// Documentation test config file for "Components / List group / With badges" part
return [
    'title' => 'With badges',
    'url' => '%bootstrap-url%/components/list-group/#with-badges',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->listGroup(
            [
                'A list item' => [
                    'badge' => [
                        14,
                        ['type' => 'pill', 'variant' => 'primary'],
                    ],
                ],
                'A second list item' => [
                    'badge' => [
                        2,
                        ['type' => 'pill', 'variant' => 'primary'],
                    ],
                ],
                'A third list item' => [
                    'badge' => [
                        1,
                        ['type' => 'pill', 'variant' => 'primary'],
                    ],
                ],
            ]
        );
    },
];
