---
title: "FormElement"
---

***

* Full name: `\TwbsHelper\Form\View\Helper\FormElement`
* Parent class: [`FormElement`](../../../../Laminas/Form/View/Helper/FormElement)

## Properties

### options

```php
protected $options
```

***

### classMap

```php
protected $classMap
```

***

## Methods

### __construct

Constructor

```php
public __construct(\TwbsHelper\Options\ModuleOptions $options): void
```

**Parameters:**

| Parameter  | Type                                  | Description |
|------------|---------------------------------------|-------------|
| `$options` | **\TwbsHelper\Options\ModuleOptions** |             |

***

### render

Render an element

```php
public render(\Laminas\Form\ElementInterface $element): string
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |

***

### renderHelper

Render element by helper name

```php
protected renderHelper(string $name, \Laminas\Form\ElementInterface $element): string
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$name`    | **string**                         |             |
| `$element` | **\Laminas\Form\ElementInterface** |             |

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
