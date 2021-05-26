<?php

// Documentation test config file for "Components / Modal / Examples / Scrolling long content" part
return [
    'title' => 'Scrolling long content',
    'url' => '%bootstrap-url%/components/modal/#scrolling-long-content',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Launch demo modal',
                'variant' => 'primary',
            ],
            'attributes' => [
                'data-bs-toggle' => 'modal',
                'data-bs-target' => '#exampleModalLong',
            ],
        ]) . PHP_EOL;

        echo $view->modal(
            [
                'title' => [
                    'content' => 'Modal title',
                    'attributes' => ['id' => 'exampleModalLongTitle'],
                ],
                'This is some placeholder content to show the scrolling behavior for modals. ' .
                    'Instead of repeating the text the modal, ' .
                    'we use an inline style set a minimum height, ' .
                    'thereby extending the length of the overall modal ' .
                    'and demonstrating the overflow scrolling. ' .
                    'When content becomes longer than the height of the viewport, ' .
                    'scrolling will move the modal as needed.',
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
                'id' => 'exampleModalLong',
                'body_attributes' => ['style' => 'min-height: 1500px'],
            ]
        );

        echo PHP_EOL . '<br/>' . PHP_EOL;

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Launch demo modal',
                'variant' => 'primary',
            ],
            'attributes' => [
                'data-bs-toggle' => 'modal',
                'data-bs-target' => '#exampleModalScrollable',
            ],
        ]) . PHP_EOL;

        echo $view->modal(
            [
                'title' => [
                    'content' => 'Modal title',
                    'attributes' => ['id' => 'exampleModalScrollableTitle'],
                ],
                'This is some placeholder content to show the scrolling behavior for modals. ' .
                    'We use repeated line breaks to demonstrate how content can exceed minimum inner height, ' .
                    'thereby showing inner scrolling. ' .
                    'When content becomes longer than the predefined max-height of modal, ' .
                    'content will be cropped and scrollable within the modal.',
                '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>' .
                    '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>',
                'This content should appear at the bottom after you scroll.',
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
                'scrollable' => true,
                'id' => 'exampleModalScrollable',
            ]
        );
    },
];
