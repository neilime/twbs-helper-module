<?php

// Documentation test config file for "Content / Tables / Nesting" part
return [
    'title' => 'Nesting',
    'url' => '%bootstrap-url%/content/tables/#nesting',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        echo $oView->table([
            'striped' => true,
            'bordered' => true,
            'head' => ['#', 'First', 'Last', 'Handle'],
            'body' => [
                ['1', 'Mark', 'Otto', '@mdo'],
                [[
                    'data' => [
                        'head' => ['Header', 'Header', 'Header'],
                        'body' => [
                            ['A', 'First', 'Last'],
                            ['B', 'First', 'Last'],
                            ['C', 'First', 'Last'],
                        ],
                    ],
                    'attributes' => ['colspan' => 4]
                ]],
                ['3', 'Larry', 'the Bird', '@twitter'],
            ],
        ]);
    },
    'expected' => '<table class="table&#x20;table-bordered&#x20;table-striped">' . PHP_EOL .
        '    <thead>' . PHP_EOL .
        '        <tr>' . PHP_EOL .
        '            <th scope="col">#</th>' . PHP_EOL .
        '            <th scope="col">First</th>' . PHP_EOL .
        '            <th scope="col">Last</th>' . PHP_EOL .
        '            <th scope="col">Handle</th>' . PHP_EOL .
        '        </tr>' . PHP_EOL .
        '    </thead>' . PHP_EOL .
        '    <tbody>' . PHP_EOL .
        '        <tr>' . PHP_EOL .
        '            <th scope="row">1</th>' . PHP_EOL .
        '            <td>Mark</td>' . PHP_EOL .
        '            <td>Otto</td>' . PHP_EOL .
        '            <td>@mdo</td>' . PHP_EOL .
        '        </tr>' . PHP_EOL .
        '        <tr>' . PHP_EOL .
        '            <td colspan="4">' . PHP_EOL .
        '                <table class="mb-0&#x20;table">' . PHP_EOL .
        '                    <thead>' . PHP_EOL .
        '                        <tr>' . PHP_EOL .
        '                            <th scope="col">Header</th>' . PHP_EOL .
        '                            <th scope="col">Header</th>' . PHP_EOL .
        '                            <th scope="col">Header</th>' . PHP_EOL .
        '                        </tr>' . PHP_EOL .
        '                    </thead>' . PHP_EOL .
        '                    <tbody>' . PHP_EOL .
        '                        <tr>' . PHP_EOL .
        '                            <th scope="row">A</th>' . PHP_EOL .
        '                            <td>First</td>' . PHP_EOL .
        '                            <td>Last</td>' . PHP_EOL .
        '                        </tr>' . PHP_EOL .
        '                        <tr>' . PHP_EOL .
        '                            <th scope="row">B</th>' . PHP_EOL .
        '                            <td>First</td>' . PHP_EOL .
        '                            <td>Last</td>' . PHP_EOL .
        '                        </tr>' . PHP_EOL .
        '                        <tr>' . PHP_EOL .
        '                            <th scope="row">C</th>' . PHP_EOL .
        '                            <td>First</td>' . PHP_EOL .
        '                            <td>Last</td>' . PHP_EOL .
        '                        </tr>' . PHP_EOL .
        '                    </tbody>' . PHP_EOL .
        '                </table>' . PHP_EOL .
        '            </td>' . PHP_EOL .
        '        </tr>' . PHP_EOL .
        '        <tr>' . PHP_EOL .
        '            <th scope="row">3</th>' . PHP_EOL .
        '            <td>Larry</td>' . PHP_EOL .
        '            <td>the Bird</td>' . PHP_EOL .
        '            <td>@twitter</td>' . PHP_EOL .
        '        </tr>' . PHP_EOL .
        '    </tbody>' . PHP_EOL .
        '</table>'
];
