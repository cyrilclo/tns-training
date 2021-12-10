#!/usr/bin/env bash

# Replace templates
envsubst < /etc/apache2/sites-available/vhosts.conf.tpl.conf > /etc/apache2/sites-available/000-default.conf
envsubst < /usr/local/etc/php/conf.d/docker-php-ext-xdebug.tpl > /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
exec "$@"
