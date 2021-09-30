<?php

// Documentation test config file for "Components / Buttons" part
return [
    'title' => 'Buttons',
    'url' => '%bootstrap-url%/components/buttons/',
    'tests' => [
        [
            'title' => 'Example',
            'url' => '%bootstrap-url%/components/buttons/#example',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                foreach (
                    [
                    'primary', 'secondary', 'success', 'danger',
                    'warning', 'info', 'light', 'dark', 'link',
                    ] as $sVariant
                ) {
                    $oButton = new \Laminas\Form\Element\Button($sVariant, [
                        'label' => ucfirst($sVariant),
                        'variant' => $sVariant,
                    ]);
                    echo $oView->formButton($oButton) . PHP_EOL;
                }
            },
        ],
        [
            'title' => 'Button tags',
            'url' => '%bootstrap-url%/components/buttons/#button-tags',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                // Link button
                $oButton = new \Laminas\Form\Element\Button('Link', [
                    'label' => 'Link',
                    'variant' => 'primary',
                    'tag' => 'a',
                ]);
                $oButton->setAttribute('href', '#');
                echo $oView->formButton($oButton) . PHP_EOL;

                // Submit button
                $oButton = new \Laminas\Form\Element\Submit('Button', [
                    'label' => 'Button',
                    'variant' => 'primary',
                ]);
                echo $oView->formButton($oButton) . PHP_EOL;
            },
        ],
        [
            'title' => 'Outline buttons',
            'url' => '%bootstrap-url%/components/buttons/#outline-buttons',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                foreach (
                    [
                    'primary', 'secondary', 'success', 'danger',
                    'warning', 'info', 'light', 'dark',
                    ] as $sVariant
                ) {
                    $oButton = new \Laminas\Form\Element\Button($sVariant, [
                        'label' => ucfirst($sVariant),
                        'variant' => 'outline-' . $sVariant,
                    ]);
                    echo $oView->formButton($oButton) . PHP_EOL;
                }
            },
        ],
        [
            'title' => 'Sizes',
            'url' => '%bootstrap-url%/components/buttons/#sizes',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {

                // Large buttons
                $oButton = new \Laminas\Form\Element\Button('large-button', [
                    'label' => 'Large button',
                    'variant' => 'primary',
                    'size' => 'lg',
                ]);
                echo $oView->formButton($oButton) . PHP_EOL;

                $oButton = new \Laminas\Form\Element\Button('large-button', [
                    'label' => 'Large button',
                    'size' => 'lg',
                ]);
                echo $oView->formButton($oButton) . PHP_EOL;

                echo '<br/><br/>' . PHP_EOL;

                // Small buttons
                $oButton = new \Laminas\Form\Element\Button('small-button', [
                    'label' => 'Small button',
                    'variant' => 'primary',
                    'size' => 'sm',
                ]);
                echo $oView->formButton($oButton) . PHP_EOL;

                $oButton = new \Laminas\Form\Element\Button('small-button', [
                    'label' => 'Small button',
                    'size' => 'sm',
                ]);
                echo $oView->formButton($oButton) . PHP_EOL;

                echo '<br/><br/>' . PHP_EOL;

                // Block level buttons
                $oButton = new \Laminas\Form\Element\Button('block-level-button', [
                    'label' => 'Block level button',
                    'variant' => 'primary',
                    'size' => 'lg',
                    'block' => true,
                ]);
                echo $oView->formButton($oButton) . PHP_EOL;

                $oButton = new \Laminas\Form\Element\Button('block-level-button', [
                    'label' => 'Block level button',
                    'size' => 'lg',
                    'block' => true,
                ]);
                echo $oView->formButton($oButton) . PHP_EOL;
            },
        ],
    ],
];
