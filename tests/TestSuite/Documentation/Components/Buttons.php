<?php

// Documentation test config file for "Components / Buttons" part
return [
    'title' => 'Buttons',
    'url' => '%bootstrap-url%/components/buttons/',
    'tests' => [
        [
            'title' => 'Example',
            'url' => '%bootstrap-url%/components/buttons/#example',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                foreach ([
                    'primary', 'secondary', 'success', 'danger',
                    'warning', 'info', 'light', 'dark', 'link',
                ] as $sVariant) {
                    $oButton = new \Zend\Form\Element\Button($sVariant, [
                        'label' => ucfirst($sVariant),
                        'variant' => $sVariant,
                    ]);
                    echo $oView->formButton($oButton) . PHP_EOL;
                }
            },
            'expected' => '<button type="button" name="primary" class="btn&#x20;btn-primary" value="">' .
                'Primary' .
                '</button>' . PHP_EOL .
                '<button type="button" name="secondary" class="btn&#x20;btn-secondary" value="">' .
                'Secondary' .
                '</button>' . PHP_EOL .
                '<button type="button" name="success" class="btn&#x20;btn-success" value="">' .
                'Success' .
                '</button>' . PHP_EOL .
                '<button type="button" name="danger" class="btn&#x20;btn-danger" value="">' .
                'Danger' .
                '</button>' . PHP_EOL .
                '<button type="button" name="warning" class="btn&#x20;btn-warning" value="">' .
                'Warning' .
                '</button>' . PHP_EOL .
                '<button type="button" name="info" class="btn&#x20;btn-info" value="">' .
                'Info' .
                '</button>' . PHP_EOL .
                '<button type="button" name="light" class="btn&#x20;btn-light" value="">' .
                'Light' .
                '</button>' . PHP_EOL .
                '<button type="button" name="dark" class="btn&#x20;btn-dark" value="">' .
                'Dark' .
                '</button>' . PHP_EOL .
                '<button type="button" name="link" class="btn&#x20;btn-link" value="">' .
                'Link' .
                '</button>' . PHP_EOL,
        ],
        [
            'title' => 'Button tags',
            'url' => '%bootstrap-url%/components/buttons/#button-tags',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                // Link button
                $oButton = new \Zend\Form\Element\Button('Link', [
                    'label' => 'Link',
                    'variant' => 'primary',
                    'tag' => 'a',
                ]);
                $oButton->setAttribute('href', '#');
                echo $oView->formButton($oButton) . PHP_EOL;

                // Submit button
                $oButton = new \Zend\Form\Element\Submit('Button', [
                    'label' => 'Button',
                    'variant' => 'primary',
                ]);
                echo $oView->formButton($oButton) . PHP_EOL;
            },
            'expected' => '<a href="&#x23;" class="btn&#x20;btn-primary" role="button">Link</a>' . PHP_EOL .
                '<button type="submit" name="Button" class="btn&#x20;btn-primary" value="">Button</button>' . PHP_EOL,
        ],
        [
            'title' => 'Outline buttons',
            'url' => '%bootstrap-url%/components/buttons/#outline-buttons',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                foreach ([
                    'primary', 'secondary', 'success', 'danger',
                    'warning', 'info', 'light', 'dark',
                ] as $sVariant) {
                    $oButton = new \Zend\Form\Element\Button($sVariant, [
                        'label' => ucfirst($sVariant),
                        'variant' => 'outline-' . $sVariant,
                    ]);
                    echo $oView->formButton($oButton) . PHP_EOL;
                }
            },
            'expected' =>
            '<button type="button" name="primary" class="btn&#x20;btn-outline-primary" value="">' .
                'Primary' .
                '</button>' . PHP_EOL .
                '<button type="button" name="secondary" class="btn&#x20;btn-outline-secondary" value="">' .
                'Secondary' .
                '</button>' . PHP_EOL .
                '<button type="button" name="success" class="btn&#x20;btn-outline-success" value="">' .
                'Success' .
                '</button>' . PHP_EOL .
                '<button type="button" name="danger" class="btn&#x20;btn-outline-danger" value="">' .
                'Danger' .
                '</button>' . PHP_EOL .
                '<button type="button" name="warning" class="btn&#x20;btn-outline-warning" value="">' .
                'Warning' .
                '</button>' . PHP_EOL .
                '<button type="button" name="info" class="btn&#x20;btn-outline-info" value="">' .
                'Info' .
                '</button>' . PHP_EOL .
                '<button type="button" name="light" class="btn&#x20;btn-outline-light" value="">' .
                'Light' .
                '</button>' . PHP_EOL .
                '<button type="button" name="dark" class="btn&#x20;btn-outline-dark" value="">' .
                'Dark' .
                '</button>' . PHP_EOL,
        ],
        [
            'title' => 'Sizes',
            'url' => '%bootstrap-url%/components/buttons/#sizes',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {

                // Large buttons
                $oButton = new \Zend\Form\Element\Button('large-button', [
                    'label' => 'Large button',
                    'variant' => 'primary',
                    'size' => 'lg',
                ]);
                echo $oView->formButton($oButton) . PHP_EOL;

                $oButton = new \Zend\Form\Element\Button('large-button', [
                    'label' => 'Large button',
                    'size' => 'lg',
                ]);
                echo $oView->formButton($oButton) . PHP_EOL;

                echo '<br><br>' . PHP_EOL;

                // Small buttons
                $oButton = new \Zend\Form\Element\Button('small-button', [
                    'label' => 'Small button',
                    'variant' => 'primary',
                    'size' => 'sm',
                ]);
                echo $oView->formButton($oButton) . PHP_EOL;

                $oButton = new \Zend\Form\Element\Button('small-button', [
                    'label' => 'Small button',
                    'size' => 'sm',
                ]);
                echo $oView->formButton($oButton) . PHP_EOL;

                echo '<br><br>' . PHP_EOL;

                // Block level buttons
                $oButton = new \Zend\Form\Element\Button('block-level-button', [
                    'label' => 'Block level button',
                    'variant' => 'primary',
                    'size' => 'lg',
                    'block' => true,
                ]);
                echo $oView->formButton($oButton) . PHP_EOL;

                $oButton = new \Zend\Form\Element\Button('block-level-button', [
                    'label' => 'Block level button',
                    'size' => 'lg',
                    'block' => true,
                ]);
                echo $oView->formButton($oButton) . PHP_EOL;
            },
            'expected' =>
            '<button type="button" name="large-button" ' .
                'class="btn&#x20;btn-lg&#x20;btn-primary" value="">Large button</button>' . PHP_EOL .
                '<button type="button" name="large-button" ' .
                'class="btn&#x20;btn-lg&#x20;btn-secondary" value="">Large button</button>' . PHP_EOL .
                '<br><br>'. PHP_EOL .
                '<button type="button" name="small-button" ' .
                'class="btn&#x20;btn-primary&#x20;btn-sm" value="">Small button</button>' . PHP_EOL .
                '<button type="button" name="small-button" ' .
                'class="btn&#x20;btn-secondary&#x20;btn-sm" value="">Small button</button>' . PHP_EOL .
                '<br><br>'. PHP_EOL .
                '<button type="button" name="block-level-button" ' .
                'class="btn&#x20;btn-block&#x20;btn-lg&#x20;btn-primary" ' .
                'value="">Block level button</button>' . PHP_EOL .
                '<button type="button" name="block-level-button" ' .
                'class="btn&#x20;btn-block&#x20;btn-lg&#x20;btn-secondary" ' .
                'value="">Block level button</button>' . PHP_EOL,
        ],
    ],
];
