## Stage 1 (base)
FROM dock.pfdev.de/public/php8-nginx-base:latest as base

ENV PATH=/var/www/bin:$PATH

WORKDIR /var/www

COPY . .

RUN composer install --no-interaction --no-scripts

## Stage 2 (tests)
FROM base as test
ENV APP_ENV=test
WORKDIR /var/www

## Stage 3 (linting)
FROM test as lint

RUN ./vendor/bin/parallel-lint src

## Stage 4 (psalm)
FROM test as psalm
RUN ./vendor/bin/psalm --show-info=false
