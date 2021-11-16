FROM php:7.3-apache

RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-enable pdo && docker-php-ext-enable pdo_mysql
RUN apt update && apt upgrade -y

COPY ./app/ /var/www/html/


EXPOSE 80