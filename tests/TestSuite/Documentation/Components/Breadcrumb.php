<?php

// Documentation test config file for "Components / Breadcrumb" part
return [
    'title' => 'Breadcrumb',
    'url' => '%bootstrap-url%/components/breadcrumb/',
    'tests' => [
        [
            'title' => 'Example',
            'url' => '%bootstrap-url%/components/breadcrumb/#example',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->breadcrumbs(new \Zend\Navigation\Navigation([
                    ['label' => 'Home', 'uri' => '/', 'active' => true,],
                ]))->setMinDepth(0)  . PHP_EOL;

                echo $oView->breadcrumbs(new \Zend\Navigation\Navigation([
                    [
                        'label' => 'Home', 'uri' => '/', 'pages' => [
                            ['label' => 'Library', 'uri' => '/library', 'active' => true],
                        ],
                    ],
                ]))->setMinDepth(0) . PHP_EOL;

                echo $oView->breadcrumbs(new \Zend\Navigation\Navigation([
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
            'expected' => '<nav aria-label="breadcrumb">' . PHP_EOL .
                '    <ol class="breadcrumb">' . PHP_EOL .
                '        <li class="breadcrumb-item active" aria-current="page">Home</li>' . PHP_EOL .
                '    </ol>' . PHP_EOL .
                '</nav>' . PHP_EOL .
                '<nav aria-label="breadcrumb">' . PHP_EOL .
                '    <ol class="breadcrumb">' . PHP_EOL .
                '        <li class="breadcrumb-item"><a href="&#x2F;">Home</a></li>' . PHP_EOL .
                '        <li class="breadcrumb-item active" aria-current="page">Library</li>' . PHP_EOL .
                '    </ol>' . PHP_EOL .
                '</nav>' . PHP_EOL.
                '<nav aria-label="breadcrumb">' . PHP_EOL .
                '    <ol class="breadcrumb">' . PHP_EOL .
                '        <li class="breadcrumb-item"><a href="&#x2F;">Home</a></li>' . PHP_EOL .
                '        <li class="breadcrumb-item"><a href="&#x2F;library">Library</a></li>' . PHP_EOL .
                '        <li class="breadcrumb-item active" aria-current="page">Data</li>' . PHP_EOL .
                '    </ol>' . PHP_EOL .
                '</nav>' . PHP_EOL,
        ],
    ],
];
