ARG VERSION=

FROM php:${VERSION}-cli

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
RUN \
    apt-get update -yq; \
    apt-get install -yq unzip libicu-dev libonig-dev libxml2-dev; \
    pecl install pcov libsodium; \
    docker-php-ext-enable pcov sodium; \
    docker-php-ext-install dom tokenizer json mbstring intl xml xmlwriter simplexml iconv

RUN echo 'memory_limit = 512M' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini;
