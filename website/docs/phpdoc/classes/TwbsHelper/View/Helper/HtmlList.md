---
title: "HtmlList"
---

Helper for numbered and unnumbered lists

***

* Full name: `\TwbsHelper\View\Helper\HtmlList`
* Parent class: [`\TwbsHelper\View\Helper\AbstractHtmlElement`](/docs/phpdoc/classes/TwbsHelper/View/Helper/AbstractHtmlElement)

## Properties

### allowedOptions

```php
protected static $allowedOptions
```

* This property is **static**.

***

## Methods

### __invoke

Generates a 'List' element. Manage indentation of Xhtml markup

```php
public __invoke(iterable $items, iterable $optionsAndAttributes = [], bool $escape = true): string
```

**Parameters:**

| Parameter               | Type         | Description                                                                                                                |
|-------------------------|--------------|----------------------------------------------------------------------------------------------------------------------------|
| `$items`                | **iterable** | Array with the elements of the list                                                                                        |
| `$optionsAndAttributes` | **iterable** | Attributes for the ol/ul tag.
If class attributes contains "list-inline", so the li will have the class "list-inline-item" |
| `$escape`               | **bool**     | Escape the items.                                                                                                          |

**Return Value:**

The list XHTML.

**Throws:**

- `InvalidArgumentException`

***

### getContainerClassesFromOptionsAndAttributes

```php
protected getContainerClassesFromOptionsAndAttributes(iterable $optionsAndAttributes): array
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$optionsAndAttributes` | **iterable** |             |

***

### renderContainer

```php
protected renderContainer(iterable $optionsAndAttributes, string $listContent, bool $escape): string
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$optionsAndAttributes` | **iterable** |             |
| `$listContent`          | **string**   |             |
| `$escape`               | **bool**     |             |

***

### renderListItem

```php
protected renderListItem(mixed $item, string $itemContent, iterable $optionsAndAttributes, bool $escape): string
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$item`                 | **mixed**    |             |
| `$itemContent`          | **string**   |             |
| `$optionsAndAttributes` | **iterable** |             |
| `$escape`               | **bool**     |             |

***

### renderNestedListItem

```php
protected renderNestedListItem(iterable $item, string $itemContent, iterable $optionsAndAttributes, bool $escape): string
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$item`                 | **iterable** |             |
| `$itemContent`          | **string**   |             |
| `$optionsAndAttributes` | **iterable** |             |
| `$escape`               | **bool**     |             |

***

### renderListItemContent

```php
protected renderListItemContent(iterable $item, string $itemContent, bool $escape): string
```

**Parameters:**

| Parameter      | Type         | Description |
|----------------|--------------|-------------|
| `$item`        | **iterable** |             |
| `$itemContent` | **string**   |             |
| `$escape`      | **bool**     |             |

***

### prepareItemSpec

```php
protected prepareItemSpec(mixed $item, iterable $optionsAndAttributes): iterable
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$item`                 | **mixed**    |             |
| `$optionsAndAttributes` | **iterable** |             |

***

### getListItemClassesFromOptionsAndAttributes

```php
protected getListItemClassesFromOptionsAndAttributes(iterable $optionsAndAttributes): array
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$optionsAndAttributes` | **iterable** |             |

***
