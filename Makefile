PHP_VERSION ?=
PHP_IMAGE_TAG = $(if $(PHP_VERSION),$(PHP_VERSION),dev)
PROJECT_NAME=$(shell basename $(CURDIR))
UID=$(shell id -u)
GID=$(shell id -g)
IMAGE="${PROJECT_NAME}:$(PHP_IMAGE_TAG)"

.PHONY: help

help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

setup: build-php install ## Initialize project

build-php: ## Build PHP image from the Composer constraint, or PHP_VERSION override
	@set -eu; version="$(PHP_VERSION)"; \
	if [ -z "$$version" ]; then \
		workflow_ref=$$(grep -hE '^[[:space:]]*(-[[:space:]]*)?uses:' .github/workflows/*.y*ml | grep -oE 'hoverkraft-tech/ci-github-php/[^@[:space:]]+@[a-f0-9]{40}' | cut -d@ -f2 | sort -u); \
		if [ "$${#workflow_ref}" -ne 40 ]; then \
			echo 'Expected one consistent ci-github-php commit pin in .github/workflows.' >&2; exit 1; \
		fi; \
		resolver=$$(docker build --quiet "https://github.com/hoverkraft-tech/ci-github-php.git#$$workflow_ref:actions/get-php-versions"); \
		version=$$(docker run --rm --volume "$(CURDIR):/project:ro" "$$resolver"); \
	fi; \
	echo "Build PHP $$version"; \
	DOCKER_BUILDKIT=1 docker build -t "${IMAGE}" --build-arg "VERSION=$$version" --build-arg "UID=${UID}" --build-arg "GID=${GID}" .

install: ## Install PHP dependencies
	rm -f composer.lock
	@$(call run-php,composer install --no-progress --prefer-dist --optimize-autoloader)
	rm -f tools/composer.lock
	@$(call run-php,composer --working-dir=tools install --no-progress --prefer-dist --optimize-autoloader)

shell: ## Execute shell in current container
	@$(call run-php,bash)

test: ## Execute tests
	@$(call run-php,composer test -- $(filter-out $@,$(MAKECMDGOALS)))

test-ci: ## Execute tests and CI
	@$(call run-php,composer test -- $(filter-out $@,$(MAKECMDGOALS)))

test-update: ## Execute tests and update snapshots
	@$(call run-php,composer test:update-snapshot -- $(filter-out $@,$(MAKECMDGOALS)))

lint: ## Execute lint
	$(MAKE) php-cs-fixer $(filter-out $@,$(MAKECMDGOALS))
	$(MAKE) rector $(filter-out $@,$(MAKECMDGOALS))
	$(MAKE) phpstan $(filter-out $@,$(MAKECMDGOALS))

lint-fix: ## Execute lint fixing
	$(MAKE) php-cs-fixer-fix $(filter-out $@,$(MAKECMDGOALS))
	$(MAKE) rector-fix $(filter-out $@,$(MAKECMDGOALS))

php-cs-fixer: ## Execute php-cs-fixer
	@$(call run-php,composer php-cs-fixer -- $(filter-out $@,$(MAKECMDGOALS)))

php-cs-fixer-fix: ## Execute php-cs-fixer fixing
	@$(call run-php,composer php-cs-fixer:fix -- $(filter-out $@,$(MAKECMDGOALS)))	

rector: ## Execute rector
	@$(call run-php,composer rector -- $(filter-out $@,$(MAKECMDGOALS)))

rector-fix: ## Execute rector fixing
	@$(call run-php,composer rector:fix -- $(filter-out $@,$(MAKECMDGOALS)))

phpstan: ## Execute PHPStan
	@$(call run-php,composer phpstan -- $(filter-out $@,$(MAKECMDGOALS)))

ci: ## Execute CI scripts
	$(MAKE) setup
	@$(call run-php,composer ci -- $(filter-out $@,$(MAKECMDGOALS)))

generate-docs: ## Generate documentation
	@$(call run-php,composer generate-docs $(filter-out $@,$(MAKECMDGOALS)))

generate-snapshot: ## Generate snapshot
	@$(call run-php,composer generate-snapshot $(filter-out $@,$(MAKECMDGOALS)))

## Run PHP for given version
define run-php
	@docker run -it --rm -v ${PWD}:${PWD} -w ${PWD} "${IMAGE}" $(1)
endef

#############################
# Argument fix workaround
#############################
%:
	@:
