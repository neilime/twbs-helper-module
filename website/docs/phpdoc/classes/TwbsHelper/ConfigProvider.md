---
title: "ConfigProvider"
---

The configuration provider for the TwbsHelper module

***

* Full name: `\TwbsHelper\ConfigProvider`

**See Also:**

* https://docs.laminas.dev/laminas-component-installer/

## Constants

| Constant             | Visibility | Type   | Value                                       |
|----------------------|------------|--------|---------------------------------------------|
| `MODULE_CONFIG_PATH` | private    | string | __DIR__ . '/../../config/module.config.php' |

## Properties

### moduleConfig

The module config Laminas MVC

```php
protected array $moduleConfig
```

***

## Methods

### __invoke

Returns the configuration array

```php
public __invoke(): array
```

To add a bit of a structure, each section is defined in a separate
method which returns an array with its configuration.

**Throws:**

- [`InvalidArgumentException`](../InvalidArgumentException)

***

### getTwbsHelperOptions

Returns twb bundle options

```php
protected getTwbsHelperOptions(): array
```

***

### getDependencies

Returns dependencies (former server_manager)

```php
protected getDependencies(): array
```

***

### getViewHelpers

Returns view helpers

```php
protected getViewHelpers(): array
```

***

### getNavigationHelpers

Returns navigation helpers

```php
protected getNavigationHelpers(): array
```

***

### getViewManagerConfig

Returns navigation helpers

```php
protected getViewManagerConfig(): array
```

***
