FROM php:8.1.5-fpm-alpine

RUN docker-php-ext-install intl
RUN docker-php-ext-install pcntl
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mbstring

WORKDIR /var/www

RUN rm -rf /var/www/html
RUN ln -s public html




COPY . /var/www

RUN chown -R www-data:www-data \
        /var/www/storage \
        /var/www/bootstrap/cache

EXPOSE 9000

ENTRYPOINT [ "php-fpm" ]
