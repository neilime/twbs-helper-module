<?php

// Documentation test config file for "Content / Tables" part
return [
    'title' => 'Tables',
    'url' => '%bootstrap-url%/content/tables/',
    'tests' => [
        [
            'title' => 'Examples',
            'url' => '%bootstrap-url%/content/tables/#examples',
            'tests' => [
                [
                    'title' => 'Basic',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->table([
                            'head' => ['#', 'First Name', 'Last Name', 'Username'],
                            'body' => [
                                [
                                    ['data' => '1', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                                    'Mark', 'Otto', '@mdo',
                                ],
                                [
                                    ['data' => '2', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                                    'Jacob', 'Thornton', '@fat',
                                ],
                                [
                                    ['data' => '3', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                                    'Larry', 'the Bird', '@twitter',
                                ],
                            ],
                        ]);
                    },
                    'expected' => '<table class="table">' . PHP_EOL .
                        '    <thead>' . PHP_EOL .
                        '        <tr>' . PHP_EOL .
                        '            <th>#</th>' . PHP_EOL .
                        '            <th>First Name</th>' . PHP_EOL .
                        '            <th>Last Name</th>' . PHP_EOL .
                        '            <th>Username</th>' . PHP_EOL .
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
                    'title' => 'Invert the colors',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->table([
                            'head' => ['#', 'First Name', 'Last Name', 'Username'],
                            'body' => [
                                [
                                    ['data' => '1', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                                    'Mark', 'Otto', '@mdo',
                                ],
                                [
                                    ['data' => '2', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                                    'Jacob', 'Thornton', '@fat',
                                ],
                                [
                                    ['data' => '3', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                                    'Larry', 'the Bird', '@twitter',
                                ],
                            ],
                        ], ['class' => 'table-inverse']);
                    },
                    'expected' => '<table class="table&#x20;table-inverse">' . PHP_EOL .
                        '    <thead>' . PHP_EOL .
                        '        <tr>' . PHP_EOL .
                        '            <th>#</th>' . PHP_EOL .
                        '            <th>First Name</th>' . PHP_EOL .
                        '            <th>Last Name</th>' . PHP_EOL .
                        '            <th>Username</th>' . PHP_EOL .
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
            ],
        ],
        [
            'title' => 'Table head options',
            'url' => '%bootstrap-url%/content/tables/#table-head-options',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                // First table (head inversed)
                echo $oView->table([
                    'head' => [
                        'attributes' => ['class' => 'thead-inverse'],
                        'rows' => ['#', 'First Name', 'Last Name', 'Username'],
                    ],
                    'body' => [
                        [
                            ['data' => '1', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Mark', 'Otto', '@mdo',
                        ],
                        [

                            ['data' => '2', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Jacob', 'Thornton', '@fat',
                        ],
                        [
                            ['data' => '3', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Larry', 'the Bird', '@twitter',
                        ],
                    ],
                ]);

                echo PHP_EOL . PHP_EOL;

                // Second table (head default)
                echo $oView->table([
                    'head' => [
                        'attributes' => ['class' => 'thead-default'],
                        'rows' => ['#', 'First Name', 'Last Name', 'Username'],
                    ],
                    'body' => [
                        [
                            ['data' => '1', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Mark', 'Otto', '@mdo',
                        ],
                        [
                            ['data' => '2', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Jacob', 'Thornton', '@fat',
                        ],
                        [
                            ['data' => '3', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Larry', 'the Bird', '@twitter',
                        ],
                    ],
                ]);
            },
            'expected' => '<table class="table">' . PHP_EOL .
                '    <thead class="thead-inverse">' . PHP_EOL .
                '        <tr>' . PHP_EOL .
                '            <th>#</th>' . PHP_EOL .
                '            <th>First Name</th>' . PHP_EOL .
                '            <th>Last Name</th>' . PHP_EOL .
                '            <th>Username</th>' . PHP_EOL .
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
                '</table>' . PHP_EOL . PHP_EOL .
                '<table class="table">' . PHP_EOL .
                '    <thead class="thead-default">' . PHP_EOL .
                '        <tr>' . PHP_EOL .
                '            <th>#</th>' . PHP_EOL .
                '            <th>First Name</th>' . PHP_EOL .
                '            <th>Last Name</th>' . PHP_EOL .
                '            <th>Username</th>' . PHP_EOL .
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
            'title' => 'Striped rows',
            'url' => '%bootstrap-url%/content/tables/#striped-rows',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->table([
                    'head' => ['#', 'First Name', 'Last Name', 'Username'],
                    'body' => [
                        [
                            ['data' => '1', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Mark', 'Otto', '@mdo',
                        ],
                        [
                            ['data' => '2', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Jacob', 'Thornton', '@fat',
                        ],
                        [
                            ['data' => '3', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Larry', 'the Bird', '@twitter',
                        ],
                    ],
                ], ['class' => 'table-striped']);
            },
            'expected' => '<table class="table&#x20;table-striped">' . PHP_EOL .
                '    <thead>' . PHP_EOL .
                '        <tr>' . PHP_EOL .
                '            <th>#</th>' . PHP_EOL .
                '            <th>First Name</th>' . PHP_EOL .
                '            <th>Last Name</th>' . PHP_EOL .
                '            <th>Username</th>' . PHP_EOL .
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
            'title' => 'Bordered table',
            'url' => '%bootstrap-url%/content/tables/#bordered-table',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->table([
                    'head' => ['#', 'First Name', 'Last Name', 'Username'],
                    'body' => [
                        [
                            ['data' => '1', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Mark', 'Otto', '@mdo',
                        ],
                        [
                            ['data' => '2', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Jacob', 'Thornton', '@fat',
                        ],
                        [
                            ['data' => '3', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Larry', 'the Bird', '@twitter',
                        ],
                    ],
                ], ['class' => 'table-bordered']);
            },
            'expected' => '<table class="table&#x20;table-bordered">' . PHP_EOL .
                '    <thead>' . PHP_EOL .
                '        <tr>' . PHP_EOL .
                '            <th>#</th>' . PHP_EOL .
                '            <th>First Name</th>' . PHP_EOL .
                '            <th>Last Name</th>' . PHP_EOL .
                '            <th>Username</th>' . PHP_EOL .
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
            'title' => 'Borderless table',
            'url' => '%bootstrap-url%/content/tables/#borderless-table',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->table([
                    'head' => ['#', 'First Name', 'Last Name', 'Username'],
                    'body' => [
                        [
                            ['data' => '1', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Mark', 'Otto', '@mdo',
                        ],
                        [
                            ['data' => '2', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Jacob', 'Thornton', '@fat',
                        ],
                        [
                            ['data' => '3', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Larry', 'the Bird', '@twitter',
                        ],
                    ],
                ], ['class' => 'table-borderless']);
            },
            'expected' => '<table class="table&#x20;table-borderless">' . PHP_EOL .
                '    <thead>' . PHP_EOL .
                '        <tr>' . PHP_EOL .
                '            <th>#</th>' . PHP_EOL .
                '            <th>First Name</th>' . PHP_EOL .
                '            <th>Last Name</th>' . PHP_EOL .
                '            <th>Username</th>' . PHP_EOL .
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
            'title' => 'Hoverable rows',
            'url' => '%bootstrap-url%/content/tables/#hoverable-rows',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->table([
                    'head' => ['#', 'First Name', 'Last Name', 'Username'],
                    'body' => [
                        [
                            ['data' => '1', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Mark', 'Otto', '@mdo',
                        ],
                        [
                            ['data' => '2', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Jacob', 'Thornton', '@fat',
                        ],
                        [
                            ['data' => '3', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Larry', 'the Bird', '@twitter',
                        ],
                    ],
                ], ['class' => 'table-hover']);
            },
            'expected' => '<table class="table&#x20;table-hover">' . PHP_EOL .
                '    <thead>' . PHP_EOL .
                '        <tr>' . PHP_EOL .
                '            <th>#</th>' . PHP_EOL .
                '            <th>First Name</th>' . PHP_EOL .
                '            <th>Last Name</th>' . PHP_EOL .
                '            <th>Username</th>' . PHP_EOL .
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
            'title' => 'Small Table',
            'url' => '%bootstrap-url%/content/tables/#small-table',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->table([
                    'head' => ['#', 'First Name', 'Last Name', 'Username'],
                    'body' => [
                        [
                            ['data' => '1', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Mark', 'Otto', '@mdo',
                        ],
                        [
                            ['data' => '2', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Jacob', 'Thornton', '@fat',
                        ],
                        [
                            ['data' => '3', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Larry', 'the Bird', '@twitter',
                        ],
                    ],
                ], ['class' => 'table-sm']);
            },
            'expected' => '<table class="table&#x20;table-sm">' . PHP_EOL .
                '    <thead>' . PHP_EOL .
                '        <tr>' . PHP_EOL .
                '            <th>#</th>' . PHP_EOL .
                '            <th>First Name</th>' . PHP_EOL .
                '            <th>Last Name</th>' . PHP_EOL .
                '            <th>Username</th>' . PHP_EOL .
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
            'title' => 'Contextual classes',
            'url' => '%bootstrap-url%/content/tables/#contextual-classes',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->table([
                    'head' => ['#', 'Column heading', 'Column heading', 'Column heading'],
                    'body' => [
                        [
                            'attributes' => ['class' => 'table-active'],
                            'cells' => [
                                ['data' => '1', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                                'Column content', 'Column content', 'Column content',
                            ]
                        ],
                        [
                            ['data' => '2', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Column content', 'Column content', 'Column content',
                        ],
                        [
                            'attributes' => ['class' => 'table-success'],
                            'cells' => [
                                ['data' => '3', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                                'Column content', 'Column content', 'Column content',
                            ]
                        ],
                        [
                            ['data' => '4', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Column content', 'Column content', 'Column content',
                        ],
                        [
                            'attributes' => ['class' => 'table-info'],
                            'cells' => [
                                ['data' => '5', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                                'Column content', 'Column content', 'Column content',
                            ]
                        ],
                        [
                            ['data' => '6', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Column content', 'Column content', 'Column content',
                        ],
                        [
                            'attributes' => ['class' => 'table-warning'],
                            'cells' => [
                                ['data' => '7', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                                'Column content', 'Column content', 'Column content',
                            ]
                        ],
                        [
                            ['data' => '8', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Column content', 'Column content', 'Column content',
                        ],
                        [
                            'attributes' => ['class' => 'table-danger'],
                            'cells' => [
                                ['data' => '9', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                                'Column content', 'Column content', 'Column content',
                            ]
                        ],
                    ],
                ]);
            },
            'expected' => '<table class="table">' . PHP_EOL .
                '    <thead>' . PHP_EOL .
                '        <tr>' . PHP_EOL .
                '            <th>#</th>' . PHP_EOL .
                '            <th>Column heading</th>' . PHP_EOL .
                '            <th>Column heading</th>' . PHP_EOL .
                '            <th>Column heading</th>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '    </thead>' . PHP_EOL .
                '    <tbody>' . PHP_EOL .
                '        <tr class="table-active">' . PHP_EOL .
                '            <th scope="row">1</th>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '        <tr>' . PHP_EOL .
                '            <th scope="row">2</th>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '        <tr class="table-success">' . PHP_EOL .
                '            <th scope="row">3</th>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '        <tr>' . PHP_EOL .
                '            <th scope="row">4</th>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '        <tr class="table-info">' . PHP_EOL .
                '            <th scope="row">5</th>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '        <tr>' . PHP_EOL .
                '            <th scope="row">6</th>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '        <tr class="table-warning">' . PHP_EOL .
                '            <th scope="row">7</th>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '        <tr>' . PHP_EOL .
                '            <th scope="row">8</th>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '        <tr class="table-danger">' . PHP_EOL .
                '            <th scope="row">9</th>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '            <td>Column content</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '    </tbody>' . PHP_EOL .
                '</table>',
        ],
        [
            'title' => 'Responsive classes',
            'url' => '%bootstrap-url%/content/tables/#responsive-tables',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->table([
                    'head' => [
                        '#', 'Table heading', 'Table heading', 'Table heading',
                        'Table heading', 'Table heading', 'Table heading'
                    ],
                    'body' => [
                        [
                            ['data' => '1', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Table cell', 'Table cell', 'Table cell', 'Table cell', 'Table cell', 'Table cell'
                        ],
                        [
                            ['data' => '2', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Table cell', 'Table cell', 'Table cell', 'Table cell', 'Table cell', 'Table cell'
                        ],
                        [
                            ['data' => '3', 'type' => 'th', 'attributes' => ['scope' => 'row']],
                            'Table cell', 'Table cell', 'Table cell', 'Table cell', 'Table cell', 'Table cell'
                        ],
                    ],
                ], ['class' => 'table-responsive']);
            },
            'expected' => '<table class="table&#x20;table-responsive">' . PHP_EOL .
                '    <thead>' . PHP_EOL .
                '        <tr>' . PHP_EOL .
                '            <th>#</th>' . PHP_EOL .
                '            <th>Table heading</th>' . PHP_EOL .
                '            <th>Table heading</th>' . PHP_EOL .
                '            <th>Table heading</th>' . PHP_EOL .
                '            <th>Table heading</th>' . PHP_EOL .
                '            <th>Table heading</th>' . PHP_EOL .
                '            <th>Table heading</th>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '    </thead>' . PHP_EOL .
                '    <tbody>' . PHP_EOL .
                '        <tr>' . PHP_EOL .
                '            <th scope="row">1</th>' . PHP_EOL .
                '            <td>Table cell</td>' . PHP_EOL .
                '            <td>Table cell</td>' . PHP_EOL .
                '            <td>Table cell</td>' . PHP_EOL .
                '            <td>Table cell</td>' . PHP_EOL .
                '            <td>Table cell</td>' . PHP_EOL .
                '            <td>Table cell</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '        <tr>' . PHP_EOL .
                '            <th scope="row">2</th>' . PHP_EOL .
                '            <td>Table cell</td>' . PHP_EOL .
                '            <td>Table cell</td>' . PHP_EOL .
                '            <td>Table cell</td>' . PHP_EOL .
                '            <td>Table cell</td>' . PHP_EOL .
                '            <td>Table cell</td>' . PHP_EOL .
                '            <td>Table cell</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '        <tr>' . PHP_EOL .
                '            <th scope="row">3</th>' . PHP_EOL .
                '            <td>Table cell</td>' . PHP_EOL .
                '            <td>Table cell</td>' . PHP_EOL .
                '            <td>Table cell</td>' . PHP_EOL .
                '            <td>Table cell</td>' . PHP_EOL .
                '            <td>Table cell</td>' . PHP_EOL .
                '            <td>Table cell</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '    </tbody>' . PHP_EOL .
                '</table>',
        ],
    ],
];
