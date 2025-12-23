---
title: "CardGroup"
---

Helper for card group

***

* Full name: `\TwbsHelper\View\Helper\CardGroup`
* Parent class: [`\TwbsHelper\View\Helper\AbstractGroupWithHelper`](./AbstractGroupWithHelper)

## Properties

### groupClass

```php
protected static $groupClass
```

* This property is **static**.

***

### groupTag

```php
protected static $groupTag
```

* This property is **static**.

***

### helperName

```php
protected static string $helperName
```

* This property is **static**.

***

## Inherited methods

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

**Parameters:**

| Parameter     | Type         | Description |
|---------------|--------------|-------------|
| `$itemKey`    | **mixed**    |             |
| `$itemSpec`   | **mixed**    |             |
| `$attributes` | **iterable** |             |
| `$options`    | **iterable** |             |
| `$escape`     | **bool**     |             |

***

### getItemViewHelper

```php
protected getItemViewHelper(): \Laminas\View\Helper\HelperInterface
```

**Throws:**

if the view or plugin method is unavailable in the current context
- [`LogicException`](../../../LogicException)

***
