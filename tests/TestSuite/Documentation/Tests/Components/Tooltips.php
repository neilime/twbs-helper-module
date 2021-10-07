<?php

// Documentation test config file for "Components / Tooltips" part
return [
    'title' => 'Tooltips',
    'url' => '%bootstrap-url%/components/tooltips/',
    'tests' => [
        [
            'title' => 'Examples',
            'url' => '%bootstrap-url%/components/tooltips/#examples',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                foreach (
                    [
                    'top' => 'Tooltip on top',
                    'right' => 'Tooltip on right',
                    'bottom' => 'Tooltip on bottom',
                    'left' => 'Tooltip on left',
                    ] as $sPlacement => $sLabel
                ) {
                    echo $oView->formButton()->renderSpec([
                        'name' => 'tooltip',
                        'options' => [
                            'label' => $sLabel,
                            'tooltip' => [
                                'placement' => $sPlacement,
                                'content' => $sLabel,
                            ],
                        ],
                    ]) . PHP_EOL;
                }

                echo $oView->formButton()->renderSpec([
                    'name' => 'tooltip',
                    'options' => [
                        'label' => 'Tooltip with HTML',
                        'tooltip' => '<em>Tooltip</em> <u>with</u> <b>HTML</b>',
                    ],
                ]);
            },
        ],
        [
            'title' => 'Disabled elements',
            'url' => '%bootstrap-url%/components/tooltips/#disabled-elements',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->formButton()->renderSpec([
                    'name' => 'tooltip',
                    'options' => [
                        'label' => 'Disabled button',
                        'tooltip' => 'Disabled tooltip',
                        'variant' => 'primary',
                    ],
                    'attributes' => [
                        'disabled' => true,
                    ],
                ]);
            },
        ],
    ],
];
