<?php

// Documentation test config file for "Components / Pagination / Alignment" part
return [
    'title' => 'Alignment',
    'url' => '%bootstrap-url%/components/pagination/#alignment',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        // Create a paginator with 4 pages
        $paginator = new \Laminas\Paginator\Paginator(new \Laminas\Paginator\Adapter\ArrayAdapter(array_fill(
            0,
            30,
            true
        )));

        echo $view->paginationControl($paginator, null, null, [
            'disabledStates' => true,
            'alignment' => 'center',
            'previous' => null,
            'previousLink' => 'Previous',
            'nextLink' => 'Next',
            'attributes' => ['aria-label' => 'Page navigation example'],
        ]) . PHP_EOL;

        echo $view->paginationControl($paginator, null, null, [
            'disabledStates' => true,
            'alignment' => 'end',
            'previous' => null,
            'previousLink' => 'Previous',
            'nextLink' => 'Next',
            'attributes' => ['aria-label' => 'Page navigation example'],
        ]);
    },
];
