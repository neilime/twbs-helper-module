<?php

// Documentation test config file for "Components / Media object" part
return [
    'title' => 'Media object',
    'url' => '%bootstrap-url%/components/media-object/',
    'tests' => [
        [
            'title' => 'Example',
            'url' => '%bootstrap-url%/components/media-object/#example',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->media([
                    'img' => ['images/demo-sample.svg', ['alt' => '...', 'class' => 'mr-3']],
                    'title' => 'Media heading',
                    'text' => 'Cras sit amet nibh libero, in gravida nulla. ' .
                        'Nulla vel metus scelerisque ante sollicitudin. ' .
                        'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                        'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                        'Donec lacinia congue felis in faucibus.',
                ]);
            },
            'expected' => '<div class="media">' . PHP_EOL .
                '    <img alt="..." class="mr-3" src="images&#x2F;demo-sample.svg">' . PHP_EOL .
                '    <div class="media-body">' . PHP_EOL .
                '        <h5 class="mt-0">Media heading</h5>' . PHP_EOL .
                '        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. ' .
                'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                'Donec lacinia congue felis in faucibus.' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
        ],
        [
            'title' => 'Nesting',
            'url' => '%bootstrap-url%/components/media-object/#nesting',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->media([
                    'img' => ['images/demo-sample.svg', ['alt' => '...', 'class' => 'mr-3']],
                    'title' => 'Media heading',
                    'text' => 'Cras sit amet nibh libero, in gravida nulla. ' .
                        'Nulla vel metus scelerisque ante sollicitudin. ' .
                        'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                        'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                        'Donec lacinia congue felis in faucibus.',
                ]);
            },
            'expected' => '<div class="media">' . PHP_EOL .
                '    <img alt="..." class="mr-3" src="images&#x2F;demo-sample.svg">' . PHP_EOL .
                '    <div class="media-body">' . PHP_EOL .
                '        <h5 class="mt-0">Media heading</h5>' . PHP_EOL .
                '        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. ' .
                'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                'Donec lacinia congue felis in faucibus.' . PHP_EOL .
                '        <div class="media">' . PHP_EOL .
                '            <img alt="..." class="mr-3" src="images&#x2F;demo-sample.svg">' . PHP_EOL .
                '            <div class="media-body">' . PHP_EOL .
                '                <h5 class="mt-0">Media heading</h5>' . PHP_EOL .
                '                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. ' .
                'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                'Donec lacinia congue felis in faucibus.' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
        ],
    ],
];
