<?php

// Documentation test config file for "Content / Figures" part
return array(
    'title' => 'Figures',
    'url' => 'https://getbootstrap.com/content/figures/',
    'tests' => array(
        array(
            'title' => 'Basic',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->figure(
                    'images/demo-sample.svg',
                    'A caption for the above image.',
                    array(),
                    array('fluid' => true, 'rounded' => true, 'alt' => 'A generic square placeholder image with rounded corners in a figure.',)
                );
            },
            'expected' => '<figure class="figure">' . PHP_EOL .
                '    <img alt="A&#x20;generic&#x20;square&#x20;placeholder&#x20;image&#x20;with&#x20;rounded&#x20;corners&#x20;in&#x20;a&#x20;figure." class="img-fluid&#x20;rounded&#x20;figure-img" src="images&#x2F;demo-sample.svg"/>' . PHP_EOL .
                '    <figcaption class="figure-caption">A caption for the above image.</figcaption>' . PHP_EOL .
                '</figure>',
        ),
        array(
            'title' => 'Aligning figure\'s caption',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->figure(
                    'images/demo-sample.svg',
                    'A caption for the above image.',
                    array(),
                    array(
                        'fluid' => true, 'rounded' => true, 'alt' => 'A generic square placeholder image with rounded corners in a figure.',
                    ),
                    array('class' => 'text-right')
                );
            },
            'expected' => '<figure class="figure">' . PHP_EOL .
                '    <img alt="A&#x20;generic&#x20;square&#x20;placeholder&#x20;image&#x20;with&#x20;rounded&#x20;corners&#x20;in&#x20;a&#x20;figure." class="img-fluid&#x20;rounded&#x20;figure-img" src="images&#x2F;demo-sample.svg"/>' . PHP_EOL .
                '    <figcaption class="text-right&#x20;figure-caption">A caption for the above image.</figcaption>' . PHP_EOL .
                '</figure>',
        ),
    ),
);
