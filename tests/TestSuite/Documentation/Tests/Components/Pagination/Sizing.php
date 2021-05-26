<?php

// Documentation test config file for "Components / Pagination / Sizing" part
return [
    'title' => 'Sizing',
    'url' => '%bootstrap-url%/components/pagination/#sizing',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        // Create a paginator with 4 pages
        $paginator = new \Laminas\Paginator\Paginator(new \Laminas\Paginator\Adapter\ArrayAdapter(array_fill(
            0,
            30,
            true
        )));

        echo $view->paginationControl($paginator, null, null, [
            'size' => 'lg',
            'attributes' => ['aria-label' => '...'],
            'activeStates' => 'swap_out',
        ]) . PHP_EOL;

        echo $view->paginationControl($paginator, null, null, [
            'size' => 'sm',
            'attributes' => ['aria-label' => '...'],
            'activeStates' => 'swap_out',
        ]);
    },
];
