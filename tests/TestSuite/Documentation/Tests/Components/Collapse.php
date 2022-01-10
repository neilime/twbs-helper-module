<?php

// Documentation test config file for "Components / Collapse" part
return [
    'title' => 'Collapse',
    'url' => '%bootstrap-url%/components/collapse/',
    'tests' => [
        [
            'title' => 'Example',
            'url' => '%bootstrap-url%/components/collapse/#example',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->collapse(
                    [
                        'triggers' => [
                            [
                                'options' => [
                                    'variant' => 'primary',
                                    'label' => 'Link with href',
                                    'tag' => 'a'
                                ],
                            ],
                            [
                                'options' => [
                                    'variant' => 'primary',
                                    'label' => 'Button with data-bs-target',
                                ],
                            ],
                        ],
                        'targets' => [
                            [
                                'content' => $view->card(
                                    'Some placeholder content for the collapse component. ' .
                                        'This panel is hidden by default but revealed ' .
                                        'when the user activates the relevant trigger.'
                                ),
                                'attributes' => [
                                    'id' => 'collapseExample',
                                ],
                            ],
                        ],
                    ],
                );
            }
        ],
        [
            'title' => 'Horizontal',
            'url' => '%bootstrap-url%/components/collapse/#horizontal',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->collapse(
                    [
                        'horizontal' => [
                            'style' => 'min-height: 120px;',
                        ],
                        'triggers' => [
                            [
                                'options' => [
                                    'variant' => 'primary',
                                    'label' => 'Toggle width collapse',
                                ],
                            ],
                        ],
                        'targets' => [
                            [
                                'content' => $view->card(
                                    'Some placeholder content for the collapse component. ' .
                                        'This panel is hidden by default but revealed ' .
                                        'when the user activates the relevant trigger.',
                                    ['style' => 'width: 300px;'],
                                ),
                                'attributes' => [
                                    'id' => 'collapseWidthExample',
                                ],
                            ],
                        ],
                    ],
                );
            }
        ],
        [
            'title' => 'Multiple targets',
            'url' => '%bootstrap-url%/components/collapse/#multiple-targets',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->collapse(
                    [
                        'triggers' => [
                            [
                                'options' => [
                                    'variant' => 'primary',
                                    'label' => 'Toggle first element',
                                    'tag' => 'a',
                                ],
                            ],
                            [
                                'options' => [
                                    'variant' => 'primary',
                                    'label' => 'Toggle second element',
                                ],
                            ],
                            [
                                'options' => [
                                    'variant' => 'primary',
                                    'label' => 'Toggle both elements',
                                ],
                                'attributes' => [
                                    'data-bs-target' => '.multi-collapse',
                                    'aria-controls' => 'multiCollapseExample1 multiCollapseExample2',
                                ],
                            ],
                        ],
                        'targets' => [
                            [
                                'column' => true,
                                'content' => $view->card(
                                    'Some placeholder content for the first collapse component of this ' .
                                        'multi-collapse example. This panel is hidden by default but revealed ' .
                                        'when the user activates the relevant trigger.',
                                ),
                                'attributes' => [
                                    'id' => 'multiCollapseExample1',
                                    'class' => 'multi-collapse',
                                ],
                            ],
                            [
                                'column' => true,
                                'content' => $view->card(
                                    'Some placeholder content for the first collapse component of this ' .
                                        'multi-collapse example. This panel is hidden by default but revealed ' .
                                        'when the user activates the relevant trigger.',
                                ),
                                'attributes' => [
                                    'id' => 'multiCollapseExample2',
                                    'class' => 'multi-collapse',
                                ],
                            ],
                        ],
                    ],
                );
            }
        ],
    ],
];
