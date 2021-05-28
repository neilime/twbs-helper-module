<?php

// Documentation test config file for "Content / Tables / Overview" part
return [
    'title' => 'Overview',
    'url' => '%bootstrap-url%/content/tables/#overview',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        echo $oView->table([
            'head' => ['#', 'First', 'Last', 'Handle'],
            'body' => [
                ['1', 'Mark', 'Otto', '@mdo'],
                ['2', 'Jacob', 'Thornton', '@fat'],
                ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
            ],
        ]);
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
        '            <td colspan="2">Larry the Bird</td>' . PHP_EOL .
        '            <td>@twitter</td>' . PHP_EOL .
        '        </tr>' . PHP_EOL .
        '    </tbody>' . PHP_EOL .
        '</table>',
];
