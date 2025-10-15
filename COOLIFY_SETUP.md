# Coolify Setup Guide

## Important Configuration Steps

### 1. Port Configuration in Coolify Dashboard
Make sure to set the **Port** in Coolify to: `80`

### 2. Required Environment Variables
Set these in Coolify Dashboard → Environment Variables:

```
APP_NAME="Insurance Notification System"
APP_ENV=production
APP_KEY=base64:GENERATE_THIS_KEY
APP_DEBUG=false
APP_URL=https://notification.cairohere.com

DB_CONNECTION=mysql
DB_HOST=your_database_host
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

MAIL_MAILER=smtp
MAIL_HOST=your_smtp_host
MAIL_PORT=587
MAIL_USERNAME=your_smtp_user
MAIL_PASSWORD=your_smtp_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@cairohere.com
MAIL_FROM_NAME="Insurance Notification"
```

### 3. Generate APP_KEY
Run this locally to generate the key:
```bash
php artisan key:generate --show
```

Then copy the output and set it as `APP_KEY` in Coolify.

### 4. Domain Configuration
In Coolify Dashboard:
- Set Domain: `notification.cairohere.com`
- Enable HTTPS/SSL

### 5. Health Check
The application provides a health check endpoint at:
- `/health`

### 6. Troubleshooting "No Server Found"

If you see "no server found":

1. **Check Port Mapping**
   - In Coolify, make sure Port is set to `80`
   
2. **Check Container Logs**
   - Look for "nginx entered RUNNING state"
   - Look for "php-fpm entered RUNNING state"

3. **Check inside container** (via Coolify Terminal):
   ```bash
   # Check if nginx is running
   ps aux | grep nginx
   
   # Check if php-fpm is running
   ps aux | grep php-fpm
   
   # Test nginx locally
   curl http://localhost/health
   ```

4. **Restart the application** in Coolify

### 7. Test Endpoints

After deployment, test these endpoints:
- `https://notification.cairohere.com/` - Homepage
- `https://notification.cairohere.com/health` - Health check
- `https://notification.cairohere.com/sendPushNotification` - API endpoint

## Common Issues

### Issue: "Failed to clear cache"
This is normal and can be ignored. It happens when cache doesn't exist yet.

### Issue: "Routes cached successfully!" but routes don't work
Run these commands in Coolify Terminal:
```bash
php artisan route:clear
php artisan config:clear
php artisan cache:clear
```

### Issue: Container starts but no web access
1. Check if port 80 is exposed in Coolify settings
2. Make sure domain is correctly configured
3. Check Coolify proxy settings

