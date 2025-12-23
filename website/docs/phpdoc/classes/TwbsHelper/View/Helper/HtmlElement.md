---
title: "HtmlElement"
---

***

* Full name: `\TwbsHelper\View\Helper\HtmlElement`
* Parent class: [`AbstractHtmlElement`](../../../Laminas/View/Helper/AbstractHtmlElement)

## Properties

### htmlElementFormat

```php
protected $htmlElementFormat
```

***

### indentation

```php
protected $indentation
```

***

### forcedIndentationTags

```php
protected $forcedIndentationTags
```

***

## Methods

### __invoke

Generates an 'html' element

```php
public __invoke(string $tag, iterable $attributes = [], string $content = null, bool $escape = true): string
```

**Parameters:**

| Parameter     | Type         | Description                                       |
|---------------|--------------|---------------------------------------------------|
| `$tag`        | **string**   | The tag of the element                            |
| `$attributes` | **iterable** | Html attributes of the element                    |
| `$content`    | **string**   | The content of the alert                          |
| `$escape`     | **bool**     | True espace html content '$content'. Default True |

**Return Value:**

The element XHTML.

***

### addProperIndentation

```php
public addProperIndentation(string $content, bool $forceIndentation = false, ?int $indentation = null): string
```

**Parameters:**

| Parameter           | Type       | Description |
|---------------------|------------|-------------|
| `$content`          | **string** |             |
| `$forceIndentation` | **bool**   |             |
| `$indentation`      | **?int**   |             |

***

### removeIndentation

```php
protected removeIndentation(string $content): string
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$content` | **string** |             |

***

### isHTML

```php
public isHTML(string $string): bool
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$string` | **string** |             |

***

### htmlAttribs

Converts an associative array to a string of tag attributes.

```php
protected htmlAttribs(array $attribs): string
```

**Parameters:**

| Parameter  | Type      | Description                                                                       |
|------------|-----------|-----------------------------------------------------------------------------------|
| `$attribs` | **array** | From this array, each key-value pair is
converted to an attribute name and value. |

**Return Value:**

The XHTML for the attributes.

***
