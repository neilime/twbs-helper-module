<?php

// Documentation test config file for "Layout / Columns / Standalone column classes" part
return [
    'title' => 'Standalone column classes',
    'url' => '%bootstrap-url%/layout/columns/#order-classes',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->gridColumn(
            '.col-3: width of 25%',
            ['column' => 3, 'class' => 'bg-light border p-3']
        ) . PHP_EOL;

        echo $view->gridColumn(
            '.col-sm-9: width of 75% above sm breakpoint',
            ['column' => 'sm-9', 'class' => 'bg-light border p-3']
        );
    },
];
