---
title: "FormRowElement"
---

***

* Full name: `\TwbsHelper\Form\View\Helper\FormRowElement`
* Parent class: `FormRow`

## Properties

### inputErrorClass

The class that is added to element that have errors

```php
protected string $inputErrorClass
```

***

### inputValidClass

The class that is added to element that are valid or have valid feedback

```php
protected string $inputValidClass
```

***

## Methods

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

### getElementRenderingOrder

```php
protected getElementRenderingOrder(\Laminas\Form\ElementInterface $element, ?string $labelPosition = null): array
```

**Parameters:**

| Parameter        | Type                               | Description |
|------------------|------------------------------------|-------------|
| `$element`       | **\Laminas\Form\ElementInterface** |             |
| `$labelPosition` | **?string**                        |             |

***

### renderElement

```php
protected renderElement(\Laminas\Form\ElementInterface $element, mixed $content): string
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |
| `$content` | **mixed**                          |             |

***

### renderMultiCheckboxCommonParts

```php
protected renderMultiCheckboxCommonParts(\Laminas\Form\ElementInterface $element): string
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |

***

### prepareElementForRendering

```php
public prepareElementForRendering(\Laminas\Form\ElementInterface $element): mixed
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |

***

### getInputValidClass

The class that is added to element that are valid or have valid feedback

```php
protected getInputValidClass(): string
```

***

### renderLabel

Render element's label

```php
protected renderLabel(\Laminas\Form\ElementInterface $element, string $elementContent, string $labelPosition = null): string
```

**Parameters:**

| Parameter         | Type                               | Description |
|-------------------|------------------------------------|-------------|
| `$element`        | **\Laminas\Form\ElementInterface** |             |
| `$elementContent` | **string**                         |             |
| `$labelPosition`  | **string**                         |             |

***

### renderLayoutContentContainer

```php
protected renderLayoutContentContainer(\Laminas\Form\ElementInterface $element, mixed $content): string
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |
| `$content` | **mixed**                          |             |

***

### getDefaultLabelPosition

```php
protected getDefaultLabelPosition(\Laminas\Form\ElementInterface $element, mixed $labelPosition = null): string
```

**Parameters:**

| Parameter        | Type                               | Description |
|------------------|------------------------------------|-------------|
| `$element`       | **\Laminas\Form\ElementInterface** |             |
| `$labelPosition` | **mixed**                          |             |

***

### renderHelpBlock

Render element's help block

```php
protected renderHelpBlock(\Laminas\Form\ElementInterface $element, string $elementContent): string
```

**Parameters:**

| Parameter         | Type                               | Description |
|-------------------|------------------------------------|-------------|
| `$element`        | **\Laminas\Form\ElementInterface** |             |
| `$elementContent` | **string**                         |             |

***

### renderValidFeedback

Render element's valid feedback

```php
protected renderValidFeedback(\Laminas\Form\ElementInterface $element, string $elementContent): string
```

**Parameters:**

| Parameter         | Type                               | Description |
|-------------------|------------------------------------|-------------|
| `$element`        | **\Laminas\Form\ElementInterface** |             |
| `$elementContent` | **string**                         |             |

***

### renderAddOn

Render element's add-on

```php
protected renderAddOn(\Laminas\Form\ElementInterface $element, string $elementContent): string
```

**Parameters:**

| Parameter         | Type                               | Description |
|-------------------|------------------------------------|-------------|
| `$element`        | **\Laminas\Form\ElementInterface** |             |
| `$elementContent` | **string**                         |             |

***

### renderErrors

Render element's errors

```php
protected renderErrors(\Laminas\Form\ElementInterface $element, string $elementContent): string
```

**Parameters:**

| Parameter         | Type                               | Description |
|-------------------|------------------------------------|-------------|
| `$element`        | **\Laminas\Form\ElementInterface** |             |
| `$elementContent` | **string**                         |             |

***

### renderDedicatedContainer

Render element's dedicated container

```php
protected renderDedicatedContainer(\Laminas\Form\ElementInterface $element, string $elementContent): string
```

**Parameters:**

| Parameter         | Type                               | Description |
|-------------------|------------------------------------|-------------|
| `$element`        | **\Laminas\Form\ElementInterface** |             |
| `$elementContent` | **string**                         |             |

***

### renderDedicatedContainerForCheckbox

Render element's dedicated container

```php
protected renderDedicatedContainerForCheckbox(\Laminas\Form\ElementInterface $element, string $elementContent): string
```

**Parameters:**

| Parameter         | Type                               | Description |
|-------------------|------------------------------------|-------------|
| `$element`        | **\Laminas\Form\ElementInterface** |             |
| `$elementContent` | **string**                         |             |

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

### elementIsCheckbox

```php
protected elementIsCheckbox(\Laminas\Form\ElementInterface $element): mixed
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |

***

### elementIsMultiCheckbox

```php
protected elementIsMultiCheckbox(\Laminas\Form\ElementInterface $element): mixed
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
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
