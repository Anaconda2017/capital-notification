# Deployment Guide for Insurance Notification System

This guide will help you deploy the Insurance Notification System to Coolify.

## Prerequisites

- Coolify account and dashboard access
- GitHub repository: https://github.com/Anaconda2017/capital-notification.git
- Database (MySQL/PostgreSQL) - can be provided by Coolify or external

## Deployment Steps

### 1. Connect Repository to Coolify

1. Log in to your Coolify dashboard
2. Create a new application
3. Connect your GitHub repository: `https://github.com/Anaconda2017/capital-notification.git`
4. Select the main branch

### 2. Configure Application Settings

#### Build Settings:
- **Dockerfile Path**: `Dockerfile.production`
- **Build Context**: `.` (root directory)
- **Build Command**: (leave empty, handled by Dockerfile)

#### Environment Variables:
Set the following environment variables in Coolify:

```env
# Application
APP_NAME="Insurance Notification System"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com
APP_KEY=base64:your-generated-key-here

# Database
DB_CONNECTION=mysql
DB_HOST=your-database-host
DB_PORT=3306
DB_DATABASE=insurance_notification
DB_USERNAME=your-db-username
DB_PASSWORD=your-db-password

# Mail Configuration
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-email@domain.com
MAIL_PASSWORD=your-email-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@your-domain.com
MAIL_FROM_NAME="Insurance Notification System"

# Google Cloud (for notifications)
GOOGLE_APPLICATION_CREDENTIALS=/var/www/html/public/json/capital-insurance-8134f-59b950fe0de2.json
```

### 3. Database Setup

#### Option A: Use Coolify Database Service
1. In Coolify, add a MySQL service
2. Set the database environment variables to use the service name as host

#### Option B: External Database
1. Use your existing MySQL/PostgreSQL database
2. Update the database environment variables accordingly

### 4. Storage and File Permissions

The application includes:
- Google Cloud credentials for notifications: `public/json/capital-insurance-8134f-59b950fe0de2.json`
- File uploads directory: `public/uploads/`
- Storage symlink will be created automatically

### 5. Health Check

The application includes a health check endpoint at `/health` that returns:
```json
{
    "status": "ok",
    "timestamp": "2024-01-01T00:00:00.000000Z",
    "service": "Insurance Notification System"
}
```

### 6. Deployment Process

1. **Build**: Coolify will build the Docker image using `Dockerfile.production`
2. **Dependencies**: Composer dependencies will be installed
3. **Migrations**: Database migrations will run automatically
4. **Optimization**: Laravel will be optimized for production
5. **Start**: Application will start with PHP-FPM

### 7. Post-Deployment

After successful deployment:

1. **Verify Health**: Visit `https://your-domain.com/health`
2. **Test Notifications**: Ensure Google Cloud credentials are working
3. **Check Logs**: Monitor application logs in Coolify dashboard
4. **Database**: Verify data is accessible and migrations completed

## Troubleshooting

### Common Issues:

1. **Docker Build Fails**:
   - Ensure `libzip-dev` is installed (fixed in latest version)
   - Check PHP extension requirements

2. **Database Connection Issues**:
   - Verify database credentials
   - Ensure database service is running
   - Check network connectivity

3. **File Permission Issues**:
   - Ensure storage directory is writable
   - Check Google Cloud credentials file permissions

4. **Memory Issues**:
   - Increase PHP memory limit if needed
   - Monitor resource usage in Coolify

### Logs Location:
- Application logs: Coolify dashboard
- Laravel logs: `storage/logs/` (accessible via Coolify file manager)

## Features Included:

- ✅ User authentication and management
- ✅ Multi-language support (Arabic/English)
- ✅ Notification system with Google Cloud integration
- ✅ File upload handling
- ✅ Database integration
- ✅ Email functionality
- ✅ Image processing with Intervention Image
- ✅ Health monitoring endpoint

## Support:

For deployment issues, check:
1. Coolify documentation
2. Laravel deployment guides
3. Application logs in Coolify dashboard

---

**Repository**: https://github.com/Anaconda2017/capital-notification.git
**Last Updated**: October 2024