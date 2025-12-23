---
title: "Badge"
---

Helper for rendering badges

***

* Full name: `\TwbsHelper\View\Helper\Badge`
* Parent class: [`\TwbsHelper\View\Helper\AbstractHtmlElement`](./AbstractHtmlElement)

## Constants

| Constant      | Visibility | Type   | Value    |
|---------------|------------|--------|----------|
| `TYPE_SIMPLE` | public     | string | 'simple' |
| `TYPE_PILL`   | public     | string | 'pill'   |

## Properties

### allowedOptions

```php
protected static $allowedOptions
```

* This property is **static**.

***

## Methods

### __invoke

Generates a 'badge' element

```php
public __invoke(string $content, string|array $optionsAndAttributes = [], bool $escape = true): string
```

**Parameters:**

| Parameter               | Type              | Description                                         |
|-------------------------|-------------------|-----------------------------------------------------|
| `$content`              | **string**        | The content of the badge                            |
| `$optionsAndAttributes` | **string\|array** | options and Html attributes of the "&lt;span&gt;" element |
| `$escape`               | **bool**          | True espace html content '$content'. Default True   |

**Return Value:**

The badge XHTML.

**Throws:**

- [`InvalidArgumentException`](../../../InvalidArgumentException)

***

### prepareAttributes

```php
protected prepareAttributes(iterable $optionsAndAttributes, string $content): \TwbsHelper\View\HtmlAttributesSet
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$optionsAndAttributes` | **iterable** |             |
| `$content`              | **string**   |             |

***

### prepareAttributesForVariant

```php
protected prepareAttributesForVariant(\TwbsHelper\View\HtmlAttributesSet $optionsAndAttributes): mixed
```

**Parameters:**

| Parameter               | Type                                   | Description |
|-------------------------|----------------------------------------|-------------|
| `$optionsAndAttributes` | **\TwbsHelper\View\HtmlAttributesSet** |             |

***

### prepareAttributesForText

```php
protected prepareAttributesForText(\TwbsHelper\View\HtmlAttributesSet $optionsAndAttributes): mixed
```

**Parameters:**

| Parameter               | Type                                   | Description |
|-------------------------|----------------------------------------|-------------|
| `$optionsAndAttributes` | **\TwbsHelper\View\HtmlAttributesSet** |             |

***

### prepareAttributesForType

```php
protected prepareAttributesForType(\TwbsHelper\View\HtmlAttributesSet $optionsAndAttributes): mixed
```

**Parameters:**

| Parameter               | Type                                   | Description |
|-------------------------|----------------------------------------|-------------|
| `$optionsAndAttributes` | **\TwbsHelper\View\HtmlAttributesSet** |             |

***

### prepareAttributesForPositioned

```php
protected prepareAttributesForPositioned(\TwbsHelper\View\HtmlAttributesSet $optionsAndAttributes, string $content): mixed
```

**Parameters:**

| Parameter               | Type                                   | Description |
|-------------------------|----------------------------------------|-------------|
| `$optionsAndAttributes` | **\TwbsHelper\View\HtmlAttributesSet** |             |
| `$content`              | **string**                             |             |

***

### renderHiddenContent

```php
protected renderHiddenContent(string $hiddenContent, bool $escape): string
```

**Parameters:**

| Parameter        | Type       | Description |
|------------------|------------|-------------|
| `$hiddenContent` | **string** |             |
| `$escape`        | **bool**   |             |

***
