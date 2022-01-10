<?php

// Documentation test config file for "Layout / Columns / Reordering / Order classes" part
return [
    'title' => 'Order classes',
    'url' => '%bootstrap-url%/layout/columns/#order-classes',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->grid([
            [
                [
                    'First in DOM, no order applied',
                    ['Second in DOM, with a larger order', ['order' => 5]],
                    ['Third in DOM, with an order of 1', ['order' => 1]],
                ],
            ],
        ]) . PHP_EOL;

        echo $view->grid([
            [
                [
                    ['First in DOM, ordered last', ['order' => 'last']],
                    'Second in DOM, unordered',
                    ['Third in DOM, ordered first', ['order' => 'first']],
                ],
            ],
        ]);
    },
];
