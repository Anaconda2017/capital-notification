# This file redirects to Dockerfile.production for Coolify deployment
FROM php:7.4-fpm AS base

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libxml2-dev \
    zip \
    unzip \
    libonig-dev \
    libfreetype6-dev \
    libjpeg-dev \
    libwebp-dev \
    libxpm-dev \
    libpq-dev \
    default-mysql-client \
    nodejs \
    npm \
    supervisor \
    libzip-dev \
    nginx \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp --with-xpm \
    && docker-php-ext-install -j$(nproc) \
    pdo \
    pdo_mysql \
    pdo_pgsql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    zip \
    opcache

# Configure OPcache for production
RUN echo "opcache.enable=1" >> /usr/local/etc/php/conf.d/opcache.ini \
    && echo "opcache.memory_consumption=128" >> /usr/local/etc/php/conf.d/opcache.ini \
    && echo "opcache.interned_strings_buffer=8" >> /usr/local/etc/php/conf.d/opcache.ini \
    && echo "opcache.max_accelerated_files=4000" >> /usr/local/etc/php/conf.d/opcache.ini \
    && echo "opcache.revalidate_freq=2" >> /usr/local/etc/php/conf.d/opcache.ini \
    && echo "opcache.fast_shutdown=1" >> /usr/local/etc/php/conf.d/opcache.ini

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Build stage
FROM base AS build

# Set working directory
WORKDIR /var/www/html

# Copy composer files
COPY composer.json composer.lock ./

# Create required directories for composer autoload
RUN mkdir -p database/seeds database/factories

# Install PHP dependencies (without dev dependencies)
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Copy source code
COPY . .

# Run composer scripts
RUN composer run-script post-autoload-dump

# Production stage
FROM base AS production

# Set working directory
WORKDIR /var/www/html

# Copy built application from build stage
COPY --from=build /var/www/html .

# Create non-root user
RUN groupadd -g 1000 www && \
    useradd -u 1000 -g www -s /bin/bash -m www

# Set ownership
RUN chown -R www:www /var/www/html

# Create necessary directories and set permissions
RUN mkdir -p storage/app/public \
    storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    bootstrap/cache \
    && chown -R www:www storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Configure PHP-FPM
RUN echo "listen = 127.0.0.1:9000" >> /usr/local/etc/php-fpm.d/www.conf \
    && echo "listen.owner = www" >> /usr/local/etc/php-fpm.d/www.conf \
    && echo "listen.group = www" >> /usr/local/etc/php-fpm.d/www.conf \
    && echo "user = www" >> /usr/local/etc/php-fpm.d/www.conf \
    && echo "group = www" >> /usr/local/etc/php-fpm.d/www.conf

# Configure Nginx
RUN echo 'server {' > /etc/nginx/sites-available/default \
    && echo '    listen 80;' >> /etc/nginx/sites-available/default \
    && echo '    server_name localhost;' >> /etc/nginx/sites-available/default \
    && echo '    root /var/www/html/public;' >> /etc/nginx/sites-available/default \
    && echo '' >> /etc/nginx/sites-available/default \
    && echo '    add_header X-Frame-Options "SAMEORIGIN";' >> /etc/nginx/sites-available/default \
    && echo '    add_header X-Content-Type-Options "nosniff";' >> /etc/nginx/sites-available/default \
    && echo '' >> /etc/nginx/sites-available/default \
    && echo '    index index.php;' >> /etc/nginx/sites-available/default \
    && echo '    charset utf-8;' >> /etc/nginx/sites-available/default \
    && echo '' >> /etc/nginx/sites-available/default \
    && echo '    location / {' >> /etc/nginx/sites-available/default \
    && echo '        try_files \$uri \$uri/ /index.php?\$query_string;' >> /etc/nginx/sites-available/default \
    && echo '    }' >> /etc/nginx/sites-available/default \
    && echo '' >> /etc/nginx/sites-available/default \
    && echo '    location = /favicon.ico { access_log off; log_not_found off; }' >> /etc/nginx/sites-available/default \
    && echo '    location = /robots.txt  { access_log off; log_not_found off; }' >> /etc/nginx/sites-available/default \
    && echo '' >> /etc/nginx/sites-available/default \
    && echo '    error_page 404 /index.php;' >> /etc/nginx/sites-available/default \
    && echo '' >> /etc/nginx/sites-available/default \
    && echo '    location ~ \.php$ {' >> /etc/nginx/sites-available/default \
    && echo '        fastcgi_pass 127.0.0.1:9000;' >> /etc/nginx/sites-available/default \
    && echo '        fastcgi_param SCRIPT_FILENAME \$realpath_root\$fastcgi_script_name;' >> /etc/nginx/sites-available/default \
    && echo '        include fastcgi_params;' >> /etc/nginx/sites-available/default \
    && echo '    }' >> /etc/nginx/sites-available/default \
    && echo '' >> /etc/nginx/sites-available/default \
    && echo '    location ~ /\.(?!well-known).* {' >> /etc/nginx/sites-available/default \
    && echo '        deny all;' >> /etc/nginx/sites-available/default \
    && echo '    }' >> /etc/nginx/sites-available/default \
    && echo '' >> /etc/nginx/sites-available/default \
    && echo '    client_max_body_size 100M;' >> /etc/nginx/sites-available/default \
    && echo '}' >> /etc/nginx/sites-available/default \
    && ln -sf /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default \
    && rm -f /etc/nginx/sites-enabled/default.bak

# Create supervisor configuration
RUN echo "[supervisord]" > /etc/supervisor/conf.d/supervisord.conf \
    && echo "nodaemon=true" >> /etc/supervisor/conf.d/supervisord.conf \
    && echo "" >> /etc/supervisor/conf.d/supervisord.conf \
    && echo "[program:php-fpm]" >> /etc/supervisor/conf.d/supervisord.conf \
    && echo "command=php-fpm" >> /etc/supervisor/conf.d/supervisord.conf \
    && echo "autostart=true" >> /etc/supervisor/conf.d/supervisord.conf \
    && echo "autorestart=true" >> /etc/supervisor/conf.d/supervisord.conf \
    && echo "user=root" >> /etc/supervisor/conf.d/supervisord.conf \
    && echo "redirect_stderr=true" >> /etc/supervisor/conf.d/supervisord.conf \
    && echo "stdout_logfile=/var/log/php-fpm.log" >> /etc/supervisor/conf.d/supervisord.conf \
    && echo "" >> /etc/supervisor/conf.d/supervisord.conf \
    && echo "[program:nginx]" >> /etc/supervisor/conf.d/supervisord.conf \
    && echo "command=nginx -g 'daemon off;'" >> /etc/supervisor/conf.d/supervisord.conf \
    && echo "autostart=true" >> /etc/supervisor/conf.d/supervisord.conf \
    && echo "autorestart=true" >> /etc/supervisor/conf.d/supervisord.conf \
    && echo "user=root" >> /etc/supervisor/conf.d/supervisord.conf \
    && echo "redirect_stderr=true" >> /etc/supervisor/conf.d/supervisord.conf \
    && echo "stdout_logfile=/var/log/nginx.log" >> /etc/supervisor/conf.d/supervisord.conf

# Switch to non-root user
USER www

# Expose port
EXPOSE 80

# Start supervisor
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
