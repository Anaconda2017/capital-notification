# Insurance Notification System

A comprehensive Laravel-based insurance management system that handles various types of insurance claims and notifications.

## Features

- **Multi-language Support**: Arabic and English localization
- **Insurance Types**: Motor, Medical, Building, and Job insurance
- **Claims Management**: Complete claim processing system with comments
- **Lead Management**: Lead tracking and conversion
- **User Management**: Admin and client user roles
- **File Uploads**: Document and image upload capabilities
- **Email Notifications**: Automated notification system
- **Social Authentication**: Google OAuth integration
- **Responsive Design**: Mobile-friendly interface

## Technology Stack

- **Backend**: Laravel 5.8
- **Database**: MySQL
- **Frontend**: Blade Templates, CSS, JavaScript
- **Image Processing**: Intervention Image
- **Localization**: Laravel Localization
- **Social Auth**: Laravel Socialite
- **Data Tables**: Yajra DataTables

## Requirements

- PHP >= 7.1.3
- MySQL >= 5.7
- Composer
- Node.js & NPM (for frontend assets)

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/insurance-notification.git
   cd insurance-notification
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure environment variables**
   Edit `.env` file with your database credentials and other settings:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=insurance_notification
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Database setup**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

6. **Storage link**
   ```bash
   php artisan storage:link
   ```

7. **Compile assets**
   ```bash
   npm run dev
   ```

## Deployment with Coolify

This project is configured for deployment with Coolify. The deployment configuration includes:

- **Dockerfile**: Optimized for production deployment
- **Docker Compose**: For local development and testing
- **Environment Variables**: Production-ready configuration template

### Coolify Deployment Steps

1. **Connect your GitHub repository** to Coolify
2. **Configure environment variables** in Coolify dashboard
3. **Set up database** (MySQL recommended)
4. **Deploy** using the provided Docker configuration

### Environment Variables for Production

Make sure to set these environment variables in your Coolify dashboard:

```env
APP_NAME="Insurance Notification System"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com
APP_KEY=your-generated-key

DB_CONNECTION=mysql
DB_HOST=your-db-host
DB_PORT=3306
DB_DATABASE=your-db-name
DB_USERNAME=your-db-user
DB_PASSWORD=your-db-password

MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-email
MAIL_PASSWORD=your-email-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@your-domain.com
MAIL_FROM_NAME="Insurance Notification System"
```

## Project Structure

```
├── app/
│   ├── Console/           # Artisan commands
│   ├── Exceptions/        # Exception handling
│   ├── Http/
│   │   ├── Controllers/   # Application controllers
│   │   ├── Middleware/    # HTTP middleware
│   │   └── Requests/      # Form request validation
│   └── Providers/         # Service providers
├── config/                # Configuration files
├── database/
│   ├── migrations/        # Database migrations
│   └── seeds/            # Database seeders
├── public/               # Web server document root
├── resources/
│   ├── views/            # Blade templates
│   └── lang/             # Language files
├── routes/               # Route definitions
└── storage/              # File storage
```

## API Endpoints

The system provides RESTful APIs for:

- **Insurance Requests**: Create and manage insurance requests
- **Claims**: Submit and track insurance claims
- **Leads**: Manage potential customers
- **Users**: User management and authentication

## Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Support

For support and questions, please contact the development team or create an issue in the repository.

## Changelog

### Version 1.0.0
- Initial release
- Multi-language support
- Insurance management system
- Claims processing
- User management
- File upload system