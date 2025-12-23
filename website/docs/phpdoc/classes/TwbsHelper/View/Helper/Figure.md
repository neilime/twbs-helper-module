---
title: "Figure"
---

Helper for rendering figures

***

* Full name: `\TwbsHelper\View\Helper\Figure`
* Parent class: [`\TwbsHelper\View\Helper\AbstractHtmlElement`](./AbstractHtmlElement)

## Methods

### __invoke

Generates a 'figure' element

```php
public __invoke(string $imageSrc, string $caption = '', array $attributes = [], array $imageOptionsAndAttributes = [], array $captionAttributes = [], bool $escape = true): string
```

**Parameters:**

| Parameter                    | Type       | Description                                                              |
|------------------------------|------------|--------------------------------------------------------------------------|
| `$imageSrc`                  | **string** | The path to the image of the figure                                      |
| `$caption`                   | **string** | The content of the caption of the figure. Default : empty                |
| `$attributes`                | **array**  | Html attributes of the "&lt;figure&gt;" element. Default : empty               |
| `$imageOptionsAndAttributes` | **array**  | \TwbsHelper\View\Helper\Image options and attributes. Default : empty    |
| `$captionAttributes`         | **array**  | Html attributes of the "&lt;figcaption&gt;" (caption) element. Default : empty |
| `$escape`                    | **bool**   | True espace html caption '$caption'. Default True                        |

**Return Value:**

The figure XHTML.

**Throws:**

- [`InvalidArgumentException`](../../../InvalidArgumentException)

***
