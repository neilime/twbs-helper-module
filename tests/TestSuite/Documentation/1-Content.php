<?php

// Documentation test config file for "Content" part
return array(
    'title' => 'Content',
    'url' => '%bootstrap-url%/content/',
    'tests' => array(
        'Typography' => include __DIR__ . DIRECTORY_SEPARATOR . 'Content/Typography.php',
        'Images' => include __DIR__ . DIRECTORY_SEPARATOR . 'Content/Images.php',
        'Tables' => include __DIR__ . DIRECTORY_SEPARATOR . 'Content/Tables.php',
        'Figures' => include __DIR__ . DIRECTORY_SEPARATOR . 'Content/Figures.php',
    ),
);
