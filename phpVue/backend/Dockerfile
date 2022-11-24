FROM php:8.0.1-apache-buster
RUN apt-get update && apt-get upgrade -y
RUN apt-get install -y \
        -dev \
        zip \
  && docker-php-ext-install zip
RUN docker-php-ext-install pdo pdo_mysql bcmath opcache 
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY ../composer.json  .
RUN composer install