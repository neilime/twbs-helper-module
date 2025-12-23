---
title: "PaginationControl"
---

Helper for rendering pagination

***

* Full name: `\TwbsHelper\View\Helper\PaginationControl`
* Parent class: [`PaginationControl`](../../../Laminas/View/Helper/PaginationControl)

## Constants

| Constant         | Visibility | Type | Value      |
|------------------|------------|------|------------|
| `SWAP_OUT_STATE` | public     |      | 'swap_out' |

## Properties

### defaultViewPartial

Default view partial

```php
protected static string|array $defaultViewPartial
```

* This property is **static**.

***

## Methods

### renderPageItem

```php
public renderPageItem(mixed $route, int $page, ?int $current = null, mixed $activeStates = null): string
```

**Parameters:**

| Parameter       | Type      | Description |
|-----------------|-----------|-------------|
| `$route`        | **mixed** |             |
| `$page`         | **int**   |             |
| `$current`      | **?int**  |             |
| `$activeStates` | **mixed** |             |

***

### renderNavigationItem

```php
public renderNavigationItem(mixed $route, mixed $link, ?int $linkPage = null, mixed $disabledStates = false): string
```

**Parameters:**

| Parameter         | Type      | Description |
|-------------------|-----------|-------------|
| `$route`          | **mixed** |             |
| `$link`           | **mixed** |             |
| `$linkPage`       | **?int**  |             |
| `$disabledStates` | **mixed** |             |

***

### renderLink

```php
protected renderLink(string $content, iterable $attributes, bool $swapout): mixed
```

**Parameters:**

| Parameter     | Type         | Description |
|---------------|--------------|-------------|
| `$content`    | **string**   |             |
| `$attributes` | **iterable** |             |
| `$swapout`    | **bool**     |             |

***

### translate

```php
protected translate(string $content): string
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$content` | **string** |             |

***
