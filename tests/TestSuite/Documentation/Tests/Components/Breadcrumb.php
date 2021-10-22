<?php

// Documentation test config file for "Components / Breadcrumb" part
return [
    'title' => 'Breadcrumb',
    'url' => '%bootstrap-url%/components/breadcrumb/',
    'tests' => [
        [
            'title' => 'Example',
            'url' => '%bootstrap-url%/components/breadcrumb/#example',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->breadcrumbs(new \Laminas\Navigation\Navigation([
                    ['label' => 'Home', 'uri' => '/', 'active' => true,],
                ]))->setMinDepth(0)  . PHP_EOL;

                echo $view->breadcrumbs(new \Laminas\Navigation\Navigation([
                    [
                        'label' => 'Home', 'uri' => '/', 'pages' => [
                            ['label' => 'Library', 'uri' => '/library', 'active' => true],
                        ],
                    ],
                ]))->setMinDepth(0) . PHP_EOL;

                echo $view->breadcrumbs(new \Laminas\Navigation\Navigation([
                    [
                        'label' => 'Home', 'uri' => '/', 'pages' => [
                            [
                                'label' => 'Library', 'uri' => '/library', 'pages' => [
                                    ['label' => 'Data', 'uri' => '/library/data', 'active' => true],
                                ],
                            ],
                        ],
                    ],
                ]))->setMinDepth(0) . PHP_EOL;
            },
        ],
    ],
];
