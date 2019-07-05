<?php

// Documentation test config file for "Components / Card / Navigation" part
return [
    'title' => 'Navigation',
    'url' => '%bootstrap-url%/components/card/#navigation',
    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
        // Nav tabs (pages defined by a \Zend\Navigation\Navigation object as container)
        echo $oView->card([
            'nav' => new \Zend\Navigation\Navigation(
                [
                    ['label' => 'Active', 'uri' => '#', 'active' => true,],
                    ['label' => 'Link', 'uri' => '#',],
                    ['label' => 'Link', 'uri' => '#',],
                    ['label' => 'Disabled', 'uri' => '#', 'visible' => false,],
                ]
            ),
            'title' => 'Special title treatment',
            'text' => 'With supporting text below as a natural lead-in to additional content.',
            '<a href="#" class="btn btn-primary">Go somewhere</a>',
        ], ['class' => 'text-center']) . PHP_EOL;

        // Nav pills (pages defined by an array as  container)
        echo $oView->card([
            'nav' => [
                'options' => ['pills' => true],
                'container' => [
                    ['label' => 'Active', 'uri' => '#', 'active' => true,],
                    ['label' => 'Link', 'uri' => '#',],
                    ['label' => 'Link', 'uri' => '#',],
                    ['label' => 'Disabled', 'uri' => '#', 'visible' => false,],
                ]
            ],
            'title' => 'Special title treatment',
            'text' => 'With supporting text below as a natural lead-in to additional content.',
            '<a href="#" class="btn btn-primary">Go somewhere</a>',
        ], ['class' => 'text-center']);
    },
    'expected' => '<div class="card&#x20;text-center">' . PHP_EOL .
        '    <div class="card-header">' . PHP_EOL .
        '        <ul class="card-header-tabs&#x20;nav&#x20;nav-tabs">' . PHP_EOL .
        '            <li class="&#x20;nav-item">' . PHP_EOL .
        '                <a class="nav-link&#x20;active" href="&#x23;">Active</a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '            <li class="nav-item">' . PHP_EOL .
        '                <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '            <li class="nav-item">' . PHP_EOL .
        '                <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '            <li class="nav-item">' . PHP_EOL .
        '                <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">' .
        'Disabled' .
        '</a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '        </ul>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <div class="card-body">' . PHP_EOL .
        '        <h5 class="card-title">Special title treatment</h5>' . PHP_EOL .
        '        <p class="card-text">' .
        'With supporting text below as a natural lead-in to additional content.' .
        '</p>' . PHP_EOL .
        '        <a href="#" class="btn btn-primary">Go somewhere</a>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</div>' . PHP_EOL .
        '<div class="card&#x20;text-center">' . PHP_EOL .
        '    <div class="card-header">' . PHP_EOL .
        '        <ul class="card-header-pills&#x20;nav&#x20;nav-pills">' . PHP_EOL .
        '            <li class="&#x20;nav-item">' . PHP_EOL .
        '                <a class="nav-link&#x20;active" href="&#x23;">Active</a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '            <li class="nav-item">' . PHP_EOL .
        '                <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '            <li class="nav-item">' . PHP_EOL .
        '                <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '            <li class="nav-item">' . PHP_EOL .
        '                <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">' .
        'Disabled' .
        '</a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '        </ul>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <div class="card-body">' . PHP_EOL .
        '        <h5 class="card-title">Special title treatment</h5>' . PHP_EOL .
        '        <p class="card-text">' .
        'With supporting text below as a natural lead-in to additional content.' .
        '</p>' . PHP_EOL .
        '        <a href="#" class="btn btn-primary">Go somewhere</a>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</div>',
];
