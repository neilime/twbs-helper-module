---
title: "Container"
---

Helper for rendering containers

***

* Full name: `\TwbsHelper\View\Helper\Container`
* Parent class: [`\TwbsHelper\View\Helper\AbstractHtmlElement`](./AbstractHtmlElement)

## Methods

### __invoke

Generates a 'container' element

```php
public __invoke(string $content, bool|string $container = true, iterable $attributes = [], bool $escape = true): string
```

**Parameters:**

| Parameter     | Type             | Description                                       |
|---------------|------------------|---------------------------------------------------|
| `$content`    | **string**       | The content of the abbreviation                   |
| `$container`  | **bool\|string** | The type of container                             |
| `$attributes` | **iterable**     | Html attributes of the "&lt;abbr&gt;" element           |
| `$escape`     | **bool**         | True espace html content '$content'. Default True |

**Return Value:**

The container XHTML.

***
