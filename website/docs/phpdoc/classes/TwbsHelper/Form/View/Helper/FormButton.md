---
title: "FormButton"
---

***

* Full name: `\TwbsHelper\Form\View\Helper\FormButton`
* Parent class: `FormButton`

## Constants

| Constant           | Visibility | Type | Value     |
|--------------------|------------|------|-----------|
| `POSITION_PREPEND` | public     |      | 'prepend' |
| `POSITION_APPEND`  | public     |      | 'append'  |

## Methods

### __invoke

Invoke helper as functor

```php
public __invoke(\Laminas\Form\ElementInterface|null $element = null, null|string $buttonContent = null): string|\TwbsHelper\Form\View\Helper\FormButton
```

Proxies to 

- **See:** .

**Parameters:**

| Parameter        | Type                                     | Description |
|------------------|------------------------------------------|-------------|
| `$element`       | **\Laminas\Form\ElementInterface\|null** |             |
| `$buttonContent` | **null\|string**                         |             |

***

### renderSpec

Renders a button from an array specification

```php
public renderSpec(array $elementSpec, ?string $buttonContent = null): string
```

**Parameters:**

| Parameter        | Type        | Description |
|------------------|-------------|-------------|
| `$elementSpec`   | **array**   |             |
| `$buttonContent` | **?string** |             |

**See Also:**

* \TwbsHelper\Form\View\Helper\FormButton::render()

***

### getElementFromSpec

```php
protected getElementFromSpec(array $elementSpec): \Laminas\Form\ElementInterface
```

**Parameters:**

| Parameter      | Type      | Description |
|----------------|-----------|-------------|
| `$elementSpec` | **array** |             |

***

### render

Accept following extra options:
* string variant:  'danger', 'dark', 'info', 'light', 'link', 'primary', 'secondary', 'success', 'warning'
* string size:  'sm', 'lg'
* bool block

```php
public render(\Laminas\Form\ElementInterface $element, ?string $buttonContent = null): string
```

**Parameters:**

| Parameter        | Type                               | Description |
|------------------|------------------------------------|-------------|
| `$element`       | **\Laminas\Form\ElementInterface** |             |
| `$buttonContent` | **?string**                        |             |

**See Also:**

* \Laminas\Form\View\Helper\FormButton::render()

***

### prepareElementAttributes

```php
protected prepareElementAttributes(\Laminas\Form\ElementInterface $element): mixed
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |

***

### prepareElementClassAttributes

```php
protected prepareElementClassAttributes(\Laminas\Form\ElementInterface $element): mixed
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |

***

### prepareElementAttributesForClose

```php
protected prepareElementAttributesForClose(\Laminas\Form\ElementInterface $element): mixed
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |

***

### prepareElementAttributesForToggle

```php
protected prepareElementAttributesForToggle(\Laminas\Form\ElementInterface $element): mixed
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |

***

### prepareElementAttributesForPopover

```php
protected prepareElementAttributesForPopover(\Laminas\Form\ElementInterface $element): mixed
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |

***

### getElementPopoverAttributes

```php
protected getElementPopoverAttributes(\Laminas\Form\ElementInterface $element): ?\TwbsHelper\View\HtmlAttributesSet
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |

***

### prepareElementAttributesForTooltip

```php
protected prepareElementAttributesForTooltip(\Laminas\Form\ElementInterface $element): mixed
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |

***

### getElementTooltipAttributes

```php
protected getElementTooltipAttributes(\Laminas\Form\ElementInterface $element): ?\TwbsHelper\View\HtmlAttributesSet
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |

***

### prepareElementAttributesForTag

```php
protected prepareElementAttributesForTag(\Laminas\Form\ElementInterface $element): mixed
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |

***

### prepareElementValidTagAttributes

```php
protected prepareElementValidTagAttributes(\Laminas\Form\ElementInterface $element): mixed
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |

***

### renderButtonContent

```php
protected renderButtonContent(\Laminas\Form\ElementInterface $element, ?string $buttonContent = null): mixed
```

**Parameters:**

| Parameter        | Type                               | Description |
|------------------|------------------------------------|-------------|
| `$element`       | **\Laminas\Form\ElementInterface** |             |
| `$buttonContent` | **?string**                        |             |

***

### renderIconContent

```php
protected renderIconContent(\Laminas\Form\ElementInterface $element, ?string $buttonContent = null): mixed
```

**Parameters:**

| Parameter        | Type                               | Description |
|------------------|------------------------------------|-------------|
| `$element`       | **\Laminas\Form\ElementInterface** |             |
| `$buttonContent` | **?string**                        |             |

***

### renderSpinnerContent

```php
protected renderSpinnerContent(\Laminas\Form\ElementInterface $element, ?string $buttonContent = null): mixed
```

**Parameters:**

| Parameter        | Type                               | Description |
|------------------|------------------------------------|-------------|
| `$element`       | **\Laminas\Form\ElementInterface** |             |
| `$buttonContent` | **?string**                        |             |

***

### renderBadgeContent

```php
protected renderBadgeContent(\Laminas\Form\ElementInterface $element, ?string $buttonContent = null): mixed
```

**Parameters:**

| Parameter        | Type                               | Description |
|------------------|------------------------------------|-------------|
| `$element`       | **\Laminas\Form\ElementInterface** |             |
| `$buttonContent` | **?string**                        |             |

***

### renderButton

```php
protected renderButton(\Laminas\Form\ElementInterface $element, ?string $buttonContent = null): string
```

**Parameters:**

| Parameter        | Type                               | Description |
|------------------|------------------------------------|-------------|
| `$element`       | **\Laminas\Form\ElementInterface** |             |
| `$buttonContent` | **?string**                        |             |

***

### renderPopoverAndTooltip

```php
protected renderPopoverAndTooltip(\Laminas\Form\ElementInterface $element, ?string $buttonContent = null): string
```

**Parameters:**

| Parameter        | Type                               | Description |
|------------------|------------------------------------|-------------|
| `$element`       | **\Laminas\Form\ElementInterface** |             |
| `$buttonContent` | **?string**                        |             |

***

### getType

Determine button type to use

```php
protected getType(\Laminas\Form\ElementInterface $element): string
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
