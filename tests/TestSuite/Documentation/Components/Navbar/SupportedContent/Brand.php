<?php

// Documentation test config file for "Components / Navbar / Supported content / Brand" part
return [
    'title' => 'Brand',
    'url' => '%bootstrap-url%/components/navbar/#brand',
    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
        // As a link
        echo $oView->navigation()->navbar()->render(
            new \Zend\Navigation\Navigation(),
            [
                'brand' => 'Navbar',
                'expand' => false,
                'toggler' => false,
            ]
        );

        echo PHP_EOL . '<br>' . PHP_EOL;

        // As a heading
        echo $oView->navigation()->navbar()->render(
            new \Zend\Navigation\Navigation(),
            [
                'brand' => [
                    'content' => 'Navbar',
                    'attributes' => ['class' => 'mb-0 h1'],
                    'type' => 'heading',
                ],
                'expand' => false,
                'toggler' => false,
            ]
        );

        echo PHP_EOL . '<br>' . PHP_EOL;

        // Just an image
        echo $oView->navigation()->navbar()->render(
            new \Zend\Navigation\Navigation(),
            [
                'brand' => [
                    'img' => [
                        'images/demo/bootstrap-solid.svg',
                    ],
                ],
                'expand' => false,
                'toggler' => false,
            ]
        );

        echo PHP_EOL . '<br>' . PHP_EOL;

        // Image and text
        echo $oView->navigation()->navbar()->render(
            new \Zend\Navigation\Navigation(),
            [
                'brand' => [
                    'content' => 'Bootstrap',
                    'img' => [
                        'images/demo/bootstrap-solid.svg',
                        [
                            'width' => 30,
                            'height' => 30,
                            'alt' => '',
                        ],
                    ],
                ],
                'expand' => false,
                'toggler' => false,
            ]
        );
    },
    'expected' => '<nav class="bg-light&#x20;navbar&#x20;navbar-light">' . PHP_EOL .
        '    <a class="navbar-brand" href="&#x23;">Navbar</a>' . PHP_EOL .
        '</nav>' . PHP_EOL .
        '<br>' . PHP_EOL .
        '<nav class="bg-light&#x20;navbar&#x20;navbar-light">' . PHP_EOL .
        '    <span class="h1&#x20;mb-0&#x20;navbar-brand">Navbar</span>' . PHP_EOL .
        '</nav>' . PHP_EOL .
        '<br>' . PHP_EOL .
        '<nav class="bg-light&#x20;navbar&#x20;navbar-light">' . PHP_EOL .
        '    <a class="navbar-brand" href="&#x23;">' .
        '<img alt="" height="30" src="images&#x2F;demo&#x2F;bootstrap-solid.svg" width="30"></a>' . PHP_EOL .
        '</nav>' . PHP_EOL .
        '<br>' . PHP_EOL .
        '<nav class="bg-light&#x20;navbar&#x20;navbar-light">' . PHP_EOL .
        '    <a class="navbar-brand" href="&#x23;">' . PHP_EOL .
        '        <img alt="" class="align-top&#x20;d-inline-block" height="30" '.
        'src="images&#x2F;demo&#x2F;bootstrap-solid.svg" width="30">' . PHP_EOL .
        '        Bootstrap' . PHP_EOL .
        '    </a>' . PHP_EOL .
        '</nav>',
];
