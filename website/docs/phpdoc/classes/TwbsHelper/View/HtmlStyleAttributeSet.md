---
title: "HtmlStyleAttributeSet"
---

Class for storing and processing HTML style attribute.

***

* Full name: `\TwbsHelper\View\HtmlStyleAttributeSet`
* Parent class: [`ArrayObject`](../../ArrayObject)
* This class implements:
  `Stringable`

## Constants

| Constant         | Visibility | Type | Value   |
|------------------|------------|------|---------|
| `ATTRIBUTE_NAME` | public     |      | 'style' |

## Methods

### __construct

Constructor.

```php
public __construct(string|iterable<string,string> $styles = []): mixed
```

**Parameters:**

| Parameter | Type                                | Description                                                                                                                                                                |
|-----------|-------------------------------------|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `$styles` | **string\|iterable&lt;string,string&gt;** | 
If a string is provided, it should be a CSS style string (e.g., "color: red; font-size: 12px;").
If an iterable is provided, it should contain key-value pairs of styles. |

***

### merge

Merge styles with existing styles.

```php
public merge(iterable<string,string> $styles): self
```

**Parameters:**

| Parameter | Type                        | Description |
|-----------|-----------------------------|-------------|
| `$styles` | **iterable&lt;string,string&gt;** |             |

***

### __toString

Return a string of tag attributes.

```php
public __toString(): string
```

***

### cleanAttribute

```php
public cleanAttribute(): self
```

***
