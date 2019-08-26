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
                        '    <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">'.
                        'Disabled</a>' . PHP_EOL .
                        '</nav>',
                ],
            ],
        ],
    ],
];
