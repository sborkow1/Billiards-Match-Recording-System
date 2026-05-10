FROM php:8.2-apache

# Install required dependencies so MySQL and PHP can communicate
RUN apt-get update && apt-get install -y \
    default-mysql-client \
    && docker-php-ext-install pdo pdo_mysql mysqli \
    && docker-php-ext-enable pdo pdo_mysql mysqli

RUN a2enmod rewrite