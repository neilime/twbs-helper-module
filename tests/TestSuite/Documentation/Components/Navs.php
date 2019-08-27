<?php

// Documentation test config file for "Components / Navs" part
return [
    'title' => 'Navs',
    'url' => '%bootstrap-url%/components/navs/',
    'tests' => [
        [
            'title' => 'Base nav',
            'url' => '%bootstrap-url%/components/navs/#base-nav',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->navigation()->menu(new \Zend\Navigation\Navigation([
                    ['label' => 'Active', 'uri' => '#', 'active' => true,],
                    ['label' => 'Link', 'uri' => '#',],
                    ['label' => 'Link', 'uri' => '#',],
                    ['label' => 'Disabled', 'uri' => '#', 'visible' => false,],
                ])) . PHP_EOL;

                echo $oView->navigation()->menu()->renderMenu(new \Zend\Navigation\Navigation([
                    ['label' => 'Active', 'uri' => '#', 'active' => true,],
                    ['label' => 'Link', 'uri' => '#',],
                    ['label' => 'Link', 'uri' => '#',],
                    ['label' => 'Disabled', 'uri' => '#', 'visible' => false,],
                ]), ['list' => false]);
            },
            'expected' => '<ul class="nav">' . PHP_EOL .
                '    <li class="&#x20;nav-item">' . PHP_EOL .
                '        <a class="nav-link&#x20;active" href="&#x23;">Active</a>' . PHP_EOL .
                '    </li>' . PHP_EOL .
                '    <li class="nav-item">' . PHP_EOL .
                '        <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
                '    </li>' . PHP_EOL .
                '    <li class="nav-item">' . PHP_EOL .
                '        <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
                '    </li>' . PHP_EOL .
                '    <li class="nav-item">' . PHP_EOL .
                '        <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">' .
                'Disabled' .
                '</a>' . PHP_EOL .
                '    </li>' . PHP_EOL .
                '</ul>' . PHP_EOL .
                '<nav class="nav">' . PHP_EOL .
                '    <a class="nav-link&#x20;active" href="&#x23;">Active</a>' . PHP_EOL .
                '    <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
                '    <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
                '    <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">' .
                'Disabled</a>' . PHP_EOL .
                '</nav>',
        ],
        [
            'title' => 'Available styles',
            'url' => '%bootstrap-url%/components/navs/#available-styles',
            'tests' => [
                [
                    'title' => 'Horizontal alignment',
                    'url' => '%bootstrap-url%/components/navs/#horizontal-alignment',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        // Centered with option 'center'
                        echo $oView->navigation()->menu()->renderMenu(new \Zend\Navigation\Navigation([
                            ['label' => 'Active', 'uri' => '#', 'active' => true,],
                            ['label' => 'Link', 'uri' => '#',],
                            ['label' => 'Link', 'uri' => '#',],
                            ['label' => 'Disabled', 'uri' => '#', 'visible' => false,],
                        ]), ['centered' => true]) . PHP_EOL;

                        // Right-aligned with option 'right_aligned'
                        echo $oView->navigation()->menu()->renderMenu(new \Zend\Navigation\Navigation([
                            ['label' => 'Active', 'uri' => '#', 'active' => true,],
                            ['label' => 'Link', 'uri' => '#',],
                            ['label' => 'Link', 'uri' => '#',],
                            ['label' => 'Disabled', 'uri' => '#', 'visible' => false,],
                        ]), ['right_aligned' => true]);
                    },
                    'expected' => '<ul class="justify-content-center&#x20;nav">' . PHP_EOL .
                        '    <li class="&#x20;nav-item">' . PHP_EOL .
                        '        <a class="nav-link&#x20;active" href="&#x23;">Active</a>' . PHP_EOL .
                        '    </li>' . PHP_EOL .
                        '    <li class="nav-item">' . PHP_EOL .
                        '        <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
                        '    </li>' . PHP_EOL .
                        '    <li class="nav-item">' . PHP_EOL .
                        '        <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
                        '    </li>' . PHP_EOL .
                        '    <li class="nav-item">' . PHP_EOL .
                        '        <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">' .
                        'Disabled' .
                        '</a>' . PHP_EOL .
                        '    </li>' . PHP_EOL .
                        '</ul>' . PHP_EOL .
                        '<ul class="justify-content-end&#x20;nav">' . PHP_EOL .
                        '    <li class="&#x20;nav-item">' . PHP_EOL .
                        '        <a class="nav-link&#x20;active" href="&#x23;">Active</a>' . PHP_EOL .
                        '    </li>' . PHP_EOL .
                        '    <li class="nav-item">' . PHP_EOL .
                        '        <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
                        '    </li>' . PHP_EOL .
                        '    <li class="nav-item">' . PHP_EOL .
                        '        <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
                        '    </li>' . PHP_EOL .
                        '    <li class="nav-item">' . PHP_EOL .
                        '        <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">' .
                        'Disabled' .
                        '</a>' . PHP_EOL .
                        '    </li>' . PHP_EOL .
                        '</ul>',
                ],
                [
                    'title' => 'Vertical',
                    'url' => '%bootstrap-url%/components/navs/#vertical',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->navigation()->menu()->renderMenu(
                            new \Zend\Navigation\Navigation([
                                ['label' => 'Active', 'uri' => '#', 'active' => true,],
                                ['label' => 'Link', 'uri' => '#',],
                                ['label' => 'Link', 'uri' => '#',],
                                ['label' => 'Disabled', 'uri' => '#', 'visible' => false,],
                            ]),
                            ['vertical' => true]
                        ) . PHP_EOL;

                        echo $oView->navigation()->menu()->renderMenu(
                            new \Zend\Navigation\Navigation([
                                ['label' => 'Active', 'uri' => '#', 'active' => true],
                                ['label' => 'Link', 'uri' => '#',],
                                ['label' => 'Link', 'uri' => '#',],
                                ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
                            ]),
                            [
                                'vertical' => true,
                                'list' => false,
                            ]
                        );
                    },
                    'expected' => '<ul class="flex-column&#x20;nav">' . PHP_EOL .
                        '    <li class="&#x20;nav-item">' . PHP_EOL .
                        '        <a class="nav-link&#x20;active" href="&#x23;">Active</a>' . PHP_EOL .
                        '    </li>' . PHP_EOL .
                        '    <li class="nav-item">' . PHP_EOL .
                        '        <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
                        '    </li>' . PHP_EOL .
                        '    <li class="nav-item">' . PHP_EOL .
                        '        <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
                        '    </li>' . PHP_EOL .
                        '    <li class="nav-item">' . PHP_EOL .
                        '        <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">' .
                        'Disabled' .
                        '</a>' . PHP_EOL .
                        '    </li>' . PHP_EOL .
                        '</ul>' . PHP_EOL .
                        '<nav class="flex-column&#x20;nav">' . PHP_EOL .
                        '    <a class="nav-link&#x20;active" href="&#x23;">Active</a>' . PHP_EOL .
                        '    <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
                        '    <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
                        '    <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">' .
                        'Disabled</a>' . PHP_EOL .
                        '</nav>',
                ],
                [
                    'title' => 'Tabs',
                    'url' => '%bootstrap-url%/components/navs/#tabs',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->navigation()->menu()->renderMenu(new \Zend\Navigation\Navigation([
                            ['label' => 'Active', 'uri' => '#', 'active' => true,],
                            ['label' => 'Link', 'uri' => '#',],
                            ['label' => 'Link', 'uri' => '#',],
                            ['label' => 'Disabled', 'uri' => '#', 'visible' => false,],
                        ]), ['tabs' => true]);
                    },
                    'expected' => '<ul class="nav&#x20;nav-tabs">' . PHP_EOL .
                        '    <li class="&#x20;nav-item">' . PHP_EOL .
                        '        <a class="nav-link&#x20;active" href="&#x23;">Active</a>' . PHP_EOL .
                        '    </li>' . PHP_EOL .
                        '    <li class="nav-item">' . PHP_EOL .
                        '        <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
                        '    </li>' . PHP_EOL .
                        '    <li class="nav-item">' . PHP_EOL .
                        '        <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
                        '    </li>' . PHP_EOL .
                        '    <li class="nav-item">' . PHP_EOL .
                        '        <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">' .
                        'Disabled' .
                        '</a>' . PHP_EOL .
                        '    </li>' . PHP_EOL .
                        '</ul>',
                ],
                [
                    'title' => 'Pills',
                    'url' => '%bootstrap-url%/components/navs/#pills',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->navigation()->menu()->renderMenu(new \Zend\Navigation\Navigation([
                            ['label' => 'Active', 'uri' => '#', 'active' => true,],
                            ['label' => 'Link', 'uri' => '#',],
                            ['label' => 'Link', 'uri' => '#',],
                            ['label' => 'Disabled', 'uri' => '#', 'visible' => false,],
                        ]), ['pills' => true]);
                    },
                    'expected' => '<ul class="nav&#x20;nav-pills">' . PHP_EOL .
                        '    <li class="&#x20;nav-item">' . PHP_EOL .
                        '        <a class="nav-link&#x20;active" href="&#x23;">Active</a>' . PHP_EOL .
                        '    </li>' . PHP_EOL .
                        '    <li class="nav-item">' . PHP_EOL .
                        '        <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
                        '    </li>' . PHP_EOL .
                        '    <li class="nav-item">' . PHP_EOL .
                        '        <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
                        '    </li>' . PHP_EOL .
                        '    <li class="nav-item">' . PHP_EOL .
                        '        <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">' .
                        'Disabled' .
                        '</a>' . PHP_EOL .
                        '    </li>' . PHP_EOL .
                        '</ul>',
                ],
                [
                    'title' => 'Fill and justify',
                    'url' => '%bootstrap-url%/components/navs/#fill-and-justify',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->navigation()->menu()->renderMenu(
                            new \Zend\Navigation\Navigation([
                                ['label' => 'Active', 'uri' => '#', 'active' => true,],
                                ['label' => 'Much longer nav link', 'uri' => '#',],
                                ['label' => 'Link', 'uri' => '#',],
                                ['label' => 'Disabled', 'uri' => '#', 'visible' => false,],
                            ]),
                            [
                                'pills' => true,
                                'fill' => true,
                            ]
                        ) . PHP_EOL;

                        echo $oView->navigation()->menu()->renderMenu(
                            new \Zend\Navigation\Navigation([
                                ['label' => 'Active', 'uri' => '#', 'active' => true],
                                ['label' => 'Much longer nav link', 'uri' => '#',],
                                ['label' => 'Link', 'uri' => '#',],
                                ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
                            ]),
                            [
                                'pills' => true,
                                'fill' => true,
                                'list' => false,
                            ]
                        ) . PHP_EOL;

                        echo $oView->navigation()->menu()->renderMenu(
                            new \Zend\Navigation\Navigation([
                                ['label' => 'Active', 'uri' => '#', 'active' => true],
                                ['label' => 'Much longer nav link', 'uri' => '#',],
                                ['label' => 'Link', 'uri' => '#',],
                                ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
                            ]),
                            [
                                'pills' => true,
                                'justified' => true,
                                'list' => false,
                            ]
                        );
                    },
                    'expected' => '<ul class="nav&#x20;nav-fill&#x20;nav-pills">' . PHP_EOL .
                        '    <li class="&#x20;nav-item">' . PHP_EOL .
                        '        <a class="nav-link&#x20;active" href="&#x23;">Active</a>' . PHP_EOL .
                        '    </li>' . PHP_EOL .
                        '    <li class="nav-item">' . PHP_EOL .
                        '        <a class="nav-link" href="&#x23;">Much longer nav link</a>' . PHP_EOL .
                        '    </li>' . PHP_EOL .
                        '    <li class="nav-item">' . PHP_EOL .
                        '        <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
                        '    </li>' . PHP_EOL .
                        '    <li class="nav-item">' . PHP_EOL .
                        '        <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">' .
                        'Disabled' .
                        '</a>' . PHP_EOL .
                        '    </li>' . PHP_EOL .
                        '</ul>' . PHP_EOL .
                        '<nav class="nav&#x20;nav-fill&#x20;nav-pills">' . PHP_EOL .
                        '    <a class="nav-item&#x20;nav-link&#x20;active" href="&#x23;">Active</a>' . PHP_EOL .
                        '    <a class="nav-item&#x20;nav-link" href="&#x23;">Much longer nav link</a>' . PHP_EOL .
                        '    <a class="nav-item&#x20;nav-link" href="&#x23;">Link</a>' . PHP_EOL .
                        '    <a class="nav-item&#x20;nav-link&#x20;disabled" href="&#x23;" tabindex="-1" ' .
                        'aria-disabled="true">Disabled</a>' . PHP_EOL .
                        '</nav>' . PHP_EOL .
                        '<nav class="nav&#x20;nav-justified&#x20;nav-pills">' . PHP_EOL .
                        '    <a class="nav-item&#x20;nav-link&#x20;active" href="&#x23;">Active</a>' . PHP_EOL .
                        '    <a class="nav-item&#x20;nav-link" href="&#x23;">Much longer nav link</a>' . PHP_EOL .
                        '    <a class="nav-item&#x20;nav-link" href="&#x23;">Link</a>' . PHP_EOL .
                        '    <a class="nav-item&#x20;nav-link&#x20;disabled" href="&#x23;" tabindex="-1" ' .
                        'aria-disabled="true">Disabled</a>' . PHP_EOL .
                        '</nav>',
                ],
                [
                    'title' => 'Working with flex utilities',
                    'url' => '%bootstrap-url%/components/navs/#working-with-flex-utilities',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->navigation()->menu()->renderMenu(
                            new \Zend\Navigation\Navigation([
                                ['label' => 'Active', 'uri' => '#', 'active' => true,],
                                ['label' => 'Longer nav link', 'uri' => '#',],
                                ['label' => 'Link', 'uri' => '#',],
                                ['label' => 'Disabled', 'uri' => '#', 'visible' => false,],
                            ]),
                            [
                                'list' => false,
                                'pills' => true,
                                'vertical' => 'sm'
                            ]
                        );
                    },
                    'expected' => '<nav class="flex-column&#x20;flex-sm-row&#x20;nav&#x20;nav-pills">' . PHP_EOL .
                        '    <a class="flex-sm-fill&#x20;text-sm-center&#x20;nav-link&#x20;active" ' .
                        'href="&#x23;">Active</a>' . PHP_EOL .
                        '    <a class="flex-sm-fill&#x20;text-sm-center&#x20;nav-link" ' .
                        'href="&#x23;">Longer nav link</a>' . PHP_EOL .
                        '    <a class="flex-sm-fill&#x20;text-sm-center&#x20;nav-link" ' .
                        'href="&#x23;">Link</a>' . PHP_EOL .
                        '    <a class="flex-sm-fill&#x20;text-sm-center&#x20;nav-link&#x20;disabled" ' .
                        'href="&#x23;" tabindex="-1" aria-disabled="true">Disabled</a>' . PHP_EOL .
                        '</nav>',
                ],
            ],
        ],
    ],
];
