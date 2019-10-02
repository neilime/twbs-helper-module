<?php

// Documentation test config file for "Components / Navbar / Supported content / Nav" part
return [
    'title' => 'Nav',
    'url' => '%bootstrap-url%/components/navbar/#nav',
    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
        echo $oView->navigation()->navbar()->render(
            new \Zend\Navigation\Navigation([
                [
                    'label' => 'Home <span class="sr-only">(current)</span>',
                    'uri' => '#',
                    'active' => true,
                ],
                ['label' => 'Features', 'uri' => '#'],
                ['label' => 'Pricing', 'uri' => '#'],
                ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
            ]),
            [
                'brand' => 'Navbar',
                'attributes' => ['id' => 'navbarNav'],
            ]
        );

        echo PHP_EOL . '<br>' . PHP_EOL;

        // Avoid the list-based approach
        echo $oView->navigation()->navbar()->render(
            new \Zend\Navigation\Navigation([
                [
                    'label' => 'Home <span class="sr-only">(current)</span>',
                    'uri' => '#',
                    'active' => true,
                ],
                ['label' => 'Features', 'uri' => '#'],
                ['label' => 'Pricing', 'uri' => '#'],
                ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
            ]),
            [
                'brand' => 'Navbar',
                'attributes' => ['id' => 'navbarNavAltMarkup'],
                'nav' => ['list' => false],
            ]
        );

        echo PHP_EOL . '<br>' . PHP_EOL;

        echo $oView->navigation()->navbar()->render(
            new \Zend\Navigation\Navigation([
                [
                    'label' => 'Home <span class="sr-only">(current)</span>',
                    'uri' => '#',
                    'active' => true,
                ],
                ['label' => 'Features', 'uri' => '#'],
                ['label' => 'Pricing', 'uri' => '#'],
                [
                    'type' => '\TwbsHelper\Navigation\Page\DropdownPage',
                    'label' => 'Dropdown link',
                    'dropdown' => [
                        'items' => [
                            'Action',
                            'Another action',
                            'Something else here',
                        ],
                        'attributes' => ['id' => 'navbarDropdownMenuLink'],
                    ],
                ],
            ]),
            [
                'brand' => 'Navbar',
                'attributes' => ['id' => 'navbarNavDropdown'],
            ]
        );
    },
    'expected' => '<nav class="bg-light&#x20;navbar&#x20;navbar-expand-lg&#x20;navbar-light">' . PHP_EOL .
        '    <a class="navbar-brand" href="&#x23;">Navbar</a>' . PHP_EOL .
        '    <button type="button" name="navbar_toggler" class="navbar-toggler" ' .
        'data-toggle="collapse" aria-expanded="false" aria-label="Toggle&#x20;navigation" ' .
        'data-target="&#x23;navbarNav" aria-controls="navbarNav" value="">' .
        '<span class="navbar-toggler-icon"></span></button>' . PHP_EOL .
        '    <div class="collapse&#x20;navbar-collapse" id="navbarNav">' . PHP_EOL .
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
        '            <li class="nav-item">' . PHP_EOL .
        '                <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" ' .
        'aria-disabled="true">Disabled</a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '        </ul>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</nav>' . PHP_EOL .
        '<br>' . PHP_EOL .
        '<nav class="bg-light&#x20;navbar&#x20;navbar-expand-lg&#x20;navbar-light">' . PHP_EOL .
        '    <a class="navbar-brand" href="&#x23;">Navbar</a>' . PHP_EOL .
        '    <button type="button" name="navbar_toggler" class="navbar-toggler" ' .
        'data-toggle="collapse" aria-expanded="false" aria-label="Toggle&#x20;navigation" ' .
        'data-target="&#x23;navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" value="">' .
        '<span class="navbar-toggler-icon"></span></button>' . PHP_EOL .
        '    <div class="collapse&#x20;navbar-collapse" id="navbarNavAltMarkup">' . PHP_EOL .
        '        <nav class="mr-auto&#x20;nav&#x20;navbar-nav">' . PHP_EOL .
        '            <a class="nav-link&#x20;active" href="&#x23;">' .
        'Home <span class="sr-only">(current)</span></a>' . PHP_EOL .
        '            <a class="nav-link" href="&#x23;">Features</a>' . PHP_EOL .
        '            <a class="nav-link" href="&#x23;">Pricing</a>' . PHP_EOL .
        '            <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" ' .
        'aria-disabled="true">Disabled</a>' . PHP_EOL .
        '        </nav>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</nav>' . PHP_EOL .
        '<br>' . PHP_EOL .
        '<nav class="bg-light&#x20;navbar&#x20;navbar-expand-lg&#x20;navbar-light">' . PHP_EOL .
        '    <a class="navbar-brand" href="&#x23;">Navbar</a>' . PHP_EOL .
        '    <button type="button" name="navbar_toggler" class="navbar-toggler" ' .
        'data-toggle="collapse" aria-expanded="false" aria-label="Toggle&#x20;navigation" ' .
        'data-target="&#x23;navbarNavDropdown" aria-controls="navbarNavDropdown" value="">' .
        '<span class="navbar-toggler-icon"></span></button>' . PHP_EOL .
        '    <div class="collapse&#x20;navbar-collapse" id="navbarNavDropdown">' . PHP_EOL .
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
        '            <li class="dropdown&#x20;nav-item">' . PHP_EOL .
        '                <a id="navbarDropdownMenuLink" class="dropdown-toggle&#x20;nav-link" ' .
        'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
        'href="&#x23;">Dropdown link</a>' . PHP_EOL .
        '                <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu">' . PHP_EOL .
        '                    <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
        '                    <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
        '                    <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
        '                </div>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '        </ul>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</nav>',
];
