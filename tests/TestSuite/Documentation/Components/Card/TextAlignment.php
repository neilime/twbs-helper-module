<?php

// Documentation test config file for "Components / Card / Text alignment" part
return [
    'title' => 'Text alignment',
    'url' => '%bootstrap-url%/components/card/#text-alignment',
    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
        echo $oView->card([
            'title' => 'Special title treatment',
            'text' => 'With supporting text below as a natural lead-in to additional content.',
            '<a href="#" class="btn btn-primary">Go somewhere</a>',
        ], ['style' => 'width: 18rem;']) . PHP_EOL;

        echo '<br>' . PHP_EOL;

        // Text center
        echo $oView->card([
            'title' => 'Special title treatment',
            'text' => 'With supporting text below as a natural lead-in to additional content.',
            '<a href="#" class="btn btn-primary">Go somewhere</a>',
        ], ['class' => 'text-center', 'style' => 'width: 18rem;']) . PHP_EOL;

        echo '<br>' . PHP_EOL;

        // Text right
        echo $oView->card([
            'title' => 'Special title treatment',
            'text' => 'With supporting text below as a natural lead-in to additional content.',
            '<a href="#" class="btn btn-primary">Go somewhere</a>',
        ], ['class' => 'text-right', 'style' => 'width: 18rem;']);
    },
    'expected' => '<div class="card" style="width&#x3A;&#x20;18rem&#x3B;">' . PHP_EOL .
        '    <div class="card-body">' . PHP_EOL .
        '        <h5 class="card-title">Special title treatment</h5>' . PHP_EOL .
        '        <p class="card-text">' .
        'With supporting text below as a natural lead-in to additional content.' .
        '</p>' . PHP_EOL .
        '        <a href="#" class="btn btn-primary">Go somewhere</a>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</div>' . PHP_EOL .
        '<br>' . PHP_EOL .
        '<div class="card&#x20;text-center" style="width&#x3A;&#x20;18rem&#x3B;">' . PHP_EOL .
        '    <div class="card-body">' . PHP_EOL .
        '        <h5 class="card-title">Special title treatment</h5>' . PHP_EOL .
        '        <p class="card-text">' .
        'With supporting text below as a natural lead-in to additional content.' .
        '</p>' . PHP_EOL .
        '        <a href="#" class="btn btn-primary">Go somewhere</a>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</div>' . PHP_EOL .
        '<br>' . PHP_EOL .
        '<div class="card&#x20;text-right" style="width&#x3A;&#x20;18rem&#x3B;">' . PHP_EOL .
        '    <div class="card-body">' . PHP_EOL .
        '        <h5 class="card-title">Special title treatment</h5>' . PHP_EOL .
        '        <p class="card-text">' .
        'With supporting text below as a natural lead-in to additional content.' .
        '</p>' . PHP_EOL .
        '        <a href="#" class="btn btn-primary">Go somewhere</a>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</div>',
];
