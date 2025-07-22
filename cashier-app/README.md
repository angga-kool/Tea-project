# Laravel Cashier App

This is a simple cashier application built with Laravel 12 and Bootstrap 5.

## Requirements
- PHP 8+
- Composer
- Node.js (for asset building)

## Setup
```bash
composer install
php artisan migrate --seed
npm install && npm run build
php artisan serve
```

Default users:
- Admin: `admin@example.com` / `password`
- Cashier: `cashier@example.com` / `password`
