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
                echo $oView->image('images/demo/responsive.svg', ['fluid' => true, 'alt' => 'Responsive image',]);
            },
            'expected' =>
            '<img alt="Responsive&#x20;image" class="img-fluid" src="images&#x2F;demo&#x2F;responsive.svg" />',
        ],
        [
            'title' => 'Image thumbnails',
            'url' => '%bootstrap-url%/content/images/#image-thumbnails',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->image('images/demo/200x200.svg', ['thumbnail' => true, 'alt' => 'Image thumbnail',]);
            },
            'expected' =>
            '<img alt="Image&#x20;thumbnail" class="img-thumbnail" src="images&#x2F;demo&#x2F;200x200.svg" />',
        ],
        [
            'title' => 'Aligning images',
            'url' => '%bootstrap-url%/content/images/#aligning-images',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->image(
                    'images/demo/200x200.svg',
                    ['rounded' => true, 'alt' => 'Image aligned left', 'class' => 'float-left']
                )  . PHP_EOL;

                echo $oView->image(
                    'images/demo/200x200.svg',
                    ['rounded' => true, 'alt' => 'Image aligned right', 'class' => 'float-right']
                ) . PHP_EOL;

                echo $oView->image(
                    'images/demo/200x200.svg',
                    ['rounded' => true, 'alt' => 'Image aligned block', 'class' => 'mx-auto d-block']
                );
            },
            'expected' => '<img alt="Image&#x20;aligned&#x20;left" class="float-left&#x20;rounded" ' .
                'src="images&#x2F;demo&#x2F;200x200.svg" />'  . PHP_EOL .
                '<img alt="Image&#x20;aligned&#x20;right" class="float-right&#x20;rounded" ' .
                'src="images&#x2F;demo&#x2F;200x200.svg" />' . PHP_EOL .
                '<img alt="Image&#x20;aligned&#x20;block" ' .
                'class="d-block&#x20;mx-auto&#x20;rounded" src="images&#x2F;demo&#x2F;200x200.svg" />',
        ],
        [
            'title' => 'Picture',
            'url' => '%bootstrap-url%/content/images/#picture',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->image('images/demo/200x200.svg', [
                    'thumbnail' => true,
                    'fluid' => true,
                    'alt' => 'Picture image',
                    'sources' => ['images/demo/200x200.svg' => 'image/svg+xml'],
                ]);
            },
            'expected' =>
            '<picture>' . PHP_EOL .
                '    <source srcset="images&#x2F;demo&#x2F;200x200.svg" type="image&#x2F;svg&#x2B;xml" />' . PHP_EOL .
                '    <img alt="Picture&#x20;image" ' .
                'class="img-fluid&#x20;img-thumbnail" src="images&#x2F;demo&#x2F;200x200.svg" />' . PHP_EOL .
                '</picture>',
        ],
    ],
];
