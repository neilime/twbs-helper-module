---
title: "FormLabel"
---

***

* Full name: `\TwbsHelper\Form\View\Helper\FormLabel`
* Parent class: `FormLabel`

## Properties

### requiredFormat

```php
protected string $requiredFormat
```

***

## Methods

### __invoke

Generate a form label, optionally with content

```php
public __invoke(\Laminas\Form\ElementInterface $element = null, null|string $labelContent = null, string $position = null): string|\TwbsHelper\Form\View\Helper\FormLabel
```

Always generates a "for" statement, as we cannot assume the form input
will be provided in the $labelContent.

**Parameters:**

| Parameter       | Type                               | Description |
|-----------------|------------------------------------|-------------|
| `$element`      | **\Laminas\Form\ElementInterface** |             |
| `$labelContent` | **null\|string**                   |             |
| `$position`     | **string**                         |             |

***

### renderPartial

Render element's label

```php
public renderPartial(\Laminas\Form\ElementInterface $element): string
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |

***

### prepareLabelAttributes

```php
protected prepareLabelAttributes(\Laminas\Form\ElementInterface $element): iterable
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |

***

### getLabelClasses

```php
protected getLabelClasses(\Laminas\Form\ElementInterface $element, \TwbsHelper\View\HtmlAttributesSet $labelAttributes): iterable
```

**Parameters:**

| Parameter          | Type                                   | Description |
|--------------------|----------------------------------------|-------------|
| `$element`         | **\Laminas\Form\ElementInterface**     |             |
| `$labelAttributes` | **\TwbsHelper\View\HtmlAttributesSet** |             |

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
