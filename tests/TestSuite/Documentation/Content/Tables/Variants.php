<?php

// Documentation test config file for "Content / Tables / Variants" part
return [
    'title' => 'Variants',
    'url' => '%bootstrap-url%/content/tables/#variants',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        // Use "variant" option to color tables, table rows or individual cells.
        echo $oView->table([
            'head' => ['Class', 'Heading', 'Heading'],
            'body' => [
                ['Default', 'Cell', 'Cell'],
                [
                    'variant' => 'primary',
                    'cells' => ['Primary', 'Cell', 'Cell'],
                ],
                [
                    'variant' => 'secondary',
                    'cells' => ['Secondary', 'Cell', 'Cell'],
                ],
                [
                    'variant' => 'success',
                    'cells' => ['Success', 'Cell', 'Cell'],
                ],
                [
                    'variant' => 'danger',
                    'cells' => ['Danger', 'Cell', 'Cell'],
                ],
                [
                    'variant' => 'warning',
                    'cells' => ['Warning', 'Cell', 'Cell'],
                ],
                [
                    'variant' => 'info',
                    'cells' => ['Info', 'Cell', 'Cell'],
                ],
                [
                    'variant' => 'light',
                    'cells' => ['Light', 'Cell', 'Cell'],
                ],
                [
                    'variant' => 'dark',
                    'cells' => ['Dark', 'Cell', 'Cell'],
                ],
            ],
        ]);
    },
    'expected' => '<table class="table">' . PHP_EOL .
        '    <thead>' . PHP_EOL .
        '        <tr>' . PHP_EOL .
        '            <th scope="col">Class</th>' . PHP_EOL .
        '            <th scope="col">Heading</th>' . PHP_EOL .
        '            <th scope="col">Heading</th>' . PHP_EOL .
        '        </tr>' . PHP_EOL .
        '    </thead>' . PHP_EOL .
        '    <tbody>' . PHP_EOL .
        '        <tr>' . PHP_EOL .
        '            <th scope="row">Default</th>' . PHP_EOL .
        '            <td>Cell</td>' . PHP_EOL .
        '            <td>Cell</td>' . PHP_EOL .
        '        </tr>' . PHP_EOL .
        '        <tr class="table-primary">' . PHP_EOL .
        '            <th scope="row">Primary</th>' . PHP_EOL .
        '            <td>Cell</td>' . PHP_EOL .
        '            <td>Cell</td>' . PHP_EOL .
        '        </tr>' . PHP_EOL .
        '        <tr class="table-secondary">' . PHP_EOL .
        '            <th scope="row">Secondary</th>' . PHP_EOL .
        '            <td>Cell</td>' . PHP_EOL .
        '            <td>Cell</td>' . PHP_EOL .
        '        </tr>' . PHP_EOL .
        '        <tr class="table-success">' . PHP_EOL .
        '            <th scope="row">Success</th>' . PHP_EOL .
        '            <td>Cell</td>' . PHP_EOL .
        '            <td>Cell</td>' . PHP_EOL .
        '        </tr>' . PHP_EOL .
        '        <tr class="table-danger">' . PHP_EOL .
        '            <th scope="row">Danger</th>' . PHP_EOL .
        '            <td>Cell</td>' . PHP_EOL .
        '            <td>Cell</td>' . PHP_EOL .
        '        </tr>' . PHP_EOL .
        '        <tr class="table-warning">' . PHP_EOL .
        '            <th scope="row">Warning</th>' . PHP_EOL .
        '            <td>Cell</td>' . PHP_EOL .
        '            <td>Cell</td>' . PHP_EOL .
        '        </tr>' . PHP_EOL .
        '        <tr class="table-info">' . PHP_EOL .
        '            <th scope="row">Info</th>' . PHP_EOL .
        '            <td>Cell</td>' . PHP_EOL .
        '            <td>Cell</td>' . PHP_EOL .
        '        </tr>' . PHP_EOL .
        '        <tr class="table-light">' . PHP_EOL .
        '            <th scope="row">Light</th>' . PHP_EOL .
        '            <td>Cell</td>' . PHP_EOL .
        '            <td>Cell</td>' . PHP_EOL .
        '        </tr>' . PHP_EOL .
        '        <tr class="table-dark">' . PHP_EOL .
        '            <th scope="row">Dark</th>' . PHP_EOL .
        '            <td>Cell</td>' . PHP_EOL .
        '            <td>Cell</td>' . PHP_EOL .
        '        </tr>' . PHP_EOL .
        '    </tbody>' . PHP_EOL .
        '</table>',
];
