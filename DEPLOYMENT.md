# Deployment Guide

This guide explains how to deploy the Insurance Notification System to GitHub and then to Coolify.

## 🚀 GitHub Setup

### 1. Initialize Git Repository

```bash
# Initialize git repository (if not already done)
git init

# Add all files
git add .

# Create initial commit
git commit -m "Initial commit: Insurance Notification System"

# Add remote repository
git remote add origin https://github.com/yourusername/insurance-notification.git

# Push to GitHub
git push -u origin main
```

### 2. GitHub Repository Setup

1. Create a new repository on GitHub
2. Copy the repository URL
3. Update the remote URL:
   ```bash
   git remote set-url origin https://github.com/yourusername/insurance-notification.git
   ```

## 🐳 Coolify Deployment

### 1. Coolify Dashboard Setup

1. **Login to Coolify Dashboard**
2. **Create New Application**
   - Click "New Application"
   - Choose "Git Repository"
   - Connect your GitHub repository

### 2. Environment Variables

Set these environment variables in Coolify dashboard:

#### Required Variables
```env
APP_NAME="Insurance Notification System"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com
APP_KEY=base64:your-generated-key-here
```

#### Database Configuration
```env
DB_CONNECTION=mysql
DB_HOST=your-mysql-host
DB_PORT=3306
DB_DATABASE=insurance_notification
DB_USERNAME=your-db-username
DB_PASSWORD=your-db-password
```

#### Mail Configuration
```env
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-email@domain.com
MAIL_PASSWORD=your-email-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@your-domain.com
MAIL_FROM_NAME="Insurance Notification System"
```

#### Google OAuth (Optional)
```env
GOOGLE_CLIENT_ID=your-google-client-id
GOOGLE_CLIENT_SECRET=your-google-client-secret
GOOGLE_REDIRECT_URL=https://your-domain.com/auth/google/callback
```

### 3. Database Setup

#### Option 1: External Database
- Use a managed MySQL service (AWS RDS, DigitalOcean, etc.)
- Update environment variables with external database credentials

#### Option 2: Coolify Database Service
- Create a MySQL service in Coolify
- Use the provided connection details in environment variables

### 4. Build Configuration

In Coolify dashboard:

1. **Build Settings**
   - Dockerfile: `Dockerfile.production`
   - Build Context: `.`

2. **Deployment Settings**
   - Port: `80`
   - Health Check: `http://localhost/health` (optional)

### 5. Domain Configuration

1. **Custom Domain**
   - Add your domain in Coolify
   - Update `APP_URL` environment variable
   - Configure SSL certificate

2. **Environment Variables Update**
   ```env
   APP_URL=https://your-domain.com
   ```

## 🔧 Post-Deployment Steps

### 1. Database Migration

After successful deployment, run migrations:

```bash
# In Coolify terminal or SSH
php artisan migrate --force
```

### 2. Storage Link

```bash
php artisan storage:link
```

### 3. Cache Optimization

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## 📁 File Structure for Deployment

```
├── Dockerfile.production     # Production Docker configuration
├── docker-compose.yml        # Local development setup
├── coolify.yaml             # Coolify-specific configuration
├── deploy.sh                # Deployment script
├── .env.example             # Environment template
├── .gitignore               # Git ignore rules
├── README.md                # Project documentation
└── DEPLOYMENT.md            # This deployment guide
```

## 🔍 Troubleshooting

### Common Issues

1. **Build Failures**
   - Check Dockerfile syntax
   - Verify all dependencies are available
   - Check build logs in Coolify

2. **Database Connection Issues**
   - Verify database credentials
   - Check network connectivity
   - Ensure database service is running

3. **Permission Issues**
   - Check file permissions in storage directory
   - Verify web server user permissions

4. **Environment Variables**
   - Ensure all required variables are set
   - Check variable names and values
   - Verify no trailing spaces

### Logs

Access logs in Coolify dashboard:
- Application logs
- Build logs
- Deployment logs

## 🚀 Production Checklist

- [ ] Environment variables configured
- [ ] Database connected and migrated
- [ ] SSL certificate configured
- [ ] Domain properly configured
- [ ] File permissions set correctly
- [ ] Cache optimized
- [ ] Error logging configured
- [ ] Backup strategy implemented
- [ ] Monitoring setup

## 📞 Support

For deployment issues:
1. Check Coolify documentation
2. Review application logs
3. Verify environment configuration
4. Contact support team if needed
