#!/bin/bash

if [ ! -f ".env" ]; then
    echo "Creating env file"
    cp .env.example .env

    
else 
    echo "env file exists"
fi
if [ ! -d "vendor" ]; then
    composer install
    composer update
    chmod -R 777 /var/www/html/storage 
    touch /var/www/html/storage/logs/laravel.log 
    chmod 777 /var/www/html/storage/logs/laravel.log 
    chcon -R -t httpd_sys_rw_content_t /var/www/html/storage 
    mkdir -p /path/to/laravel/storage/{app,framework,logs} 
    mkdir -p /path/to/laravel/storage/framework/{cache,sessions,views} 
    chmod -R 777 /path/to/laravel/storage/ 
    chown -R www-data:www-data /path/to/laravel/storage/ 
fi




php artisan key:generate
php artisan cache:clear
php artisan config:clear
php artisan optimize
php-fpm


