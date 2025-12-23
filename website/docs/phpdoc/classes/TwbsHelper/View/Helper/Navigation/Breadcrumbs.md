---
title: "Breadcrumbs"
---

Helper for rendering breadcrumbs

***

* Full name: `\TwbsHelper\View\Helper\Navigation\Breadcrumbs`
* Parent class: [`Breadcrumbs`](../../../../Laminas/View/Helper/Navigation/Breadcrumbs)

## Methods

### renderStraight

Renders breadcrumbs by chaining 'a' elements with the separator
registered in the helper.

```php
public renderStraight(\Laminas\Navigation\AbstractContainer $container = null): string
```

**Parameters:**

| Parameter    | Type                                      | Description                                                                                  |
|--------------|-------------------------------------------|----------------------------------------------------------------------------------------------|
| `$container` | **\Laminas\Navigation\AbstractContainer** | [optional] container to render.
Default is to render the container registered in the helper. |

***

### htmlify

Returns an HTML string containing an 'a' element for the given page

```php
public htmlify(\Laminas\Navigation\Page\AbstractPage $page): string
```

**Parameters:**

| Parameter | Type                                      | Description |
|-----------|-------------------------------------------|-------------|
| `$page`   | **\Laminas\Navigation\Page\AbstractPage** |             |

**Return Value:**

HTML string

***

### renderNavContainer

```php
protected renderNavContainer(string $content): string
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$content` | **string** |             |

***

### renderBreadcrumbItem

```php
protected renderBreadcrumbItem(string $content, bool $active = false): mixed
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$content` | **string** |             |
| `$active`  | **bool**   |             |

***
