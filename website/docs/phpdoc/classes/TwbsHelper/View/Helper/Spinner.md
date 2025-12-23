---
title: "Spinner"
---

Helper for rendering spinner

***

* Full name: `\TwbsHelper\View\Helper\Spinner`
* Parent class: [`\TwbsHelper\View\Helper\AbstractHtmlElement`](./AbstractHtmlElement)

## Constants

| Constant                | Visibility | Type | Value         |
|-------------------------|------------|------|---------------|
| `PLACEMENT_CENTER`      | public     |      | 'center'      |
| `PLACEMENT_END`         | public     |      | 'end'         |
| `PLACEMENT_TEXT_CENTER` | public     |      | 'text-center' |

## Methods

### __invoke

Generates a 'spinner' element

```php
public __invoke(mixed $label = null): string
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$label`  | **mixed** |             |

***

### render

```php
public render(iterable $options): string
```

**Parameters:**

| Parameter  | Type         | Description |
|------------|--------------|-------------|
| `$options` | **iterable** |             |

***

### renderSpinnerLabel

```php
protected renderSpinnerLabel(iterable $options): string
```

**Parameters:**

| Parameter  | Type         | Description |
|------------|--------------|-------------|
| `$options` | **iterable** |             |

***

### renderSpinnerContainer

```php
protected renderSpinnerContainer(string $label, iterable $options): string
```

**Parameters:**

| Parameter  | Type         | Description |
|------------|--------------|-------------|
| `$label`   | **string**   |             |
| `$options` | **iterable** |             |

***

### renderSpinnerWithPlacement

```php
protected renderSpinnerWithPlacement(string $label, string $container, iterable $options): string
```

**Parameters:**

| Parameter    | Type         | Description |
|--------------|--------------|-------------|
| `$label`     | **string**   |             |
| `$container` | **string**   |             |
| `$options`   | **iterable** |             |

***
