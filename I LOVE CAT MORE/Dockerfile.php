FROM php:fpm

WORKDIR /var/www/html

COPY . .

RUN chmod 444 ./flag.txt

EXPOSE 9000

