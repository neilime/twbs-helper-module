<?php

// Documentation test config file for "Content / Tables" part
return array(
    'title' => 'Tables',
    'url' => 'https://getbootstrap.com/content/tables/',
    'tests' => array(
        array(
            'title' => 'Examples',
            'url' => 'https://getbootstrap.com/content/tables/#examples',
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
                                ), array('class' => 'table-inverse')
                        );
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
        array(
            'title' => 'Table head options',
            'url' => 'https://getbootstrap.com/content/tables/#table-head-options',
            'rendering' => function(\Zend\View\Renderer\PhpRenderer $oView) {
// First table (head inversed)
                echo $oView->table(array(
                    'head' => array(
                        'attributes' => array('class' => 'thead-inverse'),
                        'rows' => array('#', 'First Name', 'Last Name', 'Username'),
                    ),
                    'body' => array(
                        array(array('data' => '1', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Mark', 'Otto', '@mdo'),
                        array(array('data' => '2', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Jacob', 'Thornton', '@fat'),
                        array(array('data' => '3', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Larry', 'the Bird', '@twitter'),
                    ),
                ));

                echo PHP_EOL . PHP_EOL;

// Second table (head default)
                echo $oView->table(array(
                    'head' => array(
                        'attributes' => array('class' => 'thead-default'),
                        'rows' => array('#', 'First Name', 'Last Name', 'Username'),
                    ),
                    'body' => array(
                        array(array('data' => '1', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Mark', 'Otto', '@mdo'),
                        array(array('data' => '2', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Jacob', 'Thornton', '@fat'),
                        array(array('data' => '3', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Larry', 'the Bird', '@twitter'),
                    ),
                ));
            },
            'expected' => '<table class="table">' . PHP_EOL .
            '    <thead class="thead-inverse">' . PHP_EOL .
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
            '</table>' . PHP_EOL . PHP_EOL .
            '<table class="table">' . PHP_EOL .
            '    <thead class="thead-default">' . PHP_EOL .
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
            'title' => 'Striped rows',
            'url' => 'https://getbootstrap.com/content/tables/#striped-rows',
            'rendering' => function(\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->table(array(
                    'head' => array('#', 'First Name', 'Last Name', 'Username'),
                    'body' => array(
                        array(array('data' => '1', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Mark', 'Otto', '@mdo'),
                        array(array('data' => '2', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Jacob', 'Thornton', '@fat'),
                        array(array('data' => '3', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Larry', 'the Bird', '@twitter'),
                    ),
                        ), array('class' => 'table-striped')
                );
            },
            'expected' => '<table class="table-striped&#x20;table">' . PHP_EOL .
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
            'title' => 'Bordered table',
            'url' => 'https://getbootstrap.com/content/tables/#bordered-table',
            'rendering' => function(\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->table(array(
                    'head' => array('#', 'First Name', 'Last Name', 'Username'),
                    'body' => array(
                        array(array('data' => '1', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Mark', 'Otto', '@mdo'),
                        array(array('data' => '2', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Jacob', 'Thornton', '@fat'),
                        array(array('data' => '3', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Larry', 'the Bird', '@twitter'),
                    ),
                        ), array('class' => 'table-bordered')
                );
            },
            'expected' => '<table class="table-bordered&#x20;table">' . PHP_EOL .
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
            'title' => 'Hoverable rows',
            'url' => 'https://getbootstrap.com/content/tables/#hoverable-rows',
            'rendering' => function(\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->table(array(
                    'head' => array('#', 'First Name', 'Last Name', 'Username'),
                    'body' => array(
                        array(array('data' => '1', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Mark', 'Otto', '@mdo'),
                        array(array('data' => '2', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Jacob', 'Thornton', '@fat'),
                        array(array('data' => '3', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Larry', 'the Bird', '@twitter'),
                    ),
                        ), array('class' => 'table-hover')
                );
            },
            'expected' => '<table class="table-hover&#x20;table">' . PHP_EOL .
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
            'title' => 'Small Table',
            'url' => 'https://getbootstrap.com/content/tables/#small-table',
            'rendering' => function(\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->table(array(
                    'head' => array('#', 'First Name', 'Last Name', 'Username'),
                    'body' => array(
                        array(array('data' => '1', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Mark', 'Otto', '@mdo'),
                        array(array('data' => '2', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Jacob', 'Thornton', '@fat'),
                        array(array('data' => '3', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Larry', 'the Bird', '@twitter'),
                    ),
                        ), array('class' => 'table-sm')
                );
            },
            'expected' => '<table class="table-sm&#x20;table">' . PHP_EOL .
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
            'title' => 'Contextual classes',
            'url' => 'https://getbootstrap.com/content/tables/#contextual-classes',
            'rendering' => function(\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->table(array(
                    'head' => array('#', 'Column heading', 'Column heading', 'Column heading'),
                    'body' => array(
                        array(
                            'attributes' => array('class' => 'table-active'),
                            'cells' => array(array('data' => '1', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Column content', 'Column content', 'Column content')
                        ),
                        array(array('data' => '2', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Column content', 'Column content', 'Column content'),
                        array(
                            'attributes' => array('class' => 'table-success'),
                            'cells' => array(array('data' => '3', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Column content', 'Column content', 'Column content')
                        ),
                        array(array('data' => '4', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Column content', 'Column content', 'Column content'),
                        array(
                            'attributes' => array('class' => 'table-info'),
                            'cells' => array(array('data' => '5', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Column content', 'Column content', 'Column content')
                        ),
                        array(array('data' => '6', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Column content', 'Column content', 'Column content'),
                        array(
                            'attributes' => array('class' => 'table-warning'),
                            'cells' => array(array('data' => '7', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Column content', 'Column content', 'Column content')
                        ),
                        array(array('data' => '8', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Column content', 'Column content', 'Column content'),
                        array(
                            'attributes' => array('class' => 'table-danger'),
                            'cells' => array(array('data' => '9', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Column content', 'Column content', 'Column content')
                        ),
                    ),
                ));
            },
            'expected' => '<table class="table">' . PHP_EOL .
            '    <thead>' . PHP_EOL .
            '        <tr>' . PHP_EOL .
            '            <th>#</th>' . PHP_EOL .
            '            <th>Column heading</th>' . PHP_EOL .
            '            <th>Column heading</th>' . PHP_EOL .
            '            <th>Column heading</th>' . PHP_EOL .
            '        </tr>' . PHP_EOL .
            '    </thead>' . PHP_EOL .
            '    <tbody>' . PHP_EOL .
            '        <tr class="table-active">' . PHP_EOL .
            '            <th scope="row">1</th>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '        </tr>' . PHP_EOL .
            '        <tr>' . PHP_EOL .
            '            <th scope="row">2</th>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '        </tr>' . PHP_EOL .
            '        <tr class="table-success">' . PHP_EOL .
            '            <th scope="row">3</th>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '        </tr>' . PHP_EOL .
            '        <tr>' . PHP_EOL .
            '            <th scope="row">4</th>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '        </tr>' . PHP_EOL .
            '        <tr class="table-info">' . PHP_EOL .
            '            <th scope="row">5</th>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '        </tr>' . PHP_EOL .
            '        <tr>' . PHP_EOL .
            '            <th scope="row">6</th>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '        </tr>' . PHP_EOL .
            '        <tr class="table-warning">' . PHP_EOL .
            '            <th scope="row">7</th>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '        </tr>' . PHP_EOL .
            '        <tr>' . PHP_EOL .
            '            <th scope="row">8</th>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '        </tr>' . PHP_EOL .
            '        <tr class="table-danger">' . PHP_EOL .
            '            <th scope="row">9</th>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '            <td>Column content</td>' . PHP_EOL .
            '        </tr>' . PHP_EOL .
            '    </tbody>' . PHP_EOL .
            '</table>',
        ),
        array(
            'title' => 'Responsive classes',
            'url' => 'https://getbootstrap.com/content/tables/#responsive-tables',
            'rendering' => function(\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->table(array(
                    'head' => array('#', 'Table heading', 'Table heading', 'Table heading', 'Table heading', 'Table heading', 'Table heading'),
                    'body' => array(
                        array(array('data' => '1', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Table cell', 'Table cell', 'Table cell', 'Table cell', 'Table cell', 'Table cell'),
                        array(array('data' => '2', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Table cell', 'Table cell', 'Table cell', 'Table cell', 'Table cell', 'Table cell'),
                        array(array('data' => '3', 'type' => 'th', 'attributes' => array('scope' => 'row')), 'Table cell', 'Table cell', 'Table cell', 'Table cell', 'Table cell', 'Table cell'),
                    ),
                        ), array('class' => 'table-responsive'));
            },
            'expected' => '<table class="table-responsive&#x20;table">' . PHP_EOL .
            '    <thead>' . PHP_EOL .
            '        <tr>' . PHP_EOL .
            '            <th>#</th>' . PHP_EOL .
            '            <th>Table heading</th>' . PHP_EOL .
            '            <th>Table heading</th>' . PHP_EOL .
            '            <th>Table heading</th>' . PHP_EOL .
            '            <th>Table heading</th>' . PHP_EOL .
            '            <th>Table heading</th>' . PHP_EOL .
            '            <th>Table heading</th>' . PHP_EOL .
            '        </tr>' . PHP_EOL .
            '    </thead>' . PHP_EOL .
            '    <tbody>' . PHP_EOL .
            '        <tr>' . PHP_EOL .
            '            <th scope="row">1</th>' . PHP_EOL .
            '            <td>Table cell</td>' . PHP_EOL .
            '            <td>Table cell</td>' . PHP_EOL .
            '            <td>Table cell</td>' . PHP_EOL .
            '            <td>Table cell</td>' . PHP_EOL .
            '            <td>Table cell</td>' . PHP_EOL .
            '            <td>Table cell</td>' . PHP_EOL .
            '        </tr>' . PHP_EOL .
            '        <tr>' . PHP_EOL .
            '            <th scope="row">2</th>' . PHP_EOL .
            '            <td>Table cell</td>' . PHP_EOL .
            '            <td>Table cell</td>' . PHP_EOL .
            '            <td>Table cell</td>' . PHP_EOL .
            '            <td>Table cell</td>' . PHP_EOL .
            '            <td>Table cell</td>' . PHP_EOL .
            '            <td>Table cell</td>' . PHP_EOL .
            '        </tr>' . PHP_EOL .
            '        <tr>' . PHP_EOL .
            '            <th scope="row">3</th>' . PHP_EOL .
            '            <td>Table cell</td>' . PHP_EOL .
            '            <td>Table cell</td>' . PHP_EOL .
            '            <td>Table cell</td>' . PHP_EOL .
            '            <td>Table cell</td>' . PHP_EOL .
            '            <td>Table cell</td>' . PHP_EOL .
            '            <td>Table cell</td>' . PHP_EOL .
            '        </tr>' . PHP_EOL .
            '    </tbody>' . PHP_EOL .
            '</table>',
        ),
    ),
);
