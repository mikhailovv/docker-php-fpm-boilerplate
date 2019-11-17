FROM php:7.4.0RC6-fpm


RUN pecl install redis \
    && pecl install xdebug \
    && docker-php-ext-enable redis xdebug

RUN apt-get update &&  apt-get install -y \
    libpq-dev \
    libcurl4-openssl-dev \
    libffi-dev

RUN docker-php-ext-install pdo_pgsql \
    curl \
    ffi \
    opcache

#    bcmath curl dom ffi fileinfo filter ftp hash iconv intl json mbstring opcache pcntl pdo pdo_sqlite /
#    phar posix pspell readline reflection session simplexml snmp soap sockets spl standard tokenizer /
#    xml xmlreader xmlrpc xmlwriter xsl zip

