FROM php:8.1-apache-buster

# Install additional PHP extensions
ARG PHP_XDEBUG_MODULE_VERSION="3.1.2"
ARG COMPOSER_VERSION
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    gettext-base \
    bzip2 \
    curl \
    gcc \
    less \
    zip \
    unzip \
    tar \
    liblz4-dev \
    libssl-dev \
    libsasl2-dev \
    libzstd-dev \
    rapidjson-dev \
    gnupg \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN pecl install xdebug-${PHP_XDEBUG_MODULE_VERSION} && docker-php-ext-enable xdebug
RUN docker-php-ext-install pdo_mysql
RUN a2enmod rewrite

ADD rootfs /

RUN curl -s http://getcomposer.org/installer -o installer \
    && php installer --filename=composer --version="${COMPOSER_VERSION}" --install-dir=/bin

RUN chmod +x /docker-entrypoint.sh
ENTRYPOINT ["/docker-entrypoint.sh"]
CMD ["apache2-foreground"]

