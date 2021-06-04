<?php

// Documentation test config file for "Components / Navbar / Color schemes" part
return [
    'title' => 'Color schemes',
    'url' => '%bootstrap-url%/components/navbar/#color-schemes',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {

        $oNavigationContainer = new \Laminas\Navigation\Navigation([
            ['label' => 'Home <span class="sr-only">(current)</span>', 'uri' => '#', 'active' => true],
            ['label' => 'Link', 'uri' => '#'],
            ['label' => 'Features', 'uri' => '#'],
            ['label' => 'Pricing', 'uri' => '#'],
            ['label' => 'About', 'uri' => '#'],
        ]);

        $aOptions = [
            'brand' => 'Navbar',
            'form' => [
                'elements' => [
                    [
                        'spec' => [
                            'name' => 'search',
                            'attributes' => [
                                'type' => 'search',
                                'placeholder' => 'Search',
                                'aria-label' => 'Search',
                                'class' => 'mr-sm-2',
                            ],
                        ],
                    ],
                    [
                        'spec' => [
                            'type' => 'submit',
                            'options' => [
                                'label' => 'Search',
                                'variant' => 'outline-success',
                            ],
                        ],
                    ],
                ],
            ],
        ];

        // Navbar dark, background dark
        $aOptions['variant'] = 'dark';
        $aOptions['background'] = 'dark';

        echo $oView->navigation()->navbar()->render($oNavigationContainer, $aOptions);
        echo PHP_EOL . '<br/>' . PHP_EOL;

        // Navbar dark, background primary
        $aOptions['variant'] = 'dark';
        $aOptions['background'] = 'primary';

        echo $oView->navigation()->navbar()->render($oNavigationContainer, $aOptions);
        echo PHP_EOL . '<br/>' . PHP_EOL;

        // Navbar light, custom background-color
        $aOptions['variant'] = 'dark';
        $aOptions['background'] = false;
        $aOptions['attributes'] = ['style' => 'background-color: #e3f2fd;'];

        echo $oView->navigation()->navbar()->render($oNavigationContainer, $aOptions);
    },
    'expected' => '<nav class="bg-dark&#x20;navbar&#x20;navbar-dark&#x20;navbar-expand-lg">' . PHP_EOL .
        '    <a class="navbar-brand" href="&#x23;">Navbar</a>' . PHP_EOL .
        '    <button type="button" name="navbar_toggler" class="navbar-toggler" data-toggle="collapse" ' .
        'aria-expanded="false" aria-label="Toggle&#x20;navigation" value="">' .
        '<span class="navbar-toggler-icon"></span></button>' . PHP_EOL .
        '    <div class="collapse&#x20;navbar-collapse">' . PHP_EOL .
        '        <ul class="mr-auto&#x20;nav&#x20;navbar-nav">' . PHP_EOL .
        '            <li class="&#x20;nav-item">' . PHP_EOL .
        '                <a class="nav-link&#x20;active" href="&#x23;">' .
        'Home <span class="sr-only">(current)</span></a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '            <li class="nav-item">' . PHP_EOL .
        '                <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '            <li class="nav-item">' . PHP_EOL .
        '                <a class="nav-link" href="&#x23;">Features</a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '            <li class="nav-item">' . PHP_EOL .
        '                <a class="nav-link" href="&#x23;">Pricing</a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '            <li class="nav-item">' . PHP_EOL .
        '                <a class="nav-link" href="&#x23;">About</a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '        </ul>' . PHP_EOL .
        '        <form action="" method="POST" name="form" role="form" class="align-items-center" id="form">' .
        PHP_EOL .
        '            <input name="search" type="search" placeholder="Search" aria-label="Search" ' .
        'class="form-control&#x20;mr-sm-2" value=""/>' . PHP_EOL .
        '            <button type="submit" name="submit" class="btn&#x20;btn-outline-success" value="">' .
        'Search</button>' . PHP_EOL .
        '        </form>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</nav>' . PHP_EOL .
        '<br/>' . PHP_EOL .
        '<nav class="bg-primary&#x20;navbar&#x20;navbar-dark&#x20;navbar-expand-lg">' . PHP_EOL .
        '    <a class="navbar-brand" href="&#x23;">Navbar</a>' . PHP_EOL .
        '    <button type="button" name="navbar_toggler" class="navbar-toggler" data-toggle="collapse" ' .
        'aria-expanded="false" aria-label="Toggle&#x20;navigation" value="">' .
        '<span class="navbar-toggler-icon"></span></button>' . PHP_EOL .
        '    <div class="collapse&#x20;navbar-collapse">' . PHP_EOL .
        '        <ul class="mr-auto&#x20;nav&#x20;navbar-nav">' . PHP_EOL .
        '            <li class="&#x20;nav-item">' . PHP_EOL .
        '                <a class="nav-link&#x20;active" href="&#x23;">' .
        'Home <span class="sr-only">(current)</span></a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '            <li class="nav-item">' . PHP_EOL .
        '                <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '            <li class="nav-item">' . PHP_EOL .
        '                <a class="nav-link" href="&#x23;">Features</a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '            <li class="nav-item">' . PHP_EOL .
        '                <a class="nav-link" href="&#x23;">Pricing</a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '            <li class="nav-item">' . PHP_EOL .
        '                <a class="nav-link" href="&#x23;">About</a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '        </ul>' . PHP_EOL .
        '        <form action="" method="POST" name="form" role="form" class="align-items-center" id="form">' .
        PHP_EOL .
        '            <input name="search" type="search" placeholder="Search" aria-label="Search" ' .
        'class="form-control&#x20;mr-sm-2" value=""/>' . PHP_EOL .
        '            <button type="submit" name="submit" class="btn&#x20;btn-outline-success" value="">' .
        'Search</button>' . PHP_EOL .
        '        </form>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</nav>' . PHP_EOL .
        '<br/>' . PHP_EOL .
        '<nav class="navbar&#x20;navbar-dark&#x20;navbar-expand-lg" ' .
        'style="background-color&#x3A;&#x20;&#x23;e3f2fd&#x3B;">' . PHP_EOL .
        '    <a class="navbar-brand" href="&#x23;">Navbar</a>' . PHP_EOL .
        '    <button type="button" name="navbar_toggler" class="navbar-toggler" data-toggle="collapse" ' .
        'aria-expanded="false" aria-label="Toggle&#x20;navigation" value="">' .
        '<span class="navbar-toggler-icon"></span></button>' . PHP_EOL .
        '    <div class="collapse&#x20;navbar-collapse">' . PHP_EOL .
        '        <ul class="mr-auto&#x20;nav&#x20;navbar-nav">' . PHP_EOL .
        '            <li class="&#x20;nav-item">' . PHP_EOL .
        '                <a class="nav-link&#x20;active" href="&#x23;">' .
        'Home <span class="sr-only">(current)</span></a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '            <li class="nav-item">' . PHP_EOL .
        '                <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '            <li class="nav-item">' . PHP_EOL .
        '                <a class="nav-link" href="&#x23;">Features</a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '            <li class="nav-item">' . PHP_EOL .
        '                <a class="nav-link" href="&#x23;">Pricing</a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '            <li class="nav-item">' . PHP_EOL .
        '                <a class="nav-link" href="&#x23;">About</a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '        </ul>' . PHP_EOL .
        '        <form action="" method="POST" name="form" role="form" class="align-items-center" id="form">' .
        PHP_EOL .
        '            <input name="search" type="search" placeholder="Search" aria-label="Search" ' .
        'class="form-control&#x20;mr-sm-2" value=""/>' . PHP_EOL .
        '            <button type="submit" name="submit" class="btn&#x20;btn-outline-success" value="">' .
        'Search</button>' . PHP_EOL .
        '        </form>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</nav>',
];
