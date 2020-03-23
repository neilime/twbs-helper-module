<?php

// Documentation test config file for "Components / Card / Card styles" part
return [
    'title' => 'Card styles',
    'url' => '%bootstrap-url%/components/card/#card-styles',
    'tests' => [
        [
            'title' => 'Background and color',
            'url' => '%bootstrap-url%/components/card/#background-and-color',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                foreach (
                    [
                    'primary', 'secondary', 'success', 'danger',
                    'warning', 'info', 'light', 'dark',
                    ] as $sVariant
                ) {
                    echo $oView->card([
                        'header' => 'Header',
                        'title' => 'Primary card title',
                        'text' => 'Some quick example text to build on the card title ' .
                            'and make up the bulk of the card\'s content.',
                    ], [
                        'bgVariant' => $sVariant,
                        'class' => ($sVariant !== 'light' ? 'text-white ' : '') . 'mb-3',
                    ]) . PHP_EOL;
                }
            },
            'expected' => '<div class="bg-primary&#x20;card&#x20;mb-3&#x20;text-white">' . PHP_EOL .
                '    <div class="card-header">' . PHP_EOL .
                '        Header' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card-body">' . PHP_EOL .
                '        <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '        <p class="card-text">' .
                'Some quick example text to build on the card title and make up the bulk of the card&#039;s content.' .
                '</p>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="bg-secondary&#x20;card&#x20;mb-3&#x20;text-white">' . PHP_EOL .
                '    <div class="card-header">' . PHP_EOL .
                '        Header' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card-body">' . PHP_EOL .
                '        <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '        <p class="card-text">' .
                'Some quick example text to build on the card title and make up the bulk of the card&#039;s content.' .
                '</p>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="bg-success&#x20;card&#x20;mb-3&#x20;text-white">' . PHP_EOL .
                '    <div class="card-header">' . PHP_EOL .
                '        Header' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card-body">' . PHP_EOL .
                '        <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '        <p class="card-text">' .
                'Some quick example text to build on the card title and make up the bulk of the card&#039;s content.' .
                '</p>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="bg-danger&#x20;card&#x20;mb-3&#x20;text-white">' . PHP_EOL .
                '    <div class="card-header">' . PHP_EOL .
                '        Header' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card-body">' . PHP_EOL .
                '        <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '        <p class="card-text">' .
                'Some quick example text to build on the card title and make up the bulk of the card&#039;s content.' .
                '</p>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="bg-warning&#x20;card&#x20;mb-3&#x20;text-white">' . PHP_EOL .
                '    <div class="card-header">' . PHP_EOL .
                '        Header' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card-body">' . PHP_EOL .
                '        <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '        <p class="card-text">' .
                'Some quick example text to build on the card title and make up the bulk of the card&#039;s content.' .
                '</p>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="bg-info&#x20;card&#x20;mb-3&#x20;text-white">' . PHP_EOL .
                '    <div class="card-header">' . PHP_EOL .
                '        Header' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card-body">' . PHP_EOL .
                '        <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '        <p class="card-text">' .
                'Some quick example text to build on the card title and make up the bulk of the card&#039;s content.' .
                '</p>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="bg-light&#x20;card&#x20;mb-3">' . PHP_EOL .
                '    <div class="card-header">' . PHP_EOL .
                '        Header' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card-body">' . PHP_EOL .
                '        <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '        <p class="card-text">' .
                'Some quick example text to build on the card title and make up the bulk of the card&#039;s content.' .
                '</p>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="bg-dark&#x20;card&#x20;mb-3&#x20;text-white">' . PHP_EOL .
                '    <div class="card-header">' . PHP_EOL .
                '        Header' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card-body">' . PHP_EOL .
                '        <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '        <p class="card-text">' .
                'Some quick example text to build on the card title and make up the bulk of the card&#039;s content.' .
                '</p>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL,
        ],
        [
            'title' => 'Border',
            'url' => '%bootstrap-url%/components/card/#border',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                foreach (
                    [
                    'primary', 'secondary', 'success', 'danger',
                    'warning', 'info', 'light', 'dark',
                    ] as $sVariant
                ) {
                    echo $oView->card([
                        'header' => 'Header',
                        'title' => 'Primary card title',
                        'text' => 'Some quick example text to build on the card title and ' .
                            'make up the bulk of the card\'s content.',
                    ], [
                        'borderVariant' => $sVariant,
                        'bodyVariant' => $sVariant !== 'light' ?  $sVariant : null,
                        'class' => 'mb-3'
                    ]) . PHP_EOL;
                }
            },
            'expected' => '<div class="border-primary&#x20;card&#x20;mb-3">' . PHP_EOL .
                '    <div class="card-header">' . PHP_EOL .
                '        Header' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card-body&#x20;text-primary">' . PHP_EOL .
                '        <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '        <p class="card-text">' .
                'Some quick example text to build on the card title and make up the bulk of the card&#039;s content.' .
                '</p>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="border-secondary&#x20;card&#x20;mb-3">' . PHP_EOL .
                '    <div class="card-header">' . PHP_EOL .
                '        Header' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card-body&#x20;text-secondary">' . PHP_EOL .
                '        <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '        <p class="card-text">' .
                'Some quick example text to build on the card title and make up the bulk of the card&#039;s content.' .
                '</p>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="border-success&#x20;card&#x20;mb-3">' . PHP_EOL .
                '    <div class="card-header">' . PHP_EOL .
                '        Header' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card-body&#x20;text-success">' . PHP_EOL .
                '        <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '        <p class="card-text">' .
                'Some quick example text to build on the card title and make up the bulk of the card&#039;s content.' .
                '</p>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="border-danger&#x20;card&#x20;mb-3">' . PHP_EOL .
                '    <div class="card-header">' . PHP_EOL .
                '        Header' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card-body&#x20;text-danger">' . PHP_EOL .
                '        <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '        <p class="card-text">' .
                'Some quick example text to build on the card title and make up the bulk of the card&#039;s content.' .
                '</p>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="border-warning&#x20;card&#x20;mb-3">' . PHP_EOL .
                '    <div class="card-header">' . PHP_EOL .
                '        Header' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card-body&#x20;text-warning">' . PHP_EOL .
                '        <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '        <p class="card-text">' .
                'Some quick example text to build on the card title and make up the bulk of the card&#039;s content.' .
                '</p>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="border-info&#x20;card&#x20;mb-3">' . PHP_EOL .
                '    <div class="card-header">' . PHP_EOL .
                '        Header' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card-body&#x20;text-info">' . PHP_EOL .
                '        <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '        <p class="card-text">' .
                'Some quick example text to build on the card title and make up the bulk of the card&#039;s content.' .
                '</p>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="border-light&#x20;card&#x20;mb-3">' . PHP_EOL .
                '    <div class="card-header">' . PHP_EOL .
                '        Header' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card-body">' . PHP_EOL .
                '        <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '        <p class="card-text">' .
                'Some quick example text to build on the card title and make up the bulk of the card&#039;s content.' .
                '</p>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="border-dark&#x20;card&#x20;mb-3">' . PHP_EOL .
                '    <div class="card-header">' . PHP_EOL .
                '        Header' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card-body&#x20;text-dark">' . PHP_EOL .
                '        <h5 class="card-title">Primary card title</h5>' . PHP_EOL .
                '        <p class="card-text">' .
                'Some quick example text to build on the card title and make up the bulk of the card&#039;s content.' .
                '</p>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL,
        ],
        [
            'title' => 'Mixins utilities',
            'url' => '%bootstrap-url%/components/card/#mixins-utilities',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->card([
                    'header' => ['Header', ['class' => 'bg-transparent border-success']],
                    'title' => 'Success card title',
                    'text' => 'Some quick example text to build on the card title ' .
                        'and make up the bulk of the card\'s content.',
                    'footer' => ['Footer', ['class' => 'card-footer bg-transparent border-success']],
                ], [
                    'borderVariant' => 'success',
                    'bodyVariant' => 'success',
                    'class' => 'mb-3'
                ]);
            },
            'expected' => '<div class="border-success&#x20;card&#x20;mb-3">' . PHP_EOL .
                '    <div class="bg-transparent&#x20;border-success&#x20;card-header">' . PHP_EOL .
                '        Header' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="card-body&#x20;text-success">' . PHP_EOL .
                '        <h5 class="card-title">Success card title</h5>' . PHP_EOL .
                '        <p class="card-text">' .
                'Some quick example text to build on the card title and make up the bulk of the card&#039;s content.' .
                '</p>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="bg-transparent&#x20;border-success&#x20;card-footer">' . PHP_EOL .
                '        Footer' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
        ],
    ],
];
