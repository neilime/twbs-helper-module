<?php

// Documentation test config file for "Components / Pagination / Disabled and active states" part
return [
    'title' => 'Disabled and active states',
    'url' => '%bootstrap-url%/components/pagination/#disabled-and-active-states',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        // Create a paginator with 4 pages
        $paginator = new \Laminas\Paginator\Paginator(new \Laminas\Paginator\Adapter\ArrayAdapter(array_fill(
            0,
            30,
            true
        )));
        $paginator->setCurrentPageNumber(2);

        echo $view->paginationControl($paginator, null, null, [
            'attributes' => ['aria-label' => '...'],
            'disabledStates' => true,
            'activeStates' => true,
            'previousLink' => 'Previous',
            'previous' => null,
            'nextLink' => 'Next',
        ]) . PHP_EOL;

        echo $view->paginationControl($paginator, null, null, [
            'attributes' => ['aria-label' => '...'],
            'disabledStates' => 'swap_out',
            'activeStates' => 'swap_out',
            'previousLink' => 'Previous',
            'previous' => null,
            'nextLink' => 'Next',
        ]);
    },
];
