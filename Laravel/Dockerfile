FROM php:7.4-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql sockets
RUN curl -sS https://getcomposer.org/installer | php -- \
     --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html
COPY . .
RUN composer update && composer self-update && composer install

RUN chown -R www-data:www-data /var/www/html

CMD php artisan serve --host=0.0.0.0
EXPOSE 8000