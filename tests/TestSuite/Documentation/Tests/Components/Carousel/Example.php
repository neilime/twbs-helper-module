<?php

// Documentation test config file for "Components / Carousel / Example" part

return  [
    'title' => 'Example',
    'url' => '%bootstrap-url%/components/carousel/#example',
    'tests' => [
        include __DIR__ . '/Example/SlidesOnly.php',
        include __DIR__ . '/Example/WithControls.php',
        include __DIR__ . '/Example/WithIndicators.php',
        include __DIR__ . '/Example/WithCaptions.php',
        include __DIR__ . '/Example/Crossfade.php',
        include __DIR__ . '/Example/IndividualCarouselItemInterval.php',
        include __DIR__ . '/Example/DisableTouchSwiping.php',
    ],
];
