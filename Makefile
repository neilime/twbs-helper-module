PHP_VERSION=8.3
PROJECT_NAME=$(shell basename $(CURDIR))
UID=$(shell id -u)
GID=$(shell id -g)
IMAGE="${PROJECT_NAME}:${PHP_VERSION}"

.PHONY: help

help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

setup: build-php install ## Initialize project

build-php: ## Build PHP image
	@echo "Build php ${PHP_VERSION}"
	@DOCKER_BUILDKIT=1 docker build -t "${IMAGE}" --build-arg "VERSION=${PHP_VERSION}" --build-arg "UID=${UID}" --build-arg "GID=${GID}" .

install: ## Install PHP dependencies for given PHP version
	rm -f composer.lock
	@$(call run-php,composer install --no-progress --prefer-dist --optimize-autoloader)
	rm -f tools/composer.lock
	@$(call run-php,composer --working-dir=tools install --no-progress --prefer-dist --optimize-autoloader)

shell: ## Execute shell in given PHP version container
	@$(call run-php,bash)

test: ## Execute tests for given PHP version
	@$(call run-php,composer test -- $(filter-out $@,$(MAKECMDGOALS)))

test-ci: ## Execute tests and CI for given PHP version
	@$(call run-php,composer test:ci -- $(filter-out $@,$(MAKECMDGOALS)))

test-update: ## Execute tests and update snapshots for given PHP version
	@$(call run-php,composer test:update-snapshot -- $(filter-out $@,$(MAKECMDGOALS)))

lint: ## Execute lint for given PHP version
	$(MAKE) php-cs-fixer $(filter-out $@,$(MAKECMDGOALS))
	$(MAKE) rector $(filter-out $@,$(MAKECMDGOALS))
	$(MAKE) phpstan $(filter-out $@,$(MAKECMDGOALS))

lint-fix: ## Execute lint fixing for given PHP version
	$(MAKE) php-cs-fixer-fix $(filter-out $@,$(MAKECMDGOALS))
	$(MAKE) rector-fix $(filter-out $@,$(MAKECMDGOALS))

php-cs-fixer: ## Execute php-cs-fixer for given PHP version
	@$(call run-php,composer php-cs-fixer -- $(filter-out $@,$(MAKECMDGOALS)))

php-cs-fixer-fix: ## Execute php-cs-fixer fixing for given PHP version
	@$(call run-php,composer php-cs-fixer:fix -- $(filter-out $@,$(MAKECMDGOALS)))	

rector: ## Execute rector for given PHP version
	@$(call run-php,composer rector -- $(filter-out $@,$(MAKECMDGOALS)))

rector-fix: ## Execute rector fixing for given PHP version
	@$(call run-php,composer rector:fix -- $(filter-out $@,$(MAKECMDGOALS)))

phpstan: ## Execute PHPStan for given PHP version
	@$(call run-php,composer phpstan -- $(filter-out $@,$(MAKECMDGOALS)))

ci: ## Execute CI scripts for given PHP version
	@$(call run-php,composer ci -- $(filter-out $@,$(MAKECMDGOALS)))

generate-docs: ## Generate documentation for given PHP version
	@$(call run-php,composer generate-docs $(filter-out $@,$(MAKECMDGOALS)))

## Run PHP for given version
define run-php
	@docker run -it --rm -v ${PWD}:${PWD} -e PHP_CS_FIXER_IGNORE_ENV=$(if $(filter 8.4,$(PHP_VERSION)),1,) -w ${PWD} "${IMAGE}" $(1)
endef

#############################
# Argument fix workaround
#############################
%:
	@:
