<?php

// Documentation test config file for "Content / Tables / Overview" part
return [
    'title' => 'Overview',
    'url' => '%bootstrap-url%/content/tables/#overview',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->table([
            'head' => ['#', 'First', 'Last', 'Handle'],
            'body' => [
                ['1', 'Mark', 'Otto', '@mdo'],
                ['2', 'Jacob', 'Thornton', '@fat'],
                ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
            ],
        ]);
    },
];
