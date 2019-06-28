<?php

// Documentation test config file for "Content / Images" part
return array(
    'title' => 'Images',
    'url' => 'https://getbootstrap.com/content/images/',
    'tests' => array(
        array(
            'title' => 'Responsive images',
            'url' => 'https://getbootstrap.com/content/images/#responsive-images',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->image('images/demo-sample.svg', array('fluid' => true, 'alt' => 'Responsive image',));
            },
            'expected' => '<img alt="Responsive&#x20;image" class="img-fluid" src="images&#x2F;demo-sample.svg"/>',
        ),
        array(
            'title' => 'Image thumbnails',
            'url' => 'https://getbootstrap.com/content/images/#image-thumbnails',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->image('images/demo-sample.svg', array('thumbnail' => true, 'alt' => 'Image thumbnail',));
            },
            'expected' => '<img alt="Image&#x20;thumbnail" class="img-thumbnail" src="images&#x2F;demo-sample.svg"/>',
        ),
        array(
            'title' => 'Aligning images',
            'url' => 'https://getbootstrap.com/content/images/#aligning-images',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->image('images/demo-sample.svg', array('rounded' => true, 'alt' => 'Image aligned left', 'class' => 'float-left'))  . PHP_EOL;
                echo $oView->image('images/demo-sample.svg', array('rounded' => true, 'alt' => 'Image aligned right', 'class' => 'float-right')) . PHP_EOL;
                echo $oView->image('images/demo-sample.svg', array('rounded' => true, 'alt' => 'Image aligned block', 'class' => 'mx-auto d-block'));
            },
            'expected' =>
            '<img alt="Image&#x20;aligned&#x20;left" class="float-left&#x20;rounded" src="images&#x2F;demo-sample.svg"/>'  . PHP_EOL .
                '<img alt="Image&#x20;aligned&#x20;right" class="float-right&#x20;rounded" src="images&#x2F;demo-sample.svg"/>' . PHP_EOL .
                '<img alt="Image&#x20;aligned&#x20;block" class="d-block&#x20;mx-auto&#x20;rounded" src="images&#x2F;demo-sample.svg"/>',
        ),
        array(
            'title' => 'Picture',
            'url' => 'https://getbootstrap.com/content/images/#picture',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->image('images/demo-sample.svg', array(
                    'thumbnail' => true,
                    'fluid' => true,
                    'alt' => 'Picture image',
                    'sources' => ['images/demo-sample.svg' => 'image/svg+xml'], 
                ));
            },
            'expected' =>
            '<picture>'.PHP_EOL.
            '    <source srcset="images&#x2F;demo-sample.svg" type="image&#x2F;svg&#x2B;xml"/>'. PHP_EOL.
            '    <img alt="Picture&#x20;image" class="img-fluid&#x20;img-thumbnail" src="images&#x2F;demo-sample.svg"/>'. PHP_EOL.
            '</picture>',
        ),
    ),
);
