<?php

// Documentation test config file for "Components / Navbar / Supported content / Text" part
return [
    'title' => 'Text',
    'url' => '%bootstrap-url%/components/navbar/#text',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        echo $oView->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation(),
            [
                'text' => 'Navbar text with an inline element',
                'expand' => false,
                'toggler' => false,
            ]
        );

        echo PHP_EOL . '<br>' . PHP_EOL;

        echo $oView->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation([
                [
                    'label' => 'Home <span class="sr-only">(current)</span>',
                    'uri' => '#',
                    'active' => true,
                ],
                ['label' => 'Features', 'uri' => '#'],
                ['label' => 'Pricing', 'uri' => '#'],
            ]),
            [
                'brand' => 'Navbar w/ text',
                'text' => 'Navbar text with an inline element',
                'attributes' => ['id' => 'navbarText'],
            ]
        );
    },
    'expected' => '<nav class="bg-light&#x20;navbar&#x20;navbar-light">' . PHP_EOL .
        '    <span class="navbar-text">Navbar text with an inline element</span>' . PHP_EOL .
        '</nav>' . PHP_EOL .
        '<br>' . PHP_EOL .
        '<nav class="bg-light&#x20;navbar&#x20;navbar-expand-lg&#x20;navbar-light">' . PHP_EOL .
        '    <a class="navbar-brand" href="&#x23;">Navbar w/ text</a>' . PHP_EOL .
        '    <button type="button" name="navbar_toggler" class="navbar-toggler" data-toggle="collapse" ' .
        'aria-expanded="false" aria-label="Toggle&#x20;navigation" data-target="&#x23;navbarText" ' .
        'aria-controls="navbarText" value=""><span class="navbar-toggler-icon"></span></button>' . PHP_EOL .
        '    <div class="collapse&#x20;navbar-collapse" id="navbarText">' . PHP_EOL .
        '        <ul class="mr-auto&#x20;nav&#x20;navbar-nav">' . PHP_EOL .
        '            <li class="&#x20;nav-item">' . PHP_EOL .
        '                <a class="nav-link&#x20;active" href="&#x23;">' .
        'Home <span class="sr-only">(current)</span></a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '            <li class="nav-item">' . PHP_EOL .
        '                <a class="nav-link" href="&#x23;">Features</a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '            <li class="nav-item">' . PHP_EOL .
        '                <a class="nav-link" href="&#x23;">Pricing</a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '        </ul>' . PHP_EOL .
        '        <span class="navbar-text">Navbar text with an inline element</span>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</nav>',
];
