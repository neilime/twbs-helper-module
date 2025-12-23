---
title: "DescriptionList"
---

Helper for ordered and unordered lists

***

* Full name: `\TwbsHelper\View\Helper\DescriptionList`
* Parent class: [`\TwbsHelper\View\Helper\AbstractHtmlElement`](./AbstractHtmlElement)

## Methods

### __invoke

Generates a 'Description List' element. Manage indentation of Xhtml markup

```php
public __invoke(array $items = null, array $optionsAndAttributes = [], bool $escape = true): \TwbsHelper\View\Helper\DescriptionList|string
```

**Parameters:**

| Parameter               | Type      | Description                                                                                                                |
|-------------------------|-----------|----------------------------------------------------------------------------------------------------------------------------|
| `$items`                | **array** | Array with the elements of the list                                                                                        |
| `$optionsAndAttributes` | **array** | Attributes for the ol/ul tag.
If class attributes contains "list-inline", so the li will have the class "list-inline-item" |
| `$escape`               | **bool**  | Escape the items.                                                                                                          |

**Throws:**

- [`InvalidArgumentException`](../../../InvalidArgumentException)

***

### render

Generates a 'Description List' element. Manage indentation of Xhtml markup

```php
public render(array $items, array $optionsAndAttributes = [], bool $escape = true): string
```

**Parameters:**

| Parameter               | Type      | Description                                                                                                                |
|-------------------------|-----------|----------------------------------------------------------------------------------------------------------------------------|
| `$items`                | **array** | Array with the elements of the list                                                                                        |
| `$optionsAndAttributes` | **array** | Attributes for the ol/ul tag.
If class attributes contains "list-inline", so the li will have the class "list-inline-item" |
| `$escape`               | **bool**  | Escape the items.                                                                                                          |

**Return Value:**

The list XHTML.

**Throws:**

- [`InvalidArgumentException`](../../../InvalidArgumentException)

***

### renderContainer

```php
protected renderContainer(string $tag, iterable $optionsAndAttributes, string $listContent, bool $escape = true): mixed
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$tag`                  | **string**   |             |
| `$optionsAndAttributes` | **iterable** |             |
| `$listContent`          | **string**   |             |
| `$escape`               | **bool**     |             |

***

### renderListItem

```php
protected renderListItem(mixed $itemKey, mixed $itemValue, iterable $optionsAndAttributes = [], bool $escape = true): string
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$itemKey`              | **mixed**    |             |
| `$itemValue`            | **mixed**    |             |
| `$optionsAndAttributes` | **iterable** |             |
| `$escape`               | **bool**     |             |

***

### renderListItemTerm

```php
protected renderListItemTerm(iterable $termOptionsAndAttributes, iterable $optionsAndAttributes = [], bool $escape = true): string
```

**Parameters:**

| Parameter                   | Type         | Description |
|-----------------------------|--------------|-------------|
| `$termOptionsAndAttributes` | **iterable** |             |
| `$optionsAndAttributes`     | **iterable** |             |
| `$escape`                   | **bool**     |             |

***

### renderListItemDetail

```php
protected renderListItemDetail(iterable $detailOptionsAndAttributes, iterable $optionsAndAttributes = [], bool $escape = true): string
```

**Parameters:**

| Parameter                     | Type         | Description |
|-------------------------------|--------------|-------------|
| `$detailOptionsAndAttributes` | **iterable** |             |
| `$optionsAndAttributes`       | **iterable** |             |
| `$escape`                     | **bool**     |             |

***
