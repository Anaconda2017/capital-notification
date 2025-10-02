#!/bin/bash

# Insurance Notification System - Deployment Script
# This script prepares the application for production deployment

echo "🚀 Starting deployment preparation..."

# Check if we're in the right directory
if [ ! -f "composer.json" ]; then
    echo "❌ Error: composer.json not found. Please run this script from the project root."
    exit 1
fi

# Install/update dependencies
echo "📦 Installing PHP dependencies..."
composer install --no-dev --optimize-autoloader

# Install Node.js dependencies and build assets
echo "🎨 Installing Node.js dependencies and building assets..."
npm ci --only=production
npm run production

# Clear and cache configuration
echo "⚡ Optimizing Laravel..."
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# Optimize for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Create storage link
echo "🔗 Creating storage link..."
php artisan storage:link

# Set proper permissions
echo "🔐 Setting permissions..."
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

# Run migrations (if needed)
echo "🗄️  Running database migrations..."
php artisan migrate --force

# Clear any existing caches
echo "🧹 Clearing caches..."
php artisan cache:clear
php artisan config:clear

echo "✅ Deployment preparation completed successfully!"
echo "🌐 Your application is ready for production deployment."
