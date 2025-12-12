# Quick Installation Guide

## Prerequisites

- PHP 8.2 or higher
- Composer
- MySQL
- Node.js (optional, for asset compilation)

## Step-by-Step Installation

### 1. Navigate to Project Directory

```bash
cd laravel-admin-panel
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Environment Configuration

```bash
# Windows
copy .env.example .env

# Linux/Mac
cp .env.example .env
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Configure Database

Edit `.env` file and set your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_admin_panel
DB_USERNAME=root
DB_PASSWORD=
```

### 6. Create Database

Create a MySQL database named `laravel_admin_panel` (or your preferred name).

### 7. Run Migrations

```bash
php artisan migrate
```

### 8. Seed Admin User

```bash
php artisan db:seed
```

This creates:
- **Email:** admin@admin.com
- **Password:** password

### 9. Create Storage Link

```bash
php artisan storage:link
```

### 10. Start Server

```bash
php artisan serve
```

Visit: `http://localhost:8000`

## Default Login

- **URL:** http://localhost:8000/login
- **Email:** admin@admin.com
- **Password:** password

## Troubleshooting

### Permission Issues (Linux/Mac)

```bash
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

### Storage Link Already Exists

```bash
php artisan storage:link --force
```

### Clear Cache

```bash
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear
```

## Production Deployment

1. Set `APP_ENV=production` in `.env`
2. Set `APP_DEBUG=false` in `.env`
3. Change default admin password
4. Configure proper mail settings for password reset
5. Set up proper file permissions
6. Use HTTPS

---

**Note:** For password reset functionality to work, configure mail settings in `.env` file.

