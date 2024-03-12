FROM php:8.3-fpm

RUN apt-get update && apt-get install git && apt-get install zip unzip && apt-get install php-zip -y 

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
