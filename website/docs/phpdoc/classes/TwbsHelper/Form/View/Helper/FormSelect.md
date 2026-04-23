---
title: "FormSelect"
---

***

* Full name: `\TwbsHelper\Form\View\Helper\FormSelect`
* Parent class: `FormSelect`

## Methods

### render

Render a form &lt;select&gt; element from the provided $element

```php
public render(\Laminas\Form\ElementInterface $element): string
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |

***

### renderOptions

Render an array of options

```php
public renderOptions(array $options, array $selectedOptions = []): string
```

Individual options should be of the form:

&lt;code&gt;
array(
    'value'    =&gt; 'value',
    'label'    =&gt; 'label',
    'disabled' =&gt; $booleanFlag,
    'selected' =&gt; $booleanFlag,
)
&lt;/code&gt;

**Parameters:**

| Parameter          | Type      | Description                                     |
|--------------------|-----------|-------------------------------------------------|
| `$options`         | **array** |                                                 |
| `$selectedOptions` | **array** | Option values that should be marked as selected |

***

## Inherited methods

### prepareAttributes

```php
protected prepareAttributes(array $attributes): array
```

**Parameters:**

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$attributes` | **array** |             |

***

### setClassesToElement

```php
protected setClassesToElement(\Laminas\Form\ElementInterface $element, iterable $addClasses = [], iterable $removeClasses = []): \Laminas\Form\ElementInterface
```

**Parameters:**

| Parameter        | Type                               | Description |
|------------------|------------------------------------|-------------|
| `$element`       | **\Laminas\Form\ElementInterface** |             |
| `$addClasses`    | **iterable**                       |             |
| `$removeClasses` | **iterable**                       |             |

***
