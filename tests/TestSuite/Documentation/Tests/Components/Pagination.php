<?php

// Documentation test config file for "Components / Pagination" part
return [
    'title' => 'Pagination',
    'url' => '%bootstrap-url%/components/pagination/',
    'tests' => [
        [
            'title' => 'Overview',
            'url' => '%bootstrap-url%/components/pagination/#overview',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                // Create a paginator with 4 pages
                $oPaginator = new \Laminas\Paginator\Paginator(new \Laminas\Paginator\Adapter\ArrayAdapter(array_fill(
                    0,
                    30,
                    true
                )));

                echo $oView->paginationControl($oPaginator, null, null, [
                    'attributes' => ['aria-label' => 'Page navigation example'],
                    'previousLink' => 'Previous',
                    'nextLink' => 'Next',
                ]);
            },
        ],
        [
            'title' => 'Working with icons',
            'url' => '%bootstrap-url%/components/pagination/#working-with-icons',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                // Create a paginator with 4 pages
                $oPaginator = new \Laminas\Paginator\Paginator(new \Laminas\Paginator\Adapter\ArrayAdapter(array_fill(
                    0,
                    30,
                    true
                )));

                echo $oView->paginationControl($oPaginator, null, null, [
                    'previousLink' => '«',
                    'nextLink' => '»',
                    'attributes' => ['aria-label' => 'Page navigation example'],
                ]);
            },
        ],
        [
            'title' => 'Sizing',
            'url' => '%bootstrap-url%/components/pagination/#sizing',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                // Create a paginator with 4 pages
                $oPaginator = new \Laminas\Paginator\Paginator(new \Laminas\Paginator\Adapter\ArrayAdapter(array_fill(
                    0,
                    30,
                    true
                )));

                echo $oView->paginationControl($oPaginator, null, null, [
                    'size' => 'lg',
                    'attributes' => ['aria-label' => 'Page navigation example'],
                ]) . PHP_EOL;

                echo $oView->paginationControl($oPaginator, null, null, [
                    'size' => 'sm',
                    'attributes' => ['aria-label' => 'Page navigation example'],
                ]);
            },
        ],
        [
            'title' => 'Alignment',
            'url' => '%bootstrap-url%/components/pagination/#alignment',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                // Create a paginator with 4 pages
                $oPaginator = new \Laminas\Paginator\Paginator(new \Laminas\Paginator\Adapter\ArrayAdapter(array_fill(
                    0,
                    30,
                    true
                )));

                echo $oView->paginationControl($oPaginator, null, null, [
                    'alignment' => 'center',
                    'previousLink' => 'Previous',
                    'nextLink' => 'Next',
                    'attributes' => ['aria-label' => 'Page navigation example'],
                ]) . PHP_EOL;

                echo $oView->paginationControl($oPaginator, null, null, [
                    'alignment' => 'end',
                    'previousLink' => 'Previous',
                    'nextLink' => 'Next',
                    'attributes' => ['aria-label' => 'Page navigation example'],
                ]);
            },
        ],
    ],
];
