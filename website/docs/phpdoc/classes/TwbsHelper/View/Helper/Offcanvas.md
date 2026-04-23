---
title: "Offcanvas"
---

Helper for rendering offcanvas

***

* Full name: `\TwbsHelper\View\Helper\Offcanvas`
* Parent class: [`\TwbsHelper\View\Helper\AbstractHtmlElement`](/docs/phpdoc/classes/TwbsHelper/View/Helper/AbstractHtmlElement)

## Constants

| Constant           | Visibility | Type | Value    |
|--------------------|------------|------|----------|
| `PLACEMENT_START`  | public     |      | 'start'  |
| `PLACEMENT_END`    | public     |      | 'end'    |
| `PLACEMENT_TOP`    | public     |      | 'top'    |
| `PLACEMENT_BOTTOM` | public     |      | 'bottom' |

## Properties

### allowedPlacements

```php
protected static $allowedPlacements
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

Generates an 'offcanvas' element

```php
public __invoke(string $content, iterable $optionsAndAttributes = [], bool $escape = true): string
```

**Parameters:**

| Parameter               | Type         | Description                                       |
|-------------------------|--------------|---------------------------------------------------|
| `$content`              | **string**   | The content of the offcanvas body                 |
| `$optionsAndAttributes` | **iterable** | Html attributes of the offcanvas "container"      |
| `$escape`               | **bool**     | True espace html content '$content'. Default True |

**Return Value:**

The offcanvas XHTML.

***

### renderHeader

```php
protected renderHeader(iterable $headerOptions, bool $escape): string
```

**Parameters:**

| Parameter        | Type         | Description |
|------------------|--------------|-------------|
| `$headerOptions` | **iterable** |             |
| `$escape`        | **bool**     |             |

***

### renderTriggers

```php
protected renderTriggers(iterable $triggers, ?string $id = null): string
```

**Parameters:**

| Parameter   | Type         | Description |
|-------------|--------------|-------------|
| `$triggers` | **iterable** |             |
| `$id`       | **?string**  |             |

***

### renderTrigger

```php
protected renderTrigger(iterable $trigger, ?string $id = null): string
```

**Parameters:**

| Parameter  | Type         | Description |
|------------|--------------|-------------|
| `$trigger` | **iterable** |             |
| `$id`      | **?string**  |             |

***

### renderBody

```php
protected renderBody(string $content, \TwbsHelper\View\HtmlAttributesSet $attributes, bool $escape): string
```

**Parameters:**

| Parameter     | Type                                   | Description |
|---------------|----------------------------------------|-------------|
| `$content`    | **string**                             |             |
| `$attributes` | **\TwbsHelper\View\HtmlAttributesSet** |             |
| `$escape`     | **bool**                               |             |

***

### renderContainer

```php
protected renderContainer(string $content, iterable $optionsAndAttributes, bool $escape): string
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$content`              | **string**   |             |
| `$optionsAndAttributes` | **iterable** |             |
| `$escape`               | **bool**     |             |

***
