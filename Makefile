PHP_VERSION=8.4
UID=$(shell id -u)
GID=$(shell id -g)

.PHONY: help

help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

setup: build-php install ## Initialize project

build-php: ## Build PHP image
	@echo "Build php ${PHP_VERSION}"
	@DOCKER_BUILDKIT=1 docker build -t "twbs-helper-php:${PHP_VERSION}" --build-arg "VERSION=${PHP_VERSION}" --build-arg "UID=${UID}" --build-arg "GID=${GID}" .

install: ## Install PHP dependencies for given PHP version
	rm -f composer.lock
	@$(call run-php,composer install --no-progress --prefer-dist --optimize-autoloader)
	rm -f tools/composer.lock
	@$(call run-php,composer --working-dir=tools install --no-progress --prefer-dist --optimize-autoloader)

shell: ## Execute shell in given PHP version container
	@$(call run-php,bash)

test: ## Execute tests for given PHP version
	@$(call run-php,composer test $(filter-out $@,$(MAKECMDGOALS)))

test-update: ## Execute tests and update snapshots for given PHP version
	@$(call run-php,composer test:update-snapshot $(filter-out $@,$(MAKECMDGOALS)))

lint: ## Execute lint for given PHP version
	@$(call run-php,composer php-cs-fixer $(filter-out $@,$(MAKECMDGOALS)))

lint-fix: ## Execute lint fixing for given PHP version
	@$(call run-php,composer php-cs-fixer:fix $(filter-out $@,$(MAKECMDGOALS)))

stan: ## Execute PHPStan for given PHP version
	@$(call run-php,composer stan $(filter-out $@,$(MAKECMDGOALS)))

ci: ## Execute CI scripts for given PHP version
	@$(call run-php,composer ci $(filter-out $@,$(MAKECMDGOALS)))

generate-docs: ## Generate documentation for given PHP version
	@$(call run-php,composer generate-docs $(filter-out $@,$(MAKECMDGOALS)))

## Run PHP for given version
define run-php
	@docker run -it --rm -v ${PWD}:${PWD} -w ${PWD} twbs-helper-php:${PHP_VERSION} $(1)
endef

#############################
# Argument fix workaround
#############################
%:
	@:
