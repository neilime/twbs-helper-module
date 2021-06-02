<?php

// Documentation test config file for "Components / Dropdowns / Examples" part
return [
    'title' => 'Examples',
    'url' => '%bootstrap-url%/components/dropdowns/#examples',
    'tests' => [
        [
            'title' => 'Single button',
            'url' => '%bootstrap-url%/components/dropdowns/#single-button',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->formButton([
                    'name' => 'dropdown',
                    'options' => [
                        'label' => 'Dropdown',
                        'dropdown' => ['Action', 'Another action', 'Something else here',],
                    ],
                    'attributes' => ['id' => 'dropdownMenuButton'],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // With <a> elements
                echo $oView->formButton([
                    'name' => 'dropdown',
                    'options' => [
                        'tag' => 'a',
                        'label' => 'Dropdown',
                        'dropdown' => ['Action', 'Another action', 'Something else here',],
                    ],
                    'attributes' => ['id' => 'dropdownMenuButton'],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Variations
                foreach (
                    [
                    'primary', 'secondary', 'success', 'danger',
                    'warning', 'info', 'light', 'dark',
                    ] as $sVariant
                ) {
                    echo $oView->formButton([
                        'name' => 'dropdown',
                        'options' => [
                            'variant' => $sVariant,
                            'label' => 'Dropdown',
                            'dropdown' => [
                                'attributes' => ['class' => 'btn-group'],
                                'items' => [
                                    'Action',
                                    'Another action',
                                    'Something else here',
                                    '---',
                                    'Separated link',
                                ],
                            ],
                        ],
                    ]) . PHP_EOL;
                }
            },
            'expected' => '<div class="dropdown">' . PHP_EOL .
                '    <button type="button" name="dropdown" id="dropdownMenuButton" ' .
                'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                'class="btn&#x20;btn-secondary&#x20;dropdown-toggle" value="">' .
                'Dropdown</button>' . PHP_EOL .
                '    <div aria-labelledby="dropdownMenuButton" class="dropdown-menu">' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<br/>' . PHP_EOL .
                '<div class="dropdown">' . PHP_EOL .
                '    <a id="dropdownMenuButton" data-toggle="dropdown" role="button" aria-haspopup="true" ' .
                'aria-expanded="false" href="&#x23;" class="btn&#x20;btn-secondary&#x20;dropdown-toggle">' .
                'Dropdown</a>' . PHP_EOL .
                '    <div aria-labelledby="dropdownMenuButton" class="dropdown-menu">' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<br/>' . PHP_EOL .
                '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                '    <button type="button" name="dropdown" ' .
                'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                'class="btn&#x20;btn-primary&#x20;dropdown-toggle" value="">' .
                'Dropdown</button>' . PHP_EOL .
                '    <div class="dropdown-menu">' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
                '        <div class="dropdown-divider"></div>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                '    <button type="button" name="dropdown" ' .
                'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                'class="btn&#x20;btn-secondary&#x20;dropdown-toggle" value="">' .
                'Dropdown</button>' . PHP_EOL .
                '    <div class="dropdown-menu">' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
                '        <div class="dropdown-divider"></div>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                '    <button type="button" name="dropdown" ' .
                'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                'class="btn&#x20;btn-success&#x20;dropdown-toggle" value="">' .
                'Dropdown</button>' . PHP_EOL .
                '    <div class="dropdown-menu">' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
                '        <div class="dropdown-divider"></div>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                '    <button type="button" name="dropdown" ' .
                'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                'class="btn&#x20;btn-danger&#x20;dropdown-toggle" value="">' .
                'Dropdown</button>' . PHP_EOL .
                '    <div class="dropdown-menu">' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
                '        <div class="dropdown-divider"></div>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                '    <button type="button" name="dropdown" ' .
                'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                'class="btn&#x20;btn-warning&#x20;dropdown-toggle" value="">' .
                'Dropdown</button>' . PHP_EOL .
                '    <div class="dropdown-menu">' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
                '        <div class="dropdown-divider"></div>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                '    <button type="button" name="dropdown" ' .
                'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                'class="btn&#x20;btn-info&#x20;dropdown-toggle" value="">' .
                'Dropdown</button>' . PHP_EOL .
                '    <div class="dropdown-menu">' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
                '        <div class="dropdown-divider"></div>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                '    <button type="button" name="dropdown" ' .
                'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                'class="btn&#x20;btn-light&#x20;dropdown-toggle" value="">' .
                'Dropdown</button>' . PHP_EOL .
                '    <div class="dropdown-menu">' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
                '        <div class="dropdown-divider"></div>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                '    <button type="button" name="dropdown" ' .
                'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                'class="btn&#x20;btn-dark&#x20;dropdown-toggle" value="">' .
                'Dropdown</button>' . PHP_EOL .
                '    <div class="dropdown-menu">' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
                '        <div class="dropdown-divider"></div>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL,
        ],
        [
            'title' => 'Split button',
            'url' => '%bootstrap-url%/components/dropdowns/#split-button',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                foreach (
                    [
                    'primary', 'secondary', 'success', 'danger',
                    'warning', 'info', 'light', 'dark',
                    ] as $sVariant
                ) {
                    echo $oView->formButton([
                        'name' => 'dropdown',
                        'options' => [
                            'variant' => $sVariant,
                            'label' => 'Dropdown',
                            'dropdown' => [
                                'split' => 'Toggle Dropdown',
                                'items' => [
                                    'Action',
                                    'Another action',
                                    'Something else here',
                                    '---',
                                    'Separated link',
                                ],
                            ],
                        ],
                    ]) . PHP_EOL;
                }
            },
            'expected' =>
            '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                '    <button type="button" name="dropdown" class="btn&#x20;btn-primary" ' .
                'value="">Dropdown</button>' . PHP_EOL .
                '    <button type="button" name="dropdown-toggle" ' .
                'class="btn&#x20;btn-primary&#x20;dropdown-toggle&#x20;dropdown-toggle-split" ' .
                'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                'value="">' .
                '<span class="sr-only">Toggle Dropdown</span></button>' . PHP_EOL .
                '    <div class="dropdown-menu">' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
                '        <div class="dropdown-divider"></div>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                '    <button type="button" name="dropdown" class="btn&#x20;btn-secondary" ' .
                'value="">Dropdown</button>' . PHP_EOL .
                '    <button type="button" name="dropdown-toggle" ' .
                'class="btn&#x20;btn-secondary&#x20;dropdown-toggle&#x20;dropdown-toggle-split" ' .
                'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                'value=""><span class="sr-only">Toggle Dropdown</span></button>' . PHP_EOL .
                '    <div class="dropdown-menu">' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
                '        <div class="dropdown-divider"></div>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                '    <button type="button" name="dropdown" class="btn&#x20;btn-success" ' .
                'value="">Dropdown</button>' . PHP_EOL .
                '    <button type="button" name="dropdown-toggle" ' .
                'class="btn&#x20;btn-success&#x20;dropdown-toggle&#x20;dropdown-toggle-split" ' .
                'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                'value=""><span class="sr-only">Toggle Dropdown</span></button>' . PHP_EOL .
                '    <div class="dropdown-menu">' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
                '        <div class="dropdown-divider"></div>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                '    <button type="button" name="dropdown" class="btn&#x20;btn-danger" ' .
                'value="">Dropdown</button>' . PHP_EOL .
                '    <button type="button" name="dropdown-toggle" ' .
                'class="btn&#x20;btn-danger&#x20;dropdown-toggle&#x20;dropdown-toggle-split" ' .
                'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                'value=""><span class="sr-only">Toggle Dropdown</span></button>' . PHP_EOL .
                '    <div class="dropdown-menu">' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
                '        <div class="dropdown-divider"></div>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                '    <button type="button" name="dropdown" class="btn&#x20;btn-warning" ' .
                'value="">Dropdown</button>' . PHP_EOL .
                '    <button type="button" name="dropdown-toggle" ' .
                'class="btn&#x20;btn-warning&#x20;dropdown-toggle&#x20;dropdown-toggle-split" ' .
                'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                'value=""><span class="sr-only">Toggle Dropdown</span></button>' . PHP_EOL .
                '    <div class="dropdown-menu">' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
                '        <div class="dropdown-divider"></div>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                '    <button type="button" name="dropdown" class="btn&#x20;btn-info" ' .
                'value="">Dropdown</button>' . PHP_EOL .
                '    <button type="button" name="dropdown-toggle" ' .
                'class="btn&#x20;btn-info&#x20;dropdown-toggle&#x20;dropdown-toggle-split" ' .
                'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                'value=""><span class="sr-only">Toggle Dropdown</span></button>' . PHP_EOL .
                '    <div class="dropdown-menu">' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
                '        <div class="dropdown-divider"></div>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                '    <button type="button" name="dropdown" class="btn&#x20;btn-light" ' .
                'value="">Dropdown</button>' . PHP_EOL .
                '    <button type="button" name="dropdown-toggle" ' .
                'class="btn&#x20;btn-light&#x20;dropdown-toggle&#x20;dropdown-toggle-split" ' .
                'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                'value=""><span class="sr-only">Toggle Dropdown</span></button>' . PHP_EOL .
                '    <div class="dropdown-menu">' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
                '        <div class="dropdown-divider"></div>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                '    <button type="button" name="dropdown" class="btn&#x20;btn-dark" ' .
                'value="">Dropdown</button>' . PHP_EOL .
                '    <button type="button" name="dropdown-toggle" ' .
                'class="btn&#x20;btn-dark&#x20;dropdown-toggle&#x20;dropdown-toggle-split" ' .
                'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                'value=""><span class="sr-only">Toggle Dropdown</span></button>' . PHP_EOL .
                '    <div class="dropdown-menu">' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
                '        <div class="dropdown-divider"></div>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL,
        ],
    ],
];
