<?php

// Documentation test config file for "Layout / Columns / Alignment / Column wrapping" part
return [
    'title' => 'Column wrapping',
    'url' => '%bootstrap-url%/layout/columns/#column-wrapping',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->grid([
            [
                [
                    ['.col-9', ['column' => 9]],
                    [
                        '.col-4<br>Since 9 + 4 = 13 &gt; 12, ' .
                            'this 4-column-wide div gets wrapped onto a new line as one contiguous unit.',
                        ['column' => 4],
                    ],
                    [
                        '.col-6<br>Subsequent columns continue along the new line.',
                        ['column' => 6],
                    ],
                ],
            ],
        ]);
    },
];
