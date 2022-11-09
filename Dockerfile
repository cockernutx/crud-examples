FROM php:latest
RUN apt update -y
RUN apt install git -y
RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli
CMD php