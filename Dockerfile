FROM php:7.2-apache
RUN apt update && \
    apt install -y php-mysqli && \
    apt clean    
WORKDIR /var/www/html
COPY . .
