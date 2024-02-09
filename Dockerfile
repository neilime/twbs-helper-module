ARG VERSION=

FROM php:${VERSION}-cli

# hadolint ignore=DL3027
RUN --mount=type=cache,target=/var/cache/apt \
    export DEBIAN_FRONTEND=noninteractive && \
    apt-get update -yq; \
    apt-get install -yq unzip libicu-dev libonig-dev libxml2-dev; \
    pecl install pcov libsodium; \
    docker-php-ext-enable pcov sodium; \
    docker-php-ext-install intl;

RUN echo 'memory_limit=512M' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini;

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Configure www-data user
ARG UID=1000
ARG GID=1000
RUN usermod --uid $UID www-data && groupmod --gid $GID www-data && chown www-data:www-data /var/www
USER www-data
WORKDIR /var/www/html
