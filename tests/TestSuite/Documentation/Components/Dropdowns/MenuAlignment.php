<?php

// Documentation test config file for "Components / Dropdowns / Menu alignment" part
return [
    'title' => 'Menu alignment',
    'url' => '%bootstrap-url%/components/dropdowns/#menu-alignment',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        echo $oView->formButton([
            'name' => 'dropdown',
            'options' => [
                'label' => 'Right-aligned menu',
                'dropdown' => [
                    'alignment' => 'right',
                    'items' => ['Action', 'Another action', 'Something else here'],
                ],
            ],
        ]);
    },
    'expected' => '<div class="dropdown">' . PHP_EOL .
        '    <button type="button" name="dropdown" ' .
        'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
        'class="btn&#x20;btn-secondary&#x20;dropdown-toggle" value="">' .
        'Right-aligned menu</button>' . PHP_EOL .
        '    <div class="dropdown-menu&#x20;dropdown-menu-right">' . PHP_EOL .
        '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
        '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
        '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</div>',
    'tests' => [
        [
            'title' => 'Responsive alignment',
            'url' => '%bootstrap-url%/components/dropdowns/#responsive-alignment',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->formButton([
                    'name' => 'dropdown',
                    'options' => [
                        'label' => 'Left-aligned but right aligned when large screen',
                        'dropdown' => [
                            'alignment' => 'lg-right',
                            'items' => ['Action', 'Another action', 'Something else here'],
                        ],
                    ],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                echo $oView->formButton([
                    'name' => 'dropdown',
                    'options' => [
                        'label' => 'Left-aligned but right aligned when large screen',
                        'dropdown' => [
                            'alignment' => ['right', 'lg-left'],
                            'items' => ['Action', 'Another action', 'Something else here'],
                        ],
                    ],
                ]);
            },
            'expected' => '<div class="dropdown">' . PHP_EOL .
                '    <button type="button" name="dropdown" ' .
                'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                'class="btn&#x20;btn-secondary&#x20;dropdown-toggle" value="">' .
                'Left-aligned but right aligned when large screen</button>' . PHP_EOL .
                '    <div class="dropdown-menu&#x20;dropdown-menu-lg-right">' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<br/>' . PHP_EOL .
                '<div class="dropdown">' . PHP_EOL .
                '    <button type="button" name="dropdown" ' .
                'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                'class="btn&#x20;btn-secondary&#x20;dropdown-toggle" value="">' .
                'Left-aligned but right aligned when large screen</button>' . PHP_EOL .
                '    <div class="dropdown-menu&#x20;dropdown-menu-lg-left&#x20;dropdown-menu-right">'
                . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
        ],
    ],
];
