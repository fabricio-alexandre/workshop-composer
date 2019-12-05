#!/bin/bash
if [ ! -d "vendor" ]; then
    composer global require hirak/prestissimo
    export COMPOSER_ALLOW_SUPERUSER=1
    composer install
    chown -R www-data:www-data storage/ bootstrap/cache
fi
php-fpm