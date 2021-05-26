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
        [
            'title' => 'Dividers',
            'url' => '%bootstrap-url%/components/breadcrumb/#dividers',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->breadcrumbs(new \Laminas\Navigation\Navigation([
                    [
                        'label' => 'Home', 'uri' => '/', 'pages' => [
                            ['label' => 'Library', 'uri' => '/library', 'active' => true],
                        ],
                    ],
                ]))
                    ->setMinDepth(0)
                    ->setSeparator('>') . PHP_EOL;

                echo $view->breadcrumbs(new \Laminas\Navigation\Navigation([
                    [
                        'label' => 'Home', 'uri' => '/', 'pages' => [
                            ['label' => 'Library', 'uri' => '/library', 'active' => true],
                        ],
                    ],
                ]))
                    ->setMinDepth(0)
                    ->setSeparator(
                        'url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'8\' ' .
                            'height=\'8\'%3E%3Cpath d=\'M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z\' ' .
                            'fill=\'currentColor\'/%3E%3C/svg%3E")'
                    );

                // Reset separator
                $view->breadcrumbs()->setSeparator(' &gt; ');
            },
        ],
    ],
];
