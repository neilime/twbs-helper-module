---
title: "Abbreviation"
---

Helper for rendering abbreviations

***

* Full name: `\TwbsHelper\View\Helper\Abbreviation`
* Parent class: [`\TwbsHelper\View\Helper\AbstractHtmlElement`](./AbstractHtmlElement)

## Methods

### __invoke

Generates an 'abbreviation' element

```php
public __invoke(string $content, string $title = '', bool $initialism = false, array $attributes = [], bool $escape = true): string
```

**Parameters:**

| Parameter     | Type       | Description                                                                                          |
|---------------|------------|------------------------------------------------------------------------------------------------------|
| `$content`    | **string** | The content of the abbreviation                                                                      |
| `$title`      | **string** | The title of the abbreviation. Default : empty                                                       |
| `$initialism` | **bool**   | True set the class 'initialism' to an abbreviation for a slightly smaller font-size.
Default : false |
| `$attributes` | **array**  | Html attributes of the "&lt;abbr&gt;" element                                                              |
| `$escape`     | **bool**   | True espace html content '$content'. Default True                                                    |

**Return Value:**

The abbreviation XHTML.

***
