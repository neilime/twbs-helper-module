---
title: "FormCollection"
---

FormCollection

***

* Full name: `\TwbsHelper\Form\View\Helper\FormCollection`
* Parent class: [`FormCollection`](../../../../Laminas/Form/View/Helper/FormCollection)

## Properties

### fieldsetRegex

```php
protected static $fieldsetRegex
```

* This property is **static**.

***

### legendRegex

```php
protected static $legendRegex
```

* This property is **static**.

***

### options

```php
protected $options
```

***

### wrapper

This is the default wrapper that the collection is wrapped into

```php
protected string $wrapper
```

***

### validTagAttributes

Attributes valid for the tag represented by this helper

```php
protected array $validTagAttributes
```

This should be overridden in extending classes

***

## Methods

### __construct

Constructor

```php
public __construct(\TwbsHelper\Options\ModuleOptions $moduleOptions): void
```

**Parameters:**

| Parameter        | Type                                  | Description |
|------------------|---------------------------------------|-------------|
| `$moduleOptions` | **\TwbsHelper\Options\ModuleOptions** |             |

***

### render

Render a collection by iterating through all fieldsets and elements

```php
public render(\Laminas\Form\ElementInterface $element): string
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |

***

### renderTemplate

Only render a template

```php
public renderTemplate(\Laminas\Form\Element\Collection $collection): string
```

**Parameters:**

| Parameter     | Type                                 | Description |
|---------------|--------------------------------------|-------------|
| `$collection` | **\Laminas\Form\Element\Collection** |             |

***

### getElementLayoutClasses

```php
protected getElementLayoutClasses(\Laminas\Form\ElementInterface $element): array
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |

***

### renderFieldset

```php
protected renderFieldset(\Laminas\Form\ElementInterface $element): string
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |

***

### renderFieldsetLegend

```php
protected renderFieldsetLegend(\Laminas\Form\ElementInterface $element, string $markup): string
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |
| `$markup`  | **string**                         |             |

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
