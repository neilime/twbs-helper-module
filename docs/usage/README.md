# Usage

## Introduction

The following docs page shows how to render Twitter Boostrap elements. For each elements, you can see how to do it in "Source" tabs. These are supposed to be run into a view file.

## Rendering

### Content
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/)
#### Typography
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/typography/)
##### Lead
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/typography/#lead)
<!-- tabs:start -->

###### **Result**

<p class="lead">This is a lead paragraph. It stands out from regular paragraphs.</p>

###### **Source**

```php
echo $this->lead('This is a lead paragraph. It stands out from regular paragraphs.');
```

<!-- tabs:end -->


##### Abbreviations
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/typography/#abbreviations)
<!-- tabs:start -->

###### **Result**

<p><abbr title="attribute">attr</abbr></p>
<p><abbr class="initialism" title="HyperText&#x20;Markup&#x20;Language">HTML</abbr></p>

###### **Source**

```php
// First abbreviation
echo '<p>' . $this->abbreviation('attr', 'attribute') . '</p>';

echo PHP_EOL;

// Second abbreviation
echo '<p>' . $this->abbreviation('HTML', 'HyperText Markup Language', true) . '</p>';
```

<!-- tabs:end -->


##### Blockquotes
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/typography/#blockquotes)
<!-- tabs:start -->

###### **Result**

<blockquote class="blockquote">
    <p>A well-known quote, contained in a blockquote element.</p>
</blockquote>

###### **Source**

```php
echo $this->blockquote(
    'A well-known quote, contained in a blockquote element.'
);
```

<!-- tabs:end -->


###### Naming a source
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/typography/#naming-a-source)
<!-- tabs:start -->

####### **Result**

<figure>
    <blockquote class="blockquote">
        <p>A well-known quote, contained in a blockquote element.</p>
    </blockquote>
    <figcaption class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></figcaption>
</figure>

####### **Source**

```php
echo $this->blockquote(
    // Content
    'A well-known quote, contained in a blockquote element.',
    // Footer content
    'Someone famous in <cite title="Source Title">Source Title</cite>'
);
```

<!-- tabs:end -->


###### Alignment
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/typography/#alignment)
<!-- tabs:start -->

####### **Result**

<figure class="text-center">
    <blockquote class="blockquote">
        <p>A well-known quote, contained in a blockquote element.</p>
    </blockquote>
    <figcaption class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></figcaption>
</figure>
<figure class="text-end">
    <blockquote class="blockquote">
        <p>A well-known quote, contained in a blockquote element.</p>
    </blockquote>
    <figcaption class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></figcaption>
</figure>

####### **Source**

```php
// Center
echo $this->blockquote(
    // Content
    'A well-known quote, contained in a blockquote element.',
    // Footer content
    'Someone famous in <cite title="Source Title">Source Title</cite>',
    [],
    [],
    [],
    // Class for figure wrapper
["class" => "text-center"]
);

echo PHP_EOL;

// Right
echo $this->blockquote(
    // Content
    'A well-known quote, contained in a blockquote element.',
    // Footer content
    'Someone famous in <cite title="Source Title">Source Title</cite>',
    [],
    [],
    [],
    // Class for figure wrapper
['class' => 'text-end']
);
```

<!-- tabs:end -->


##### List
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/typography/#lists)
###### Unstyled
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/typography/#unstyled)
<!-- tabs:start -->

####### **Result**

<ul class="list-unstyled">
    <li>This is a list.</li>
    <li>It appears completely unstyled.</li>
    <li>Structurally, it&amp;#039;s still a list.</li>
    <li>However, this style only applies to immediate child elements.</li>
    <li>
        Nested lists:
        <ul class="list-unstyled">
            <li>are unaffected by this style</li>
            <li>will still show a bullet</li>
            <li>and have appropriate left margin</li>
        </ul>
    </li>
    <li>This may still come in handy in some situations.</li>
</ul>

####### **Source**

```php
echo $this->htmlList(
    // List items
    [
        'This is a list.',
        'It appears completely unstyled.',
        'Structurally, it\'s still a list.',
        'However, this style only applies to immediate child elements.',
        'Nested lists:' => [
            'are unaffected by this style',
            'will still show a bullet',
            'and have appropriate left margin',
        ],
        'This may still come in handy in some situations.',
    ],
    // Add "list-unstyled" class
['class' => 'list-unstyled']
);
```

<!-- tabs:end -->


###### Inline
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/typography/#inline)
<!-- tabs:start -->

####### **Result**

<ul class="list-inline">
    <li class="list-inline-item">This is a list item.</li>
    <li class="list-inline-item">And another one.</li>
    <li class="list-inline-item">But they&amp;#039;re displayed inline.</li>
</ul>

####### **Source**

```php
echo $this->htmlList(
    // List items
    ['This is a list item.', 'And another one.', 'But they\'re displayed inline.'],
    // Set "inline" flag
['inline' => true]
);
```

<!-- tabs:end -->


###### Description list alignment
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/typography/#description-list-alignment)
<!-- tabs:start -->

####### **Result**

<dl class="row">
    <dt class="col-sm-3">Description lists</dt>
    <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
    <dt class="col-sm-3">Term</dt>
    <dd class="col-sm-9">
        <p>Definition for the term.</p>
        <p>And some more placeholder definition text.</p>
    </dd>
    <dt class="col-sm-3">Another term</dt>
    <dd class="col-sm-9">This definition is short, so no extra paragraphs or anything.</dd>
    <dt class="col-sm-3&#x20;text-truncate">Truncated term is truncated</dt>
    <dd class="col-sm-9">This can be useful when space is tight. Adds an ellipsis at the end.</dd>
    <dt class="col-sm-3">Nesting</dt>
    <dd class="col-sm-9">
        <dl class="row">
            <dt class="col-sm-4">Nested definition list</dt>
            <dd class="col-sm-8">I heard you like definition lists. Let me put a definition list inside your definition list.</dd>
        </dl>
    </dd>
</dl>

####### **Source**

```php
echo $this->descriptionList(
    [
        'Description lists' => 'A description list is perfect for defining terms.',
        'Term' => '<p>Definition for the term.</p>' . PHP_EOL .
        '<p>And some more placeholder definition text.</p>',
        'Another term' => 'This definition is short, so no extra paragraphs or anything.',
        'Truncated term is truncated' => [
            'term' => [
                'class' => 'text-truncate'
            ],
            'detail' => 'This can be useful when space is tight. Adds an ellipsis at the end.',
        ],
        'Nesting' => [
            'detail' => [
                'data' => [
                    'Nested definition list' => [
                        'term' => [
                            'column' => 'sm-4'
                        ],
                        'detail' => [
                            'data' => 'I heard you like definition lists. ' .
                            'Let me put a definition list inside your definition list.',
                            'column' => 'sm-8'
                        ]
                    ]
                ],
            ]
        ],
    ],
);
```

<!-- tabs:end -->


#### Images
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/images/)
##### Responsive images
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/images/#responsive-images)
<!-- tabs:start -->

###### **Result**

<img alt="..." class="img-fluid" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;responsive.svg" />

###### **Source**

```php
echo $this->image('/twbs-helper-module/img/docs/responsive.svg', ['fluid' => true, 'alt' => '...',]);
```

<!-- tabs:end -->


##### Image thumbnails
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/images/#image-thumbnails)
<!-- tabs:start -->

###### **Result**

<img alt="..." class="img-thumbnail" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;200x200.svg" />

###### **Source**

```php
echo $this->image('/twbs-helper-module/img/docs/200x200.svg', ['thumbnail' => true, 'alt' => '...',]);
```

<!-- tabs:end -->


##### Aligning images
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/images/#aligning-images)
<!-- tabs:start -->

###### **Result**

<img alt="..." class="float-start&#x20;rounded" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;200x200.svg" />
<img alt="..." class="float-end&#x20;rounded" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;200x200.svg" />
<img alt="..." class="d-block&#x20;mx-auto&#x20;rounded" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;200x200.svg" />

###### **Source**

```php
echo $this->image(
    '/twbs-helper-module/img/docs/200x200.svg',
['rounded' => true, 'alt' => '...', 'class' => 'float-start']
)  . PHP_EOL;

echo $this->image(
    '/twbs-helper-module/img/docs/200x200.svg',
['rounded' => true, 'alt' => '...', 'class' => 'float-end']
) . PHP_EOL;

echo $this->image(
    '/twbs-helper-module/img/docs/200x200.svg',
['rounded' => true, 'alt' => '...', 'class' => 'mx-auto d-block']
);
```

<!-- tabs:end -->


##### Picture
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/images/#picture)
<!-- tabs:start -->

###### **Result**

<picture>
    <source srcset="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;200x200.svg" type="image&#x2F;svg&#x2B;xml" />
    <img alt="..." class="img-fluid&#x20;img-thumbnail" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;200x200.svg" />
</picture>

###### **Source**

```php
echo $this->image('/twbs-helper-module/img/docs/200x200.svg', [
    'thumbnail' => true,
    'fluid' => true,
    'alt' => '...',
    'sources' => ['/twbs-helper-module/img/docs/200x200.svg' => 'image/svg+xml'],
]);
```

<!-- tabs:end -->


#### Tables
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/tables/)
##### Overview
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/tables/#overview)
<!-- tabs:start -->

###### **Result**

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>

###### **Source**

```php
echo $this->table([
    'head' => ['#', 'First', 'Last', 'Handle'],
    'body' => [
        ['1', 'Mark', 'Otto', '@mdo'],
        ['2', 'Jacob', 'Thornton', '@fat'],
        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
    ],
]);
```

<!-- tabs:end -->


##### Variants
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/tables/#variants)
<!-- tabs:start -->

###### **Result**

<table class="table">
    <thead>
        <tr>
            <th scope="col">Class</th>
            <th scope="col">Heading</th>
            <th scope="col">Heading</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">Default</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr class="table-primary">
            <th scope="row">Primary</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr class="table-secondary">
            <th scope="row">Secondary</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr class="table-success">
            <th scope="row">Success</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr class="table-danger">
            <th scope="row">Danger</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr class="table-warning">
            <th scope="row">Warning</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr class="table-info">
            <th scope="row">Info</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr class="table-light">
            <th scope="row">Light</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr class="table-dark">
            <th scope="row">Dark</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
    </tbody>
</table>

###### **Source**

```php
// Use "variant" option to color tables, table rows or individual cells.
echo $this->table([
    'head' => ['Class', 'Heading', 'Heading'],
    'body' => [
        ['Default', 'Cell', 'Cell'],
        [
            'variant' => 'primary',
            'cells' => ['Primary', 'Cell', 'Cell'],
        ],
        [
            'variant' => 'secondary',
            'cells' => ['Secondary', 'Cell', 'Cell'],
        ],
        [
            'variant' => 'success',
            'cells' => ['Success', 'Cell', 'Cell'],
        ],
        [
            'variant' => 'danger',
            'cells' => ['Danger', 'Cell', 'Cell'],
        ],
        [
            'variant' => 'warning',
            'cells' => ['Warning', 'Cell', 'Cell'],
        ],
        [
            'variant' => 'info',
            'cells' => ['Info', 'Cell', 'Cell'],
        ],
        [
            'variant' => 'light',
            'cells' => ['Light', 'Cell', 'Cell'],
        ],
        [
            'variant' => 'dark',
            'cells' => ['Dark', 'Cell', 'Cell'],
        ],
    ],
]);
```

<!-- tabs:end -->


##### Accented tables
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/tables/#accented-tables)
###### Striped rows
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/tables/#striped-rows)
<!-- tabs:start -->

####### **Result**

<table class="table&#x20;table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>
<br/>
<table class="table&#x20;table-dark&#x20;table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>
<br/>
<table class="table&#x20;table-striped&#x20;table-success">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>

####### **Source**

```php
// Use "striped" option to add zebra-striping to any table row within the <tbody>.
echo $this->table([
    'striped' => true,
    'head' => ['#', 'First', 'Last', 'Handle'],
    'body' => [
        ['1', 'Mark', 'Otto', '@mdo'],
        ['2', 'Jacob', 'Thornton', '@fat'],
        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
    ],
]);

echo PHP_EOL . '<br/>' . PHP_EOL;

// This option can also be added to table variants

echo $this->table([
    'striped' => true,
    'variant' => 'dark',
    'head' => ['#', 'First', 'Last', 'Handle'],
    'body' => [
        ['1', 'Mark', 'Otto', '@mdo'],
        ['2', 'Jacob', 'Thornton', '@fat'],
        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
    ],
]);

echo PHP_EOL . '<br/>' . PHP_EOL;

echo $this->table([
    'striped' => true,
    'variant' => 'success',
    'head' => ['#', 'First', 'Last', 'Handle'],
    'body' => [
        ['1', 'Mark', 'Otto', '@mdo'],
        ['2', 'Jacob', 'Thornton', '@fat'],
        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
    ],
]);
```

<!-- tabs:end -->


###### Hoverable rows
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/tables/#hoverable-rows)
<!-- tabs:start -->

####### **Result**

<table class="table&#x20;table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>
<br/>
<table class="table&#x20;table-dark&#x20;table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>
<br/>
<table class="table&#x20;table-hover&#x20;table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>

####### **Source**

```php
// Use "hover" option to add zebra-striping to any table row within the <tbody>.
echo $this->table([
    'hover' => true,
    'head' => ['#', 'First', 'Last', 'Handle'],
    'body' => [
        ['1', 'Mark', 'Otto', '@mdo'],
        ['2', 'Jacob', 'Thornton', '@fat'],
        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
    ],
]);

echo PHP_EOL . '<br/>' . PHP_EOL;

echo $this->table([
    'variant' => 'dark',
    'hover' => true,
    'head' => ['#', 'First', 'Last', 'Handle'],
    'body' => [
        ['1', 'Mark', 'Otto', '@mdo'],
        ['2', 'Jacob', 'Thornton', '@fat'],
        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
    ],
]);

echo PHP_EOL . '<br/>' . PHP_EOL;

// This option can also be combined with the striped option

echo $this->table([
    'hover' => true,
    'striped' => true,
    'head' => ['#', 'First', 'Last', 'Handle'],
    'body' => [
        ['1', 'Mark', 'Otto', '@mdo'],
        ['2', 'Jacob', 'Thornton', '@fat'],
        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
    ],
]);
```

<!-- tabs:end -->


###### Active tables
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/tables/#active-tables)
<!-- tabs:start -->

####### **Result**

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr class="table-active">
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td class="table-active" colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>

####### **Source**

```php
// Highlight a table row or cell by adding the "active" option.
echo $this->table([
    'head' => ['#', 'First', 'Last', 'Handle'],
    'body' => [
        ['active' => true, 'cells' => ['1', 'Mark', 'Otto', '@mdo']],
        ['2', 'Jacob', 'Thornton', '@fat'],
        [
            '3',
            ['data' => 'Larry the Bird', 'active' => true, 'attributes' => ['colspan' => 2]],
            '@twitter'
        ],
    ],
]);
```

<!-- tabs:end -->


##### Table borders
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/tables/#table-borders)
###### Bordered tables
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/tables/#bordered-tables)
<!-- tabs:start -->

####### **Result**

<table class="table&#x20;table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>
<br/>
<table class="border-primary&#x20;table&#x20;table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>

####### **Source**

```php
// Add "bordered" option for borders on all sides of the table and cells
echo $this->table([
    'bordered' => true,
    'head' => ['#', 'First', 'Last', 'Handle'],
    'body' => [
        ['1', 'Mark', 'Otto', '@mdo'],
        ['2', 'Jacob', 'Thornton', '@fat'],
        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
    ],
]);

echo PHP_EOL . '<br/>' . PHP_EOL;

// "bordered" option can be a variant to change colors
echo $this->table([
    'bordered' => 'primary',
    'head' => ['#', 'First', 'Last', 'Handle'],
    'body' => [
        ['1', 'Mark', 'Otto', '@mdo'],
        ['2', 'Jacob', 'Thornton', '@fat'],
        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
    ],
]);
```

<!-- tabs:end -->


###### Tables without borders
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/tables/#tables-without-borders)
<!-- tabs:start -->

####### **Result**

<table class="table&#x20;table-borderless">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>
<br/>
<table class="table&#x20;table-borderless&#x20;table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>

####### **Source**

```php
// Add "borderless" option for a table without borders
echo $this->table([
    'borderless' => true,
    'head' => ['#', 'First', 'Last', 'Handle'],
    'body' => [
        ['1', 'Mark', 'Otto', '@mdo'],
        ['2', 'Jacob', 'Thornton', '@fat'],
        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
    ],
]);

echo PHP_EOL . '<br/>' . PHP_EOL;

// This option can also be combined with the "variant" option
echo $this->table([
    'borderless' => true,
    'variant' => 'dark',
    'head' => ['#', 'First', 'Last', 'Handle'],
    'body' => [
        ['1', 'Mark', 'Otto', '@mdo'],
        ['2', 'Jacob', 'Thornton', '@fat'],
        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
    ],
]);
```

<!-- tabs:end -->


##### Small Tables
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/tables/#small-tables)
<!-- tabs:start -->

###### **Result**

<table class="table&#x20;table-sm">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>
<br/>
<table class="table&#x20;table-dark&#x20;table-sm">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>

###### **Source**

```php
// Add "size" option to make any table more compact by cutting all cell padding in half.
echo $this->table([
    'size' => 'sm',
    'head' => ['#', 'First', 'Last', 'Handle'],
    'body' => [
        ['1', 'Mark', 'Otto', '@mdo'],
        ['2', 'Jacob', 'Thornton', '@fat'],
        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
    ],
]);

echo PHP_EOL . '<br/>' . PHP_EOL;

// This option can also be combined with the "variant" option
echo $this->table([
    'size' => 'sm',
    'variant' => 'dark',
    'head' => ['#', 'First', 'Last', 'Handle'],
    'body' => [
        ['1', 'Mark', 'Otto', '@mdo'],
        ['2', 'Jacob', 'Thornton', '@fat'],
        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
    ],
]);
```

<!-- tabs:end -->


##### Vertical alignment
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/tables/#vertical-alignment)
<!-- tabs:start -->

###### **Result**

<div class="table-responsive">
    <table class="align-middle&#x20;table">
        <thead>
            <tr>
                <th class="w-25" scope="col">Heading 1</th>
                <th class="w-25" scope="col">Heading 2</th>
                <th class="w-25" scope="col">Heading 3</th>
                <th class="w-25" scope="col">Heading 4</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                <td>This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.</td>
            </tr>
            <tr class="align-bottom">
                <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
                <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
                <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
                <td>This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.</td>
            </tr>
            <tr>
                <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                <td class="align-top">This cell is aligned to the top.</td>
                <td>This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.</td>
            </tr>
        </tbody>
    </table>
</div>

###### **Source**

```php
// Use the align option to re-align where needed
echo $this->table([
    'responsive' => true,
    'align' => 'middle',
    'head' => [
        ['data' => 'Heading 1', 'attributes' => ['class' => 'w-25']],
        ['data' => 'Heading 2', 'attributes' => ['class' => 'w-25']],
        ['data' => 'Heading 3', 'attributes' => ['class' => 'w-25']],
        ['data' => 'Heading 4', 'attributes' => ['class' => 'w-25']],
    ],
    'body' => [
        [
            [
                'type' => \TwbsHelper\View\Helper\Table::TABLE_DATA,
                'attributes' => ['scope' => null],
                'data' => 'This cell inherits <code>vertical-align: middle;</code> from the table'
            ],
            'This cell inherits <code>vertical-align: middle;</code> from the table',
            'This cell inherits <code>vertical-align: middle;</code> from the table',
            'This here is some placeholder text, intended to take up quite a bit of vertical space, ' .
            'to demonstrate how the vertical alignment works in the preceding cells.'
        ],
        [
            'align' => 'bottom',
            [
                'type' => \TwbsHelper\View\Helper\Table::TABLE_DATA,
                'attributes' => ['scope' => null],
                'data' => 'This cell inherits <code>vertical-align: bottom;</code> from the table row'
            ],
            'This cell inherits <code>vertical-align: bottom;</code> from the table row',
            'This cell inherits <code>vertical-align: bottom;</code> from the table row',
            'This here is some placeholder text, intended to take up quite a bit of vertical space, ' .
            'to demonstrate how the vertical alignment works in the preceding cells.'
        ],
        [
            [
                'type' => \TwbsHelper\View\Helper\Table::TABLE_DATA,
                'attributes' => ['scope' => null],
                'data' => 'This cell inherits <code>vertical-align: middle;</code> from the table'
            ],
            'This cell inherits <code>vertical-align: middle;</code> from the table',
            [
                'align' => 'top',
                'data' => 'This cell is aligned to the top.',
            ],
            'This here is some placeholder text, intended to take up quite a bit of vertical space, ' .
            'to demonstrate how the vertical alignment works in the preceding cells.'
        ],
    ],
]);
```

<!-- tabs:end -->


##### Nesting
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/tables/#nesting)
<!-- tabs:start -->

###### **Result**

<table class="table&#x20;table-bordered&#x20;table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <td colspan="4">
                <table class="mb-0&#x20;table">
                    <thead>
                        <tr>
                            <th scope="col">Header</th>
                            <th scope="col">Header</th>
                            <th scope="col">Header</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">A</th>
                            <td>First</td>
                            <td>Last</td>
                        </tr>
                        <tr>
                            <th scope="row">B</th>
                            <td>First</td>
                            <td>Last</td>
                        </tr>
                        <tr>
                            <th scope="row">C</th>
                            <td>First</td>
                            <td>Last</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>

###### **Source**

```php
echo $this->table([
    'striped' => true,
    'bordered' => true,
    'head' => ['#', 'First', 'Last', 'Handle'],
    'body' => [
        ['1', 'Mark', 'Otto', '@mdo'],
        [[
            'data' => [
                'head' => ['Header', 'Header', 'Header'],
                'body' => [
                    ['A', 'First', 'Last'],
                    ['B', 'First', 'Last'],
                    ['C', 'First', 'Last'],
                ],
            ],
        'attributes' => ['colspan' => 4]
    ]],
    ['3', 'Larry', 'the Bird', '@twitter'],
],
]);
```

<!-- tabs:end -->


##### Anatomy
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/tables/#anatomy)
###### Table head
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/tables/#table-head)
<!-- tabs:start -->

####### **Result**

<table class="table">
    <thead class="table-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>
<br/>
<table class="table">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>

####### **Source**

```php
// Use the option "variant" to make <thead>s appear light or dark gray.
echo $this->table([
    'head' => [
        'variant' => 'light',
        'cells' => ['#', 'First', 'Last', 'Handle'],
    ],
    'body' => [
        ['1', 'Mark', 'Otto', '@mdo'],
        ['2', 'Jacob', 'Thornton', '@fat'],
        ['3', 'Larry', 'the Bird', '@twitter'],
    ],
]);

echo PHP_EOL . '<br/>' . PHP_EOL;

echo $this->table([
    'head' => [
        'variant' => 'dark',
        'cells' => ['#', 'First', 'Last', 'Handle'],
    ],
    'body' => [
        ['1', 'Mark', 'Otto', '@mdo'],
        ['2', 'Jacob', 'Thornton', '@fat'],
        ['3', 'Larry', 'the Bird', '@twitter'],
    ],
]);
```

<!-- tabs:end -->


###### Table foot
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/tables/#table-foot)
<!-- tabs:start -->

####### **Result**

<table class="table">
    <thead class="table-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td>Footer</td>
            <td>Footer</td>
            <td>Footer</td>
            <td>Footer</td>
        </tr>
    </tfoot>
</table>

####### **Source**

```php
echo $this->table([
    'head' => [
        'variant' => 'light',
        'cells' => ['#', 'First', 'Last', 'Handle'],
    ],
    'body' => [
        ['1', 'Mark', 'Otto', '@mdo'],
        ['2', 'Jacob', 'Thornton', '@fat'],
        ['3', 'Larry', 'the Bird', '@twitter'],
    ],
    'footer' => ['Footer', 'Footer', 'Footer', 'Footer'],
]);
```

<!-- tabs:end -->


###### Captions
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/tables/#captions)
<!-- tabs:start -->

####### **Result**

<table class="table">
    <caption>List of users</caption>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>
<br/>
<table class="caption-top&#x20;table">
    <caption>List of users</caption>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>

####### **Source**

```php
echo $this->table([
    'caption' => 'List of users',
    'head' => ['#', 'First', 'Last', 'Handle'],
    'body' => [
        ['1', 'Mark', 'Otto', '@mdo'],
        ['2', 'Jacob', 'Thornton', '@fat'],
        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
    ],
]);

echo PHP_EOL . '<br/>' . PHP_EOL;

// You can also put the <caption> on the top of the table with the "captionTop" option
echo $this->table([
    'captionTop' => 'List of users',
    'head' => ['#', 'First', 'Last', 'Handle'],
    'body' => [
        ['1', 'Mark', 'Otto', '@mdo'],
        ['2', 'Jacob', 'Thornton', '@fat'],
        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
    ],
]);
```

<!-- tabs:end -->


##### Responsive classes
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/tables/#responsive-tables)
###### Always responsive
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/tables/#always-responsive)
<!-- tabs:start -->

####### **Result**

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
        </tbody>
    </table>
</div>

####### **Source**

```php
echo $this->table([
    'responsive' => true,
    'head' => [
        '#', 'Heading', 'Heading', 'Heading', 'Heading',
        'Heading', 'Heading', 'Heading', 'Heading', 'Heading',
    ],
    'body' => [
        ['1', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell'],
        ['2', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell'],
        ['3', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell'],
    ],
]);
```

<!-- tabs:end -->


###### Breakpoint specific
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/tables/#breakpoint-specific)
<!-- tabs:start -->

####### **Result**

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
        </tbody>
    </table>
</div>
<br/>
<div class="table-responsive-sm">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
        </tbody>
    </table>
</div>
<br/>
<div class="table-responsive-md">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
        </tbody>
    </table>
</div>
<br/>
<div class="table-responsive-lg">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
        </tbody>
    </table>
</div>
<br/>
<div class="table-responsive-xl">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
        </tbody>
    </table>
</div>

####### **Source**

```php
foreach ([true, 'sm', 'md', 'lg', 'xl'] as $iKey => $sSize) {
    if ($iKey) {
        echo PHP_EOL . '<br/>' . PHP_EOL;
    }
    
    echo $this->table([
        'responsive' => $sSize,
        'head' => [
            '#', 'Heading', 'Heading', 'Heading', 'Heading',
            'Heading', 'Heading', 'Heading', 'Heading', 'Heading',
        ],
        'body' => [
            ['1', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell'],
            ['2', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell'],
            ['3', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell'],
        ],
    ]);
}
```

<!-- tabs:end -->


#### Figures
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/content/figures/)
##### Basic
<!-- tabs:start -->

###### **Result**

<figure class="figure">
    <img alt="..." class="figure-img&#x20;img-fluid&#x20;rounded" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />
    <figcaption class="figure-caption">A caption for the above image.</figcaption>
</figure>

###### **Source**

```php
echo $this->figure(
    '/twbs-helper-module/img/docs/400x300.svg',
    'A caption for the above image.',
    [],
    [
        'fluid' => true,
        'rounded' => true,
        'alt' => '...',
    ]
);
```

<!-- tabs:end -->


##### Aligning figure's caption
<!-- tabs:start -->

###### **Result**

<figure class="figure">
    <img alt="..." class="figure-img&#x20;img-fluid&#x20;rounded" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />
    <figcaption class="figure-caption&#x20;text-end">A caption for the above image.</figcaption>
</figure>

###### **Source**

```php
echo $this->figure(
    '/twbs-helper-module/img/docs/400x300.svg',
    'A caption for the above image.',
    [],
    [
        'fluid' => true,
        'rounded' => true,
        'alt' => '...',
    ],
['class' => 'text-end']
);
```

<!-- tabs:end -->


### Components
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/)
#### Alerts
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/alerts/)
##### Example
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/alerts/#examples)
<!-- tabs:start -->

###### **Result**

<div class="alert&#x20;alert-primary" role="alert">
    A simple primary alert—check it out!
</div>
<div class="alert&#x20;alert-secondary" role="alert">
    A simple secondary alert—check it out!
</div>
<div class="alert&#x20;alert-success" role="alert">
    A simple success alert—check it out!
</div>
<div class="alert&#x20;alert-danger" role="alert">
    A simple danger alert—check it out!
</div>
<div class="alert&#x20;alert-warning" role="alert">
    A simple warning alert—check it out!
</div>
<div class="alert&#x20;alert-info" role="alert">
    A simple info alert—check it out!
</div>
<div class="alert&#x20;alert-light" role="alert">
    A simple light alert—check it out!
</div>
<div class="alert&#x20;alert-dark" role="alert">
    A simple dark alert—check it out!
</div>


###### **Source**

```php
foreach (
    [
        'primary', 'secondary', 'success', 'danger',
        'warning', 'info', 'light', 'dark',
    ] as $sVariant
) {
    echo $this->alert(
        'A simple ' . $sVariant . ' alert—check it out!',
        $sVariant
    ) . PHP_EOL;
}
```

<!-- tabs:end -->


###### Link color
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/alerts/#link-color)
<!-- tabs:start -->

####### **Result**

<div class="alert&#x20;alert-primary" role="alert">
    A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert&#x20;alert-secondary" role="alert">
    A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert&#x20;alert-success" role="alert">
    A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert&#x20;alert-danger" role="alert">
    A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert&#x20;alert-warning" role="alert">
    A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert&#x20;alert-info" role="alert">
    A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert&#x20;alert-light" role="alert">
    A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert&#x20;alert-dark" role="alert">
    A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>


####### **Source**

```php
foreach (
    [
        'primary', 'secondary', 'success', 'danger',
        'warning', 'info', 'light', 'dark',
    ] as $sVariant
) {
    echo $this->alert(
        'A simple ' . $sVariant . ' alert with ' .
        '<a href="#" class="alert-link">an example link</a>. ' .
        'Give it a click if you like.',
        $sVariant
    ) . PHP_EOL;
}
```

<!-- tabs:end -->


###### Additional content
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/alerts/#additional-content)
<!-- tabs:start -->

####### **Result**

<div class="alert&#x20;alert-success" role="alert">
    <h4 class="alert-heading">Well done!</h4>
    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
    <hr/>
    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>

####### **Source**

```php
// Success
echo $this->alert(
    '<p>Aww yeah, you successfully read this important alert message. ' .
    'This example text is going to run a bit longer so that you can see ' .
    'how spacing within an alert works with this kind of content.</p>' . PHP_EOL .
    '<hr/>' . PHP_EOL .
    '<p class="mb-0">' .
    'Whenever you need to, be sure to use margin utilities to keep things nice and tidy.' .
    '</p>',
    [
        'heading' => 'Well done!',
        'variant' => 'success',
    ]
);
```

<!-- tabs:end -->


###### Dismissing
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/alerts/#dismissing)
<!-- tabs:start -->

####### **Result**

<div class="alert&#x20;alert-dismissible&#x20;alert-warning&#x20;fade&#x20;show" role="alert">
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    <button aria-label="Close" class="close" data-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
</div>

####### **Source**

```php
echo $this->alert(
    '<strong>Holy guacamole!</strong> You should check in on some of those fields below.',
    [
        'variant' => 'warning',
        'dismissible' => true,
    ]
);
```

<!-- tabs:end -->


#### Badges
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/badge/)
##### Example
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/badge/#example)
<!-- tabs:start -->

###### **Result**

<h1>Example heading <span class="badge&#x20;badge-secondary">New</span></h1>
<h2>Example heading <span class="badge&#x20;badge-secondary">New</span></h2>
<h3>Example heading <span class="badge&#x20;badge-secondary">New</span></h3>
<h4>Example heading <span class="badge&#x20;badge-secondary">New</span></h4>
<h5>Example heading <span class="badge&#x20;badge-secondary">New</span></h5>
<h6>Example heading <span class="badge&#x20;badge-secondary">New</span></h6>
<br/>
<button type="button" name="button" class="btn&#x20;btn-primary" value="">
    Profile <span class="badge&#x20;badge-light">9</span>
    <span class="sr-only">unread messages</span>
</button>

###### **Source**

```php
// H1
echo '<h1>Example heading ' . $this->badge('New') . '</h1>' . PHP_EOL;
// H2
echo '<h2>Example heading ' . $this->badge('New') . '</h2>' . PHP_EOL;
// H3
echo '<h3>Example heading ' . $this->badge('New') . '</h3>' . PHP_EOL;
// H4
echo '<h4>Example heading ' . $this->badge('New') . '</h4>' . PHP_EOL;
// H5
echo '<h5>Example heading ' . $this->badge('New') . '</h5>' . PHP_EOL;
// H6
echo '<h6>Example heading ' . $this->badge('New') . '</h6>';

echo PHP_EOL . '<br/>' . PHP_EOL;

// Button
echo $this->formButton([
    'options' => [
        'label' => 'Profile ' . $this->badge('9', 'light') . PHP_EOL .
        '<span class="sr-only">unread messages</span>',
        'variant' => 'primary',
    ],
]);
```

<!-- tabs:end -->


##### Contextual variations
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/badge/#contextual-variations)
<!-- tabs:start -->

###### **Result**

<span class="badge&#x20;badge-primary">Primary</span>
<span class="badge&#x20;badge-secondary">Secondary</span>
<span class="badge&#x20;badge-success">Success</span>
<span class="badge&#x20;badge-danger">Danger</span>
<span class="badge&#x20;badge-warning">Warning</span>
<span class="badge&#x20;badge-info">Info</span>
<span class="badge&#x20;badge-light">Light</span>
<span class="badge&#x20;badge-dark">Dark</span>


###### **Source**

```php
foreach (
    [
        'primary', 'secondary', 'success', 'danger',
        'warning', 'info', 'light', 'dark',
    ] as $sVariant
) {
    echo $this->badge(ucfirst($sVariant), $sVariant) . PHP_EOL;
}
```

<!-- tabs:end -->


##### Pill badges
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/badge/#pill-badges)
<!-- tabs:start -->

###### **Result**

<span class="badge&#x20;badge-pill&#x20;badge-primary">Primary</span>
<span class="badge&#x20;badge-pill&#x20;badge-secondary">Secondary</span>
<span class="badge&#x20;badge-pill&#x20;badge-success">Success</span>
<span class="badge&#x20;badge-danger&#x20;badge-pill">Danger</span>
<span class="badge&#x20;badge-pill&#x20;badge-warning">Warning</span>
<span class="badge&#x20;badge-info&#x20;badge-pill">Info</span>
<span class="badge&#x20;badge-light&#x20;badge-pill">Light</span>
<span class="badge&#x20;badge-dark&#x20;badge-pill">Dark</span>


###### **Source**

```php
foreach (
    [
        'primary', 'secondary', 'success', 'danger',
        'warning', 'info', 'light', 'dark',
    ] as $sVariant
) {
    echo $this->badge(
        ucfirst($sVariant),
        [
            'type' => 'pill',
            'variant' => $sVariant,
        ]
    ) . PHP_EOL;
}
```

<!-- tabs:end -->


##### Links
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/badge/#links)
<!-- tabs:start -->

###### **Result**

<a class="badge&#x20;badge-primary" href="&#x23;">Primary</a>
<a class="badge&#x20;badge-secondary" href="&#x23;">Secondary</a>
<a class="badge&#x20;badge-success" href="&#x23;">Success</a>
<a class="badge&#x20;badge-danger" href="&#x23;">Danger</a>
<a class="badge&#x20;badge-warning" href="&#x23;">Warning</a>
<a class="badge&#x20;badge-info" href="&#x23;">Info</a>
<a class="badge&#x20;badge-light" href="&#x23;">Light</a>
<a class="badge&#x20;badge-dark" href="&#x23;">Dark</a>


###### **Source**

```php
foreach (
    [
        'primary', 'secondary', 'success', 'danger',
        'warning', 'info', 'light', 'dark',
    ] as $sVariant
) {
    echo $this->badge(
        ucfirst($sVariant),
        [
            'type' => 'link',
            'href' => '#',
            'variant' => $sVariant,
            
        ]
    ) . PHP_EOL;
}
```

<!-- tabs:end -->


#### Breadcrumb
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/breadcrumb/)
##### Example
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/breadcrumb/#example)
<!-- tabs:start -->

###### **Result**

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Home</li>
    </ol>
</nav>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="&#x2F;">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Library</li>
    </ol>
</nav>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="&#x2F;">Home</a></li>
        <li class="breadcrumb-item"><a href="&#x2F;library">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</nav>


###### **Source**

```php
echo $this->breadcrumbs(new \Laminas\Navigation\Navigation([
    ['label' => 'Home', 'uri' => '/', 'active' => true,],
    ]))->setMinDepth(0)  . PHP_EOL;
    
    echo $this->breadcrumbs(new \Laminas\Navigation\Navigation([
        [
            'label' => 'Home', 'uri' => '/', 'pages' => [
                ['label' => 'Library', 'uri' => '/library', 'active' => true],
            ],
        ],
        ]))->setMinDepth(0) . PHP_EOL;
        
        echo $this->breadcrumbs(new \Laminas\Navigation\Navigation([
            [
                'label' => 'Home', 'uri' => '/', 'pages' => [
                    [
                        'label' => 'Library', 'uri' => '/library', 'pages' => [
                            ['label' => 'Data', 'uri' => '/library/data', 'active' => true],
                        ],
                    ],
                ],
            ],
            ]))->setMinDepth(0) . PHP_EOL;
```

<!-- tabs:end -->


#### Buttons
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/buttons/)
##### Example
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/buttons/#example)
<!-- tabs:start -->

###### **Result**

<button type="button" name="primary" class="btn&#x20;btn-primary" value="">Primary</button>
<button type="button" name="secondary" class="btn&#x20;btn-secondary" value="">Secondary</button>
<button type="button" name="success" class="btn&#x20;btn-success" value="">Success</button>
<button type="button" name="danger" class="btn&#x20;btn-danger" value="">Danger</button>
<button type="button" name="warning" class="btn&#x20;btn-warning" value="">Warning</button>
<button type="button" name="info" class="btn&#x20;btn-info" value="">Info</button>
<button type="button" name="light" class="btn&#x20;btn-light" value="">Light</button>
<button type="button" name="dark" class="btn&#x20;btn-dark" value="">Dark</button>
<button type="button" name="link" class="btn&#x20;btn-link" value="">Link</button>


###### **Source**

```php
foreach (
    [
        'primary', 'secondary', 'success', 'danger',
        'warning', 'info', 'light', 'dark', 'link',
    ] as $sVariant
) {
    $oButton = new \Laminas\Form\Element\Button($sVariant, [
        'label' => ucfirst($sVariant),
        'variant' => $sVariant,
    ]);
    echo $this->formButton($oButton) . PHP_EOL;
}
```

<!-- tabs:end -->


##### Button tags
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/buttons/#button-tags)
<!-- tabs:start -->

###### **Result**

<a href="&#x23;" class="btn&#x20;btn-primary" role="button">Link</a>
<button type="submit" name="Button" class="btn&#x20;btn-primary" value="">Button</button>


###### **Source**

```php
// Link button
$oButton = new \Laminas\Form\Element\Button('Link', [
    'label' => 'Link',
    'variant' => 'primary',
    'tag' => 'a',
]);
$oButton->setAttribute('href', '#');
echo $this->formButton($oButton) . PHP_EOL;

// Submit button
$oButton = new \Laminas\Form\Element\Submit('Button', [
    'label' => 'Button',
    'variant' => 'primary',
]);
echo $this->formButton($oButton) . PHP_EOL;
```

<!-- tabs:end -->


##### Outline buttons
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/buttons/#outline-buttons)
<!-- tabs:start -->

###### **Result**

<button type="button" name="primary" class="btn&#x20;btn-outline-primary" value="">Primary</button>
<button type="button" name="secondary" class="btn&#x20;btn-outline-secondary" value="">Secondary</button>
<button type="button" name="success" class="btn&#x20;btn-outline-success" value="">Success</button>
<button type="button" name="danger" class="btn&#x20;btn-outline-danger" value="">Danger</button>
<button type="button" name="warning" class="btn&#x20;btn-outline-warning" value="">Warning</button>
<button type="button" name="info" class="btn&#x20;btn-outline-info" value="">Info</button>
<button type="button" name="light" class="btn&#x20;btn-outline-light" value="">Light</button>
<button type="button" name="dark" class="btn&#x20;btn-outline-dark" value="">Dark</button>


###### **Source**

```php
foreach (
    [
        'primary', 'secondary', 'success', 'danger',
        'warning', 'info', 'light', 'dark',
    ] as $sVariant
) {
    $oButton = new \Laminas\Form\Element\Button($sVariant, [
        'label' => ucfirst($sVariant),
        'variant' => 'outline-' . $sVariant,
    ]);
    echo $this->formButton($oButton) . PHP_EOL;
}
```

<!-- tabs:end -->


##### Sizes
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/buttons/#sizes)
<!-- tabs:start -->

###### **Result**

<button type="button" name="large-button" class="btn&#x20;btn-lg&#x20;btn-primary" value="">Large button</button>
<button type="button" name="large-button" class="btn&#x20;btn-lg&#x20;btn-secondary" value="">Large button</button>
<br/><br/>
<button type="button" name="small-button" class="btn&#x20;btn-primary&#x20;btn-sm" value="">Small button</button>
<button type="button" name="small-button" class="btn&#x20;btn-secondary&#x20;btn-sm" value="">Small button</button>
<br/><br/>
<button type="button" name="block-level-button" class="btn&#x20;btn-block&#x20;btn-lg&#x20;btn-primary" value="">Block level button</button>
<button type="button" name="block-level-button" class="btn&#x20;btn-block&#x20;btn-lg&#x20;btn-secondary" value="">Block level button</button>


###### **Source**

```php
// Large buttons
$oButton = new \Laminas\Form\Element\Button('large-button', [
    'label' => 'Large button',
    'variant' => 'primary',
    'size' => 'lg',
]);
echo $this->formButton($oButton) . PHP_EOL;

$oButton = new \Laminas\Form\Element\Button('large-button', [
    'label' => 'Large button',
    'size' => 'lg',
]);
echo $this->formButton($oButton) . PHP_EOL;

echo '<br/><br/>' . PHP_EOL;

// Small buttons
$oButton = new \Laminas\Form\Element\Button('small-button', [
    'label' => 'Small button',
    'variant' => 'primary',
    'size' => 'sm',
]);
echo $this->formButton($oButton) . PHP_EOL;

$oButton = new \Laminas\Form\Element\Button('small-button', [
    'label' => 'Small button',
    'size' => 'sm',
]);
echo $this->formButton($oButton) . PHP_EOL;

echo '<br/><br/>' . PHP_EOL;

// Block level buttons
$oButton = new \Laminas\Form\Element\Button('block-level-button', [
    'label' => 'Block level button',
    'variant' => 'primary',
    'size' => 'lg',
    'block' => true,
]);
echo $this->formButton($oButton) . PHP_EOL;

$oButton = new \Laminas\Form\Element\Button('block-level-button', [
    'label' => 'Block level button',
    'size' => 'lg',
    'block' => true,
]);
echo $this->formButton($oButton) . PHP_EOL;
```

<!-- tabs:end -->


#### Button group
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/button-group/)
##### Basic example
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/button-group/#basic-example)
<!-- tabs:start -->

###### **Result**

<div aria-label="Basic&#x20;example" class="btn-group" role="group">
    <button type="button" name="left" class="btn&#x20;btn-secondary" value="">Left</button>
    <button type="button" name="middle" class="btn&#x20;btn-secondary" value="">Middle</button>
    <button type="button" name="right" class="btn&#x20;btn-secondary" value="">Right</button>
</div>

###### **Source**

```php
echo $this->buttonGroup([
    // Create button via \Laminas\Form\Factory
    ['type' => 'button', 'name' => 'left', 'options' =>  ['label' => 'Left']],
    // Button object
    new \Laminas\Form\Element\Button('middle', ['label' => 'Middle']),
    ['type' => 'button', 'name' => 'right', 'options' =>  ['label' => 'Right']],
], ['attributes' => ['role' => 'group', 'aria-label' => 'Basic example']]);
```

<!-- tabs:end -->


##### Button toolbar
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/button-group/#button-toolbar)
###### Combine sets of button groups
<!-- tabs:start -->

####### **Result**

<div aria-label="Toolbar&#x20;with&#x20;button&#x20;groups" class="btn-toolbar" role="toolbar">
    <div aria-label="First&#x20;group" class="btn-group&#x20;mr-2" role="group">
        <button type="button" name="1" class="btn&#x20;btn-secondary" value="">1</button>
        <button type="button" name="2" class="btn&#x20;btn-secondary" value="">2</button>
        <button type="button" name="3" class="btn&#x20;btn-secondary" value="">3</button>
        <button type="button" name="4" class="btn&#x20;btn-secondary" value="">4</button>
    </div>
    <div aria-label="Second&#x20;group" class="btn-group&#x20;mr-2" role="group">
        <button type="button" name="5" class="btn&#x20;btn-secondary" value="">5</button>
        <button type="button" name="6" class="btn&#x20;btn-secondary" value="">6</button>
        <button type="button" name="7" class="btn&#x20;btn-secondary" value="">7</button>
    </div>
    <div aria-label="Third&#x20;group" class="btn-group&#x20;mr-2" role="group">
        <button type="button" name="8" class="btn&#x20;btn-secondary" value="">8</button>
    </div>
</div>

####### **Source**

```php
echo $this->buttonToolbar([
    [
        'buttons' => [
            new \Laminas\Form\Element\Button('1', ['label' => '1']),
            new \Laminas\Form\Element\Button('2', ['label' => '2']),
            new \Laminas\Form\Element\Button('3', ['label' => '3']),
            new \Laminas\Form\Element\Button('4', ['label' => '4']),
        ],
        'options' => [
            'attributes' => [
                'role' => 'group',
                'aria-label' => 'First group',
                'class' => 'mr-2',
            ],
        ],
    ],
    [
        'buttons' => [
            new \Laminas\Form\Element\Button('5', ['label' => '5']),
            new \Laminas\Form\Element\Button('6', ['label' => '6']),
            new \Laminas\Form\Element\Button('7', ['label' => '7']),
        ],
        'options' => [
            'attributes' => [
                'role' => 'group',
                'aria-label' =>
                'Second group',
                'class' => 'mr-2',
            ],
        ],
    ],
    [
        'buttons' => [
            new \Laminas\Form\Element\Button('8', ['label' => '8']),
        ],
        'options' => [
            'attributes' => [
                'role' => 'group',
                'aria-label' => 'Third group',
                'class' => 'mr-2',
            ],
        ],
    ],
], ['attributes' => ['role' => 'toolbar', 'aria-label' => 'Toolbar with button groups']]);
```

<!-- tabs:end -->


###### Mix input groups with button groups
<!-- tabs:start -->

####### **Result**

<div aria-label="Toolbar&#x20;with&#x20;button&#x20;groups" class="btn-toolbar&#x20;mb-3" role="toolbar">
    <div aria-label="First&#x20;group" class="btn-group&#x20;mr-2" role="group">
        <button type="button" name="1" class="btn&#x20;btn-secondary" value="">1</button>
        <button type="button" name="2" class="btn&#x20;btn-secondary" value="">2</button>
        <button type="button" name="3" class="btn&#x20;btn-secondary" value="">3</button>
        <button type="button" name="4" class="btn&#x20;btn-secondary" value="">4</button>
    </div>
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text" id="btnGroupAddon">
                @
            </div>
        </div>
        <input type="text" name="input-group-example" placeholder="Input&#x20;group&#x20;example" aria-label="Input&#x20;group&#x20;example" aria-describedby="btnGroupAddon" class="form-control" value=""/>
    </div>
</div>
<div aria-label="Toolbar&#x20;with&#x20;button&#x20;groups" class="btn-toolbar&#x20;justify-content-between" role="toolbar">
    <div aria-label="First&#x20;group" class="btn-group&#x20;mr-2" role="group">
        <button type="button" name="1" class="btn&#x20;btn-secondary" value="">1</button>
        <button type="button" name="2" class="btn&#x20;btn-secondary" value="">2</button>
        <button type="button" name="3" class="btn&#x20;btn-secondary" value="">3</button>
        <button type="button" name="4" class="btn&#x20;btn-secondary" value="">4</button>
    </div>
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text" id="btnGroupAddon">
                @
            </div>
        </div>
        <input type="text" name="input-group-example" placeholder="Input&#x20;group&#x20;example" aria-label="Input&#x20;group&#x20;example" aria-describedby="btnGroupAddon" class="form-control" value=""/>
    </div>
</div>

####### **Source**

```php
$aToolbarItems = [
    [
        'buttons' => [
            new \Laminas\Form\Element\Button('1', ['label' => '1']),
            new \Laminas\Form\Element\Button('2', ['label' => '2']),
            new \Laminas\Form\Element\Button('3', ['label' => '3']),
            new \Laminas\Form\Element\Button('4', ['label' => '4']),
        ],
        'options' => [
            'attributes' => [
                'role' => 'group',
                'aria-label' => 'First group',
                'class' => 'mr-2',
            ],
        ],
    ],
    [
        'type' => \Laminas\Form\Element\Text::class,
        'name' => 'input-group-example',
        'options' => ['add_on_prepend' => '@'],
        'attributes' => [
            'placeholder' => 'Input group example',
            'aria-label' => 'Input group example',
            'aria-describedby' => 'btnGroupAddon',
        ],
    ],
];

echo $this->buttonToolbar(
    $aToolbarItems,
    [
        'attributes' => [
            'role' => 'toolbar',
            'aria-label' =>
            'Toolbar with button groups',
            'class' => 'mb-3',
        ],
    ]
) . PHP_EOL;

// Justified content
echo $this->buttonToolbar(
    $aToolbarItems,
    [
        'attributes' => [
            'role' => 'toolbar',
            'aria-label' =>
            'Toolbar with button groups',
            'class' => 'justify-content-between',
        ],
    ]
);
```

<!-- tabs:end -->


##### Sizing
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/button-group/#sizing)
<!-- tabs:start -->

###### **Result**

<div aria-label="..." class="btn-group&#x20;btn-group-lg" role="group">
    <button type="button" name="left" class="btn&#x20;btn-secondary" value="">Left</button>
    <button type="button" name="middle" class="btn&#x20;btn-secondary" value="">Middle</button>
    <button type="button" name="right" class="btn&#x20;btn-secondary" value="">Right</button>
</div>
<div aria-label="..." class="btn-group" role="group">
    <button type="button" name="left" class="btn&#x20;btn-secondary" value="">Left</button>
    <button type="button" name="middle" class="btn&#x20;btn-secondary" value="">Middle</button>
    <button type="button" name="right" class="btn&#x20;btn-secondary" value="">Right</button>
</div>
<div aria-label="..." class="btn-group&#x20;btn-group-sm" role="group">
    <button type="button" name="left" class="btn&#x20;btn-secondary" value="">Left</button>
    <button type="button" name="middle" class="btn&#x20;btn-secondary" value="">Middle</button>
    <button type="button" name="right" class="btn&#x20;btn-secondary" value="">Right</button>
</div>


###### **Source**

```php
foreach (['lg', null, 'sm'] as $sSize) {
    echo $this->buttonGroup([
        new \Laminas\Form\Element\Button('left', ['label' => 'Left']),
        new \Laminas\Form\Element\Button('middle', ['label' => 'Middle']),
        new \Laminas\Form\Element\Button('right', ['label' => 'Right']),
    ], ['size' => $sSize, 'attributes' => ['role' => 'group', 'aria-label' => '...']]) . PHP_EOL;
}
```

<!-- tabs:end -->


##### Nesting
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/button-group/#nesting)
<!-- tabs:start -->

###### **Result**

<div aria-label="Button&#x20;group&#x20;with&#x20;nested&#x20;dropdown" class="btn-group" role="group">
    <button type="button" name="1" class="btn&#x20;btn-secondary" value="">1</button>
    <button type="button" name="2" class="btn&#x20;btn-secondary" value="">2</button>
    <div class="btn-group" role="group">
        <button type="button" name="dropdown" id="btnGroupDrop1" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-secondary&#x20;dropdown-toggle" value="">Dropdown</button>
        <div aria-labelledby="btnGroupDrop1" class="dropdown-menu">
            <a class="dropdown-item" href="&#x23;">Dropdown link</a>
            <a class="dropdown-item" href="&#x23;">Dropdown link</a>
        </div>
    </div>
</div>

###### **Source**

```php
echo $this->buttonGroup([
    ['type' => \Laminas\Form\Element\Button::class, 'name' => '1', 'options' => ['label' => '1']],
    ['type' => \Laminas\Form\Element\Button::class, 'name' => '2', 'options' => ['label' => '2']],
    [
        'type' => \Laminas\Form\Element\Button::class,
        'name' => 'dropdown',
        'options' => [
            'label' => 'Dropdown',
            'dropdown' => ['Dropdown link', 'Dropdown link'],
        ],
        'attributes' => ['id' => 'btnGroupDrop1'],
    ],
], ['attributes' => ['role' => 'group', 'aria-label' => 'Button group with nested dropdown']]);
```

<!-- tabs:end -->


##### Vertical variation
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/button-group/#vertical-variation)
<!-- tabs:start -->

###### **Result**

<div class="btn-group-vertical">
    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>
    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>
    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>
    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>
    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>
    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>
</div>
<div class="btn-group-vertical">
    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>
    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>
    <div class="btn-group" role="group">
        <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-secondary&#x20;dropdown-toggle" value="">Dropdown</button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="&#x23;">Dropdown link</a>
            <a class="dropdown-item" href="&#x23;">Dropdown link</a>
        </div>
    </div>
    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>
    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>
    <div class="btn-group" role="group">
        <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-secondary&#x20;dropdown-toggle" value="">Dropdown</button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="&#x23;">Dropdown link</a>
            <a class="dropdown-item" href="&#x23;">Dropdown link</a>
        </div>
    </div>
    <div class="btn-group" role="group">
        <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-secondary&#x20;dropdown-toggle" value="">Dropdown</button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="&#x23;">Dropdown link</a>
            <a class="dropdown-item" href="&#x23;">Dropdown link</a>
        </div>
    </div>
    <div class="btn-group" role="group">
        <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-secondary&#x20;dropdown-toggle" value="">Dropdown</button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="&#x23;">Dropdown link</a>
            <a class="dropdown-item" href="&#x23;">Dropdown link</a>
        </div>
    </div>
</div>

###### **Source**

```php
echo $this->buttonGroup([
    new \Laminas\Form\Element\Button('button', ['label' => 'Button']),
    new \Laminas\Form\Element\Button('button', ['label' => 'Button']),
    new \Laminas\Form\Element\Button('button', ['label' => 'Button']),
    new \Laminas\Form\Element\Button('button', ['label' => 'Button']),
    new \Laminas\Form\Element\Button('button', ['label' => 'Button']),
    new \Laminas\Form\Element\Button('button', ['label' => 'Button']),
], ['vertical' => true]) . PHP_EOL;

echo $this->buttonGroup([
    new \Laminas\Form\Element\Button('button', ['label' => 'Button']),
    new \Laminas\Form\Element\Button('button', ['label' => 'Button']),
    new \Laminas\Form\Element\Button('dropdown', [
        'label' => 'Dropdown',
        'dropdown' => ['Dropdown link', 'Dropdown link'],
    ]),
    new \Laminas\Form\Element\Button('button', ['label' => 'Button']),
    new \Laminas\Form\Element\Button('button', ['label' => 'Button']),
    new \Laminas\Form\Element\Button('dropdown', [
        'label' => 'Dropdown',
        'dropdown' => ['Dropdown link', 'Dropdown link'],
    ]),
    new \Laminas\Form\Element\Button('dropdown', [
        'label' => 'Dropdown',
        'dropdown' => ['Dropdown link', 'Dropdown link'],
    ]),
    new \Laminas\Form\Element\Button('dropdown', [
        'label' => 'Dropdown',
        'dropdown' => ['Dropdown link', 'Dropdown link'],
    ]),
], ['vertical' => true]);
```

<!-- tabs:end -->


#### Card
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/card/)
##### Example
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/card/#example)
<!-- tabs:start -->

###### **Result**

<div class="card" style="width&#x3A;&#x20;18rem&#x3B;">
    <img alt="..." class="card-img-top" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;image-cap.svg" />
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
        <a href="&#x23;" class="btn btn-primary">Go somewhere</a>
    </div>
</div>

###### **Source**

```php
echo $this->card([
    'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
    'title' => 'Card title',
    'text' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
    '<a href="&#x23;" class="btn btn-primary">Go somewhere</a>',
], ['style' => 'width: 18rem;']);
```

<!-- tabs:end -->


##### Content types
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/card/#content-types)
###### Body
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/card/#body)
<!-- tabs:start -->

####### **Result**

<div class="card">
    <div class="card-body">
        This is some text within a card body.
    </div>
</div>

####### **Source**

```php
echo $this->card('This is some text within a card body.');
```

<!-- tabs:end -->


###### Titles, text, and links
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/card/#titles-text-and-links)
<!-- tabs:start -->

####### **Result**

<div class="card" style="width&#x3A;&#x20;18rem&#x3B;">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle&#x20;mb-2&#x20;text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
        <a class="card-link" href="&#x23;">Card link</a>
        <a class="card-link" href="&#x23;">Another link</a>
    </div>
</div>

####### **Source**

```php
echo $this->card([
    'title' => 'Card title',
    'subtitle' => [
        'content' => 'Card subtitle',
        'attributes' => ['class' => 'mb-2 text-muted'],
    ],
    'text' => 'Some quick example text to build on the card title ' .
    'and make up the bulk of the card\'s content.',
    'link' => [
        'Card link',
        'Another link',
    ],
], ['style' => 'width: 18rem;']);
```

<!-- tabs:end -->


###### Images
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/card/#images)
<!-- tabs:start -->

####### **Result**

<div class="card" style="width&#x3A;&#x20;18rem&#x3B;">
    <img alt="..." class="card-img-top" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;image-cap.svg" />
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>

####### **Source**

```php
echo $this->card([
    'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
    'text' => 'Some quick example text to build on the card title ' .
    'and make up the bulk of the card\'s content.',
], ['style' => 'width: 18rem;']);
```

<!-- tabs:end -->


###### List groups
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/card/#list-groups)
<!-- tabs:start -->

####### **Result**

<div class="card" style="width&#x3A;&#x20;18rem&#x3B;">
    <ul class="list-group&#x20;list-group-flush">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Vestibulum at eros</li>
    </ul>
</div>
<br/>
<div class="card" style="width&#x3A;&#x20;18rem&#x3B;">
    <div class="card-header">
        Featured
    </div>
    <ul class="list-group&#x20;list-group-flush">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Vestibulum at eros</li>
    </ul>
</div>

####### **Source**

```php
echo $this->card([
    'listGroup' => [
        [
            'Cras justo odio',
            'Dapibus ac facilisis in',
            'Vestibulum at eros',
        ],
    ],
], ['style' => 'width: 18rem;']);

echo PHP_EOL . '<br/>' . PHP_EOL;

echo $this->card([
    'header' => 'Featured',
    'listGroup' => [
        [
            'Cras justo odio',
            'Dapibus ac facilisis in',
            'Vestibulum at eros',
        ],
    ],
], ['style' => 'width: 18rem;']);
```

<!-- tabs:end -->


###### Kitchen sink
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/card/#kitchen-sink)
<!-- tabs:start -->

####### **Result**

<div class="card" style="width&#x3A;&#x20;18rem&#x3B;">
    <img alt="..." class="card-img-top" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;image-cap.svg" />
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
    <ul class="list-group&#x20;list-group-flush">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Vestibulum at eros</li>
    </ul>
    <div class="card-body">
        <a class="card-link" href="&#x23;">Card link</a>
        <a class="card-link" href="&#x23;">Another link</a>
    </div>
</div>

####### **Source**

```php
echo $this->card([
    'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
    'title' => 'Card title',
    'text' => 'Some quick example text to build on the card title ' .
    'and make up the bulk of the card\'s content.',
    'listGroup' => [
        [
            'Cras justo odio',
            'Dapibus ac facilisis in',
            'Vestibulum at eros',
        ],
    ],
    'link' => [
        'Card link',
        'Another link',
    ],
], ['style' => 'width: 18rem;']);
```

<!-- tabs:end -->


###### Header and footer
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/card/#header-and-footer)
<!-- tabs:start -->

####### **Result**

<div class="card">
    <div class="card-header">
        Featured
    </div>
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
<br/>
<div class="card">
    <div class="card-header">
        Quote
    </div>
    <div class="card-body">
        <figure>
            <blockquote class="blockquote">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            </blockquote>
            <figcaption class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></figcaption>
        </figure>
    </div>
</div>
<br/>
<div class="card&#x20;text-center">
    <div class="card-header">
        Featured
    </div>
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    <div class="card-footer&#x20;text-muted">
        2 days ago
    </div>
</div>

####### **Source**

```php
echo $this->card([
    'header' => 'Featured',
    'title' => 'Special title treatment',
    'text' => 'With supporting text below as a natural lead-in to additional content.',
    '<a href="#" class="btn btn-primary">Go somewhere</a>',
]);

echo PHP_EOL . '<br/>' . PHP_EOL;

// With blockquote
echo $this->card([
    'header' => 'Quote',
    'blockquote' => [
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.',
        'Someone famous in <cite title="Source Title">Source Title</cite>',
    ],
]);

echo PHP_EOL . '<br/>' . PHP_EOL;

// Centered
echo $this->card([
    'header' => 'Featured',
    'title' => 'Special title treatment',
    'text' => 'With supporting text below as a natural lead-in to additional content.',
    '<a href="#" class="btn btn-primary">Go somewhere</a>',
    'footer' => ['2 days ago', ['class' => 'text-muted']],
], ['class' => 'text-center']);
```

<!-- tabs:end -->


##### Sizing
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/card/#sizing)
###### Using utilities
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/card/#using-utilities)
<!-- tabs:start -->

####### **Result**

<div class="card&#x20;w-75">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Button</a>
    </div>
</div>
<div class="card&#x20;w-50">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Button</a>
    </div>
</div>

####### **Source**

```php
echo $this->card([
    'title' => 'Card title',
    'text' => 'With supporting text below as a natural lead-in to additional content.',
    '<a href="#" class="btn btn-primary">Button</a>',
], ['class' => 'w-75']) . PHP_EOL;

echo $this->card([
    'title' => 'Card title',
    'text' => 'With supporting text below as a natural lead-in to additional content.',
    '<a href="#" class="btn btn-primary">Button</a>',
], ['class' => 'w-50']);
```

<!-- tabs:end -->


###### Using custom CSS
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/card/#using-custom-css)
<!-- tabs:start -->

####### **Result**

<div class="card" style="width&#x3A;&#x20;18rem&#x3B;">
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>

####### **Source**

```php
echo $this->card([
    'title' => 'Special title treatment',
    'text' => 'With supporting text below as a natural lead-in to additional content.',
    '<a href="#" class="btn btn-primary">Go somewhere</a>',
], ['style' => 'width: 18rem;']);
```

<!-- tabs:end -->


##### Text alignment
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/card/#text-alignment)
<!-- tabs:start -->

###### **Result**

<div class="card" style="width&#x3A;&#x20;18rem&#x3B;">
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
<br/>
<div class="card&#x20;text-center" style="width&#x3A;&#x20;18rem&#x3B;">
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
<br/>
<div class="card&#x20;text-right" style="width&#x3A;&#x20;18rem&#x3B;">
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>

###### **Source**

```php
echo $this->card([
    'title' => 'Special title treatment',
    'text' => 'With supporting text below as a natural lead-in to additional content.',
    '<a href="#" class="btn btn-primary">Go somewhere</a>',
], ['style' => 'width: 18rem;']) . PHP_EOL;

echo '<br/>' . PHP_EOL;

// Text center
echo $this->card([
    'title' => 'Special title treatment',
    'text' => 'With supporting text below as a natural lead-in to additional content.',
    '<a href="#" class="btn btn-primary">Go somewhere</a>',
], ['class' => 'text-center', 'style' => 'width: 18rem;']) . PHP_EOL;

echo '<br/>' . PHP_EOL;

// Text right
echo $this->card([
    'title' => 'Special title treatment',
    'text' => 'With supporting text below as a natural lead-in to additional content.',
    '<a href="#" class="btn btn-primary">Go somewhere</a>',
], ['class' => 'text-right', 'style' => 'width: 18rem;']);
```

<!-- tabs:end -->


##### Navigation
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/card/#navigation)
<!-- tabs:start -->

###### **Result**

<div class="card&#x20;text-center">
    <div class="card-header">
        <ul class="card-header-tabs&#x20;nav&#x20;nav-tabs">
            <li class="&#x20;nav-item">
                <a class="nav-link&#x20;active" href="&#x23;">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
<br/>
<div class="card&#x20;text-center">
    <div class="card-header">
        <ul class="card-header-pills&#x20;nav&#x20;nav-pills">
            <li class="&#x20;nav-item">
                <a class="nav-link&#x20;active" href="&#x23;">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>

###### **Source**

```php
// Nav tabs (pages defined by a \Laminas\Navigation\Navigation object as container)
echo $this->card([
    'nav' => new \Laminas\Navigation\Navigation(
        [
            ['label' => 'Active', 'uri' => '#', 'active' => true,],
            ['label' => 'Link', 'uri' => '#',],
            ['label' => 'Link', 'uri' => '#',],
            ['label' => 'Disabled', 'uri' => '#', 'visible' => false,],
        ]
    ),
    'title' => 'Special title treatment',
    'text' => 'With supporting text below as a natural lead-in to additional content.',
    '<a href="#" class="btn btn-primary">Go somewhere</a>',
], ['class' => 'text-center']);

echo PHP_EOL . '<br/>' . PHP_EOL;

// Nav pills (pages defined by an array as  container)
echo $this->card([
    'nav' => [
        'options' => ['pills' => true],
        'container' => [
            ['label' => 'Active', 'uri' => '#', 'active' => true,],
            ['label' => 'Link', 'uri' => '#',],
            ['label' => 'Link', 'uri' => '#',],
            ['label' => 'Disabled', 'uri' => '#', 'visible' => false,],
        ]
    ],
    'title' => 'Special title treatment',
    'text' => 'With supporting text below as a natural lead-in to additional content.',
    '<a href="#" class="btn btn-primary">Go somewhere</a>',
], ['class' => 'text-center']);
```

<!-- tabs:end -->


##### Images
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/card/#images-1)
###### Image caps
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/card/#image-caps)
<!-- tabs:start -->

####### **Result**

<div class="card&#x20;mb-3">
    <img alt="..." class="card-img-top" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;image-cap.svg" />
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    <img alt="..." class="card-img-top" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;image-cap.svg" />
</div>

####### **Source**

```php
echo $this->card([
    'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...']],
    'title' => 'Card title',
    'text' => [
        'This is a wider card with supporting text below as a natural lead-in to additional content. ' .
        'This content is a little bit longer.',
        '<small class="text-muted">Last updated 3 mins ago</small>',
    ],
], ['class' => 'mb-3']) . PHP_EOL;

echo $this->card([
    'title' => 'Card title',
    'text' => [
        'This is a wider card with supporting text below as a natural lead-in to additional content. ' .
        'This content is a little bit longer.',
        '<small class="text-muted">Last updated 3 mins ago</small>'
    ],
    'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...']],
]);
```

<!-- tabs:end -->


###### Image overlays
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/card/#image-overlays)
<!-- tabs:start -->

####### **Result**

<div class="bg-dark&#x20;card&#x20;text-white">
    <img alt="..." class="card-img" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;image-cap.svg" />
    <div class="card-img-overlay">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text">Last updated 3 mins ago</p>
    </div>
</div>

####### **Source**

```php
echo $this->card([
    'overlay' => [
        'img' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...']],
        'title' => 'Card title',
        'text' => [
            'This is a wider card with supporting text below as a natural ' .
            'lead-in to additional content. ' .
            'This content is a little bit longer.',
            'Last updated 3 mins ago',
        ],
    ],
], ['bgVariant' => 'dark', 'class' => 'text-white']);
```

<!-- tabs:end -->


##### Card styles
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/card/#card-styles)
###### Background and color
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/card/#background-and-color)
<!-- tabs:start -->

####### **Result**

<div class="bg-primary&#x20;card&#x20;mb-3&#x20;text-white">
    <div class="card-header">
        Header
    </div>
    <div class="card-body">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="bg-secondary&#x20;card&#x20;mb-3&#x20;text-white">
    <div class="card-header">
        Header
    </div>
    <div class="card-body">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="bg-success&#x20;card&#x20;mb-3&#x20;text-white">
    <div class="card-header">
        Header
    </div>
    <div class="card-body">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="bg-danger&#x20;card&#x20;mb-3&#x20;text-white">
    <div class="card-header">
        Header
    </div>
    <div class="card-body">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="bg-warning&#x20;card&#x20;mb-3&#x20;text-white">
    <div class="card-header">
        Header
    </div>
    <div class="card-body">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="bg-info&#x20;card&#x20;mb-3&#x20;text-white">
    <div class="card-header">
        Header
    </div>
    <div class="card-body">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="bg-light&#x20;card&#x20;mb-3">
    <div class="card-header">
        Header
    </div>
    <div class="card-body">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="bg-dark&#x20;card&#x20;mb-3&#x20;text-white">
    <div class="card-header">
        Header
    </div>
    <div class="card-body">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>


####### **Source**

```php
foreach (
    [
        'primary', 'secondary', 'success', 'danger',
        'warning', 'info', 'light', 'dark',
    ] as $sVariant
) {
    echo $this->card([
        'header' => 'Header',
        'title' => 'Primary card title',
        'text' => 'Some quick example text to build on the card title ' .
        'and make up the bulk of the card\'s content.',
    ], [
        'bgVariant' => $sVariant,
        'class' => ($sVariant !== 'light' ? 'text-white ' : '') . 'mb-3',
    ]) . PHP_EOL;
}
```

<!-- tabs:end -->


###### Border
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/card/#border)
<!-- tabs:start -->

####### **Result**

<div class="border-primary&#x20;card&#x20;mb-3">
    <div class="card-header">
        Header
    </div>
    <div class="card-body&#x20;text-primary">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="border-secondary&#x20;card&#x20;mb-3">
    <div class="card-header">
        Header
    </div>
    <div class="card-body&#x20;text-secondary">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="border-success&#x20;card&#x20;mb-3">
    <div class="card-header">
        Header
    </div>
    <div class="card-body&#x20;text-success">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="border-danger&#x20;card&#x20;mb-3">
    <div class="card-header">
        Header
    </div>
    <div class="card-body&#x20;text-danger">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="border-warning&#x20;card&#x20;mb-3">
    <div class="card-header">
        Header
    </div>
    <div class="card-body&#x20;text-warning">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="border-info&#x20;card&#x20;mb-3">
    <div class="card-header">
        Header
    </div>
    <div class="card-body&#x20;text-info">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="border-light&#x20;card&#x20;mb-3">
    <div class="card-header">
        Header
    </div>
    <div class="card-body">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="border-dark&#x20;card&#x20;mb-3">
    <div class="card-header">
        Header
    </div>
    <div class="card-body&#x20;text-dark">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>


####### **Source**

```php
foreach (
    [
        'primary', 'secondary', 'success', 'danger',
        'warning', 'info', 'light', 'dark',
    ] as $sVariant
) {
    echo $this->card([
        'header' => 'Header',
        'title' => 'Primary card title',
        'text' => 'Some quick example text to build on the card title and ' .
        'make up the bulk of the card\'s content.',
    ], [
        'borderVariant' => $sVariant,
        'bodyVariant' => $sVariant !== 'light' ?  $sVariant : null,
        'class' => 'mb-3'
    ]) . PHP_EOL;
}
```

<!-- tabs:end -->


###### Mixins utilities
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/card/#mixins-utilities)
<!-- tabs:start -->

####### **Result**

<div class="border-success&#x20;card&#x20;mb-3">
    <div class="bg-transparent&#x20;border-success&#x20;card-header">
        Header
    </div>
    <div class="card-body&#x20;text-success">
        <h5 class="card-title">Success card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
    <div class="bg-transparent&#x20;border-success&#x20;card-footer">
        Footer
    </div>
</div>

####### **Source**

```php
echo $this->card([
    'header' => ['Header', ['class' => 'bg-transparent border-success']],
    'title' => 'Success card title',
    'text' => 'Some quick example text to build on the card title ' .
    'and make up the bulk of the card\'s content.',
    'footer' => ['Footer', ['class' => 'card-footer bg-transparent border-success']],
], [
    'borderVariant' => 'success',
    'bodyVariant' => 'success',
    'class' => 'mb-3'
]);
```

<!-- tabs:end -->


##### Card layout
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/card/#card-layout)
###### Card groups
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/card/#card-groups)
<!-- tabs:start -->

####### **Result**

<div class="card-group">
    <div class="card">
        <img alt="..." class="card-img-top" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;image-cap.svg" />
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="card">
        <img alt="..." class="card-img-top" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;image-cap.svg" />
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="card">
        <img alt="..." class="card-img-top" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;image-cap.svg" />
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
</div>
<br/>
<div class="card-group">
    <div class="card">
        <img alt="..." class="card-img-top" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;image-cap.svg" />
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
    <div class="card">
        <img alt="..." class="card-img-top" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;image-cap.svg" />
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
    <div class="card">
        <img alt="..." class="card-img-top" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;image-cap.svg" />
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
</div>

####### **Source**

```php
echo $this->cardGroup([
    [
        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
        'title' => 'Primary card title',
        'text' => [
            'This is a wider card with supporting text below as a natural lead-in to additional ' .
            'content. This content is a little bit longer.',
            '<small class="text-muted">Last updated 3 mins ago</small>',
        ],
    ],
    [
        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
        'title' => 'Primary card title',
        'text' => [
            'This card has supporting text below as a natural lead-in to additional content.',
            '<small class="text-muted">Last updated 3 mins ago</small>'
        ],
    ],
    [
        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
        'title' => 'Primary card title',
        'text' => [
            'This is a wider card with supporting text below as a natural lead-in ' .
            'to additional content. This card has even longer content than the ' .
            'first to show that equal height action.',
            '<small class="text-muted">Last updated 3 mins ago</small>',
        ],
    ],
]);


echo PHP_EOL . '<br/>' . PHP_EOL;

// With footers
echo $this->cardGroup([
    [
        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
        'title' => 'Primary card title',
        'text' => 'This is a wider card with supporting text below as a natural lead-in to ' .
        'additional content. This content is a little bit longer.',
        'footer' => '<small class="text-muted">Last updated 3 mins ago</small>',
    ],
    [
        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
        'title' => 'Primary card title',
        'text' => 'This card has supporting text below as a natural lead-in to additional content.',
        'footer' => '<small class="text-muted">Last updated 3 mins ago</small>',
    ],
    [
        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
        'title' => 'Primary card title',
        'text' => 'This is a wider card with supporting text below ' .
        'as a natural lead-in to additional content. ' .
        'This card has even longer content than the first to show that equal height action.',
        'footer' => '<small class="text-muted">Last updated 3 mins ago</small>',
    ],
]);
```

<!-- tabs:end -->


###### Card decks
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/card/#card-decks)
<!-- tabs:start -->

####### **Result**

<div class="card-deck">
    <div class="card">
        <img alt="..." class="card-img-top" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;image-cap.svg" />
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="card">
        <img alt="..." class="card-img-top" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;image-cap.svg" />
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="card">
        <img alt="..." class="card-img-top" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;image-cap.svg" />
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
</div>
<br/>
<div class="card-deck">
    <div class="card">
        <img alt="..." class="card-img-top" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;image-cap.svg" />
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
    <div class="card">
        <img alt="..." class="card-img-top" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;image-cap.svg" />
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
    <div class="card">
        <img alt="..." class="card-img-top" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;image-cap.svg" />
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
</div>

####### **Source**

```php
echo $this->cardDeck([
    [
        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
        'title' => 'Primary card title',
        'text' => [
            'This is a wider card with supporting text below ' .
            'as a natural lead-in to additional content. ' .
            'This content is a little bit longer.',
            '<small class="text-muted">Last updated 3 mins ago</small>',
        ],
    ],
    [
        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
        'title' => 'Primary card title',
        'text' => [
            'This card has supporting text below as a natural lead-in to additional content.',
            '<small class="text-muted">Last updated 3 mins ago</small>'
        ],
    ],
    [
        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
        'title' => 'Primary card title',
        'text' => [
            'This is a wider card with supporting text below as a ' .
            'natural lead-in to additional content. ' .
            'This card has even longer content than the first to show that equal height action.',
            '<small class="text-muted">Last updated 3 mins ago</small>',
        ],
    ],
]);

echo PHP_EOL . '<br/>' . PHP_EOL;

// With footers
echo $this->cardDeck([
    [
        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
        'title' => 'Primary card title',
        'text' => 'This is a wider card with supporting text below as a ' .
        'natural lead-in to additional content. This content is a little bit longer.',
        'footer' => '<small class="text-muted">Last updated 3 mins ago</small>',
    ],
    [
        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
        'title' => 'Primary card title',
        'text' => 'This card has supporting text below as a natural lead-in to additional content.',
        'footer' => '<small class="text-muted">Last updated 3 mins ago</small>',
    ],
    [
        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
        'title' => 'Primary card title',
        'text' => 'This is a wider card with supporting text below as a natural ' .
        'lead-in to additional content. This card has even longer content than ' .
        'the first to show that equal height action.',
        'footer' => '<small class="text-muted">Last updated 3 mins ago</small>',
    ],
]);
```

<!-- tabs:end -->


###### Card columns
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/card/#card-columns)
<!-- tabs:start -->

####### **Result**

<div class="card-columns">
    <div class="card">
        <img alt="..." class="card-img-top" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;image-cap.svg" />
        <div class="card-body">
            <h5 class="card-title">Card title that wraps to a new line</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
    </div>
    <div class="card&#x20;p-3">
        <div class="card-body">
            <figure>
                <blockquote class="blockquote">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                </blockquote>
                <figcaption class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></figcaption>
            </figure>
        </div>
    </div>
    <div class="card">
        <img alt="..." class="card-img-top" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;image-cap.svg" />
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="bg-primary&#x20;card&#x20;p-3&#x20;text-center&#x20;text-white">
        <div class="card-body">
            <figure>
                <blockquote class="blockquote">
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                </blockquote>
                <figcaption class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></figcaption>
            </figure>
        </div>
    </div>
    <div class="card&#x20;text-center">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="card">
        <img alt="..." class="card-img-top" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;image-cap.svg" />
    </div>
    <div class="card&#x20;p-3&#x20;text-right">
        <div class="card-body">
            <figure>
                <blockquote class="blockquote">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                </blockquote>
                <figcaption class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></figcaption>
            </figure>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
</div>

####### **Source**

```php
echo $this->cardColumns([
    [
        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
        'title' => 'Card title that wraps to a new line',
        'text' => 'This is a longer card with supporting text below as ' .
        'a natural lead-in to additional content. This content is a little bit longer.',
    ],
    [
        [
            'blockquote' => [
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.',
                'Someone famous in <cite title="Source Title">Source Title</cite>',
            ],
        ],
        ['class' => 'p-3'],
    ],
    [
        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
        'title' => 'Card title',
        'text' => [
            'This card has supporting text below as a natural lead-in to additional content.',
            '<small class="text-muted">Last updated 3 mins ago</small>',
        ],
    ],
    [
        [
            'blockquote' => [
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.',
                'Someone famous in <cite title="Source Title">Source Title</cite>',
                [],
                ['class' => 'text-white'],
            ],
        ],
        ['bgVariant' => 'primary', 'class' => 'text-white text-center p-3'],
    ],
    [
        [
            'title' => 'Card title',
            'text' => [
                'This card has a regular title and short paragraphy of text below it.',
                '<small class="text-muted">Last updated 3 mins ago</small>',
            ],
        ],
        ['class' => 'text-center'],
    ],
    [
        'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
    ],
    [
        [
            'blockquote' => [
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ' .
                'Integer posuere erat a ante.',
                'Someone famous in <cite title="Source Title">Source Title</cite>',
            ],
        ],
        ['class' => 'p-3 text-right'],
    ],
    [
        'title' => 'Card title',
        'text' => [
            'This is another card with title and supporting text below. ' .
            'This card has some additional content to make it slightly taller overall.',
            '<small class="text-muted">Last updated 3 mins ago</small>',
        ],
    ],
]);
```

<!-- tabs:end -->


#### Carousel
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/carousel/)
##### Example
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/carousel/#example)
###### Slides only
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/carousel/#slides-only)
<!-- tabs:start -->

####### **Result**

<div class="carousel&#x20;slide" data-ride="carousel" id="carouselExampleSlidesOnly">
    <div class="carousel-inner">
        <div class="active&#x20;carousel-item">
            <img alt="Slide&#x20;1" class="d-block&#x20;w-100" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />
        </div>
        <div class="carousel-item">
            <img alt="Slide&#x20;2" class="d-block&#x20;w-100" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />
        </div>
        <div class="carousel-item">
            <img alt="Slide&#x20;3" class="d-block&#x20;w-100" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />
        </div>
    </div>
</div>

####### **Source**

```php
echo $this->carousel([
    [
        'src' => '/twbs-helper-module/img/docs/400x300.svg',
        'optionsAndAttributes' => ['active' => true, 'alt' => 'Slide 1'],
    ],
    ['/twbs-helper-module/img/docs/400x300.svg', ['alt' => 'Slide 2',]],
    '/twbs-helper-module/img/docs/400x300.svg' => ['alt' => 'Slide 3',],
], ['id' => 'carouselExampleSlidesOnly']);
```

<!-- tabs:end -->


###### With controls
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/carousel/#with-controls)
<!-- tabs:start -->

####### **Result**

<div class="carousel&#x20;slide" data-ride="carousel" id="carouselExampleControls">
    <div class="carousel-inner">
        <div class="active&#x20;carousel-item">
            <img alt="Slide&#x20;1" class="d-block&#x20;w-100" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />
        </div>
        <div class="carousel-item">
            <img alt="Slide&#x20;2" class="d-block&#x20;w-100" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />
        </div>
        <div class="carousel-item">
            <img alt="Slide&#x20;3" class="d-block&#x20;w-100" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />
        </div>
    </div>
    <a class="carousel-control-prev" data-slide="prev" href="&#x23;carouselExampleControls" role="button">
        <span aria-hidden="true" class="carousel-control-prev-icon"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" data-slide="next" href="&#x23;carouselExampleControls" role="button">
        <span aria-hidden="true" class="carousel-control-next-icon"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

####### **Source**

```php
echo $this->carousel([
    [
        'src' => '/twbs-helper-module/img/docs/400x300.svg',
        'optionsAndAttributes' => ['active' => true, 'alt' => 'Slide 1'],
    ],
    ['/twbs-helper-module/img/docs/400x300.svg', ['alt' => 'Slide 2',]],
    '/twbs-helper-module/img/docs/400x300.svg' => ['alt' => 'Slide 3',],
], ['id' => 'carouselExampleControls', 'controls' => true]);
```

<!-- tabs:end -->


###### With indicators
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/carousel/#with-indicators)
<!-- tabs:start -->

####### **Result**

<div class="carousel&#x20;slide" data-ride="carousel" id="carouselExampleIndicators">
    <ol class="carousel-indicators">
        <li class="active" data-slide-to="0" data-target="&#x23;carouselExampleIndicators"></li>
        <li data-slide-to="1" data-target="&#x23;carouselExampleIndicators"></li>
        <li data-slide-to="2" data-target="&#x23;carouselExampleIndicators"></li>
    </ol>
    <div class="carousel-inner">
        <div class="active&#x20;carousel-item">
            <img alt="Slide&#x20;1" class="d-block&#x20;w-100" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />
        </div>
        <div class="carousel-item">
            <img alt="Slide&#x20;2" class="d-block&#x20;w-100" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />
        </div>
        <div class="carousel-item">
            <img alt="Slide&#x20;3" class="d-block&#x20;w-100" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />
        </div>
    </div>
    <a class="carousel-control-prev" data-slide="prev" href="&#x23;carouselExampleIndicators" role="button">
        <span aria-hidden="true" class="carousel-control-prev-icon"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" data-slide="next" href="&#x23;carouselExampleIndicators" role="button">
        <span aria-hidden="true" class="carousel-control-next-icon"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

####### **Source**

```php
echo $this->carousel([
    [
        'src' => '/twbs-helper-module/img/docs/400x300.svg',
        'optionsAndAttributes' => ['active' => true, 'alt' => 'Slide 1'],
    ],
    ['/twbs-helper-module/img/docs/400x300.svg', ['alt' => 'Slide 2',]],
    '/twbs-helper-module/img/docs/400x300.svg' => ['alt' => 'Slide 3',],
], ['id' => 'carouselExampleIndicators', 'controls' => true, 'indicators' => true]);
```

<!-- tabs:end -->


###### With captions
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/carousel/#with-captions)
<!-- tabs:start -->

####### **Result**

<div class="carousel&#x20;slide" data-ride="carousel" id="carouselExampleCaptions">
    <ol class="carousel-indicators">
        <li class="active" data-slide-to="0" data-target="&#x23;carouselExampleCaptions"></li>
        <li data-slide-to="1" data-target="&#x23;carouselExampleCaptions"></li>
        <li data-slide-to="2" data-target="&#x23;carouselExampleCaptions"></li>
    </ol>
    <div class="carousel-inner">
        <div class="active&#x20;carousel-item">
            <img alt="Slide&#x20;1" class="d-block&#x20;w-100" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />
            <div class="carousel-caption&#x20;d-md-block&#x20;d-none">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img alt="Slide&#x20;2" class="d-block&#x20;w-100" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />
            <div class="carousel-caption&#x20;d-md-block&#x20;d-none">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img alt="Slide&#x20;3" class="d-block&#x20;w-100" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />
            <div class="carousel-caption&#x20;d-md-block&#x20;d-none">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" data-slide="prev" href="&#x23;carouselExampleCaptions" role="button">
        <span aria-hidden="true" class="carousel-control-prev-icon"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" data-slide="next" href="&#x23;carouselExampleCaptions" role="button">
        <span aria-hidden="true" class="carousel-control-next-icon"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

####### **Source**

```php
echo $this->carousel([
    [
        'src' => '/twbs-helper-module/img/docs/400x300.svg',
        'optionsAndAttributes' => [
            'active' => true,
            'alt' => 'Slide 1',
            'caption' => [
                'title' => 'First slide label',
                'text' => 'Nulla vitae elit libero, a pharetra augue mollis interdum.',
            ],
        ]
    ],
    [
        '/twbs-helper-module/img/docs/400x300.svg',
        [
            'alt' => 'Slide 2',
            'caption' => [
                'title' => 'Second slide label',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            ],
        ],
    ],
    '/twbs-helper-module/img/docs/400x300.svg' => [
        'alt' => 'Slide 3',
        'caption' => [
            'title' => 'Third slide label',
            'text' => 'Praesent commodo cursus magna, vel scelerisque nisl consectetur.',
        ],
    ],
], [
    'id' => 'carouselExampleCaptions',
    'controls' => true,
    'indicators' => true,
]);
```

<!-- tabs:end -->


###### Crossfade
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/carousel/#crossfade)
<!-- tabs:start -->

####### **Result**

<div class="carousel&#x20;carousel-fade&#x20;slide" data-ride="carousel" id="carouselExampleFade">
    <div class="carousel-inner">
        <div class="active&#x20;carousel-item">
            <img alt="Slide&#x20;1" class="d-block&#x20;w-100" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />
        </div>
        <div class="carousel-item">
            <img alt="Slide&#x20;2" class="d-block&#x20;w-100" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />
        </div>
        <div class="carousel-item">
            <img alt="Slide&#x20;3" class="d-block&#x20;w-100" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />
        </div>
    </div>
    <a class="carousel-control-prev" data-slide="prev" href="&#x23;carouselExampleFade" role="button">
        <span aria-hidden="true" class="carousel-control-prev-icon"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" data-slide="next" href="&#x23;carouselExampleFade" role="button">
        <span aria-hidden="true" class="carousel-control-next-icon"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

####### **Source**

```php
echo $this->carousel([
    [
        'src' => '/twbs-helper-module/img/docs/400x300.svg',
        'optionsAndAttributes' => ['active' => true, 'alt' => 'Slide 1'],
    ],
    ['/twbs-helper-module/img/docs/400x300.svg', ['alt' => 'Slide 2',]],
    '/twbs-helper-module/img/docs/400x300.svg' => ['alt' => 'Slide 3',],
], ['id' => 'carouselExampleFade', 'controls' => true, 'crossfade' => true]);
```

<!-- tabs:end -->


###### Individual .carousel-item interval
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/carousel/#individual-carousel-item-interval)
<!-- tabs:start -->

####### **Result**

<div class="carousel&#x20;slide" data-ride="carousel" id="carouselExampleControls">
    <div class="carousel-inner">
        <div class="active&#x20;carousel-item" data-interval="10000">
            <img alt="Slide&#x20;1" class="d-block&#x20;w-100" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />
        </div>
        <div class="carousel-item" data-interval="2000">
            <img alt="Slide&#x20;2" class="d-block&#x20;w-100" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />
        </div>
        <div class="carousel-item">
            <img alt="Slide&#x20;3" class="d-block&#x20;w-100" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;400x300.svg" />
        </div>
    </div>
    <a class="carousel-control-prev" data-slide="prev" href="&#x23;carouselExampleControls" role="button">
        <span aria-hidden="true" class="carousel-control-prev-icon"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" data-slide="next" href="&#x23;carouselExampleControls" role="button">
        <span aria-hidden="true" class="carousel-control-next-icon"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

####### **Source**

```php
echo $this->carousel([
    ['src' => '/twbs-helper-module/img/docs/400x300.svg', 'optionsAndAttributes' => [
        'interval' => 10000,
        'active' => true,
        'alt' => 'Slide 1',
    ]],
    ['/twbs-helper-module/img/docs/400x300.svg', ['interval' => 2000, 'alt' => 'Slide 2',]],
    '/twbs-helper-module/img/docs/400x300.svg' => ['alt' => 'Slide 3',],
], ['id' => 'carouselExampleControls', 'controls' => true]);
```

<!-- tabs:end -->


#### Dropdowns
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/dropdowns/)
##### Examples
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/dropdowns/#examples)
###### Single button
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/dropdowns/#single-button)
<!-- tabs:start -->

####### **Result**

<div class="dropdown">
    <button type="button" name="dropdown" id="dropdownMenuButton" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-secondary&#x20;dropdown-toggle" value="">Dropdown</button>
    <div aria-labelledby="dropdownMenuButton" class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
    </div>
</div>
<br/>
<div class="dropdown">
    <a id="dropdownMenuButton" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="&#x23;" class="btn&#x20;btn-secondary&#x20;dropdown-toggle">Dropdown</a>
    <div aria-labelledby="dropdownMenuButton" class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
    </div>
</div>
<br/>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-primary&#x20;dropdown-toggle" value="">Dropdown</button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="&#x23;">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-secondary&#x20;dropdown-toggle" value="">Dropdown</button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="&#x23;">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-success&#x20;dropdown-toggle" value="">Dropdown</button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="&#x23;">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-danger&#x20;dropdown-toggle" value="">Dropdown</button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="&#x23;">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-warning&#x20;dropdown-toggle" value="">Dropdown</button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="&#x23;">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-info&#x20;dropdown-toggle" value="">Dropdown</button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="&#x23;">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-light&#x20;dropdown-toggle" value="">Dropdown</button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="&#x23;">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-dark&#x20;dropdown-toggle" value="">Dropdown</button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="&#x23;">Separated link</a>
    </div>
</div>


####### **Source**

```php
echo $this->formButton([
    'name' => 'dropdown',
    'options' => [
        'label' => 'Dropdown',
        'dropdown' => ['Action', 'Another action', 'Something else here',],
    ],
    'attributes' => ['id' => 'dropdownMenuButton'],
]);

echo PHP_EOL . '<br/>' . PHP_EOL;

// With <a> elements
echo $this->formButton([
    'name' => 'dropdown',
    'options' => [
        'tag' => 'a',
        'label' => 'Dropdown',
        'dropdown' => ['Action', 'Another action', 'Something else here',],
    ],
    'attributes' => ['id' => 'dropdownMenuButton'],
]);

echo PHP_EOL . '<br/>' . PHP_EOL;

// Variations
foreach (
    [
        'primary', 'secondary', 'success', 'danger',
        'warning', 'info', 'light', 'dark',
    ] as $sVariant
) {
    echo $this->formButton([
        'name' => 'dropdown',
        'options' => [
            'variant' => $sVariant,
            'label' => 'Dropdown',
            'dropdown' => [
                'attributes' => ['class' => 'btn-group'],
                'items' => [
                    'Action',
                    'Another action',
                    'Something else here',
                    '---',
                    'Separated link',
                ],
            ],
        ],
    ]) . PHP_EOL;
}
```

<!-- tabs:end -->


###### Split button
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/dropdowns/#split-button)
<!-- tabs:start -->

####### **Result**

<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" class="btn&#x20;btn-primary" value="">Dropdown</button>
    <button type="button" name="dropdown-toggle" class="btn&#x20;btn-primary&#x20;dropdown-toggle&#x20;dropdown-toggle-split" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" value=""><span class="sr-only">Toggle Dropdown</span></button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="&#x23;">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" class="btn&#x20;btn-secondary" value="">Dropdown</button>
    <button type="button" name="dropdown-toggle" class="btn&#x20;btn-secondary&#x20;dropdown-toggle&#x20;dropdown-toggle-split" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" value=""><span class="sr-only">Toggle Dropdown</span></button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="&#x23;">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" class="btn&#x20;btn-success" value="">Dropdown</button>
    <button type="button" name="dropdown-toggle" class="btn&#x20;btn-success&#x20;dropdown-toggle&#x20;dropdown-toggle-split" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" value=""><span class="sr-only">Toggle Dropdown</span></button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="&#x23;">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" class="btn&#x20;btn-danger" value="">Dropdown</button>
    <button type="button" name="dropdown-toggle" class="btn&#x20;btn-danger&#x20;dropdown-toggle&#x20;dropdown-toggle-split" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" value=""><span class="sr-only">Toggle Dropdown</span></button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="&#x23;">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" class="btn&#x20;btn-warning" value="">Dropdown</button>
    <button type="button" name="dropdown-toggle" class="btn&#x20;btn-warning&#x20;dropdown-toggle&#x20;dropdown-toggle-split" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" value=""><span class="sr-only">Toggle Dropdown</span></button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="&#x23;">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" class="btn&#x20;btn-info" value="">Dropdown</button>
    <button type="button" name="dropdown-toggle" class="btn&#x20;btn-info&#x20;dropdown-toggle&#x20;dropdown-toggle-split" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" value=""><span class="sr-only">Toggle Dropdown</span></button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="&#x23;">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" class="btn&#x20;btn-light" value="">Dropdown</button>
    <button type="button" name="dropdown-toggle" class="btn&#x20;btn-light&#x20;dropdown-toggle&#x20;dropdown-toggle-split" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" value=""><span class="sr-only">Toggle Dropdown</span></button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="&#x23;">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" class="btn&#x20;btn-dark" value="">Dropdown</button>
    <button type="button" name="dropdown-toggle" class="btn&#x20;btn-dark&#x20;dropdown-toggle&#x20;dropdown-toggle-split" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" value=""><span class="sr-only">Toggle Dropdown</span></button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="&#x23;">Separated link</a>
    </div>
</div>


####### **Source**

```php
foreach (
    [
        'primary', 'secondary', 'success', 'danger',
        'warning', 'info', 'light', 'dark',
    ] as $sVariant
) {
    echo $this->formButton([
        'name' => 'dropdown',
        'options' => [
            'variant' => $sVariant,
            'label' => 'Dropdown',
            'dropdown' => [
                'split' => 'Toggle Dropdown',
                'items' => [
                    'Action',
                    'Another action',
                    'Something else here',
                    '---',
                    'Separated link',
                ],
            ],
        ],
    ]) . PHP_EOL;
}
```

<!-- tabs:end -->


##### Sizing
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/dropdowns/#sizing)
<!-- tabs:start -->

###### **Result**

<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-lg&#x20;btn-secondary&#x20;dropdown-toggle" value="">Large button</button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="&#x23;">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" class="btn&#x20;btn-lg&#x20;btn-secondary" value="">Large button</button>
    <button type="button" name="dropdown-toggle" class="btn&#x20;btn-lg&#x20;btn-secondary&#x20;dropdown-toggle&#x20;dropdown-toggle-split" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" value=""><span class="sr-only">Toggle Dropdown</span></button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="&#x23;">Separated link</a>
    </div>
</div>
<br/><br/>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-secondary&#x20;btn-sm&#x20;dropdown-toggle" value="">Small button</button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="&#x23;">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" class="btn&#x20;btn-secondary&#x20;btn-sm" value="">Small button</button>
    <button type="button" name="dropdown-toggle" class="btn&#x20;btn-secondary&#x20;btn-sm&#x20;dropdown-toggle&#x20;dropdown-toggle-split" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" value=""><span class="sr-only">Toggle Dropdown</span></button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="&#x23;">Separated link</a>
    </div>
</div>

###### **Source**

```php
// Large button
echo $this->formButton([
    'name' => 'dropdown',
    'options' => [
        'label' => 'Large button',
        'size' => 'lg',
        'dropdown' => [
            'attributes' => ['class' => 'btn-group'],
            'items' => ['Action', 'Another action', 'Something else here', '---', 'Separated link'],
        ],
    ],
]) . PHP_EOL;

// Large split button
echo $this->formButton([
    'name' => 'dropdown',
    'options' => [
        'label' => 'Large button',
        'size' => 'lg',
        'dropdown' => [
            'split' => 'Toggle Dropdown',
            'items' => ['Action', 'Another action', 'Something else here', '---', 'Separated link'],
        ],
    ],
]);

echo PHP_EOL . '<br/><br/>' . PHP_EOL;

// Small button
echo $this->formButton([
    'name' => 'dropdown',
    'options' => [
        'label' => 'Small button',
        'size' => 'sm',
        'dropdown' => [
            'attributes' => ['class' => 'btn-group'],
            'items' => ['Action', 'Another action', 'Something else here', '---', 'Separated link'],
        ],
    ],
]) . PHP_EOL;

// Small split button
echo $this->formButton([
    'name' => 'dropdown',
    'options' => [
        'label' => 'Small button',
        'size' => 'sm',
        'dropdown' => [
            'split' => 'Toggle Dropdown',
            'items' => ['Action', 'Another action', 'Something else here', '---', 'Separated link'],
        ],
    ],
]);
```

<!-- tabs:end -->


##### Directions
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/dropdowns/#directions)
###### Dropup
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/dropdowns/#dropup)
<!-- tabs:start -->

####### **Result**

<div class="btn-group&#x20;dropup">
    <button type="button" name="dropup" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-lg&#x20;btn-secondary&#x20;dropdown-toggle" value="">Dropup</button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="&#x23;">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropup">
    <button type="button" name="split-dropup" class="btn&#x20;btn-lg&#x20;btn-secondary" value="">Split dropup</button>
    <button type="button" name="split-dropup-toggle" class="btn&#x20;btn-lg&#x20;btn-secondary&#x20;dropdown-toggle&#x20;dropdown-toggle-split" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" value=""><span class="sr-only">Toggle Dropdown</span></button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="&#x23;">Separated link</a>
    </div>
</div>

####### **Source**

```php
// Dropup button
echo $this->formButton([
    'name' => 'dropup',
    'options' => [
        'label' => 'Dropup',
        'size' => 'lg',
        'dropdown' => [
            'direction' => 'up',
            'attributes' => ['class' => 'btn-group'],
            'items' => [
                'Action',
                'Another action',
                'Something else here',
                '---',
                'Separated link',
            ]
        ],
    ],
]) . PHP_EOL;

// Dropup split button
echo $this->formButton([
    'name' => 'split-dropup',
    'options' => [
        'label' => 'Split dropup',
        'size' => 'lg',
        'dropdown' => [
            'direction' => 'up',
            'split' => 'Toggle Dropdown',
            'items' => [
                'Action',
                'Another action',
                'Something else here',
                '---',
                'Separated link',
            ],
        ],
    ],
]);
```

<!-- tabs:end -->


###### Dropright
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/dropdowns/#dropright)
<!-- tabs:start -->

####### **Result**

<div class="btn-group&#x20;dropright">
    <button type="button" name="dropright" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-lg&#x20;btn-secondary&#x20;dropdown-toggle" value="">Dropright</button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="&#x23;">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropright">
    <button type="button" name="split-dropright" class="btn&#x20;btn-lg&#x20;btn-secondary" value="">Split dropright</button>
    <button type="button" name="split-dropright-toggle" class="btn&#x20;btn-lg&#x20;btn-secondary&#x20;dropdown-toggle&#x20;dropdown-toggle-split" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" value=""><span class="sr-only">Toggle Dropdown</span></button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="&#x23;">Separated link</a>
    </div>
</div>

####### **Source**

```php
// Dropright button
echo $this->formButton([
    'name' => 'dropright',
    'options' => [
        'label' => 'Dropright',
        'size' => 'lg',
        'dropdown' => [
            'direction' => 'right',
            'attributes' => ['class' => 'btn-group'],
            'items' => [
                'Action',
                'Another action',
                'Something else here',
                '---',
                'Separated link',
            ],
        ],
    ],
]) . PHP_EOL;

// Dropright split button
echo $this->formButton([
    'name' => 'split-dropright',
    'options' => [
        'label' => 'Split dropright',
        'size' => 'lg',
        'dropdown' => [
            'direction' => 'right',
            'split' => 'Toggle Dropdown',
            'items' => [
                'Action',
                'Another action',
                'Something else here',
                '---',
                'Separated link',
            ],
        ],
    ],
]);
```

<!-- tabs:end -->


##### Menu items
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/dropdowns/#menu-items)
<!-- tabs:start -->

###### **Result**

<div class="dropdown">
    <button type="button" name="dropdown" id="dropdownMenu2" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-secondary&#x20;dropdown-toggle" value="">Dropdown</button>
    <div aria-labelledby="dropdownMenu2" class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
    </div>
</div>
<br/>
<div class="dropdown-menu">
    <span class="dropdown-item-text">Dropdown item text</span>
    <a class="dropdown-item" href="&#x23;">Action</a>
    <a class="dropdown-item" href="&#x23;">Another action</a>
    <a class="dropdown-item" href="&#x23;">Something else here</a>
</div>

###### **Source**

```php
echo $this->formButton([
    'name' => 'dropdown',
    'options' => [
        'label' => 'Dropdown',
        'dropdown' => ['Action', 'Another action', 'Something else here'],
    ],
    'attributes' => ['id' => 'dropdownMenu2'],
]);

echo PHP_EOL . '<br/>' . PHP_EOL;

// Non-interactive dropdown items
echo $this->dropdown()->renderMenu([
    'Dropdown item text' => \TwbsHelper\View\Helper\Dropdown::TYPE_ITEM_TEXT,
    'Action',
    'Another action',
    'Something else here'
]);
```

<!-- tabs:end -->


###### Active
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/dropdowns/#active)
<!-- tabs:start -->

####### **Result**

<div class="dropdown-menu">
    <a class="dropdown-item" href="&#x23;">Regular link</a>
    <a class="active&#x20;dropdown-item" href="&#x23;">Active link</a>
    <a class="dropdown-item" href="&#x23;">Another link</a>
</div>

####### **Source**

```php
echo $this->dropdown()->renderMenu([
    'Regular link',
    'Active link' => ['active' => true],
    'Another link'
]);
```

<!-- tabs:end -->


###### Disabled
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/dropdowns/#disabled)
<!-- tabs:start -->

####### **Result**

<div class="dropdown-menu">
    <a class="dropdown-item" href="&#x23;">Regular link</a>
    <a aria-disabled="true" class="disabled&#x20;dropdown-item" href="&#x23;" tabindex="-1">Disabled link</a>
    <a class="dropdown-item" href="&#x23;">Another link</a>
</div>

####### **Source**

```php
echo $this->dropdown()->renderMenu([
    'Regular link',
    'Disabled link' => ['disabled' => true],
    'Another link'
]);
```

<!-- tabs:end -->


##### Menu alignment
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/dropdowns/#menu-alignment)
<!-- tabs:start -->

###### **Result**

<div class="dropdown">
    <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-secondary&#x20;dropdown-toggle" value="">Right-aligned menu</button>
    <div class="dropdown-menu&#x20;dropdown-menu-right">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
    </div>
</div>

###### **Source**

```php
echo $this->formButton([
    'name' => 'dropdown',
    'options' => [
        'label' => 'Right-aligned menu',
        'dropdown' => [
            'alignment' => 'right',
            'items' => ['Action', 'Another action', 'Something else here'],
        ],
    ],
]);
```

<!-- tabs:end -->


###### Responsive alignment
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/dropdowns/#responsive-alignment)
<!-- tabs:start -->

####### **Result**

<div class="dropdown">
    <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-secondary&#x20;dropdown-toggle" value="">Left-aligned but right aligned when large screen</button>
    <div class="dropdown-menu&#x20;dropdown-menu-lg-right">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
    </div>
</div>
<br/>
<div class="dropdown">
    <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-secondary&#x20;dropdown-toggle" value="">Left-aligned but right aligned when large screen</button>
    <div class="dropdown-menu&#x20;dropdown-menu-lg-left&#x20;dropdown-menu-right">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
    </div>
</div>

####### **Source**

```php
echo $this->formButton([
    'name' => 'dropdown',
    'options' => [
        'label' => 'Left-aligned but right aligned when large screen',
        'dropdown' => [
            'alignment' => 'lg-right',
            'items' => ['Action', 'Another action', 'Something else here'],
        ],
    ],
]);

echo PHP_EOL . '<br/>' . PHP_EOL;

echo $this->formButton([
    'name' => 'dropdown',
    'options' => [
        'label' => 'Left-aligned but right aligned when large screen',
        'dropdown' => [
            'alignment' => ['right', 'lg-left'],
            'items' => ['Action', 'Another action', 'Something else here'],
        ],
    ],
]);
```

<!-- tabs:end -->


##### Menu content
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/dropdowns/#menu-content)
###### Headers
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/dropdowns/#headers)
<!-- tabs:start -->

####### **Result**

<div class="dropdown-menu">
    <h6 class="dropdown-header">Dropdown header</h6>
    <a class="dropdown-item" href="&#x23;">Action</a>
    <a class="dropdown-item" href="&#x23;">Another action</a>
</div>

####### **Source**

```php
echo $this->dropdown()->renderMenu([
    'Dropdown header' => \TwbsHelper\View\Helper\Dropdown::TYPE_ITEM_HEADER,
    'Action',
    'Another action',
]);
```

<!-- tabs:end -->


###### Dividers
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/dropdowns/#headers)
<!-- tabs:start -->

####### **Result**

<div class="dropdown-menu">
    <a class="dropdown-item" href="&#x23;">Action</a>
    <a class="dropdown-item" href="&#x23;">Another action</a>
    <a class="dropdown-item" href="&#x23;">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="&#x23;">Separated link</a>
</div>

####### **Source**

```php
echo $this->dropdown()->renderMenu([
    'Action',
    'Another action',
    'Something else here',
    '---',
    'Separated link',
]);
```

<!-- tabs:end -->


###### Text
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/dropdowns/#headers)
<!-- tabs:start -->

####### **Result**

<div class="dropdown-menu&#x20;p-4&#x20;text-muted" style="max-width&#x3A;&#x20;200px&#x3B;">
    <p>Some example text that's free-flowing within the dropdown menu.</p>
    <p class="mb-0">And this is more example text.</p>
</div>

####### **Source**

```php
echo $this->dropdown()->renderMenu([
    '<p>Some example text that\'s free-flowing within the dropdown menu.</p>',
    '<p class="mb-0">And this is more example text.</p>',
], ['class' => 'p-4 text-muted', 'style' => 'max-width: 200px;']);
```

<!-- tabs:end -->


###### Forms
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/dropdowns/#forms)
<!-- tabs:start -->

####### **Result**

<div class="dropdown-menu">
    <form action="" method="POST" name="dropdown" id="dropdown" role="form">
        <div class="mb-3">
            <label class="form-label" for="exampleDropdownFormEmail1">Email address</label>
            <input name="email" type="email" id="exampleDropdownFormEmail1" placeholder="email&#x40;example.com" class="form-control" value=""/>
        </div>
        <div class="mb-3">
            <label class="form-label" for="exampleDropdownFormPassword1">Password</label>
            <input name="password" type="password" id="exampleDropdownFormPassword1" placeholder="Password" class="form-control" value=""/>
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input type="checkbox" name="remember_me" id="dropdownCheck" class="form-check-input" value="1"/>
                <label class="form-check-label" for="dropdownCheck">Remember me</label>
            </div>
        </div>
        <div class="mb-3">
            <button type="submit" name="submit" class="btn&#x20;btn-primary" value="">Sign in</button>
        </div>
    </form>
    <a class="dropdown-item" href="&#x23;">New around here? Sign up</a>
    <a class="dropdown-item" href="&#x23;">Forgot password?</a>
</div>

####### **Source**

```php
// Create form
$oFactory = new \Laminas\Form\Factory();
$oForm = $oFactory->create([
    'type' => 'form',
    'name' => 'dropdown',
    'attributes' => ['id' => 'dropdown'],
    'elements' => [
        [
            'spec' => [
                'name' => 'email',
                'options' => ['label' => 'Email address'],
                'attributes' => [
                    'type' => 'email',
                    'id' => 'exampleDropdownFormEmail1',
                    'placeholder' => 'email@example.com',
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'password',
                'options' => ['label' => 'Password'],
                'attributes' => [
                    'type' => 'password',
                    'id' => 'exampleDropdownFormPassword1',
                    'placeholder' => 'Password',
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'checkbox',
                'name' => 'remember_me',
                'options' => ['label' => 'Remember me', 'use_hidden_element' => false],
                'attributes' => [
                    'id' => 'dropdownCheck',
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'submit',
                'options' => ['label' => 'Sign in', 'variant' => 'primary'],
            ],
        ],
    ]
]);

echo $this->dropdown()->renderMenu([
    $oForm,
    'New around here? Sign up',
    'Forgot password?',
]);
```

<!-- tabs:end -->


##### Dropdown options
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/dropdowns/#dropdown-options)
<!-- tabs:start -->

###### **Result**

<div class="d-flex">
<div class="dropdown&#x20;mr-1">
    <button type="button" name="dropdown" id="dropdownMenuOffset" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-offset="10,20" class="btn&#x20;btn-secondary&#x20;dropdown-toggle" value="">Offset</button>
    <div aria-labelledby="dropdownMenuOffset" class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" id="dropdownMenuReference" class="btn&#x20;btn-secondary" value="">Reference</button>
    <button type="button" name="dropdown-toggle" class="btn&#x20;btn-secondary&#x20;dropdown-toggle&#x20;dropdown-toggle-split" data-reference="parent" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" value=""><span class="sr-only">Reference</span></button>
    <div aria-labelledby="dropdownMenuReference" class="dropdown-menu">
        <a class="dropdown-item" href="&#x23;">Action</a>
        <a class="dropdown-item" href="&#x23;">Another action</a>
        <a class="dropdown-item" href="&#x23;">Something else here</a>
    </div>
</div>
</div>

###### **Source**

```php
echo '<div class="d-flex">' . PHP_EOL;

echo $this->formButton([
    'name' => 'dropdown',
    'options' => [
        'label' => 'Offset',
        'dropdown' => [
            'attributes' => ['class' => 'mr-1'],
            'offset' => '10,20',
            'items' => ['Action', 'Another action', 'Something else here'],
        ],
    ],
    'attributes' => ['id' => 'dropdownMenuOffset'],
]) . PHP_EOL;

echo $this->formButton([
    'name' => 'dropdown',
    'options' => [
        'label' => 'Reference',
        'dropdown' => [
            'split' => [
                'attributes' => ['data-reference' => 'parent'],
            ],
            'items' => ['Action', 'Another action', 'Something else here'],
        ],
    ],
    'attributes' => ['id' => 'dropdownMenuReference'],
]);


echo PHP_EOL . '</div>';
```

<!-- tabs:end -->


#### Forms
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/)
##### Overview
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#overview)
<!-- tabs:start -->

###### **Result**

<form action="" method="POST" name="form" role="form" id="form">
    <div class="mb-3">
        <label class="form-label" for="exampleInputEmail1">Email address</label>
        <input name="email" type="email" id="exampleInputEmail1" placeholder="Enter&#x20;email" class="form-control" value=""/>
        <small class="form-text&#x20;text-muted" id="emailHelp">We&#039;ll never share your email with anyone else.</small>
    </div>
    <div class="mb-3">
        <label class="form-label" for="exampleInputPassword1">Password</label>
        <input name="password" type="password" id="exampleInputPassword1" placeholder="Password" class="form-control" value=""/>
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input type="checkbox" name="remember_me" id="exampleCheck1" class="form-check-input" value="1"/>
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
    </div>
    <div class="mb-3">
        <button type="submit" name="submit" class="btn&#x20;btn-primary" value="">Submit</button>
    </div>
</form>

###### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->form($oFactory->create([
    'type' => 'form',
    'elements' => [
        [
            'spec' => [
                'name' => 'email',
                'options' => [
                    'label' => 'Email address',
                    'help_block' => [
                        'content' => 'We\'ll never share your email with anyone else.',
                        'attributes' => ['id' => 'emailHelp'],
                    ]
                ],
                'attributes' => [
                    'type' => 'email',
                    'id' => 'exampleInputEmail1',
                    'placeholder' => 'Enter email',
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'password',
                'options' => ['label' => 'Password'],
                'attributes' => [
                    'type' => 'password',
                    'id' => 'exampleInputPassword1',
                    'placeholder' => 'Password',
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'checkbox',
                'name' => 'remember_me',
                'options' => ['label' => 'Check me out', 'use_hidden_element' => false],
                'attributes' => [
                    'id' => 'exampleCheck1',
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'submit',
                'options' => ['label' => 'Submit', 'variant' => 'primary'],
            ],
        ],
    ]
]));
```

<!-- tabs:end -->


##### Form controls
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#form-controls)
<!-- tabs:start -->

###### **Result**

<form action="" method="POST" name="form" role="form" id="form">
    <div class="mb-3">
        <label class="form-label" for="exampleFormControlInput1">Email address</label>
        <input name="email" type="email" id="exampleFormControlInput1" placeholder="name&#x40;example.com" class="form-control" value=""/>
    </div>
    <div class="mb-3">
        <label class="form-label" for="exampleFormControlSelect1">Example select</label>
        <select name="select" id="exampleFormControlSelect1" class="form-select">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label" for="exampleFormControlSelect2">Example multiple select</label>
        <select name="multiple_select&#x5B;&#x5D;" id="exampleFormControlSelect2" multiple="multiple" class="form-select">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label" for="exampleFormControlTextarea1">Example textarea</label>
        <textarea name="textarea" id="exampleFormControlTextarea1" rows="3" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label" for="exampleFormControlFile1">Example file input</label>
        <input name="file_input" type="file" id="exampleFormControlFile1" class="form-control"/>
    </div>
</form>

###### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->form($oFactory->create([
    'type' => 'form',
    'elements' => [
        [
            'spec' => [
                'name' => 'email',
                'options' => [
                    'label' => 'Email address'
                ],
                'attributes' => [
                    'type' => 'email',
                    'id' => 'exampleFormControlInput1',
                    'placeholder' => 'name@example.com',
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'select',
                'type' => 'select',
                'options' => [
                    'label' => 'Example select',
                    'value_options' => [
                        1 => 1,
                        2 => 2,
                        3 => 3,
                        4 => 4,
                        5 => 5,
                    ],
                ],
                'attributes' => [
                    'id' => 'exampleFormControlSelect1',
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'multiple_select',
                'type' => 'select',
                'options' => [
                    'label' => 'Example multiple select',
                    'value_options' => [
                        1 => 1,
                        2 => 2,
                        3 => 3,
                        4 => 4,
                        5 => 5,
                    ],
                ],
                'attributes' => [
                    'id' => 'exampleFormControlSelect2',
                    'multiple' => true,
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'textarea',
                'options' => [
                    'label' => 'Example textarea'
                ],
                'attributes' => [
                    'type' => 'textarea',
                    'id' => 'exampleFormControlTextarea1',
                    'rows' => 3,
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'file_input',
                'options' => [
                    'label' => 'Example file input'
                ],
                'attributes' => [
                    'type' => 'file',
                    'id' => 'exampleFormControlFile1',
                ],
            ],
        ],
    ],
]));
```

<!-- tabs:end -->


###### Sizing
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#sizing)
<!-- tabs:start -->

####### **Result**

<input type="text" name="lg" placeholder=".form-control-lg" class="form-control&#x20;form-control-lg" value=""/>
<br/>
<input type="text" name="default" placeholder="Default&#x20;input" class="form-control" value=""/>
<br/>
<input type="text" name="sm" placeholder=".form-control-sm" class="form-control&#x20;form-control-sm" value=""/>
<br/>
<select name="lg" class="form-select&#x20;form-select-lg"><option value="0">Large select</option></select>
<br/>
<select name="default" class="form-select"><option value="0">Default select</option></select>
<br/>
<select name="sm" class="form-select&#x20;form-select-sm"><option value="0">Small select</option></select>
<br/>


####### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

// Render large input
$oElement = $oFactory->create([
    'name' => 'lg',
    'type' => 'text',
    'options' => ['size' => 'lg'],
    'attributes' => ['placeholder' => '.form-control-lg'],
]);
echo $this->formElement($oElement) . PHP_EOL . '<br/>' . PHP_EOL;

// Render default input
$oElement = $oFactory->create([
    'name' => 'default',
    'type' => 'text',
    'attributes' => ['placeholder' => 'Default input'],
]);
echo $this->formElement($oElement) . PHP_EOL . '<br/>' . PHP_EOL;

// Render small input
$oElement = $oFactory->create([
    'name' => 'sm',
    'type' => 'text',
    'options' => ['size' => 'sm'],
    'attributes' => ['placeholder' => '.form-control-sm'],
]);
echo $this->formElement($oElement) . PHP_EOL . '<br/>' . PHP_EOL;

// Render large select
$oElement = $oFactory->create([
    'name' => 'lg',
    'type' => 'select',
    'options' => ['size' => 'lg', 'value_options' => ['Large select']],
    'attributes' => ['placeholder' => '.form-control-lg'],
]);
echo $this->formElement($oElement) . PHP_EOL . '<br/>' . PHP_EOL;

// Render default select
$oElement = $oFactory->create([
    'name' => 'default',
    'type' => 'select',
    'options' => ['value_options' => ['Default select']],
    'attributes' => ['placeholder' => 'Default input'],
]);
echo $this->formElement($oElement) . PHP_EOL . '<br/>' . PHP_EOL;

// Render small select
$oElement = $oFactory->create([
    'name' => 'sm',
    'type' => 'select',
    'options' => ['size' => 'sm', 'value_options' => ['Small select']],
    'attributes' => ['placeholder' => '.form-control-sm'],
]);
echo $this->formElement($oElement) . PHP_EOL . '<br/>' . PHP_EOL;
```

<!-- tabs:end -->


###### Readonly
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#readonly)
<!-- tabs:start -->

####### **Result**

<input type="text" name="readonly-input" readonly="readonly" placeholder="Readonly&#x20;input&#x20;here..." class="form-control" value=""/>

####### **Source**

```php
// Render element
$oFactory = new \Laminas\Form\Factory();
$oElement = $oFactory->create([
    'name' => 'readonly-input',
    'type' => 'text',
    'attributes' => ['readonly' => true, 'placeholder' => 'Readonly input here...'],
]);
echo $this->formElement($oElement);
```

<!-- tabs:end -->


###### Readonly plain text
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#readonly-plain-text)
<!-- tabs:start -->

####### **Result**

<form action="" method="POST" name="form" role="form" id="form">
    <div class="mb-3&#x20;row">
        <label class="col-form-label&#x20;col-sm-2&#x20;form-label" for="staticEmail">Email</label>
        <div class="col-sm-10">
            <input name="email" type="email" id="staticEmail" readonly="readonly" class="form-control-plaintext" value="email&#x40;example.com"/>
        </div>
    </div>
    <div class="mb-3&#x20;row">
        <label class="col-form-label&#x20;col-sm-2&#x20;form-label" for="inputPassword">Password</label>
        <div class="col-sm-10">
            <input name="password" type="password" id="inputPassword" placeholder="Password" class="form-control" value=""/>
        </div>
    </div>
</form>
<br/>
<form action="" method="POST" name="form" role="form" class="form-inline" id="form">
    <div class="mb-3">
        <label class="form-label&#x20;sr-only" for="staticEmail2">Email</label>
        <input name="email" type="email" id="staticEmail2" readonly="readonly" class="form-control-plaintext" value="email&#x40;example.com"/>
    </div>
    <div class="mb-3&#x20;mx-sm-3">
        <label class="form-label&#x20;sr-only" for="inputPassword2">Password</label>
        <input name="password" type="password" id="inputPassword2" placeholder="Password" class="form-control" value=""/>
    </div>
    <button type="submit" name="submit" class="btn&#x20;btn-primary&#x20;mb-2" value="">Confirm identity</button>
</form>

####### **Source**

```php
$oFactory = new \Laminas\Form\Factory();
// Render horizontal form
$oForm = $oFactory->create([
    'type' => 'form',
    'options' => ['layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL],
    'elements' => [
        [
            'spec' => [
                'name' => 'email',
                'options' => [
                    'plaintext' => true,
                    'column' => 'sm-10',
                    'label' => 'Email',
                ],
                'attributes' => [
                    'type' => 'email',
                    'id' => 'staticEmail',
                    'value' => 'email@example.com',
                    'readonly' => true,
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'password',
                'options' => [
                    'column' => 'sm-10',
                    'label' => 'Password',
                ],
                'attributes' => [
                    'type' => 'password',
                    'id' => 'inputPassword',
                    'placeholder' => 'Password',
                ],
            ],
        ],
    ],
]);

echo $this->form($oForm);

echo PHP_EOL . '<br/>' . PHP_EOL;

// Render inline form
echo $this->form($oFactory->create([
    'type' => 'form',
    'options' => ['layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE],
    'elements' => [
        [
            'spec' => [
                'name' => 'email',
                'options' => [
                    'plaintext' => true,
                    'label' => 'Email',
                ],
                'attributes' => [
                    'type' => 'email',
                    'id' => 'staticEmail2',
                    'value' => 'email@example.com',
                    'readonly' => true,
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'password',
                'options' => [
                    'label' => 'Password',
                    'row_class' => 'mx-sm-3',
                ],
                'attributes' => [
                    'type' => 'password',
                    'id' => 'inputPassword2',
                    'placeholder' => 'Password',
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'submit',
                'options' => ['label' => 'Confirm identity', 'variant' => 'primary'],
                'attributes' => ['class' => 'mb-2'],
            ],
        ],
    ],
]));
```

<!-- tabs:end -->


##### Range Inputs
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#range-inputs)
<!-- tabs:start -->

###### **Result**

<form action="" method="POST" name="form" role="form" id="form">
    <div class="mb-3">
        <label class="form-label" for="formControlRange">Example Range input</label>
        <input name="range" type="range" id="formControlRange" class="form-control-range" value=""/>
    </div>
</form>

###### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->form($oFactory->create([
    'type' => 'form',
    'elements' => [
        [
            'spec' => [
                'name' => 'range',
                'options' => [
                    'label' => 'Example Range input'
                ],
                'attributes' => [
                    'type' => 'range',
                    'id' => 'formControlRange',
                ],
            ],
        ],
    ]
]));
```

<!-- tabs:end -->


##### Checkboxes and radios
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#checkboxes-and-radios)
###### Default (stacked)
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#default-stacked)
<!-- tabs:start -->

####### **Result**

<div class="form-check">
    <input type="checkbox" name="default-checkbox" id="defaultCheck1" class="form-check-input" value="1"/>
    <label class="form-check-label" for="defaultCheck1">Default checkbox</label>
</div>
<div class="form-check">
    <input type="checkbox" name="disabled-checkbox" id="defaultCheck2" disabled="disabled" class="form-check-input" value="1"/>
    <label class="form-check-label" for="defaultCheck2">Disabled checkbox</label>
</div>
<br/>
<div class="form-check">
    <input type="radio" name="exampleRadios" class="form-check-input" id="exampleRadios1" value="option1"/>
    <label class="form-check-label" for="exampleRadios1">Default radio</label>
</div>
<div class="form-check">
    <input type="radio" name="exampleRadios" class="form-check-input" id="exampleRadios2" value="option2"/>
    <label class="form-check-label" for="exampleRadios2">Second default radio</label>
</div>
<div class="form-check">
    <input type="radio" name="exampleRadios" class="form-check-input" id="exampleRadios3" value="option1" disabled="disabled"/>
    <label class="form-check-label" for="exampleRadios3">Disabled radio</label>
</div>

####### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

// Render Default checkbox
echo $this->formRow($oFactory->create([
    'name' => 'default-checkbox',
    'type' => 'checkbox',
    'options' => [
        'label' => 'Default checkbox',
        'use_hidden_element' => false,
        'form_group' => false,
    ],
    'attributes' => [
        'id' => 'defaultCheck1',
    ],
])) . PHP_EOL;

// Render Disabled checkbox
echo $this->formRow($oFactory->create([
    'name' => 'disabled-checkbox',
    'type' => 'checkbox',
    'options' => [
        'label' => 'Disabled checkbox',
        'use_hidden_element' => false,
        'form_group' => false,
    ],
    'attributes' => [
        'id' => 'defaultCheck2',
        'disabled' => true,
    ],
]));

echo PHP_EOL . '<br/>' . PHP_EOL;

// Render radio
echo $this->formRow($oFactory->create([
    'name' => 'exampleRadios',
    'type' => 'radio',
    'options' => [
        'form_group' => false,
        'value_options' => [
            [
                'label' => 'Default radio',
                'value' => 'option1',
                'attributes' => ['id' => 'exampleRadios1'],
            ],
            [
                'label' => 'Second default radio',
                'value' => 'option2',
                'attributes' => ['id' => 'exampleRadios2'],
            ],
            [
                'label' => 'Disabled radio',
                'value' => 'option1',
                'disabled' => true,
                'attributes' => ['id' => 'exampleRadios3'],
            ],
        ],
    ],
]));
```

<!-- tabs:end -->


###### Inline
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#inline)
<!-- tabs:start -->

####### **Result**

<div class="form-check&#x20;form-check-inline">
    <input type="checkbox" name="inlineCheckboxOptions&#x5B;&#x5D;" class="form-check-input" id="inlineCheckbox1" value="option1"/>
    <label class="form-check-label" for="inlineCheckbox1">1</label>
</div>
<div class="form-check&#x20;form-check-inline">
    <input type="checkbox" name="inlineCheckboxOptions&#x5B;&#x5D;" class="form-check-input" id="inlineCheckbox2" value="option2"/>
    <label class="form-check-label" for="inlineCheckbox2">2</label>
</div>
<div class="form-check&#x20;form-check-inline">
    <input type="checkbox" name="inlineCheckboxOptions&#x5B;&#x5D;" class="form-check-input" id="inlineCheckbox3" value="option3" disabled="disabled"/>
    <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
</div>
<br/>
<div class="form-check&#x20;form-check-inline">
    <input type="radio" name="inlineRadioOptions" class="form-check-input" id="inlineRadio1" value="option1"/>
    <label class="form-check-label" for="inlineRadio1">1</label>
</div>
<div class="form-check&#x20;form-check-inline">
    <input type="radio" name="inlineRadioOptions" class="form-check-input" id="inlineRadio2" value="option2"/>
    <label class="form-check-label" for="inlineRadio2">2</label>
</div>
<div class="form-check&#x20;form-check-inline">
    <input type="radio" name="inlineRadioOptions" class="form-check-input" id="inlineRadio3" value="option3" disabled="disabled"/>
    <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
</div>

####### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

// Render checkbox
echo $this->formRow($oFactory->create([
    'name' => 'inlineCheckboxOptions',
    'type' => 'multicheckbox',
    'options' => [
        'layout' => 'inline',
        'form_group' => false,
        'value_options' => [
            [
                'label' => '1',
                'value' => 'option1',
                'attributes' => ['id' => 'inlineCheckbox1'],
            ],
            [
                'label' => '2',
                'value' => 'option2',
                'attributes' => ['id' => 'inlineCheckbox2'],
            ],
            [
                'label' => '3 (disabled)',
                'value' => 'option3',
                'disabled' => true,
                'attributes' => ['id' => 'inlineCheckbox3'],
            ],
        ],
    ],
]));

echo PHP_EOL . '<br/>' . PHP_EOL;

// Render radio
echo $this->formRow($oFactory->create([
    'name' => 'inlineRadioOptions',
    'type' => 'radio',
    'options' => [
        'layout' => 'inline',
        'form_group' => false,
        'value_options' => [
            [
                'label' => '1',
                'value' => 'option1',
                'attributes' => ['id' => 'inlineRadio1'],
            ],
            [
                'label' => '2',
                'value' => 'option2',
                'attributes' => ['id' => 'inlineRadio2'],
            ],
            [
                'label' => '3 (disabled)',
                'value' => 'option3',
                'disabled' => true,
                'attributes' => ['id' => 'inlineRadio3'],
            ],
        ],
    ],
]));
```

<!-- tabs:end -->


###### Without labels
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#without-labels)
<!-- tabs:start -->

####### **Result**

<div class="form-check">
    <input type="checkbox" name="blankCheckbox&#x5B;&#x5D;" class="form-check-input&#x20;position-static" id="blankCheckbox" aria-label="..." value="option1"/>
</div>
<div class="form-check">
    <input type="radio" name="blankRadio" class="form-check-input&#x20;position-static" id="blankRadio1" aria-label="..." value="option1"/>
</div>

####### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

// Render checkbox
echo $this->formRow($oFactory->create([
    'name' => 'blankCheckbox',
    'type' => 'multicheckbox',
    'options' => [
        'form_group' => false,
        'value_options' => [
            [
                'label' => '',
                'value' => 'option1',
                'attributes' => ['id' => 'blankCheckbox', 'aria-label' => '...'],
            ],
        ],
    ],
])) . PHP_EOL;

// Render radio
echo $this->formRow($oFactory->create([
    'name' => 'blankRadio',
    'type' => 'radio',
    'options' => [
        'form_group' => false,
        'value_options' => [
            [
                'label' => '',
                'value' => 'option1',
                'attributes' => ['id' => 'blankRadio1', 'aria-label' => '...'],
            ],
        ],
    ],
]));
```

<!-- tabs:end -->


##### Layout
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#layout)
###### Form groups
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#mb-3s)
<!-- tabs:start -->

####### **Result**

<form action="" method="POST" name="form" role="form" id="form">
    <div class="mb-3">
        <label class="form-label" for="formGroupExampleInput">Example label</label>
        <input name="exampleInput" type="text" id="formGroupExampleInput" placeholder="Example&#x20;input" class="form-control" value=""/>
    </div>
    <div class="mb-3">
        <label class="form-label" for="formGroupExampleInput2">Another label</label>
        <input name="exampleInput2" type="text" id="formGroupExampleInput2" placeholder="Another&#x20;input" class="form-control" value=""/>
    </div>
</form>

####### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->form($oFactory->create([
    'type' => 'form',
    'elements' => [
        [
            'spec' => [
                'name' => 'exampleInput',
                'options' => [
                    'label' => 'Example label',
                ],
                'attributes' => [
                    'type' => 'text',
                    'id' => 'formGroupExampleInput',
                    'placeholder' => 'Example input',
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'exampleInput2',
                'options' => [
                    'label' => 'Another label',
                ],
                'attributes' => [
                    'type' => 'text',
                    'id' => 'formGroupExampleInput2',
                    'placeholder' => 'Another input',
                ],
            ],
        ],
    ]
]));
```

<!-- tabs:end -->


###### Form grid
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#form-grid)
<!-- tabs:start -->

####### **Result**

<form action="" method="POST" name="form" role="form" id="form">
    <div class="row">
        <div class="col&#x20;mb-3">
            <input name="firstName" type="text" placeholder="First&#x20;name" class="form-control" value=""/>
        </div>
        <div class="col&#x20;mb-3">
            <input name="lastName" type="text" placeholder="Last&#x20;name" class="form-control" value=""/>
        </div>
    </div>
</form>

####### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->form($oFactory->create([
    'type' => 'form',
    'elements' => [
        [
            'spec' => [
                'name' => 'firstName',
                'options' => [
                    'column' => true,
                ],
                'attributes' => [
                    'type' => 'text',
                    'placeholder' => 'First name',
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'lastName',
                'options' => [
                    'column' => true,
                ],
                'attributes' => [
                    'type' => 'text',
                    'placeholder' => 'Last name',
                ],
            ],
        ],
    ]
]));
```

<!-- tabs:end -->


####### Form row
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#form-row)
<!-- tabs:start -->

######## **Result**

<form action="" method="POST" name="form" role="form" id="form">
    <div class="form-row">
        <div class="col&#x20;mb-3">
            <input name="firstName" type="text" placeholder="First&#x20;name" class="form-control" value=""/>
        </div>
        <div class="col&#x20;mb-3">
            <input name="lastName" type="text" placeholder="Last&#x20;name" class="form-control" value=""/>
        </div>
    </div>
</form>

######## **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->form($oFactory->create([
    'type' => 'form',
    'options' => ['row_class' => 'form-row'],
    'elements' => [
        [
            'spec' => [
                'name' => 'firstName',
                'options' => [
                    'column' => true,
                ],
                'attributes' => [
                    'type' => 'text',
                    'placeholder' => 'First name',
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'lastName',
                'options' => [
                    'column' => true,
                ],
                'attributes' => [
                    'type' => 'text',
                    'placeholder' => 'Last name',
                ],
            ],
        ],
    ]
]));
```

<!-- tabs:end -->


####### Horizontal form
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#horizontal-form)
<!-- tabs:start -->

######## **Result**

<form action="" method="POST" name="form" role="form" id="form">
    <div class="mb-3&#x20;row">
        <label class="col-form-label&#x20;col-sm-2&#x20;form-label" for="inputEmail3">Email</label>
        <div class="col-sm-10">
            <input name="email" type="email" id="inputEmail3" placeholder="Email" class="form-control" value=""/>
        </div>
    </div>
    <div class="mb-3&#x20;row">
        <label class="col-form-label&#x20;col-sm-2&#x20;form-label" for="inputPassword3">Password</label>
        <div class="col-sm-10">
            <input name="password" type="password" id="inputPassword3" placeholder="Password" class="form-control" value=""/>
        </div>
    </div>
    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label&#x20;col-sm-2&#x20;pt-0">Radios</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input type="radio" name="fieldset&#x5B;gridRadios&#x5D;" class="form-check-input" id="gridRadios1" value="option1"/>
                    <label class="form-check-label" for="gridRadios1">First radio</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="fieldset&#x5B;gridRadios&#x5D;" class="form-check-input" id="gridRadios2" value="option2"/>
                    <label class="form-check-label" for="gridRadios2">Second radio</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="fieldset&#x5B;gridRadios&#x5D;" class="form-check-input" id="gridRadios3" value="option3" disabled="disabled"/>
                    <label class="form-check-label" for="gridRadios3">Third disabled radio</label>
                </div>
            </div>
        </div>
    </fieldset>
    <div class="mb-3&#x20;row">
        <div class="col-sm-10&#x20;offset-sm-2">
            <div class="form-check">
                <input type="hidden" name="checkbox" value="0"/><input type="checkbox" name="checkbox" class="form-check-input" value="1"/>
                <label class="form-check-label" for="checkbox">Checkbox</label>
            </div>
        </div>
    </div>
    <div class="mb-3&#x20;row">
        <div class="col-sm-2">
            Multicheckbox
        </div>
        <div class="col-sm-10">
            <div class="form-check">
                <input type="checkbox" name="multicheckbox&#x5B;&#x5D;" class="form-check-input" id="gridCheck1" value="1"/>
                <label class="form-check-label" for="gridCheck1">Example checkbox</label>
            </div>
        </div>
    </div>
    <div class="mb-3&#x20;row">
        <div class="col-sm-10">
            <button type="submit" name="submit" class="btn&#x20;btn-primary" value="">Sign in</button>
        </div>
    </div>
</form>

######## **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->form($oFactory->create([
    'type' => 'form',
    'options' => ['layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL],
    'elements' => [
        [
            'spec' => [
                'name' => 'email',
                'options' => [
                    'label' => 'Email',
                    'column' => 'sm-10',
                ],
                'attributes' => [
                    'type' => 'email',
                    'id' => 'inputEmail3',
                    'placeholder' => 'Email',
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'password',
                'options' => [
                    'label' => 'Password',
                    'column' => 'sm-10',
                ],
                'attributes' => [
                    'type' => 'password',
                    'id' => 'inputPassword3',
                    'placeholder' => 'Password',
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'fieldset',
                'options' => [
                    'label' => 'Radios',
                    'label_attributes' => ['class' => 'pt-0'],
                    'column' => 'sm-10',
                ],
                'elements' => [
                    [
                        'spec' => [
                            'type' => 'radio',
                            'name' => 'gridRadios',
                            'options' => [
                                'column' => 'sm-10',
                                'value_options' => [
                                    [
                                        'label' => 'First radio',
                                        'attributes' => ['id' => 'gridRadios1'],
                                        'value' => 'option1',
                                    ],
                                    [
                                        'label' => 'Second radio',
                                        'attributes' => ['id' => 'gridRadios2'],
                                        'value' => 'option2',
                                    ],
                                    [
                                        'label' => 'Third disabled radio',
                                        'disabled' => true,
                                        'attributes' => ['id' => 'gridRadios3'],
                                        'value' => 'option3',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'checkbox',
                'options' => [
                    'label' => 'Checkbox',
                    'column' => 'sm-10',
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'multicheckbox',
                'options' => [
                    'label' => 'Multicheckbox',
                    'column' => 'sm-10',
                    'value_options' => [
                        [
                            'label' => 'Example checkbox',
                            'attributes' => ['id' => 'gridCheck1'],
                            'value' => 1,
                        ],
                    ],
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'submit',
                'options' => [
                    'label' => 'Sign in',
                    'variant' => 'primary',
                    'column' => 'sm-10',
                ],
            ],
        ],
    ]
]));
```

<!-- tabs:end -->


######## Horizontal form label sizing
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#horizontal-form-label-sizing)
<!-- tabs:start -->

######### **Result**

<form action="" method="POST" name="form" role="form" id="form">
    <div class="mb-3&#x20;row">
        <label class="col-form-label&#x20;col-form-label-sm&#x20;col-sm-2&#x20;form-label" for="colFormLabelSm">Email</label>
        <div class="col-sm-10">
            <input name="emailSm" type="email" id="colFormLabelSm" placeholder="col-form-label-sm" class="form-control&#x20;form-control-sm" value=""/>
        </div>
    </div>
    <div class="mb-3&#x20;row">
        <label class="col-form-label&#x20;col-sm-2&#x20;form-label" for="colFormLabel">Email</label>
        <div class="col-sm-10">
            <input name="email" type="email" id="colFormLabel" placeholder="col-form-label" class="form-control" value=""/>
        </div>
    </div>
    <div class="mb-3&#x20;row">
        <label class="col-form-label&#x20;col-form-label-lg&#x20;col-sm-2&#x20;form-label" for="colFormLabelLg">Email</label>
        <div class="col-sm-10">
            <input name="emailLg" type="email" id="colFormLabelLg" placeholder="col-form-label-lg" class="form-control&#x20;form-control-lg" value=""/>
        </div>
    </div>
</form>

######### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->form($oFactory->create([
    'type' => 'form',
    'options' => ['layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL],
    'elements' => [
        [
            'spec' => [
                'name' => 'emailSm',
                'options' => [
                    'label' => 'Email',
                    'column' => 'sm-10',
                    'size' => 'sm',
                ],
                'attributes' => [
                    'type' => 'email',
                    'id' => 'colFormLabelSm',
                    'placeholder' => 'col-form-label-sm',
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'email',
                'options' => [
                    'label' => 'Email',
                    'column' => 'sm-10',
                ],
                'attributes' => [
                    'type' => 'email',
                    'id' => 'colFormLabel',
                    'placeholder' => 'col-form-label',
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'emailLg',
                'options' => [
                    'label' => 'Email',
                    'column' => 'sm-10',
                    'size' => 'lg',
                ],
                'attributes' => [
                    'type' => 'email',
                    'id' => 'colFormLabelLg',
                    'placeholder' => 'col-form-label-lg',
                ],
            ],
        ],
    ],
]));
```

<!-- tabs:end -->


####### Column sizing
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#column-sizing)
<!-- tabs:start -->

######## **Result**

<form action="" method="POST" name="form" role="form" id="form">
    <div class="form-row">
        <div class="col-7&#x20;mb-3">
            <input name="city" type="text" placeholder="City" class="form-control" value=""/>
        </div>
        <div class="col&#x20;mb-3">
            <input name="state" type="text" placeholder="State" class="form-control" value=""/>
        </div>
        <div class="col&#x20;mb-3">
            <input name="zip" type="text" placeholder="Zip" class="form-control" value=""/>
        </div>
    </div>
</form>

######## **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->form($oFactory->create([
    'type' => 'form',
    'options' => ['row_class' => 'form-row'],
    'elements' => [
        [
            'spec' => [
                'name' => 'city',
                'options' => [
                    'column' => 7,
                ],
                'attributes' => [
                    'type' => 'text',
                    'placeholder' => 'City',
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'state',
                'options' => [
                    'column' => true,
                ],
                'attributes' => [
                    'type' => 'text',
                    'placeholder' => 'State',
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'zip',
                'options' => [
                    'column' => true,
                ],
                'attributes' => [
                    'type' => 'text',
                    'placeholder' => 'Zip',
                ],
            ],
        ],
    ]
]));
```

<!-- tabs:end -->


####### Auto-sizing
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#auto-sizing)
<!-- tabs:start -->

######## **Result**

<form action="" method="POST" name="form" role="form" id="form">
    <div class="align-items-center&#x20;form-row">
        <div class="col-auto&#x20;mb-3">
            <label class="form-label&#x20;sr-only" for="inlineFormInput">Name</label>
            <input name="name" type="text" id="inlineFormInput" placeholder="Jane&#x20;Doe" class="form-control&#x20;mb-2" value=""/>
        </div>
        <div class="col-auto&#x20;mb-3">
            <label class="form-label&#x20;sr-only" for="inlineFormInputGroup">Username</label>
            <div class="input-group&#x20;mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        @
                    </div>
                </div>
                <input name="username" type="text" id="inlineFormInputGroup" placeholder="Username" class="form-control" value=""/>
            </div>
        </div>
        <div class="col-auto&#x20;mb-3">
            <div class="form-check&#x20;mb-2">
                <input type="checkbox" name="remember_me" id="autoSizingCheck" class="form-check-input" value="1"/>
                <label class="form-check-label" for="autoSizingCheck">Remember me</label>
            </div>
        </div>
        <div class="col-auto&#x20;mb-3">
            <button type="submit" name="submit" class="btn&#x20;btn-primary&#x20;mb-2" value="">Submit</button>
        </div>
    </div>
</form>
<br/>
<form action="" method="POST" name="form" role="form" id="form">
    <div class="align-items-center&#x20;form-row">
        <div class="col-sm-3&#x20;mb-3&#x20;my-1">
            <label class="form-label&#x20;sr-only" for="inlineFormInput">Name</label>
            <input name="name" type="text" id="inlineFormInput" placeholder="Jane&#x20;Doe" class="form-control&#x20;mb-2" value=""/>
        </div>
        <div class="col-sm-3&#x20;mb-3&#x20;my-1">
            <label class="form-label&#x20;sr-only" for="inlineFormInputGroup">Username</label>
            <div class="input-group&#x20;mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        @
                    </div>
                </div>
                <input name="username" type="text" id="inlineFormInputGroup" placeholder="Username" class="form-control" value=""/>
            </div>
        </div>
        <div class="col-auto&#x20;mb-3&#x20;my-1">
            <div class="form-check&#x20;mb-2">
                <input type="checkbox" name="remember_me" id="autoSizingCheck" class="form-check-input" value="1"/>
                <label class="form-check-label" for="autoSizingCheck">Remember me</label>
            </div>
        </div>
        <div class="col-auto&#x20;mb-3&#x20;my-1">
            <button type="submit" name="submit" class="btn&#x20;btn-primary&#x20;mb-2" value="">Submit</button>
        </div>
    </div>
</form>
<br/>
<form action="" method="POST" name="form" role="form" id="form">
    <div class="align-items-center&#x20;form-row">
        <div class="col-sm-3&#x20;mb-3&#x20;my-1">
            <label class="mr-sm-2&#x20;sr-only" for="inlineFormCustomSelect">Preference</label>
            <select name="preference" id="inlineFormCustomSelect" class="form-select&#x20;mr-sm-2">
                <option value="">Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="col-auto&#x20;mb-3&#x20;my-1">
            <div class="custom-checkbox&#x20;custom-control&#x20;mr-sm-2">
                <input type="checkbox" name="remember_my_preference" id="customControlAutosizing" class="form-check-input" value="1"/>
                <label class="form-check-label" for="customControlAutosizing">Remember my preference</label>
            </div>
        </div>
        <div class="col-auto&#x20;mb-3&#x20;my-1">
            <button type="submit" name="submit" class="btn&#x20;btn-primary" value="">Submit</button>
        </div>
    </div>
</form>

######## **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->form($oFactory->create([
    'type' => 'form',
    'options' => [
        'row_class' => 'align-items-center form-row',
    ],
    'elements' => [
        [
            'spec' => [
                'name' => 'name',
                'options' => [
                    'label' => 'Name',
                    'show_label' => false,
                    'column' => 'auto',
                ],
                'attributes' => [
                    'type' => 'text',
                    'id' => 'inlineFormInput',
                    'placeholder' => 'Jane Doe',
                    'class' => 'mb-2',
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'username',
                'options' => [
                    'label' => 'Username',
                    'show_label' => false,
                    'column' => 'auto',
                    'add_on_prepend' => '@',
                    'input_group_class' => 'mb-2',
                ],
                'attributes' => [
                    'type' => 'text',
                    'id' => 'inlineFormInputGroup',
                    'placeholder' => 'Username',
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'checkbox',
                'name' => 'remember_me',
                'options' => [
                    'label' => 'Remember me',
                    'use_hidden_element' => false,
                    'column' => 'auto',
                    'form_check_class' => 'mb-2',
                ],
                'attributes' => [
                    'id' => 'autoSizingCheck',
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'submit',
                'options' => [
                    'label' => 'Submit',
                    'variant' => 'primary',
                    'column' => 'auto',
                ],
                'attributes' => [
                    'class' => 'mb-2',
                ],
            ],
        ],
    ],
]));

echo PHP_EOL . '<br/>' . PHP_EOL;

// Remix that once again with size-specific column classes.
echo $this->form($oFactory->create([
    'type' => 'form',
    'options' => [
        'row_class' => 'align-items-center form-row',
    ],
    'elements' => [
        [
            'spec' => [
                'name' => 'name',
                'options' => [
                    'label' => 'Name',
                    'show_label' => false,
                    'column' => 'sm-3',
                    'row_class' => 'my-1',
                ],
                'attributes' => [
                    'type' => 'text',
                    'id' => 'inlineFormInput',
                    'placeholder' => 'Jane Doe',
                    'class' => 'mb-2',
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'username',
                'options' => [
                    'label' => 'Username',
                    'show_label' => false,
                    'column' => 'sm-3',
                    'row_class' => 'my-1',
                    'add_on_prepend' => '@',
                    'input_group_class' => 'mb-2',
                ],
                'attributes' => [
                    'type' => 'text',
                    'id' => 'inlineFormInputGroup',
                    'placeholder' => 'Username',
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'checkbox',
                'name' => 'remember_me',
                'options' => [
                    'label' => 'Remember me',
                    'use_hidden_element' => false,
                    'column' => 'auto',
                    'row_class' => 'my-1',
                    'form_check_class' => 'mb-2',
                ],
                'attributes' => [
                    'id' => 'autoSizingCheck',
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'submit',
                'options' => [
                    'label' => 'Submit',
                    'variant' => 'primary',
                    'column' => 'auto',
                    'row_class' => 'my-1',
                ],
                'attributes' => [
                    'class' => 'mb-2',
                ],
            ],
        ],
    ],
]));

echo PHP_EOL . '<br/>' . PHP_EOL;

// And of course custom form controls are supported.
echo $this->form($oFactory->create([
    'type' => 'form',
    'options' => [
        'row_class' => 'align-items-center form-row',
    ],
    'elements' => [
        [
            'spec' => [
                'name' => 'preference',
                'type' => 'select',
                'options' => [
                    'label' => 'Preference',
                    'show_label' => false,
                    'label_attributes' => ['class' => 'mr-sm-2'],
                    'column' => 'sm-3',
                    'row_class' => 'my-1',
                    'empty_option' => 'Choose...',
                    'value_options' => [
                        1 => 'One',
                        2 => 'Two',
                        3 => 'Three',
                    ],
                    'custom' => true,
                ],
                'attributes' => [
                    'id' => 'inlineFormCustomSelect',
                    'class' => 'mr-sm-2',
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'checkbox',
                'name' => 'remember_my_preference',
                'options' => [
                    'label' => 'Remember my preference',
                    'use_hidden_element' => false,
                    'column' => 'auto',
                    'row_class' => 'my-1',
                    'form_check_class' => 'mr-sm-2',
                    'custom' => true,
                ],
                'attributes' => [
                    'id' => 'customControlAutosizing',
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'submit',
                'options' => [
                    'label' => 'Submit',
                    'variant' => 'primary',
                    'column' => 'auto',
                    'row_class' => 'my-1',
                ],
            ],
        ],
    ],
]));
```

<!-- tabs:end -->


###### Inline forms
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#inline-forms)
<!-- tabs:start -->

####### **Result**

<form action="" method="POST" name="form" role="form" class="form-inline" id="form">
    <label class="form-label&#x20;sr-only" for="inlineFormInputName2">Name</label>
    <input name="name" type="text" id="inlineFormInputName2" placeholder="Jane&#x20;Doe" class="form-control&#x20;mb-2&#x20;mr-sm-2" value=""/>
    <label class="form-label&#x20;sr-only" for="inlineFormInputGroupUsername2">Username</label>
    <div class="input-group&#x20;mb-2&#x20;mr-sm-2">
        <div class="input-group-prepend">
            <div class="input-group-text">
                @
            </div>
        </div>
        <input name="username" type="text" id="inlineFormInputGroupUsername2" placeholder="Username" class="form-control" value=""/>
    </div>
    <div class="form-check&#x20;mb-2&#x20;mr-sm-2">
        <input type="checkbox" name="remember_me" id="inlineFormCheck" class="form-check-input" value="1"/>
        <label class="form-check-label" for="inlineFormCheck">Remember me</label>
    </div>
    <button type="submit" name="submit" class="btn&#x20;btn-primary&#x20;mb-2" value="">Submit</button>
</form>
<br/>
<form action="" method="POST" name="form" role="form" class="form-inline" id="form">
    <label class="mr-2&#x20;my-1" for="inlineFormCustomSelectPref">Preference</label>
    <select name="preference" id="inlineFormCustomSelectPref" class="form-select&#x20;mr-sm-2&#x20;my-1">
        <option value="">Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    <div class="custom-checkbox&#x20;custom-control&#x20;mr-sm-2&#x20;my-1">
        <input type="checkbox" name="remember_my_preference" id="customControlInline" class="form-check-input" value="1"/>
        <label class="form-check-label" for="customControlInline">Remember my preference</label>
    </div>
    <button type="submit" name="submit" class="btn&#x20;btn-primary&#x20;mb-2" value="">Submit</button>
</form>

####### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->form($oFactory->create([
    'type' => 'form',
    'options' => [
        'layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE,
    ],
    'elements' => [
        [
            'spec' => [
                'name' => 'name',
                'options' => [
                    'label' => 'Name',
                    'form_group' => false,
                ],
                'attributes' => [
                    'type' => 'text',
                    'id' => 'inlineFormInputName2',
                    'placeholder' => 'Jane Doe',
                    'class' => 'mb-2 mr-sm-2',
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'username',
                'options' => [
                    'label' => 'Username',
                    'show_label' => false,
                    'add_on_prepend' => '@',
                    'input_group_class' => 'mb-2 mr-sm-2',
                    'form_group' => false,
                ],
                'attributes' => [
                    'type' => 'text',
                    'id' => 'inlineFormInputGroupUsername2',
                    'placeholder' => 'Username',
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'checkbox',
                'name' => 'remember_me',
                'options' => [
                    'label' => 'Remember me',
                    'use_hidden_element' => false,
                    'form_check_class' => 'mb-2 mr-sm-2',
                    'form_group' => false,
                ],
                'attributes' => [
                    'id' => 'inlineFormCheck',
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'submit',
                'options' => [
                    'label' => 'Submit',
                    'variant' => 'primary',
                ],
                'attributes' => [
                    'class' => 'mb-2',
                ],
            ],
        ],
    ],
]));

echo PHP_EOL . '<br/>' . PHP_EOL;

// Custom form controls and selects are also supported
echo $this->form($oFactory->create([
    'type' => 'form',
    'options' => [
        'layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE,
    ],
    'elements' => [
        [
            'spec' => [
                'name' => 'preference',
                'type' => 'select',
                'options' => [
                    'label' => 'Preference',
                    'show_label' => true,
                    'label_attributes' => ['class' => 'mr-2 my-1'],
                    'row_class' => 'my-1',
                    'empty_option' => 'Choose...',
                    'value_options' => [
                        1 => 'One',
                        2 => 'Two',
                        3 => 'Three',
                    ],
                    'form_group' => false,
                    'custom' => true,
                ],
                'attributes' => [
                    'id' => 'inlineFormCustomSelectPref',
                    'class' => 'mr-sm-2 my-1',
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'checkbox',
                'name' => 'remember_my_preference',
                'options' => [
                    'label' => 'Remember my preference',
                    'use_hidden_element' => false,
                    'form_check_class' => 'mr-sm-2 my-1',
                    'form_group' => false,
                    'custom' => true,
                ],
                'attributes' => [
                    'id' => 'customControlInline',
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'submit',
                'options' => [
                    'label' => 'Submit',
                    'variant' => 'primary',
                ],
                'attributes' => [
                    'class' => 'mb-2',
                ],
            ],
        ],
    ],
]));
```

<!-- tabs:end -->


####### Form row
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#form-row)
<!-- tabs:start -->

######## **Result**

<form action="" method="POST" name="form" role="form" id="form">
    <div class="form-row">
        <div class="col&#x20;mb-3">
            <input name="firstName" type="text" placeholder="First&#x20;name" class="form-control" value=""/>
        </div>
        <div class="col&#x20;mb-3">
            <input name="lastName" type="text" placeholder="Last&#x20;name" class="form-control" value=""/>
        </div>
    </div>
</form>

######## **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->form($oFactory->create([
    'type' => 'form',
    'options' => ['row_class' => 'form-row'],
    'elements' => [
        [
            'spec' => [
                'name' => 'firstName',
                'options' => [
                    'column' => true,
                ],
                'attributes' => [
                    'type' => 'text',
                    'placeholder' => 'First name',
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'lastName',
                'options' => [
                    'column' => true,
                ],
                'attributes' => [
                    'type' => 'text',
                    'placeholder' => 'Last name',
                ],
            ],
        ],
    ]
]));
```

<!-- tabs:end -->


####### Horizontal form
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#horizontal-form)
<!-- tabs:start -->

######## **Result**

<form action="" method="POST" name="form" role="form" id="form">
    <div class="mb-3&#x20;row">
        <label class="col-form-label&#x20;col-sm-2&#x20;form-label" for="inputEmail3">Email</label>
        <div class="col-sm-10">
            <input name="email" type="email" id="inputEmail3" placeholder="Email" class="form-control" value=""/>
        </div>
    </div>
    <div class="mb-3&#x20;row">
        <label class="col-form-label&#x20;col-sm-2&#x20;form-label" for="inputPassword3">Password</label>
        <div class="col-sm-10">
            <input name="password" type="password" id="inputPassword3" placeholder="Password" class="form-control" value=""/>
        </div>
    </div>
    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label&#x20;col-sm-2&#x20;pt-0">Radios</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input type="radio" name="fieldset&#x5B;gridRadios&#x5D;" class="form-check-input" id="gridRadios1" value="option1"/>
                    <label class="form-check-label" for="gridRadios1">First radio</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="fieldset&#x5B;gridRadios&#x5D;" class="form-check-input" id="gridRadios2" value="option2"/>
                    <label class="form-check-label" for="gridRadios2">Second radio</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="fieldset&#x5B;gridRadios&#x5D;" class="form-check-input" id="gridRadios3" value="option3" disabled="disabled"/>
                    <label class="form-check-label" for="gridRadios3">Third disabled radio</label>
                </div>
            </div>
        </div>
    </fieldset>
    <div class="mb-3&#x20;row">
        <div class="col-sm-10&#x20;offset-sm-2">
            <div class="form-check">
                <input type="hidden" name="checkbox" value="0"/><input type="checkbox" name="checkbox" class="form-check-input" value="1"/>
                <label class="form-check-label" for="checkbox">Checkbox</label>
            </div>
        </div>
    </div>
    <div class="mb-3&#x20;row">
        <div class="col-sm-2">
            Multicheckbox
        </div>
        <div class="col-sm-10">
            <div class="form-check">
                <input type="checkbox" name="multicheckbox&#x5B;&#x5D;" class="form-check-input" id="gridCheck1" value="1"/>
                <label class="form-check-label" for="gridCheck1">Example checkbox</label>
            </div>
        </div>
    </div>
    <div class="mb-3&#x20;row">
        <div class="col-sm-10">
            <button type="submit" name="submit" class="btn&#x20;btn-primary" value="">Sign in</button>
        </div>
    </div>
</form>

######## **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->form($oFactory->create([
    'type' => 'form',
    'options' => ['layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL],
    'elements' => [
        [
            'spec' => [
                'name' => 'email',
                'options' => [
                    'label' => 'Email',
                    'column' => 'sm-10',
                ],
                'attributes' => [
                    'type' => 'email',
                    'id' => 'inputEmail3',
                    'placeholder' => 'Email',
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'password',
                'options' => [
                    'label' => 'Password',
                    'column' => 'sm-10',
                ],
                'attributes' => [
                    'type' => 'password',
                    'id' => 'inputPassword3',
                    'placeholder' => 'Password',
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'fieldset',
                'options' => [
                    'label' => 'Radios',
                    'label_attributes' => ['class' => 'pt-0'],
                    'column' => 'sm-10',
                ],
                'elements' => [
                    [
                        'spec' => [
                            'type' => 'radio',
                            'name' => 'gridRadios',
                            'options' => [
                                'column' => 'sm-10',
                                'value_options' => [
                                    [
                                        'label' => 'First radio',
                                        'attributes' => ['id' => 'gridRadios1'],
                                        'value' => 'option1',
                                    ],
                                    [
                                        'label' => 'Second radio',
                                        'attributes' => ['id' => 'gridRadios2'],
                                        'value' => 'option2',
                                    ],
                                    [
                                        'label' => 'Third disabled radio',
                                        'disabled' => true,
                                        'attributes' => ['id' => 'gridRadios3'],
                                        'value' => 'option3',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'checkbox',
                'options' => [
                    'label' => 'Checkbox',
                    'column' => 'sm-10',
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'multicheckbox',
                'options' => [
                    'label' => 'Multicheckbox',
                    'column' => 'sm-10',
                    'value_options' => [
                        [
                            'label' => 'Example checkbox',
                            'attributes' => ['id' => 'gridCheck1'],
                            'value' => 1,
                        ],
                    ],
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'submit',
                'options' => [
                    'label' => 'Sign in',
                    'variant' => 'primary',
                    'column' => 'sm-10',
                ],
            ],
        ],
    ]
]));
```

<!-- tabs:end -->


######## Horizontal form label sizing
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#horizontal-form-label-sizing)
<!-- tabs:start -->

######### **Result**

<form action="" method="POST" name="form" role="form" id="form">
    <div class="mb-3&#x20;row">
        <label class="col-form-label&#x20;col-form-label-sm&#x20;col-sm-2&#x20;form-label" for="colFormLabelSm">Email</label>
        <div class="col-sm-10">
            <input name="emailSm" type="email" id="colFormLabelSm" placeholder="col-form-label-sm" class="form-control&#x20;form-control-sm" value=""/>
        </div>
    </div>
    <div class="mb-3&#x20;row">
        <label class="col-form-label&#x20;col-sm-2&#x20;form-label" for="colFormLabel">Email</label>
        <div class="col-sm-10">
            <input name="email" type="email" id="colFormLabel" placeholder="col-form-label" class="form-control" value=""/>
        </div>
    </div>
    <div class="mb-3&#x20;row">
        <label class="col-form-label&#x20;col-form-label-lg&#x20;col-sm-2&#x20;form-label" for="colFormLabelLg">Email</label>
        <div class="col-sm-10">
            <input name="emailLg" type="email" id="colFormLabelLg" placeholder="col-form-label-lg" class="form-control&#x20;form-control-lg" value=""/>
        </div>
    </div>
</form>

######### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->form($oFactory->create([
    'type' => 'form',
    'options' => ['layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL],
    'elements' => [
        [
            'spec' => [
                'name' => 'emailSm',
                'options' => [
                    'label' => 'Email',
                    'column' => 'sm-10',
                    'size' => 'sm',
                ],
                'attributes' => [
                    'type' => 'email',
                    'id' => 'colFormLabelSm',
                    'placeholder' => 'col-form-label-sm',
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'email',
                'options' => [
                    'label' => 'Email',
                    'column' => 'sm-10',
                ],
                'attributes' => [
                    'type' => 'email',
                    'id' => 'colFormLabel',
                    'placeholder' => 'col-form-label',
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'emailLg',
                'options' => [
                    'label' => 'Email',
                    'column' => 'sm-10',
                    'size' => 'lg',
                ],
                'attributes' => [
                    'type' => 'email',
                    'id' => 'colFormLabelLg',
                    'placeholder' => 'col-form-label-lg',
                ],
            ],
        ],
    ],
]));
```

<!-- tabs:end -->


####### Column sizing
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#column-sizing)
<!-- tabs:start -->

######## **Result**

<form action="" method="POST" name="form" role="form" id="form">
    <div class="form-row">
        <div class="col-7&#x20;mb-3">
            <input name="city" type="text" placeholder="City" class="form-control" value=""/>
        </div>
        <div class="col&#x20;mb-3">
            <input name="state" type="text" placeholder="State" class="form-control" value=""/>
        </div>
        <div class="col&#x20;mb-3">
            <input name="zip" type="text" placeholder="Zip" class="form-control" value=""/>
        </div>
    </div>
</form>

######## **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->form($oFactory->create([
    'type' => 'form',
    'options' => ['row_class' => 'form-row'],
    'elements' => [
        [
            'spec' => [
                'name' => 'city',
                'options' => [
                    'column' => 7,
                ],
                'attributes' => [
                    'type' => 'text',
                    'placeholder' => 'City',
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'state',
                'options' => [
                    'column' => true,
                ],
                'attributes' => [
                    'type' => 'text',
                    'placeholder' => 'State',
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'zip',
                'options' => [
                    'column' => true,
                ],
                'attributes' => [
                    'type' => 'text',
                    'placeholder' => 'Zip',
                ],
            ],
        ],
    ]
]));
```

<!-- tabs:end -->


####### Auto-sizing
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#auto-sizing)
<!-- tabs:start -->

######## **Result**

<form action="" method="POST" name="form" role="form" id="form">
    <div class="align-items-center&#x20;form-row">
        <div class="col-auto&#x20;mb-3">
            <label class="form-label&#x20;sr-only" for="inlineFormInput">Name</label>
            <input name="name" type="text" id="inlineFormInput" placeholder="Jane&#x20;Doe" class="form-control&#x20;mb-2" value=""/>
        </div>
        <div class="col-auto&#x20;mb-3">
            <label class="form-label&#x20;sr-only" for="inlineFormInputGroup">Username</label>
            <div class="input-group&#x20;mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        @
                    </div>
                </div>
                <input name="username" type="text" id="inlineFormInputGroup" placeholder="Username" class="form-control" value=""/>
            </div>
        </div>
        <div class="col-auto&#x20;mb-3">
            <div class="form-check&#x20;mb-2">
                <input type="checkbox" name="remember_me" id="autoSizingCheck" class="form-check-input" value="1"/>
                <label class="form-check-label" for="autoSizingCheck">Remember me</label>
            </div>
        </div>
        <div class="col-auto&#x20;mb-3">
            <button type="submit" name="submit" class="btn&#x20;btn-primary&#x20;mb-2" value="">Submit</button>
        </div>
    </div>
</form>
<br/>
<form action="" method="POST" name="form" role="form" id="form">
    <div class="align-items-center&#x20;form-row">
        <div class="col-sm-3&#x20;mb-3&#x20;my-1">
            <label class="form-label&#x20;sr-only" for="inlineFormInput">Name</label>
            <input name="name" type="text" id="inlineFormInput" placeholder="Jane&#x20;Doe" class="form-control&#x20;mb-2" value=""/>
        </div>
        <div class="col-sm-3&#x20;mb-3&#x20;my-1">
            <label class="form-label&#x20;sr-only" for="inlineFormInputGroup">Username</label>
            <div class="input-group&#x20;mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        @
                    </div>
                </div>
                <input name="username" type="text" id="inlineFormInputGroup" placeholder="Username" class="form-control" value=""/>
            </div>
        </div>
        <div class="col-auto&#x20;mb-3&#x20;my-1">
            <div class="form-check&#x20;mb-2">
                <input type="checkbox" name="remember_me" id="autoSizingCheck" class="form-check-input" value="1"/>
                <label class="form-check-label" for="autoSizingCheck">Remember me</label>
            </div>
        </div>
        <div class="col-auto&#x20;mb-3&#x20;my-1">
            <button type="submit" name="submit" class="btn&#x20;btn-primary&#x20;mb-2" value="">Submit</button>
        </div>
    </div>
</form>
<br/>
<form action="" method="POST" name="form" role="form" id="form">
    <div class="align-items-center&#x20;form-row">
        <div class="col-sm-3&#x20;mb-3&#x20;my-1">
            <label class="mr-sm-2&#x20;sr-only" for="inlineFormCustomSelect">Preference</label>
            <select name="preference" id="inlineFormCustomSelect" class="form-select&#x20;mr-sm-2">
                <option value="">Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="col-auto&#x20;mb-3&#x20;my-1">
            <div class="custom-checkbox&#x20;custom-control&#x20;mr-sm-2">
                <input type="checkbox" name="remember_my_preference" id="customControlAutosizing" class="form-check-input" value="1"/>
                <label class="form-check-label" for="customControlAutosizing">Remember my preference</label>
            </div>
        </div>
        <div class="col-auto&#x20;mb-3&#x20;my-1">
            <button type="submit" name="submit" class="btn&#x20;btn-primary" value="">Submit</button>
        </div>
    </div>
</form>

######## **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->form($oFactory->create([
    'type' => 'form',
    'options' => [
        'row_class' => 'align-items-center form-row',
    ],
    'elements' => [
        [
            'spec' => [
                'name' => 'name',
                'options' => [
                    'label' => 'Name',
                    'show_label' => false,
                    'column' => 'auto',
                ],
                'attributes' => [
                    'type' => 'text',
                    'id' => 'inlineFormInput',
                    'placeholder' => 'Jane Doe',
                    'class' => 'mb-2',
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'username',
                'options' => [
                    'label' => 'Username',
                    'show_label' => false,
                    'column' => 'auto',
                    'add_on_prepend' => '@',
                    'input_group_class' => 'mb-2',
                ],
                'attributes' => [
                    'type' => 'text',
                    'id' => 'inlineFormInputGroup',
                    'placeholder' => 'Username',
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'checkbox',
                'name' => 'remember_me',
                'options' => [
                    'label' => 'Remember me',
                    'use_hidden_element' => false,
                    'column' => 'auto',
                    'form_check_class' => 'mb-2',
                ],
                'attributes' => [
                    'id' => 'autoSizingCheck',
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'submit',
                'options' => [
                    'label' => 'Submit',
                    'variant' => 'primary',
                    'column' => 'auto',
                ],
                'attributes' => [
                    'class' => 'mb-2',
                ],
            ],
        ],
    ],
]));

echo PHP_EOL . '<br/>' . PHP_EOL;

// Remix that once again with size-specific column classes.
echo $this->form($oFactory->create([
    'type' => 'form',
    'options' => [
        'row_class' => 'align-items-center form-row',
    ],
    'elements' => [
        [
            'spec' => [
                'name' => 'name',
                'options' => [
                    'label' => 'Name',
                    'show_label' => false,
                    'column' => 'sm-3',
                    'row_class' => 'my-1',
                ],
                'attributes' => [
                    'type' => 'text',
                    'id' => 'inlineFormInput',
                    'placeholder' => 'Jane Doe',
                    'class' => 'mb-2',
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'username',
                'options' => [
                    'label' => 'Username',
                    'show_label' => false,
                    'column' => 'sm-3',
                    'row_class' => 'my-1',
                    'add_on_prepend' => '@',
                    'input_group_class' => 'mb-2',
                ],
                'attributes' => [
                    'type' => 'text',
                    'id' => 'inlineFormInputGroup',
                    'placeholder' => 'Username',
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'checkbox',
                'name' => 'remember_me',
                'options' => [
                    'label' => 'Remember me',
                    'use_hidden_element' => false,
                    'column' => 'auto',
                    'row_class' => 'my-1',
                    'form_check_class' => 'mb-2',
                ],
                'attributes' => [
                    'id' => 'autoSizingCheck',
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'submit',
                'options' => [
                    'label' => 'Submit',
                    'variant' => 'primary',
                    'column' => 'auto',
                    'row_class' => 'my-1',
                ],
                'attributes' => [
                    'class' => 'mb-2',
                ],
            ],
        ],
    ],
]));

echo PHP_EOL . '<br/>' . PHP_EOL;

// And of course custom form controls are supported.
echo $this->form($oFactory->create([
    'type' => 'form',
    'options' => [
        'row_class' => 'align-items-center form-row',
    ],
    'elements' => [
        [
            'spec' => [
                'name' => 'preference',
                'type' => 'select',
                'options' => [
                    'label' => 'Preference',
                    'show_label' => false,
                    'label_attributes' => ['class' => 'mr-sm-2'],
                    'column' => 'sm-3',
                    'row_class' => 'my-1',
                    'empty_option' => 'Choose...',
                    'value_options' => [
                        1 => 'One',
                        2 => 'Two',
                        3 => 'Three',
                    ],
                    'custom' => true,
                ],
                'attributes' => [
                    'id' => 'inlineFormCustomSelect',
                    'class' => 'mr-sm-2',
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'checkbox',
                'name' => 'remember_my_preference',
                'options' => [
                    'label' => 'Remember my preference',
                    'use_hidden_element' => false,
                    'column' => 'auto',
                    'row_class' => 'my-1',
                    'form_check_class' => 'mr-sm-2',
                    'custom' => true,
                ],
                'attributes' => [
                    'id' => 'customControlAutosizing',
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'submit',
                'options' => [
                    'label' => 'Submit',
                    'variant' => 'primary',
                    'column' => 'auto',
                    'row_class' => 'my-1',
                ],
            ],
        ],
    ],
]));
```

<!-- tabs:end -->


##### Help text
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#help-text)
<!-- tabs:start -->

###### **Result**

<label class="form-label" for="inputPassword5">Password</label>
<input name="password" id="inputPassword5" type="password" aria-describedby="passwordHelpBlock" class="form-control" value=""/>
<small class="form-text&#x20;text-muted" id="passwordHelpBlock">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</small>
<br/>
<form action="" method="POST" name="form" role="form" class="form-inline" id="form">
    <div class="mb-3">
        <label class="form-label" for="inputPassword6">Password</label>
        <input name="password" id="inputPassword6" type="password" aria-describedby="passwordHelpInline" class="form-control&#x20;mx-sm-3" value=""/>
        <small class="text-muted" id="passwordHelpInline">Must be 8-20 characters long.</small>
    </div>
</form>

###### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->formRow($oFactory->create([
    'name' => 'password',
    'options' => [
        'label' => 'Password',
        'form_group' => false,
        'help_block' => [
            'content' => 'Your password must be 8-20 characters long, contain letters and numbers, ' .
            'and must not contain spaces, special characters, or emoji.',
            'attributes' => ['id' => 'passwordHelpBlock'],
        ]
    ],
    'attributes' => [
        'id' => 'inputPassword5',
        'type' => 'password',
        'aria-describedby' => 'passwordHelpBlock',
    ],
]));

echo PHP_EOL . '<br/>' . PHP_EOL;

// Inline text can use any typical inline HTML element
// (be it a <small>, <span>, or something else)
// with nothing more than a utility class
echo $this->form($oFactory->create([
    'type' => 'form',
    'options' => [
        'layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE,
    ],
    'elements' => [
        [
            'spec' => [
                'name' => 'password',
                'options' => [
                    'label' => 'Password',
                    'show_label' => true,
                    'help_block' => [
                        'content' => 'Must be 8-20 characters long.',
                        'attributes' => ['id' => 'passwordHelpInline'],
                    ],
                ],
                'attributes' => [
                    'id' => 'inputPassword6',
                    'type' => 'password',
                    'aria-describedby' => 'passwordHelpInline',
                    'class' => 'mx-sm-3',
                ],
            ],
        ],
    ],
]));
```

<!-- tabs:end -->


##### Disabled forms
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#disabled-forms)
<!-- tabs:start -->

###### **Result**

<form action="" method="POST" name="form" role="form" id="form">
    <fieldset disabled="disabled" class="form-group">
        <div class="mb-3">
            <label class="form-label" for="disabledTextInput">Disabled input</label>
            <input name="fieldset&#x5B;disabled-input&#x5D;" type="text" id="disabledTextInput" placeholder="Disabled&#x20;input" class="form-control" value=""/>
        </div>
        <div class="mb-3">
            <label class="form-label" for="disabledSelect">Disabled select menu</label>
            <select name="fieldset&#x5B;disabled-select&#x5D;" id="disabledSelect" class="form-select"><option value="">Disabled select</option></select>
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input type="checkbox" name="fieldset&#x5B;disabled-fieldset-check&#x5D;" id="disabledFieldsetCheck" disabled="disabled" class="form-check-input" value="1"/>
                <label class="form-check-label" for="disabledFieldsetCheck">Can&#039;t check this</label>
            </div>
        </div>
        <div class="mb-3">
            <button type="submit" name="fieldset&#x5B;submit&#x5D;" class="btn&#x20;btn-primary" value="">Submit</button>
        </div>
    </fieldset>
</form>

###### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->form($oFactory->create([
    'type' => 'form',
    'elements' => [
        [
            'spec' => [
                'type' => 'fieldset',
                'attributes' => [
                    'disabled' => true,
                ],
                'elements' => [
                    [
                        'spec' => [
                            'name' => 'disabled-input',
                            'options' => ['label' => 'Disabled input'],
                            'attributes' => [
                                'type' => 'text',
                                'id' => 'disabledTextInput',
                                'placeholder' => 'Disabled input',
                            ],
                        ],
                    ],
                    [
                        'spec' => [
                            'name' => 'disabled-select',
                            'type' => 'select',
                            'attributes' => ['id' => 'disabledSelect',],
                            'options' => [
                                'label' => 'Disabled select menu',
                                'empty_option' => 'Disabled select',
                            ],
                        ],
                    ],
                    [
                        'spec' => [
                            'type' => 'checkbox',
                            'name' => 'disabled-fieldset-check',
                            'options' => ['label' => 'Can\'t check this', 'use_hidden_element' => false],
                            'attributes' => [
                                'id' => 'disabledFieldsetCheck',
                                'disabled' => true,
                            ],
                        ],
                    ],
                    [
                        'spec' => [
                            'type' => 'submit',
                            'options' => ['label' => 'Submit', 'variant' => 'primary'],
                        ],
                    ],
                ],
            ],
        ],
    ],
]));
```

<!-- tabs:end -->


##### Validation
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#validation)
###### Server side
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#server-side)
<!-- tabs:start -->

####### **Result**

<form action="" method="POST" name="form" role="form" id="form">
    <div class="form-row">
        <div class="col-md-6&#x20;mb-3">
            <label class="form-label" for="validationServer01">First name</label>
            <input name="firstName" type="text" id="validationServer01" required="required" class="form-control&#x20;is-valid" value="Mark"/>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-6&#x20;mb-3">
            <label class="form-label" for="validationServer02">Last name</label>
            <input name="lastName" type="text" id="validationServer02" required="required" class="form-control&#x20;is-valid" value="Otto"/>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6&#x20;has-error&#x20;mb-3">
            <label class="col-form-label&#x20;form-label" for="validationServer03">City</label>
            <input name="city" type="text" id="validationServer03" required="required" class="form-control&#x20;is-invalid" value=""/>
            <div class="invalid-feedback">Please provide a valid city.</div>
        </div>
        <div class="col-md-3&#x20;has-error&#x20;mb-3">
            <label class="col-form-label&#x20;form-label" for="validationServer04">State</label>
            <select name="state" id="validationServer04" required="required" class="form-select&#x20;is-invalid">
                <option value="" selected="selected" disabled="disabled">Choose...</option>
                <option value="0">...</option>
            </select>
            <div class="invalid-feedback">Please select a valid state.</div>
        </div>
        <div class="col-md-3&#x20;has-error&#x20;mb-3">
            <label class="col-form-label&#x20;form-label" for="validationServer05">Zip</label>
            <input name="zip" type="text" id="validationServer05" required="required" class="form-control&#x20;is-invalid" value=""/>
            <div class="invalid-feedback">Please provide a valid zip.</div>
        </div>
    </div>
    <div class="has-error&#x20;mb-3">
        <div class="form-check">
            <input type="checkbox" name="termsAndConditions" id="invalidCheck3" required="required" class="form-check-input&#x20;is-invalid" value="1"/>
            <label class="form-check-label" for="invalidCheck3">Agree to terms and conditions</label>
            <div class="invalid-feedback">You must agree before submitting.</div>
        </div>
    </div>
    <button type="submit" name="submit" class="btn&#x20;btn-primary" value="">Submit</button>
</form>

####### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

$oForm = $oFactory->create([
    'type' => 'form',
    'options' => ['row_class' => 'form-row'],
    'elements' => [
        [
            'spec' => [
                'name' => 'firstName',
                'options' => [
                    'column' => 'md-6',
                    'row_class' => 'mb-3',
                    'label' => 'First name',
                    'valid_feedback' => 'Looks good!',
                    'row_name' => 'firstRow',
                ],
                'attributes' => [
                    'type' => 'text',
                    'value' => 'Mark',
                    'id' => 'validationServer01',
                    'required' => true,
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'lastName',
                'options' => [
                    'column' => 'md-6',
                    'row_class' => 'mb-3',
                    'label' => 'Last name',
                    'valid_feedback' => 'Looks good!',
                    'row_name' => 'firstRow',
                ],
                'attributes' => [
                    'type' => 'text',
                    'value' => 'Otto',
                    'id' => 'validationServer02',
                    'required' => true,
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'city',
                'options' => [
                    'column' => 'md-6',
                    'row_class' => 'mb-3',
                    'label' => 'City',
                    'row_name' => 'secondRow',
                ],
                'attributes' => [
                    'type' => 'text',
                    'id' => 'validationServer03',
                    'required' => true,
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'state',
                'type' => 'select',
                'options' => [
                    'custom' => true,
                    'empty_option' => ['label' => 'Choose...', 'selected' => true, 'disabled' => true],
                    'value_options' => ['...'],
                    'column' => 'md-3',
                    'row_class' => 'mb-3',
                    'label' => 'State',
                    'row_name' => 'secondRow',
                ],
                'attributes' => [
                    'id' => 'validationServer04',
                    'required' => true,
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'zip',
                'options' => [
                    'column' => 'md-3',
                    'row_class' => 'mb-3',
                    'label' => 'Zip',
                    'row_name' => 'secondRow',
                ],
                'attributes' => [
                    'type' => 'text',
                    'id' => 'validationServer05',
                    'required' => true,
                ],
            ],
        ],
        [
            'spec' => [
                'name' => 'termsAndConditions',
                'type' => 'checkbox',
                'options' => [
                    'label' => 'Agree to terms and conditions',
                    'use_hidden_element' => false,
                    'row_name' => 'thirdRow',
                ],
                'attributes' => [
                    'id' => 'invalidCheck3',
                    'required' => true,
                ],
            ],
        ],
        [
            'spec' => [
                'type' => 'submit',
                'options' => [
                    'label' => 'Submit', 'variant' => 'primary',
                    'row_name' => 'lastRow',
                    'form_group' => false,
                ],
            ],
        ],
    ],
]);

// Set error messages
$oForm->get('city')->setMessages(['Please provide a valid city.']);
$oForm->get('state')->setMessages(['Please select a valid state.']);
$oForm->get('zip')->setMessages(['Please provide a valid zip.']);
$oForm->get('termsAndConditions')->setMessages(['You must agree before submitting.']);

// Render form
echo $this->form($oForm);
```

<!-- tabs:end -->


##### Custom forms
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#custom-forms)
###### Checkboxes and radios
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#checkboxes-and-radios-1)
####### Checkboxes
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#checkboxes)
<!-- tabs:start -->

######## **Result**

<div class="custom-checkbox&#x20;custom-control">
    <input type="checkbox" name="custom_checkbox" id="customCheck1" class="form-check-input" value="1"/>
    <label class="form-check-label" for="customCheck1">Check this custom checkbox</label>
</div>

######## **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->formRow($oFactory->create([
    'name' => 'custom_checkbox',
    'type' => 'checkbox',
    'options' => [
        'label' => 'Check this custom checkbox',
        'use_hidden_element' => false,
        'form_group' => false,
        'custom' => true,
    ],
    'attributes' => [
        'id' => 'customCheck1',
    ],
]));
```

<!-- tabs:end -->


####### Radios
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#checkboxes)
<!-- tabs:start -->

######## **Result**

<div class="form-check">
    <input type="radio" name="customRadio" class="form-check-input" id="customRadio1" value="1"/>
    <label class="form-check-label" for="customRadio1">Toggle this custom radio</label>
</div>
<div class="form-check">
    <input type="radio" name="customRadio" class="form-check-input" id="customRadio2" value="2"/>
    <label class="form-check-label" for="customRadio2">Or toggle this other custom radio</label>
</div>

######## **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->formRow($oFactory->create([
    'name' => 'customRadio',
    'type' => 'radio',
    'options' => [
        'custom' => true,
        'value_options' => [
            [
                'label' => 'Toggle this custom radio',
                'value' => '1',
                'attributes' => ['id' => 'customRadio1'],
            ],
            [
                'label' => 'Or toggle this other custom radio',
                'value' => '2',
                'attributes' => ['id' => 'customRadio2'],
            ],
        ],
    ],
]));
```

<!-- tabs:end -->


####### Inline
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#inline-1)
<!-- tabs:start -->

######## **Result**

<div class="form-check&#x20;form-check-inline">
    <input type="radio" name="customRadioInline1" class="form-check-input" id="customRadioInline1" value="1"/>
    <label class="form-check-label" for="customRadioInline1">Toggle this custom radio</label>
</div>
<div class="form-check&#x20;form-check-inline">
    <input type="radio" name="customRadioInline1" class="form-check-input" id="customRadioInline2" value="2"/>
    <label class="form-check-label" for="customRadioInline2">Or toggle this other custom radio</label>
</div>

######## **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->formRow($oFactory->create([
    'name' => 'customRadioInline1',
    'type' => 'radio',
    'options' => [
        'layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE,
        'custom' => true,
        'value_options' => [
            [
                'label' => 'Toggle this custom radio',
                'value' => '1',
                'attributes' => ['id' => 'customRadioInline1'],
            ],
            [
                'label' => 'Or toggle this other custom radio',
                'value' => '2',
                'attributes' => ['id' => 'customRadioInline2'],
            ],
        ],
    ],
]));
```

<!-- tabs:end -->


####### Disabled
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#disabled)
<!-- tabs:start -->

######## **Result**

<div class="custom-checkbox&#x20;custom-control">
    <input type="checkbox" name="custom_checkbox_disabled" id="customCheckDisabled1" disabled="disabled" class="form-check-input" value="1"/>
    <label class="form-check-label" for="customCheckDisabled1">Check this custom checkbox</label>
</div>
<div class="form-check">
    <input type="radio" name="radioDisabled" disabled="disabled" class="form-check-input" id="customRadioDisabled2" value="1"/>
    <label class="form-check-label" for="customRadioDisabled2">Toggle this custom radio</label>
</div>

######## **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->formRow($oFactory->create([
    'name' => 'custom_checkbox_disabled',
    'type' => 'checkbox',
    'options' => [
        'label' => 'Check this custom checkbox',
        'use_hidden_element' => false,
        'form_group' => false,
        'custom' => true,
    ],
    'attributes' => [
        'id' => 'customCheckDisabled1',
        'disabled' => true,
    ],
])) . PHP_EOL;

echo $this->formRow($oFactory->create([
    'name' => 'radioDisabled',
    'type' => 'radio',
    'options' => [
        'custom' => true,
        'value_options' => [
            [
                'label' => 'Toggle this custom radio',
                'value' => '1',
                'attributes' => ['id' => 'customRadioDisabled2'],
            ],
        ],
    ],
    'attributes' => ['disabled' => true],
]));
```

<!-- tabs:end -->


###### Switches
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#switches)
<!-- tabs:start -->

####### **Result**

<div class="custom-control&#x20;custom-switch">
    <input type="checkbox" name="custom_switch" id="customSwitch1" class="form-check-input" value="1"/>
    <label class="form-check-label" for="customSwitch1">Toggle this switch element</label>
</div>
<div class="custom-control&#x20;custom-switch">
    <input type="checkbox" name="custom_switch" id="customSwitch2" disabled="disabled" class="form-check-input" value="1"/>
    <label class="form-check-label" for="customSwitch2">Disabled switch element</label>
</div>

####### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->formRow($oFactory->create([
    'name' => 'custom_switch',
    'type' => 'checkbox',
    'options' => [
        'label' => 'Toggle this switch element',
        'use_hidden_element' => false,
        'form_group' => false,
        'custom' => true,
        'switch' => true,
    ],
    'attributes' => ['id' => 'customSwitch1'],
])) . PHP_EOL;

echo $this->formRow($oFactory->create([
    'name' => 'custom_switch',
    'type' => 'checkbox',
    'options' => [
        'label' => 'Disabled switch element',
        'use_hidden_element' => false,
        'form_group' => false,
        'custom' => true,
        'switch' => true,
    ],
    'attributes' => [
        'id' => 'customSwitch2',
        'disabled' => true,
    ],
]));
```

<!-- tabs:end -->


###### Select menu
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#select-menu)
<!-- tabs:start -->

####### **Result**

<select name="custom_select" class="form-select">
    <option value="" selected="selected">Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
</select>
<br/><br/>
<select name="custom_select_lg" class="form-select&#x20;form-select-lg&#x20;mb-3">
    <option value="" selected="selected">Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
</select>
<br/><br/>
<select name="custom_select_sm" class="form-select&#x20;form-select-sm">
    <option value="" selected="selected">Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
</select>
<br/><br/>
<select name="custom_select_multiple&#x5B;&#x5D;" multiple="multiple" class="form-select">
    <option value="" selected="selected">Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
</select>
<br/><br/>
<select name="custom_select_size" size="3" class="form-select">
    <option value="" selected="selected">Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
</select>

####### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->formElement($oFactory->create([
    'name' => 'custom_select',
    'type' => 'select',
    'options' => [
        'custom' => true,
        'empty_option' => 'Open this select menu',
        'value_options' => [
            1 => 'One',
            2 => 'Two',
            3 => 'Three',
        ],
    ],
    ])->setValue('')) . PHP_EOL;
    
    echo '<br/><br/>' . PHP_EOL;
    
    // You may also choose from small and large custom selects to match our similarly sized text inputs.
    echo $this->formElement($oFactory->create([
        'name' => 'custom_select_lg',
        'type' => 'select',
        'options' => [
            'size' => 'lg',
            'custom' => true,
            'empty_option' => 'Open this select menu',
            'value_options' => [
                1 => 'One',
                2 => 'Two',
                3 => 'Three',
            ],
        ],
        'attributes' => ['class' => 'mb-3'],
        ])->setValue('')) . PHP_EOL;
        
        echo '<br/><br/>' . PHP_EOL;
        
        echo $this->formElement($oFactory->create([
            'name' => 'custom_select_sm',
            'type' => 'select',
            'options' => [
                'size' => 'sm',
                'custom' => true,
                'empty_option' => 'Open this select menu',
                'value_options' => [
                    1 => 'One',
                    2 => 'Two',
                    3 => 'Three',
                ],
            ],
            ])->setValue('')) . PHP_EOL;
            
            echo '<br/><br/>' . PHP_EOL;
            
            // The multiple attribute is also supported
            echo $this->formElement($oFactory->create([
                'name' => 'custom_select_multiple',
                'type' => 'select',
                'options' => [
                    'custom' => true,
                    'empty_option' => 'Open this select menu',
                    'value_options' => [
                        1 => 'One',
                        2 => 'Two',
                        3 => 'Three',
                    ],
                ],
                'attributes' => ['multiple' => true],
                ])->setValue('')) . PHP_EOL;
                
                echo '<br/><br/>' . PHP_EOL;
                
                // As is the size attribute
                echo $this->formElement($oFactory->create([
                    'name' => 'custom_select_size',
                    'type' => 'select',
                    'options' => [
                        'custom' => true,
                        'empty_option' => 'Open this select menu',
                        'value_options' => [
                            1 => 'One',
                            2 => 'Two',
                            3 => 'Three',
                        ],
                    ],
                    'attributes' => ['size' => 3],
                    ])->setValue(''));
```

<!-- tabs:end -->


###### Range
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#range)
<!-- tabs:start -->

####### **Result**

<label class="form-label" for="customRange1">Example range</label>
<input type="range" name="custom_range" id="customRange1" class="custom-range" value=""/>

####### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->formRow($oFactory->create([
    'name' => 'custom_range',
    'type' => 'range',
    'options' => [
        'custom' => true,
        'label' => 'Example range',
        'form_group' => false,
    ],
    'attributes' => ['id' => 'customRange1'],
]));
```

<!-- tabs:end -->


###### File browser
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#file-browser)
<!-- tabs:start -->

####### **Result**

<input type="file" name="custom_file" id="customFile"/>

####### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->formRow($oFactory->create([
    'name' => 'custom_file',
    'type' => 'file',
    'options' => [
        'custom' => true,
        'custom_label' => 'Choose file',
        'form_group' => false,
    ],
    'attributes' => ['id' => 'customFile'],
]));
```

<!-- tabs:end -->


####### Translating or customizing the strings with HTML
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/forms/#translating-or-customizing-the-strings-with-html)
<!-- tabs:start -->

######## **Result**

<input type="file" name="custom_file" id="customFileLangHTML"/>

######## **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->formRow($oFactory->create([
    'name' => 'custom_file',
    'type' => 'file',
    'options' => [
        'custom' => true,
        'custom_label' => 'Voeg je document toe',
        'form_group' => false,
        'label_attributes' => [
            'data-browse' => 'Bestand kiezen',
        ],
    ],
    'attributes' => ['id' => 'customFileLangHTML'],
]));
```

<!-- tabs:end -->


##### Button groups
<!-- tabs:start -->

###### **Result**

<form action="" method="POST" name="form" role="form" id="form">
    <div class="mb-3">
        <label class="form-label" for="email">Email</label>
        <input name="email" type="email" class="form-control" value=""/>
    </div>
    <div class="btn-group&#x20;form-group">
        <button type="button" name="button1" class="btn&#x20;btn-secondary" value="">Button 1</button>
        <button type="button" name="button2" class="btn&#x20;btn-secondary" value="">Button 2</button>
    </div>
    <div class="mb-3">
        <button type="submit" name="submit" class="btn&#x20;btn-primary" value="">Submit</button>
    </div>
</form>

###### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->form($oFactory->create([
    'type' => 'form',
    'elements' => [
        [
            'spec' => [
                'name' => 'email',
                'options' => ['label' => 'Email'],
                'attributes' => ['type' => 'email'],
            ]
        ],
        [
            'spec' => [
                'type' => \Laminas\Form\Element\Button::class,
                'name' => 'button1',
            'options' => ['label' => 'Button 1', 'row_name' => 'my-button-group']
        ]
    ],
    [
        'spec' => [
            'type' => \Laminas\Form\Element\Button::class,
            'name' => 'button2',
        'options' => ['label' => 'Button 2', 'row_name' => 'my-button-group']
    ]
],

[
    'spec' => [
        'type' => 'submit',
        'options' => ['label' => 'Submit', 'variant' => 'primary'],
    ]
],
],
]));
```

<!-- tabs:end -->


#### Input group
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/input-group/)
##### Basic example
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/input-group/#basic-example)
<!-- tabs:start -->

###### **Result**

<div class="input-group&#x20;mb-3">
    <div class="input-group-prepend">
        <div class="input-group-text" id="basic-addon1">
            @
        </div>
    </div>
    <input type="text" name="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" class="form-control" value=""/>
</div>
<div class="input-group&#x20;mb-3">
    <input type="text" name="recipient_username" placeholder="Recipient&#x27;s&#x20;username" aria-label="Recipient&#x27;s&#x20;username" aria-describedby="basic-addon2" class="form-control" value=""/>
    <div class="input-group-append">
        <div class="input-group-text" id="basic-addon2">
            @example.com
        </div>
    </div>
</div>
<label class="form-label" for="basic-url">Your vanity URL</label>
<div class="input-group&#x20;mb-3">
    <div class="input-group-prepend">
        <div class="input-group-text" id="basic-addon3">
            https://example.com/users/
        </div>
    </div>
    <input type="text" name="url" id="basic-url" aria-describedby="basic-addon3" class="form-control" value=""/>
</div>
<div class="input-group&#x20;mb-3">
    <div class="input-group-prepend">
        <div class="input-group-text">
            $
        </div>
    </div>
    <input type="text" name="amount" aria-label="Amount&#x20;&#x28;to&#x20;the&#x20;nearest&#x20;dollar&#x29;" class="form-control" value=""/>
    <div class="input-group-append">
        <div class="input-group-text">
            .00
        </div>
    </div>
</div>
<div class="input-group">
    <div class="input-group-prepend">
        <div class="input-group-text">
            With textarea
        </div>
    </div>
    <textarea name="textarea" aria-label="With&#x20;textarea" class="form-control"></textarea>
</div>

###### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->formRow($oFactory->create([
    'name' => 'username',
    'type' => 'text',
    'options' => [
        'form_group' => false,
        'input_group_class' => 'mb-3',
        'add_on_prepend' => '@',
    ],
    'attributes' => [
        'placeholder' => 'Username',
        'aria-label' => 'Username',
        'aria-describedby' => 'basic-addon1',
    ],
])) . PHP_EOL;

echo $this->formRow($oFactory->create([
    'name' => 'recipient_username',
    'type' => 'text',
    'options' => [
        'form_group' => false,
        'input_group_class' => 'mb-3',
        'add_on_append' => '@example.com',
    ],
    'attributes' => [
        'placeholder' => 'Recipient\'s username',
        'aria-label' => 'Recipient\'s username',
        'aria-describedby' => 'basic-addon2',
    ],
])) . PHP_EOL;

echo $this->formRow($oFactory->create([
    'name' => 'url',
    'type' => 'text',
    'options' => [
        'label' => 'Your vanity URL',
        'form_group' => false,
        'input_group_class' => 'mb-3',
        'add_on_prepend' => 'https://example.com/users/',
    ],
    'attributes' => [
        'id' => 'basic-url',
        'aria-describedby' => 'basic-addon3',
    ],
])) . PHP_EOL;

echo $this->formRow($oFactory->create([
    'name' => 'amount',
    'type' => 'text',
    'options' => [
        'form_group' => false,
        'input_group_class' => 'mb-3',
        'add_on_prepend' => '$',
        'add_on_append' => '.00',
    ],
    'attributes' => [
        'aria-label' => 'Amount (to the nearest dollar)',
    ],
])) . PHP_EOL;

echo $this->formRow($oFactory->create([
    'name' => 'textarea',
    'type' => 'textarea',
    'options' => [
        'form_group' => false,
        'add_on_prepend' => 'With textarea',
    ],
    'attributes' => [
        'aria-label' => 'With textarea',
    ],
]));
```

<!-- tabs:end -->


##### Wrapping
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/input-group/#wrapping)
<!-- tabs:start -->

###### **Result**

<div class="flex-nowrap&#x20;input-group">
    <div class="input-group-prepend">
        <div class="input-group-text" id="addon-wrapping">
            @
        </div>
    </div>
    <input type="text" name="username" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" class="form-control" value=""/>
</div>

###### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->formRow($oFactory->create([
    'name' => 'username',
    'type' => 'text',
    'options' => [
        'form_group' => false,
        'input_group_class' => 'flex-nowrap',
        'add_on_prepend' => '@',
    ],
    'attributes' => [
        'placeholder' => 'Username',
        'aria-label' => 'Username',
        'aria-describedby' => 'addon-wrapping',
    ],
]));
```

<!-- tabs:end -->


##### Sizing
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/input-group/#sizing)
<!-- tabs:start -->

###### **Result**

<div class="input-group&#x20;input-group-sm&#x20;mb-3">
    <div class="input-group-prepend">
        <div class="input-group-text" id="inputGroup-sizing-sm">
            Small
        </div>
    </div>
    <input type="text" name="small" aria-label="Sizing&#x20;example&#x20;input" aria-describedby="inputGroup-sizing-sm" class="form-control&#x20;form-control-sm" value=""/>
</div>
<div class="input-group&#x20;mb-3">
    <div class="input-group-prepend">
        <div class="input-group-text" id="inputGroup-sizing-default">
            Default
        </div>
    </div>
    <input type="text" name="default" aria-label="Sizing&#x20;example&#x20;input" aria-describedby="inputGroup-sizing-default" class="form-control" value=""/>
</div>
<div class="input-group&#x20;input-group-lg">
    <div class="input-group-prepend">
        <div class="input-group-text" id="inputGroup-sizing-lg">
            Large
        </div>
    </div>
    <input type="text" name="large" aria-label="Sizing&#x20;example&#x20;input" aria-describedby="inputGroup-sizing-lg" class="form-control&#x20;form-control-lg" value=""/>
</div>

###### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

// Small
echo $this->formRow($oFactory->create([
    'name' => 'small',
    'type' => 'text',
    'options' => [
        'form_group' => false,
        'input_group_class' => 'mb-3',
        'add_on_prepend' => 'Small',
        'size' => 'sm',
    ],
    'attributes' => [
        'aria-label' => 'Sizing example input',
        'aria-describedby' => 'inputGroup-sizing-sm',
    ],
])) . PHP_EOL;

// Default
echo $this->formRow($oFactory->create([
    'name' => 'default',
    'type' => 'text',
    'options' => [
        'form_group' => false,
        'input_group_class' => 'mb-3',
        'add_on_prepend' => 'Default',
    ],
    'attributes' => [
        'aria-label' => 'Sizing example input',
        'aria-describedby' => 'inputGroup-sizing-default',
    ],
])) . PHP_EOL;

// Large
echo $this->formRow($oFactory->create([
    'name' => 'large',
    'type' => 'text',
    'options' => [
        'form_group' => false,
        'add_on_prepend' => 'Large',
        'size' => 'lg',
    ],
    'attributes' => [
        'aria-label' => 'Sizing example input',
        'aria-describedby' => 'inputGroup-sizing-lg',
    ],
]));
```

<!-- tabs:end -->


##### Checkboxes and radios
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/input-group/#checkboxes-and-radios)
<!-- tabs:start -->

###### **Result**

<div class="input-group&#x20;mb-3">
    <div class="input-group-prepend">
        <div class="input-group-text">
            <input type="checkbox" name="checkbox" aria-label="Checkbox&#x20;for&#x20;following&#x20;text&#x20;input" value="1"/>
        </div>
    </div>
    <input type="text" name="checkbox-text" aria-label="Text&#x20;input&#x20;with&#x20;checkbox" class="form-control" value=""/>
</div>
<div class="input-group">
    <div class="input-group-prepend">
        <div class="input-group-text">
            <input type="radio" name="radio" aria-label="Radio&#x20;button&#x20;for&#x20;following&#x20;text&#x20;input" value=""/>
        </div>
    </div>
    <input type="text" name="radio-text" aria-label="Text&#x20;input&#x20;with&#x20;radio&#x20;button" class="form-control" value=""/>
</div>

###### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->formRow($oFactory->create([
    'name' => 'checkbox-text',
    'type' => 'text',
    'options' => [
        'form_group' => false,
        'input_group_class' => 'mb-3',
        'add_on_prepend' => [
            'element' => [
                'type' => 'checkbox',
                'options' => [
                    'use_hidden_element' => false,
                ],
                'attributes' => [
                    'aria-label' => 'Checkbox for following text input',
                ],
            ],
        ],
    ],
    'attributes' => [
        'aria-label' => 'Text input with checkbox',
    ],
])) . PHP_EOL;

echo $this->formRow($oFactory->create([
    'name' => 'radio-text',
    'type' => 'text',
    'options' => [
        'form_group' => false,
        'add_on_prepend' => [
            'element' => [
                'type' => 'radio',
                'options' => [
                    'value_options' => [
                        [
                            'label' => '',
                            'attributes' => [
                                'aria-label' => 'Radio button for following text input',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'attributes' => [
        'aria-label' => 'Text input with radio button',
    ],
]));
```

<!-- tabs:end -->


##### Multiple addons
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/input-group/#multiple-addons)
<!-- tabs:start -->

###### **Result**

<div class="input-group&#x20;mb-3">
    <div class="input-group-prepend">
        <div class="input-group-text">
            $
        </div>
        <div class="input-group-text">
            0.00
        </div>
    </div>
    <input type="text" name="multiple-addons-prepend" aria-label="Dollar&#x20;amount&#x20;&#x28;with&#x20;dot&#x20;and&#x20;two&#x20;decimal&#x20;places&#x29;" class="form-control" value=""/>
</div>
<div class="input-group&#x20;mb-3">
    <input type="text" name="multiple-addons-append" aria-label="Dollar&#x20;amount&#x20;&#x28;with&#x20;dot&#x20;and&#x20;two&#x20;decimal&#x20;places&#x29;" class="form-control" value=""/>
    <div class="input-group-append">
        <div class="input-group-text">
            $
        </div>
        <div class="input-group-text">
            0.00
        </div>
    </div>
</div>

###### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->formRow($oFactory->create([
    'name' => 'multiple-addons-prepend',
    'type' => 'text',
    'options' => [
        'form_group' => false,
        'input_group_class' => 'mb-3',
        'add_on_prepend' => ['$', '0.00'],
    ],
    'attributes' => [
        'aria-label' => 'Dollar amount (with dot and two decimal places)',
    ],
])) . PHP_EOL;

echo $this->formRow($oFactory->create([
    'name' => 'multiple-addons-append',
    'type' => 'text',
    'options' => [
        'form_group' => false,
        'input_group_class' => 'mb-3',
        'add_on_append' => ['$', '0.00'],
    ],
    'attributes' => [
        'aria-label' => 'Dollar amount (with dot and two decimal places)',
    ],
]));
```

<!-- tabs:end -->


##### Button addons
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/input-group/#button-addons)
<!-- tabs:start -->

###### **Result**

<div class="input-group&#x20;mb-3">
    <div class="input-group-prepend">
        <button type="button" name="button" id="button-addon1" class="btn&#x20;btn-outline-secondary" value="">Button</button>
    </div>
    <input type="text" name="button-prepend" placeholder="" aria-label="Example&#x20;text&#x20;with&#x20;button&#x20;addon" aria-describedby="button-addon1" class="form-control" value=""/>
</div>
<div class="input-group&#x20;mb-3">
    <input type="text" name="button-append" placeholder="Recipient&#x27;s&#x20;username" aria-label="Recipient&#x27;s&#x20;username" aria-describedby="button-addon2" class="form-control" value=""/>
    <div class="input-group-append">
        <button type="button" name="button" id="button-addon2" class="btn&#x20;btn-outline-secondary" value="">Button</button>
    </div>
</div>
<div class="input-group&#x20;mb-3">
    <div class="input-group-prepend" id="button-addon3">
        <button type="button" name="button" class="btn&#x20;btn-outline-secondary" value="">Button</button>
        <button type="button" name="button" class="btn&#x20;btn-outline-secondary" value="">Button</button>
    </div>
    <input type="text" name="buttons-prepend" placeholder="" aria-label="Example&#x20;text&#x20;with&#x20;two&#x20;button&#x20;addons" aria-describedby="button-addon3" class="form-control" value=""/>
</div>
<div class="input-group">
    <input type="text" name="button-append" placeholder="Recipient&#x27;s&#x20;username" aria-label="Recipient&#x27;s&#x20;username&#x20;with&#x20;two&#x20;button&#x20;addons" aria-describedby="button-addon4" class="form-control" value=""/>
    <div class="input-group-append" id="button-addon4">
        <button type="button" name="button" class="btn&#x20;btn-outline-secondary" value="">Button</button>
        <button type="button" name="button" class="btn&#x20;btn-outline-secondary" value="">Button</button>
    </div>
</div>

###### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->formRow($oFactory->create([
    'name' => 'button-prepend',
    'type' => 'text',
    'options' => [
        'form_group' => false,
        'input_group_class' => 'mb-3',
        'add_on_prepend' => [
            'element' => [
                'type' => 'button',
                'options' => [
                    'label' => 'Button',
                    'variant' => 'outline-secondary',
                ],
            ],
        ],
    ],
    'attributes' => [
        'placeholder' => '',
        'aria-label' => 'Example text with button addon',
        'aria-describedby' => 'button-addon1',
    ],
])) . PHP_EOL;

echo $this->formRow($oFactory->create([
    'name' => 'button-append',
    'type' => 'text',
    'options' => [
        'form_group' => false,
        'input_group_class' => 'mb-3',
        'add_on_append' => [
            'element' => [
                'type' => 'button',
                'options' => [
                    'label' => 'Button',
                    'variant' => 'outline-secondary',
                ],
            ],
        ],
    ],
    'attributes' => [
        'placeholder' => 'Recipient\'s username',
        'aria-label' => 'Recipient\'s username',
        'aria-describedby' => 'button-addon2',
    ],
])) . PHP_EOL;

echo $this->formRow($oFactory->create([
    'name' => 'buttons-prepend',
    'type' => 'text',
    'options' => [
        'form_group' => false,
        'input_group_class' => 'mb-3',
        'add_on_prepend' => [
            [
                'element' => [
                    'type' => 'button',
                    'options' => [
                        'label' => 'Button',
                        'variant' => 'outline-secondary',
                    ],
                ],
            ],
            [
                'element' => [
                    'type' => 'button',
                    'options' => [
                        'label' => 'Button',
                        'variant' => 'outline-secondary',
                    ],
                ],
            ],
        ],
    ],
    'attributes' => [
        'placeholder' => '',
        'aria-label' => 'Example text with two button addons',
        'aria-describedby' => 'button-addon3',
    ],
])) . PHP_EOL;

echo $this->formRow($oFactory->create([
    'name' => 'button-append',
    'type' => 'text',
    'options' => [
        'form_group' => false,
        'add_on_append' => [
            [
                'element' => [
                    'type' => 'button',
                    'options' => [
                        'label' => 'Button',
                        'variant' => 'outline-secondary',
                    ],
                ],
            ],
            [
                'element' => [
                    'type' => 'button',
                    'options' => [
                        'label' => 'Button',
                        'variant' => 'outline-secondary',
                    ],
                ],
            ],
        ],
    ],
    'attributes' => [
        'placeholder' => 'Recipient\'s username',
        'aria-label' => 'Recipient\'s username with two button addons',
        'aria-describedby' => 'button-addon4',
    ],
]));
```

<!-- tabs:end -->


##### Buttons with dropdowns
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/input-group/#buttons-with-dropdowns)
<!-- tabs:start -->

###### **Result**

<div class="input-group&#x20;mb-3">
    <div class="input-group-prepend">
        <button type="button" name="button" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-outline-secondary&#x20;dropdown-toggle" value="">Dropdown</button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="&#x23;">Action</a>
            <a class="dropdown-item" href="&#x23;">Another action</a>
            <a class="dropdown-item" href="&#x23;">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="&#x23;">Separated link</a>
        </div>
    </div>
    <input type="text" name="dropdown-prepend" aria-label="Text&#x20;input&#x20;with&#x20;dropdown&#x20;button" class="form-control" value=""/>
</div>
<div class="input-group">
    <input type="text" name="dropdown-append" aria-label="Text&#x20;input&#x20;with&#x20;dropdown&#x20;button" class="form-control" value=""/>
    <div class="input-group-append">
        <button type="button" name="button" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-outline-secondary&#x20;dropdown-toggle" value="">Dropdown</button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="&#x23;">Action</a>
            <a class="dropdown-item" href="&#x23;">Another action</a>
            <a class="dropdown-item" href="&#x23;">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="&#x23;">Separated link</a>
        </div>
    </div>
</div>

###### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->formRow($oFactory->create([
    'name' => 'dropdown-prepend',
    'type' => 'text',
    'options' => [
        'form_group' => false,
        'input_group_class' => 'mb-3',
        'add_on_prepend' => [
            'element' => [
                'type' => 'button',
                'options' => [
                    'label' => 'Dropdown',
                    'variant' => 'outline-secondary',
                    'dropdown' => [
                        'Action',
                        'Another action',
                        'Something else here',
                        '---',
                        'Separated link',
                    ],
                ],
            ],
        ],
    ],
    'attributes' => [
        'aria-label' => 'Text input with dropdown button',
    ],
])) . PHP_EOL;

echo $this->formRow($oFactory->create([
    'name' => 'dropdown-append',
    'type' => 'text',
    'options' => [
        'form_group' => false,
        'add_on_append' => [
            'element' => [
                'type' => 'button',
                'options' => [
                    'label' => 'Dropdown',
                    'variant' => 'outline-secondary',
                    'dropdown' => [
                        'Action',
                        'Another action',
                        'Something else here',
                        '---',
                        'Separated link',
                    ],
                ],
            ],
        ],
    ],
    'attributes' => [
        'aria-label' => 'Text input with dropdown button',
    ],
]));
```

<!-- tabs:end -->


##### Segmented buttons
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/input-group/#segmented-buttons)
<!-- tabs:start -->

###### **Result**

<div class="input-group&#x20;mb-3">
    <div class="input-group-prepend">
        <button type="button" name="button" class="btn&#x20;btn-outline-secondary" value="">Action</button>
        <button type="button" name="button-toggle" class="btn&#x20;btn-outline-secondary&#x20;dropdown-toggle&#x20;dropdown-toggle-split" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" value=""><span class="sr-only">Toggle Dropdown</span></button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="&#x23;">Action</a>
            <a class="dropdown-item" href="&#x23;">Another action</a>
            <a class="dropdown-item" href="&#x23;">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="&#x23;">Separated link</a>
        </div>
    </div>
    <input type="text" name="segmented-dropdown-prepend" aria-label="Text&#x20;input&#x20;with&#x20;segmented&#x20;dropdown&#x20;button" class="form-control" value=""/>
</div>
<div class="input-group">
    <input type="text" name="segmented-dropdown-append" aria-label="Text&#x20;input&#x20;with&#x20;segmented&#x20;dropdown&#x20;button" class="form-control" value=""/>
    <div class="input-group-append">
        <button type="button" name="button" class="btn&#x20;btn-outline-secondary" value="">Action</button>
        <button type="button" name="button-toggle" class="btn&#x20;btn-outline-secondary&#x20;dropdown-toggle&#x20;dropdown-toggle-split" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" value=""><span class="sr-only">Toggle Dropdown</span></button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="&#x23;">Action</a>
            <a class="dropdown-item" href="&#x23;">Another action</a>
            <a class="dropdown-item" href="&#x23;">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="&#x23;">Separated link</a>
        </div>
    </div>
</div>

###### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->formRow($oFactory->create([
    'name' => 'segmented-dropdown-prepend',
    'type' => 'text',
    'options' => [
        'form_group' => false,
        'input_group_class' => 'mb-3',
        'add_on_prepend' => [
            'element' => [
                'type' => 'button',
                'options' => [
                    'label' => 'Action',
                    'variant' => 'outline-secondary',
                    'dropdown' => [
                        'split' => 'Toggle Dropdown',
                        'items' => [
                            'Action',
                            'Another action',
                            'Something else here',
                            '---',
                            'Separated link',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'attributes' => [
        'aria-label' => 'Text input with segmented dropdown button',
    ],
])) . PHP_EOL;

echo $this->formRow($oFactory->create([
    'name' => 'segmented-dropdown-append',
    'type' => 'text',
    'options' => [
        'form_group' => false,
        'add_on_append' => [
            'element' => [
                'type' => 'button',
                'options' => [
                    'label' => 'Action',
                    'variant' => 'outline-secondary',
                    'dropdown' => [
                        'split' => 'Toggle Dropdown',
                        'items' => [
                            'Action',
                            'Another action',
                            'Something else here',
                            '---',
                            'Separated link',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'attributes' => [
        'aria-label' => 'Text input with segmented dropdown button',
    ],
]));
```

<!-- tabs:end -->


##### Custom forms
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/input-group/#custom-forms)
###### Custom select
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/input-group/#form-select)
<!-- tabs:start -->

####### **Result**

<div class="input-group&#x20;mb-3">
    <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Options</label>
    </div>
    <select name="select_label_prepend" id="inputGroupSelect01" class="form-select">
        <option value="" selected="selected">Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
</div>
<div class="input-group&#x20;mb-3">
    <select name="select_label_append" id="inputGroupSelect02" class="form-select">
        <option value="" selected="selected">Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    <div class="input-group-append">
        <label class="input-group-text" for="inputGroupSelect02">Options</label>
    </div>
</div>
<div class="input-group&#x20;mb-3">
    <div class="input-group-prepend">
        <button type="button" name="button" class="btn&#x20;btn-outline-secondary" value="">Button</button>
    </div>
    <select name="select_button_prepend" id="inputGroupSelect03" aria-label="Example&#x20;select&#x20;with&#x20;button&#x20;addon" class="form-select">
        <option value="" selected="selected">Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
</div>
<div class="input-group">
    <select name="select_button_append" id="inputGroupSelect04" aria-label="Example&#x20;select&#x20;with&#x20;button&#x20;addon" class="form-select">
        <option value="" selected="selected">Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    <div class="input-group-append">
        <button type="button" name="button" class="btn&#x20;btn-outline-secondary" value="">Button</button>
    </div>
</div>

####### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->formElement($oFactory->create([
    'name' => 'select_label_prepend',
    'type' => 'select',
    'options' => [
        'form_group' => false,
        'input_group_class' => 'mb-3',
        'custom' => true,
        'empty_option' => 'Choose...',
        'value_options' => [
            1 => 'One',
            2 => 'Two',
            3 => 'Three',
        ],
        'add_on_prepend' => ['label' => 'Options'],
    ],
    'attributes' => [
        'id' => 'inputGroupSelect01',
    ],
    ])->setValue('')) . PHP_EOL;
    
    echo $this->formElement($oFactory->create([
        'name' => 'select_label_append',
        'type' => 'select',
        'options' => [
            'form_group' => false,
            'input_group_class' => 'mb-3',
            'custom' => true,
            'empty_option' => 'Choose...',
            'value_options' => [
                1 => 'One',
                2 => 'Two',
                3 => 'Three',
            ],
            'add_on_append' => ['label' => 'Options'],
        ],
        'attributes' => [
            'id' => 'inputGroupSelect02',
        ],
        ])->setValue('')) . PHP_EOL;
        
        echo $this->formElement($oFactory->create([
            'name' => 'select_button_prepend',
            'type' => 'select',
            'options' => [
                'form_group' => false,
                'input_group_class' => 'mb-3',
                'custom' => true,
                'empty_option' => 'Choose...',
                'value_options' => [
                    1 => 'One',
                    2 => 'Two',
                    3 => 'Three',
                ],
                'add_on_prepend' => [
                    'element' => [
                        'type' => 'button',
                        'options' => [
                            'label' => 'Button',
                            'variant' => 'outline-secondary',
                        ],
                    ],
                ],
            ],
            'attributes' => [
                'id' => 'inputGroupSelect03',
                'aria-label' => 'Example select with button addon',
            ],
            ])->setValue('')) . PHP_EOL;
            
            
            echo $this->formElement($oFactory->create([
                'name' => 'select_button_append',
                'type' => 'select',
                'options' => [
                    'form_group' => false,
                    'custom' => true,
                    'empty_option' => 'Choose...',
                    'value_options' => [
                        1 => 'One',
                        2 => 'Two',
                        3 => 'Three',
                    ],
                    'add_on_append' => [
                        'element' => [
                            'type' => 'button',
                            'options' => [
                                'label' => 'Button',
                                'variant' => 'outline-secondary',
                            ],
                        ],
                    ],
                ],
                'attributes' => [
                    'id' => 'inputGroupSelect04',
                    'aria-label' => 'Example select with button addon',
                ],
                ])->setValue(''));
```

<!-- tabs:end -->


###### Custom file input
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/input-group/#custom-file-input)
<!-- tabs:start -->

####### **Result**

<div class="input-group&#x20;mb-3">
    <div class="input-group-prepend">
        <div class="input-group-text" id="inputGroupFileAddon01">
            Upload
        </div>
    </div>
    <input type="file" name="custom_file_label_prepend" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01"/>
</div>
<div class="input-group&#x20;mb-3">
    <input type="file" name="custom_file_label_append" id="inputGroupFile02" aria-describedby="inputGroupFileAddon02"/>
    <div class="input-group-append">
        <div class="input-group-text" id="inputGroupFileAddon02">
            Upload
        </div>
    </div>
</div>
<div class="input-group&#x20;mb-3">
    <div class="input-group-prepend">
        <button type="button" name="button" id="inputGroupFileAddon03" class="btn&#x20;btn-outline-secondary" value="">Button</button>
    </div>
    <input type="file" name="custom_file_button_prepend" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03"/>
</div>
<div class="input-group&#x20;mb-3">
    <input type="file" name="custom_file_button_append" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04"/>
    <div class="input-group-append">
        <button type="button" name="button" id="inputGroupFileAddon04" class="btn&#x20;btn-outline-secondary" value="">Button</button>
    </div>
</div>

####### **Source**

```php
$oFactory = new \Laminas\Form\Factory();

echo $this->formRow($oFactory->create([
    'name' => 'custom_file_label_prepend',
    'type' => 'file',
    'options' => [
        'custom' => true,
        'custom_label' => 'Choose file',
        'form_group' => false,
        'input_group_class' => 'mb-3',
        'add_on_prepend' => 'Upload',
    ],
    'attributes' => [
        'id' => 'inputGroupFile01',
        'aria-describedby' => 'inputGroupFileAddon01',
    ],
])) . PHP_EOL;

echo $this->formRow($oFactory->create([
    'name' => 'custom_file_label_append',
    'type' => 'file',
    'options' => [
        'custom' => true,
        'custom_label' => 'Choose file',
        'form_group' => false,
        'input_group_class' => 'mb-3',
        'add_on_append' => 'Upload',
    ],
    'attributes' => [
        'id' => 'inputGroupFile02',
        'aria-describedby' => 'inputGroupFileAddon02',
    ],
])) . PHP_EOL;

echo $this->formRow($oFactory->create([
    'name' => 'custom_file_button_prepend',
    'type' => 'file',
    'options' => [
        'custom' => true,
        'custom_label' => 'Choose file',
        'form_group' => false,
        'input_group_class' => 'mb-3',
        'add_on_prepend' => [
            'element' => [
                'type' => 'button',
                'options' => [
                    'label' => 'Button',
                    'variant' => 'outline-secondary',
                ],
            ],
        ],
    ],
    'attributes' => [
        'id' => 'inputGroupFile03',
        'aria-describedby' => 'inputGroupFileAddon03',
    ],
])) . PHP_EOL;

echo $this->formRow($oFactory->create([
    'name' => 'custom_file_button_append',
    'type' => 'file',
    'options' => [
        'custom' => true,
        'custom_label' => 'Choose file',
        'form_group' => false,
        'input_group_class' => 'mb-3',
        'add_on_append' => [
            'element' => [
                'type' => 'button',
                'options' => [
                    'label' => 'Button',
                    'variant' => 'outline-secondary',
                ],
            ],
        ],
    ],
    'attributes' => [
        'id' => 'inputGroupFile04',
        'aria-describedby' => 'inputGroupFileAddon04',
    ],
]));
```

<!-- tabs:end -->


#### Jumbotron
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/jumbotron/)
<!-- tabs:start -->

##### **Result**

<div class="jumbotron">
    <h1 class="display-4">Hello, world!</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4" />
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <a href="&#x23;" class="btn&#x20;btn-lg&#x20;btn-primary" role="button">Learn more</a>
</div>
<div class="jumbotron&#x20;jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Fluid jumbotron</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
</div>

##### **Source**

```php
echo $this->jumbotron([
    'title' => 'Hello, world!',
    'lead' => 'This is a simple hero unit, a simple jumbotron-style component ' .
    'for calling extra attention to featured content or information.',
    '---' => ['attributes' => ['class' => 'my-4']],
    'It uses utility classes for typography and spacing to space ' .
    'content out within the larger container.',
    'button' => [
        'options' => [
            'tag' => 'a',
            'label' => 'Learn more',
            'variant' => 'primary',
            'size' => 'lg',
        ],
        'attributes' => [
            'href' => '#',
        ]
    ],
]) . PHP_EOL;

// To make the jumbotron full width, and without rounded corners, add the option fluid
echo $this->jumbotron(
    [
        'title' => 'Fluid jumbotron',
        'lead' => 'This is a modified jumbotron that occupies the entire horizontal space of its parent.',
    ],
['fluid' => true]
);
```

<!-- tabs:end -->


#### List group
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/list-group/)
##### Basic example
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/list-group/#basic-example)
<!-- tabs:start -->

###### **Result**

<ul class="list-group">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Morbi leo risus</li>
    <li class="list-group-item">Porta ac consectetur ac</li>
    <li class="list-group-item">Vestibulum at eros</li>
</ul>

###### **Source**

```php
echo $this->listGroup([
    'Cras justo odio',
    'Dapibus ac facilisis in',
    'Morbi leo risus',
    'Porta ac consectetur ac',
    'Vestibulum at eros',
]);
```

<!-- tabs:end -->


##### Active items
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/list-group/#active-items)
<!-- tabs:start -->

###### **Result**

<ul class="list-group">
    <li class="active&#x20;list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Morbi leo risus</li>
    <li class="list-group-item">Porta ac consectetur ac</li>
    <li class="list-group-item">Vestibulum at eros</li>
</ul>

###### **Source**

```php
echo $this->listGroup([
    'Cras justo odio' => ['active' => true],
    'Dapibus ac facilisis in',
    'Morbi leo risus',
    'Porta ac consectetur ac',
    'Vestibulum at eros',
]);
```

<!-- tabs:end -->


##### Disabled  items
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/list-group/#disabled-items)
<!-- tabs:start -->

###### **Result**

<ul class="list-group">
    <li aria-disabled="true" class="disabled&#x20;list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Morbi leo risus</li>
    <li class="list-group-item">Porta ac consectetur ac</li>
    <li class="list-group-item">Vestibulum at eros</li>
</ul>

###### **Source**

```php
echo $this->listGroup([
    'Cras justo odio' => ['disabled' => true],
    'Dapibus ac facilisis in',
    'Morbi leo risus',
    'Porta ac consectetur ac',
    'Vestibulum at eros',
]);
```

<!-- tabs:end -->


##### Links and buttons
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/list-group/#links-and-buttons)
<!-- tabs:start -->

###### **Result**

<div class="list-group">
    <a class="active&#x20;list-group-item&#x20;list-group-item-action" href="&#x23;">Cras justo odio</a>
    <a class="list-group-item&#x20;list-group-item-action" href="&#x23;">Dapibus ac facilisis in</a>
    <a class="list-group-item&#x20;list-group-item-action" href="&#x23;">Morbi leo risus</a>
    <a class="list-group-item&#x20;list-group-item-action" href="&#x23;">Porta ac consectetur ac</a>
    <a aria-disabled="true" class="disabled&#x20;list-group-item&#x20;list-group-item-action" href="&#x23;" tabindex="-1">Vestibulum at eros</a>
</div>
<br/>
<div class="list-group">
    <button class="active&#x20;list-group-item&#x20;list-group-item-action" type="button">Cras justo odio</button>
    <button class="list-group-item&#x20;list-group-item-action" type="button">Dapibus ac facilisis in</button>
    <button class="list-group-item&#x20;list-group-item-action" type="button">Morbi leo risus</button>
    <button class="list-group-item&#x20;list-group-item-action" type="button">Porta ac consectetur ac</button>
    <button aria-disabled="true" class="list-group-item&#x20;list-group-item-action" disabled="disabled" type="button">Vestibulum at eros</button>
</div>

###### **Source**

```php
echo $this->listGroup([
    'Cras justo odio' => [
        'active' => true,
        'attributes' => ['href' => '#'],
    ],
    'Dapibus ac facilisis in' => ['attributes' => ['href' => '#']],
    'Morbi leo risus' => ['attributes' => ['href' => '#']],
    'Porta ac consectetur ac' => ['attributes' => ['href' => '#']],
    'Vestibulum at eros' => [
        'disabled' => true,
        'attributes' => ['href' => '#'],
    ],
], ['type' => 'action']) . PHP_EOL;

echo '<br/>' . PHP_EOL;

echo $this->listGroup([
    'Cras justo odio' => ['active' => true],
    'Dapibus ac facilisis in',
    'Morbi leo risus',
    'Porta ac consectetur ac',
    'Vestibulum at eros' => ['disabled' => true],
], ['type' => 'button']);
```

<!-- tabs:end -->


##### Flush
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/list-group/#flush)
<!-- tabs:start -->

###### **Result**

<ul class="list-group&#x20;list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Morbi leo risus</li>
    <li class="list-group-item">Porta ac consectetur ac</li>
    <li class="list-group-item">Vestibulum at eros</li>
</ul>

###### **Source**

```php
echo $this->listGroup(
    [
        'Cras justo odio',
        'Dapibus ac facilisis in',
        'Morbi leo risus',
        'Porta ac consectetur ac',
        'Vestibulum at eros',
    ],
['flush' => true]
);
```

<!-- tabs:end -->


##### Horizontal
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/list-group/#horizontal)
<!-- tabs:start -->

###### **Result**

<ul class="list-group&#x20;list-group-horizontal">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Morbi leo risus</li>
</ul>
<br/>
<ul class="list-group&#x20;list-group-horizontal-sm">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Morbi leo risus</li>
</ul>
<br/>
<ul class="list-group&#x20;list-group-horizontal-md">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Morbi leo risus</li>
</ul>
<br/>
<ul class="list-group&#x20;list-group-horizontal-lg">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Morbi leo risus</li>
</ul>
<br/>
<ul class="list-group&#x20;list-group-horizontal-xl">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Morbi leo risus</li>
</ul>

###### **Source**

```php
// Add option 'horizontal' to change the layout of list group items from vertical to horizontal
echo $this->listGroup(
    [
        'Cras justo odio',
        'Dapibus ac facilisis in',
        'Morbi leo risus',
    ],
['horizontal' => true]
);

// Alternatively, choose a responsive variant `sm|md|lg|xl`
// to make a list group horizontal starting at that breakpoint’s
foreach (['sm', 'md', 'lg', 'xl'] as $sBreakpoint) {
    echo PHP_EOL . '<br/>' . PHP_EOL;
    
    echo $this->listGroup(
        [
            'Cras justo odio',
            'Dapibus ac facilisis in',
            'Morbi leo risus',
        ],
    ['horizontal' => $sBreakpoint]
);
}
```

<!-- tabs:end -->


##### Contextual classes
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/list-group/#contextual-classes)
<!-- tabs:start -->

###### **Result**

<ul class="list-group">
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item&#x20;list-group-item-primary">A simple primary list group item</li>
    <li class="list-group-item&#x20;list-group-item-secondary">A simple secondary list group item</li>
    <li class="list-group-item&#x20;list-group-item-success">A simple success list group item</li>
    <li class="list-group-item&#x20;list-group-item-danger">A simple danger list group item</li>
    <li class="list-group-item&#x20;list-group-item-warning">A simple warning list group item</li>
    <li class="list-group-item&#x20;list-group-item-info">A simple info list group item</li>
    <li class="list-group-item&#x20;list-group-item-light">A simple light list group item</li>
    <li class="list-group-item&#x20;list-group-item-dark">A simple dark list group item</li>
</ul><br/>
<div class="list-group">
    <a class="list-group-item&#x20;list-group-item-action" href="&#x23;">Dapibus ac facilisis in</a>
    <a class="list-group-item&#x20;list-group-item-action&#x20;list-group-item-primary" href="&#x23;">A simple primary list group item</a>
    <a class="list-group-item&#x20;list-group-item-action&#x20;list-group-item-secondary" href="&#x23;">A simple secondary list group item</a>
    <a class="list-group-item&#x20;list-group-item-action&#x20;list-group-item-success" href="&#x23;">A simple success list group item</a>
    <a class="list-group-item&#x20;list-group-item-action&#x20;list-group-item-danger" href="&#x23;">A simple danger list group item</a>
    <a class="list-group-item&#x20;list-group-item-action&#x20;list-group-item-warning" href="&#x23;">A simple warning list group item</a>
    <a class="list-group-item&#x20;list-group-item-action&#x20;list-group-item-info" href="&#x23;">A simple info list group item</a>
    <a class="list-group-item&#x20;list-group-item-action&#x20;list-group-item-light" href="&#x23;">A simple light list group item</a>
    <a class="list-group-item&#x20;list-group-item-action&#x20;list-group-item-dark" href="&#x23;">A simple dark list group item</a>
</div>

###### **Source**

```php
// Use option 'variant' to style list items with a stateful background and color
echo $this->listGroup([
    'Dapibus ac facilisis in',
    'A simple primary list group item' => ['variant' => 'primary'],
    'A simple secondary list group item' => ['variant' => 'secondary'],
    'A simple success list group item' => ['variant' => 'success'],
    'A simple danger list group item' => ['variant' => 'danger'],
    'A simple warning list group item' => ['variant' => 'warning'],
    'A simple info list group item' => ['variant' => 'info'],
    'A simple light list group item' => ['variant' => 'light'],
    'A simple dark list group item' => ['variant' => 'dark'],
]);

echo '<br/>' . PHP_EOL;

// Contextual classes also work with .list-group-item-action
echo $this->listGroup(
    [
        'Dapibus ac facilisis in' => ['attributes' => ['href' => '#']],
        'A simple primary list group item' => [
            'variant' => 'primary',
            'attributes' => ['href' => '#'],
        ],
        'A simple secondary list group item' => [
            'variant' => 'secondary',
            'attributes' => ['href' => '#'],
        ],
        'A simple success list group item' => [
            'variant' => 'success',
            'attributes' => ['href' => '#'],
        ],
        'A simple danger list group item' => [
            'variant' => 'danger',
            'attributes' => ['href' => '#'],
        ],
        'A simple warning list group item' => [
            'variant' => 'warning',
            'attributes' => ['href' => '#'],
        ],
        'A simple info list group item' => [
            'variant' => 'info',
            'attributes' => ['href' => '#'],
        ],
        'A simple light list group item' => [
            'variant' => 'light',
            'attributes' => ['href' => '#'],
        ],
        'A simple dark list group item' => [
            'variant' => 'dark',
            'attributes' => ['href' => '#'],
        ],
    ],
['type' => 'action']
);
```

<!-- tabs:end -->


##### With badges
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/list-group/#with-badges)
<!-- tabs:start -->

###### **Result**

<ul class="list-group">
    <li class="align-items-center&#x20;d-flex&#x20;justify-content-between&#x20;list-group-item">
        Cras justo odio
        <span class="badge&#x20;badge-pill&#x20;badge-primary">14</span>
    </li>
    <li class="align-items-center&#x20;d-flex&#x20;justify-content-between&#x20;list-group-item">
        Dapibus ac facilisis in
        <span class="badge&#x20;badge-pill&#x20;badge-primary">2</span>
    </li>
    <li class="align-items-center&#x20;d-flex&#x20;justify-content-between&#x20;list-group-item">
        Morbi leo risus
        <span class="badge&#x20;badge-pill&#x20;badge-primary">1</span>
    </li>
</ul>

###### **Source**

```php
echo $this->listGroup(
    [
        'Cras justo odio' => [
            'badge' => [
                14,
                ['type' => 'pill', 'variant' => 'primary'],
            ],
        ],
        'Dapibus ac facilisis in' => [
            'badge' => [
                2,
                ['type' => 'pill', 'variant' => 'primary'],
            ],
        ],
        'Morbi leo risus' => [
            'badge' => [
                1,
                ['type' => 'pill', 'variant' => 'primary'],
            ],
        ],
    ]
);
```

<!-- tabs:end -->


##### Custom content
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/list-group/#custom-content)
<!-- tabs:start -->

###### **Result**

<div class="list-group">
    <a class="active&#x20;list-group-item&#x20;list-group-item-action" href="&#x23;">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">List group item heading</h5>
            <small>3 days ago</small>
        </div>
        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
        <small>Donec id elit non mi porta.</small>
    </a>
    <a class="list-group-item&#x20;list-group-item-action" href="&#x23;">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">List group item heading</h5>
            <small>3 days ago</small>
        </div>
        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
        <small>Donec id elit non mi porta.</small>
    </a>
    <a class="list-group-item&#x20;list-group-item-action" href="&#x23;">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">List group item heading</h5>
            <small>3 days ago</small>
        </div>
        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
        <small>Donec id elit non mi porta.</small>
    </a>
</div>

###### **Source**

```php
echo $this->listGroup(
    [
        [
            'content' => '<div class="d-flex w-100 justify-content-between">' . PHP_EOL .
            '    <h5 class="mb-1">List group item heading</h5>' . PHP_EOL .
            '    <small>3 days ago</small>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<p class="mb-1">Donec id elit non mi porta gravida at eget metus. ' .
            'Maecenas sed diam eget risus varius blandit.</p>' . PHP_EOL .
            '<small>Donec id elit non mi porta.</small>',
            'attributes' => ['href' => '#'],
            'active' => true,
        ],
        [
            'content' => '<div class="d-flex w-100 justify-content-between">' . PHP_EOL .
            '    <h5 class="mb-1">List group item heading</h5>' . PHP_EOL .
            '    <small>3 days ago</small>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<p class="mb-1">Donec id elit non mi porta gravida at eget metus. ' .
            'Maecenas sed diam eget risus varius blandit.</p>' . PHP_EOL .
            '<small>Donec id elit non mi porta.</small>',
            'attributes' => ['href' => '#'],
        ],
        [
            'content' => '<div class="d-flex w-100 justify-content-between">' . PHP_EOL .
            '    <h5 class="mb-1">List group item heading</h5>' . PHP_EOL .
            '    <small>3 days ago</small>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<p class="mb-1">Donec id elit non mi porta gravida at eget metus. ' .
            'Maecenas sed diam eget risus varius blandit.</p>' . PHP_EOL .
            '<small>Donec id elit non mi porta.</small>',
            'attributes' => ['href' => '#'],
        ],
    ],
['type' => 'action']
);
```

<!-- tabs:end -->


#### Media object
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/media-object/)
##### Example
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/media-object/#example)
<!-- tabs:start -->

###### **Result**

<div class="media">
    <img alt="..." class="mr-3" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;64x64.svg" />
    <div class="media-body">
        <h5 class="mt-0">Media heading</h5>
        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
    </div>
</div>

###### **Source**

```php
echo $this->media([
    'img' => ['/twbs-helper-module/img/docs/64x64.svg', ['alt' => '...', 'class' => 'mr-3']],
    'title' => 'Media heading',
    'text' => 'Cras sit amet nibh libero, in gravida nulla. ' .
    'Nulla vel metus scelerisque ante sollicitudin. ' .
    'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
    'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
    'Donec lacinia congue felis in faucibus.',
]);
```

<!-- tabs:end -->


##### Nesting
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/media-object/#nesting)
<!-- tabs:start -->

###### **Result**

<div class="media">
    <img alt="..." class="mr-3" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;64x64.svg" />
    <div class="media-body">
        <h5 class="mt-0">Media heading</h5>
        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
        <div class="media">
            <img alt="..." class="mr-3" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;64x64.svg" />
            <div class="media-body">
                <h5 class="mt-0">Media heading</h5>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            </div>
        </div>
    </div>
</div>

###### **Source**

```php
echo $this->media([
    'img' => ['/twbs-helper-module/img/docs/64x64.svg', ['alt' => '...', 'class' => 'mr-3']],
    'title' => 'Media heading',
    'text' => 'Cras sit amet nibh libero, in gravida nulla. ' .
    'Nulla vel metus scelerisque ante sollicitudin. ' .
    'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
    'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
    'Donec lacinia congue felis in faucibus.',
    'media' => [
        'content' => [
            'img' => ['/twbs-helper-module/img/docs/64x64.svg', ['alt' => '...', 'class' => 'mr-3']],
            'title' => 'Media heading',
            'text' => 'Cras sit amet nibh libero, in gravida nulla. ' .
            'Nulla vel metus scelerisque ante sollicitudin. ' .
            'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
            'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
            'Donec lacinia congue felis in faucibus.',
        ],
    ],
]);
```

<!-- tabs:end -->


##### Alignment
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/media-object/#alignment)
<!-- tabs:start -->

###### **Result**

<div class="media">
    <img alt="..." class="align-self-start&#x20;mr-3" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;64x64.svg" />
    <div class="media-body">
        <h5 class="mt-0">Top-aligned media</h5>
        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
        <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
    </div>
</div>
<div class="media">
    <img alt="..." class="align-self-center&#x20;mr-3" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;64x64.svg" />
    <div class="media-body">
        <h5 class="mt-0">Top-aligned media</h5>
        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
        <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
    </div>
</div>
<div class="media">
    <img alt="..." class="align-self-end&#x20;mr-3" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;64x64.svg" />
    <div class="media-body">
        <h5 class="mt-0">Top-aligned media</h5>
        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
        <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
    </div>
</div>

###### **Source**

```php
// Top-aligned media
echo $this->media([
    'img' => [
        '/twbs-helper-module/img/docs/64x64.svg',
    ['alt' => '...', 'class' => 'align-self-start mr-3']
],
'title' => 'Top-aligned media',
'text' => [
    'Cras sit amet nibh libero, in gravida nulla. ' .
    'Nulla vel metus scelerisque ante sollicitudin. ' .
    'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
    'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
    'Donec lacinia congue felis in faucibus.',
    'Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. ' .
    'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
],
]) . PHP_EOL;

// Center-aligned media
echo $this->media([
    'img' => [
        '/twbs-helper-module/img/docs/64x64.svg',
    ['alt' => '...', 'class' => 'align-self-center mr-3']
],
'title' => 'Top-aligned media',
'text' => [
    'Cras sit amet nibh libero, in gravida nulla. ' .
    'Nulla vel metus scelerisque ante sollicitudin. ' .
    'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
    'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
    'Donec lacinia congue felis in faucibus.',
    [
        'content' => 'Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. ' .
        'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
        'attributes' => ['class' => 'mb-0'],
    ],
],
]) . PHP_EOL;

// Bottom-aligned media
echo $this->media([
    'img' => [
        '/twbs-helper-module/img/docs/64x64.svg',
    ['alt' => '...', 'class' => 'align-self-end mr-3']
],
'title' => 'Top-aligned media',
'text' => [
    'Cras sit amet nibh libero, in gravida nulla. ' .
    'Nulla vel metus scelerisque ante sollicitudin. ' .
    'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
    'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
    'Donec lacinia congue felis in faucibus.',
    [
        'content' => 'Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. ' .
        'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
        'attributes' => ['class' => 'mb-0'],
    ],
],
]);
```

<!-- tabs:end -->


##### Order
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/media-object/#order)
<!-- tabs:start -->

###### **Result**

<div class="media">
    <div class="media-body">
        <h5 class="mb-1&#x20;mt-0">Media object</h5>
        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
    </div>
    <img alt="..." class="ml-3" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;64x64.svg" />
</div>

###### **Source**

```php
echo $this->media([
    'title' => ['content' => 'Media object', 'attributes' => ['class' => 'mb-1']],
    'text' => 'Cras sit amet nibh libero, in gravida nulla. ' .
    'Nulla vel metus scelerisque ante sollicitudin. ' .
    'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
    'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
    'Donec lacinia congue felis in faucibus.',
    'img' => ['/twbs-helper-module/img/docs/64x64.svg', ['alt' => '...', 'class' => 'ml-3']],
]);
```

<!-- tabs:end -->


##### Media list
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/media-object/#media-list)
<!-- tabs:start -->

###### **Result**

<ul class="list-unstyled">
    <li class="media">
        <img alt="..." class="mr-3" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;64x64.svg" />
        <div class="media-body">
            <h5 class="mb-1&#x20;mt-0">List-based media object</h5>
            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
        </div>
    </li>
    <li class="media">
        <img alt="..." class="mr-3" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;64x64.svg" />
        <div class="media-body">
            <h5 class="mb-1&#x20;mt-0">List-based media object</h5>
            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
        </div>
    </li>
    <li class="media">
        <img alt="..." class="mr-3" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;64x64.svg" />
        <div class="media-body">
            <h5 class="mb-1&#x20;mt-0">List-based media object</h5>
            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
        </div>
    </li>
</ul>

###### **Source**

```php
echo $this->mediaList([
    [
        'img' => ['/twbs-helper-module/img/docs/64x64.svg', ['alt' => '...', 'class' => 'mr-3']],
        'title' => ['content' => 'List-based media object', 'attributes' => ['class' => 'mb-1']],
        'text' => 'Cras sit amet nibh libero, in gravida nulla. ' .
        'Nulla vel metus scelerisque ante sollicitudin. ' .
        'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
        'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
        'Donec lacinia congue felis in faucibus.',
    ],
    [
        'img' => ['/twbs-helper-module/img/docs/64x64.svg', ['alt' => '...', 'class' => 'mr-3']],
        'title' => ['content' => 'List-based media object', 'attributes' => ['class' => 'mb-1']],
        'text' => 'Cras sit amet nibh libero, in gravida nulla. ' .
        'Nulla vel metus scelerisque ante sollicitudin. ' .
        'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
        'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
        'Donec lacinia congue felis in faucibus.',
    ],
    [
        'img' => ['/twbs-helper-module/img/docs/64x64.svg', ['alt' => '...', 'class' => 'mr-3']],
        'title' => ['content' => 'List-based media object', 'attributes' => ['class' => 'mb-1']],
        'text' => 'Cras sit amet nibh libero, in gravida nulla. ' .
        'Nulla vel metus scelerisque ante sollicitudin. ' .
        'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
        'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
        'Donec lacinia congue felis in faucibus.',
    ],
]);
```

<!-- tabs:end -->


#### Modal
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/modal/)
##### Examples
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/modal/#examples)
###### Modal components
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/modal/#modal-components)
<!-- tabs:start -->

####### **Result**

<div class="modal" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" name="button" data-dismiss="modal" class="btn&#x20;btn-secondary" value="">Close</button>
                <button type="button" name="button" class="btn&#x20;btn-primary" value="">Save changes</button>
            </div>
        </div>
    </div>
</div>

####### **Source**

```php
echo $this->modal([
    'title' => 'Modal title',
    'Modal body text goes here.',
    'footer' => [
        'button' => [
            [
                'options' => [
                    'label' => 'Close',
                    'variant' => 'secondary',
                ],
                'attributes' => [
                    'data-dismiss' => 'modal',
                ],
            ],
            [
                'options' => [
                    'label' => 'Save changes',
                    'variant' => 'primary',
                ],
            ],
        ],
    ]
]);
```

<!-- tabs:end -->


###### Scrolling long content
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/modal/#scrolling-long-content)
<!-- tabs:start -->

####### **Result**

<div class="modal" role="dialog" tabindex="-1">
    <div class="modal-dialog&#x20;modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
            </div>
            <div class="modal-footer">
                <button type="button" name="button" data-dismiss="modal" class="btn&#x20;btn-secondary" value="">Close</button>
                <button type="button" name="button" class="btn&#x20;btn-primary" value="">Save changes</button>
            </div>
        </div>
    </div>
</div>

####### **Source**

```php
// You can also create a scrollable modal that allows scroll the modal body
// by adding the option 'scrollable'
echo $this->modal([
    'title' => 'Modal title',
    'text' => [
        'Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac ' .
        'facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, ' .
        'vestibulum at eros.',
        'Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sa' .
        'gittis lacus vel augue laoreet rutrum faucibus dolor auctor.',
        'Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, ' .
        'vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper ' .
        'nulla non metus auctor fringilla.',
        'Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac ' .
        'facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, ' .
        'vestibulum at eros.',
        'Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sa' .
        'gittis lacus vel augue laoreet rutrum faucibus dolor auctor.',
        'Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, ' .
        'vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper ' .
        'nulla non metus auctor fringilla.',
        'Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac ' .
        'facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, ' .
        'vestibulum at eros.',
        'Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sa' .
        'gittis lacus vel augue laoreet rutrum faucibus dolor auctor.',
        'Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, ' .
        'vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper ' .
        'nulla non metus auctor fringilla.',
        'Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac ' .
        'facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, ' .
        'vestibulum at eros.',
        'Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sa' .
        'gittis lacus vel augue laoreet rutrum faucibus dolor auctor.',
        'Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, ' .
        'vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper ' .
        'nulla non metus auctor fringilla.',
        'Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac ' .
        'facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, ' .
        'vestibulum at eros.',
        'Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sa' .
        'gittis lacus vel augue laoreet rutrum faucibus dolor auctor.',
        'Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, ' .
        'vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper ' .
        'nulla non metus auctor fringilla.',
        'Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac ' .
        'facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, ' .
        'vestibulum at eros.',
        'Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sa' .
        'gittis lacus vel augue laoreet rutrum faucibus dolor auctor.',
        'Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, ' .
        'vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper ' .
        'nulla non metus auctor fringilla.',
    ],
    'footer' => [
        'button' => [
            [
                'options' => [
                    'label' => 'Close',
                    'variant' => 'secondary',
                ],
                'attributes' => [
                    'data-dismiss' => 'modal',
                ],
            ],
            [
                'options' => [
                    'label' => 'Save changes',
                    'variant' => 'primary',
                ],
            ],
        ],
    ],
], ['scrollable' => true]);
```

<!-- tabs:end -->


###### Vertically centered
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/modal/#vertically-centered)
<!-- tabs:start -->

####### **Result**

<div class="modal" role="dialog" tabindex="-1">
    <div class="modal-dialog&#x20;modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
            </div>
            <div class="modal-footer">
                <button type="button" name="button" data-dismiss="modal" class="btn&#x20;btn-secondary" value="">Close</button>
                <button type="button" name="button" class="btn&#x20;btn-primary" value="">Save changes</button>
            </div>
        </div>
    </div>
</div>

####### **Source**

```php
echo $this->modal([
    'title' => 'Modal title',
    'Cras mattis consectetur purus sit amet fermentum. Cras justo odio, ' .
    'dapibus ac facilisis in, egestas eget quam. Morbi leo risus, ' .
    'porta ac consectetur ac, vestibulum at eros.',
    'footer' => [
        'button' => [
            [
                'options' => [
                    'label' => 'Close',
                    'variant' => 'secondary',
                ],
                'attributes' => [
                    'data-dismiss' => 'modal',
                ],
            ],
            [
                'options' => [
                    'label' => 'Save changes',
                    'variant' => 'primary',
                ],
            ],
        ],
    ]
], ['centered' => true]);
```

<!-- tabs:end -->


###### Tooltips and popovers
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/modal/#tooltips-and-popovers)
<!-- tabs:start -->

####### **Result**

<div class="modal" role="dialog" tabindex="-1">
    <div class="modal-dialog&#x20;modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h5>Popover in a modal</h5>
                <p>This <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>
                <hr />
                <h5>Tooltips in a modal</h5>
                <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>
            </div>
            <div class="modal-footer">
                <button type="button" name="button" data-dismiss="modal" class="btn&#x20;btn-secondary" value="">Close</button>
                <button type="button" name="button" class="btn&#x20;btn-primary" value="">Save changes</button>
            </div>
        </div>
    </div>
</div>

####### **Source**

```php
echo $this->modal([
    'title' => 'Modal title',
    ['type' => 'subtitle', 'content' => 'Popover in a modal'],
    'This <a href="#" role="button" class="btn btn-secondary popover-test" ' .
    'title="Popover title" data-content="Popover body content is set in this attribute.">' .
    'button</a> triggers a popover on click.',
    '---',
    ['type' => 'subtitle', 'content' => 'Tooltips in a modal'],
    '<a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" ' .
    'class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.',
    'footer' => [
        'button' => [
            [
                'options' => [
                    'label' => 'Close',
                    'variant' => 'secondary',
                ],
                'attributes' => [
                    'data-dismiss' => 'modal',
                ],
            ],
            [
                'options' => [
                    'label' => 'Save changes',
                    'variant' => 'primary',
                ],
            ],
        ],
    ]
], ['centered' => true]);
```

<!-- tabs:end -->


###### Optional sizes
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/modal/#optional-sizes)
<!-- tabs:start -->

####### **Result**

<div class="bd-example-modal-xl&#x20;fade&#x20;modal" role="dialog" tabindex="-1">
    <div class="modal-dialog&#x20;modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Extra large modal</h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p>...</p>
            </div>
        </div>
    </div>
</div>
<div class="bd-example-modal-lg&#x20;fade&#x20;modal" role="dialog" tabindex="-1">
    <div class="modal-dialog&#x20;modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Large modal</h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p>...</p>
            </div>
        </div>
    </div>
</div>
<div class="bd-example-modal-sm&#x20;fade&#x20;modal" role="dialog" tabindex="-1">
    <div class="modal-dialog&#x20;modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Small modal</h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p>...</p>
            </div>
        </div>
    </div>
</div>

####### **Source**

```php
echo $this->modal([
    'title' => 'Extra large modal',
    '...',
], [
    'fade' => true,
    'size' => 'xl',
    'class' => 'bd-example-modal-xl',
]) . PHP_EOL;

echo $this->modal([
    'title' => 'Large modal',
    '...',
], [
    'fade' => true,
    'size' => 'lg',
    'class' => 'bd-example-modal-lg',
]) . PHP_EOL;

echo $this->modal([
    'title' => 'Small modal',
    '...',
], [
    'fade' => true,
    'size' => 'sm',
    'class' => 'bd-example-modal-sm',
]);
```

<!-- tabs:end -->


#### Navs
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/navs/)
##### Base nav
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/navs/#base-nav)
<!-- tabs:start -->

###### **Result**

<ul class="nav">
    <li class="&#x20;nav-item">
        <a class="nav-link&#x20;active" href="&#x23;">Active</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="&#x23;">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="&#x23;">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
</ul>
<nav class="nav">
    <a class="nav-link&#x20;active" href="&#x23;">Active</a>
    <a class="nav-link" href="&#x23;">Link</a>
    <a class="nav-link" href="&#x23;">Link</a>
    <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">Disabled</a>
</nav>

###### **Source**

```php
echo $this->navigation()->menu(new \Laminas\Navigation\Navigation([
    ['label' => 'Active', 'uri' => '#', 'active' => true],
    ['label' => 'Link', 'uri' => '#'],
    ['label' => 'Link', 'uri' => '#'],
    ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
])) . PHP_EOL;

echo $this->navigation()->menu()->renderMenu(new \Laminas\Navigation\Navigation([
    ['label' => 'Active', 'uri' => '#', 'active' => true],
    ['label' => 'Link', 'uri' => '#'],
    ['label' => 'Link', 'uri' => '#'],
    ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
]), ['list' => false]);
```

<!-- tabs:end -->


##### Available styles
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/navs/#available-styles)
###### Horizontal alignment
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/navs/#horizontal-alignment)
<!-- tabs:start -->

####### **Result**

<ul class="justify-content-center&#x20;nav">
    <li class="&#x20;nav-item">
        <a class="nav-link&#x20;active" href="&#x23;">Active</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="&#x23;">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="&#x23;">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
</ul>
<ul class="justify-content-end&#x20;nav">
    <li class="&#x20;nav-item">
        <a class="nav-link&#x20;active" href="&#x23;">Active</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="&#x23;">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="&#x23;">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
</ul>

####### **Source**

```php
// Centered with option 'center'
echo $this->navigation()->menu()->renderMenu(new \Laminas\Navigation\Navigation([
    ['label' => 'Active', 'uri' => '#', 'active' => true],
    ['label' => 'Link', 'uri' => '#'],
    ['label' => 'Link', 'uri' => '#'],
    ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
]), ['centered' => true]) . PHP_EOL;

// Right-aligned with option 'right_aligned'
echo $this->navigation()->menu()->renderMenu(new \Laminas\Navigation\Navigation([
    ['label' => 'Active', 'uri' => '#', 'active' => true],
    ['label' => 'Link', 'uri' => '#'],
    ['label' => 'Link', 'uri' => '#'],
    ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
]), ['right_aligned' => true]);
```

<!-- tabs:end -->


###### Vertical
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/navs/#vertical)
<!-- tabs:start -->

####### **Result**

<ul class="flex-column&#x20;nav">
    <li class="&#x20;nav-item">
        <a class="nav-link&#x20;active" href="&#x23;">Active</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="&#x23;">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="&#x23;">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
</ul>
<nav class="flex-column&#x20;nav">
    <a class="nav-link&#x20;active" href="&#x23;">Active</a>
    <a class="nav-link" href="&#x23;">Link</a>
    <a class="nav-link" href="&#x23;">Link</a>
    <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">Disabled</a>
</nav>

####### **Source**

```php
echo $this->navigation()->menu()->renderMenu(
    new \Laminas\Navigation\Navigation([
        ['label' => 'Active', 'uri' => '#', 'active' => true],
        ['label' => 'Link', 'uri' => '#'],
        ['label' => 'Link', 'uri' => '#'],
        ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
    ]),
['vertical' => true]
) . PHP_EOL;

echo $this->navigation()->menu()->renderMenu(
    new \Laminas\Navigation\Navigation([
        ['label' => 'Active', 'uri' => '#', 'active' => true],
        ['label' => 'Link', 'uri' => '#'],
        ['label' => 'Link', 'uri' => '#'],
        ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
    ]),
    [
        'vertical' => true,
        'list' => false,
    ]
);
```

<!-- tabs:end -->


###### Tabs
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/navs/#tabs)
<!-- tabs:start -->

####### **Result**

<ul class="nav&#x20;nav-tabs">
    <li class="&#x20;nav-item">
        <a class="nav-link&#x20;active" href="&#x23;">Active</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="&#x23;">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="&#x23;">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
</ul>

####### **Source**

```php
echo $this->navigation()->menu()->renderMenu(new \Laminas\Navigation\Navigation([
    ['label' => 'Active', 'uri' => '#', 'active' => true],
    ['label' => 'Link', 'uri' => '#'],
    ['label' => 'Link', 'uri' => '#'],
    ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
]), ['tabs' => true]);
```

<!-- tabs:end -->


###### Pills
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/navs/#pills)
<!-- tabs:start -->

####### **Result**

<ul class="nav&#x20;nav-pills">
    <li class="&#x20;nav-item">
        <a class="nav-link&#x20;active" href="&#x23;">Active</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="&#x23;">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="&#x23;">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
</ul>

####### **Source**

```php
echo $this->navigation()->menu()->renderMenu(new \Laminas\Navigation\Navigation([
    ['label' => 'Active', 'uri' => '#', 'active' => true],
    ['label' => 'Link', 'uri' => '#'],
    ['label' => 'Link', 'uri' => '#'],
    ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
]), ['pills' => true]);
```

<!-- tabs:end -->


###### Fill and justify
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/navs/#fill-and-justify)
<!-- tabs:start -->

####### **Result**

<ul class="nav&#x20;nav-fill&#x20;nav-pills">
    <li class="&#x20;nav-item">
        <a class="nav-link&#x20;active" href="&#x23;">Active</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="&#x23;">Much longer nav link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="&#x23;">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
</ul>
<br/>
<nav class="nav&#x20;nav-fill&#x20;nav-pills">
    <a class="nav-item&#x20;nav-link&#x20;active" href="&#x23;">Active</a>
    <a class="nav-item&#x20;nav-link" href="&#x23;">Much longer nav link</a>
    <a class="nav-item&#x20;nav-link" href="&#x23;">Link</a>
    <a class="nav-item&#x20;nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">Disabled</a>
</nav>
<br/>
<nav class="nav&#x20;nav-justified&#x20;nav-pills">
    <a class="nav-item&#x20;nav-link&#x20;active" href="&#x23;">Active</a>
    <a class="nav-item&#x20;nav-link" href="&#x23;">Much longer nav link</a>
    <a class="nav-item&#x20;nav-link" href="&#x23;">Link</a>
    <a class="nav-item&#x20;nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">Disabled</a>
</nav>

####### **Source**

```php
echo $this->navigation()->menu()->renderMenu(
    new \Laminas\Navigation\Navigation([
        ['label' => 'Active', 'uri' => '#', 'active' => true],
        ['label' => 'Much longer nav link', 'uri' => '#'],
        ['label' => 'Link', 'uri' => '#'],
        ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
    ]),
    [
        'pills' => true,
        'fill' => true,
    ]
);

echo PHP_EOL . '<br/>' . PHP_EOL;

echo $this->navigation()->menu()->renderMenu(
    new \Laminas\Navigation\Navigation([
        ['label' => 'Active', 'uri' => '#', 'active' => true],
        ['label' => 'Much longer nav link', 'uri' => '#'],
        ['label' => 'Link', 'uri' => '#'],
        ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
    ]),
    [
        'pills' => true,
        'fill' => true,
        'list' => false,
    ]
);

echo PHP_EOL . '<br/>' . PHP_EOL;

echo $this->navigation()->menu()->renderMenu(
    new \Laminas\Navigation\Navigation([
        ['label' => 'Active', 'uri' => '#', 'active' => true],
        ['label' => 'Much longer nav link', 'uri' => '#'],
        ['label' => 'Link', 'uri' => '#'],
        ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
    ]),
    [
        'pills' => true,
        'justified' => true,
        'list' => false,
    ]
);
```

<!-- tabs:end -->


###### Working with flex utilities
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/navs/#working-with-flex-utilities)
<!-- tabs:start -->

####### **Result**

<nav class="flex-column&#x20;flex-sm-row&#x20;nav&#x20;nav-pills">
    <a class="flex-sm-fill&#x20;text-sm-center&#x20;nav-link&#x20;active" href="&#x23;">Active</a>
    <a class="flex-sm-fill&#x20;text-sm-center&#x20;nav-link" href="&#x23;">Longer nav link</a>
    <a class="flex-sm-fill&#x20;text-sm-center&#x20;nav-link" href="&#x23;">Link</a>
    <a class="flex-sm-fill&#x20;text-sm-center&#x20;nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">Disabled</a>
</nav>

####### **Source**

```php
echo $this->navigation()->menu()->renderMenu(
    new \Laminas\Navigation\Navigation([
        ['label' => 'Active', 'uri' => '#', 'active' => true],
        ['label' => 'Longer nav link', 'uri' => '#'],
        ['label' => 'Link', 'uri' => '#'],
        ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
    ]),
    [
        'list' => false,
        'pills' => true,
        'vertical' => 'sm',
    ]
);
```

<!-- tabs:end -->


##### Using dropdowns
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/navs/#using-dropdowns)
###### Tabs with dropdowns
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/navs/#tabs-with-dropdowns)
<!-- tabs:start -->

####### **Result**

<ul class="nav&#x20;nav-tabs">
    <li class="&#x20;nav-item">
        <a class="nav-link&#x20;active" href="&#x23;">Active</a>
    </li>
    <li class="dropdown&#x20;nav-item">
        <a class="dropdown-toggle&#x20;nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="&#x23;">Dropdown</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="&#x23;">Action</a>
            <a class="dropdown-item" href="&#x23;">Another action</a>
            <a class="dropdown-item" href="&#x23;">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="&#x23;">Separated link</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="&#x23;">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
</ul>

####### **Source**

```php
echo $this->navigation()->menu()->renderMenu(
    new \Laminas\Navigation\Navigation([
        ['label' => 'Active', 'uri' => '#', 'active' => true],
        [
            'type' => '\TwbsHelper\Navigation\Page\DropdownPage',
            'label' => 'Dropdown',
            'dropdown' => [
                'Action',
                'Another action',
                'Something else here',
                '---',
                'Separated link',
            ],
        ],
        ['label' => 'Link', 'uri' => '#'],
        ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
    ]),
['tabs' => true]
);
```

<!-- tabs:end -->


###### Pills with dropdowns
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/navs/#pills-with-dropdowns)
<!-- tabs:start -->

####### **Result**

<ul class="nav&#x20;nav-pills">
    <li class="&#x20;nav-item">
        <a class="nav-link&#x20;active" href="&#x23;">Active</a>
    </li>
    <li class="dropdown&#x20;nav-item">
        <a class="dropdown-toggle&#x20;nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="&#x23;">Dropdown</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="&#x23;">Action</a>
            <a class="dropdown-item" href="&#x23;">Another action</a>
            <a class="dropdown-item" href="&#x23;">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="&#x23;">Separated link</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="&#x23;">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
</ul>

####### **Source**

```php
echo $this->navigation()->menu()->renderMenu(
    new \Laminas\Navigation\Navigation([
        ['label' => 'Active', 'uri' => '#', 'active' => true],
        [
            'type' => '\TwbsHelper\Navigation\Page\DropdownPage',
            'label' => 'Dropdown',
            'dropdown' => [
                'Action',
                'Another action',
                'Something else here',
                '---',
                'Separated link',
            ],
        ],
        ['label' => 'Link', 'uri' => '#'],
        ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
    ]),
['pills' => true]
);
```

<!-- tabs:end -->


#### Navbar
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/navbar/)
##### Supported content
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/navbar/#supported-content)
<!-- tabs:start -->

###### **Result**

<nav class="bg-light&#x20;navbar&#x20;navbar-expand-lg&#x20;navbar-light">
    <a class="navbar-brand" href="&#x23;">Navbar</a>
    <button type="button" name="navbar_toggler" class="navbar-toggler" data-toggle="collapse" aria-expanded="false" aria-label="Toggle&#x20;navigation" data-target="&#x23;navbarSupportedContent" aria-controls="navbarSupportedContent" value=""><span class="navbar-toggler-icon"></span></button>
    <div class="collapse&#x20;navbar-collapse" id="navbarSupportedContent">
        <ul class="mr-auto&#x20;nav&#x20;navbar-nav">
            <li class="&#x20;nav-item">
                <a class="nav-link&#x20;active" href="&#x23;">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">Link</a>
            </li>
            <li class="dropdown&#x20;nav-item">
                <a id="navbarDropdown" class="dropdown-toggle&#x20;nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="&#x23;">Dropdown</a>
                <div aria-labelledby="navbarDropdown" class="dropdown-menu">
                    <a class="dropdown-item" href="&#x23;">Action</a>
                    <a class="dropdown-item" href="&#x23;">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="&#x23;">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <form action="" method="POST" name="form" class="form-inline&#x20;my-2&#x20;my-lg-0" role="form" id="form">
            <input name="search" type="search" placeholder="Search" aria-label="Search" class="form-control&#x20;mr-sm-2" value=""/>
            <button type="submit" name="submit" class="btn&#x20;btn-outline-success&#x20;my-2&#x20;my-sm-0" value="">Search</button>
        </form>
    </div>
</nav>

###### **Source**

```php
echo $this->navigation()->navbar()->render(
    new \Laminas\Navigation\Navigation([
        ['label' => 'Home <span class="sr-only">(current)</span>', 'uri' => '#', 'active' => true],
        ['label' => 'Link', 'uri' => '#'],
        [
            'type' => '\TwbsHelper\Navigation\Page\DropdownPage',
            'label' => 'Dropdown',
            'dropdown' => [
                'items' => [
                    'Action',
                    'Another action',
                    '---',
                    'Something else here',
                ],
                'attributes' => ['id' => 'navbarDropdown'],
            ],
        ],
        ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
    ]),
    [
        'brand' => 'Navbar',
        'form' => [
            'elements' => [
                [
                    'spec' => [
                        'name' => 'search',
                        'attributes' => [
                            'type' => 'search',
                            'placeholder' => 'Search',
                            'aria-label' => 'Search',
                            'class' => 'mr-sm-2',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'type' => 'submit',
                        'options' => [
                            'label' => 'Search',
                            'variant' => 'outline-success',
                        ],
                        'attributes' => [
                            'class' => 'my-2 my-sm-0',
                        ],
                    ],
                ],
            ],
            'attributes' => ['class' => 'my-2 my-lg-0'],
        ],
        'attributes' => ['id' => 'navbarSupportedContent'],
    ]
);
```

<!-- tabs:end -->


###### Brand
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/navbar/#brand)
<!-- tabs:start -->

####### **Result**

<nav class="bg-light&#x20;navbar&#x20;navbar-light">
    <a class="navbar-brand" href="&#x23;">Navbar</a>
</nav>
<br/>
<nav class="bg-light&#x20;navbar&#x20;navbar-light">
    <span class="h1&#x20;mb-0&#x20;navbar-brand">Navbar</span>
</nav>
<br/>
<nav class="bg-light&#x20;navbar&#x20;navbar-light">
    <a class="navbar-brand" href="&#x23;"><img alt="" height="30" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;bootstrap-solid.svg" width="30" /></a>
</nav>
<br/>
<nav class="bg-light&#x20;navbar&#x20;navbar-light">
    <a class="navbar-brand" href="&#x23;">
        <img alt="" class="align-top&#x20;d-inline-block" height="30" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;bootstrap-solid.svg" width="30" />
        Bootstrap
    </a>
</nav>

####### **Source**

```php
// As a link
echo $this->navigation()->navbar()->render(
    new \Laminas\Navigation\Navigation(),
    [
        'brand' => 'Navbar',
        'expand' => false,
        'toggler' => false,
    ]
);

echo PHP_EOL . '<br/>' . PHP_EOL;

// As a heading
echo $this->navigation()->navbar()->render(
    new \Laminas\Navigation\Navigation(),
    [
        'brand' => [
            'content' => 'Navbar',
            'attributes' => ['class' => 'mb-0 h1'],
            'type' => 'heading',
        ],
        'expand' => false,
        'toggler' => false,
    ]
);

echo PHP_EOL . '<br/>' . PHP_EOL;

// Just an image
echo $this->navigation()->navbar()->render(
    new \Laminas\Navigation\Navigation(),
    [
        'brand' => [
            'img' => [
                '/twbs-helper-module/img/docs/bootstrap-solid.svg',
            ],
        ],
        'expand' => false,
        'toggler' => false,
    ]
);

echo PHP_EOL . '<br/>' . PHP_EOL;

// Image and text
echo $this->navigation()->navbar()->render(
    new \Laminas\Navigation\Navigation(),
    [
        'brand' => [
            'content' => 'Bootstrap',
            'img' => [
                '/twbs-helper-module/img/docs/bootstrap-solid.svg',
                [
                    'width' => 30,
                    'height' => 30,
                    'alt' => '',
                ],
            ],
        ],
        'expand' => false,
        'toggler' => false,
    ]
);
```

<!-- tabs:end -->


###### Nav
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/navbar/#nav)
<!-- tabs:start -->

####### **Result**

<nav class="bg-light&#x20;navbar&#x20;navbar-expand-lg&#x20;navbar-light">
    <a class="navbar-brand" href="&#x23;">Navbar</a>
    <button type="button" name="navbar_toggler" class="navbar-toggler" data-toggle="collapse" aria-expanded="false" aria-label="Toggle&#x20;navigation" data-target="&#x23;navbarNav" aria-controls="navbarNav" value=""><span class="navbar-toggler-icon"></span></button>
    <div class="collapse&#x20;navbar-collapse" id="navbarNav">
        <ul class="mr-auto&#x20;nav&#x20;navbar-nav">
            <li class="&#x20;nav-item">
                <a class="nav-link&#x20;active" href="&#x23;">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
    </div>
</nav>
<br/>
<nav class="bg-light&#x20;navbar&#x20;navbar-expand-lg&#x20;navbar-light">
    <a class="navbar-brand" href="&#x23;">Navbar</a>
    <button type="button" name="navbar_toggler" class="navbar-toggler" data-toggle="collapse" aria-expanded="false" aria-label="Toggle&#x20;navigation" data-target="&#x23;navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" value=""><span class="navbar-toggler-icon"></span></button>
    <div class="collapse&#x20;navbar-collapse" id="navbarNavAltMarkup">
        <nav class="mr-auto&#x20;nav&#x20;navbar-nav">
            <a class="nav-link&#x20;active" href="&#x23;">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="&#x23;">Features</a>
            <a class="nav-link" href="&#x23;">Pricing</a>
            <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">Disabled</a>
        </nav>
    </div>
</nav>
<br/>
<nav class="bg-light&#x20;navbar&#x20;navbar-expand-lg&#x20;navbar-light">
    <a class="navbar-brand" href="&#x23;">Navbar</a>
    <button type="button" name="navbar_toggler" class="navbar-toggler" data-toggle="collapse" aria-expanded="false" aria-label="Toggle&#x20;navigation" data-target="&#x23;navbarNavDropdown" aria-controls="navbarNavDropdown" value=""><span class="navbar-toggler-icon"></span></button>
    <div class="collapse&#x20;navbar-collapse" id="navbarNavDropdown">
        <ul class="mr-auto&#x20;nav&#x20;navbar-nav">
            <li class="&#x20;nav-item">
                <a class="nav-link&#x20;active" href="&#x23;">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">Pricing</a>
            </li>
            <li class="dropdown&#x20;nav-item">
                <a id="navbarDropdownMenuLink" class="dropdown-toggle&#x20;nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="&#x23;">Dropdown link</a>
                <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu">
                    <a class="dropdown-item" href="&#x23;">Action</a>
                    <a class="dropdown-item" href="&#x23;">Another action</a>
                    <a class="dropdown-item" href="&#x23;">Something else here</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

####### **Source**

```php
echo $this->navigation()->navbar()->render(
    new \Laminas\Navigation\Navigation([
        [
            'label' => 'Home <span class="sr-only">(current)</span>',
            'uri' => '#',
            'active' => true,
        ],
        ['label' => 'Features', 'uri' => '#'],
        ['label' => 'Pricing', 'uri' => '#'],
        ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
    ]),
    [
        'brand' => 'Navbar',
        'attributes' => ['id' => 'navbarNav'],
    ]
);

echo PHP_EOL . '<br/>' . PHP_EOL;

// Avoid the list-based approach
echo $this->navigation()->navbar()->render(
    new \Laminas\Navigation\Navigation([
        [
            'label' => 'Home <span class="sr-only">(current)</span>',
            'uri' => '#',
            'active' => true,
        ],
        ['label' => 'Features', 'uri' => '#'],
        ['label' => 'Pricing', 'uri' => '#'],
        ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
    ]),
    [
        'brand' => 'Navbar',
        'attributes' => ['id' => 'navbarNavAltMarkup'],
        'nav' => ['list' => false],
    ]
);

echo PHP_EOL . '<br/>' . PHP_EOL;

echo $this->navigation()->navbar()->render(
    new \Laminas\Navigation\Navigation([
        [
            'label' => 'Home <span class="sr-only">(current)</span>',
            'uri' => '#',
            'active' => true,
        ],
        ['label' => 'Features', 'uri' => '#'],
        ['label' => 'Pricing', 'uri' => '#'],
        [
            'type' => '\TwbsHelper\Navigation\Page\DropdownPage',
            'label' => 'Dropdown link',
            'dropdown' => [
                'items' => [
                    'Action',
                    'Another action',
                    'Something else here',
                ],
                'attributes' => ['id' => 'navbarDropdownMenuLink'],
            ],
        ],
    ]),
    [
        'brand' => 'Navbar',
        'attributes' => ['id' => 'navbarNavDropdown'],
    ]
);
```

<!-- tabs:end -->


###### Forms
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/navbar/#forms)
<!-- tabs:start -->

####### **Result**

<nav class="bg-light&#x20;navbar&#x20;navbar-light">
    <form action="" method="POST" name="form" role="form" class="form-inline" id="form">
        <input name="search" type="search" placeholder="Search" aria-label="Search" class="form-control&#x20;mr-sm-2" value=""/>
        <button type="submit" name="submit" class="btn&#x20;btn-outline-success&#x20;my-2&#x20;my-sm-0" value="">Search</button>
    </form>
</nav>
<br/>
<nav class="bg-light&#x20;navbar&#x20;navbar-light">
    <a class="navbar-brand" href="&#x23;">Navbar</a>
    <form action="" method="POST" name="form" role="form" class="form-inline" id="form">
        <input name="search" type="search" placeholder="Search" aria-label="Search" class="form-control&#x20;mr-sm-2" value=""/>
        <button type="submit" name="submit" class="btn&#x20;btn-outline-success&#x20;my-2&#x20;my-sm-0" value="">Search</button>
    </form>
</nav>
<br/>
<nav class="bg-light&#x20;navbar&#x20;navbar-light">
    <form action="" method="POST" name="form" role="form" class="form-inline" id="form">
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text" id="basic-addon1">
                    @
                </div>
            </div>
            <input name="username" type="text" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" class="form-control" value=""/>
        </div>
    </form>
</nav>
<br/>
<nav class="bg-light&#x20;navbar&#x20;navbar-light">
    <form action="" method="POST" name="form" role="form" class="form-inline" id="form">
        <button type="button" name="main_button" class="btn&#x20;btn-outline-success" value="">Main button</button>
        <button type="button" name="smaller_button" class="btn&#x20;btn-outline-secondary&#x20;btn-sm" value="">Smaller button</button>
    </form>
</nav>

####### **Source**

```php
echo $this->navigation()->navbar()->render(
    new \Laminas\Navigation\Navigation(),
    [
        'expand' => false,
        'toggler' => false,
        'collapse' => false,
        'form' => [
            'elements' => [
                [
                    'spec' => [
                        'name' => 'search',
                        'attributes' => [
                            'type' => 'search',
                            'placeholder' => 'Search',
                            'aria-label' => 'Search',
                            'class' => 'mr-sm-2',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'type' => 'submit',
                        'options' => [
                            'label' => 'Search',
                            'variant' => 'outline-success',
                        ],
                        'attributes' => ['class' => 'my-2 my-sm-0'],
                    ],
                ],
            ],
        ],
    ]
);

echo PHP_EOL . '<br/>' . PHP_EOL;

echo $this->navigation()->navbar()->render(
    new \Laminas\Navigation\Navigation(),
    [
        'expand' => false,
        'toggler' => false,
        'collapse' => false,
        'brand' => 'Navbar',
        'form' => [
            'elements' => [
                [
                    'spec' => [
                        'name' => 'search',
                        'attributes' => [
                            'type' => 'search',
                            'placeholder' => 'Search',
                            'aria-label' => 'Search',
                            'class' => 'mr-sm-2',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'type' => 'submit',
                        'options' => [
                            'label' => 'Search',
                            'variant' => 'outline-success',
                        ],
                        'attributes' => ['class' => 'my-2 my-sm-0'],
                    ],
                ],
            ],
        ],
    ]
);

echo PHP_EOL . '<br/>' . PHP_EOL;

// Input groups work, too:
echo $this->navigation()->navbar()->render(
    new \Laminas\Navigation\Navigation(),
    [
        'expand' => false,
        'toggler' => false,
        'collapse' => false,
        'form' => [
            'elements' => [
                [
                    'spec' => [
                        'name' => 'username',
                        'options' => [
                            'add_on_prepend' => '@',
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'placeholder' => 'Username',
                            'aria-label' => 'Username',
                            'aria-describedby' => 'basic-addon1',
                        ],
                    ],
                ],
            ],
        ],
    ]
);

// Various buttons are supported as part of these navbar forms, too.
echo PHP_EOL . '<br/>' . PHP_EOL;

// Input groups work, too:
echo $this->navigation()->navbar()->render(
    new \Laminas\Navigation\Navigation(),
    [
        'expand' => false,
        'toggler' => false,
        'collapse' => false,
        'form' => [
            'elements' => [
                [
                    'spec' => [
                        'type' => 'button',
                        'name' => 'main_button',
                        'options' => [
                            'label' => 'Main button',
                            'variant' => 'outline-success',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'type' => 'button',
                        'name' => 'smaller_button',
                        'options' => [
                            'label' => 'Smaller button',
                            'variant' => 'outline-secondary',
                            'size' => 'sm',
                        ],
                    ],
                ],
            ],
        ],
    ]
);
```

<!-- tabs:end -->


###### Text
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/navbar/#text)
<!-- tabs:start -->

####### **Result**

<nav class="bg-light&#x20;navbar&#x20;navbar-light">
    <span class="navbar-text">Navbar text with an inline element</span>
</nav>
<br/>
<nav class="bg-light&#x20;navbar&#x20;navbar-expand-lg&#x20;navbar-light">
    <a class="navbar-brand" href="&#x23;">Navbar w/ text</a>
    <button type="button" name="navbar_toggler" class="navbar-toggler" data-toggle="collapse" aria-expanded="false" aria-label="Toggle&#x20;navigation" data-target="&#x23;navbarText" aria-controls="navbarText" value=""><span class="navbar-toggler-icon"></span></button>
    <div class="collapse&#x20;navbar-collapse" id="navbarText">
        <ul class="mr-auto&#x20;nav&#x20;navbar-nav">
            <li class="&#x20;nav-item">
                <a class="nav-link&#x20;active" href="&#x23;">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">Pricing</a>
            </li>
        </ul>
        <span class="navbar-text">Navbar text with an inline element</span>
    </div>
</nav>

####### **Source**

```php
echo $this->navigation()->navbar()->render(
    new \Laminas\Navigation\Navigation(),
    [
        'text' => 'Navbar text with an inline element',
        'expand' => false,
        'toggler' => false,
    ]
);

echo PHP_EOL . '<br/>' . PHP_EOL;

echo $this->navigation()->navbar()->render(
    new \Laminas\Navigation\Navigation([
        [
            'label' => 'Home <span class="sr-only">(current)</span>',
            'uri' => '#',
            'active' => true,
        ],
        ['label' => 'Features', 'uri' => '#'],
        ['label' => 'Pricing', 'uri' => '#'],
    ]),
    [
        'brand' => 'Navbar w/ text',
        'text' => 'Navbar text with an inline element',
        'attributes' => ['id' => 'navbarText'],
    ]
);
```

<!-- tabs:end -->


##### Color schemes
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/navbar/#color-schemes)
<!-- tabs:start -->

###### **Result**

<nav class="bg-dark&#x20;navbar&#x20;navbar-dark&#x20;navbar-expand-lg">
    <a class="navbar-brand" href="&#x23;">Navbar</a>
    <button type="button" name="navbar_toggler" class="navbar-toggler" data-toggle="collapse" aria-expanded="false" aria-label="Toggle&#x20;navigation" value=""><span class="navbar-toggler-icon"></span></button>
    <div class="collapse&#x20;navbar-collapse">
        <ul class="mr-auto&#x20;nav&#x20;navbar-nav">
            <li class="&#x20;nav-item">
                <a class="nav-link&#x20;active" href="&#x23;">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">About</a>
            </li>
        </ul>
        <form action="" method="POST" name="form" role="form" class="form-inline" id="form">
            <input name="search" type="search" placeholder="Search" aria-label="Search" class="form-control&#x20;mr-sm-2" value=""/>
            <button type="submit" name="submit" class="btn&#x20;btn-outline-success" value="">Search</button>
        </form>
    </div>
</nav>
<br/>
<nav class="bg-primary&#x20;navbar&#x20;navbar-dark&#x20;navbar-expand-lg">
    <a class="navbar-brand" href="&#x23;">Navbar</a>
    <button type="button" name="navbar_toggler" class="navbar-toggler" data-toggle="collapse" aria-expanded="false" aria-label="Toggle&#x20;navigation" value=""><span class="navbar-toggler-icon"></span></button>
    <div class="collapse&#x20;navbar-collapse">
        <ul class="mr-auto&#x20;nav&#x20;navbar-nav">
            <li class="&#x20;nav-item">
                <a class="nav-link&#x20;active" href="&#x23;">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">About</a>
            </li>
        </ul>
        <form action="" method="POST" name="form" role="form" class="form-inline" id="form">
            <input name="search" type="search" placeholder="Search" aria-label="Search" class="form-control&#x20;mr-sm-2" value=""/>
            <button type="submit" name="submit" class="btn&#x20;btn-outline-success" value="">Search</button>
        </form>
    </div>
</nav>
<br/>
<nav class="navbar&#x20;navbar-dark&#x20;navbar-expand-lg" style="background-color&#x3A;&#x20;&#x23;e3f2fd&#x3B;">
    <a class="navbar-brand" href="&#x23;">Navbar</a>
    <button type="button" name="navbar_toggler" class="navbar-toggler" data-toggle="collapse" aria-expanded="false" aria-label="Toggle&#x20;navigation" value=""><span class="navbar-toggler-icon"></span></button>
    <div class="collapse&#x20;navbar-collapse">
        <ul class="mr-auto&#x20;nav&#x20;navbar-nav">
            <li class="&#x20;nav-item">
                <a class="nav-link&#x20;active" href="&#x23;">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">About</a>
            </li>
        </ul>
        <form action="" method="POST" name="form" role="form" class="form-inline" id="form">
            <input name="search" type="search" placeholder="Search" aria-label="Search" class="form-control&#x20;mr-sm-2" value=""/>
            <button type="submit" name="submit" class="btn&#x20;btn-outline-success" value="">Search</button>
        </form>
    </div>
</nav>

###### **Source**

```php
$oNavigationContainer = new \Laminas\Navigation\Navigation([
    ['label' => 'Home <span class="sr-only">(current)</span>', 'uri' => '#', 'active' => true],
    ['label' => 'Link', 'uri' => '#'],
    ['label' => 'Features', 'uri' => '#'],
    ['label' => 'Pricing', 'uri' => '#'],
    ['label' => 'About', 'uri' => '#'],
]);

$aOptions = [
    'brand' => 'Navbar',
    'form' => [
        'elements' => [
            [
                'spec' => [
                    'name' => 'search',
                    'attributes' => [
                        'type' => 'search',
                        'placeholder' => 'Search',
                        'aria-label' => 'Search',
                        'class' => 'mr-sm-2',
                    ],
                ],
            ],
            [
                'spec' => [
                    'type' => 'submit',
                    'options' => [
                        'label' => 'Search',
                        'variant' => 'outline-success',
                    ],
                ],
            ],
        ],
    ],
];

// Navbar dark, background dark
$aOptions['variant'] = 'dark';
$aOptions['background'] = 'dark';

echo $this->navigation()->navbar()->render($oNavigationContainer, $aOptions);
echo PHP_EOL . '<br/>' . PHP_EOL;

// Navbar dark, background primary
$aOptions['variant'] = 'dark';
$aOptions['background'] = 'primary';

echo $this->navigation()->navbar()->render($oNavigationContainer, $aOptions);
echo PHP_EOL . '<br/>' . PHP_EOL;

// Navbar light, custom background-color
$aOptions['variant'] = 'dark';
$aOptions['background'] = false;
$aOptions['attributes'] = ['style' => 'background-color: #e3f2fd;'];

echo $this->navigation()->navbar()->render($oNavigationContainer, $aOptions);
```

<!-- tabs:end -->


##### Containers
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/navbar/#containers)
<!-- tabs:start -->

###### **Result**

<div class="container">
    <nav class="bg-light&#x20;navbar&#x20;navbar-expand-lg&#x20;navbar-light">
        <a class="navbar-brand" href="&#x23;">Navbar</a>
    </nav>
</div>
<br/>
<nav class="bg-light&#x20;navbar&#x20;navbar-expand-lg&#x20;navbar-light">
    <div class="container">
        <a class="navbar-brand" href="&#x23;">Navbar</a>
    </div>
</nav>

###### **Source**

```php
echo $this->navigation()->navbar()->render(
    new \Laminas\Navigation\Navigation(),
    [
        'brand' => 'Navbar',
        'container' => 'wrap',
        'toggler' => false,
    ]
);

echo PHP_EOL . '<br/>' . PHP_EOL;

echo $this->navigation()->navbar()->render(
    new \Laminas\Navigation\Navigation(),
    [
        'brand' => 'Navbar',
        'container' => 'within',
        'toggler' => false,
    ]
);
```

<!-- tabs:end -->


##### Placement
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/navbar/#placement)
<!-- tabs:start -->

###### **Result**

<nav class="bg-light&#x20;navbar&#x20;navbar-light">
    <a class="navbar-brand" href="&#x23;">Default</a>
</nav>
<br/>
<nav class="bg-light&#x20;fixed-top&#x20;navbar&#x20;navbar-light">
    <a class="navbar-brand" href="&#x23;">Fixed top</a>
</nav>
<br/>
<nav class="bg-light&#x20;fixed-bottom&#x20;navbar&#x20;navbar-light">
    <a class="navbar-brand" href="&#x23;">Fixed bottom</a>
</nav>
<br/>
<nav class="bg-light&#x20;navbar&#x20;navbar-light&#x20;sticky-top">
    <a class="navbar-brand" href="&#x23;">Sticky top</a>
</nav>
<br/>


###### **Source**

```php
foreach (
    [
        false => 'Default',
        'fixed-top' => 'Fixed top',
        'fixed-bottom' => 'Fixed bottom',
        'sticky-top' => 'Sticky top',
    ] as $sPlacement => $sBrand
) {
    echo $this->navigation()->navbar()->render(
        new \Laminas\Navigation\Navigation(),
        [
            'brand' => $sBrand,
            'placement' => $sPlacement,
            'toggler' => false,
            'expand' => false,
        ]
    );
    echo PHP_EOL . '<br/>' . PHP_EOL;
}
```

<!-- tabs:end -->


#### Pagination
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/pagination/)
##### Overview
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/pagination/#overview)
<!-- tabs:start -->

###### **Result**

<nav aria-label="Page&#x20;navigation&#x20;example">
    <ul class="pagination">
        <li class="disabled&#x20;page-item"><a class="page-link" href="&#x23;" tabindex="-1">Previous</a></li>
        <li class="active&#x20;page-item"><a class="page-link" href="&#x23;">1 <span class="sr-only">(current)</span></a></li>
        <li class="page-item"><a class="page-link" href="&#x2F;test-route&#x2F;2">2</a></li>
        <li class="page-item"><a class="page-link" href="&#x2F;test-route&#x2F;3">3</a></li>
        <li class="page-item"><a class="page-link" href="&#x2F;test-route&#x2F;2">Next</a></li>
    </ul>
</nav>

###### **Source**

```php
// Create a paginator with 4 pages
$oPaginator = new \Laminas\Paginator\Paginator(new \Laminas\Paginator\Adapter\ArrayAdapter(array_fill(
    0,
    30,
    true
)));

echo $this->paginationControl($oPaginator, null, null, [
    'attributes' => ['aria-label' => 'Page navigation example'],
    'previousLink' => 'Previous',
    'nextLink' => 'Next',
]);
```

<!-- tabs:end -->


##### Working with icons
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/pagination/#working-with-icons)
<!-- tabs:start -->

###### **Result**

<nav aria-label="Page&#x20;navigation&#x20;example">
    <ul class="pagination">
        <li class="disabled&#x20;page-item"><a class="page-link" href="&#x23;" tabindex="-1">«</a></li>
        <li class="active&#x20;page-item"><a class="page-link" href="&#x23;">1 <span class="sr-only">(current)</span></a></li>
        <li class="page-item"><a class="page-link" href="&#x2F;test-route&#x2F;2">2</a></li>
        <li class="page-item"><a class="page-link" href="&#x2F;test-route&#x2F;3">3</a></li>
        <li class="page-item"><a class="page-link" href="&#x2F;test-route&#x2F;2">»</a></li>
    </ul>
</nav>

###### **Source**

```php
// Create a paginator with 4 pages
$oPaginator = new \Laminas\Paginator\Paginator(new \Laminas\Paginator\Adapter\ArrayAdapter(array_fill(
    0,
    30,
    true
)));

echo $this->paginationControl($oPaginator, null, null, [
    'previousLink' => '«',
    'nextLink' => '»',
    'attributes' => ['aria-label' => 'Page navigation example'],
]);
```

<!-- tabs:end -->


##### Sizing
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/pagination/#sizing)
<!-- tabs:start -->

###### **Result**

<nav aria-label="Page&#x20;navigation&#x20;example">
    <ul class="pagination&#x20;pagination-lg">
        <li class="active&#x20;page-item"><a class="page-link" href="&#x23;">1 <span class="sr-only">(current)</span></a></li>
        <li class="page-item"><a class="page-link" href="&#x2F;test-route&#x2F;2">2</a></li>
        <li class="page-item"><a class="page-link" href="&#x2F;test-route&#x2F;3">3</a></li>
    </ul>
</nav>
<nav aria-label="Page&#x20;navigation&#x20;example">
    <ul class="pagination&#x20;pagination-sm">
        <li class="active&#x20;page-item"><a class="page-link" href="&#x23;">1 <span class="sr-only">(current)</span></a></li>
        <li class="page-item"><a class="page-link" href="&#x2F;test-route&#x2F;2">2</a></li>
        <li class="page-item"><a class="page-link" href="&#x2F;test-route&#x2F;3">3</a></li>
    </ul>
</nav>

###### **Source**

```php
// Create a paginator with 4 pages
$oPaginator = new \Laminas\Paginator\Paginator(new \Laminas\Paginator\Adapter\ArrayAdapter(array_fill(
    0,
    30,
    true
)));

echo $this->paginationControl($oPaginator, null, null, [
    'size' => 'lg',
    'attributes' => ['aria-label' => 'Page navigation example'],
]) . PHP_EOL;

echo $this->paginationControl($oPaginator, null, null, [
    'size' => 'sm',
    'attributes' => ['aria-label' => 'Page navigation example'],
]);
```

<!-- tabs:end -->


##### Alignment
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/pagination/#alignment)
<!-- tabs:start -->

###### **Result**

<nav aria-label="Page&#x20;navigation&#x20;example">
    <ul class="justify-content-center&#x20;pagination">
        <li class="disabled&#x20;page-item"><a class="page-link" href="&#x23;" tabindex="-1">Previous</a></li>
        <li class="active&#x20;page-item"><a class="page-link" href="&#x23;">1 <span class="sr-only">(current)</span></a></li>
        <li class="page-item"><a class="page-link" href="&#x2F;test-route&#x2F;2">2</a></li>
        <li class="page-item"><a class="page-link" href="&#x2F;test-route&#x2F;3">3</a></li>
        <li class="page-item"><a class="page-link" href="&#x2F;test-route&#x2F;2">Next</a></li>
    </ul>
</nav>
<nav aria-label="Page&#x20;navigation&#x20;example">
    <ul class="justify-content-end&#x20;pagination">
        <li class="disabled&#x20;page-item"><a class="page-link" href="&#x23;" tabindex="-1">Previous</a></li>
        <li class="active&#x20;page-item"><a class="page-link" href="&#x23;">1 <span class="sr-only">(current)</span></a></li>
        <li class="page-item"><a class="page-link" href="&#x2F;test-route&#x2F;2">2</a></li>
        <li class="page-item"><a class="page-link" href="&#x2F;test-route&#x2F;3">3</a></li>
        <li class="page-item"><a class="page-link" href="&#x2F;test-route&#x2F;2">Next</a></li>
    </ul>
</nav>

###### **Source**

```php
// Create a paginator with 4 pages
$oPaginator = new \Laminas\Paginator\Paginator(new \Laminas\Paginator\Adapter\ArrayAdapter(array_fill(
    0,
    30,
    true
)));

echo $this->paginationControl($oPaginator, null, null, [
    'alignment' => 'center',
    'previousLink' => 'Previous',
    'nextLink' => 'Next',
    'attributes' => ['aria-label' => 'Page navigation example'],
]) . PHP_EOL;

echo $this->paginationControl($oPaginator, null, null, [
    'alignment' => 'end',
    'previousLink' => 'Previous',
    'nextLink' => 'Next',
    'attributes' => ['aria-label' => 'Page navigation example'],
]);
```

<!-- tabs:end -->


#### Popovers
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/popovers/)
##### Example
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/popovers/#example)
<!-- tabs:start -->

###### **Result**

<button type="button" name="popover" title="Popover&#x20;title" class="btn&#x20;btn-danger&#x20;btn-lg" data-toggle="popover" data-content="And&#x20;here&#x27;s&#x20;some&#x20;amazing&#x20;content.&#x20;It&#x27;s&#x20;very&#x20;engaging.&#x20;Right&#x3F;" value="">Click to toggle popover</button>

###### **Source**

```php
echo $this->formButton([
    'name' => 'popover',
    'options' => [
        'label' => 'Click to toggle popover',
        'variant' => 'danger',
        'popover' => 'And here\'s some amazing content. It\'s very engaging. Right?',
        'size' => 'lg',
    ],
    'attributes' => ['title' => 'Popover title'],
]);
```

<!-- tabs:end -->


##### Four directions
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/popovers/#four-directions)
<!-- tabs:start -->

###### **Result**

<button type="button" name="popover" class="btn&#x20;btn-secondary" data-toggle="popover" data-content="Vivamus&#x20;sagittis&#x20;lacus&#x20;vel&#x20;augue&#x20;laoreet&#x20;rutrum&#x20;faucibus." data-placement="top" data-container="body" value="">Popover on top</button>
<button type="button" name="popover" class="btn&#x20;btn-secondary" data-toggle="popover" data-content="Vivamus&#x20;sagittis&#x20;lacus&#x20;vel&#x20;augue&#x20;laoreet&#x20;rutrum&#x20;faucibus." data-placement="right" data-container="body" value="">Popover on right</button>
<button type="button" name="popover" class="btn&#x20;btn-secondary" data-toggle="popover" data-content="Vivamus&#x20;sagittis&#x20;lacus&#x20;vel&#x20;augue&#x20;laoreet&#x20;rutrum&#x20;faucibus." data-placement="bottom" data-container="body" value="">Popover on bottom</button>
<button type="button" name="popover" class="btn&#x20;btn-secondary" data-toggle="popover" data-content="Vivamus&#x20;sagittis&#x20;lacus&#x20;vel&#x20;augue&#x20;laoreet&#x20;rutrum&#x20;faucibus." data-placement="left" data-container="body" value="">Popover on left</button>


###### **Source**

```php
foreach (
    [
        'top' => 'Popover on top',
        'right' => 'Popover on right',
        'bottom' => 'Popover on bottom',
        'left' => 'Popover on left',
    ] as $sPlacement => $sButtonLabel
) {
    echo $this->formButton([
        'name' => 'popover',
        'options' => [
            'label' => $sButtonLabel,
            'popover' => [
                'placement' => $sPlacement,
                'content' => 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.',
            ],
        ],
    ]) . PHP_EOL;
}
```

<!-- tabs:end -->


##### Dismiss on next click
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/popovers/#dismiss-on-next-click)
<!-- tabs:start -->

###### **Result**

<a title="Dismissible&#x20;popover" tabindex="0" class="btn&#x20;btn-danger&#x20;btn-lg" role="button" data-toggle="popover" data-content="And&#x20;here&#x27;s&#x20;some&#x20;amazing&#x20;content.&#x20;It&#x27;s&#x20;very&#x20;engaging.&#x20;Right&#x3F;" data-trigger="focus">Dismissible popover</a>

###### **Source**

```php
echo $this->formButton([
    'name' => 'popover',
    'options' => [
        'tag' => 'a',
        'label' => 'Dismissible popover',
        'variant' => 'danger',
        'popover' => [
            'trigger' => 'focus',
            'content' => 'And here\'s some amazing content. It\'s very engaging. Right?',
        ],
        'size' => 'lg',
    ],
    'attributes' => ['title' => 'Dismissible popover', 'tabindex' => '0'],
]);
```

<!-- tabs:end -->


##### Disabled elements
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/popovers/#disabled-elements)
<!-- tabs:start -->

###### **Result**

<span class="d-inline-block" data-content="Disabled&#x20;popover" data-toggle="popover" tabindex="0"><button type="button" name="popover" disabled="disabled" class="btn&#x20;btn-primary" style="pointer-events&#x3A;&#x20;none&#x3B;" value="">Disabled button</button></span>

###### **Source**

```php
echo $this->formButton([
    'name' => 'popover',
    'options' => [
        'label' => 'Disabled button',
        'variant' => 'primary',
        'popover' => 'Disabled popover',
    ],
    'attributes' => ['disabled' => true],
]);
```

<!-- tabs:end -->


#### Progress
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/progress/)
##### How it works
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/progress/#example)
<!-- tabs:start -->

###### **Result**

<div class="progress">
    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="0" class="progress-bar" role="progressbar"></div>
</div>
<br/>
<div class="progress">
    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar" role="progressbar" style="width&#x3A;&#x20;25&#x25;&#x3B;"></div>
</div>
<br/>
<div class="progress">
    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar" role="progressbar" style="width&#x3A;&#x20;50&#x25;&#x3B;"></div>
</div>
<br/>
<div class="progress">
    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class="progress-bar" role="progressbar" style="width&#x3A;&#x20;75&#x25;&#x3B;"></div>
</div>
<br/>
<div class="progress">
    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" class="progress-bar" role="progressbar" style="width&#x3A;&#x20;100&#x25;&#x3B;"></div>
</div>

###### **Source**

```php
// Display progressbar at 0%
echo $this->progressBar(0, 100);
echo PHP_EOL . '<br/>' . PHP_EOL;

// Display progress bar at 25%
echo $this->progressBar(0, 100, 25);
echo PHP_EOL . '<br/>' . PHP_EOL;

// Display progress bar at 50%
echo $this->progressBar(0, 100, 50);
echo PHP_EOL . '<br/>' . PHP_EOL;

// Display progress bar at 75%
echo $this->progressBar(0, 100, 75);
echo PHP_EOL . '<br/>' . PHP_EOL;

// Display progress bar at 100%
echo $this->progressBar(0, 100, 100);
```

<!-- tabs:end -->


##### Labels
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/progress/#labels)
<!-- tabs:start -->

###### **Result**

<div class="progress">
    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar" role="progressbar" style="width&#x3A;&#x20;25&#x25;&#x3B;">
        25%
    </div>
</div>

###### **Source**

```php
echo $this->progressBar([
    'show_label' => true,
    'min' => 0,
    'max' => 100,
    'current' => 25,
]);
```

<!-- tabs:end -->


##### Height
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/progress/#height)
<!-- tabs:start -->

###### **Result**

<div class="progress" style="height&#x3A;&#x20;1px&#x3B;">
    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar" role="progressbar" style="width&#x3A;&#x20;25&#x25;&#x3B;"></div>
</div>
<br/>
<div class="progress" style="height&#x3A;&#x20;20px&#x3B;">
    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar" role="progressbar" style="width&#x3A;&#x20;25&#x25;&#x3B;"></div>
</div>

###### **Source**

```php
echo $this->progressBar([
    'attributes' => ['style' => 'height:1px'],
    'min' => 0,
    'max' => 100,
    'current' => 25,
]);

echo PHP_EOL . '<br/>' . PHP_EOL;

echo $this->progressBar([
    'attributes' => ['style' => 'height:20px'],
    'min' => 0,
    'max' => 100,
    'current' => 25,
]);
```

<!-- tabs:end -->


##### Backgrounds
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/progress/#backgrounds)
<!-- tabs:start -->

###### **Result**

<div class="progress">
    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="bg-success&#x20;progress-bar" role="progressbar" style="width&#x3A;&#x20;25&#x25;&#x3B;"></div>
</div>
<br/>
<div class="progress">
    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="bg-info&#x20;progress-bar" role="progressbar" style="width&#x3A;&#x20;50&#x25;&#x3B;"></div>
</div>
<br/>
<div class="progress">
    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class="bg-warning&#x20;progress-bar" role="progressbar" style="width&#x3A;&#x20;75&#x25;&#x3B;"></div>
</div>
<br/>
<div class="progress">
    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" class="bg-danger&#x20;progress-bar" role="progressbar" style="width&#x3A;&#x20;100&#x25;&#x3B;"></div>
</div>
<br/>


###### **Source**

```php
foreach (
    [
        'success' => 25,
        'info' => 50,
        'warning' => 75,
        'danger' => 100,
    ] as $sVariant => $iCurrent
) {
    echo $this->progressBar([
        'variant' => $sVariant,
        'min' => 0,
        'max' => 100,
        'current' => $iCurrent,
    ]);
    echo PHP_EOL . '<br/>' . PHP_EOL;
}
```

<!-- tabs:end -->


##### Multiple bars
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/progress/#multiple-bars)
<!-- tabs:start -->

###### **Result**

<div class="progress">
    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="15" class="progress-bar" role="progressbar" style="width&#x3A;&#x20;15&#x25;&#x3B;"></div>
    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="30" class="bg-success&#x20;progress-bar" role="progressbar" style="width&#x3A;&#x20;30&#x25;&#x3B;"></div>
    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="bg-info&#x20;progress-bar" role="progressbar" style="width&#x3A;&#x20;20&#x25;&#x3B;"></div>
</div>

###### **Source**

```php
echo $this->progressBarGroup([
    ['min' => 0, 'max' => 100, 'current' => 15],
    ['variant' => 'success', 'min' => 0, 'max' => 100, 'current' => 30],
    ['variant' => 'info', 'min' => 0, 'max' => 100, 'current' => 20],
]);
```

<!-- tabs:end -->


##### Striped
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/progress/#striped)
<!-- tabs:start -->

###### **Result**

<div class="progress">
    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" class="progress-bar&#x20;progress-bar-striped" role="progressbar" style="width&#x3A;&#x20;10&#x25;&#x3B;"></div>
</div>
<br/>
<div class="progress">
    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="bg-success&#x20;progress-bar&#x20;progress-bar-striped" role="progressbar" style="width&#x3A;&#x20;25&#x25;&#x3B;"></div>
</div>
<br/>
<div class="progress">
    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="bg-info&#x20;progress-bar&#x20;progress-bar-striped" role="progressbar" style="width&#x3A;&#x20;50&#x25;&#x3B;"></div>
</div>
<br/>
<div class="progress">
    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class="bg-warning&#x20;progress-bar&#x20;progress-bar-striped" role="progressbar" style="width&#x3A;&#x20;75&#x25;&#x3B;"></div>
</div>
<br/>
<div class="progress">
    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" class="bg-danger&#x20;progress-bar&#x20;progress-bar-striped" role="progressbar" style="width&#x3A;&#x20;100&#x25;&#x3B;"></div>
</div>
<br/>


###### **Source**

```php
foreach (
    [
        null => 10,
        'success' => 25,
        'info' => 50,
        'warning' => 75,
        'danger' => 100,
    ] as $sVariant => $iCurrent
) {
    echo $this->progressBar([
        'striped' => true,
        'variant' => $sVariant,
        'current' => $iCurrent,
        'min' => 0,
        'max' => 100,
    ]);
    echo PHP_EOL . '<br/>' . PHP_EOL;
}
```

<!-- tabs:end -->


##### Animated stripes
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/progress/#animated-stripes)
<!-- tabs:start -->

###### **Result**

<div class="progress">
    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar&#x20;progress-bar-animated&#x20;progress-bar-striped" role="progressbar" style="width&#x3A;&#x20;25&#x25;&#x3B;"></div>
</div>

###### **Source**

```php
echo $this->progressBar([
    'striped' => true,
    'animated' => true,
    'current' => 25,
    'min' => 0,
    'max' => 100,
]);
```

<!-- tabs:end -->


#### Spinners
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/spinners/)
##### Border spinner
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/spinners/#border-spinner)
<!-- tabs:start -->

###### **Result**

<div class="spinner-border" role="status">
    <span class="sr-only">Loading...</span>
</div>

###### **Source**

```php
echo $this->spinner('Loading...');
```

<!-- tabs:end -->


###### Colors
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/spinners/#colors)
<!-- tabs:start -->

####### **Result**

<div class="spinner-border&#x20;text-primary" role="status">
    <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border&#x20;text-secondary" role="status">
    <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border&#x20;text-success" role="status">
    <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border&#x20;text-danger" role="status">
    <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border&#x20;text-warning" role="status">
    <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border&#x20;text-info" role="status">
    <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border&#x20;text-light" role="status">
    <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border&#x20;text-dark" role="status">
    <span class="sr-only">Loading...</span>
</div>


####### **Source**

```php
foreach (
    [
        'primary', 'secondary', 'success', 'danger',
        'warning', 'info', 'light', 'dark',
    ] as $sVariant
) {
    echo $this->spinner([
        'variant' => $sVariant,
        'label' => 'Loading...',
    ]) . PHP_EOL;
}
```

<!-- tabs:end -->


##### Growing spinner
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/spinners/#growing-spinner)
<!-- tabs:start -->

###### **Result**

<div class="spinner-grow" role="status">
    <span class="sr-only">Loading...</span>
</div>
<br/>
<div class="spinner-grow&#x20;text-primary" role="status">
    <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow&#x20;text-secondary" role="status">
    <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow&#x20;text-success" role="status">
    <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow&#x20;text-danger" role="status">
    <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow&#x20;text-warning" role="status">
    <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow&#x20;text-info" role="status">
    <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow&#x20;text-light" role="status">
    <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow&#x20;text-dark" role="status">
    <span class="sr-only">Loading...</span>
</div>


###### **Source**

```php
echo $this->spinner(['type' => 'grow', 'label' => 'Loading...']);

echo PHP_EOL . '<br/>' . PHP_EOL;

foreach (
    [
        'primary', 'secondary', 'success', 'danger',
        'warning', 'info', 'light', 'dark',
    ] as $sVariant
) {
    echo $this->spinner([
        'variant' => $sVariant,
        'type' => 'grow',
        'label' => 'Loading...',
    ]) . PHP_EOL;
}
```

<!-- tabs:end -->


##### Alignment
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/spinners/#alignment)
###### Margin
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/spinners/#margin)
<!-- tabs:start -->

####### **Result**

<div class="m-5&#x20;spinner-border" role="status">
    <span class="sr-only">Loading...</span>
</div>

####### **Source**

```php
echo $this->spinner([
    'margin' => 5,
    'label' => 'Loading...',
]);
```

<!-- tabs:end -->


###### Placement
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/spinners/#placement)
####### Flex
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/spinners/#flex)
<!-- tabs:start -->

######## **Result**

<div class="d-flex&#x20;justify-content-center">
    <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<br/>
<div class="align-items-center&#x20;d-flex">
    <strong>Loading...</strong>
    <div aria-hidden="true" class="ml-auto&#x20;spinner-border" role="status"></div>
</div>

######## **Source**

```php
echo $this->spinner([
    'placement' => 'center',
    'label' => 'Loading...',
]);

echo PHP_EOL . '<br/>' . PHP_EOL;

echo $this->spinner([
    'placement' => 'center',
    'label' => 'Loading...',
    'show_label' => true,
]);
```

<!-- tabs:end -->


####### Floats
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/spinners/#floats)
<!-- tabs:start -->

######## **Result**

<div class="clearfix">
    <div class="float-right&#x20;spinner-border" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

######## **Source**

```php
echo $this->spinner([
    'placement' => 'right',
    'label' => 'Loading...',
]);
```

<!-- tabs:end -->


####### Text align
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/spinners/#text-align)
<!-- tabs:start -->

######## **Result**

<div class="text-center">
    <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

######## **Source**

```php
echo $this->spinner([
    'placement' => 'text-center',
    'label' => 'Loading...',
]);
```

<!-- tabs:end -->


###### Size
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/spinners/#size)
<!-- tabs:start -->

####### **Result**

<div class="spinner-border&#x20;spinner-border-sm" role="status">
    <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow&#x20;spinner-grow-sm" role="status">
    <span class="sr-only">Loading...</span>
</div>
<br/><br/>
<div class="spinner-border" role="status" style="height&#x3A;&#x20;3rem&#x3B;width&#x3A;&#x20;3rem&#x3B;">
    <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow" role="status" style="height&#x3A;&#x20;3rem&#x3B;width&#x3A;&#x20;3rem&#x3B;">
    <span class="sr-only">Loading...</span>
</div>

####### **Source**

```php
echo $this->spinner([
    'size' => 'sm',
    'label' => 'Loading...',
]) . PHP_EOL;

echo $this->spinner([
    'size' => 'sm',
    'type' => 'grow',
    'label' => 'Loading...',
]);

echo PHP_EOL . '<br/><br/>' . PHP_EOL;

echo $this->spinner([
    'attributes' => ['style' => 'width: 3rem; height: 3rem;'],
    'label' => 'Loading...',
]) . PHP_EOL;

echo $this->spinner([
    'attributes' => ['style' => 'width: 3rem; height: 3rem;'],
    'type' => 'grow',
    'label' => 'Loading...',
]);
```

<!-- tabs:end -->


###### Buttons
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/spinners/#buttons)
<!-- tabs:start -->

####### **Result**

<button type="button" name="button" disabled="disabled" class="btn&#x20;btn-primary" value=""><span aria-hidden="true" class="spinner-border&#x20;spinner-border-sm" role="status"><span class="sr-only">Loading...</span></span></button>
<button type="button" name="button" disabled="disabled" class="btn&#x20;btn-primary" value="">
    <span aria-hidden="true" class="spinner-border&#x20;spinner-border-sm" role="status"></span>
    Loading...
</button>
<br/><br/>
<button type="button" name="button" disabled="disabled" class="btn&#x20;btn-primary" value=""><span aria-hidden="true" class="spinner-grow&#x20;spinner-grow-sm" role="status"><span class="sr-only">Loading...</span></span></button>
<button type="button" name="button" disabled="disabled" class="btn&#x20;btn-primary" value="">
    <span aria-hidden="true" class="spinner-grow&#x20;spinner-grow-sm" role="status"></span>
    Loading...
</button>

####### **Source**

```php
echo $this->formButton([
    'options' => [
        'spinner' => 'Loading...',
        'variant' => 'primary',
    ],
    'attributes' => ['disabled' => true],
]) . PHP_EOL;

echo $this->formButton([
    'options' => [
        'label' => 'Loading...',
        'spinner' => true,
        'variant' => 'primary',
    ],
    'attributes' => ['disabled' => true],
]);

echo PHP_EOL . '<br/><br/>' . PHP_EOL;

echo $this->formButton([
    'options' => [
        'spinner' => [
            'type' => 'grow',
            'label' => 'Loading...',
        ],
        'variant' => 'primary',
    ],
    'attributes' => ['disabled' => true],
]) . PHP_EOL;

echo $this->formButton([
    'options' => [
        'label' => 'Loading...',
        'spinner' => ['type' => 'grow'],
        'variant' => 'primary',
    ],
    'attributes' => ['disabled' => true],
]);
```

<!-- tabs:end -->


#### Toasts
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/toasts/)
##### Examples
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/toasts/#examples)
###### Basic
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/toasts/#basic)
<!-- tabs:start -->

####### **Result**

<div aria-atomic="true" aria-live="assertive" class="toast" role="alert">
    <div class="toast-header">
        <img alt="..." class="mr-2&#x20;rounded" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;rounded-blue.svg" />
        <strong class="mr-auto">Bootstrap</strong>
        <small class="text-muted">11 mins ago</small>
        <button aria-label="Close" class="close&#x20;mb-1&#x20;ml-2" data-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="toast-body">
        Hello, world! This is a toast message.
    </div>
</div>

####### **Source**

```php
echo $this->toast([
    'header' => [
        'image' => [
            '/twbs-helper-module/img/docs/rounded-blue.svg',
            ['alt' => '...', 'class' => 'rounded mr-2'],
        ],
        'title' => 'Bootstrap',
        'subtitle' => '11 mins ago',
    ],
    'body' => 'Hello, world! This is a toast message.',
]);
```

<!-- tabs:end -->


###### Translucent
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/toasts/#translucent)
<!-- tabs:start -->

####### **Result**

<div class="bg-dark"><div aria-atomic="true" aria-live="assertive" class="toast" role="alert">
    <div class="toast-header">
        <img alt="..." class="mr-2&#x20;rounded" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;rounded-blue.svg" />
        <strong class="mr-auto">Bootstrap</strong>
        <small class="text-muted">11 mins ago</small>
        <button aria-label="Close" class="close&#x20;mb-1&#x20;ml-2" data-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="toast-body">
        Hello, world! This is a toast message.
    </div>
</div></div>

####### **Source**

```php
echo '<div class="bg-dark">';

echo $this->toast([
    'header' => [
        'image' => [
            '/twbs-helper-module/img/docs/rounded-blue.svg',
            ['alt' => '...', 'class' => 'rounded mr-2'],
        ],
        'title' => 'Bootstrap',
        'subtitle' => '11 mins ago',
    ],
    'body' => 'Hello, world! This is a toast message.',
]);

echo '</div>';
```

<!-- tabs:end -->


###### Stacking
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/toasts/#stacking)
<!-- tabs:start -->

####### **Result**

<div aria-atomic="true" aria-live="assertive" class="toast" role="alert">
    <div class="toast-header">
        <img alt="..." class="mr-2&#x20;rounded" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;rounded-blue.svg" />
        <strong class="mr-auto">Bootstrap</strong>
        <small class="text-muted">just now</small>
        <button aria-label="Close" class="close&#x20;mb-1&#x20;ml-2" data-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="toast-body">
        See? Just like this.
    </div>
</div>
<div aria-atomic="true" aria-live="assertive" class="toast" role="alert">
    <div class="toast-header">
        <img alt="..." class="mr-2&#x20;rounded" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;rounded-blue.svg" />
        <strong class="mr-auto">Bootstrap</strong>
        <small class="text-muted">2 seconds ago</small>
        <button aria-label="Close" class="close&#x20;mb-1&#x20;ml-2" data-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="toast-body">
        Heads up, toasts will stack automatically
    </div>
</div>

####### **Source**

```php
echo $this->toast([
    'header' => [
        'image' => [
            '/twbs-helper-module/img/docs/rounded-blue.svg',
            ['alt' => '...', 'class' => 'rounded mr-2'],
        ],
        'title' => 'Bootstrap',
        'subtitle' => 'just now',
    ],
    'body' => 'See? Just like this.',
]) . PHP_EOL;

echo $this->toast([
    'header' => [
        'image' => [
            '/twbs-helper-module/img/docs/rounded-blue.svg',
            ['alt' => '...', 'class' => 'rounded mr-2'],
        ],
        'title' => 'Bootstrap',
        'subtitle' => '2 seconds ago',
    ],
    'body' => 'Heads up, toasts will stack automatically',
]);
```

<!-- tabs:end -->


###### Placement
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/toasts/#placement)
<!-- tabs:start -->

####### **Result**

<div class="bg-dark" style="position:relative;min-height:200px;"><div aria-atomic="true" aria-live="assertive" class="toast" role="alert" style="position&#x3A;&#x20;absolute&#x3B;right&#x3A;&#x20;0&#x3B;top&#x3A;&#x20;0&#x3B;">
    <div class="toast-header">
        <img alt="..." class="mr-2&#x20;rounded" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;rounded-blue.svg" />
        <strong class="mr-auto">Bootstrap</strong>
        <small class="text-muted">11 mins ago</small>
        <button aria-label="Close" class="close&#x20;mb-1&#x20;ml-2" data-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="toast-body">
        Hello, world! This is a toast message.
    </div>
</div></div>
<br/><br/>
<div class="bg-dark" style="position:relative;min-height:200px;"><div aria-atomic="true" aria-live="assertive" class="toast" role="alert" style="left&#x3A;&#x20;0&#x3B;margin-left&#x3A;&#x20;auto&#x3B;margin-right&#x3A;&#x20;auto&#x3B;position&#x3A;&#x20;absolute&#x3B;right&#x3A;&#x20;0&#x3B;top&#x3A;&#x20;0&#x3B;">
    <div class="toast-header">
        <img alt="..." class="mr-2&#x20;rounded" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;rounded-blue.svg" />
        <strong class="mr-auto">Bootstrap</strong>
        <small class="text-muted">11 mins ago</small>
        <button aria-label="Close" class="close&#x20;mb-1&#x20;ml-2" data-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="toast-body">
        Hello, world! This is a toast message.
    </div>
</div></div>

####### **Source**

```php
echo '<div class="bg-dark" style="position:relative;min-height:200px;">';

echo $this->toast([
    'placement' => 'top-right',
    'header' => [
        'image' => [
            '/twbs-helper-module/img/docs/rounded-blue.svg',
            ['alt' => '...', 'class' => 'rounded mr-2'],
        ],
        'title' => 'Bootstrap',
        'subtitle' => '11 mins ago',
    ],
    'body' => 'Hello, world! This is a toast message.',
]);

echo '</div>';

echo PHP_EOL . '<br/><br/>' . PHP_EOL;

echo '<div class="bg-dark" style="position:relative;min-height:200px;">';

echo $this->toast([
    'placement' => 'top-center',
    'header' => [
        'image' => [
            '/twbs-helper-module/img/docs/rounded-blue.svg',
            ['alt' => '...', 'class' => 'rounded mr-2'],
        ],
        'title' => 'Bootstrap',
        'subtitle' => '11 mins ago',
    ],
    'body' => 'Hello, world! This is a toast message.',
]);

echo '</div>';
```

<!-- tabs:end -->


###### Accessibility
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/toasts/#accessibility)
<!-- tabs:start -->

####### **Result**

<div aria-atomic="true" aria-live="assertive" class="toast" data-autohide="false" role="alert">
    <div class="toast-header">
        <img alt="..." class="mr-2&#x20;rounded" src="&#x2F;twbs-helper-module&#x2F;img&#x2F;docs&#x2F;rounded-blue.svg" />
        <strong class="mr-auto">Bootstrap</strong>
        <small class="text-muted">11 mins ago</small>
        <button aria-label="Close" class="close&#x20;mb-1&#x20;ml-2" data-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="toast-body">
        Hello, world! This is a toast message.
    </div>
</div>

####### **Source**

```php
echo $this->toast([
    'autohide' => false,
    'header' => [
        'image' => [
            '/twbs-helper-module/img/docs/rounded-blue.svg',
            ['alt' => '...', 'class' => 'rounded mr-2'],
        ],
        'title' => 'Bootstrap',
        'subtitle' => '11 mins ago',
    ],
    'body' => 'Hello, world! This is a toast message.',
]);
```

<!-- tabs:end -->


#### Tooltips
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/tooltips/)
##### Examples
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/tooltips/#examples)
<!-- tabs:start -->

###### **Result**

<button type="button" name="tooltip" class="btn&#x20;btn-secondary" title="Tooltip&#x20;on&#x20;top" data-toggle="tooltip" data-placement="top" value="">Tooltip on top</button>
<button type="button" name="tooltip" class="btn&#x20;btn-secondary" title="Tooltip&#x20;on&#x20;right" data-toggle="tooltip" data-placement="right" value="">Tooltip on right</button>
<button type="button" name="tooltip" class="btn&#x20;btn-secondary" title="Tooltip&#x20;on&#x20;bottom" data-toggle="tooltip" data-placement="bottom" value="">Tooltip on bottom</button>
<button type="button" name="tooltip" class="btn&#x20;btn-secondary" title="Tooltip&#x20;on&#x20;left" data-toggle="tooltip" data-placement="left" value="">Tooltip on left</button>
<button type="button" name="tooltip" class="btn&#x20;btn-secondary" title="&lt;em&gt;Tooltip&lt;&#x2F;em&gt;&#x20;&lt;u&gt;with&lt;&#x2F;u&gt;&#x20;&lt;b&gt;HTML&lt;&#x2F;b&gt;" data-toggle="tooltip" data-html="true" value="">Tooltip with HTML</button>

###### **Source**

```php
foreach (
    [
        'top' => 'Tooltip on top',
        'right' => 'Tooltip on right',
        'bottom' => 'Tooltip on bottom',
        'left' => 'Tooltip on left',
    ] as $sPlacement => $sLabel
) {
    echo $this->formButton([
        'name' => 'tooltip',
        'options' => [
            'label' => $sLabel,
            'tooltip' => [
                'placement' => $sPlacement,
                'content' => $sLabel,
            ],
        ],
    ]) . PHP_EOL;
}

echo $this->formButton([
    'name' => 'tooltip',
    'options' => [
        'label' => 'Tooltip with HTML',
        'tooltip' => '<em>Tooltip</em> <u>with</u> <b>HTML</b>',
    ],
]);
```

<!-- tabs:end -->


##### Disabled elements
[Twitter bootstrap Documentation](https://getbootstrap.com/docs/5.0/components/tooltips/#disabled-elements)
<!-- tabs:start -->

###### **Result**

<span class="d-inline-block" data-toggle="tooltip" tabindex="0" title="Disabled&#x20;tooltip"><button type="button" name="tooltip" disabled="disabled" class="btn&#x20;btn-primary" style="pointer-events&#x3A;&#x20;none&#x3B;" value="">Disabled button</button></span>

###### **Source**

```php
echo $this->formButton([
    'name' => 'tooltip',
    'options' => [
        'label' => 'Disabled button',
        'tooltip' => 'Disabled tooltip',
        'variant' => 'primary',
    ],
    'attributes' => [
        'disabled' => true,
    ],
]);
```

<!-- tabs:end -->


