FROM php:7.2-apache
RUN docker-php-ext-install mysqli

COPY index.php /var/www/html/sample/
EXPOSE 80
RUN apt-get update
RUN apt-get install iputils-ping | echo Y