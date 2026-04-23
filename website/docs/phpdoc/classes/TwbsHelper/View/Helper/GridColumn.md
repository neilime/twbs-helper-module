---
title: "GridColumn"
---

Generates a grid 'column' element

***

* Full name: `\TwbsHelper\View\Helper\GridColumn`
* Parent class: [`\TwbsHelper\View\Helper\AbstractHtmlElement`](/docs/phpdoc/classes/TwbsHelper/View/Helper/AbstractHtmlElement)

## Constants

| Constant      | Visibility | Type | Value   |
|---------------|------------|------|---------|
| `ORDER_FIRST` | public     |      | 'first' |
| `ORDER_LAST`  | public     |      | 'last'  |

## Properties

### allowedOrder

```php
protected static $allowedOrder
```

* This property is **static**.

***

### allowedOptions

```php
protected static $allowedOptions
```

* This property is **static**.

***

## Methods

### __invoke

```php
public __invoke(?string $content = null, iterable $optionsAndAttributes = [], bool $escape = true): string
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$content`              | **?string**  |             |
| `$optionsAndAttributes` | **iterable** |             |
| `$escape`               | **bool**     |             |

***

### prepareAttributes

```php
protected prepareAttributes(iterable $optionsAndAttributes): iterable
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$optionsAndAttributes` | **iterable** |             |

***
