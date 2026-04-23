---
title: "Modal"
---

Helper for rendering modal objects

***

* Full name: `\TwbsHelper\View\Helper\Modal`
* Parent class: [`\TwbsHelper\View\Helper\AbstractHtmlElement`](/docs/phpdoc/classes/TwbsHelper/View/Helper/AbstractHtmlElement)

## Constants

| Constant         | Visibility | Type | Value      |
|------------------|------------|------|------------|
| `MODAL_TITLE`    | public     |      | 'title'    |
| `MODAL_SUBTITLE` | public     |      | 'subtitle' |
| `MODAL_TEXT`     | public     |      | 'text'     |
| `MODAL_DIVIDER`  | public     |      | '---'      |
| `MODAL_GRID`     | public     |      | 'grid'     |
| `MODAL_FORM`     | public     |      | 'form'     |
| `MODAL_BUTTON`   | public     |      | 'button'   |
| `MODAL_FOOTER`   | public     |      | 'footer'   |

## Properties

### allowedOptions

```php
protected static $allowedOptions
```

* This property is **static**.

***

## Methods

### __invoke

Generates a 'modal' element

```php
public __invoke(string|array $content, array $optionsAndAttributes = [], bool $escape = true): string
```

**Parameters:**

| Parameter               | Type              | Description                                       |
|-------------------------|-------------------|---------------------------------------------------|
| `$content`              | **string\|array** | The content of the alert                          |
| `$optionsAndAttributes` | **array**         | Options & Html attributes                         |
| `$escape`               | **bool**          | True espace html content '$content'. Default True |

**Return Value:**

The jumbotron XHTML.

***

### preparePartsFromContent

```php
protected preparePartsFromContent(mixed $content): iterable
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$content` | **mixed** |             |

***

### preparePartFromContent

```php
protected preparePartFromContent(string $type, mixed $content): iterable
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$type`    | **string** |             |
| `$content` | **mixed**  |             |

***

### prepareModalAttributes

```php
protected prepareModalAttributes(iterable $parts, iterable $optionsAndAttributes): iterable
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$parts`                | **iterable** |             |
| `$optionsAndAttributes` | **iterable** |             |

***

### getTitleId

```php
protected getTitleId(iterable $parts): ?string
```

**Parameters:**

| Parameter | Type         | Description |
|-----------|--------------|-------------|
| `$parts`  | **iterable** |             |

***

### renderModalDialog

```php
protected renderModalDialog(iterable $content, iterable $optionsAndAttributes, bool $escape): string
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$content`              | **iterable** |             |
| `$optionsAndAttributes` | **iterable** |             |
| `$escape`               | **bool**     |             |

***

### renderParts

```php
protected renderParts(iterable $parts, iterable $optionsAndAttributes, bool $escape): string
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$parts`                | **iterable** |             |
| `$optionsAndAttributes` | **iterable** |             |
| `$escape`               | **bool**     |             |

***

### renderHeaderPart

```php
protected renderHeaderPart(string $headerPart, iterable $optionsAndAttributes, bool $escape): string
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$headerPart`           | **string**   |             |
| `$optionsAndAttributes` | **iterable** |             |
| `$escape`               | **bool**     |             |

***

### renderBodyPart

```php
protected renderBodyPart(string $bodyPart, iterable $optionsAndAttributes, bool $escape): string
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$bodyPart`             | **string**   |             |
| `$optionsAndAttributes` | **iterable** |             |
| `$escape`               | **bool**     |             |

***

### renderFooterPart

```php
protected renderFooterPart(string $footerPart, bool $escape): string
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$footerPart` | **string** |             |
| `$escape`     | **bool**   |             |

***

### renderPart

```php
protected renderPart(iterable $part = [], bool $escape = true): string
```

**Parameters:**

| Parameter | Type         | Description |
|-----------|--------------|-------------|
| `$part`   | **iterable** |             |
| `$escape` | **bool**     |             |

***

### renderPartGrid

```php
protected renderPartGrid(iterable $part, bool $escape = true): string
```

**Parameters:**

| Parameter | Type         | Description |
|-----------|--------------|-------------|
| `$part`   | **iterable** |             |
| `$escape` | **bool**     |             |

***

### renderPartForm

```php
protected renderPartForm(iterable $part): string
```

**Parameters:**

| Parameter | Type         | Description |
|-----------|--------------|-------------|
| `$part`   | **iterable** |             |

***

### renderPartList

```php
protected renderPartList(?string $type = null, array $part = [], bool $escape = true): string
```

**Parameters:**

| Parameter | Type        | Description |
|-----------|-------------|-------------|
| `$type`   | **?string** |             |
| `$part`   | **array**   |             |
| `$escape` | **bool**    |             |

***
