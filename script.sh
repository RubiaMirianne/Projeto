#!/bin/bash
cd /home/terceirocefetvga/www/201718110057
composer install && yarn install && yarn prod
php artisan migrate
