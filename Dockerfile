FROM php:7.2-apache
RUN apt update
COPY . /var/www/html/
WORKDIR /var/www/html
