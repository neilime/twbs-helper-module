<?php

// Documentation test config file for "Components / Card / Card layout" part
return [
    'title' => 'Card layout',
    'url' => '%bootstrap-url%/components/card/#card-layout',
    'tests' => [
        [
            'title' => 'Card groups',
            'url' => '%bootstrap-url%/components/card/#card-groups',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->cardGroup([
                    [
                        'image_top' => ['images/demo/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Primary card title',
                        'text' => [
                            'This is a wider card with supporting text below as a natural lead-in to additional ' .
                                'content. This content is a little bit longer.',
                            '<small class="text-muted">Last updated 3 mins ago</small>',
                        ],
                    ],
                    [
                        'image_top' => ['images/demo/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Primary card title',
                        'text' => [
                            'This card has supporting text below as a natural lead-in to additional content.',
                            '<small class="text-muted">Last updated 3 mins ago</small>'
                        ],
                    ],
                    [
                        'image_top' => ['images/demo/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Primary card title',
                        'text' => [
                            'This is a wider card with supporting text below as a natural lead-in ' .
                                'to additional content. This card has even longer content than the ' .
                                'first to show that equal height action.',
                            '<small class="text-muted">Last updated 3 mins ago</small>',
                        ],
                    ],
                ]);


                echo PHP_EOL . '<br/>' . PHP_EOL;

                // With footers
                echo $oView->cardGroup([
                    [
                        'image_top' => ['images/demo/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Primary card title',
                        'text' => 'This is a wider card with supporting text below as a natural lead-in to ' .
                            'additional content. This content is a little bit longer.',
                        'footer' => '<small class="text-muted">Last updated 3 mins ago</small>',
                    ],
                    [
                        'image_top' => ['images/demo/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Primary card title',
                        'text' => 'This card has supporting text below as a natural lead-in to additional content.',
                        'footer' => '<small class="text-muted">Last updated 3 mins ago</small>',
                    ],
                    [
                        'image_top' => ['images/demo/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Primary card title',
                        'text' => 'This is a wider card with supporting text below ' .
                            'as a natural lead-in to additional content. ' .
                            'This card has even longer content than the first to show that equal height action.',
                        'footer' => '<small class="text-muted">Last updated 3 mins ago</small>',
                    ],
                ]);
            },
            'expected' => '<div class="card-group">' . PHP_EOL .
                '    <div class="card">' . PHP_EOL .
                '        <img alt="..." class="card-img-top" src="images&#x2F;demo&#x2F;image-cap.svg" />' . PHP_EOL .
                '        <div class="card-body">' . PHP_EOL .
                '            <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '            <p class="card-text">' .
                'This is a wider card with supporting text below as a natural lead-in to additional content. ' .
                'This content is a little bit longer.' .
                '</p>' . PHP_EOL .
                '            <p class="card-text">' .
                '<small class="text-muted">Last updated 3 mins ago</small>' .
                '</p>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card">' . PHP_EOL .
                '        <img alt="..." class="card-img-top" src="images&#x2F;demo&#x2F;image-cap.svg" />' . PHP_EOL .
                '        <div class="card-body">' . PHP_EOL .
                '            <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '            <p class="card-text">' .
                'This card has supporting text below as a natural lead-in to additional content.' .
                '</p>' . PHP_EOL .
                '            <p class="card-text">' .
                '<small class="text-muted">Last updated 3 mins ago</small>' .
                '</p>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card">' . PHP_EOL .
                '        <img alt="..." class="card-img-top" src="images&#x2F;demo&#x2F;image-cap.svg" />' . PHP_EOL .
                '        <div class="card-body">' . PHP_EOL .
                '            <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '            <p class="card-text">' .
                'This is a wider card with supporting text below as a natural lead-in to additional content. ' .
                'This card has even longer content than the first to show that equal height action.' .
                '</p>' . PHP_EOL .
                '            <p class="card-text">' .
                '<small class="text-muted">Last updated 3 mins ago</small>' .
                '</p>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<br/>' . PHP_EOL .
                '<div class="card-group">' . PHP_EOL .
                '    <div class="card">' . PHP_EOL .
                '        <img alt="..." class="card-img-top" src="images&#x2F;demo&#x2F;image-cap.svg" />' . PHP_EOL .
                '        <div class="card-body">' . PHP_EOL .
                '            <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '            <p class="card-text">' .
                'This is a wider card with supporting text below as a natural lead-in to additional content. ' .
                'This content is a little bit longer.' .
                '</p>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '        <div class="card-footer">' . PHP_EOL .
                '            <small class="text-muted">Last updated 3 mins ago</small>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card">' . PHP_EOL .
                '        <img alt="..." class="card-img-top" src="images&#x2F;demo&#x2F;image-cap.svg" />' . PHP_EOL .
                '        <div class="card-body">' . PHP_EOL .
                '            <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '            <p class="card-text">' .
                'This card has supporting text below as a natural lead-in to additional content.' .
                '</p>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '        <div class="card-footer">' . PHP_EOL .
                '            <small class="text-muted">Last updated 3 mins ago</small>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card">' . PHP_EOL .
                '        <img alt="..." class="card-img-top" src="images&#x2F;demo&#x2F;image-cap.svg" />' . PHP_EOL .
                '        <div class="card-body">' . PHP_EOL .
                '            <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '            <p class="card-text">' .
                'This is a wider card with supporting text below as a natural lead-in to additional content. ' .
                'This card has even longer content than the first to show that equal height action.' .
                '</p>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '        <div class="card-footer">' . PHP_EOL .
                '            <small class="text-muted">Last updated 3 mins ago</small>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
        ],
        [
            'title' => 'Card decks',
            'url' => '%bootstrap-url%/components/card/#card-decks',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->cardDeck([
                    [
                        'image_top' => ['images/demo/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Primary card title',
                        'text' => [
                            'This is a wider card with supporting text below ' .
                                'as a natural lead-in to additional content. ' .
                                'This content is a little bit longer.',
                            '<small class="text-muted">Last updated 3 mins ago</small>',
                        ],
                    ],
                    [
                        'image_top' => ['images/demo/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Primary card title',
                        'text' => [
                            'This card has supporting text below as a natural lead-in to additional content.',
                            '<small class="text-muted">Last updated 3 mins ago</small>'
                        ],
                    ],
                    [
                        'image_top' => ['images/demo/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Primary card title',
                        'text' => [
                            'This is a wider card with supporting text below as a ' .
                                'natural lead-in to additional content. ' .
                                'This card has even longer content than the first to show that equal height action.',
                            '<small class="text-muted">Last updated 3 mins ago</small>',
                        ],
                    ],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // With footers
                echo $oView->cardDeck([
                    [
                        'image_top' => ['images/demo/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Primary card title',
                        'text' => 'This is a wider card with supporting text below as a ' .
                            'natural lead-in to additional content. This content is a little bit longer.',
                        'footer' => '<small class="text-muted">Last updated 3 mins ago</small>',
                    ],
                    [
                        'image_top' => ['images/demo/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Primary card title',
                        'text' => 'This card has supporting text below as a natural lead-in to additional content.',
                        'footer' => '<small class="text-muted">Last updated 3 mins ago</small>',
                    ],
                    [
                        'image_top' => ['images/demo/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Primary card title',
                        'text' => 'This is a wider card with supporting text below as a natural ' .
                            'lead-in to additional content. This card has even longer content than ' .
                            'the first to show that equal height action.',
                        'footer' => '<small class="text-muted">Last updated 3 mins ago</small>',
                    ],
                ]);
            },
            'expected' => '<div class="card-deck">' . PHP_EOL .
                '    <div class="card">' . PHP_EOL .
                '        <img alt="..." class="card-img-top" src="images&#x2F;demo&#x2F;image-cap.svg" />' . PHP_EOL .
                '        <div class="card-body">' . PHP_EOL .
                '            <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '            <p class="card-text">' .
                'This is a wider card with supporting text below as a natural lead-in to additional content. ' .
                'This content is a little bit longer.' .
                '</p>' . PHP_EOL .
                '            <p class="card-text">' .
                '<small class="text-muted">Last updated 3 mins ago</small>' .
                '</p>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card">' . PHP_EOL .
                '        <img alt="..." class="card-img-top" src="images&#x2F;demo&#x2F;image-cap.svg" />' . PHP_EOL .
                '        <div class="card-body">' . PHP_EOL .
                '            <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '            <p class="card-text">' .
                'This card has supporting text below as a natural lead-in to additional content.' .
                '</p>' . PHP_EOL .
                '            <p class="card-text">' .
                '<small class="text-muted">Last updated 3 mins ago</small>' .
                '</p>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card">' . PHP_EOL .
                '        <img alt="..." class="card-img-top" src="images&#x2F;demo&#x2F;image-cap.svg" />' . PHP_EOL .
                '        <div class="card-body">' . PHP_EOL .
                '            <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '            <p class="card-text">' .
                'This is a wider card with supporting text below as a natural lead-in to additional content. ' .
                'This card has even longer content than the first to show that equal height action.' .
                '</p>' . PHP_EOL .
                '            <p class="card-text">' .
                '<small class="text-muted">Last updated 3 mins ago</small>' .
                '</p>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<br/>' . PHP_EOL .
                '<div class="card-deck">' . PHP_EOL .
                '    <div class="card">' . PHP_EOL .
                '        <img alt="..." class="card-img-top" src="images&#x2F;demo&#x2F;image-cap.svg" />' . PHP_EOL .
                '        <div class="card-body">' . PHP_EOL .
                '            <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '            <p class="card-text">' .
                'This is a wider card with supporting text below as a natural lead-in to additional content. ' .
                'This content is a little bit longer.' .
                '</p>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '        <div class="card-footer">' . PHP_EOL .
                '            <small class="text-muted">Last updated 3 mins ago</small>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card">' . PHP_EOL .
                '        <img alt="..." class="card-img-top" src="images&#x2F;demo&#x2F;image-cap.svg" />' . PHP_EOL .
                '        <div class="card-body">' . PHP_EOL .
                '            <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '            <p class="card-text">' .
                'This card has supporting text below as a natural lead-in to additional content.' .
                '</p>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '        <div class="card-footer">' . PHP_EOL .
                '            <small class="text-muted">Last updated 3 mins ago</small>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card">' . PHP_EOL .
                '        <img alt="..." class="card-img-top" src="images&#x2F;demo&#x2F;image-cap.svg" />' . PHP_EOL .
                '        <div class="card-body">' . PHP_EOL .
                '            <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '            <p class="card-text">' .
                'This is a wider card with supporting text below as a natural lead-in to additional content. ' .
                'This card has even longer content than the first to show that equal height action.' .
                '</p>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '        <div class="card-footer">' . PHP_EOL .
                '            <small class="text-muted">Last updated 3 mins ago</small>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
        ],
        [
            'title' => 'Card columns',
            'url' => '%bootstrap-url%/components/card/#card-columns',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->cardColumns([
                    [
                        'image_top' => ['images/demo/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Card title that wraps to a new line',
                        'text' => 'This is a longer card with supporting text below as ' .
                            'a natural lead-in to additional content. This content is a little bit longer.',
                    ],
                    [
                        [
                            'blockquote' => [
                                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.',
                                'Someone famous in <cite title="Source Title">Source Title</cite>',
                                ['class' => 'mb-0'],
                            ],
                        ],
                        ['class' => 'p-3'],
                    ],
                    [
                        'image_top' => ['images/demo/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Card title',
                        'text' => [
                            'This card has supporting text below as a natural lead-in to additional content.',
                            '<small class="text-muted">Last updated 3 mins ago</small>',
                        ],
                    ],
                    [
                        [
                            'blockquote' => [
                                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.',
                                'Someone famous in <cite title="Source Title">Source Title</cite>',
                                ['class' => 'mb-0'],
                                [],
                                ['class' => 'text-white'],
                            ],
                        ],
                        ['bgVariant' => 'primary', 'class' => 'text-white text-center p-3'],
                    ],
                    [
                        [
                            'title' => 'Card title',
                            'text' => [
                                'This card has a regular title and short paragraphy of text below it.',
                                '<small class="text-muted">Last updated 3 mins ago</small>',
                            ],
                        ],
                        ['class' => 'text-center'],
                    ],
                    [
                        'image_top' => ['images/demo/image-cap.svg', ['alt' => '...',]],
                    ],
                    [
                        [
                            'blockquote' => [
                                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ' .
                                    'Integer posuere erat a ante.',
                                'Someone famous in <cite title="Source Title">Source Title</cite>',
                                ['class' => 'mb-0'],
                            ],
                        ],
                        ['class' => 'p-3 text-right'],
                    ],
                    [
                        'title' => 'Card title',
                        'text' => [
                            'This is another card with title and supporting text below. ' .
                                'This card has some additional content to make it slightly taller overall.',
                            '<small class="text-muted">Last updated 3 mins ago</small>',
                        ],
                    ],
                ]);
            },
            'expected' => '<div class="card-columns">' . PHP_EOL .
                '    <div class="card">' . PHP_EOL .
                '        <img alt="..." class="card-img-top" src="images&#x2F;demo&#x2F;image-cap.svg" />'
                . PHP_EOL .
                '        <div class="card-body">' . PHP_EOL .
                '            <h5 class="card-title">' .
                'Card title that wraps to a new line' .
                '</h5>' . PHP_EOL .
                '            <p class="card-text">' .
                'This is a longer card with supporting text below as a natural lead-in to additional content. ' .
                'This content is a little bit longer.' .
                '</p>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card&#x20;p-3">' . PHP_EOL .
                '        <div class="card-body">' . PHP_EOL .
                '            <blockquote class="blockquote&#x20;mb-0">' . PHP_EOL .
                '                <p class="mb-0">' .
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ' .
                'Integer posuere erat a ante.' .
                '</p>' . PHP_EOL .
                '                <footer class="blockquote-footer">' .
                'Someone famous in <cite title="Source Title">Source Title</cite>' .
                '</footer>' . PHP_EOL .
                '            </blockquote>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card">' . PHP_EOL .
                '        <img alt="..." class="card-img-top" src="images&#x2F;demo&#x2F;image-cap.svg" />'
                . PHP_EOL .
                '        <div class="card-body">' . PHP_EOL .
                '            <h5 class="card-title">Card title</h5>' . PHP_EOL .
                '            <p class="card-text">' .
                'This card has supporting text below as a natural lead-in to additional content.' .
                '</p>' . PHP_EOL .
                '            <p class="card-text">' .
                '<small class="text-muted">Last updated 3 mins ago</small>' .
                '</p>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="bg-primary&#x20;card&#x20;p-3&#x20;text-center&#x20;text-white">'
                . PHP_EOL .
                '        <div class="card-body">' . PHP_EOL .
                '            <blockquote class="blockquote&#x20;mb-0">' . PHP_EOL .
                '                <p class="mb-0">' .
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.' .
                '</p>' . PHP_EOL .
                '                <footer class="blockquote-footer&#x20;text-white">' .
                'Someone famous in <cite title="Source Title">Source Title</cite>' .
                '</footer>' . PHP_EOL .
                '            </blockquote>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card&#x20;text-center">' . PHP_EOL .
                '        <div class="card-body">' . PHP_EOL .
                '            <h5 class="card-title">Card title</h5>' . PHP_EOL .
                '            <p class="card-text">' .
                'This card has a regular title and short paragraphy of text below it.' .
                '</p>' . PHP_EOL .
                '            <p class="card-text">' .
                '<small class="text-muted">Last updated 3 mins ago</small>' .
                '</p>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card">' . PHP_EOL .
                '        <img alt="..." class="card-img-top" src="images&#x2F;demo&#x2F;image-cap.svg" />'
                . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card&#x20;p-3&#x20;text-right">' . PHP_EOL .
                '        <div class="card-body">' . PHP_EOL .
                '            <blockquote class="blockquote&#x20;mb-0">' . PHP_EOL .
                '                <p class="mb-0">' .
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ' .
                'Integer posuere erat a ante.' .
                '</p>' . PHP_EOL .
                '                <footer class="blockquote-footer">' .
                'Someone famous in <cite title="Source Title">Source Title</cite>' .
                '</footer>' . PHP_EOL .
                '            </blockquote>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card">' . PHP_EOL .
                '        <div class="card-body">' . PHP_EOL .
                '            <h5 class="card-title">Card title</h5>' . PHP_EOL .
                '            <p class="card-text">' .
                'This is another card with title and supporting text below. ' .
                'This card has some additional content to make it slightly taller overall.' .
                '</p>' . PHP_EOL .
                '            <p class="card-text">' .
                '<small class="text-muted">Last updated 3 mins ago</small>' .
                '</p>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
        ],
    ],
];
