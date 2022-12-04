FROM php:8.1-fpm-alpine

RUN docker-php-ext-install intl
RUN docker-php-ext-install pcntl
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mbstring

WORKDIR /var/www

RUN rm -rf /var/www/html
RUN ln -s public html


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


COPY . /var/www

RUN chown -R www-data:www-data /var/www
RUN usermod -u 1000 www-data
USER www-data


EXPOSE 9000

ENTRYPOINT [ "php-fpm" ]
