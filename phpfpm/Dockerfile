FROM php:5.6.37-fpm-alpine3.7
  RUN sed -i 's/dl-cdn.alpinelinux.org/mirrors.aliyun.com/g' /etc/apk/repositories \
  && apk update\
  && apk add --no-cache libmcrypt-dev freetype-dev libjpeg-turbo-dev \
          git \
          # libfreetype6-dev \
          # libjpeg62-turbo-dev \
          libpng-dev \
  && docker-php-ext-install mcrypt mysqli pdo pdo_mysql mbstring bcmath zip opcache\
  && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/ \
  && docker-php-ext-install -j$(nproc) gd