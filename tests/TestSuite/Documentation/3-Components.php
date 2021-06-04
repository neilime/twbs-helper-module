<?php

// Documentation test config file for "Components" part
return [
    'title' => 'Components',
    'url' => '%bootstrap-url%/components/',
    'tests' => [
        'Alerts'      => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Alerts.php',
        'Badges'      => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Badges.php',
        'Breadcrumb'  => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Breadcrumb.php',
        'Buttons'     => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Buttons.php',
        'ButtonGroup' => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/ButtonGroup.php',
        'Card'        => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Card.php',
        'Carousel'    => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Carousel.php',
        'Dropdowns'   => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Dropdowns.php',
        'InputGroup'  => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/InputGroup.php',
        'Jumbotron'   => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Jumbotron.php',
        'ListGroup'   => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/ListGroup.php',
        'MediaObject' => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/MediaObject.php',
        'Modal'       => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Modal.php',
        'Navs'        => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Navs.php',
        'Navbar'      => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Navbar.php',
        'Pagination'  => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Pagination.php',
        'Popovers'    => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Popovers.php',
        'Progress'    => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Progress.php',
        'Spinners'    => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Spinners.php',
        'Toasts'      => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Toasts.php',
        'Tooltips'    => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Tooltips.php',
    ],
];
