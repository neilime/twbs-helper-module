<?php

// Documentation test config file for "Components / Popovers" part
return [
    'title' => 'Popovers',
    'url' => '%bootstrap-url%/components/popovers/',
    'tests' => [
        [
            'title' => 'Example',
            'url' => '%bootstrap-url%/components/popovers/#example',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->formButton([
                    'name' => 'popover',
                    'options' => [
                        'label' => 'Click to toggle popover',
                        'variant' => 'danger',
                        'popover' => 'And here\'s some amazing content. It\'s very engaging. Right?',
                        'size' => 'lg',
                    ],
                    'attributes' => ['title' => 'Popover title'],
                ]);
            },
            'expected' => '<button type="button" name="popover" title="Popover&#x20;title" ' .
                'class="btn&#x20;btn-danger&#x20;btn-lg" data-toggle="popover" ' .
                'data-content="And&#x20;here&#x27;s&#x20;some&#x20;amazing&#x20;content.&#x20;' .
                'It&#x27;s&#x20;very&#x20;engaging.&#x20;Right&#x3F;" value="">' .
                'Click to toggle popover' .
                '</button>',
        ],
        [
            'title' => 'Four directions',
            'url' => '%bootstrap-url%/components/popovers/#four-directions',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                foreach ([
                    'top' => 'Popover on top',
                    'right' => 'Popover on right',
                    'bottom' => 'Popover on bottom',
                    'left' => 'Popover on left',
                ] as $sPlacement => $sButtonLabel) {
                    echo $oView->formButton([
                        'name' => 'popover',
                        'options' => [
                            'label' => $sButtonLabel,
                            'popover' => [
                                'placement' => $sPlacement,
                                'content' => 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.',
                            ],
                        ],
                    ]) . PHP_EOL;
                }
            },
            'expected' => '<button type="button" name="popover" class="btn&#x20;btn-secondary" ' .
                'data-toggle="popover" data-content="Vivamus&#x20;sagittis&#x20;lacus&#x20;vel&#x20;augue&#x20;' .
                'laoreet&#x20;rutrum&#x20;faucibus." data-placement="top" ' .
                'data-container="body" value="">' .
                'Popover on top' .
                '</button>' . PHP_EOL .
                '<button type="button" name="popover" class="btn&#x20;btn-secondary" ' .
                'data-toggle="popover" data-content="Vivamus&#x20;sagittis&#x20;lacus&#x20;vel&#x20;augue&#x20;' .
                'laoreet&#x20;rutrum&#x20;faucibus." data-placement="right" ' .
                'data-container="body" value="">' .
                'Popover on right' .
                '</button>' . PHP_EOL .
                '<button type="button" name="popover" class="btn&#x20;btn-secondary" ' .
                'data-toggle="popover" data-content="Vivamus&#x20;sagittis&#x20;lacus&#x20;vel&#x20;augue&#x20;' .
                'laoreet&#x20;rutrum&#x20;faucibus." data-placement="bottom" ' .
                'data-container="body" value="">' .
                'Popover on bottom' .
                '</button>' . PHP_EOL .
                '<button type="button" name="popover" class="btn&#x20;btn-secondary" ' .
                'data-toggle="popover" data-content="Vivamus&#x20;sagittis&#x20;lacus&#x20;vel&#x20;augue&#x20;' .
                'laoreet&#x20;rutrum&#x20;faucibus." data-placement="left" ' .
                'data-container="body" value="">' .
                'Popover on left' .
                '</button>' . PHP_EOL,
        ],
        [
            'title' => 'Dismiss on next click',
            'url' => '%bootstrap-url%/components/popovers/#dismiss-on-next-click',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->formButton([
                    'name' => 'popover',
                    'options' => [
                        'tag' => 'a',
                        'label' => 'Dismissible popover',
                        'variant' => 'danger',
                        'popover' => [
                            'trigger' => 'focus',
                            'content' => 'And here\'s some amazing content. It\'s very engaging. Right?',
                        ],
                        'size' => 'lg',
                    ],
                    'attributes' => ['title' => 'Dismissible popover', 'tabindex' => '0'],
                ]);
            },
            'expected' => '<a title="Dismissible&#x20;popover" tabindex="0" class="btn&#x20;btn-danger&#x20;btn-lg" ' .
                'role="button" data-toggle="popover" ' .
                'data-content="And&#x20;here&#x27;s&#x20;some&#x20;amazing&#x20;content.&#x20;' .
                'It&#x27;s&#x20;very&#x20;engaging.&#x20;Right&#x3F;" data-trigger="focus">' .
                'Dismissible popover' .
                '</a>',
        ],
        [
            'title' => 'Disabled elements',
            'url' => '%bootstrap-url%/components/popovers/#disabled-elements',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->formButton([
                    'name' => 'popover',
                    'options' => [
                        'label' => 'Disabled button',
                        'variant' => 'primary',
                        'popover' => 'Disabled popover',
                    ],
                    'attributes' => ['disabled' => true],
                ]);
            },
            'expected' => '<span class="d-inline-block" data-content="Disabled&#x20;popover" ' .
                'data-toggle="popover" tabindex="0">' .
                '<button type="button" name="popover" disabled="disabled" class="btn&#x20;btn-primary" ' .
                'style="pointer-events&#x3A;&#x20;none&#x3B;" value="">' .
                'Disabled button' .
                '</button>' .
                '</span>',
        ],
    ],
];
