FROM php:8.1-cli

WORKDIR /app

COPY . /app

RUN apt-get update && apt-get install -y unzip \
    && docker-php-ext-install pdo pdo_mysql

CMD ["php", "-S", "0.0.0.0:10000", "-t", "public"]
