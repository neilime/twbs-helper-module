<?php

// Documentation test config file for "Components / Dropdowns / Dropdown options" part
return [
    'title' => 'Dropdown options',
    'url' => '%bootstrap-url%/components/dropdowns/#dropdown-options',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {

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
        '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
        '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
        '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
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
        '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
        '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
        '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</div>' . PHP_EOL .
        '</div>',
];
