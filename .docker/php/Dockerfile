FROM php:8.2-apache

# pdp_mysql
RUN docker-php-ext-install -j$(nproc) pdo_mysql

RUN apt-get update && apt-get update -y && apt-get install -y git

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update && apt-get install libpq-dev -y && docker-php-ext-install pdo_pgsql

RUN /usr/sbin/a2enmod rewrite

COPY default.conf /etc/apache2/sites-available/000-default.conf