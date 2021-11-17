FROM php:7.3-apache

RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN docker-php-ext-enable pdo
RUN docker-php-ext-enable pdo_mysql 
RUN docker-php-ext-enable mysqli  
RUN apt update && apt upgrade -y

COPY ./app/controller /var/www/html/
COPY ./app/ /var/www/html/
