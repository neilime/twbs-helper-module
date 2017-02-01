<?php

// Documentation test config file for "Content" part
return array(
    'title' => 'Content',
    'url' => 'https://v4-alpha.getbootstrap.com/content/',
    'tests' => array(
        'Typography' => include __DIR__ . DIRECTORY_SEPARATOR . 'Content/Typography.php',
        'Tables' => include __DIR__ . DIRECTORY_SEPARATOR . 'Content/Tables.php',
    ),
);
