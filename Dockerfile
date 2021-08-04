FROM php:7.2-apache
RUN apt update
WORKDIR /var/www/html
COPY . .
