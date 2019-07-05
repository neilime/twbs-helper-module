<?php

// Documentation test config file for "Components / Card / Example" part
return [
    'title' => 'Example',
    'url' => '%bootstrap-url%/components/card/#example',
    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
        echo $oView->card([
            'imgTop' => ['images/demo-sample.svg', ['alt' => '...',]],
            'title' => 'Card title',
            'text' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
            '<a href="&#x23;" class="btn btn-primary">Go somewhere</a>',
        ], ['style' => 'width: 18rem;']);
    },
    'expected' => '<div style="width&#x3A;&#x20;18rem&#x3B;" class="card">' . PHP_EOL .
        '    <img alt="..." class="card-img-top" src="images&#x2F;demo-sample.svg">' . PHP_EOL .
        '    <div class="card-body">' . PHP_EOL .
        '        <h5 class="card-title">Card title</h5>' . PHP_EOL .
        '        <p class="card-text">'.
        'Some quick example text to build on the card title and make up the bulk of the card&#039;s content.'.
        '</p>' . PHP_EOL .
        '        <a href="&#x23;" class="btn btn-primary">Go somewhere</a>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</div>',
];
