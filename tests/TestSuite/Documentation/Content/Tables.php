<?php

// Documentation test config file for "Content / Tables" part
return [
    'title' => 'Tables',
    'url' => '%bootstrap-url%/content/tables/',
    'tests' => [
        [
            'title' => 'Examples',
            'url' => '%bootstrap-url%/content/tables/#examples',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->table([
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', 'Larry', 'the Bird', '@twitter'],
                    ],
                ]);

                echo PHP_EOL . '<br>' . PHP_EOL;

                echo $oView->table([
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', 'Larry', 'the Bird', '@twitter'],
                    ],
                ], ['class' => 'table-dark']);
            },
            'expected' => '<table class="table">' . PHP_EOL .
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
                '</table>' . PHP_EOL .
                '<br>' . PHP_EOL .
                '<table class="table&#x20;table-dark">' . PHP_EOL .
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

                echo PHP_EOL . '<br>' . PHP_EOL;

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
                '<br>' . PHP_EOL .
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
        [
            'title' => 'Striped rows',
            'url' => '%bootstrap-url%/content/tables/#striped-rows',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                // First table (head striped)
                echo $oView->table([
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', 'Larry', 'the Bird', '@twitter'],
                    ],
                ], ['class' => 'table-striped']);


                echo PHP_EOL . '<br>' . PHP_EOL;

                // Second table (head striped & dark)
                echo $oView->table([
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', 'Larry', 'the Bird', '@twitter'],
                    ],
                ], ['class' => 'table-striped table-dark']);
            },
            'expected' => '<table class="table&#x20;table-striped">' . PHP_EOL .
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
                '</table>' . PHP_EOL .
                '<br>' . PHP_EOL .
                '<table class="table&#x20;table-dark&#x20;table-striped">' . PHP_EOL .
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

                echo PHP_EOL . '<br>' . PHP_EOL;

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
                '<br>' . PHP_EOL .
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

                echo PHP_EOL . '<br>' . PHP_EOL;

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
                '<br>' . PHP_EOL .
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
        [
            'title' => 'Hoverable rows',
            'url' => '%bootstrap-url%/content/tables/#hoverable-rows',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                // First table (hoverable)
                echo $oView->table([
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
                    ],
                ], ['class' => 'table-hover']);

                echo PHP_EOL . '<br>' . PHP_EOL;

                // Second table (hoverable & dark)
                echo $oView->table([
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
                    ],
                ], ['class' => 'table-hover table-dark']);
            },
            'expected' => '<table class="table&#x20;table-hover">' . PHP_EOL .
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
                '<br>' . PHP_EOL .
                '<table class="table&#x20;table-dark&#x20;table-hover">' . PHP_EOL .
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
            'title' => 'Small Table',
            'url' => '%bootstrap-url%/content/tables/#small-table',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                // First table (small)
                echo $oView->table([
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
                    ],
                ], ['class' => 'table-sm']);

                echo PHP_EOL . '<br>' . PHP_EOL;

                // Second table (small & dark)
                echo $oView->table([
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
                    ],
                ], ['class' => 'table-sm table-dark']);
            },
            'expected' => '<table class="table&#x20;table-sm">' . PHP_EOL .
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
                '<br>' . PHP_EOL .
                '<table class="table&#x20;table-dark&#x20;table-sm">' . PHP_EOL .
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
            'title' => 'Contextual classes',
            'url' => '%bootstrap-url%/content/tables/#contextual-classes',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                // First table
                echo $oView->table([
                    'head' => ['Class', 'Heading', 'Heading'],
                    'body' => [
                        [
                            'attributes' => ['class' => 'table-active'],
                            'cells' => ['Active', 'Cell', 'Cell'],
                        ],
                        ['Default', 'Cell', 'Cell'],
                        [
                            'attributes' => ['class' => 'table-primary'],
                            'cells' => ['Primary', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'table-secondary'],
                            'cells' => ['Secondary', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'table-success'],
                            'cells' => ['Success', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'table-danger'],
                            'cells' => ['Danger', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'table-warning'],
                            'cells' => ['Warning', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'table-info'],
                            'cells' => ['Info', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'table-light'],
                            'cells' => ['Light', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'table-dark'],
                            'cells' => ['Dark', 'Cell', 'Cell'],
                        ],
                    ],
                ]);

                echo PHP_EOL . '<br>' . PHP_EOL;

                // Second table (dark)
                echo $oView->table([
                    'head' => ['Class', 'Heading', 'Heading'],
                    'body' => [
                        [
                            'attributes' => ['class' => 'bg-active'],
                            'cells' => ['Active', 'Cell', 'Cell'],
                        ],
                        ['Default', 'Cell', 'Cell'],
                        [
                            'attributes' => ['class' => 'bg-primary'],
                            'cells' => ['Primary', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'bg-secondary'],
                            'cells' => ['Secondary', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'bg-success'],
                            'cells' => ['Success', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'bg-danger'],
                            'cells' => ['Danger', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'bg-warning'],
                            'cells' => ['Warning', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'bg-info'],
                            'cells' => ['Info', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'bg-light'],
                            'cells' => ['Light', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'bg-dark'],
                            'cells' => ['Dark', 'Cell', 'Cell'],
                        ],
                    ],
                ], ['class' => 'table-dark']);
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
                '        <tr class="table-active">' . PHP_EOL .
                '            <th scope="row">Active</th>' . PHP_EOL .
                '            <td>Cell</td>' . PHP_EOL .
                '            <td>Cell</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
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
                '</table>' . PHP_EOL .
                '<br>' . PHP_EOL .
                '<table class="table&#x20;table-dark">' . PHP_EOL .
                '    <thead>' . PHP_EOL .
                '        <tr>' . PHP_EOL .
                '            <th scope="col">Class</th>' . PHP_EOL .
                '            <th scope="col">Heading</th>' . PHP_EOL .
                '            <th scope="col">Heading</th>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '    </thead>' . PHP_EOL .
                '    <tbody>' . PHP_EOL .
                '        <tr class="bg-active">' . PHP_EOL .
                '            <th scope="row">Active</th>' . PHP_EOL .
                '            <td>Cell</td>' . PHP_EOL .
                '            <td>Cell</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '        <tr>' . PHP_EOL .
                '            <th scope="row">Default</th>' . PHP_EOL .
                '            <td>Cell</td>' . PHP_EOL .
                '            <td>Cell</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '        <tr class="bg-primary">' . PHP_EOL .
                '            <th scope="row">Primary</th>' . PHP_EOL .
                '            <td>Cell</td>' . PHP_EOL .
                '            <td>Cell</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '        <tr class="bg-secondary">' . PHP_EOL .
                '            <th scope="row">Secondary</th>' . PHP_EOL .
                '            <td>Cell</td>' . PHP_EOL .
                '            <td>Cell</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '        <tr class="bg-success">' . PHP_EOL .
                '            <th scope="row">Success</th>' . PHP_EOL .
                '            <td>Cell</td>' . PHP_EOL .
                '            <td>Cell</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '        <tr class="bg-danger">' . PHP_EOL .
                '            <th scope="row">Danger</th>' . PHP_EOL .
                '            <td>Cell</td>' . PHP_EOL .
                '            <td>Cell</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '        <tr class="bg-warning">' . PHP_EOL .
                '            <th scope="row">Warning</th>' . PHP_EOL .
                '            <td>Cell</td>' . PHP_EOL .
                '            <td>Cell</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '        <tr class="bg-info">' . PHP_EOL .
                '            <th scope="row">Info</th>' . PHP_EOL .
                '            <td>Cell</td>' . PHP_EOL .
                '            <td>Cell</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '        <tr class="bg-light">' . PHP_EOL .
                '            <th scope="row">Light</th>' . PHP_EOL .
                '            <td>Cell</td>' . PHP_EOL .
                '            <td>Cell</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '        <tr class="bg-dark">' . PHP_EOL .
                '            <th scope="row">Dark</th>' . PHP_EOL .
                '            <td>Cell</td>' . PHP_EOL .
                '            <td>Cell</td>' . PHP_EOL .
                '        </tr>' . PHP_EOL .
                '    </tbody>' . PHP_EOL .
                '</table>',
        ],
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
            'title' => 'Responsive classes',
            'url' => '%bootstrap-url%/content/tables/#responsive-tables',
            'tests' => [
                [
                    'title' => 'Always responsive',
                    'url' => '%bootstrap-url%/content/tables/#always-responsive',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->table([
                            'responsive' => true,
                            'head' => [
                                '#', 'Heading', 'Heading', 'Heading', 'Heading',
                                'Heading', 'Heading', 'Heading', 'Heading', 'Heading',
                            ],
                            'body' => [
                                ['1', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell'],
                                ['2', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell'],
                                ['3', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell'],
                            ],
                        ]);
                    },
                    'expected' =>
                    '<div class="table-responsive">' . PHP_EOL .
                        '    <table class="table">' . PHP_EOL .
                        '        <thead>' . PHP_EOL .
                        '            <tr>' . PHP_EOL .
                        '                <th scope="col">#</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '            </tr>' . PHP_EOL .
                        '        </thead>' . PHP_EOL .
                        '        <tbody>' . PHP_EOL .
                        '            <tr>' . PHP_EOL .
                        '                <th scope="row">1</th>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '            </tr>' . PHP_EOL .
                        '            <tr>' . PHP_EOL .
                        '                <th scope="row">2</th>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '            </tr>' . PHP_EOL .
                        '            <tr>' . PHP_EOL .
                        '                <th scope="row">3</th>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '            </tr>' . PHP_EOL .
                        '        </tbody>' . PHP_EOL .
                        '    </table>' . PHP_EOL .
                        '</div>',
                ],
                [
                    'title' => 'Breakpoint specific',
                    'url' => '%bootstrap-url%/content/tables/#breakpoint-specific',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        foreach (['sm', 'md', 'lg', 'xl'] as $iKey => $sSize) {
                            if ($iKey) {
                                echo PHP_EOL . '<br>' . PHP_EOL;
                            }

                            echo $oView->table([
                                'responsive' => $sSize,
                                'head' => [
                                    '#', 'Heading', 'Heading', 'Heading', 'Heading',
                                    'Heading', 'Heading', 'Heading', 'Heading', 'Heading',
                                ],
                                'body' => [
                                    ['1', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell'],
                                    ['2', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell'],
                                    ['3', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell'],
                                ],
                            ]);
                        }
                    },
                    'expected' =>
                    '<div class="table-responsive-sm">' . PHP_EOL .
                        '    <table class="table">' . PHP_EOL .
                        '        <thead>' . PHP_EOL .
                        '            <tr>' . PHP_EOL .
                        '                <th scope="col">#</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '            </tr>' . PHP_EOL .
                        '        </thead>' . PHP_EOL .
                        '        <tbody>' . PHP_EOL .
                        '            <tr>' . PHP_EOL .
                        '                <th scope="row">1</th>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '            </tr>' . PHP_EOL .
                        '            <tr>' . PHP_EOL .
                        '                <th scope="row">2</th>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '            </tr>' . PHP_EOL .
                        '            <tr>' . PHP_EOL .
                        '                <th scope="row">3</th>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '            </tr>' . PHP_EOL .
                        '        </tbody>' . PHP_EOL .
                        '    </table>' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<br>' . PHP_EOL .
                        '<div class="table-responsive-md">' . PHP_EOL .
                        '    <table class="table">' . PHP_EOL .
                        '        <thead>' . PHP_EOL .
                        '            <tr>' . PHP_EOL .
                        '                <th scope="col">#</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '            </tr>' . PHP_EOL .
                        '        </thead>' . PHP_EOL .
                        '        <tbody>' . PHP_EOL .
                        '            <tr>' . PHP_EOL .
                        '                <th scope="row">1</th>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '            </tr>' . PHP_EOL .
                        '            <tr>' . PHP_EOL .
                        '                <th scope="row">2</th>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '            </tr>' . PHP_EOL .
                        '            <tr>' . PHP_EOL .
                        '                <th scope="row">3</th>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '            </tr>' . PHP_EOL .
                        '        </tbody>' . PHP_EOL .
                        '    </table>' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<br>' . PHP_EOL .
                        '<div class="table-responsive-lg">' . PHP_EOL .
                        '    <table class="table">' . PHP_EOL .
                        '        <thead>' . PHP_EOL .
                        '            <tr>' . PHP_EOL .
                        '                <th scope="col">#</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '            </tr>' . PHP_EOL .
                        '        </thead>' . PHP_EOL .
                        '        <tbody>' . PHP_EOL .
                        '            <tr>' . PHP_EOL .
                        '                <th scope="row">1</th>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '            </tr>' . PHP_EOL .
                        '            <tr>' . PHP_EOL .
                        '                <th scope="row">2</th>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '            </tr>' . PHP_EOL .
                        '            <tr>' . PHP_EOL .
                        '                <th scope="row">3</th>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '            </tr>' . PHP_EOL .
                        '        </tbody>' . PHP_EOL .
                        '    </table>' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<br>' . PHP_EOL .
                        '<div class="table-responsive-xl">' . PHP_EOL .
                        '    <table class="table">' . PHP_EOL .
                        '        <thead>' . PHP_EOL .
                        '            <tr>' . PHP_EOL .
                        '                <th scope="col">#</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '                <th scope="col">Heading</th>' . PHP_EOL .
                        '            </tr>' . PHP_EOL .
                        '        </thead>' . PHP_EOL .
                        '        <tbody>' . PHP_EOL .
                        '            <tr>' . PHP_EOL .
                        '                <th scope="row">1</th>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '            </tr>' . PHP_EOL .
                        '            <tr>' . PHP_EOL .
                        '                <th scope="row">2</th>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '            </tr>' . PHP_EOL .
                        '            <tr>' . PHP_EOL .
                        '                <th scope="row">3</th>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '                <td>Cell</td>' . PHP_EOL .
                        '            </tr>' . PHP_EOL .
                        '        </tbody>' . PHP_EOL .
                        '    </table>' . PHP_EOL .
                        '</div>',
                ],
            ],
        ],
    ],
];
