<?php

// Documentation test config file for "Components / Media object" part
return [
    'title' => 'Media object',
    'url' => '%bootstrap-url%/components/media-object/',
    'tests' => [
        [
            'title' => 'Example',
            'url' => '%bootstrap-url%/components/media-object/#example',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->media([
                    'img' => ['/twbs-helper-module/img/docs/64x64.svg', ['alt' => '...', 'class' => 'mr-3']],
                    'title' => 'Media heading',
                    'text' => 'Cras sit amet nibh libero, in gravida nulla. ' .
                        'Nulla vel metus scelerisque ante sollicitudin. ' .
                        'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                        'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                        'Donec lacinia congue felis in faucibus.',
                ]);
            },
        ],
        [
            'title' => 'Nesting',
            'url' => '%bootstrap-url%/components/media-object/#nesting',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->media([
                    'img' => ['/twbs-helper-module/img/docs/64x64.svg', ['alt' => '...', 'class' => 'mr-3']],
                    'title' => 'Media heading',
                    'text' => 'Cras sit amet nibh libero, in gravida nulla. ' .
                        'Nulla vel metus scelerisque ante sollicitudin. ' .
                        'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                        'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                        'Donec lacinia congue felis in faucibus.',
                    'media' => [
                        'content' => [
                            'img' => ['/twbs-helper-module/img/docs/64x64.svg', ['alt' => '...', 'class' => 'mr-3']],
                            'title' => 'Media heading',
                            'text' => 'Cras sit amet nibh libero, in gravida nulla. ' .
                                'Nulla vel metus scelerisque ante sollicitudin. ' .
                                'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                                'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                                'Donec lacinia congue felis in faucibus.',
                        ],
                    ],
                ]);
            },
        ],
        [
            'title' => 'Alignment',
            'url' => '%bootstrap-url%/components/media-object/#alignment',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                // Top-aligned media
                echo $oView->media([
                    'img' => [
                        '/twbs-helper-module/img/docs/64x64.svg',
                        ['alt' => '...', 'class' => 'align-self-start mr-3']
                    ],
                    'title' => 'Top-aligned media',
                    'text' => [
                        'Cras sit amet nibh libero, in gravida nulla. ' .
                            'Nulla vel metus scelerisque ante sollicitudin. ' .
                            'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                            'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                            'Donec lacinia congue felis in faucibus.',
                        'Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. ' .
                            'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
                    ],
                ]) . PHP_EOL;

                // Center-aligned media
                echo $oView->media([
                    'img' => [
                        '/twbs-helper-module/img/docs/64x64.svg',
                        ['alt' => '...', 'class' => 'align-self-center mr-3']
                    ],
                    'title' => 'Top-aligned media',
                    'text' => [
                        'Cras sit amet nibh libero, in gravida nulla. ' .
                            'Nulla vel metus scelerisque ante sollicitudin. ' .
                            'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                            'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                            'Donec lacinia congue felis in faucibus.',
                        [
                            'content' => 'Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. ' .
                                'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
                            'attributes' => ['class' => 'mb-0'],
                        ],
                    ],
                ]) . PHP_EOL;

                // Bottom-aligned media
                echo $oView->media([
                    'img' => [
                        '/twbs-helper-module/img/docs/64x64.svg',
                        ['alt' => '...', 'class' => 'align-self-end mr-3']
                    ],
                    'title' => 'Top-aligned media',
                    'text' => [
                        'Cras sit amet nibh libero, in gravida nulla. ' .
                            'Nulla vel metus scelerisque ante sollicitudin. ' .
                            'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                            'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                            'Donec lacinia congue felis in faucibus.',
                        [
                            'content' => 'Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. ' .
                                'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
                            'attributes' => ['class' => 'mb-0'],
                        ],
                    ],
                ]);
            },
        ],
        [
            'title' => 'Order',
            'url' => '%bootstrap-url%/components/media-object/#order',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->media([
                    'title' => ['content' => 'Media object', 'attributes' => ['class' => 'mb-1']],
                    'text' => 'Cras sit amet nibh libero, in gravida nulla. ' .
                        'Nulla vel metus scelerisque ante sollicitudin. ' .
                        'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                        'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                        'Donec lacinia congue felis in faucibus.',
                    'img' => ['/twbs-helper-module/img/docs/64x64.svg', ['alt' => '...', 'class' => 'ml-3']],
                ]);
            },
        ],
        [
            'title' => 'Media list',
            'url' => '%bootstrap-url%/components/media-object/#media-list',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->mediaList([
                    [
                        'img' => ['/twbs-helper-module/img/docs/64x64.svg', ['alt' => '...', 'class' => 'mr-3']],
                        'title' => ['content' => 'List-based media object', 'attributes' => ['class' => 'mb-1']],
                        'text' => 'Cras sit amet nibh libero, in gravida nulla. ' .
                            'Nulla vel metus scelerisque ante sollicitudin. ' .
                            'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                            'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                            'Donec lacinia congue felis in faucibus.',
                    ],
                    [
                        'img' => ['/twbs-helper-module/img/docs/64x64.svg', ['alt' => '...', 'class' => 'mr-3']],
                        'title' => ['content' => 'List-based media object', 'attributes' => ['class' => 'mb-1']],
                        'text' => 'Cras sit amet nibh libero, in gravida nulla. ' .
                            'Nulla vel metus scelerisque ante sollicitudin. ' .
                            'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                            'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                            'Donec lacinia congue felis in faucibus.',
                    ],
                    [
                        'img' => ['/twbs-helper-module/img/docs/64x64.svg', ['alt' => '...', 'class' => 'mr-3']],
                        'title' => ['content' => 'List-based media object', 'attributes' => ['class' => 'mb-1']],
                        'text' => 'Cras sit amet nibh libero, in gravida nulla. ' .
                            'Nulla vel metus scelerisque ante sollicitudin. ' .
                            'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                            'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                            'Donec lacinia congue felis in faucibus.',
                    ],
                ]);
            },
        ],
    ],
];
