FROM php:7.3-apache
FROM mysql:8.0.27
FROM phpmyadmin:5.1.1

RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-enable pdo && docker-php-ext-enable pdo_mysql
RUN apt update && apt upgrade -y

COPY ./app/controller /var/www/html/
COPY ./app/ /var/www/html/


EXPOSE 80 3000 443