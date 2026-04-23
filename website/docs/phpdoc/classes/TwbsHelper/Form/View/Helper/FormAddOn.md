---
title: "FormAddOn"
---

***

* Full name: `\TwbsHelper\Form\View\Helper\FormAddOn`
* Parent class: `AbstractHelper`

## Constants

| Constant           | Visibility | Type | Value     |
|--------------------|------------|------|-----------|
| `POSITION_APPEND`  | public     |      | 'append'  |
| `POSITION_PREPEND` | public     |      | 'prepend' |

## Properties

### formFactory

```php
protected \Laminas\Form\Factory|null $formFactory
```

***

## Methods

### __invoke

```php
public __invoke(\Laminas\Form\ElementInterface $element = null, string $content = ''): \TwbsHelper\Form\View\Helper\FormAddOn|string
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |
| `$content` | **string**                         |             |

***

### render

```php
public render(?\Laminas\Form\ElementInterface $element = null, string $content = ''): string
```

**Parameters:**

| Parameter  | Type                                | Description |
|------------|-------------------------------------|-------------|
| `$element` | **?\Laminas\Form\ElementInterface** |             |
| `$content` | **string**                          |             |

***

### renderAddOn

Render add-on markup

```php
protected renderAddOn(\Laminas\Form\ElementInterface|array|string $addOnOptions, \Laminas\Form\ElementInterface $element, string $addOnPosition): string
```

**Parameters:**

| Parameter        | Type                                              | Description |
|------------------|---------------------------------------------------|-------------|
| `$addOnOptions`  | **\Laminas\Form\ElementInterface\|array\|string** |             |
| `$element`       | **\Laminas\Form\ElementInterface**                |             |
| `$addOnPosition` | **string**                                        |             |

***

### renderAddOnContent

```php
protected renderAddOnContent(array $addOnOptions, \Laminas\Form\ElementInterface $element, string $addOnPosition): string
```

**Parameters:**

| Parameter        | Type                               | Description |
|------------------|------------------------------------|-------------|
| `$addOnOptions`  | **array**                          |             |
| `$element`       | **\Laminas\Form\ElementInterface** |             |
| `$addOnPosition` | **string**                         |             |

***

### renderText

```php
protected renderText(string $addOnText): string
```

**Parameters:**

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$addOnText` | **string** |             |

***

### renderLabel

```php
protected renderLabel(string $addonLabel, \TwbsHelper\View\HtmlAttributesSet $labelAttributes, \Laminas\Form\ElementInterface $element): string
```

**Parameters:**

| Parameter          | Type                                   | Description |
|--------------------|----------------------------------------|-------------|
| `$addonLabel`      | **string**                             |             |
| `$labelAttributes` | **\TwbsHelper\View\HtmlAttributesSet** |             |
| `$element`         | **\Laminas\Form\ElementInterface**     |             |

***

### renderElement

```php
protected renderElement(\Laminas\Form\ElementInterface $element, \TwbsHelper\View\HtmlAttributesSet $attributes, string $addOnPosition): string
```

**Parameters:**

| Parameter        | Type                                   | Description |
|------------------|----------------------------------------|-------------|
| `$element`       | **\Laminas\Form\ElementInterface**     |             |
| `$attributes`    | **\TwbsHelper\View\HtmlAttributesSet** |             |
| `$addOnPosition` | **string**                             |             |

***

### createElement

```php
protected createElement(array $element): \Laminas\Form\ElementInterface
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$element` | **array** |             |

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
