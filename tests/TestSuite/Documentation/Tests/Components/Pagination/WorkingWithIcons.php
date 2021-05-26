<?php

// Documentation test config file for "Components / Pagination / Working with icons" part
return [
    'title' => 'Working with icons',
    'url' => '%bootstrap-url%/components/pagination/#working-with-icons',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        // Create a paginator with 4 pages
        $paginator = new \Laminas\Paginator\Paginator(new \Laminas\Paginator\Adapter\ArrayAdapter(array_fill(
            0,
            30,
            true
        )));

        echo $view->paginationControl($paginator, null, null, [
            'previousLink' => [
                'aria-label' => 'Previous',
                'icon' => '&laquo;',
            ],
            'nextLink' => [
                'aria-label' => 'Next',
                'icon' => '&raquo;',
            ],
            'attributes' => ['aria-label' => 'Page navigation example'],
        ]);
    },
];
