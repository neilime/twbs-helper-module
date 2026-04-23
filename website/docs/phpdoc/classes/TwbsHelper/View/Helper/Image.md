---
title: "Image"
---

Helper for rendering images

***

* Full name: `\TwbsHelper\View\Helper\Image`
* Parent class: [`\TwbsHelper\View\Helper\AbstractHtmlElement`](/docs/phpdoc/classes/TwbsHelper/View/Helper/AbstractHtmlElement)

## Properties

### allowedOptions

```php
protected static $allowedOptions
```

* This property is **static**.

***

### imagesClasses

```php
protected $imagesClasses
```

***

## Methods

### __invoke

Generates a 'image' element

```php
public __invoke(string $imageSrc, iterable $optionsAndAttributes = [], bool $escape = true): string
```

**Parameters:**

| Parameter               | Type         | Description                                                                                                                                                                                                                                                                   |
|-------------------------|--------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `$imageSrc`             | **string**   | The path to the image                                                                                                                                                                                                                                                         |
| `$optionsAndAttributes` | **iterable** | Image options and Html attributes. Default : empty. Allowed options:
- boolean fluid: responsive image
- boolean thumbnail: thumbnail image
- boolean rounded: rounded image
- boolean figure: figure image
- [srcset =&gt; type] sources: list of sources for &lt;picture element&gt; |
| `$escape`               | **bool**     | True espace html content '$content'. Default True                                                                                                                                                                                                                             |

**Return Value:**

The image XHTML.

**Throws:**

- `InvalidArgumentException`

***

### renderSources

```php
public renderSources(array $sources, bool $escape = true): string
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$sources` | **array** |             |
| `$escape`  | **bool**  |             |

***
