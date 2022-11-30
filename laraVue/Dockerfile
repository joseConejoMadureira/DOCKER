FROM node:lts-alpine as vuejs
LABEL authors="Nimat Razmjo"
RUN mkdir -p /app/public
COPY package.json vite.config.js package-lock.json /app/
COPY resources/ /app/resources/
WORKDIR /app
RUN npm install && npm run build

#Server Dependencies
FROM composer:2.0.8 as vendor
WORKDIR /app
COPY database/ database/
COPY composer.json composer.json
COPY composer.lock composer.lock
RUN composer install \
    --ignore-platform-reqs \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist

#Final Image
FROM php:8.0.1-apache-buster as base
#install php dependencies
RUN apt-get update && apt-get install -y \

    libpng-dev \
    libonig-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    libzip-dev \
    jpegoptim optipng pngquant gifsicle \
    unzip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl
RUN docker-php-ext-install zip
# change the document root to /var/www/html/public
RUN sed -i -e "s/html/html\/public/g" \
    /etc/apache2/sites-enabled/000-default.conf

# enable apache mod_rewrite
RUN a2enmod rewrite

WORKDIR /var/www/html

COPY . /var/www/html
COPY --from=vendor /app/vendor/ /var/www/html/vendor/
COPY --from=vuejs /app/public/build/assets/ /var/www/html/public/build/js/
COPY --from=vuejs /app/public/build/manifest.json /var/www/html/manifest.json

RUN pwd && ls -la

#RUN php artisan key:generate --ansi && php artisan storage:link && php artisan config:cache && php artisan route:cache


# these directories need to be writable by Apache
RUN chown -R www-data:www-data /var/www/html/storage \
    /var/www/html/bootstrap/cache

# copy env file for our Docker image
# COPY env.docker /var/www/html/.env

# create sqlite db structure
RUN mkdir -p storage/app \
    && touch storage/app/db.sqlite

VOLUME ["/var/www/html/storage", "/var/www/html/bootstrap/cache"]

EXPOSE 80
