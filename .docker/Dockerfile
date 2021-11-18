FROM php:8.1.0RC6-fpm


RUN apt-get update && apt-get install -y \
    libpq-dev \
    libcurl4-openssl-dev \
    libffi-dev \
  && pecl install xdebug \
  && pecl install redis  \
  && docker-php-ext-enable redis xdebug
