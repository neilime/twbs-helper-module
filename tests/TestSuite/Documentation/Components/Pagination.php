<?php

// Documentation test config file for "Components / Pagination" part
return [
    'title' => 'Pagination',
    'url' => '%bootstrap-url%/components/pagination/',
    'tests' => [
        [
            'title' => 'Overview',
            'url' => '%bootstrap-url%/components/pagination/#overview',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                // Create a paginator with 4 pages
                $oPaginator = new \Zend\Paginator\Paginator(new \Zend\Paginator\Adapter\ArrayAdapter(array_fill(
                    0,
                    40,
                    true
                )));

                echo $oView->paginationControl($oPaginator, null, null, [
                    'attributes' => ['aria-label' => 'Page navigation example'],
                ]);
            },
            'expected' => '<nav aria-label="Page&#x20;navigation&#x20;example">' . PHP_EOL .
                '    <ul class="pagination">' . PHP_EOL .
                '        <li class="disabled&#x20;page-item">' .
                '<a class="page-link" href="&#x23;" tabindex="-1">Previous</a>' .
                '</li>' . PHP_EOL .
                '        <li class="active&#x20;page-item">' .
                '<a class="page-link" href="&#x23;">1 <span class="sr-only">(current)</span></a>'.
                '</li>' . PHP_EOL .
                '        <li class="page-item">' .
                '<a class="page-link" href="&#x2F;test-route&#x2F;2">2</a></li>' . PHP_EOL .
                '        <li class="page-item">' .
                '<a class="page-link" href="&#x2F;test-route&#x2F;3">3</a></li>' . PHP_EOL .
                '        <li class="page-item">' .
                '<a class="page-link" href="&#x2F;test-route&#x2F;4">4</a></li>' . PHP_EOL .
                '        <li class="page-item">' .
                '<a class="page-link" href="&#x2F;test-route&#x2F;2">Next</a></li>' . PHP_EOL .
                '    </ul>' . PHP_EOL .
                '</nav>',
        ],
    ],
];
