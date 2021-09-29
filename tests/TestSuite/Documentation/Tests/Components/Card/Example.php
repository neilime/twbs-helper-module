<?php

// Documentation test config file for "Components / Card / Example" part
return [
    'title' => 'Example',
    'url' => '%bootstrap-url%/components/card/#example',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        echo $oView->card([
            'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
            'title' => 'Card title',
            'text' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
            '<a href="&#x23;" class="btn btn-primary">Go somewhere</a>',
        ], ['style' => 'width: 18rem;']);
    },
];
