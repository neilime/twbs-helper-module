<?php

// Documentation test config file for "Components / Card / Images" part
return [
    'title' => 'Images',
    'url' => '%bootstrap-url%/components/card/#images-1',
    'tests' => [
        [
            'title' => 'Image caps',
            'url' => '%bootstrap-url%/components/card/#image-caps',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->card([
                    'imgTop' => ['images/demo/image-cap.svg', ['alt' => '...',]],
                    'title' => 'Card title',
                    'text' => [
                        'This is a wider card with supporting text below as a natural lead-in to additional content. '.
                        'This content is a little bit longer.',
                        '<small class="text-muted">Last updated 3 mins ago</small>'
                    ],
                ], ['class' => 'mb-3']) . PHP_EOL;

                echo $oView->card([
                    'title' => 'Card title',
                    'text' => [
                        'This is a wider card with supporting text below as a natural lead-in to additional content. '.
                        'This content is a little bit longer.',
                        '<small class="text-muted">Last updated 3 mins ago</small>'
                    ],
                    'imgTop' => ['images/demo/image-cap.svg', ['alt' => '...',]],
                ]);
            },
            'expected' => '<div class="card&#x20;mb-3">' . PHP_EOL .
                '    <img alt="..." class="card-img-top" src="images&#x2F;demo&#x2F;image-cap.svg">' . PHP_EOL .
                '    <div class="card-body">' . PHP_EOL .
                '        <h5 class="card-title">Card title</h5>' . PHP_EOL .
                '        <p class="card-text">'.
                'This is a wider card with supporting text below as a natural lead-in to additional content. '.
                'This content is a little bit longer.'.
                '</p>' . PHP_EOL .
                '        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="card">' . PHP_EOL .
                '    <div class="card-body">' . PHP_EOL .
                '        <h5 class="card-title">Card title</h5>' . PHP_EOL .
                '        <p class="card-text">'.
                'This is a wider card with supporting text below as a natural lead-in to additional content. '.
                'This content is a little bit longer.'.
                '</p>' . PHP_EOL .
                '        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <img alt="..." class="card-img-top" src="images&#x2F;demo&#x2F;image-cap.svg">' . PHP_EOL .
                '</div>',
        ],
        [
            'title' => 'Image overlays',
            'url' => '%bootstrap-url%/components/card/#image-overlays',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->card([
                    'overlay' => [
                        'img' => ['images/demo/image-cap.svg', ['alt' => '...',]],
                        'title' => 'Card title',
                        'text' => [
                            'This is a wider card with supporting text below as a natural '.
                            'lead-in to additional content. '.
                            'This content is a little bit longer.',
                            'Last updated 3 mins ago'
                        ],
                    ],
                ], ['bgVariant' => 'dark', 'class' => 'text-white']);
            },
            'expected' => '<div class="bg-dark&#x20;card&#x20;text-white">' . PHP_EOL .
                '    <img alt="..." class="card-img" src="images&#x2F;demo&#x2F;image-cap.svg">' . PHP_EOL .
                '    <div class="card-img-overlay">' . PHP_EOL .
                '        <h5 class="card-title">Card title</h5>' . PHP_EOL .
                '        <p class="card-text">'.
                'This is a wider card with supporting text below as a natural lead-in to additional content. '.
                'This content is a little bit longer.'.
                '</p>' . PHP_EOL .
                '        <p class="card-text">Last updated 3 mins ago</p>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
        ]
    ]
];
