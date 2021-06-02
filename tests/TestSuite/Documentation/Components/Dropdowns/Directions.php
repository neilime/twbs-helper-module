<?php

// Documentation test config file for "Components / Dropdowns / Directions" part
return [
    'title' => 'Directions',
    'url' => '%bootstrap-url%/components/dropdowns/#directions',
    'tests' => [
        [
            'title' => 'Dropup',
            'url' => '%bootstrap-url%/components/dropdowns/#dropup',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
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
                '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
                '        <div class="dropdown-divider"></div>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
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
                '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
                '        <div class="dropdown-divider"></div>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
        ],
        [
            'title' => 'Dropright',
            'url' => '%bootstrap-url%/components/dropdowns/#dropright',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
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
                '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
                '        <div class="dropdown-divider"></div>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
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
                '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
                '        <div class="dropdown-divider"></div>' . PHP_EOL .
                '        <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
        ],
    ],
];
