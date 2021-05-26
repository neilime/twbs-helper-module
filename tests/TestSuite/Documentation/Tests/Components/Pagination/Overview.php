<?php

// Documentation test config file for "Components / Pagination / Overview" part
return [
    'title' => 'Overview',
    'url' => '%bootstrap-url%/components/pagination/#overview',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        // Create a paginator with 4 pages
        $paginator = new \Laminas\Paginator\Paginator(new \Laminas\Paginator\Adapter\ArrayAdapter(array_fill(
            0,
            30,
            true
        )));

        echo $view->paginationControl($paginator, null, null, [
            'attributes' => ['aria-label' => 'Page navigation example'],
            'previousLink' => 'Previous',
            'nextLink' => 'Next',
        ]);
    },
];
