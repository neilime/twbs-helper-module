<?php

// Documentation test config file for "Components / Modal / Examples / Vertically centered" part
return [
    'title' => 'Vertically centered',
    'url' => '%bootstrap-url%/components/modal/#live-demo',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Vertically centered modal',
                'variant' => 'primary',
            ],
            'attributes' => [
                'data-bs-toggle' => 'modal',
                'data-bs-target' => '#exampleModalCenter',
            ],
        ]) . PHP_EOL;

        echo $view->modal(
            [
                'title' => [
                    'content' => 'Modal title',
                    'attributes' => ['id' => 'exampleModalCenterTitle'],
                ],
                'This is a vertically centered modal.',
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
                'id' => 'exampleModalCenter',
                'centered' => true,
            ]
        );

        echo PHP_EOL . '<br/>' . PHP_EOL;

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Vertically centered scrollable modal',
                'variant' => 'primary',
            ],
            'attributes' => [
                'data-bs-toggle' => 'modal',
                'data-bs-target' => '#exampleModalCenteredScrollable',
            ],
        ]) . PHP_EOL;

        echo $view->modal(
            [
                'title' => [
                    'content' => 'Modal title',
                    'attributes' => ['id' => 'exampleModalCenteredScrollableTitle'],
                ],
                'This is some placeholder content to show a vertically centered modal. ' .
                    'We\'ve added some extra copy here to show how vertically centering the modal works when ' .
                    'combined with scrollable modals. ' .
                    'We also use some repeated line breaks to quickly extend the height of the content, ' .
                    'thereby triggering the scrolling. ' .
                    'When content becomes longer than the predefined max-height of modal, ' .
                    'content will be cropped and scrollable within the modal.</p>',
                '<br><br><br><br><br><br><br><br><br><br>',
                'Just like that.',
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
                'id' => 'exampleModalCenteredScrollable',
                'centered' => true,
                'scrollable' => true,
            ]
        );
    },
];
