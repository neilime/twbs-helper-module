---
sidebar_position: 1
---

# Development

## Setup

`PHP_VERSION` is the version of php to use during the development. Example: `8.1`

```sh
make build-php PHP_VERSION
make install PHP_VERSION
```

## Running tests

```sh
make test PHP_VERSION
```

## Fix code linting

```sh
make lint-fix PHP_VERSION
```

## Running CI scripts

```sh
make ci PHP_VERSION
```
