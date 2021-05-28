<?php

// Documentation test config file for "Content / Tables / Responsive tables" part
return [
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
            'expected' => '<div class="table-responsive">' . PHP_EOL .
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
                '</div>'
        ],
        [
            'title' => 'Breakpoint specific',
            'url' => '%bootstrap-url%/content/tables/#breakpoint-specific',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                foreach ([true, 'sm', 'md', 'lg', 'xl'] as $iKey => $sSize) {
                    if ($iKey) {
                        echo PHP_EOL . '<br/>' . PHP_EOL;
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
            'expected' => '<div class="table-responsive">' . PHP_EOL .
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
                '<br/>' . PHP_EOL .
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
                '<br/>' . PHP_EOL .
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
                '<br/>' . PHP_EOL .
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
                '<br/>' . PHP_EOL .
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
];
