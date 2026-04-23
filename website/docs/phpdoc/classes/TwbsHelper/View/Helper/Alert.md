---
title: "Alert"
---

Helper for rendering alerts

***

* Full name: `\TwbsHelper\View\Helper\Alert`
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

Generates an 'alert' element

```php
public __invoke(string $content, string|array $optionsAndAttributes = null, bool $escape = true): string
```

**Parameters:**

| Parameter               | Type              | Description                                       |
|-------------------------|-------------------|---------------------------------------------------|
| `$content`              | **string**        | The content of the alert                          |
| `$optionsAndAttributes` | **string\|array** | Html attributes of the "&lt;div&gt;" element            |
| `$escape`               | **bool**          | True espace html content '$content'. Default True |

**Return Value:**

The alert XHTML.

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

### renderHeading

```php
protected renderHeading(string $heading, bool $escape): string
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$heading` | **string** |             |
| `$escape`  | **bool**   |             |

***

### renderDismissible

```php
protected renderDismissible(mixed $close): string
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$close`  | **mixed** |             |

***
