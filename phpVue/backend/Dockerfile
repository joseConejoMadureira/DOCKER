FROM php:8.0.1-apache-buster
RUN apt-get update
RUN apt-get install -y libzip-dev
RUN docker-php-ext-install zip
COPY . .
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN docker-php-ext-install pdo pdo_mysql bcmath opcache 
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

