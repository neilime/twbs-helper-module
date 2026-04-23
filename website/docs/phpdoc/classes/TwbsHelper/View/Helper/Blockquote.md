---
title: "Blockquote"
---

Helper for rendering blockquotes

***

* Full name: `\TwbsHelper\View\Helper\Blockquote`
* Parent class: [`\TwbsHelper\View\Helper\AbstractHtmlElement`](/docs/phpdoc/classes/TwbsHelper/View/Helper/AbstractHtmlElement)

## Properties

### allowedOptions

```php
protected static $allowedOptions
```

* This property is **static**.

***

## Methods

### __invoke

Generates a 'blockquote' element

```php
public __invoke(string $content, string $footer = '', array $attributes = [], array $contentAttributes = [], array $footerAttributes = [], iterable $figureAttributes = [], bool $escape = true): string
```

**Parameters:**

| Parameter            | Type         | Description                                                         |
|----------------------|--------------|---------------------------------------------------------------------|
| `$content`           | **string**   | The content of the blockquote                                       |
| `$footer`            | **string**   | The content of the footer of the blockquote. Default : empty        |
| `$attributes`        | **array**    | Html attributes of the "&lt;blockquote&gt;" element. Default : empty      |
| `$contentAttributes` | **array**    | Html attributes of the "&lt;p&gt;" (content) element. Default : empty     |
| `$footerAttributes`  | **array**    | Html attributes of the "&lt;footer&gt;" (footer) element. Default : empty |
| `$figureAttributes`  | **iterable** |                                                                     |
| `$escape`            | **bool**     | True espace html content '$content'. Default True                   |

**Return Value:**

The blockquote XHTML.

***

### renderContent

```php
protected renderContent(string $content, \TwbsHelper\View\HtmlAttributesSet $contentAttributes, bool $escape): string
```

**Parameters:**

| Parameter            | Type                                   | Description |
|----------------------|----------------------------------------|-------------|
| `$content`           | **string**                             |             |
| `$contentAttributes` | **\TwbsHelper\View\HtmlAttributesSet** |             |
| `$escape`            | **bool**                               |             |

***

### renderFooter

```php
protected renderFooter(string $footer, \TwbsHelper\View\HtmlAttributesSet $footerAttributes, bool $escape): string
```

**Parameters:**

| Parameter           | Type                                   | Description |
|---------------------|----------------------------------------|-------------|
| `$footer`           | **string**                             |             |
| `$footerAttributes` | **\TwbsHelper\View\HtmlAttributesSet** |             |
| `$escape`           | **bool**                               |             |

***

### renderContainerWithFigure

```php
protected renderContainerWithFigure(string $blockquoteContent, string $footerContent, \TwbsHelper\View\HtmlAttributesSet $attributes, \TwbsHelper\View\HtmlAttributesSet $figureAttributes, bool $escape): string
```

**Parameters:**

| Parameter            | Type                                   | Description |
|----------------------|----------------------------------------|-------------|
| `$blockquoteContent` | **string**                             |             |
| `$footerContent`     | **string**                             |             |
| `$attributes`        | **\TwbsHelper\View\HtmlAttributesSet** |             |
| `$figureAttributes`  | **\TwbsHelper\View\HtmlAttributesSet** |             |
| `$escape`            | **bool**                               |             |

***

### renderContainerWithoutFigure

```php
protected renderContainerWithoutFigure(string $blockquoteContent, string $footerContent, \TwbsHelper\View\HtmlAttributesSet $attributes, bool $escape): string
```

**Parameters:**

| Parameter            | Type                                   | Description |
|----------------------|----------------------------------------|-------------|
| `$blockquoteContent` | **string**                             |             |
| `$footerContent`     | **string**                             |             |
| `$attributes`        | **\TwbsHelper\View\HtmlAttributesSet** |             |
| `$escape`            | **bool**                               |             |

***

### renderContainer

```php
protected renderContainer(string $content, \TwbsHelper\View\HtmlAttributesSet $attributes, bool $escape): mixed
```

**Parameters:**

| Parameter     | Type                                   | Description |
|---------------|----------------------------------------|-------------|
| `$content`    | **string**                             |             |
| `$attributes` | **\TwbsHelper\View\HtmlAttributesSet** |             |
| `$escape`     | **bool**                               |             |

***
