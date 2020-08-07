<?php

// Documentation test config file for "Components / Carousel" part
return [
    'title' => 'Carousel',
    'url' => '%bootstrap-url%/components/carousel/',
    'tests' => [
        [
            'title' => 'Example',
            'url' => '%bootstrap-url%/components/carousel/#example',
            'tests' => [
                [
                    'title' => 'Slides only',
                    'url' => '%bootstrap-url%/components/carousel/#slides-only',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->carousel([
                            [
                                'src' => '/twbs-helper-module/img/docs/400x300.svg',
                                'optionsAndAttributes' => ['active' => true, 'alt' => 'Slide 1'],
                            ],
                            ['/twbs-helper-module/img/docs/400x300.svg', ['alt' => 'Slide 2',]],
                            '/twbs-helper-module/img/docs/400x300.svg' => ['alt' => 'Slide 3',],
                        ], ['id' => 'carouselExampleSlidesOnly']);
                    },
                    'expected' =>
                    '<div class="carousel&#x20;slide" data-ride="carousel" id="carouselExampleSlidesOnly">' . PHP_EOL .
                        '    <div class="carousel-inner">' . PHP_EOL .
                        '        <div class="active&#x20;carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;1" class="d-block&#x20;w-100" ' .
                        'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;2" class="d-block&#x20;w-100" ' .
                        'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;3" class="d-block&#x20;w-100" ' .
                        'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>',
                ],
                [
                    'title' => 'With controls',
                    'url' => '%bootstrap-url%/components/carousel/#with-controls',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->carousel([
                            [
                                'src' => '/twbs-helper-module/img/docs/400x300.svg',
                                'optionsAndAttributes' => ['active' => true, 'alt' => 'Slide 1'],
                            ],
                            ['/twbs-helper-module/img/docs/400x300.svg', ['alt' => 'Slide 2',]],
                            '/twbs-helper-module/img/docs/400x300.svg' => ['alt' => 'Slide 3',],
                        ], ['id' => 'carouselExampleControls', 'controls' => true]);
                    },
                    'expected' =>
                    '<div class="carousel&#x20;slide" data-ride="carousel" id="carouselExampleControls">' . PHP_EOL .
                        '    <div class="carousel-inner">' . PHP_EOL .
                        '        <div class="active&#x20;carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;1" class="d-block&#x20;w-100" ' .
                        'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;2" class="d-block&#x20;w-100" ' .
                        'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;3" class="d-block&#x20;w-100" ' .
                        'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '    <a class="carousel-control-prev" data-slide="prev" href="&#x23;carouselExampleControls" ' .
                        'role="button">' . PHP_EOL .
                        '        <span aria-hidden="true" class="carousel-control-prev-icon"></span>' . PHP_EOL .
                        '        <span class="sr-only">Previous</span>' . PHP_EOL .
                        '    </a>' . PHP_EOL .
                        '    <a class="carousel-control-next" data-slide="next" href="&#x23;carouselExampleControls" ' .
                        'role="button">' . PHP_EOL .
                        '        <span aria-hidden="true" class="carousel-control-next-icon"></span>' . PHP_EOL .
                        '        <span class="sr-only">Next</span>' . PHP_EOL .
                        '    </a>' . PHP_EOL .
                        '</div>',
                ],
                [
                    'title' => 'With indicators',
                    'url' => '%bootstrap-url%/components/carousel/#with-indicators',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->carousel([
                            [
                                'src' => '/twbs-helper-module/img/docs/400x300.svg',
                                'optionsAndAttributes' => ['active' => true, 'alt' => 'Slide 1'],
                            ],
                            ['/twbs-helper-module/img/docs/400x300.svg', ['alt' => 'Slide 2',]],
                            '/twbs-helper-module/img/docs/400x300.svg' => ['alt' => 'Slide 3',],
                        ], ['id' => 'carouselExampleIndicators', 'controls' => true, 'indicators' => true]);
                    },
                    'expected' =>
                    '<div class="carousel&#x20;slide" data-ride="carousel" id="carouselExampleIndicators">' . PHP_EOL .
                        '    <ol class="carousel-indicators">' . PHP_EOL .
                        '        <li class="active" data-slide-to="0" data-target="&#x23;carouselExampleIndicators">' .
                        '</li>' . PHP_EOL .
                        '        <li data-slide-to="1" data-target="&#x23;carouselExampleIndicators"></li>' . PHP_EOL .
                        '        <li data-slide-to="2" data-target="&#x23;carouselExampleIndicators"></li>' . PHP_EOL .
                        '    </ol>' . PHP_EOL .
                        '    <div class="carousel-inner">' . PHP_EOL .
                        '        <div class="active&#x20;carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;1" class="d-block&#x20;w-100" ' .
                        'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;2" class="d-block&#x20;w-100" ' .
                        'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;3" class="d-block&#x20;w-100" ' .
                        'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '    <a class="carousel-control-prev" data-slide="prev" ' .
                        'href="&#x23;carouselExampleIndicators" role="button">' . PHP_EOL .
                        '        <span aria-hidden="true" class="carousel-control-prev-icon"></span>' . PHP_EOL .
                        '        <span class="sr-only">Previous</span>' . PHP_EOL .
                        '    </a>' . PHP_EOL .
                        '    <a class="carousel-control-next" data-slide="next" ' .
                        'href="&#x23;carouselExampleIndicators" role="button">' . PHP_EOL .
                        '        <span aria-hidden="true" class="carousel-control-next-icon"></span>' . PHP_EOL .
                        '        <span class="sr-only">Next</span>' . PHP_EOL .
                        '    </a>' . PHP_EOL .
                        '</div>',
                ],
                [
                    'title' => 'With captions',
                    'url' => '%bootstrap-url%/components/carousel/#with-captions',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->carousel([
                            [
                                'src' => '/twbs-helper-module/img/docs/400x300.svg',
                                'optionsAndAttributes' => [
                                    'active' => true,
                                    'alt' => 'Slide 1',
                                    'caption' => [
                                        'title' => 'First slide label',
                                        'text' => 'Nulla vitae elit libero, a pharetra augue mollis interdum.',
                                    ],
                                ]
                            ],
                            [
                                '/twbs-helper-module/img/docs/400x300.svg',
                                [
                                    'alt' => 'Slide 2',
                                    'caption' => [
                                        'title' => 'Second slide label',
                                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                                    ],
                                ],
                            ],
                            '/twbs-helper-module/img/docs/400x300.svg' => [
                                'alt' => 'Slide 3',
                                'caption' => [
                                    'title' => 'Third slide label',
                                    'text' => 'Praesent commodo cursus magna, vel scelerisque nisl consectetur.',
                                ],
                            ],
                        ], [
                            'id' => 'carouselExampleCaptions',
                            'controls' => true,
                            'indicators' => true,
                        ]);
                    },
                    'expected' =>
                    '<div class="carousel&#x20;slide" data-ride="carousel" id="carouselExampleCaptions">' . PHP_EOL .
                        '    <ol class="carousel-indicators">' . PHP_EOL .
                        '        <li class="active" data-slide-to="0" data-target="&#x23;carouselExampleCaptions">' .
                        '</li>' . PHP_EOL .
                        '        <li data-slide-to="1" data-target="&#x23;carouselExampleCaptions"></li>' . PHP_EOL .
                        '        <li data-slide-to="2" data-target="&#x23;carouselExampleCaptions"></li>' . PHP_EOL .
                        '    </ol>' . PHP_EOL .
                        '    <div class="carousel-inner">' . PHP_EOL .
                        '        <div class="active&#x20;carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;1" class="d-block&#x20;w-100" ' .
                        'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />' . PHP_EOL .
                        '            <div class="carousel-caption&#x20;d-md-block&#x20;d-none">' . PHP_EOL .
                        '                <h5>First slide label</h5>' . PHP_EOL .
                        '                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>' . PHP_EOL .
                        '            </div>' . PHP_EOL .

                        '        </div>' . PHP_EOL .
                        '        <div class="carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;2" class="d-block&#x20;w-100" ' .
                        'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />' . PHP_EOL .
                        '            <div class="carousel-caption&#x20;d-md-block&#x20;d-none">' . PHP_EOL .
                        '                <h5>Second slide label</h5>' . PHP_EOL .
                        '                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;3" class="d-block&#x20;w-100" ' .
                        'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />' . PHP_EOL .
                        '            <div class="carousel-caption&#x20;d-md-block&#x20;d-none">' . PHP_EOL .
                        '                <h5>Third slide label</h5>' . PHP_EOL .
                        '                <p>' .
                        'Praesent commodo cursus magna, vel scelerisque nisl consectetur.' .
                        '</p>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '    <a class="carousel-control-prev" data-slide="prev" href="&#x23;carouselExampleCaptions" ' .
                        'role="button">' . PHP_EOL .
                        '        <span aria-hidden="true" class="carousel-control-prev-icon"></span>' . PHP_EOL .
                        '        <span class="sr-only">Previous</span>' . PHP_EOL .
                        '    </a>' . PHP_EOL .
                        '    <a class="carousel-control-next" data-slide="next" href="&#x23;carouselExampleCaptions" ' .
                        'role="button">' . PHP_EOL .
                        '        <span aria-hidden="true" class="carousel-control-next-icon"></span>' . PHP_EOL .
                        '        <span class="sr-only">Next</span>' . PHP_EOL .
                        '    </a>' . PHP_EOL .
                        '</div>',
                ],
                [
                    'title' => 'Crossfade',
                    'url' => '%bootstrap-url%/components/carousel/#crossfade',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->carousel([
                            [
                                'src' => '/twbs-helper-module/img/docs/400x300.svg',
                                'optionsAndAttributes' => ['active' => true, 'alt' => 'Slide 1'],
                            ],
                            ['/twbs-helper-module/img/docs/400x300.svg', ['alt' => 'Slide 2',]],
                            '/twbs-helper-module/img/docs/400x300.svg' => ['alt' => 'Slide 3',],
                        ], ['id' => 'carouselExampleFade', 'controls' => true, 'crossfade' => true]);
                    },
                    'expected' => '<div class="carousel&#x20;carousel-fade&#x20;slide" data-ride="carousel" ' .
                        'id="carouselExampleFade">' . PHP_EOL .
                        '    <div class="carousel-inner">' . PHP_EOL .
                        '        <div class="active&#x20;carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;1" class="d-block&#x20;w-100" ' .
                        'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;2" class="d-block&#x20;w-100" ' .
                        'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;3" class="d-block&#x20;w-100" ' .
                        'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '    <a class="carousel-control-prev" data-slide="prev" href="&#x23;carouselExampleFade" ' .
                        'role="button">' . PHP_EOL .
                        '        <span aria-hidden="true" class="carousel-control-prev-icon"></span>' . PHP_EOL .
                        '        <span class="sr-only">Previous</span>' . PHP_EOL .
                        '    </a>' . PHP_EOL .
                        '    <a class="carousel-control-next" data-slide="next" href="&#x23;carouselExampleFade" ' .
                        'role="button">' . PHP_EOL .
                        '        <span aria-hidden="true" class="carousel-control-next-icon"></span>' . PHP_EOL .
                        '        <span class="sr-only">Next</span>' . PHP_EOL .
                        '    </a>' . PHP_EOL .
                        '</div>',
                ],
                [
                    'title' => 'Individual .carousel-item interval',
                    'url' => '%bootstrap-url%/components/carousel/#individual-carousel-item-interval',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->carousel([
                            ['src' => '/twbs-helper-module/img/docs/400x300.svg', 'optionsAndAttributes' => [
                                'interval' => 10000,
                                'active' => true,
                                'alt' => 'Slide 1',
                            ]],
                            ['/twbs-helper-module/img/docs/400x300.svg', ['interval' => 2000, 'alt' => 'Slide 2',]],
                            '/twbs-helper-module/img/docs/400x300.svg' => ['alt' => 'Slide 3',],
                        ], ['id' => 'carouselExampleControls', 'controls' => true]);
                    },
                    'expected' => '<div class="carousel&#x20;slide" data-ride="carousel" ' .
                        'id="carouselExampleControls">' . PHP_EOL .
                        '    <div class="carousel-inner">' . PHP_EOL .
                        '        <div class="active&#x20;carousel-item" data-interval="10000">' . PHP_EOL .
                        '            <img alt="Slide&#x20;1" class="d-block&#x20;w-100" ' .
                        'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="carousel-item" data-interval="2000">' . PHP_EOL .
                        '            <img alt="Slide&#x20;2" class="d-block&#x20;w-100" ' .
                        'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;3" class="d-block&#x20;w-100" ' .
                        'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '    <a class="carousel-control-prev" data-slide="prev" href="&#x23;carouselExampleControls" ' .
                        'role="button">' . PHP_EOL .
                        '        <span aria-hidden="true" class="carousel-control-prev-icon"></span>' . PHP_EOL .
                        '        <span class="sr-only">Previous</span>' . PHP_EOL .
                        '    </a>' . PHP_EOL .
                        '    <a class="carousel-control-next" data-slide="next" href="&#x23;carouselExampleControls" ' .
                        'role="button">' . PHP_EOL .
                        '        <span aria-hidden="true" class="carousel-control-next-icon"></span>' . PHP_EOL .
                        '        <span class="sr-only">Next</span>' . PHP_EOL .
                        '    </a>' . PHP_EOL .
                        '</div>',
                ],
            ],
        ],
    ],
];
