---
sidebar_position: 1
---

# Development

## Setup

Default PHP version is 8.3. You can override it by setting `PHP_VERSION` as Makefile argument. Example: `make PHP_VERSION=8.0 setup`.

```sh
make setup
```

## Running tests

```sh
make test
```

## Fix code linting

```sh
make lint-fix
```

## Running CI scripts

```sh
make ci
```
