<?php

// Documentation test config file for "Components / Badges" part
return [
    'title' => 'Badges',
    'url' => '%bootstrap-url%/components/badge/',
    'tests' => [
        [
            'title' => 'Example',
            'url' => '%bootstrap-url%/components/badge/#example',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                // H1
                echo '<h1>Example heading ' . $oView->badge('New') . '</h1>' . PHP_EOL;
                // H2
                echo '<h2>Example heading ' . $oView->badge('New') . '</h2>' . PHP_EOL;
                // H3
                echo '<h3>Example heading ' . $oView->badge('New') . '</h3>' . PHP_EOL;
                // H4
                echo '<h4>Example heading ' . $oView->badge('New') . '</h4>' . PHP_EOL;
                // H5
                echo '<h5>Example heading ' . $oView->badge('New') . '</h5>' . PHP_EOL;
                // H6
                echo '<h6>Example heading ' . $oView->badge('New') . '</h6>';

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Button
                echo $oView->formButton([
                    'options' => [
                        'label' => 'Profile ' . $oView->badge('9', 'light') . PHP_EOL .
                            '<span class="sr-only">unread messages</span>',
                        'variant' => 'primary',
                    ],
                ]);
            },
            'expected' => '<h1>Example heading <span class="badge&#x20;badge-secondary">New</span></h1>' . PHP_EOL .
                '<h2>Example heading <span class="badge&#x20;badge-secondary">New</span></h2>' . PHP_EOL .
                '<h3>Example heading <span class="badge&#x20;badge-secondary">New</span></h3>' . PHP_EOL .
                '<h4>Example heading <span class="badge&#x20;badge-secondary">New</span></h4>' . PHP_EOL .
                '<h5>Example heading <span class="badge&#x20;badge-secondary">New</span></h5>' . PHP_EOL .
                '<h6>Example heading <span class="badge&#x20;badge-secondary">New</span></h6>' . PHP_EOL .
                '<br/>' . PHP_EOL .
                '<button type="button" name="button" class="btn&#x20;btn-primary" value="">' . PHP_EOL .
                '    Profile <span class="badge&#x20;badge-light">9</span>' . PHP_EOL .
                '    <span class="sr-only">unread messages</span>' . PHP_EOL .
                '</button>',
        ],
        [
            'title' => 'Contextual variations',
            'url' => '%bootstrap-url%/components/badge/#contextual-variations',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                foreach (
                    [
                    'primary', 'secondary', 'success', 'danger',
                    'warning', 'info', 'light', 'dark',
                    ] as $sVariant
                ) {
                    echo $oView->badge(ucfirst($sVariant), $sVariant) . PHP_EOL;
                }
            },
            'expected' => '<span class="badge&#x20;badge-primary">Primary</span>' . PHP_EOL .
                '<span class="badge&#x20;badge-secondary">Secondary</span>' . PHP_EOL .
                '<span class="badge&#x20;badge-success">Success</span>' . PHP_EOL .
                '<span class="badge&#x20;badge-danger">Danger</span>' . PHP_EOL .
                '<span class="badge&#x20;badge-warning">Warning</span>' . PHP_EOL .
                '<span class="badge&#x20;badge-info">Info</span>' . PHP_EOL .
                '<span class="badge&#x20;badge-light">Light</span>' . PHP_EOL .
                '<span class="badge&#x20;badge-dark">Dark</span>' . PHP_EOL,
        ],
        [
            'title' => 'Pill badges',
            'url' => '%bootstrap-url%/components/badge/#pill-badges',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                foreach (
                    [
                    'primary', 'secondary', 'success', 'danger',
                    'warning', 'info', 'light', 'dark',
                    ] as $sVariant
                ) {
                    echo $oView->badge(
                        ucfirst($sVariant),
                        [
                            'type' => 'pill',
                            'variant' => $sVariant,
                        ]
                    ) . PHP_EOL;
                }
            },
            'expected' => '<span class="badge&#x20;badge-pill&#x20;badge-primary">Primary</span>' . PHP_EOL .
                '<span class="badge&#x20;badge-pill&#x20;badge-secondary">Secondary</span>' . PHP_EOL .
                '<span class="badge&#x20;badge-pill&#x20;badge-success">Success</span>' . PHP_EOL .
                '<span class="badge&#x20;badge-danger&#x20;badge-pill">Danger</span>' . PHP_EOL .
                '<span class="badge&#x20;badge-pill&#x20;badge-warning">Warning</span>' . PHP_EOL .
                '<span class="badge&#x20;badge-info&#x20;badge-pill">Info</span>' . PHP_EOL .
                '<span class="badge&#x20;badge-light&#x20;badge-pill">Light</span>' . PHP_EOL .
                '<span class="badge&#x20;badge-dark&#x20;badge-pill">Dark</span>' . PHP_EOL,
        ],
        [
            'title' => 'Links',
            'url' => '%bootstrap-url%/components/badge/#links',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                foreach (
                    [
                    'primary', 'secondary', 'success', 'danger',
                    'warning', 'info', 'light', 'dark',
                    ] as $sVariant
                ) {
                    echo $oView->badge(
                        ucfirst($sVariant),
                        [
                            'type' => 'link',
                            'href' => '#',
                            'variant' => $sVariant,

                        ]
                    ) . PHP_EOL;
                }
            },
            'expected' => '<a class="badge&#x20;badge-primary" href="&#x23;">Primary</a>' . PHP_EOL .
                '<a class="badge&#x20;badge-secondary" href="&#x23;">Secondary</a>' . PHP_EOL .
                '<a class="badge&#x20;badge-success" href="&#x23;">Success</a>' . PHP_EOL .
                '<a class="badge&#x20;badge-danger" href="&#x23;">Danger</a>' . PHP_EOL .
                '<a class="badge&#x20;badge-warning" href="&#x23;">Warning</a>' . PHP_EOL .
                '<a class="badge&#x20;badge-info" href="&#x23;">Info</a>' . PHP_EOL .
                '<a class="badge&#x20;badge-light" href="&#x23;">Light</a>' . PHP_EOL .
                '<a class="badge&#x20;badge-dark" href="&#x23;">Dark</a>' . PHP_EOL,
        ],
    ],
];
