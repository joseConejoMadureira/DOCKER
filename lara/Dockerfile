FROM php:8.1-fpm
COPY composer.lock composer.json /var/www/

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

WORKDIR /var/www

RUN rm -rf /var/www/html
RUN ln -s public html


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install

COPY . /var/www

RUN chown -R www-data:www-data /var/www
RUN usermod -u 1000 www-data
USER www-data


EXPOSE 9000

ENTRYPOINT [ "php-fpm" ]
