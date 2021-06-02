<?php

// Documentation test config file for "Components / Dropdowns / Sizing" part
return [
    'title' => 'Sizing',
    'url' => '%bootstrap-url%/components/dropdowns/#sizing',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
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

        echo PHP_EOL . '<br/><br/>' . PHP_EOL;

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
        '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
        '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
        '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
        '        <div class="dropdown-divider"></div>' . PHP_EOL .
        '        <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
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
        '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
        '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
        '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
        '        <div class="dropdown-divider"></div>' . PHP_EOL .
        '        <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</div>' . PHP_EOL .
        '<br/><br/>' . PHP_EOL .
        '<div class="btn-group&#x20;dropdown">' . PHP_EOL .
        '    <button type="button" name="dropdown" ' .
        'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
        'class="btn&#x20;btn-secondary&#x20;btn-sm&#x20;dropdown-toggle" ' .
        'value="">Small button</button>' . PHP_EOL .
        '    <div class="dropdown-menu">' . PHP_EOL .
        '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
        '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
        '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
        '        <div class="dropdown-divider"></div>' . PHP_EOL .
        '        <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
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
        '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
        '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
        '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
        '        <div class="dropdown-divider"></div>' . PHP_EOL .
        '        <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</div>',
];
