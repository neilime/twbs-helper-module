<?php

// Documentation test config file for "Components / List group" part
return [
    'title' => 'List group',
    'url' => '%bootstrap-url%/components/list-group/',
    'tests' => [
        include __DIR__ . '/ListGroup/BasicExample.php',
        include __DIR__ . '/ListGroup/ActiveItems.php',
        include __DIR__ . '/ListGroup/DisabledItems.php',
        include __DIR__ . '/ListGroup/LinksAndButtons.php',
        include __DIR__ . '/ListGroup/Flush.php',
        include __DIR__ . '/ListGroup/Numbered.php',
        include __DIR__ . '/ListGroup/Horizontal.php',
        include __DIR__ . '/ListGroup/ContextualClasses.php',
        include __DIR__ . '/ListGroup/WithBadges.php',
        include __DIR__ . '/ListGroup/CustomContent.php',
        include __DIR__ . '/ListGroup/CheckboxesAndRadios.php',
    ],
];
