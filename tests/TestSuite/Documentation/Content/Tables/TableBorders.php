<?php

// Documentation test config file for "Content / Tables / Table borders" part
return [
    'title' => 'Table borders',
    'url' => '%bootstrap-url%/content/tables/#table-borders',
    'tests' => [
        [
            'title' => 'Bordered table',
            'url' => '%bootstrap-url%/content/tables/#bordered-table',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                // First table (bordered)
                echo $oView->table([
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
                    ],
                ], ['class' => 'table-bordered']);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // First table (bordered & dark)
                echo $oView->table([
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
                    ],
                ], ['class' => 'table-bordered table-dark']);
            },
            'expected' => '<table class="table&#x20;table-bordered">' . PHP_EOL .
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
                '            <th scope="row">2</th>' . PHP_EOL .
                '            <td>Jacob</td>' . PHP_EOL .
                '            <td>Thornton</td>' . PHP_EOL .
                '            <td>@fat</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '        <tr>' . PHP_EOL .
                '            <th scope="row">3</th>' . PHP_EOL .
                '            <td colspan="2">Larry the Bird</td>' . PHP_EOL .
                '            <td>@twitter</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '    </tbody>' . PHP_EOL .
                '</table>' . PHP_EOL .
                '<br/>' . PHP_EOL .
                '<table class="table&#x20;table-bordered&#x20;table-dark">' . PHP_EOL .
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
                '            <th scope="row">2</th>' . PHP_EOL .
                '            <td>Jacob</td>' . PHP_EOL .
                '            <td>Thornton</td>' . PHP_EOL .
                '            <td>@fat</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '        <tr>' . PHP_EOL .
                '            <th scope="row">3</th>' . PHP_EOL .
                '            <td colspan="2">Larry the Bird</td>' . PHP_EOL .
                '            <td>@twitter</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '    </tbody>' . PHP_EOL .
                '</table>',
        ],
        [
            'title' => 'Borderless table',
            'url' => '%bootstrap-url%/content/tables/#borderless-table',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {

                // First table (borderless)
                echo $oView->table([
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
                    ],
                ], ['class' => 'table-borderless']);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Second table (borderless & dark)
                echo $oView->table([
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
                    ],
                ], ['class' => 'table-borderless table-dark']);
            },
            'expected' => '<table class="table&#x20;table-borderless">' . PHP_EOL .
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
                '            <th scope="row">2</th>' . PHP_EOL .
                '            <td>Jacob</td>' . PHP_EOL .
                '            <td>Thornton</td>' . PHP_EOL .
                '            <td>@fat</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '        <tr>' . PHP_EOL .
                '            <th scope="row">3</th>' . PHP_EOL .
                '            <td colspan="2">Larry the Bird</td>' . PHP_EOL .
                '            <td>@twitter</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '    </tbody>' . PHP_EOL .
                '</table>' . PHP_EOL .
                '<br/>' . PHP_EOL .
                '<table class="table&#x20;table-borderless&#x20;table-dark">' . PHP_EOL .
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
                '            <th scope="row">2</th>' . PHP_EOL .
                '            <td>Jacob</td>' . PHP_EOL .
                '            <td>Thornton</td>' . PHP_EOL .
                '            <td>@fat</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '        <tr>' . PHP_EOL .
                '            <th scope="row">3</th>' . PHP_EOL .
                '            <td colspan="2">Larry the Bird</td>' . PHP_EOL .
                '            <td>@twitter</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '    </tbody>' . PHP_EOL .
                '</table>',
        ],
    ]
];
