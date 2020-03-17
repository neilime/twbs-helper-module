<?php

// Documentation test config file for "Components / List group" part
return [
    'title' => 'List group',
    'url' => '%bootstrap-url%/components/list-group/',
    'tests' => [
        [
            'title' => 'Basic example',
            'url' => '%bootstrap-url%/components/list-group/#basic-example',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->listGroup([
                    'Cras justo odio',
                    'Dapibus ac facilisis in',
                    'Morbi leo risus',
                    'Porta ac consectetur ac',
                    'Vestibulum at eros',
                ]);
            },
            'expected' => '<ul class="list-group">' . PHP_EOL .
                '    <li class="list-group-item">Cras justo odio</li>' . PHP_EOL .
                '    <li class="list-group-item">Dapibus ac facilisis in</li>' . PHP_EOL .
                '    <li class="list-group-item">Morbi leo risus</li>' . PHP_EOL .
                '    <li class="list-group-item">Porta ac consectetur ac</li>' . PHP_EOL .
                '    <li class="list-group-item">Vestibulum at eros</li>' . PHP_EOL .
                '</ul>',
        ],
        [
            'title' => 'Active items',
            'url' => '%bootstrap-url%/components/list-group/#active-items',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->listGroup([
                    'Cras justo odio' => ['active' => true],
                    'Dapibus ac facilisis in',
                    'Morbi leo risus',
                    'Porta ac consectetur ac',
                    'Vestibulum at eros',
                ]);
            },
            'expected' => '<ul class="list-group">' . PHP_EOL .
                '    <li class="active&#x20;list-group-item">Cras justo odio</li>' . PHP_EOL .
                '    <li class="list-group-item">Dapibus ac facilisis in</li>' . PHP_EOL .
                '    <li class="list-group-item">Morbi leo risus</li>' . PHP_EOL .
                '    <li class="list-group-item">Porta ac consectetur ac</li>' . PHP_EOL .
                '    <li class="list-group-item">Vestibulum at eros</li>' . PHP_EOL .
                '</ul>',
        ],
        [
            'title' => 'Disabled  items',
            'url' => '%bootstrap-url%/components/list-group/#disabled-items',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->listGroup([
                    'Cras justo odio' => ['disabled' => true],
                    'Dapibus ac facilisis in',
                    'Morbi leo risus',
                    'Porta ac consectetur ac',
                    'Vestibulum at eros',
                ]);
            },
            'expected' => '<ul class="list-group">' . PHP_EOL .
                '    <li aria-disabled="true" class="disabled&#x20;list-group-item">Cras justo odio</li>' . PHP_EOL .
                '    <li class="list-group-item">Dapibus ac facilisis in</li>' . PHP_EOL .
                '    <li class="list-group-item">Morbi leo risus</li>' . PHP_EOL .
                '    <li class="list-group-item">Porta ac consectetur ac</li>' . PHP_EOL .
                '    <li class="list-group-item">Vestibulum at eros</li>' . PHP_EOL .
                '</ul>',
        ],
        [
            'title' => 'Links and buttons',
            'url' => '%bootstrap-url%/components/list-group/#links-and-buttons',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->listGroup([
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

                echo '<br>' . PHP_EOL;

                echo $oView->listGroup([
                    'Cras justo odio' => ['active' => true],
                    'Dapibus ac facilisis in',
                    'Morbi leo risus',
                    'Porta ac consectetur ac',
                    'Vestibulum at eros' => ['disabled' => true],
                ], ['type' => 'button']);
            },
            'expected' => '<div class="list-group">' . PHP_EOL .
                '    <a class="active&#x20;list-group-item&#x20;list-group-item-action" href="&#x23;">' .
                'Cras justo odio</a>' . PHP_EOL .
                '    <a class="list-group-item&#x20;list-group-item-action" href="&#x23;">Dapibus ac facilisis in</a>' .
                PHP_EOL .
                '    <a class="list-group-item&#x20;list-group-item-action" href="&#x23;">Morbi leo risus</a>' .
                PHP_EOL .
                '    <a class="list-group-item&#x20;list-group-item-action" href="&#x23;">Porta ac consectetur ac</a>' .
                PHP_EOL .
                '    <a aria-disabled="true" ' .
                'class="disabled&#x20;list-group-item&#x20;list-group-item-action" ' .
                'href="&#x23;" tabindex="-1">Vestibulum at eros</a>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<br>' . PHP_EOL .
                '<div class="list-group">' . PHP_EOL .
                '    <button class="active&#x20;list-group-item&#x20;list-group-item-action" type="button">' .
                'Cras justo odio</button>' . PHP_EOL .
                '    <button class="list-group-item&#x20;list-group-item-action" type="button">' .
                'Dapibus ac facilisis in</button>' . PHP_EOL .
                '    <button class="list-group-item&#x20;list-group-item-action" type="button">' .
                'Morbi leo risus</button>' . PHP_EOL .
                '    <button class="list-group-item&#x20;list-group-item-action" type="button">' .
                'Porta ac consectetur ac</button>' . PHP_EOL .
                '    <button aria-disabled="true" class="list-group-item&#x20;list-group-item-action" '.
                'disabled="disabled" type="button">Vestibulum at eros</button>' . PHP_EOL .
                '</div>',
        ],
        [
            'title' => 'Flush',
            'url' => '%bootstrap-url%/components/list-group/#flush',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->listGroup(
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
            'expected' => '<ul class="list-group&#x20;list-group-flush">' . PHP_EOL .
                '    <li class="list-group-item">Cras justo odio</li>' . PHP_EOL .
                '    <li class="list-group-item">Dapibus ac facilisis in</li>' . PHP_EOL .
                '    <li class="list-group-item">Morbi leo risus</li>' . PHP_EOL .
                '    <li class="list-group-item">Porta ac consectetur ac</li>' . PHP_EOL .
                '    <li class="list-group-item">Vestibulum at eros</li>' . PHP_EOL .
                '</ul>',
        ],
        [
            'title' => 'Horizontal',
            'url' => '%bootstrap-url%/components/list-group/#horizontal',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                // Add option 'horizontal' to change the layout of list group items from vertical to horizontal
                echo $oView->listGroup(
                    [
                        'Cras justo odio',
                        'Dapibus ac facilisis in',
                        'Morbi leo risus',
                    ],
                    ['horizontal' => true]
                );

                // Alternatively, choose a responsive variant `sm|md|lg|xl`
                // to make a list group horizontal starting at that breakpoint’s
                foreach (['sm', 'md', 'lg', 'xl'] as $sBreakpoint) {
                    echo PHP_EOL . '<br>' . PHP_EOL;

                    echo $oView->listGroup(
                        [
                            'Cras justo odio',
                            'Dapibus ac facilisis in',
                            'Morbi leo risus',
                        ],
                        ['horizontal' => $sBreakpoint]
                    );
                }
            },
            'expected' => '<ul class="list-group&#x20;list-group-horizontal">' . PHP_EOL .
                '    <li class="list-group-item">Cras justo odio</li>' . PHP_EOL .
                '    <li class="list-group-item">Dapibus ac facilisis in</li>' . PHP_EOL .
                '    <li class="list-group-item">Morbi leo risus</li>' . PHP_EOL .
                '</ul>' . PHP_EOL .
                '<br>' . PHP_EOL .
                '<ul class="list-group&#x20;list-group-horizontal-sm">' . PHP_EOL .
                '    <li class="list-group-item">Cras justo odio</li>' . PHP_EOL .
                '    <li class="list-group-item">Dapibus ac facilisis in</li>' . PHP_EOL .
                '    <li class="list-group-item">Morbi leo risus</li>' . PHP_EOL .
                '</ul>' . PHP_EOL .
                '<br>' . PHP_EOL .
                '<ul class="list-group&#x20;list-group-horizontal-md">' . PHP_EOL .
                '    <li class="list-group-item">Cras justo odio</li>' . PHP_EOL .
                '    <li class="list-group-item">Dapibus ac facilisis in</li>' . PHP_EOL .
                '    <li class="list-group-item">Morbi leo risus</li>' . PHP_EOL .
                '</ul>' . PHP_EOL .
                '<br>' . PHP_EOL .
                '<ul class="list-group&#x20;list-group-horizontal-lg">' . PHP_EOL .
                '    <li class="list-group-item">Cras justo odio</li>' . PHP_EOL .
                '    <li class="list-group-item">Dapibus ac facilisis in</li>' . PHP_EOL .
                '    <li class="list-group-item">Morbi leo risus</li>' . PHP_EOL .
                '</ul>' . PHP_EOL .
                '<br>' . PHP_EOL .
                '<ul class="list-group&#x20;list-group-horizontal-xl">' . PHP_EOL .
                '    <li class="list-group-item">Cras justo odio</li>' . PHP_EOL .
                '    <li class="list-group-item">Dapibus ac facilisis in</li>' . PHP_EOL .
                '    <li class="list-group-item">Morbi leo risus</li>' . PHP_EOL .
                '</ul>',
        ],
        [
            'title' => 'Contextual classes',
            'url' => '%bootstrap-url%/components/list-group/#contextual-classes',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                // Use option 'variant' to style list items with a stateful background and color
                echo $oView->listGroup([
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

                echo '<br>' . PHP_EOL;

                // Contextual classes also work with .list-group-item-action
                echo $oView->listGroup(
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
            'expected' => '<ul class="list-group">' . PHP_EOL .
                '    <li class="list-group-item">Dapibus ac facilisis in</li>' . PHP_EOL .
                '    <li class="list-group-item&#x20;list-group-item-primary">' .
                'A simple primary list group item</li>' . PHP_EOL .
                '    <li class="list-group-item&#x20;list-group-item-secondary">' .
                'A simple secondary list group item</li>' . PHP_EOL .
                '    <li class="list-group-item&#x20;list-group-item-success">' .
                'A simple success list group item</li>' . PHP_EOL .
                '    <li class="list-group-item&#x20;list-group-item-danger">' .
                'A simple danger list group item</li>' . PHP_EOL .
                '    <li class="list-group-item&#x20;list-group-item-warning">' .
                'A simple warning list group item</li>' . PHP_EOL .
                '    <li class="list-group-item&#x20;list-group-item-info">' .
                'A simple info list group item</li>' . PHP_EOL .
                '    <li class="list-group-item&#x20;list-group-item-light">' .
                'A simple light list group item</li>' . PHP_EOL .
                '    <li class="list-group-item&#x20;list-group-item-dark">' .
                'A simple dark list group item</li>' . PHP_EOL .
                '</ul>' .
                '<br>' . PHP_EOL .
                '<div class="list-group">' . PHP_EOL .
                '    <a class="list-group-item&#x20;list-group-item-action" href="&#x23;">' .
                'Dapibus ac facilisis in</a>' . PHP_EOL .
                '    <a ' .
                'class="list-group-item&#x20;list-group-item-action&#x20;list-group-item-primary" '.
                'href="&#x23;">' .
                'A simple primary list group item</a>' . PHP_EOL .
                '    <a ' .
                'class="list-group-item&#x20;list-group-item-action&#x20;list-group-item-secondary" '.
                'href="&#x23;">' .
                'A simple secondary list group item</a>' . PHP_EOL .
                '    <a ' .
                'class="list-group-item&#x20;list-group-item-action&#x20;list-group-item-success" '.
                'href="&#x23;">' .
                'A simple success list group item</a>' . PHP_EOL .
                '    <a ' .
                'class="list-group-item&#x20;list-group-item-action&#x20;list-group-item-danger" '.
                'href="&#x23;">' .
                'A simple danger list group item</a>' . PHP_EOL .
                '    <a ' .
                'class="list-group-item&#x20;list-group-item-action&#x20;list-group-item-warning" '.
                'href="&#x23;">' .
                'A simple warning list group item</a>' . PHP_EOL .
                '    <a ' .
                'class="list-group-item&#x20;list-group-item-action&#x20;list-group-item-info" '.
                'href="&#x23;">' .
                'A simple info list group item</a>' . PHP_EOL .
                '    <a ' .
                'class="list-group-item&#x20;list-group-item-action&#x20;list-group-item-light" '.
                'href="&#x23;">' .
                'A simple light list group item</a>' . PHP_EOL .
                '    <a ' .
                'class="list-group-item&#x20;list-group-item-action&#x20;list-group-item-dark" '.
                'href="&#x23;">' .
                'A simple dark list group item</a>' . PHP_EOL .
                '</div>',
        ],
        [
            'title' => 'With badges',
            'url' => '%bootstrap-url%/components/list-group/#with-badges',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->listGroup(
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
            'expected' => '<ul class="list-group">' . PHP_EOL .
                '    <li ' .
                'class="align-items-center&#x20;d-flex&#x20;justify-content-between&#x20;list-group-item">' . PHP_EOL .
                '        Cras justo odio' . PHP_EOL .
                '        <span class="badge&#x20;badge-pill&#x20;badge-primary">14</span>' . PHP_EOL .
                '    </li>' . PHP_EOL .
                '    <li ' .
                'class="align-items-center&#x20;d-flex&#x20;justify-content-between&#x20;list-group-item">' . PHP_EOL .
                '        Dapibus ac facilisis in' . PHP_EOL .
                '        <span class="badge&#x20;badge-pill&#x20;badge-primary">2</span>' . PHP_EOL .
                '    </li>' . PHP_EOL .
                '    <li ' .
                'class="align-items-center&#x20;d-flex&#x20;justify-content-between&#x20;list-group-item">' . PHP_EOL .
                '        Morbi leo risus' . PHP_EOL .
                '        <span class="badge&#x20;badge-pill&#x20;badge-primary">1</span>' . PHP_EOL .
                '    </li>' . PHP_EOL .
                '</ul>',
        ],
        [
            'title' => 'Custom content',
            'url' => '%bootstrap-url%/components/list-group/#custom-content',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->listGroup(
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
            'expected' => '<div class="list-group">' . PHP_EOL .
                '    <a class="active&#x20;list-group-item&#x20;list-group-item-action" href="&#x23;">' . PHP_EOL .
                '        <div class="d-flex w-100 justify-content-between">' . PHP_EOL .
                '            <h5 class="mb-1">List group item heading</h5>' . PHP_EOL .
                '            <small>3 days ago</small>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. ' .
                'Maecenas sed diam eget risus varius blandit.</p>' . PHP_EOL .
                '        <small>Donec id elit non mi porta.</small>' . PHP_EOL .
                '    </a>' . PHP_EOL .
                '    <a class="list-group-item&#x20;list-group-item-action" href="&#x23;">' . PHP_EOL .
                '        <div class="d-flex w-100 justify-content-between">' . PHP_EOL .
                '            <h5 class="mb-1">List group item heading</h5>' . PHP_EOL .
                '            <small>3 days ago</small>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. ' .
                'Maecenas sed diam eget risus varius blandit.</p>' . PHP_EOL .
                '        <small>Donec id elit non mi porta.</small>' . PHP_EOL .
                '    </a>' . PHP_EOL .
                '    <a class="list-group-item&#x20;list-group-item-action" href="&#x23;">' . PHP_EOL .
                '        <div class="d-flex w-100 justify-content-between">' . PHP_EOL .
                '            <h5 class="mb-1">List group item heading</h5>' . PHP_EOL .
                '            <small>3 days ago</small>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. ' .
                'Maecenas sed diam eget risus varius blandit.</p>' . PHP_EOL .
                '        <small>Donec id elit non mi porta.</small>' . PHP_EOL .
                '    </a>' . PHP_EOL .
                '</div>',
        ],
    ],
];
