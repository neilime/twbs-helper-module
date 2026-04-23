---
title: "ProgressBar"
---

Helper for rendering progress bar

***

* Full name: `\TwbsHelper\View\Helper\ProgressBar`
* Parent class: [`\TwbsHelper\View\Helper\AbstractHtmlElement`](/docs/phpdoc/classes/TwbsHelper/View/Helper/AbstractHtmlElement)

## Methods

### __invoke

Generates a 'progressbar' element

```php
public __invoke(mixed $min = 0, mixed $max = 0, mixed $current = 0, bool $escape = true): string
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$min`     | **mixed** |             |
| `$max`     | **mixed** |             |
| `$current` | **mixed** |             |
| `$escape`  | **bool**  |             |

***

### render

```php
public render(iterable $optionsAndAttributes, bool $escape): string
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$optionsAndAttributes` | **iterable** |             |
| `$escape`               | **bool**     |             |

***

### renderProgressBarContent

```php
public renderProgressBarContent(iterable $optionsAndAttributes, bool $escape): string
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$optionsAndAttributes` | **iterable** |             |
| `$escape`               | **bool**     |             |

***
