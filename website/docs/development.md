---
sidebar_position: 4
---

# Development

## Setup

Default PHP version is 8.4. You can override it by setting `PHP_VERSION` as Makefile argument. Example: `make PHP_VERSION=8.2 setup`.

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
