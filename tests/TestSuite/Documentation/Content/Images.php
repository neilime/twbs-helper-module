<?php

// Documentation test config file for "Content / Images" part
return array(
    'title' => 'Figures',
    'url' => 'https://getbootstrap.com/content/images/',
    'tests' => array(
        array(
            'title' => 'Responsive images',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->image('images/demo-sample.svg', array('fluid' => true, 'alt' => 'Responsive image',));
            },
            'expected' => '<img alt="Responsive&#x20;image" class="img-fluid" src="images&#x2F;demo-sample.svg"/>',
        ),
        array(
            'title' => 'Image thumbnails',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->image('images/demo-sample.svg', array('thumbnail' => true, 'alt' => 'Image thumbnail',));
            },
            'expected' => '<img alt="Image&#x20;thumbnail" class="img-thumbnail" src="images&#x2F;demo-sample.svg"/>',
        ),
        array(
            'title' => 'Aligning images',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->image('images/demo-sample.svg', array('rounded' => true, 'alt' => 'Image aligned left', 'class' => 'float-left'))  . PHP_EOL;
                echo $oView->image('images/demo-sample.svg', array('rounded' => true, 'alt' => 'Image aligned right', 'class' => 'float-right')) . PHP_EOL;
                echo $oView->image('images/demo-sample.svg', array('rounded' => true, 'alt' => 'Image aligned block', 'class' => 'mx-auto d-block'));
            },
            'expected' =>
            '<img alt="Image&#x20;aligned&#x20;left" class="rounded&#x20;float-left" src="images&#x2F;demo-sample.svg"/>'  . PHP_EOL .
                '<img alt="Image&#x20;aligned&#x20;right" class="rounded&#x20;float-right" src="images&#x2F;demo-sample.svg"/>' . PHP_EOL .
                '<img alt="Image&#x20;aligned&#x20;block" class="rounded&#x20;mx-auto&#x20;d-block" src="images&#x2F;demo-sample.svg"/>',
        ),
    ),
);
