#!/bin/bash

# Clear all caches
php artisan cache:clear
php artisan config:clear  
php artisan route:clear
php artisan view:clear

# Rebuild caches
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Create storage link if not exists
php artisan storage:link

# Start supervisor
/usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf

