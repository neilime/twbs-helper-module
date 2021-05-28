<?php

// Documentation test config file for "Content / Figures" part
return [
    'title' => 'Figures',
    'url' => '%bootstrap-url%/content/figures/',
    'tests' => [
        [
            'title' => 'Basic',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->figure(
                    '/twbs-helper-module/img/docs/400x300.svg',
                    'A caption for the above image.',
                    [],
                    [
                        'fluid' => true,
                        'rounded' => true,
                        'alt' => '...',
                    ]
                );
            },
            'expected' => '<figure class="figure">' . PHP_EOL .
                '    <img alt="..." class="figure-img&#x20;img-fluid&#x20;rounded" ' .
                'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />' . PHP_EOL .
                '    <figcaption class="figure-caption">A caption for the above image.</figcaption>' . PHP_EOL .
                '</figure>',
        ],
        [
            'title' => 'Aligning figure\'s caption',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->figure(
                    '/twbs-helper-module/img/docs/400x300.svg',
                    'A caption for the above image.',
                    [],
                    [
                        'fluid' => true,
                        'rounded' => true,
                        'alt' => '...',
                    ],
                    ['class' => 'text-end']
                );
            },
            'expected' => '<figure class="figure">' . PHP_EOL .
                '    <img alt="..." class="figure-img&#x20;img-fluid&#x20;rounded" ' .
                'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />' . PHP_EOL .
                '    <figcaption class="figure-caption&#x20;text-end">A caption for the above image.</figcaption>'
                . PHP_EOL .
                '</figure>',
        ],
    ],
];
