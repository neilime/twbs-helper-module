---
title: "HelperPluginManager"
---

Plugin manager implementation for HTML class attribute helpers

Enforces that helpers retrieved are instances of
Helper\HelperInterface. Additionally, it registers a number of default
helpers.

***

* Full name: `\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\HelperPluginManager`
* Parent class: [`AbstractPluginManager`](../../../../../Laminas/ServiceManager/AbstractPluginManager)

## Properties

### aliases

Default helper aliases

```php
protected string[] $aliases
```

***

### factories

Default factories

```php
protected array $factories
```

***

### htmlclasshelper

```php
protected \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass|null $htmlclasshelper
```

***

## Methods

### __construct

Sets the provided $parentLocator as the creation context for all
factories; for $config, &#123;@see \Laminas\ServiceManager\ServiceManager::configure()&#125;
for details on its accepted structure.

```php
public __construct(null|\Laminas\ServiceManager\ConfigInterface|\Psr\Container\ContainerInterface $configInstanceOrParentLocator = null, array $config = []): mixed
```

**Parameters:**

| Parameter                        | Type                                                                                 | Description |
|----------------------------------|--------------------------------------------------------------------------------------|-------------|
| `$configInstanceOrParentLocator` | **null\|\Laminas\ServiceManager\ConfigInterface\|\Psr\Container\ContainerInterface** |             |
| `$config`                        | **array**                                                                            |             |

***

### injectHtmlClassHelper

Inject a helper instance with the registered htmlclasshelper

```php
public injectHtmlClassHelper(mixed $first, mixed $second): mixed
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$first`  | **mixed** |             |
| `$second` | **mixed** |             |

***

### setHtmlClassHelper

Set htmlclasshelper

```php
public setHtmlClassHelper(\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass $htmlclasshelper): \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\HelperPluginManager
```

**Parameters:**

| Parameter          | Type                                                 | Description |
|--------------------|------------------------------------------------------|-------------|
| `$htmlclasshelper` | **\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass** |             |

***

### getHtmlClassHelper

Retrieve HtmlClass helper instance

```php
public getHtmlClassHelper(): null|\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass
```

***

### validate

Validate the plugin is of the expected type.

```php
public validate(\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\HelperInterface|callable|mixed $instance): mixed
```

Validates against callables and HelperInterface implementations.

**Parameters:**

| Parameter   | Type                                                                                         | Description |
|-------------|----------------------------------------------------------------------------------------------|-------------|
| `$instance` | **\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\HelperInterface\|callable\|mixed** |             |

**Throws:**

- [`InvalidServiceException`](../../../../../Laminas/ServiceManager/Exception/InvalidServiceException)

***
