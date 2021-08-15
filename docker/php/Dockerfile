FROM php:7.4.4-apache

# 1. development packages dependencies
RUN apt-get update && \
    apt-get install -y \
    g++ \
    git \
    zip \
    curl \
    sudo \
    unzip \
    libpq-dev \
    libzip-dev \
    libonig-dev \
    libicu-dev \
    libbz2-dev \
    libpng-dev \
    libjpeg-dev \
    libmcrypt-dev \
    libreadline-dev \
    libfreetype6-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer --version=1.10.19

# 2. development extension dependencies
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install \
       gd \
       bz2 \
       pdo \
       zip \
       intl \
       iconv \
       bcmath \
       opcache \
       calendar \
       mbstring \
       pdo_pgsql

# Copy ssl certificates
#COPY server.crt /etc/apache2/ssl/server.crt
#COPY server.key /etc/apache2/ssl/server.key

# Put apache config for Laravel
COPY apache2.conf /etc/apache2/sites-available/laravel.conf
RUN a2dissite 000-default.conf && a2ensite laravel.conf && a2enmod rewrite ssl

# Change uid and gid of apache to docker user uid/gid
RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

WORKDIR /var/www/html

#USER www-data