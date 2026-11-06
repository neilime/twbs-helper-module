---
sidebar_position: 4
---

# Development

## Setup

Local builds select the highest stable PHP release allowed by `composer.json` using the
shared Hoverkraft resolver. Docker is the only runtime required on the host. The
resolver revision comes from the existing `ci-github-php` workflow pins, so dependency
updates also apply to local builds. A checkout with consistent workflow pins is required
for automatic selection. Override the selection with `make PHP_VERSION=8.2 setup`; use
the same override for later commands. Without an override, commands use the local `dev`
image created by setup. Rebuild it to pick up newly available compatible releases. CI
automatically tests every compatible stable minor.

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
