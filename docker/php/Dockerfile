FROM composer:1 AS composer
FROM php:7.4-fpm

USER root
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN apt-get update \
    && apt-get install -y \
        net-tools \
    && useradd -m jefffrade
WORKDIR /cripto

RUN chown -R jefffrade:jefffrade /cripto
USER jefffrade