<?php

// Documentation test config file for "Content / Tables / Small tables" part
return [
    'title' => 'Vertical alignment',
    'url' => '%bootstrap-url%/content/tables/#vertical-alignment',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        // Use the align option to re-align where needed
        echo $oView->table([
            'responsive' => true,
            'align' => 'middle',
            'head' => [
                ['data' => 'Heading 1', 'attributes' => ['class' => 'w-25']],
                ['data' => 'Heading 2', 'attributes' => ['class' => 'w-25']],
                ['data' => 'Heading 3', 'attributes' => ['class' => 'w-25']],
                ['data' => 'Heading 4', 'attributes' => ['class' => 'w-25']],
            ],
            'body' => [
                [
                    [
                        'type' => \TwbsHelper\View\Helper\Table::TABLE_DATA,
                        'attributes' => ['scope' => null],
                        'data' => 'This cell inherits <code>vertical-align: middle;</code> from the table'
                    ],
                    'This cell inherits <code>vertical-align: middle;</code> from the table',
                    'This cell inherits <code>vertical-align: middle;</code> from the table',
                    'This here is some placeholder text, intended to take up quite a bit of vertical space, ' .
                        'to demonstrate how the vertical alignment works in the preceding cells.'
                ],
                [
                    'align' => 'bottom',
                    [
                        'type' => \TwbsHelper\View\Helper\Table::TABLE_DATA,
                        'attributes' => ['scope' => null],
                        'data' => 'This cell inherits <code>vertical-align: bottom;</code> from the table row'
                    ],
                    'This cell inherits <code>vertical-align: bottom;</code> from the table row',
                    'This cell inherits <code>vertical-align: bottom;</code> from the table row',
                    'This here is some placeholder text, intended to take up quite a bit of vertical space, ' .
                        'to demonstrate how the vertical alignment works in the preceding cells.'
                ],
                [
                    [
                        'type' => \TwbsHelper\View\Helper\Table::TABLE_DATA,
                        'attributes' => ['scope' => null],
                        'data' => 'This cell inherits <code>vertical-align: middle;</code> from the table'
                    ],
                    'This cell inherits <code>vertical-align: middle;</code> from the table',
                    [
                        'align' => 'top',
                        'data' => 'This cell is aligned to the top.',
                    ],
                    'This here is some placeholder text, intended to take up quite a bit of vertical space, ' .
                        'to demonstrate how the vertical alignment works in the preceding cells.'
                ],
            ],
        ]);
    },
    'expected' =>
    '<div class="table-responsive">' . PHP_EOL .
        '    <table class="align-middle&#x20;table">' . PHP_EOL .
        '        <thead>' . PHP_EOL .
        '            <tr>' . PHP_EOL .
        '                <th class="w-25" scope="col">Heading 1</th>' . PHP_EOL .
        '                <th class="w-25" scope="col">Heading 2</th>' . PHP_EOL .
        '                <th class="w-25" scope="col">Heading 3</th>' . PHP_EOL .
        '                <th class="w-25" scope="col">Heading 4</th>' . PHP_EOL .
        '            </tr>' . PHP_EOL .
        '        </thead>' . PHP_EOL .
        '        <tbody>' . PHP_EOL .
        '            <tr>' . PHP_EOL .
        '                <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>' . PHP_EOL .
        '                <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>' . PHP_EOL .
        '                <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>' . PHP_EOL .
        '                <td>This here is some placeholder text, intended to take up quite a bit of vertical space, ' .
        'to demonstrate how the vertical alignment works in the preceding cells.</td>' . PHP_EOL .
        '            </tr>' . PHP_EOL .
        '            <tr class="align-bottom">' . PHP_EOL .
        '                <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>'
        . PHP_EOL .
        '                <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>'
        . PHP_EOL .
        '                <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>'
        . PHP_EOL .
        '                <td>This here is some placeholder text, intended to take up quite a bit of vertical space, ' .
        'to demonstrate how the vertical alignment works in the preceding cells.</td>' . PHP_EOL .
        '            </tr>' . PHP_EOL .
        '            <tr>' . PHP_EOL .
        '                <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>' . PHP_EOL .
        '                <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>' . PHP_EOL .
        '                <td class="align-top">This cell is aligned to the top.</td>' . PHP_EOL .
        '                <td>This here is some placeholder text, intended to take up quite a bit of vertical space, ' .
        'to demonstrate how the vertical alignment works in the preceding cells.</td>' . PHP_EOL .
        '            </tr>' . PHP_EOL .
        '        </tbody>' . PHP_EOL .
        '    </table>' . PHP_EOL .
        '</div>'
];
