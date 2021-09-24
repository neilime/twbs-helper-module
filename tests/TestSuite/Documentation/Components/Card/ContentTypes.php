<?php

// Documentation test config file for "Components / Card / Content types" part
return [
    'title' => 'Content types',
    'url' => '%bootstrap-url%/components/card/#content-types',
    'tests' => [
        [
            'title' => 'Body',
            'url' => '%bootstrap-url%/components/card/#body',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->card('This is some text within a card body.');
            },
            'expected' => '<div class="card">' . PHP_EOL .
                '    <div class="card-body">' . PHP_EOL .
                '        This is some text within a card body.' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
        ],
        [
            'title' => 'Titles, text, and links',
            'url' => '%bootstrap-url%/components/card/#titles-text-and-links',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->card([
                    'title' => 'Card title',
                    'subtitle' => [
                        'content' => 'Card subtitle',
                        'attributes' => ['class' => 'mb-2 text-muted'],
                    ],
                    'text' => 'Some quick example text to build on the card title ' .
                        'and make up the bulk of the card\'s content.',
                    'link' => [
                        'Card link',
                        'Another link',
                    ],
                ], ['style' => 'width: 18rem;']);
            },
            'expected' => '<div class="card" style="width&#x3A;&#x20;18rem&#x3B;">' . PHP_EOL .
                '    <div class="card-body">' . PHP_EOL .
                '        <h5 class="card-title">Card title</h5>' . PHP_EOL .
                '        <h6 class="card-subtitle&#x20;mb-2&#x20;text-muted">Card subtitle</h6>' . PHP_EOL .
                '        <p class="card-text">' .
                'Some quick example text to build on the card title and make up the bulk of the card&#039;s content.' .
                '</p>' . PHP_EOL .
                '        <a class="card-link" href="&#x23;">Card link</a>' . PHP_EOL .
                '        <a class="card-link" href="&#x23;">Another link</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
        ],
        [
            'title' => 'Images',
            'url' => '%bootstrap-url%/components/card/#images',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->card([
                    'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                    'text' => 'Some quick example text to build on the card title ' .
                        'and make up the bulk of the card\'s content.',
                ], ['style' => 'width: 18rem;']);
            },
            'expected' => '<div class="card" style="width&#x3A;&#x20;18rem&#x3B;">' . PHP_EOL .
                '    <img alt="..." class="card-img-top" ' .
                'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;image-cap.svg" />' . PHP_EOL .
                '    <div class="card-body">' . PHP_EOL .
                '        <p class="card-text">' .
                'Some quick example text to build on the card title and make up the bulk of the card&#039;s content.' .
                '</p>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
        ],
        [
            'title' => 'List groups',
            'url' => '%bootstrap-url%/components/card/#list-groups',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->card([
                    'listGroup' => [
                        [
                            'Cras justo odio',
                            'Dapibus ac facilisis in',
                            'Vestibulum at eros',
                        ],
                    ],
                ], ['style' => 'width: 18rem;']);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                echo $oView->card([
                    'header' => 'Featured',
                    'listGroup' => [
                        [
                            'Cras justo odio',
                            'Dapibus ac facilisis in',
                            'Vestibulum at eros',
                        ],
                    ],
                ], ['style' => 'width: 18rem;']);
            },
            'expected' => '<div class="card" style="width&#x3A;&#x20;18rem&#x3B;">' . PHP_EOL .
                '    <ul class="list-group&#x20;list-group-flush">' . PHP_EOL .
                '        <li class="list-group-item">Cras justo odio</li>' . PHP_EOL .
                '        <li class="list-group-item">Dapibus ac facilisis in</li>' . PHP_EOL .
                '        <li class="list-group-item">Vestibulum at eros</li>' . PHP_EOL .
                '    </ul>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<br/>' . PHP_EOL .
                '<div class="card" style="width&#x3A;&#x20;18rem&#x3B;">' . PHP_EOL .
                '    <div class="card-header">' . PHP_EOL .
                '        Featured' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <ul class="list-group&#x20;list-group-flush">' . PHP_EOL .
                '        <li class="list-group-item">Cras justo odio</li>' . PHP_EOL .
                '        <li class="list-group-item">Dapibus ac facilisis in</li>' . PHP_EOL .
                '        <li class="list-group-item">Vestibulum at eros</li>' . PHP_EOL .
                '    </ul>' . PHP_EOL .
                '</div>',
        ],
        [
            'title' => 'Kitchen sink',
            'url' => '%bootstrap-url%/components/card/#kitchen-sink',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->card([
                    'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                    'title' => 'Card title',
                    'text' => 'Some quick example text to build on the card title ' .
                        'and make up the bulk of the card\'s content.',
                    'listGroup' => [
                        [
                            'Cras justo odio',
                            'Dapibus ac facilisis in',
                            'Vestibulum at eros',
                        ],
                    ],
                    'link' => [
                        'Card link',
                        'Another link',
                    ],
                ], ['style' => 'width: 18rem;']);
            },
            'expected' => '<div class="card" ' .
                'style="width&#x3A;&#x20;18rem&#x3B;">' . PHP_EOL .
                '    <img alt="..." class="card-img-top" ' .
                'src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;image-cap.svg" />' . PHP_EOL .
                '    <div class="card-body">' . PHP_EOL .
                '        <h5 class="card-title">Card title</h5>' . PHP_EOL .
                '        <p class="card-text">' .
                'Some quick example text to build on the card title and make up the bulk of the card&#039;s content.' .
                '</p>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <ul class="list-group&#x20;list-group-flush">' . PHP_EOL .
                '        <li class="list-group-item">Cras justo odio</li>' . PHP_EOL .
                '        <li class="list-group-item">Dapibus ac facilisis in</li>' . PHP_EOL .
                '        <li class="list-group-item">Vestibulum at eros</li>' . PHP_EOL .
                '    </ul>' . PHP_EOL .
                '    <div class="card-body">' . PHP_EOL .
                '        <a class="card-link" href="&#x23;">Card link</a>' . PHP_EOL .
                '        <a class="card-link" href="&#x23;">Another link</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
        ],
        [
            'title' => 'Header and footer',
            'url' => '%bootstrap-url%/components/card/#header-and-footer',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {

                echo $oView->card([
                    'header' => 'Featured',
                    'title' => 'Special title treatment',
                    'text' => 'With supporting text below as a natural lead-in to additional content.',
                    '<a href="#" class="btn btn-primary">Go somewhere</a>',
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // With blockquote
                echo $oView->card([
                    'header' => 'Quote',
                    'blockquote' => [
                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.',
                        'Someone famous in <cite title="Source Title">Source Title</cite>',
                        ['class' => 'mb-0'],
                    ],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Centered
                echo $oView->card([
                    'header' => 'Featured',
                    'title' => 'Special title treatment',
                    'text' => 'With supporting text below as a natural lead-in to additional content.',
                    '<a href="#" class="btn btn-primary">Go somewhere</a>',
                    'footer' => ['2 days ago', ['class' => 'text-muted']],
                ], ['class' => 'text-center']);
            },
            'expected' => '<div class="card">' . PHP_EOL .
                '    <div class="card-header">' . PHP_EOL .
                '        Featured' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card-body">' . PHP_EOL .
                '        <h5 class="card-title">Special title treatment</h5>' . PHP_EOL .
                '        <p class="card-text">' .
                'With supporting text below as a natural lead-in to additional content.' .
                '</p>' . PHP_EOL .
                '        <a href="#" class="btn btn-primary">Go somewhere</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<br/>' . PHP_EOL .
                '<div class="card">' . PHP_EOL .
                '    <div class="card-header">' . PHP_EOL .
                '        Quote' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card-body">' . PHP_EOL .
                '        <blockquote class="blockquote&#x20;mb-0">' . PHP_EOL .
                '            <p class="mb-0">' .
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.' .
                '</p>' . PHP_EOL .
                '            <footer class="blockquote-footer">' .
                'Someone famous in <cite title="Source Title">Source Title</cite>' .
                '</footer>' . PHP_EOL .
                '        </blockquote>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<br/>' . PHP_EOL .
                '<div class="card&#x20;text-center">' . PHP_EOL .
                '    <div class="card-header">' . PHP_EOL .
                '        Featured' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card-body">' . PHP_EOL .
                '        <h5 class="card-title">Special title treatment</h5>' . PHP_EOL .
                '        <p class="card-text">' .
                'With supporting text below as a natural lead-in to additional content.' .
                '</p>' . PHP_EOL .
                '        <a href="#" class="btn btn-primary">Go somewhere</a>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card-footer&#x20;text-muted">' . PHP_EOL .
                '        2 days ago' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
        ],
    ],
];
