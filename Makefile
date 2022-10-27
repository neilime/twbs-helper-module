.PHONY: help

help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

build-php: ## Build PHP image for given version
	@echo "Build php $(filter-out $@,$(MAKECMDGOALS))"
	@DOCKER_BUILDKIT=1 docker build -t "twbs-helper-php:$(filter-out $@,$(MAKECMDGOALS))" --build-arg "VERSION=$(filter-out $@,$(MAKECMDGOALS))" .

install:
	@$(call run-php,$(filter-out $@,$(MAKECMDGOALS)) composer install --no-progress --prefer-dist --optimize-autoloader)

shell:
	@$(call run-php,$(filter-out $@,$(MAKECMDGOALS)) bash)

test:
	@$(call run-php,$(filter-out $@,$(MAKECMDGOALS)) composer test)

test-update:
	@$(call run-php,$(filter-out $@,$(MAKECMDGOALS)) composer test:update-snapshot)

lint:
	@$(call run-php,$(filter-out $@,$(MAKECMDGOALS)) composer cs)

lint-fix:
	@$(call run-php,$(filter-out $@,$(MAKECMDGOALS)) composer cbf)

ci:
	@$(call run-php,$(filter-out $@,$(MAKECMDGOALS)) composer ci)

generate-docs:
	@$(call run-php,$(filter-out $@,$(MAKECMDGOALS)) composer generate-docs)

## Run PHP for given version
define run-php
	@docker run -it --rm -u $(shell id -u):$(shell id -g) -v ${PWD}:/usr/src/app -w /usr/src/app twbs-helper-php:$(1)
endef

#############################
# Argument fix workaround
#############################
%:
	@:
