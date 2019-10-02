<?php

// Documentation test config file for "Components / Navbar / Containers" part
return [
    'title' => 'Containers',
    'url' => '%bootstrap-url%/components/navbar/#containers',
    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {

        echo $oView->navigation()->navbar()->render(
            new \Zend\Navigation\Navigation(),
            [
                'brand' => 'Navbar',
                'container' => 'wrap',
                'toggler' => false,
            ]
        );

        echo PHP_EOL . '<br>' . PHP_EOL;

        echo $oView->navigation()->navbar()->render(
            new \Zend\Navigation\Navigation(),
            [
                'brand' => 'Navbar',
                'container' => 'within',
                'toggler' => false,
            ]
        );
    },
    'expected' => '<div class="container">' . PHP_EOL .
        '    <nav class="bg-light&#x20;navbar&#x20;navbar-expand-lg&#x20;navbar-light">' . PHP_EOL .
        '        <a class="navbar-brand" href="&#x23;">Navbar</a>' . PHP_EOL .
        '    </nav>' . PHP_EOL .
        '</div>' .  PHP_EOL .
        '<br>' . PHP_EOL .
        '<nav class="bg-light&#x20;navbar&#x20;navbar-expand-lg&#x20;navbar-light">' . PHP_EOL .
        '    <div class="container">' . PHP_EOL .
        '        <a class="navbar-brand" href="&#x23;">Navbar</a>' . PHP_EOL .
        '    </div>' .  PHP_EOL .
        '</nav>',
];
