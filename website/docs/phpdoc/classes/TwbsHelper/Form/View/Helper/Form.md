---
title: "Form"
---

***

* Full name: `\TwbsHelper\Form\View\Helper\Form`
* Parent class: `Form`

## Constants

| Constant            | Visibility | Type   | Value        |
|---------------------|------------|--------|--------------|
| `LAYOUT_HORIZONTAL` | public     | string | 'horizontal' |
| `LAYOUT_INLINE`     | public     | string | 'inline'     |

## Properties

### options

Hold configurable options

```php
protected $options
```

***

### formRowsHelper

```php
protected null|\TwbsHelper\Form\View\Helper\FormRows $formRowsHelper
```

***

### htmlElementHelper

```php
protected null|\TwbsHelper\View\Helper\HtmlElement $htmlElementHelper
```

***

### htmlClassHelper

```php
protected null|\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass $htmlClassHelper
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

### __invoke

```php
public __invoke(\Laminas\Form\FormInterface $form = null): \TwbsHelper\Form\View\Helper\Form|string
```

**Parameters:**

| Parameter | Type                            | Description |
|-----------|---------------------------------|-------------|
| `$form`   | **\Laminas\Form\FormInterface** |             |

***

### renderSpec

Renders a form from an array specification

```php
public renderSpec(array $formSpec): string
```

**Parameters:**

| Parameter   | Type      | Description |
|-------------|-----------|-------------|
| `$formSpec` | **array** |             |

**See Also:**

* \TwbsHelper\Form\View\Helper\Form::render()

***

### getFormFromSpec

```php
protected getFormFromSpec(array $formSpec): \Laminas\Form\FormInterface
```

**Parameters:**

| Parameter   | Type      | Description |
|-------------|-----------|-------------|
| `$formSpec` | **array** |             |

***

### render

Render a form from the provided $form,

```php
public render(\Laminas\Form\FormInterface $form): string
```

**Parameters:**

| Parameter | Type                            | Description |
|-----------|---------------------------------|-------------|
| `$form`   | **\Laminas\Form\FormInterface** |             |

***

### prepareForm

```php
protected prepareForm(\Laminas\Form\FormInterface $form): mixed
```

**Parameters:**

| Parameter | Type                            | Description |
|-----------|---------------------------------|-------------|
| `$form`   | **\Laminas\Form\FormInterface** |             |

***

### prepareFormClasses

```php
protected prepareFormClasses(\Laminas\Form\FormInterface $form): mixed
```

**Parameters:**

| Parameter | Type                            | Description |
|-----------|---------------------------------|-------------|
| `$form`   | **\Laminas\Form\FormInterface** |             |

***

### inheritOptionsToElements

```php
protected inheritOptionsToElements(\Laminas\Form\FieldsetInterface $form): mixed
```

**Parameters:**

| Parameter | Type                                | Description |
|-----------|-------------------------------------|-------------|
| `$form`   | **\Laminas\Form\FieldsetInterface** |             |

***

### getFormRowsHelper

Retrieve the formRow helper

```php
protected getFormRowsHelper(): \TwbsHelper\Form\View\Helper\FormRows
```

***

### getHtmlElementHelper

Retrieve the htmlElement helper

```php
protected getHtmlElementHelper(): mixed
```

***

### getHtmlClassHelper

Retrieve the htmlclass helper

```php
protected getHtmlClassHelper(): mixed
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
