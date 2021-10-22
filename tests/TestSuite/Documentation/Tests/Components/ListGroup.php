<?php

// Documentation test config file for "Components / List group" part
return [
    'title' => 'List group',
    'url' => '%bootstrap-url%/components/list-group/',
    'tests' => [
        [
            'title' => 'Basic example',
            'url' => '%bootstrap-url%/components/list-group/#basic-example',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->listGroup([
                    'Cras justo odio',
                    'Dapibus ac facilisis in',
                    'Morbi leo risus',
                    'Porta ac consectetur ac',
                    'Vestibulum at eros',
                ]);
            },
        ],
        [
            'title' => 'Active items',
            'url' => '%bootstrap-url%/components/list-group/#active-items',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->listGroup([
                    'Cras justo odio' => ['active' => true],
                    'Dapibus ac facilisis in',
                    'Morbi leo risus',
                    'Porta ac consectetur ac',
                    'Vestibulum at eros',
                ]);
            },
        ],
        [
            'title' => 'Disabled  items',
            'url' => '%bootstrap-url%/components/list-group/#disabled-items',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->listGroup([
                    'Cras justo odio' => ['disabled' => true],
                    'Dapibus ac facilisis in',
                    'Morbi leo risus',
                    'Porta ac consectetur ac',
                    'Vestibulum at eros',
                ]);
            },
        ],
        [
            'title' => 'Links and buttons',
            'url' => '%bootstrap-url%/components/list-group/#links-and-buttons',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->listGroup([
                    'Cras justo odio' => [
                        'active' => true,
                        'attributes' => ['href' => '#'],
                    ],
                    'Dapibus ac facilisis in' => ['attributes' => ['href' => '#']],
                    'Morbi leo risus' => ['attributes' => ['href' => '#']],
                    'Porta ac consectetur ac' => ['attributes' => ['href' => '#']],
                    'Vestibulum at eros' => [
                        'disabled' => true,
                        'attributes' => ['href' => '#'],
                    ],
                ], ['type' => 'action']) . PHP_EOL;

                echo '<br/>' . PHP_EOL;

                echo $view->listGroup([
                    'Cras justo odio' => ['active' => true],
                    'Dapibus ac facilisis in',
                    'Morbi leo risus',
                    'Porta ac consectetur ac',
                    'Vestibulum at eros' => ['disabled' => true],
                ], ['type' => 'button']);
            },
        ],
        [
            'title' => 'Flush',
            'url' => '%bootstrap-url%/components/list-group/#flush',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->listGroup(
                    [
                        'Cras justo odio',
                        'Dapibus ac facilisis in',
                        'Morbi leo risus',
                        'Porta ac consectetur ac',
                        'Vestibulum at eros',
                    ],
                    ['flush' => true]
                );
            },
        ],
        [
            'title' => 'Horizontal',
            'url' => '%bootstrap-url%/components/list-group/#horizontal',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                // Add option 'horizontal' to change the layout of list group items from vertical to horizontal
                echo $view->listGroup(
                    [
                        'Cras justo odio',
                        'Dapibus ac facilisis in',
                        'Morbi leo risus',
                    ],
                    ['horizontal' => true]
                );

                // Alternatively, choose a responsive variant `sm|md|lg|xl`
                // to make a list group horizontal starting at that breakpoint’s
                foreach (['sm', 'md', 'lg', 'xl'] as $breakpoint) {
                    echo PHP_EOL . '<br/>' . PHP_EOL;

                    echo $view->listGroup(
                        [
                            'Cras justo odio',
                            'Dapibus ac facilisis in',
                            'Morbi leo risus',
                        ],
                        ['horizontal' => $breakpoint]
                    );
                }
            },
        ],
        [
            'title' => 'Contextual classes',
            'url' => '%bootstrap-url%/components/list-group/#contextual-classes',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                // Use option 'variant' to style list items with a stateful background and color
                echo $view->listGroup([
                    'Dapibus ac facilisis in',
                    'A simple primary list group item' => ['variant' => 'primary'],
                    'A simple secondary list group item' => ['variant' => 'secondary'],
                    'A simple success list group item' => ['variant' => 'success'],
                    'A simple danger list group item' => ['variant' => 'danger'],
                    'A simple warning list group item' => ['variant' => 'warning'],
                    'A simple info list group item' => ['variant' => 'info'],
                    'A simple light list group item' => ['variant' => 'light'],
                    'A simple dark list group item' => ['variant' => 'dark'],
                ]);

                echo '<br/>' . PHP_EOL;

                // Contextual classes also work with .list-group-item-action
                echo $view->listGroup(
                    [
                        'Dapibus ac facilisis in' => ['attributes' => ['href' => '#']],
                        'A simple primary list group item' => [
                            'variant' => 'primary',
                            'attributes' => ['href' => '#'],
                        ],
                        'A simple secondary list group item' => [
                            'variant' => 'secondary',
                            'attributes' => ['href' => '#'],
                        ],
                        'A simple success list group item' => [
                            'variant' => 'success',
                            'attributes' => ['href' => '#'],
                        ],
                        'A simple danger list group item' => [
                            'variant' => 'danger',
                            'attributes' => ['href' => '#'],
                        ],
                        'A simple warning list group item' => [
                            'variant' => 'warning',
                            'attributes' => ['href' => '#'],
                        ],
                        'A simple info list group item' => [
                            'variant' => 'info',
                            'attributes' => ['href' => '#'],
                        ],
                        'A simple light list group item' => [
                            'variant' => 'light',
                            'attributes' => ['href' => '#'],
                        ],
                        'A simple dark list group item' => [
                            'variant' => 'dark',
                            'attributes' => ['href' => '#'],
                        ],
                    ],
                    ['type' => 'action']
                );
            },
        ],
        [
            'title' => 'With badges',
            'url' => '%bootstrap-url%/components/list-group/#with-badges',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->listGroup(
                    [
                        'Cras justo odio' => [
                            'badge' => [
                                14,
                                ['type' => 'pill', 'variant' => 'primary'],
                            ],
                        ],
                        'Dapibus ac facilisis in' => [
                            'badge' => [
                                2,
                                ['type' => 'pill', 'variant' => 'primary'],
                            ],
                        ],
                        'Morbi leo risus' => [
                            'badge' => [
                                1,
                                ['type' => 'pill', 'variant' => 'primary'],
                            ],
                        ],
                    ]
                );
            },
        ],
        [
            'title' => 'Custom content',
            'url' => '%bootstrap-url%/components/list-group/#custom-content',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->listGroup(
                    [
                        [
                            'content' => '<div class="d-flex w-100 justify-content-between">' . PHP_EOL .
                                '    <h5 class="mb-1">List group item heading</h5>' . PHP_EOL .
                                '    <small>3 days ago</small>' . PHP_EOL .
                                '</div>' . PHP_EOL .
                                '<p class="mb-1">Donec id elit non mi porta gravida at eget metus. ' .
                                'Maecenas sed diam eget risus varius blandit.</p>' . PHP_EOL .
                                '<small>Donec id elit non mi porta.</small>',
                            'attributes' => ['href' => '#'],
                            'active' => true,
                        ],
                        [
                            'content' => '<div class="d-flex w-100 justify-content-between">' . PHP_EOL .
                                '    <h5 class="mb-1">List group item heading</h5>' . PHP_EOL .
                                '    <small>3 days ago</small>' . PHP_EOL .
                                '</div>' . PHP_EOL .
                                '<p class="mb-1">Donec id elit non mi porta gravida at eget metus. ' .
                                'Maecenas sed diam eget risus varius blandit.</p>' . PHP_EOL .
                                '<small>Donec id elit non mi porta.</small>',
                            'attributes' => ['href' => '#'],
                        ],
                        [
                            'content' => '<div class="d-flex w-100 justify-content-between">' . PHP_EOL .
                                '    <h5 class="mb-1">List group item heading</h5>' . PHP_EOL .
                                '    <small>3 days ago</small>' . PHP_EOL .
                                '</div>' . PHP_EOL .
                                '<p class="mb-1">Donec id elit non mi porta gravida at eget metus. ' .
                                'Maecenas sed diam eget risus varius blandit.</p>' . PHP_EOL .
                                '<small>Donec id elit non mi porta.</small>',
                            'attributes' => ['href' => '#'],
                        ],
                    ],
                    ['type' => 'action']
                );
            },
        ],
    ],
];
