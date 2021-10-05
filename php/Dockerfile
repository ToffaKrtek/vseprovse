
FROM php:7.4.24-fpm
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer