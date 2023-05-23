.PHONY: help

help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

build-php: ## Build PHP image for given version. Example: make build-php 8.2
	@echo "Build php $(filter-out $@,$(MAKECMDGOALS))"
	@DOCKER_BUILDKIT=1 docker build -t "twbs-helper-php:$(filter-out $@,$(MAKECMDGOALS))" --build-arg "VERSION=$(filter-out $@,$(MAKECMDGOALS))" .

install: ## Install PHP dependencies for given PHP version. Example: make install 8.2
	rm -f composer.lock
	@$(call run-php,$(filter-out $@,$(MAKECMDGOALS)) composer install --no-progress --prefer-dist --optimize-autoloader)
	rm -f composer.lock

shell: ## Execute shell in given PHP version container
	@$(call run-php,$(filter-out $@,$(MAKECMDGOALS)) bash)

test: ## Execute tests for given PHP version
	@$(call run-php,$(filter-out $@,$(MAKECMDGOALS)) composer test)

test-update: ## Execute tests and update snapshots for given PHP version
	@$(call run-php,$(filter-out $@,$(MAKECMDGOALS)) composer test:update-snapshot)

lint: ## Execute lint for given PHP version
	@$(call run-php,$(filter-out $@,$(MAKECMDGOALS)) composer cs)

lint-fix: ## Execute lint fixing for given PHP version
	@$(call run-php,$(filter-out $@,$(MAKECMDGOALS)) composer cbf)

stan: ## Execute PHPStan for given PHP version
	@$(call run-php,$(filter-out $@,$(MAKECMDGOALS)) composer stan)

ci: ## Execute CI scripts for given PHP version
	@$(call run-php,$(filter-out $@,$(MAKECMDGOALS)) composer ci)

generate-docs: ## Generate documentation for given PHP version
	@$(call run-php,$(filter-out $@,$(MAKECMDGOALS)) composer generate-docs)

## Run PHP for given version
define run-php
	@docker run -it --rm -u $(shell id -u):$(shell id -g) -v ${PWD}:${PWD} -w ${PWD} twbs-helper-php:$(1)
endef

#############################
# Argument fix workaround
#############################
%:
	@:
