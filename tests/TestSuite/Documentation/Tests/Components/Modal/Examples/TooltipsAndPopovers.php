<?php

// Documentation test config file for "Components / Modal / Examples / Tooltips and popovers" part
return [
    'title' => 'Tooltips and popovers',
    'url' => '%bootstrap-url%/components/modal/#tooltips-and-popovers',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Launch demo modal',
                'variant' => 'primary',
            ],
            'attributes' => [
                'data-bs-toggle' => 'modal',
                'data-bs-target' => '#exampleModalPopovers',
            ],
        ]) . PHP_EOL;

        echo $view->modal(
            [
                'title' => [
                    'content' => 'Modal title',
                    'attributes' => ['id' => 'exampleModalPopoversLabel'],
                ],
                [
                    'type' => 'subtitle',
                    'content' => 'Popover in a modal',
                ],
                'This <a class="btn btn-secondary popover-test" data-bs-container="#exampleModalPopovers" ' .
                    'data-bs-content="Popover body content is set in this attribute." ' .
                    'data-bs-original-title="Popover title" ' .
                    'href="#" role="button" title="">button</a> triggers a popover on click.',
                '---',
                [
                    'type' => 'subtitle',
                    'content' => 'Tooltips in a modal',
                ],
                '<a class="tooltip-test" data-bs-container="#exampleModalPopovers" data-bs-original-title="Tooltip" ' .
                    'href="#" title="">This link</a> and <a class="tooltip-test" ' .
                    'data-bs-container="#exampleModalPopovers" ' .
                    'data-bs-original-title="Tooltip" href="#" title="">that link</a> have tooltips on hover.',
                'footer' => [
                    'button' => [
                        [
                            'options' => [
                                'label' => 'Close',
                                'variant' => 'secondary',
                            ],
                            'attributes' => [
                                'data-bs-dismiss' => 'modal',
                            ],
                        ],
                        [
                            'options' => [
                                'label' => 'Save changes',
                                'variant' => 'primary',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'fade' => true,
                'hidden' => true,
                'id' => 'exampleModalPopovers',
            ]
        );
    },
];
