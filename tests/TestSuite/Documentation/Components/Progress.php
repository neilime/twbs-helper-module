<?php

// Documentation test config file for "Components / Progress" part
return [
    'title' => 'Progress',
    'url' => '%bootstrap-url%/components/progress/',
    'tests' => [
        [
            'title' => 'How it works',
            'url' => '%bootstrap-url%/components/progress/#example',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {

                // Display progressbar at 0%
                echo $oView->progressBar(0, 100);
                echo PHP_EOL . '<br>' . PHP_EOL;

                // Display progress bar at 25%
                echo $oView->progressBar(0, 100, 25);
                echo PHP_EOL . '<br>' . PHP_EOL;

                // Display progress bar at 50%
                echo $oView->progressBar(0, 100, 50);
                echo PHP_EOL . '<br>' . PHP_EOL;

                // Display progress bar at 75%
                echo $oView->progressBar(0, 100, 75);
                echo PHP_EOL . '<br>' . PHP_EOL;

                // Display progress bar at 100%
                echo $oView->progressBar(0, 100, 100);
            },
            'expected' => '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="0" class="progress-bar" ' .
            'role="progressbar"></div>' . PHP_EOL .
            '</div>' . PHP_EOL .
                '<br>' . PHP_EOL .
            '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar" ' .
            'role="progressbar" style="width&#x3A;&#x20;25&#x25;&#x3B;"></div>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<br>' . PHP_EOL .
            '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar" ' .
            'role="progressbar" style="width&#x3A;&#x20;50&#x25;&#x3B;"></div>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<br>' . PHP_EOL .
            '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class="progress-bar" ' .
            'role="progressbar" style="width&#x3A;&#x20;75&#x25;&#x3B;"></div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<br>' . PHP_EOL .
            '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" class="progress-bar" ' .
            'role="progressbar" style="width&#x3A;&#x20;100&#x25;&#x3B;"></div>' . PHP_EOL .
            '</div>',
        ],
        [
            'title' => 'Labels',
            'url' => '%bootstrap-url%/components/progress/#labels',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->progressBar([
                    'show_label' => true,
                    'min' => 0,
                    'max' => 100,
                    'current' => 25,
                ]);
            },
            'expected' => '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar" ' .
            'role="progressbar" style="width&#x3A;&#x20;25&#x25;&#x3B;">' . PHP_EOL .
            '        25%' . PHP_EOL .
            '    </div>' . PHP_EOL .
            '</div>',
        ],
        [
            'title' => 'Height',
            'url' => '%bootstrap-url%/components/progress/#height',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->progressBar([
                    'attributes' => ['style' => 'height:1px'],
                    'min' => 0,
                    'max' => 100,
                    'current' => 25,
                ]);

                echo PHP_EOL . '<br>' . PHP_EOL;

                echo $oView->progressBar([
                    'attributes' => ['style' => 'height:20px'],
                    'min' => 0,
                    'max' => 100,
                    'current' => 25,
                ]);
            },
            'expected' => '<div class="progress" style="height&#x3A;&#x20;1px&#x3B;">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar" ' .
            'role="progressbar" style="width&#x3A;&#x20;25&#x25;&#x3B;"></div>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<br>' . PHP_EOL .
            '<div class="progress" style="height&#x3A;&#x20;20px&#x3B;">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar" ' .
            'role="progressbar" style="width&#x3A;&#x20;25&#x25;&#x3B;"></div>' . PHP_EOL .
            '</div>',
        ],
        [
            'title' => 'Backgrounds',
            'url' => '%bootstrap-url%/components/progress/#backgrounds',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                foreach (
                    [
                    'success' => 25,
                    'info' => 50,
                    'warning' => 75,
                    'danger' => 100,
                    ] as $sVariant => $iCurrent
                ) {
                    echo $oView->progressBar([
                        'variant' => $sVariant,
                        'min' => 0,
                        'max' => 100,
                        'current' => $iCurrent,
                    ]);
                    echo PHP_EOL . '<br>' . PHP_EOL;
                }
            },
            'expected' => '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="bg-success&#x20;progress-bar" ' .
            'role="progressbar" style="width&#x3A;&#x20;25&#x25;&#x3B;"></div>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<br>' . PHP_EOL .
            '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="bg-info&#x20;progress-bar" ' .
            'role="progressbar" style="width&#x3A;&#x20;50&#x25;&#x3B;"></div>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<br>' . PHP_EOL .
            '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class="bg-warning&#x20;progress-bar" ' .
            'role="progressbar" style="width&#x3A;&#x20;75&#x25;&#x3B;"></div>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<br>' . PHP_EOL .
            '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" class="bg-danger&#x20;progress-bar" ' .
            'role="progressbar" style="width&#x3A;&#x20;100&#x25;&#x3B;"></div>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<br>' . PHP_EOL,
        ],
        [
            'title' => 'Multiple bars',
            'url' => '%bootstrap-url%/components/progress/#multiple-bars',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->progressBarGroup([
                    ['min' => 0, 'max' => 100, 'current' => 15],
                    ['variant' => 'success', 'min' => 0, 'max' => 100, 'current' => 30],
                    ['variant' => 'info', 'min' => 0, 'max' => 100, 'current' => 20],
                ]);
            },
            'expected' => '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="15" ' .
            'class="progress-bar" role="progressbar" style="width&#x3A;&#x20;15&#x25;&#x3B;"></div>' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="30" ' .
            'class="bg-success&#x20;progress-bar" role="progressbar" ' .
            'style="width&#x3A;&#x20;30&#x25;&#x3B;"></div>' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" ' .
            'class="bg-info&#x20;progress-bar" role="progressbar" ' .
            'style="width&#x3A;&#x20;20&#x25;&#x3B;"></div>' . PHP_EOL .
            '</div>',
        ],
        [
            'title' => 'Striped',
            'url' => '%bootstrap-url%/components/progress/#striped',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                foreach (
                    [
                    null => 10,
                    'success' => 25,
                    'info' => 50,
                    'warning' => 75,
                    'danger' => 100,
                    ] as $sVariant => $iCurrent
                ) {
                    echo $oView->progressBar([
                        'striped' => true,
                        'variant' => $sVariant,
                        'current' => $iCurrent,
                        'min' => 0,
                        'max' => 100,
                    ]);
                    echo PHP_EOL . '<br>' . PHP_EOL;
                }
            },
            'expected' => '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" ' .
            'class="progress-bar&#x20;progress-bar-striped" role="progressbar" ' .
            'style="width&#x3A;&#x20;10&#x25;&#x3B;"></div>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<br>' . PHP_EOL .
            '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" ' .
            'class="bg-success&#x20;progress-bar&#x20;progress-bar-striped" role="progressbar" ' .
            'style="width&#x3A;&#x20;25&#x25;&#x3B;"></div>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<br>' . PHP_EOL .
            '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" ' .
            'class="bg-info&#x20;progress-bar&#x20;progress-bar-striped" role="progressbar" ' .
            'style="width&#x3A;&#x20;50&#x25;&#x3B;"></div>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<br>' . PHP_EOL .
            '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" ' .
            'class="bg-warning&#x20;progress-bar&#x20;progress-bar-striped" role="progressbar" ' .
            'style="width&#x3A;&#x20;75&#x25;&#x3B;"></div>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<br>' . PHP_EOL .
            '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" ' .
            'class="bg-danger&#x20;progress-bar&#x20;progress-bar-striped" role="progressbar" ' .
            'style="width&#x3A;&#x20;100&#x25;&#x3B;"></div>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<br>' . PHP_EOL,
        ],
        [
            'title' => 'Animated stripes',
            'url' => '%bootstrap-url%/components/progress/#animated-stripes',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->progressBar([
                    'striped' => true,
                    'animated' => true,
                    'current' => 25,
                    'min' => 0,
                    'max' => 100,
                ]);
            },
            'expected' => '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" ' .
            'class="progress-bar&#x20;progress-bar-animated&#x20;progress-bar-striped" ' .
            'role="progressbar" style="width&#x3A;&#x20;25&#x25;&#x3B;"></div>' . PHP_EOL .
            '</div>',
        ],
    ],
];
