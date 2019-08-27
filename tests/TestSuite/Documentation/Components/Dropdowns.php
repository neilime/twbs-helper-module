<?php

// Documentation test config file for "Components / Dropdowns" part
return [
    'title' => 'Dropdowns',
    'url' => '%bootstrap-url%/components/dropdowns/',
    'tests' => [
        [
            'title' => 'Examples',
            'url' => '%bootstrap-url%/components/dropdowns/#examples',
            'tests' => [
                [
                    'title' => 'Single button',
                    'url' => '%bootstrap-url%/components/dropdowns/#single-button',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->formButton([
                            'name' => 'dropdown',
                            'options' => [
                                'label' => 'Dropdown',
                                'dropdown' => ['Action', 'Another action', 'Something else here',],
                            ],
                            'attributes' => ['id' => 'dropdownMenuButton'],
                        ]);


                        echo PHP_EOL . '<br>' . PHP_EOL;

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

                        echo PHP_EOL . '<br>' . PHP_EOL;

                        // Variations
                        foreach ([
                            'primary', 'secondary', 'success', 'danger',
                            'warning', 'info', 'light', 'dark',
                        ] as $sVariant) {
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
                        '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<br>' . PHP_EOL .
                        '<div class="dropdown">' . PHP_EOL .
                        '    <a id="dropdownMenuButton" data-toggle="dropdown" role="button" aria-haspopup="true" ' .
                        'aria-expanded="false" href="&#x23;" class="btn&#x20;btn-secondary&#x20;dropdown-toggle">' .
                        'Dropdown</a>' . PHP_EOL .
                        '    <div aria-labelledby="dropdownMenuButton" class="dropdown-menu">' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<br>' . PHP_EOL .
                        '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                        '    <button type="button" name="dropdown" ' .
                        'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                        'class="btn&#x20;btn-primary&#x20;dropdown-toggle" value="">' .
                        'Dropdown</button>' . PHP_EOL .
                        '    <div class="dropdown-menu">' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                        '        <div class="dropdown-divider"></div>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Separated link</a>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                        '    <button type="button" name="dropdown" ' .
                        'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                        'class="btn&#x20;btn-secondary&#x20;dropdown-toggle" value="">' .
                        'Dropdown</button>' . PHP_EOL .
                        '    <div class="dropdown-menu">' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                        '        <div class="dropdown-divider"></div>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Separated link</a>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                        '    <button type="button" name="dropdown" ' .
                        'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                        'class="btn&#x20;btn-success&#x20;dropdown-toggle" value="">' .
                        'Dropdown</button>' . PHP_EOL .
                        '    <div class="dropdown-menu">' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                        '        <div class="dropdown-divider"></div>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Separated link</a>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                        '    <button type="button" name="dropdown" ' .
                        'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                        'class="btn&#x20;btn-danger&#x20;dropdown-toggle" value="">' .
                        'Dropdown</button>' . PHP_EOL .
                        '    <div class="dropdown-menu">' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                        '        <div class="dropdown-divider"></div>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Separated link</a>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                        '    <button type="button" name="dropdown" ' .
                        'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                        'class="btn&#x20;btn-warning&#x20;dropdown-toggle" value="">' .
                        'Dropdown</button>' . PHP_EOL .
                        '    <div class="dropdown-menu">' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                        '        <div class="dropdown-divider"></div>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Separated link</a>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                        '    <button type="button" name="dropdown" ' .
                        'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                        'class="btn&#x20;btn-info&#x20;dropdown-toggle" value="">' .
                        'Dropdown</button>' . PHP_EOL .
                        '    <div class="dropdown-menu">' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                        '        <div class="dropdown-divider"></div>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Separated link</a>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                        '    <button type="button" name="dropdown" ' .
                        'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                        'class="btn&#x20;btn-light&#x20;dropdown-toggle" value="">' .
                        'Dropdown</button>' . PHP_EOL .
                        '    <div class="dropdown-menu">' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                        '        <div class="dropdown-divider"></div>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Separated link</a>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                        '    <button type="button" name="dropdown" ' .
                        'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                        'class="btn&#x20;btn-dark&#x20;dropdown-toggle" value="">' .
                        'Dropdown</button>' . PHP_EOL .
                        '    <div class="dropdown-menu">' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                        '        <div class="dropdown-divider"></div>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Separated link</a>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>' . PHP_EOL,
                ],
                [
                    'title' => 'Split button',
                    'url' => '%bootstrap-url%/components/dropdowns/#split-button',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        foreach ([
                            'primary', 'secondary', 'success', 'danger',
                            'warning', 'info', 'light', 'dark',
                        ] as $sVariant) {
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
                        '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                        '        <div class="dropdown-divider"></div>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Separated link</a>' . PHP_EOL .
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
                        '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                        '        <div class="dropdown-divider"></div>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Separated link</a>' . PHP_EOL .
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
                        '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                        '        <div class="dropdown-divider"></div>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Separated link</a>' . PHP_EOL .
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
                        '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                        '        <div class="dropdown-divider"></div>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Separated link</a>' . PHP_EOL .
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
                        '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                        '        <div class="dropdown-divider"></div>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Separated link</a>' . PHP_EOL .
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
                        '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                        '        <div class="dropdown-divider"></div>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Separated link</a>' . PHP_EOL .
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
                        '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                        '        <div class="dropdown-divider"></div>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Separated link</a>' . PHP_EOL .
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
                        '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                        '        <div class="dropdown-divider"></div>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Separated link</a>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>' . PHP_EOL,
                ],
            ],
        ],
        [
            'title' => 'Sizing',
            'url' => '%bootstrap-url%/components/dropdowns/#sizing',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                // Large button
                echo $oView->formButton([
                    'name' => 'dropdown',
                    'options' => [
                        'label' => 'Large button',
                        'size' => 'lg',
                        'dropdown' => [
                            'attributes' => ['class' => 'btn-group'],
                            'items' => ['Action', 'Another action', 'Something else here', '---', 'Separated link'],
                        ],
                    ],
                ]) . PHP_EOL;

                // Large split button
                echo $oView->formButton([
                    'name' => 'dropdown',
                    'options' => [
                        'label' => 'Large button',
                        'size' => 'lg',
                        'dropdown' => [
                            'split' => 'Toggle Dropdown',
                            'items' => ['Action', 'Another action', 'Something else here', '---', 'Separated link'],
                        ],
                    ],
                ]);

                echo PHP_EOL . '<br><br>' . PHP_EOL;

                // Small button
                echo $oView->formButton([
                    'name' => 'dropdown',
                    'options' => [
                        'label' => 'Small button',
                        'size' => 'sm',
                        'dropdown' => [
                            'attributes' => ['class' => 'btn-group'],
                            'items' => ['Action', 'Another action', 'Something else here', '---', 'Separated link'],
                        ],
                    ],
                ]) . PHP_EOL;

                // Small split button
                echo $oView->formButton([
                    'name' => 'dropdown',
                    'options' => [
                        'label' => 'Small button',
                        'size' => 'sm',
                        'dropdown' => [
                            'split' => 'Toggle Dropdown',
                            'items' => ['Action', 'Another action', 'Something else here', '---', 'Separated link'],
                        ],
                    ],
                ]);
            },
            'expected' => '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                '    <button type="button" name="dropdown" ' .
                'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                'class="btn&#x20;btn-lg&#x20;btn-secondary&#x20;dropdown-toggle" value="">' .
                'Large button</button>' . PHP_EOL .
                '    <div class="dropdown-menu">' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                '        <div class="dropdown-divider"></div>' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Separated link</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                '    <button type="button" name="dropdown" class="btn&#x20;btn-lg&#x20;btn-secondary" ' .
                'value="">Large button</button>' . PHP_EOL .
                '    <button type="button" name="dropdown-toggle" ' .
                'class="btn&#x20;btn-lg&#x20;btn-secondary&#x20;dropdown-toggle&#x20;dropdown-toggle-split" ' .
                'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                'value=""><span class="sr-only">Toggle Dropdown</span></button>' . PHP_EOL .
                '    <div class="dropdown-menu">' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                '        <div class="dropdown-divider"></div>' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Separated link</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<br><br>' . PHP_EOL .
                '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                '    <button type="button" name="dropdown" ' .
                'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                'class="btn&#x20;btn-secondary&#x20;btn-sm&#x20;dropdown-toggle" ' .
                'value="">Small button</button>' . PHP_EOL .
                '    <div class="dropdown-menu">' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                '        <div class="dropdown-divider"></div>' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Separated link</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                '    <button type="button" name="dropdown" class="btn&#x20;btn-secondary&#x20;btn-sm" ' .
                'value="">Small button</button>' . PHP_EOL .
                '    <button type="button" name="dropdown-toggle" ' .
                'class="btn&#x20;btn-secondary&#x20;btn-sm&#x20;dropdown-toggle&#x20;dropdown-toggle-split" ' .
                'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                'value=""><span class="sr-only">Toggle Dropdown</span></button>' . PHP_EOL .
                '    <div class="dropdown-menu">' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                '        <div class="dropdown-divider"></div>' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Separated link</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
        ],
        [
            'title' => 'Directions',
            'url' => '%bootstrap-url%/components/dropdowns/#directions',
            'tests' => [
                [
                    'title' => 'Dropup',
                    'url' => '%bootstrap-url%/components/dropdowns/#dropup',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        // Dropup button
                        echo $oView->formButton([
                            'name' => 'dropup',
                            'options' => [
                                'label' => 'Dropup',
                                'size' => 'lg',
                                'dropdown' => [
                                    'direction' => 'up',
                                    'attributes' => ['class' => 'btn-group'],
                                    'items' => [
                                        'Action',
                                        'Another action',
                                        'Something else here',
                                        '---',
                                        'Separated link',
                                    ]
                                ],
                            ],
                        ]) . PHP_EOL;

                        // Dropup split button
                        echo $oView->formButton([
                            'name' => 'split-dropup',
                            'options' => [
                                'label' => 'Split dropup',
                                'size' => 'lg',
                                'dropdown' => [
                                    'direction' => 'up',
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
                        ]);
                    },
                    'expected' => '<div class="btn-group&#x20;dropup">' . PHP_EOL .
                        '    <button type="button" name="dropup" ' .
                        'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                        'class="btn&#x20;btn-lg&#x20;btn-secondary&#x20;dropdown-toggle" ' .
                        'value="">Dropup</button>' . PHP_EOL .
                        '    <div class="dropdown-menu">' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                        '        <div class="dropdown-divider"></div>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Separated link</a>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<div class="btn-group&#x20;dropup">' . PHP_EOL .
                        '    <button type="button" name="split-dropup" class="btn&#x20;btn-lg&#x20;btn-secondary" ' .
                        'value="">Split dropup</button>' . PHP_EOL .
                        '    <button type="button" name="split-dropup-toggle" ' .
                        'class="btn&#x20;btn-lg&#x20;btn-secondary&#x20;dropdown-toggle&#x20;dropdown-toggle-split" ' .
                        'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                        'value=""><span class="sr-only">Toggle Dropdown</span></button>' . PHP_EOL .
                        '    <div class="dropdown-menu">' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                        '        <div class="dropdown-divider"></div>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Separated link</a>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>',
                ],
                [
                    'title' => 'Dropright',
                    'url' => '%bootstrap-url%/components/dropdowns/#dropright',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        // Dropright button
                        echo $oView->formButton([
                            'name' => 'dropright',
                            'options' => [
                                'label' => 'Dropright',
                                'size' => 'lg',
                                'dropdown' => [
                                    'direction' => 'right',
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

                        // Dropright split button
                        echo $oView->formButton([
                            'name' => 'split-dropright',
                            'options' => [
                                'label' => 'Split dropright',
                                'size' => 'lg',
                                'dropdown' => [
                                    'direction' => 'right',
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
                        ]);
                    },
                    'expected' => '<div class="btn-group&#x20;dropright">' . PHP_EOL .
                        '    <button type="button" name="dropright" ' .
                        'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                        'class="btn&#x20;btn-lg&#x20;btn-secondary&#x20;dropdown-toggle" ' .
                        'value="">Dropright</button>' . PHP_EOL .
                        '    <div class="dropdown-menu">' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                        '        <div class="dropdown-divider"></div>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Separated link</a>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<div class="btn-group&#x20;dropright">' . PHP_EOL .
                        '    <button type="button" name="split-dropright" ' .
                        'class="btn&#x20;btn-lg&#x20;btn-secondary" value="">Split dropright</button>' . PHP_EOL .
                        '    <button type="button" name="split-dropright-toggle" ' .
                        'class="btn&#x20;btn-lg&#x20;btn-secondary&#x20;dropdown-toggle&#x20;dropdown-toggle-split" ' .
                        'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                        'value=""><span class="sr-only">Toggle Dropdown</span></button>' . PHP_EOL .
                        '    <div class="dropdown-menu">' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                        '        <div class="dropdown-divider"></div>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Separated link</a>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>',
                ],
            ],
        ],
        [
            'title' => 'Menu items',
            'url' => '%bootstrap-url%/components/dropdowns/#menu-items',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->formButton([
                    'name' => 'dropdown',
                    'options' => [
                        'label' => 'Dropdown',
                        'dropdown' => ['Action', 'Another action', 'Something else here'],
                    ],
                    'attributes' => ['id' => 'dropdownMenu2'],
                ]);

                echo PHP_EOL . '<br>' . PHP_EOL;

                // Non-interactive dropdown items
                echo $oView->dropdown()->renderMenu([
                    'Dropdown item text' => \TwbsHelper\View\Helper\Dropdown::TYPE_ITEM_TEXT,
                    'Action',
                    'Another action',
                    'Something else here'
                ]);
            },
            'expected' => '<div class="dropdown">' . PHP_EOL .
                '    <button type="button" name="dropdown" id="dropdownMenu2" ' .
                'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                'class="btn&#x20;btn-secondary&#x20;dropdown-toggle" value="">' .
                'Dropdown</button>' . PHP_EOL .
                '    <div aria-labelledby="dropdownMenu2" class="dropdown-menu">' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<br>' . PHP_EOL .
                '<div class="dropdown-menu">' . PHP_EOL .
                '    <span class="dropdown-item-text">Dropdown item text</span>' . PHP_EOL .
                '    <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                '    <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                '    <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                '</div>',
            'tests' => [
                [
                    'title' => 'Active',
                    'url' => '%bootstrap-url%/components/dropdowns/#active',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->dropdown()->renderMenu([
                            'Regular link',
                            'Active link' => ['active' => true],
                            'Another link'
                        ]);
                    },
                    'expected' => '<div class="dropdown-menu">' . PHP_EOL .
                        '    <a href="&#x23;" class="dropdown-item">Regular link</a>' . PHP_EOL .
                        '    <a href="&#x23;" class="active&#x20;dropdown-item">Active link</a>' . PHP_EOL .
                        '    <a href="&#x23;" class="dropdown-item">Another link</a>' . PHP_EOL .
                        '</div>',
                ],
                [
                    'title' => 'Disabled',
                    'url' => '%bootstrap-url%/components/dropdowns/#disabled',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->dropdown()->renderMenu([
                            'Regular link',
                            'Disabled link' => ['disabled' => true],
                            'Another link'
                        ]);
                    },
                    'expected' => '<div class="dropdown-menu">' . PHP_EOL .
                        '    <a href="&#x23;" class="dropdown-item">Regular link</a>' . PHP_EOL .
                        '    <a href="&#x23;" tabindex="-1" aria-disabled="true" class="disabled&#x20;dropdown-item">' .
                        'Disabled link</a>' . PHP_EOL .
                        '    <a href="&#x23;" class="dropdown-item">Another link</a>' . PHP_EOL .
                        '</div>',
                ],
            ],
        ],
        [
            'title' => 'Menu alignment',
            'url' => '%bootstrap-url%/components/dropdowns/#menu-alignment',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
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
                '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
            'tests' => [
                [
                    'title' => 'Responsive alignment',
                    'url' => '%bootstrap-url%/components/dropdowns/#responsive-alignment',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
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

                        echo PHP_EOL . '<br>' . PHP_EOL;

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
                        '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<br>' . PHP_EOL .
                        '<div class="dropdown">' . PHP_EOL .
                        '    <button type="button" name="dropdown" ' .
                        'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                        'class="btn&#x20;btn-secondary&#x20;dropdown-toggle" value="">' .
                        'Left-aligned but right aligned when large screen</button>' . PHP_EOL .
                        '    <div class="dropdown-menu&#x20;dropdown-menu-lg-left&#x20;dropdown-menu-right">'
                        . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>',
                ],
            ],
        ],
        [
            'title' => 'Menu content',
            'url' => '%bootstrap-url%/components/dropdowns/#menu-content',
            'tests' => [
                [
                    'title' => 'Headers',
                    'url' => '%bootstrap-url%/components/dropdowns/#headers',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->dropdown()->renderMenu([
                            'Dropdown header' => \TwbsHelper\View\Helper\Dropdown::TYPE_ITEM_HEADER,
                            'Action',
                            'Another action',
                        ]);
                    },
                    'expected' => '<div class="dropdown-menu">' . PHP_EOL .
                        '    <h6 class="dropdown-header">Dropdown header</h6>' . PHP_EOL .
                        '    <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '    <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '</div>',
                ],
                [
                    'title' => 'Dividers',
                    'url' => '%bootstrap-url%/components/dropdowns/#headers',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->dropdown()->renderMenu([
                            'Action',
                            'Another action',
                            'Something else here',
                            '---',
                            'Separated link',
                        ]);
                    },
                    'expected' => '<div class="dropdown-menu">' . PHP_EOL .
                        '    <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '    <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '    <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                        '    <div class="dropdown-divider"></div>' . PHP_EOL .
                        '    <a href="&#x23;" class="dropdown-item">Separated link</a>' . PHP_EOL .
                        '</div>',
                ],
                [
                    'title' => 'Text',
                    'url' => '%bootstrap-url%/components/dropdowns/#headers',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->dropdown()->renderMenu([
                            '<p>Some example text that\'s free-flowing within the dropdown menu.</p>',
                            '<p class="mb-0">And this is more example text.</p>',
                        ], ['class' => 'p-4 text-muted', 'style' => 'max-width: 200px;']);
                    },
                    'expected' =>
                    '<div class="dropdown-menu&#x20;p-4&#x20;text-muted" style="max-width&#x3A;&#x20;200px&#x3B;">'
                        . PHP_EOL .
                        '    <p>Some example text that\'s free-flowing within the dropdown menu.</p>' . PHP_EOL .
                        '    <p class="mb-0">And this is more example text.</p>' . PHP_EOL .
                        '</div>',
                ],
                [
                    'title' => 'Forms',
                    'url' => '%bootstrap-url%/components/dropdowns/#forms',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {

                        // Create form
                        $oFactory = new \Zend\Form\Factory();
                        $oForm = $oFactory->create([
                            'type' => 'form',
                            'name' => 'dropdown',
                            'attributes' => ['id' => 'dropdown'],
                            'elements' => [
                                [
                                    'spec' => [
                                        'name' => 'email',
                                        'options' => ['label' => 'Email address'],
                                        'attributes' => [
                                            'type' => 'email',
                                            'id' => 'exampleDropdownFormEmail1',
                                            'placeholder' => 'email@example.com',
                                        ],
                                    ],
                                ],
                                [
                                    'spec' => [
                                        'name' => 'password',
                                        'options' => ['label' => 'Password'],
                                        'attributes' => [
                                            'type' => 'password',
                                            'id' => 'exampleDropdownFormPassword1',
                                            'placeholder' => 'Password',
                                        ],
                                    ],
                                ],
                                [
                                    'spec' => [
                                        'type' => 'checkbox',
                                        'name' => 'remember_me',
                                        'options' => ['label' => 'Remember me', 'use_hidden_element' => false],
                                        'attributes' => [
                                            'id' => 'dropdownCheck',
                                        ],
                                    ],
                                ],
                                [
                                    'spec' => [
                                        'type' => 'submit',
                                        'options' => ['label' => 'Sign in', 'variant' => 'primary'],
                                    ],
                                ],
                            ]
                        ]);

                        echo $oView->dropdown()->renderMenu([
                            $oForm,
                            'New around here? Sign up',
                            'Forgot password?',
                        ]);
                    },
                    'expected' => '<div class="dropdown-menu">' . PHP_EOL .
                        '    <form method="POST" name="dropdown" id="dropdown" role="form">' . PHP_EOL .
                        '        <div class="form-group">' . PHP_EOL .
                        '            <label for="exampleDropdownFormEmail1">Email address</label>' . PHP_EOL .
                        '            <input name="email" type="email" id="exampleDropdownFormEmail1" ' .
                        'placeholder="email&#x40;example.com" class="form-control" value="">' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="form-group">' . PHP_EOL .
                        '            <label for="exampleDropdownFormPassword1">Password</label>' . PHP_EOL .
                        '            <input name="password" type="password" id="exampleDropdownFormPassword1" ' .
                        'placeholder="Password" class="form-control" value="">' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="form-group">' . PHP_EOL .
                        '            <div class="form-check">' . PHP_EOL .
                        '                <input type="checkbox" name="remember_me" id="dropdownCheck" ' .
                        'class="form-check-input" value="1">' . PHP_EOL .
                        '                <label class="form-check-label" for="dropdownCheck">' .
                        'Remember me</label>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="form-group">' . PHP_EOL .
                        '            <button type="submit" name="submit" class="btn&#x20;btn-primary" value="">' .
                        'Sign in</button>' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </form>' . PHP_EOL .
                        '    <a href="&#x23;" class="dropdown-item">New around here? Sign up</a>' . PHP_EOL .
                        '    <a href="&#x23;" class="dropdown-item">Forgot password?</a>' . PHP_EOL .
                        '</div>',
                ],
            ],
        ],
        [
            'title' => 'Dropdown options',
            'url' => '%bootstrap-url%/components/dropdowns/#dropdown-options',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {

                echo '<div class="d-flex">' . PHP_EOL;

                echo $oView->formButton([
                    'name' => 'dropdown',
                    'options' => [
                        'label' => 'Offset',
                        'dropdown' => [
                            'attributes' => ['class' => 'mr-1'],
                            'offset' => '10,20',
                            'items' => ['Action', 'Another action', 'Something else here'],
                        ],
                    ],
                    'attributes' => ['id' => 'dropdownMenuOffset'],
                ]) . PHP_EOL;

                echo $oView->formButton([
                    'name' => 'dropdown',
                    'options' => [
                        'label' => 'Reference',
                        'dropdown' => [
                            'split' => [
                                'attributes' => ['data-reference' => 'parent'],
                            ],
                            'items' => ['Action', 'Another action', 'Something else here'],
                        ],
                    ],
                    'attributes' => ['id' => 'dropdownMenuReference'],
                ]);


                echo PHP_EOL . '</div>';
            },
            'expected' => '<div class="d-flex">' . PHP_EOL .
                '<div class="dropdown&#x20;mr-1">' . PHP_EOL .
                '    <button type="button" name="dropdown" id="dropdownMenuOffset" ' .
                'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                'data-offset="10,20" class="btn&#x20;btn-secondary&#x20;dropdown-toggle" value="">' .
                'Offset</button>' . PHP_EOL .
                '    <div aria-labelledby="dropdownMenuOffset" class="dropdown-menu">' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
                '    <button type="button" name="dropdown" id="dropdownMenuReference" ' .
                'class="btn&#x20;btn-secondary" value="">' .
                'Reference</button>' . PHP_EOL .
                '    <button type="button" name="dropdown-toggle" ' .
                'class="btn&#x20;btn-secondary&#x20;dropdown-toggle&#x20;dropdown-toggle-split" ' .
                'data-reference="parent" data-toggle="dropdown" role="button" aria-haspopup="true" ' .
                'aria-expanded="false" value=""><span class="sr-only">Reference</span></button>' . PHP_EOL .
                '    <div aria-labelledby="dropdownMenuReference" class="dropdown-menu">' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                '        <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '</div>',
        ],
    ],
];
