<?php

// Documentation test config file for "Content / Images" part
return [
    'title' => 'Images',
    'url' => '%bootstrap-url%/content/images/',
    'tests' => [
        [
            'title' => 'Responsive images',
            'url' => '%bootstrap-url%/content/images/#responsive-images',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->image('/twbs-helper-module/img/docs/responsive.svg', ['fluid' => true, 'alt' => '...',]);
            },
            'expected' =>
            '<img alt="..." class="img-fluid" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;responsive.svg" />',
        ],
        [
            'title' => 'Image thumbnails',
            'url' => '%bootstrap-url%/content/images/#image-thumbnails',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->image('/twbs-helper-module/img/docs/200x200.svg', ['thumbnail' => true, 'alt' => '...',]);
            },
            'expected' =>
            '<img alt="..." class="img-thumbnail" ' .
                'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;200x200.svg" />',
        ],
        [
            'title' => 'Aligning images',
            'url' => '%bootstrap-url%/content/images/#aligning-images',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->image(
                    '/twbs-helper-module/img/docs/200x200.svg',
                    ['rounded' => true, 'alt' => '...', 'class' => 'float-start']
                )  . PHP_EOL;

                echo $oView->image(
                    '/twbs-helper-module/img/docs/200x200.svg',
                    ['rounded' => true, 'alt' => '...', 'class' => 'float-end']
                ) . PHP_EOL;

                echo $oView->image(
                    '/twbs-helper-module/img/docs/200x200.svg',
                    ['rounded' => true, 'alt' => '...', 'class' => 'mx-auto d-block']
                );
            },
            'expected' => '<img alt="..." class="float-start&#x20;rounded" ' .
                'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;200x200.svg" />'  . PHP_EOL .
                '<img alt="..." class="float-end&#x20;rounded" ' .
                'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;200x200.svg" />' . PHP_EOL .
                '<img alt="..." ' .
                'class="d-block&#x20;mx-auto&#x20;rounded" ' .
                'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;200x200.svg" />',
        ],
        [
            'title' => 'Picture',
            'url' => '%bootstrap-url%/content/images/#picture',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->image('/twbs-helper-module/img/docs/200x200.svg', [
                    'thumbnail' => true,
                    'fluid' => true,
                    'alt' => '...',
                    'sources' => ['/twbs-helper-module/img/docs/200x200.svg' => 'image/svg+xml'],
                ]);
            },
            'expected' =>
            '<picture>' . PHP_EOL .
                '    <source srcset="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;200x200.svg" ' .
                'type="image&#x2F;svg&#x2B;xml" />' . PHP_EOL .
                '    <img alt="..." ' .
                'class="img-fluid&#x20;img-thumbnail" ' .
                'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;200x200.svg" />' . PHP_EOL .
                '</picture>',
        ],
    ],
];
