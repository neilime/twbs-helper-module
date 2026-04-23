---
title: "Lead"
---

Helper for rendering leads (Make a paragraph stand out)

***

* Full name: `\TwbsHelper\View\Helper\Lead`
* Parent class: [`\TwbsHelper\View\Helper\AbstractHtmlElement`](/docs/phpdoc/classes/TwbsHelper/View/Helper/AbstractHtmlElement)

## Methods

### __invoke

Generates an 'lead' element

```php
public __invoke(string $content, iterable $attributes = [], bool $escape = true): string
```

**Parameters:**

| Parameter     | Type         | Description                                       |
|---------------|--------------|---------------------------------------------------|
| `$content`    | **string**   | The content of the lead                           |
| `$attributes` | **iterable** | Html attributes of the "&lt;abbr&gt;" element           |
| `$escape`     | **bool**     | True espace html content '$content'. Default True |

**Return Value:**

The abbreviation XHTML.

***
