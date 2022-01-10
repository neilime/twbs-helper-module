<?php

// Documentation test config file for "Components / Tooltips / Usage" part
return [
    'title' => 'Usage',
    'url' => '%bootstrap-url%/components/tooltips/#usage',
    'tests' => [
        [
            'title' => 'Disabled elements',
            'url' => '%bootstrap-url%/components/tooltips/#disabled-elements',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->formButton()->renderSpec([
                    'options' => [
                        'label' => 'Disabled button',
                        'tooltip' => 'Disabled tooltip',
                        'variant' => 'primary',
                    ],
                    'attributes' => ['disabled' => true],
                ]);
            },
        ],
    ],
];
