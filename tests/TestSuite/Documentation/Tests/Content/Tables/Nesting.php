<?php

// Documentation test config file for "Content / Tables / Nesting" part
return [
    'title' => 'Nesting',
    'url' => '%bootstrap-url%/content/tables/#nesting',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->table([
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
];
