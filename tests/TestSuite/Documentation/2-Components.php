<?php

// Documentation test config file for "Components" part
return array(
    'title' => 'Components',
    'url' => 'https://v4-alpha.getbootstrap.com/components/',
    'tests' => array(
        'Alerts' => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Alerts.php',
        'Badges' => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Badges.php',
    ),
);
