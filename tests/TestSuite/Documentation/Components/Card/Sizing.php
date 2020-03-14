<?php

// Documentation test config file for "Components / Card / Sizing" part
return [
    'title' => 'Sizing',
    'url' => '%bootstrap-url%/components/card/#sizing',
    'tests' => [
        [
            'title' => 'Using utilities',
            'url' => '%bootstrap-url%/components/card/#using-utilities',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {

                echo $oView->card([
                    'title' => 'Card title',
                    'text' => 'With supporting text below as a natural lead-in to additional content.',
                    '<a href="#" class="btn btn-primary">Button</a>',
                ], ['class' => 'w-75']) . PHP_EOL;

                echo $oView->card([
                    'title' => 'Card title',
                    'text' => 'With supporting text below as a natural lead-in to additional content.',
                    '<a href="#" class="btn btn-primary">Button</a>',
                ], ['class' => 'w-50']);
            },
            'expected' => '<div class="card&#x20;w-75">' . PHP_EOL .
                '    <div class="card-body">' . PHP_EOL .
                '        <h5 class="card-title">Card title</h5>' . PHP_EOL .
                '        <p class="card-text">'.
                'With supporting text below as a natural lead-in to additional content.'.
                '</p>' . PHP_EOL .
                '        <a href="#" class="btn btn-primary">Button</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="card&#x20;w-50">' . PHP_EOL .
                '    <div class="card-body">' . PHP_EOL .
                '        <h5 class="card-title">Card title</h5>' . PHP_EOL .
                '        <p class="card-text">'.
                'With supporting text below as a natural lead-in to additional content.'.
                '</p>' . PHP_EOL .
                '        <a href="#" class="btn btn-primary">Button</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
        ],
        [
            'title' => 'Using custom CSS',
            'url' => '%bootstrap-url%/components/card/#using-custom-css',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->card([
                    'title' => 'Special title treatment',
                    'text' => 'With supporting text below as a natural lead-in to additional content.',
                    '<a href="#" class="btn btn-primary">Go somewhere</a>',
                ], ['style' => 'width: 18rem;']);
            },
            'expected' => '<div class="card" style="width&#x3A;&#x20;18rem&#x3B;">' . PHP_EOL .
                '    <div class="card-body">' . PHP_EOL .
                '        <h5 class="card-title">Special title treatment</h5>' . PHP_EOL .
                '        <p class="card-text">'.
                'With supporting text below as a natural lead-in to additional content.'.
                '</p>' . PHP_EOL .
                '        <a href="#" class="btn btn-primary">Go somewhere</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
        ],
    ],
];
