<?php

// Documentation test config file for "Components / Progress" part
return [
    'title' => 'Progress',
    'url' => '%bootstrap-url%/components/progress/',
    'tests' => [
        [
            'title' => 'How it works',
            'url' => '%bootstrap-url%/components/progress/#example',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {

                /** @var \Zend\ProgressBar\ProgressBar $progressBar */
                $progressBar = $oView->progressBar(0, 100);

                // Start progressbar
                $progressBar->update(0);
                echo '<br>' . PHP_EOL;

                // Increase progress bar to 25%
                $progressBar->next(25);
                echo '<br>' . PHP_EOL;

                // Increase progress bar to 50%
                $progressBar->next(25);
                echo '<br>' . PHP_EOL;

                // Increase progress bar to 50%
                $progressBar->next(25);
                echo '<br>' . PHP_EOL;

                // Terminate progress bar
                $progressBar->finish();
            },
            'expected' => '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="0" class="progress-bar" '.
            'role="progressbar"></div>' . PHP_EOL .
            '</div>' . PHP_EOL .
                '<br>' . PHP_EOL .
            '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar" '.
            'role="progressbar" style="width&#x3A;&#x20;25&#x25;&#x3B;"></div>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<br>' . PHP_EOL .
            '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar" '.
            'role="progressbar" style="width&#x3A;&#x20;50&#x25;&#x3B;"></div>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<br>' . PHP_EOL .
            '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class="progress-bar" '.
            'role="progressbar" style="width&#x3A;&#x20;75&#x25;&#x3B;"></div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<br>' . PHP_EOL .
            '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" class="progress-bar" '.
            'role="progressbar" style="width&#x3A;&#x20;100&#x25;&#x3B;"></div>' . PHP_EOL .
            '</div>'. PHP_EOL,
        ],
        [
            'title' => 'Labels',
            'url' => '%bootstrap-url%/components/progress/#labels',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                /** @var \Zend\ProgressBar\ProgressBar $progressBar */
                $progressBar = $oView->progressBar(0, 100, [
                    'showLabel' => true,
                ]);
                $progressBar->next(25);
            },
            'expected' => '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar" '.
            'role="progressbar" style="width&#x3A;&#x20;25&#x25;&#x3B;">'.PHP_EOL.
            '        25%'.PHP_EOL.
            '    </div>' . PHP_EOL .
            '</div>' . PHP_EOL,
        ],
        [
            'title' => 'Height',
            'url' => '%bootstrap-url%/components/progress/#height',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                /** @var \Zend\ProgressBar\ProgressBar $progressBar1 */
                $progressBar1 = $oView->progressBar(0, 100, [
                    'attributes' => ['style' => 'height:1px'],
                ]);
                $progressBar1->update(25);

                echo '<br>' . PHP_EOL;

                /** @var \Zend\ProgressBar\ProgressBar $progressBar20 */
                $progressBar20 = $oView->progressBar(0, 100, [
                    'attributes' => ['style' => 'height:20px'],
                ]);
                $progressBar20->update(25);
            },
            'expected' => '<div class="progress" style="height&#x3A;&#x20;1px&#x3B;">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar" '.
            'role="progressbar" style="width&#x3A;&#x20;25&#x25;&#x3B;"></div>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<br>' . PHP_EOL .
            '<div class="progress" style="height&#x3A;&#x20;20px&#x3B;">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar" '.
            'role="progressbar" style="width&#x3A;&#x20;25&#x25;&#x3B;"></div>' . PHP_EOL .
            '</div>' . PHP_EOL,
        ],
        [
            'title' => 'Backgrounds',
            'url' => '%bootstrap-url%/components/progress/#backgrounds',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                foreach ([
                    'success' => 25,
                    'info' => 50,
                    'warning' => 75,
                    'danger' => 100,
                ] as $sVariant => $iProgress) {
                    /** @var \Zend\ProgressBar\ProgressBar $progressBar */
                    $progressBar = $oView->progressBar(0, 100, [
                        'variant' => $sVariant,
                    ]);
                    $progressBar->update($iProgress);
                    echo '<br>' . PHP_EOL;
                }
            },
            'expected' => '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="bg-success&#x20;progress-bar" '.
            'role="progressbar" style="width&#x3A;&#x20;25&#x25;&#x3B;"></div>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<br>' . PHP_EOL .
            '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="bg-info&#x20;progress-bar" '.
            'role="progressbar" style="width&#x3A;&#x20;50&#x25;&#x3B;"></div>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<br>' . PHP_EOL .
            '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class="bg-warning&#x20;progress-bar" '.
            'role="progressbar" style="width&#x3A;&#x20;75&#x25;&#x3B;"></div>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<br>' . PHP_EOL .
            '<div class="progress">' . PHP_EOL .
            '    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" class="bg-danger&#x20;progress-bar" '.
            'role="progressbar" style="width&#x3A;&#x20;100&#x25;&#x3B;"></div>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<br>' . PHP_EOL,
        ],
    ],
];
