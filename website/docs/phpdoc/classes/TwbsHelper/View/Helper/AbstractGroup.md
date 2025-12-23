---
title: "AbstractGroup"
---

Abstract helper for group rendering

***

* Full name: `\TwbsHelper\View\Helper\AbstractGroup`
* Parent class: [`\TwbsHelper\View\Helper\AbstractHtmlElement`](./AbstractHtmlElement)
* This class is an **Abstract class**

## Properties

### groupClass

```php
protected static string $groupClass
```

* This property is **static**.

***

### groupTag

```php
protected static string $groupTag
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

Render a group

```php
public __invoke(iterable $items, iterable $optionsAndAttributes = [], bool $escape = true): string
```

**Parameters:**

| Parameter               | Type         | Description                          |
|-------------------------|--------------|--------------------------------------|
| `$items`                | **iterable** | Array with the elements of the group |
| `$optionsAndAttributes` | **iterable** | Attributes for the group tag.        |
| `$escape`               | **bool**     | Escape the items.                    |

**Return Value:**

The group XHTML.

***

### renderGroupContainer

```php
protected renderGroupContainer(string $content, iterable $optionsAndAttributes, bool $escape): string
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$content`              | **string**   |             |
| `$optionsAndAttributes` | **iterable** |             |
| `$escape`               | **bool**     |             |

***

### prepareAttributes

```php
protected prepareAttributes(iterable $optionsAndAttributes): \TwbsHelper\View\HtmlAttributesSet
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$optionsAndAttributes` | **iterable** |             |

***

### renderGroupItems

```php
protected renderGroupItems(iterable $items, iterable $optionsAndAttributes, bool $escape = true): string
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$items`                | **iterable** |             |
| `$optionsAndAttributes` | **iterable** |             |
| `$escape`               | **bool**     |             |

***

### renderGroupItem

```php
protected renderGroupItem(mixed $itemKey, mixed $itemSpec, iterable $attributes, iterable $options, bool $escape): string
```

* This method is **abstract**.
**Parameters:**

| Parameter     | Type         | Description |
|---------------|--------------|-------------|
| `$itemKey`    | **mixed**    |             |
| `$itemSpec`   | **mixed**    |             |
| `$attributes` | **iterable** |             |
| `$options`    | **iterable** |             |
| `$escape`     | **bool**     |             |

***
