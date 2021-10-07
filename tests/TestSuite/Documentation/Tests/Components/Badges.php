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
                echo $oView->formButton()->renderSpec([
                    'options' => [
                        'label' => 'Profile ' . $oView->badge('9', 'light') . PHP_EOL .
                            '<span class="sr-only">unread messages</span>',
                        'variant' => 'primary',
                    ],
                ]);
            },
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
        ],
    ],
];
