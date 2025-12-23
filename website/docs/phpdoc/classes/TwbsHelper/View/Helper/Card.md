---
title: "Card"
---

Helper for rendering cards

***

* Full name: `\TwbsHelper\View\Helper\Card`
* Parent class: [`\TwbsHelper\View\Helper\AbstractHtmlElement`](./AbstractHtmlElement)

## Constants

| Constant               | Visibility | Type | Value          |
|------------------------|------------|------|----------------|
| `CARD_ROW`             | public     |      | 'row'          |
| `CARD_HEADER`          | public     |      | 'header'       |
| `CARD_HEADER_NAV_TABS` | public     |      | 'nav'          |
| `CARD_FOOTER`          | public     |      | 'footer'       |
| `CARD_IMG`             | public     |      | 'image'        |
| `CARD_IMG_TOP`         | public     |      | 'image_top'    |
| `CARD_IMG_BOTTOM`      | public     |      | 'image_bottom' |
| `CARD_OVERLAY`         | public     |      | 'overlay'      |
| `CARD_LIST_GROUP`      | public     |      | 'listGroup'    |
| `CARD_BODY_TITLE`      | public     |      | 'title'        |
| `CARD_BODY_SUBTITLE`   | public     |      | 'subtitle'     |
| `CARD_BODY_TEXT`       | public     |      | 'text'         |
| `CARD_BODY_LINK`       | public     |      | 'link'         |
| `CARD_BODY_BLOCKQUOTE` | public     |      | 'blockquote'   |

## Properties

### allowedOptions

```php
protected static $allowedOptions
```

* This property is **static**.

***

### cardParts

```php
protected static $cardParts
```

* This property is **static**.

***

## Methods

### __invoke

Generates an 'alert' element

```php
public __invoke(string $content, iterable $optionsAndAttributes = [], bool $escape = true): string
```

**Parameters:**

| Parameter               | Type         | Description                                       |
|-------------------------|--------------|---------------------------------------------------|
| `$content`              | **string**   | The content of the alert                          |
| `$optionsAndAttributes` | **iterable** | Html attributes of the "&lt;div&gt;" element            |
| `$escape`               | **bool**     | True espace html content '$content'. Default True |

**Return Value:**

The card XHTML.

***

### renderCardContainer

```php
protected renderCardContainer(mixed $content, iterable $optionsAndAttributes, bool $escape): string
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$content`              | **mixed**    |             |
| `$optionsAndAttributes` | **iterable** |             |
| `$escape`               | **bool**     |             |

***

### renderCardContainerContent

```php
protected renderCardContainerContent(mixed $content, iterable $optionsAndAttributes, bool $escape): string
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$content`              | **mixed**    |             |
| `$optionsAndAttributes` | **iterable** |             |
| `$escape`               | **bool**     |             |

***

### renderCardRow

```php
protected renderCardRow(iterable $arguments, bool $escape): string
```

**Parameters:**

| Parameter    | Type         | Description |
|--------------|--------------|-------------|
| `$arguments` | **iterable** |             |
| `$escape`    | **bool**     |             |

***

### renderCardColumn

```php
protected renderCardColumn(mixed $content, iterable $attributes, bool $escape): string
```

**Parameters:**

| Parameter     | Type         | Description |
|---------------|--------------|-------------|
| `$content`    | **mixed**    |             |
| `$attributes` | **iterable** |             |
| `$escape`     | **bool**     |             |

***

### renderCardHeader

```php
protected renderCardHeader(iterable $arguments, bool $escape): string
```

**Parameters:**

| Parameter    | Type         | Description |
|--------------|--------------|-------------|
| `$arguments` | **iterable** |             |
| `$escape`    | **bool**     |             |

***

### renderCardHeaderNav

```php
protected renderCardHeaderNav(iterable $arguments, bool $escape): string
```

**Parameters:**

| Parameter    | Type         | Description |
|--------------|--------------|-------------|
| `$arguments` | **iterable** |             |
| `$escape`    | **bool**     |             |

***

### renderCardFooter

```php
protected renderCardFooter(iterable $arguments, bool $escape = true): string
```

**Parameters:**

| Parameter    | Type         | Description |
|--------------|--------------|-------------|
| `$arguments` | **iterable** |             |
| `$escape`    | **bool**     |             |

***

### renderCardImg

```php
protected renderCardImg(iterable $arguments, bool $escape): string
```

**Parameters:**

| Parameter    | Type         | Description |
|--------------|--------------|-------------|
| `$arguments` | **iterable** |             |
| `$escape`    | **bool**     |             |

***

### renderCardImgTop

```php
protected renderCardImgTop(iterable $arguments, bool $escape): string
```

**Parameters:**

| Parameter    | Type         | Description |
|--------------|--------------|-------------|
| `$arguments` | **iterable** |             |
| `$escape`    | **bool**     |             |

***

### renderCardImgBottom

```php
protected renderCardImgBottom(iterable $arguments, bool $escape): string
```

**Parameters:**

| Parameter    | Type         | Description |
|--------------|--------------|-------------|
| `$arguments` | **iterable** |             |
| `$escape`    | **bool**     |             |

***

### renderCardOverlay

```php
protected renderCardOverlay(iterable $arguments, bool $escape): string
```

**Parameters:**

| Parameter    | Type         | Description |
|--------------|--------------|-------------|
| `$arguments` | **iterable** |             |
| `$escape`    | **bool**     |             |

***

### renderImage

```php
protected renderImage(string $imageSrc, iterable $attributes, bool $escape): string
```

**Parameters:**

| Parameter     | Type         | Description |
|---------------|--------------|-------------|
| `$imageSrc`   | **string**   |             |
| `$attributes` | **iterable** |             |
| `$escape`     | **bool**     |             |

***

### renderCardListGroup

```php
protected renderCardListGroup(iterable $arguments, bool $escape): string
```

**Parameters:**

| Parameter    | Type         | Description |
|--------------|--------------|-------------|
| `$arguments` | **iterable** |             |
| `$escape`    | **bool**     |             |

***

### renderCardBody

```php
protected renderCardBody(mixed $content, iterable $attributes, bool $escape): string
```

**Parameters:**

| Parameter     | Type         | Description |
|---------------|--------------|-------------|
| `$content`    | **mixed**    |             |
| `$attributes` | **iterable** |             |
| `$escape`     | **bool**     |             |

***

### renderCardItem

```php
protected renderCardItem(mixed $type, mixed $typeContent, bool $escape): string
```

**Parameters:**

| Parameter      | Type      | Description |
|----------------|-----------|-------------|
| `$type`        | **mixed** |             |
| `$typeContent` | **mixed** |             |
| `$escape`      | **bool**  |             |

***
