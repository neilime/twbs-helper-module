---
title: "FormRow"
---

***

* Full name: `\TwbsHelper\Form\View\Helper\FormRow`
* Parent class: `FormRow`

## Properties

### options

```php
protected $options
```

***

### rowElementHelper

Form label helper instance

```php
protected null|\TwbsHelper\Form\View\Helper\FormRowElement $rowElementHelper
```

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

```php
public render(\Laminas\Form\ElementInterface $element, string|null $labelPosition = null): string
```

**Parameters:**

| Parameter        | Type                               | Description |
|------------------|------------------------------------|-------------|
| `$element`       | **\Laminas\Form\ElementInterface** |             |
| `$labelPosition` | **string\|null**                   |             |

***

### renderPartial

```php
protected renderPartial(\Laminas\Form\ElementInterface $element, string|null $labelPosition = null): string
```

**Parameters:**

| Parameter        | Type                               | Description |
|------------------|------------------------------------|-------------|
| `$element`       | **\Laminas\Form\ElementInterface** |             |
| `$labelPosition` | **string\|null**                   |             |

***

### renderFormRow

```php
public renderFormRow(\Laminas\Form\ElementInterface $element, string $elementContent): string
```

**Parameters:**

| Parameter         | Type                               | Description |
|-------------------|------------------------------------|-------------|
| `$element`        | **\Laminas\Form\ElementInterface** |             |
| `$elementContent` | **string**                         |             |

***

### getElementRowClasses

```php
protected getElementRowClasses(\Laminas\Form\ElementInterface $element): array
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |

***

### elementIsLayout

```php
protected elementIsLayout(\Laminas\Form\ElementInterface $element, string $layout): mixed
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |
| `$layout`  | **string**                         |             |

***

### renderElement

```php
protected renderElement(\Laminas\Form\ElementInterface $element, string $labelPosition = null): string
```

**Parameters:**

| Parameter        | Type                               | Description |
|------------------|------------------------------------|-------------|
| `$element`       | **\Laminas\Form\ElementInterface** |             |
| `$labelPosition` | **string**                         |             |

**Throws:**

- `DomainException`

***

### getFormRowElementHelper

Retrieve the FormRowElement helper

```php
protected getFormRowElementHelper(): \TwbsHelper\Form\View\Helper\FormRowElement
```

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
