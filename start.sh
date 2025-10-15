#!/bin/bash

echo "Starting application..."

# Change to application directory
cd /var/www/html

# Clear all caches (ignore errors if cache doesn't exist)
php artisan config:clear || true
php artisan route:clear || true
php artisan view:clear || true
php artisan cache:clear || true

# Rebuild caches for better performance
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

# Create storage link if not exists
php artisan storage:link || true

echo "Application setup complete. Starting services..."

# Start supervisor in foreground
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf

