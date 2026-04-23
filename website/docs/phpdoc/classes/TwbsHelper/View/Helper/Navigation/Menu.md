---
title: "Menu"
---

Helper for rendering abbreviations

***

* Full name: `\TwbsHelper\View\Helper\Navigation\Menu`
* Parent class: `Menu`

## Properties

### ulClass

CSS class to use for the ul element.

```php
protected string $ulClass
```

***

### renderInvisible

Whether invisible items should be rendered by this helper

```php
protected bool $renderInvisible
```

***

## Methods

### renderMenu

```php
public renderMenu(mixed $container = null, array $options = []): mixed
```

**Parameters:**

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$container` | **mixed** |             |
| `$options`   | **array** |             |

***

### prepareContainer

```php
protected prepareContainer(\Laminas\Navigation\AbstractContainer|string|null& $container = null): mixed
```

**Parameters:**

| Parameter    | Type                                                    | Description |
|--------------|---------------------------------------------------------|-------------|
| `$container` | **\Laminas\Navigation\AbstractContainer\|string\|null** |             |

***

### renderMenuItems

```php
protected renderMenuItems(string $content, array $options): string
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$content` | **string** |             |
| `$options` | **array**  |             |

***

### renderMenuItemsNav

```php
protected renderMenuItemsNav(string $content, iterable $options): string
```

**Parameters:**

| Parameter  | Type         | Description |
|------------|--------------|-------------|
| `$content` | **string**   |             |
| `$options` | **iterable** |             |

***

### renderMenuItemsNavStyleAttribute

```php
protected renderMenuItemsNavStyleAttribute(string $navAttributesContent, iterable $options, bool $isRoot): string
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$navAttributesContent` | **string**   |             |
| `$options`              | **iterable** |             |
| `$isRoot`               | **bool**     |             |

***

### renderMenuItemsNavClassAttribute

```php
protected renderMenuItemsNavClassAttribute(string $navAttributesContent, iterable $options, bool $isRoot): string
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$navAttributesContent` | **string**   |             |
| `$options`              | **iterable** |             |
| `$isRoot`               | **bool**     |             |

***

### getMenuItemsNavClasses

```php
protected getMenuItemsNavClasses(iterable $options, bool $isRoot): iterable
```

**Parameters:**

| Parameter  | Type         | Description |
|------------|--------------|-------------|
| `$options` | **iterable** |             |
| `$isRoot`  | **bool**     |             |

***

### renderMenuItemsWithoutList

```php
protected renderMenuItemsWithoutList(string $content): string
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$content` | **string** |             |

***

### renderMenuItemsLink

```php
protected renderMenuItemsLink(string $content, array $options): string
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$content` | **string** |             |
| `$options` | **array**  |             |

***

### htmlify

Returns an HTML string containing an 'a' element for the given page if
the page's href is not empty, and a 'span' element if it is empty.

```php
public htmlify(\Laminas\Navigation\Page\AbstractPage $page, bool $escapeLabel = true, bool $addClassToListItem = false): string
```

Overrides 

- **See:** .

**Parameters:**

| Parameter             | Type                                      | Description                                           |
|-----------------------|-------------------------------------------|-------------------------------------------------------|
| `$page`               | **\Laminas\Navigation\Page\AbstractPage** | page to generate HTML for                             |
| `$escapeLabel`        | **bool**                                  | Whether or not to escape the label                    |
| `$addClassToListItem` | **bool**                                  | Whether or not to add the page class to the list item |

***

### htmlAttribs

Converts an associative array to a string of tag attributes.

```php
protected htmlAttribs(array $attributes): string
```

Overloads 

- **See:** .

**Parameters:**

| Parameter     | Type      | Description                                                                    |
|---------------|-----------|--------------------------------------------------------------------------------|
| `$attributes` | **array** | an array where each key-value pair is converted
to an attribute name and value |

***
