<?php

// Documentation test config file for "Content / Tables" part
return array(
    'title' => 'Tables',
    'url' => 'https://v4-alpha.getbootstrap.com/content/tables/',
    'tests' => array(
        array(
            'title' => 'Examples',
            'url' => 'https://v4-alpha.getbootstrap.com/content/typography/#examples',
            'tests' => array(
                array(
                    'title' => 'Basic',
                    'rendering' => function(\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->table(array(
                            'head' => array('#', 'First Name', 'Last Name', 'Username'),
                            'body' => array(
                                array(array('data' => '1', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Mark', 'Otto', '@mdo'),
                                array(array('data' => '2', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Jacob', 'Thornton', '@fat'),
                                array(array('data' => '3', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Larry', 'the Bird', '@twitter'),
                            ),
                        ));
                    },
                    'expected' => '<table class="table">' . PHP_EOL .
                    '    <thead>' . PHP_EOL .
                    '        <tr>' . PHP_EOL .
                    '            <th>#</th>' . PHP_EOL .
                    '            <th>First Name</th>' . PHP_EOL .
                    '            <th>Last Name</th>' . PHP_EOL .
                    '            <th>Username</th>' . PHP_EOL .
                    '        </tr>' . PHP_EOL .
                    '    </thead>' . PHP_EOL .
                    '    <tbody>' . PHP_EOL .
                    '        <tr>' . PHP_EOL .
                    '            <th scope="row">1</th>' . PHP_EOL .
                    '            <td>Mark</td>' . PHP_EOL .
                    '            <td>Otto</td>' . PHP_EOL .
                    '            <td>@mdo</td>' . PHP_EOL .
                    '        </tr>' . PHP_EOL .
                    '        <tr>' . PHP_EOL .
                    '            <th scope="row">2</th>' . PHP_EOL .
                    '            <td>Jacob</td>' . PHP_EOL .
                    '            <td>Thornton</td>' . PHP_EOL .
                    '            <td>@fat</td>' . PHP_EOL .
                    '        </tr>' . PHP_EOL .
                    '        <tr>' . PHP_EOL .
                    '            <th scope="row">3</th>' . PHP_EOL .
                    '            <td>Larry</td>' . PHP_EOL .
                    '            <td>the Bird</td>' . PHP_EOL .
                    '            <td>@twitter</td>' . PHP_EOL .
                    '        </tr>' . PHP_EOL .
                    '    </tbody>' . PHP_EOL .
                    '</table>',
                ),
                array(
                    'title' => 'Invert the colors',
                    'rendering' => function(\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->table(array(
                            'head' => array('#', 'First Name', 'Last Name', 'Username'),
                            'body' => array(
                                array(array('data' => '1', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Mark', 'Otto', '@mdo'),
                                array(array('data' => '2', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Jacob', 'Thornton', '@fat'),
                                array(array('data' => '3', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Larry', 'the Bird', '@twitter'),
                            ),
                                ), array('class' => 'table-inverse'));
                    },
                    'expected' => '<table class="table-inverse&#x20;table">' . PHP_EOL .
                    '    <thead>' . PHP_EOL .
                    '        <tr>' . PHP_EOL .
                    '            <th>#</th>' . PHP_EOL .
                    '            <th>First Name</th>' . PHP_EOL .
                    '            <th>Last Name</th>' . PHP_EOL .
                    '            <th>Username</th>' . PHP_EOL .
                    '        </tr>' . PHP_EOL .
                    '    </thead>' . PHP_EOL .
                    '    <tbody>' . PHP_EOL .
                    '        <tr>' . PHP_EOL .
                    '            <th scope="row">1</th>' . PHP_EOL .
                    '            <td>Mark</td>' . PHP_EOL .
                    '            <td>Otto</td>' . PHP_EOL .
                    '            <td>@mdo</td>' . PHP_EOL .
                    '        </tr>' . PHP_EOL .
                    '        <tr>' . PHP_EOL .
                    '            <th scope="row">2</th>' . PHP_EOL .
                    '            <td>Jacob</td>' . PHP_EOL .
                    '            <td>Thornton</td>' . PHP_EOL .
                    '            <td>@fat</td>' . PHP_EOL .
                    '        </tr>' . PHP_EOL .
                    '        <tr>' . PHP_EOL .
                    '            <th scope="row">3</th>' . PHP_EOL .
                    '            <td>Larry</td>' . PHP_EOL .
                    '            <td>the Bird</td>' . PHP_EOL .
                    '            <td>@twitter</td>' . PHP_EOL .
                    '        </tr>' . PHP_EOL .
                    '    </tbody>' . PHP_EOL .
                    '</table>',
                ),
            ),
        ),
    ),
);
