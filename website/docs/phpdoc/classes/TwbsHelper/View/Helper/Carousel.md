---
title: "Carousel"
---

Helper for rendering carousels

***

* Full name: `\TwbsHelper\View\Helper\Carousel`
* Parent class: [`\TwbsHelper\View\Helper\AbstractHtmlElement`](./AbstractHtmlElement)

## Constants

| Constant           | Visibility | Type | Value  |
|--------------------|------------|------|--------|
| `CONTROL_PREVIOUS` | public     |      | 'prev' |
| `CONTROL_NEXT`     | public     |      | 'next' |

## Properties

### allowedOptions

```php
protected static $allowedOptions
```

* This property is **static**.

***

### allowedSlideOptions

```php
protected static $allowedSlideOptions
```

* This property is **static**.

***

## Methods

### __invoke

Generates a 'carousel' element

```php
public __invoke(array $slides, array $optionsAndAttributes = [], bool $escape = true): string
```

**Parameters:**

| Parameter               | Type      | Description                            |
|-------------------------|-----------|----------------------------------------|
| `$slides`               | **array** | The slides of the carousel             |
| `$optionsAndAttributes` | **array** | Html attributes of the "&lt;div&gt;" element |
| `$escape`               | **bool**  | True espace html content. Default True |

**Return Value:**

The carousel XHTML.

***

### parseSlides

```php
protected parseSlides(iterable $slides): mixed
```

**Parameters:**

| Parameter | Type         | Description |
|-----------|--------------|-------------|
| `$slides` | **iterable** |             |

***

### renderSlides

```php
protected renderSlides(array $slides, bool $escape = true): mixed
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$slides` | **array** |             |
| `$escape` | **bool**  |             |

***

### renderSlide

```php
protected renderSlide(iterable $slide, bool $escape = true): mixed
```

**Parameters:**

| Parameter | Type         | Description |
|-----------|--------------|-------------|
| `$slide`  | **iterable** |             |
| `$escape` | **bool**     |             |

***

### renderSlideCaption

```php
protected renderSlideCaption(mixed $captionContent, bool $escape = true): mixed
```

**Parameters:**

| Parameter         | Type      | Description |
|-------------------|-----------|-------------|
| `$captionContent` | **mixed** |             |
| `$escape`         | **bool**  |             |

***

### renderSlideContainer

```php
protected renderSlideContainer(iterable $slide, string $slideContent, bool $escape): string
```

**Parameters:**

| Parameter       | Type         | Description |
|-----------------|--------------|-------------|
| `$slide`        | **iterable** |             |
| `$slideContent` | **string**   |             |
| `$escape`       | **bool**     |             |

***

### renderIndicators

```php
protected renderIndicators(string $id, array $slides, bool $escape = true): string
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$id`     | **string** |             |
| `$slides` | **array**  |             |
| `$escape` | **bool**   |             |

***

### renderIndicator

```php
protected renderIndicator(string $id, int $iterator, mixed $slide, bool $escape = true): string
```

**Parameters:**

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$id`       | **string** |             |
| `$iterator` | **int**    |             |
| `$slide`    | **mixed**  |             |
| `$escape`   | **bool**   |             |

***

### renderControls

```php
protected renderControls(string $id, mixed $controls, bool $escape = true): string
```

**Parameters:**

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$id`       | **string** |             |
| `$controls` | **mixed**  |             |
| `$escape`   | **bool**   |             |

***

### renderControl

```php
protected renderControl(string $id, string $control, string $label, bool $escape = true): string
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$id`      | **string** |             |
| `$control` | **string** |             |
| `$label`   | **string** |             |
| `$escape`  | **bool**   |             |

***
