<?php

// Documentation test config file for "Components / List group / Custom content" part
return [
    'title' => 'Custom content',
    'url' => '%bootstrap-url%/components/list-group/#custom-content',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->listGroup(
            [
                [
                    'content' => '<div class="d-flex w-100 justify-content-between">' . PHP_EOL .
                        '    <h5 class="mb-1">List group item heading</h5>' . PHP_EOL .
                        '    <small>3 days ago</small>' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<p class="mb-1">Some placeholder content in a paragraph.</p>' . PHP_EOL .
                        '<small>And some small print.</small>',
                    'attributes' => ['href' => '#'],
                    'active' => true,
                ],
                [
                    'content' => '<div class="d-flex w-100 justify-content-between">' . PHP_EOL .
                        '    <h5 class="mb-1">List group item heading</h5>' . PHP_EOL .
                        '    <small>3 days ago</small>' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<p class="mb-1">Some placeholder content in a paragraph.</p>' . PHP_EOL .
                        '<small>And some small print.</small>',
                    'attributes' => ['href' => '#'],
                ],
                [
                    'content' => '<div class="d-flex w-100 justify-content-between">' . PHP_EOL .
                        '    <h5 class="mb-1">List group item heading</h5>' . PHP_EOL .
                        '    <small>3 days ago</small>' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<p class="mb-1">Donec id elit non mi porta gravida at eget metus. ' .
                        'Maecenas sed diam eget risus varius blandit.</p>' . PHP_EOL .
                        '<small>Donec id elit non mi porta.</small>',
                    'attributes' => ['href' => '#'],
                ],
            ],
            ['type' => 'action']
        );
    },
];
