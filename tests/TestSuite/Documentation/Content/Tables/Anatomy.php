<?php

// Documentation test config file for "Content / Tables / Anatomy" part
return [
    'title' => 'Anatomy',
    'url' => '%bootstrap-url%/content/tables/#anatomy',
    'tests' => [
        [
            'title' => 'Captions',
            'url' => '%bootstrap-url%/content/tables/#captions',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->table([
                    'caption' => 'List of users',
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', 'Larry', 'the Bird', '@twitter'],
                    ],
                ]);
            },
            'expected' => '<table class="table">' . PHP_EOL .
                '    <caption>List of users</caption>' . PHP_EOL .
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
                '            <td>Larry</td>' . PHP_EOL .
                '            <td>the Bird</td>' . PHP_EOL .
                '            <td>@twitter</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '    </tbody>' . PHP_EOL .
                '</table>',
        ],
        [
            'title' => 'Table head options',
            'url' => '%bootstrap-url%/content/tables/#table-head-options',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                // First table (head dark)
                echo $oView->table([
                    'head' => [
                        'attributes' => ['class' => 'thead-dark'],
                        'rows' => ['#', 'First', 'Last', 'Handle'],
                    ],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', 'Larry', 'the Bird', '@twitter'],
                    ],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Second table (head light)
                echo $oView->table([
                    'head' => [
                        'attributes' => ['class' => 'thead-light'],
                        'rows' => ['#', 'First', 'Last', 'Handle'],
                    ],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', 'Larry', 'the Bird', '@twitter'],
                    ],
                ]);
            },
            'expected' => '<table class="table">' . PHP_EOL .
                '    <thead class="thead-dark">' . PHP_EOL .
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
                '            <td>Larry</td>' . PHP_EOL .
                '            <td>the Bird</td>' . PHP_EOL .
                '            <td>@twitter</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '    </tbody>' . PHP_EOL .
                '</table>' . PHP_EOL .
                '<br/>' . PHP_EOL .
                '<table class="table">' . PHP_EOL .
                '    <thead class="thead-light">' . PHP_EOL .
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
                '            <td>Larry</td>' . PHP_EOL .
                '            <td>the Bird</td>' . PHP_EOL .
                '            <td>@twitter</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '    </tbody>' . PHP_EOL .
                '</table>',
        ],
    ]
];
