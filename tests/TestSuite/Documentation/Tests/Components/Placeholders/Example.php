<?php

// Documentation test config file for "Components / Placeholders / Example" part
return [
    'title' => 'Example',
    'url' => '%bootstrap-url%/components/placeholders/#example',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->card(
            [
                'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                'title' => 'Card title',
                'text' => 'Some quick example text to build on the card title ' .
                    'and make up the bulk of the card\'s content.',
                '<a class="btn btn-primary" href="&#x23;">Go somewhere</a>',
            ],
        ) . PHP_EOL;

        echo $view->card(
            [
                'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                'title' => [
                    'attributes' => [
                        'class' => 'h5 placeholder-glow',
                    ],
                    'tag' => 'div',
                    'content' => $view->placeholder(6),
                ],
                'text' => [
                    'content' => $view->placeholder(7) . PHP_EOL .
                        $view->placeholder(4) . PHP_EOL .
                        $view->placeholder(4) . PHP_EOL .
                        $view->placeholder(6) . PHP_EOL .
                        $view->placeholder(8),
                    'attributes' => ['class' => 'placeholder-glow'],
                ],
                $view->placeholder(['column' => 6, 'button' => ['options' => ['variant' => 'primary']]]),
            ],
            ['aria-hidden' => 'true']
        );
    },
];
